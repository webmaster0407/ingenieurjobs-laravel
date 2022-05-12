<?php
/**
 * JobClass - Job Board Web Application
 * Copyright (c) BeDigit. All Rights Reserved
 *
 * Website: https://laraclassifier.com/jobclass
 *
 * LICENSE
 * -------
 * This software is furnished under a license and may be used and copied
 * only in accordance with the terms of such license and with the inclusion
 * of the above copyright notice. If you Purchased from CodeCanyon,
 * Please read the full License from here - http://codecanyon.net/licenses/standard
 */

namespace App\Http\Controllers\Admin;

use App\Helpers\DBTool;
use App\Http\Controllers\Web\Install\Traits\Install\CheckerTrait;
use App\Http\Controllers\Admin\Panel\PanelController;

class SystemController extends PanelController
{
	use CheckerTrait;
	
	public function systemInfo()
	{
		// System
		$system = [];
		
		// PHP-CLI Version Info
		$phpBinaryVersion = $this->getPhpBinaryVersion();
		if (empty($phpBinaryVersion)) {
			$requiredPhpVersion = $this->getComposerRequiredPhpVersion();
			$phpBinaryVersion = '';
			$phpBinaryVersion .= "<span class='font-weight-bolder'>IMPORTANT:</span> ";
			$phpBinaryVersion .= "You have to check your server's <code>PHP-cli</code> version manually. ";
			$phpBinaryVersion .= "This need to be version <code>$requiredPhpVersion or greater</code> to allow you to run the cron job commands. ";
			$phpBinaryVersion .= "<a href='https://stackoverflow.com/a/9315749/9869030' target='_blank'>More Info</a>";
			$phpBinaryVersion = '<a href="javascript: void(0);" data-bs-toggle="popover" data-html="true" title="PHP-CLI" data-bs-content="' . $phpBinaryVersion . '">Action Required</a>';
		}
		
		$system[] = [
			'name'  => "User-Agent",
			'value' => request()->server->get('HTTP_USER_AGENT'),
		];
		$system[] = [
			'name'  => "Server Software",
			'value' => request()->server->get('SERVER_SOFTWARE'),
		];
		$system[] = [
			'name'  => "Document Root",
			'value' => relativeAppPath(request()->server->get('DOCUMENT_ROOT')),
		];
		$system[] = [
			'name'  => "PHP (CGI/FPM) version",
			'value' => PHP_VERSION,
		];
		$system[] = [
			'name'  => 'PHP-CLI version',
			'value' => $phpBinaryVersion,
		];
		$system[] = [
			'name'  => "MySQL Server version",
			'value' => DBTool::getMySqlFullVersion(),
		];
		
		// Get Components & Permissions
		$components = array_merge($this->getComponents(), $this->getAdvancedComponents());
		$permissions = $this->getPermissions();
		
		$data = [
			'system'      => $system,
			'components'  => $components,
			'permissions' => $permissions,
		];
		
		$data['title'] = trans('admin.system_info');
		
		return view('admin.system', $data);
	}
	
	/**
	 * @return array[]
	 */
	protected function getAdvancedComponents()
	{
		$components = [];
		
		// Database version
		$databaseCurrentVersion = DBTool::getMySqlVersion();
		if (!DBTool::isMariaDB()) {
			$databaseMinVersion = '5.6';
			$databaseRecommendedVersion = '5.7';
			$databaseIsMySqlDeprecatedVersion = (
				(version_compare($databaseCurrentVersion, $databaseMinVersion) >= 0)
				&& (version_compare($databaseCurrentVersion, $databaseMinVersion . '.9') <= 0)
			);
			$databaseIsMySqlRightVersion = DBTool::isMySqlMinVersion($databaseRecommendedVersion);
			$components[] = [
				'type'     => 'component',
				'name'     => 'Database Server Version',
				'required' => true,
				'check'    => ($databaseIsMySqlDeprecatedVersion || $databaseIsMySqlRightVersion),
				'note'     => 'The minimum MySQL version required is: <code>' . $databaseMinVersion . '</code>, '
					. 'version <code>' . $databaseRecommendedVersion . '</code> or greater is recommended.',
				'ok'       => $databaseIsMySqlDeprecatedVersion
					? 'MySQL version <code>' . $databaseCurrentVersion . '</code> is not recommended. '
					. 'Upgrade your database to version <code>' . $databaseRecommendedVersion . '</code> or greater.'
					: 'MySQL version <code>' . $databaseCurrentVersion . '</code> is valid.',
			];
		} else {
			$databaseMinVersion = '10.2.3';
			$databaseIsMariaDbRightVersion = (DBTool::isMySqlMinVersion($databaseMinVersion));
			$components[] = [
				'type'     => 'component',
				'name'     => 'Database Server Version',
				'required' => true,
				'check'    => ($databaseIsMariaDbRightVersion),
				'note'     => 'MariaDB version <code>' . $databaseMinVersion . '</code> or greater is required.',
				'ok'       => 'MySQL version <code>' . $databaseCurrentVersion . '</code> is valid.',
			];
		}
		
		// Server (Apache or Nginx) encoding
		$validCharset = 'UTF-8';
		$currentCharset = ini_get('default_charset');
		$components[] = [
			'type'     => 'component',
			'name'     => 'Server default_charset',
			'required' => false,
			'check'    => (strtolower(ini_get('default_charset')) == 'utf-8'),
			'note'     => "The server <code>default_charset</code> is: <code>$currentCharset</code>. <code>$validCharset</code> is required.",
			'ok'       => "The server <code>default_charset</code> (<code>$validCharset</code>) is valid.",
		];
		
		/*
		// This is no longer to be considered
		// Database server character set & collation
		$defaultConnection = config('database.default');
		$databaseCharset = config("database.connections.{$defaultConnection}.charset");
		$databaseCollation = config("database.connections.{$defaultConnection}.collation");
		if (!in_array($databaseCharset, (array)config('larapen.core.database.charset.recommended'))) {
			$databaseCharset = config('larapen.core.database.charset.default', 'utf8mb4');
		}
		if (!in_array($databaseCollation, (array)config('larapen.core.database.collation.recommended'))) {
			$databaseCollation = config('larapen.core.database.collation.default', 'utf8mb4_unicode_ci');
		}
		
		$components[] = [
			'type'     => 'component',
			'name'     => 'Database Server Character Set & Collation',
			'required' => false,
			'check'    => DBTool::isValidCharacterSet(),
			'note'     => "The database server variables: "
				. "<span class=\"font-weight-bolder\">DEFAULT_CHARACTER_SET_NAME</span>, "
				. "<span class=\"font-weight-bolder\">character_set_client</span>, "
				. "<span class=\"font-weight-bolder\">character_set_connection</span>, "
				. "<span class=\"font-weight-bolder\">character_set_database</span> "
				. "and <span class=\"font-weight-bolder\">character_set_results</span> "
				. "must to be <code>$databaseCharset</code>. "
				. "<br>And the variables "
				. "<span class=\"font-weight-bolder\">DEFAULT_COLLATION_NAME</span>, "
				. "<span class=\"font-weight-bolder\">collation_connection</span> "
				. "and <span class=\"font-weight-bolder\">collation_database</span> "
				. "must to be <code>$databaseCollation</code>.",
			'ok'       => "The database server character set (<code>$databaseCharset</code>) and collation (<code>$databaseCollation</code>) are valid.",
		];
		*/
		
		return $components;
	}
}
