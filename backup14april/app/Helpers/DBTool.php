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

namespace App\Helpers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;

class DBTool
{
	/**
	 * Get PDO Connexion
	 *
	 * @param array $database
	 * @return \PDO
	 */
	public static function getPDOConnexion(array $database = []): \PDO
	{
		// Retrieve Database Parameters from the /.env file,
		// If they are not set during the function call.
		if (empty($database)) {
			$database = DBTool::getDatabaseConnectionInfo();
		}
		
		// Database Parameters
		$driver = $database['driver'] ?? 'mysql';
		$host = $database['host'] ?? '';
		$port = $database['port'] ?? '';
		$username = $database['username'] ?? '';
		$password = $database['password'] ?? '';
		$database = $database['database'] ?? '';
		$charset = $database['charset'] ?? 'utf8';
		$socket = $database['socket'] ?? '';
		$options = $database['options'] ?? [
				\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
				\PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
				\PDO::ATTR_EMULATE_PREPARES   => true,
				\PDO::ATTR_CURSOR             => \PDO::CURSOR_FWDONLY,
			];
		
		try {
			// Get the Connexion's DSN
			if (empty($socket)) {
				$dsn = $driver . ':host=' . $host . ';port=' . $port . ';dbname=' . $database . ';charset=' . $charset;
			} else {
				$dsn = $driver . ':unix_socket=' . $database['socket'] . ';dbname=' . $database . ';charset=' . $charset;
			}
			
			// Connect to the Database Server
			return new \PDO($dsn, $username, $password, $options);
			
		} catch (\PDOException $e) {
			$error = "<pre><strong>ERROR:</strong> Can't connect to the database server. " . $e->getMessage() . "</pre>";
		} catch (\Throwable $e) {
			$error = "<pre><strong>ERROR:</strong> The database connection failed. " . $e->getMessage() . "</pre>";
		}
		
		die($error);
	}
	
	/**
	 * Database Connection Info
	 *
	 * @return array
	 */
	public static function getDatabaseConnectionInfo(): array
	{
		$database = [];
		
		$config = DBTool::getLaravelDatabaseConfig();
		$defaultDatabase = $config['connections'][$config['default']];
		
		// Database Parameters
		$database['driver'] = $defaultDatabase['driver'];
		$database['host'] = $defaultDatabase['host'];
		$database['port'] = (int)$defaultDatabase['port'];
		$database['socket'] = $defaultDatabase['unix_socket'];
		$database['username'] = $defaultDatabase['username'];
		$database['password'] = $defaultDatabase['password'];
		$database['database'] = $defaultDatabase['database'];
		$database['charset'] = $defaultDatabase['charset'];
		$database['options'] = [
			\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
			\PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
			\PDO::ATTR_EMULATE_PREPARES   => true,
			\PDO::ATTR_CURSOR             => \PDO::CURSOR_FWDONLY,
		];
		
		return $database;
	}
	
	/**
	 * @return array
	 */
	public static function getLaravelDatabaseConfig(): array
	{
		return (array)include realpath(__DIR__ . '/../../config/database.php');
	}
	
	/**
	 * Get full table name by adding the DB prefix
	 *
	 * @param string $name
	 * @return string
	 */
	public static function rawTable(string $name): string
	{
		$config = DBTool::getLaravelDatabaseConfig();
		$defaultDatabase = $config['connections'][$config['default']];
		$databasePrefix = $defaultDatabase['prefix'];
		
		return $databasePrefix . $name;
	}
	
	/**
	 * Close PDO Connexion
	 *
	 * @param $pdo
	 */
	public static function closePDOConnexion(&$pdo)
	{
		$pdo = null;
	}
	
	/**
	 * Get full table name by adding the DB prefix
	 *
	 * @param string $name
	 * @return string
	 */
	public static function table(string $name): string
	{
		return DB::getTablePrefix() . $name;
	}
	
	/**
	 * Quote a value with apostrophe to inject to an SQL statement
	 *
	 * @param $value
	 * @return mixed
	 */
	public static function quote($value)
	{
		return DB::getPdo()->quote($value);
	}
	
	/**
	 * Check if a table exists in the current database (Using PDO)
	 *
	 * @param \PDO $pdo
	 * @param string $table
	 * @param string|null $tablesPrefix
	 * @return bool
	 */
	public static function tableExists(\PDO $pdo, string $table, string $tablesPrefix = null): bool
	{
		// Try a select statement against the table
		// Run it in try/catch in case PDO is in ERRMODE_EXCEPTION.
		try {
			if (!empty($tablesPrefix)) {
				$result = $pdo->query('SELECT 1 FROM ' . $tablesPrefix . $table . ' LIMIT 1');
			} else {
				$result = $pdo->query('SELECT 1 FROM ' . $table . ' LIMIT 1');
			}
		} catch (\Throwable $e) {
			// We got an exception == table not found
			return false;
		}
		
		// Result is either boolean FALSE (no table found) or PDOStatement Object (table found)
		return $result !== false;
	}
	
	/**
	 * Get the app database's tables (By using PDO)
	 *
	 * @param \PDO $pdo
	 * @param string $database
	 * @param string|null $tablesPrefix
	 * @return array
	 */
	public static function getRawDatabaseTables(\PDO $pdo, string $database, string $tablesPrefix = null): array
	{
		$tables = [];
		
		try {
			$sql = 'SELECT GROUP_CONCAT(table_name) AS table_names
					FROM information_schema.tables
					WHERE table_schema = "' . $database . '"';
			if (!empty($tablesPrefix)) {
				$sql = $sql . ' AND table_name LIKE "' . $tablesPrefix . '%"';
			}
			$query = $pdo->query($sql);
			$obj = $query->fetch();
			
			if (isset($obj->table_names)) {
				$tables = array_merge($tables, explode(',', $obj->table_names));
			}
		} catch (\Throwable $e) {
			print_r($e->getMessage());
			exit();
		}
		
		return $tables;
	}
	
	/**
	 * Get the app database's tables (Using Laravel)
	 *
	 * @param string|null $tablesPrefix
	 * @return array
	 */
	public static function getDatabaseTables(string $tablesPrefix = null): array
	{
		$tables = Schema::getConnection()->getDoctrineSchemaManager()->listTableNames();
		$tables = collect($tables)->filter(function ($table, $key) use ($tablesPrefix) {
			return (!empty($tablesPrefix)) ? starts_with($table, $tablesPrefix) : $table;
		});
		
		return $tables->toArray();
	}
	
	/**
	 * Get SQL combined with bindings values
	 *
	 * @param string $sql
	 * @param array $bindings
	 * @return string
	 */
	public static function getRealSql(string $sql, array $bindings = []): string
	{
		$sql = str_replace(['?'], ["'%s'"], $sql);
		$sql = vsprintf($sql, $bindings);
		
		return $sql;
	}
	
	/**
	 * Get the MySQL full version
	 *
	 * @param \PDO|null $pdo
	 * @return int|mixed
	 */
	public static function getMySqlFullVersion(\PDO $pdo = null)
	{
		$version = 0;
		
		try {
			if (empty($pdo)) {
				$pdo = DB::connection()->getPdo();
			}
			
			if ($pdo instanceof \PDO) {
				$version = $pdo->query('SELECT VERSION()')->fetchColumn();
			}
		} catch (\Throwable $e) {
		}
		
		return $version;
	}
	
	/**
	 * Get the MySQL version
	 *
	 * @param \PDO|null $pdo
	 * @return int|mixed
	 */
	public static function getMySqlVersion(\PDO $pdo = null)
	{
		$version = self::getMySqlFullVersion($pdo);
		
		$tmp = [];
		preg_match('/^[0-9\.]+/', $version, $tmp);
		if (isset($tmp[0])) {
			$version = $tmp[0];
		}
		
		return $version;
	}
	
	/**
	 * Check if the entered value is the MySQL minimal version
	 *
	 * @param $min
	 * @return bool
	 */
	public static function isMySqlMinVersion($min): bool
	{
		// Get the MySQL version
		$version = DBTool::getMySqlVersion();
		
		return (version_compare($version, $min) >= 0);
	}
	
	/**
	 * Check if the database is MariaDB
	 *
	 * @param \PDO|null $pdo
	 * @return bool
	 */
	public static function isMariaDB(\PDO $pdo = null): bool
	{
		$isMariaDB = false;
		
		$version = self::getMySqlFullVersion($pdo);
		
		// Check if DB is MariaDB
		if (preg_match('/(MariaDB)+/i', $version)) {
			$isMariaDB = true;
		}
		
		return $isMariaDB;
	}
	
	/**
	 * Import SQL File
	 *
	 * @param \PDO $pdo
	 * @param string $sqlFile
	 * @param string|null $tablePrefix
	 * @param string|null $InFilePath
	 * @return bool
	 */
	public static function importSqlFile(\PDO $pdo, string $sqlFile, string $tablePrefix = null, string $InFilePath = null): bool
	{
		try {
			
			// Enable LOAD LOCAL INFILE
			$pdo->setAttribute(\PDO::MYSQL_ATTR_LOCAL_INFILE, true);
			
			$errorDetect = false;
			
			// Temporary variable, used to store current query
			$tmpLine = '';
			
			// Read in entire file
			$lines = file($sqlFile);
			
			// Loop through each line
			foreach ($lines as $line) {
				// Skip it if it's a comment
				if (substr($line, 0, 2) == '--' || trim($line) == '') {
					continue;
				}
				
				// Read & replace prefix
				$line = str_replace(['<<prefix>>', '<<InFilePath>>'], [$tablePrefix, $InFilePath], $line);
				$line = str_replace(['__PREFIX__', '__INFILE_PATH__'], [$tablePrefix, $InFilePath], $line);
				
				// Add this line to the current segment
				$tmpLine .= $line;
				
				// If it has a semicolon at the end, it's the end of the query
				if (substr(trim($line), -1, 1) == ';') {
					try {
						// Perform the Query
						$pdo->exec($tmpLine);
					} catch (\PDOException $e) {
						echo "<br><pre>Error performing Query: '<strong>" . $tmpLine . "</strong>': " . $e->getMessage() . "</pre>\n";
						$errorDetect = true;
					}
					
					// Reset temp variable to empty
					$tmpLine = '';
				}
			}
			
			// Check if error is detected
			if ($errorDetect) {
				return false;
			}
			
		} catch (\Throwable $e) {
			echo "<br><pre>Exception => " . $e->getMessage() . "</pre>\n";
			
			return false;
		}
		
		return true;
	}
	
	/**
	 * Perform MySQL Database Backup
	 *
	 * @param \PDO $pdo
	 * @param string|array $tables
	 * @param string $filePath
	 * @return bool
	 */
	public static function backupDatabaseTables(\PDO $pdo, $tables = '*', string $filePath = '/'): bool
	{
		try {
			
			// Get all the tables
			if ($tables == '*') {
				$tables = [];
				$query = $pdo->query('SHOW TABLES');
				while ($row = $query->fetch_row()) {
					$tables[] = $row[0];
				}
			} else {
				$tables = is_array($tables) ? $tables : explode(',', $tables);
			}
			
			if (empty($tables)) {
				return false;
			}
			
			$out = '';
			
			// Loop through the tables
			foreach ($tables as $table) {
				$query = $pdo->query('SELECT * FROM ' . $table);
				$numColumns = $query->field_count;
				
				// Add DROP TABLE statement
				$out .= 'DROP TABLE ' . $table . ';' . "\n\n";
				
				// Add CREATE TABLE statement
				$query2 = $pdo->query('SHOW CREATE TABLE ' . $table);
				$row2 = $query2->fetch_row();
				$out .= $row2[1] . ';' . "\n\n";
				
				// Add INSERT INTO statements
				for ($i = 0; $i < $numColumns; $i++) {
					while ($row = $query->fetch_row()) {
						$out .= "INSERT INTO $table VALUES(";
						for ($j = 0; $j < $numColumns; $j++) {
							$row[$j] = addslashes($row[$j]);
							$row[$j] = preg_replace("/\n/us", "\\n", $row[$j]);
							if (isset($row[$j])) {
								$out .= '"' . $row[$j] . '"';
							} else {
								$out .= '""';
							}
							if ($j < ($numColumns - 1)) {
								$out .= ',';
							}
						}
						$out .= ');' . "\n";
					}
				}
				$out .= "\n\n\n";
			}
			
			// Save file
			File::put($filePath, $out);
			
		} catch (\Throwable $e) {
			echo "<br><pre>Exception => " . $e->getMessage() . "</pre>\n";
			
			return false;
		}
		
		return true;
	}
	
	/**
	 * Get App's Models files
	 *
	 * @return array
	 */
	public static function getAppModelsFiles(): array
	{
		$modelFiles = [];
		try {
			// Get all files available in the Models directory
			$files = array_filter(glob(app_path('Models') . DIRECTORY_SEPARATOR . '*.php'), 'is_file');
			
			if (!empty($files)) {
				foreach ($files as $filePath) {
					$table = self::getModelTableName($filePath);
					if (empty($table)) {
						continue;
					}
					
					$modelFiles[] = $filePath;
				}
			}
		} catch (\Throwable $e) {
		}
		
		return $modelFiles;
	}
	
	/**
	 * Get Model table name by parsing its file
	 *
	 * @param string $fileFullPath
	 * @param string|null $tablesPrefix
	 * @return mixed|string|null
	 */
	public static function getModelTableName(string $fileFullPath, string $tablesPrefix = null)
	{
		if (!file_exists($fileFullPath)) {
			return null;
		}
		
		$content = file_get_contents($fileFullPath);
		
		$tmp = [];
		preg_match('#\$table[^=]*=[^\']*\'([^\']+)\';#i', $content, $tmp);
		$table = (isset($tmp[1]) && !empty($tmp[1])) ? $tmp[1] : null;
		
		if (!empty($tablesPrefix) && !empty($table)) {
			$table = $tablesPrefix . $table;
		}
		
		return $table;
	}
	
	/**
	 * Convert table's columns from string to json
	 *
	 * @param string $tableName
	 * @param array $columns
	 * @param string $locale
	 */
	public static function convertTranslatableDataToJson(string $tableName, array $columns, string $locale = 'en')
	{
		if (count($columns) > 0) {
			foreach ($columns as $column) {
				$statement = 'CONCAT("{\"' . $locale . '\":\"", ' . $column . ', "\"}")';
				DB::table($tableName)
					->where($column, 'NOT LIKE', '%{%')
					->where($column, 'NOT LIKE', '%}%')
					->update([
						$column => DB::raw($statement),
					]);
			}
		}
	}
	
	/**
	 * @param \PDO|null $pdo
	 * @return bool
	 */
	public static function isValidCharacterSet(\PDO $pdo = null): bool
	{
		try {
			if (empty($pdo)) {
				$pdo = DB::connection()->getPdo();
			}
			
			$defaultConnection = config('database.default');
			$databaseCharset = config("database.connections.{$defaultConnection}.charset");
			$databaseCollation = config("database.connections.{$defaultConnection}.collation");
			if (!in_array($databaseCharset, (array)config('larapen.core.database.charset.recommended'))) {
				$databaseCharset = config('larapen.core.database.charset.default', 'utf8mb4');
			}
			if (!in_array($databaseCollation, (array)config('larapen.core.database.collation.recommended'))) {
				$databaseCollation = config('larapen.core.database.collation.default', 'utf8mb4_unicode_ci');
			}
			
			if ($pdo instanceof \PDO) {
				$databaseName = DB::connection()->getDatabaseName();
				$sql = "SELECT DEFAULT_CHARACTER_SET_NAME, DEFAULT_COLLATION_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$databaseName'";
				$query = $pdo->query($sql);
				$defaultCharacterSetAndCollation = $query->fetch(\PDO::FETCH_ASSOC);
				
				$sql = "SHOW VARIABLES LIKE 'character_set%'";
				$query = $pdo->query($sql);
				$characterSetVars = $query->fetchAll(\PDO::FETCH_ASSOC);
				if (is_array($characterSetVars) && count($characterSetVars) > 0) {
					$characterSetVars = collect($characterSetVars)->mapWithKeys(function ($item, $key) {
						return [$item['Variable_name'] => $item['Value']];
					})->toArray();
				}
				
				$sql = "SHOW VARIABLES LIKE 'collation%'";
				$query = $pdo->query($sql);
				$collationVars = $query->fetchAll(\PDO::FETCH_ASSOC);
				if (is_array($collationVars) && count($collationVars) > 0) {
					$collationVars = collect($collationVars)->mapWithKeys(function ($item, $key) {
						return [$item['Variable_name'] => $item['Value']];
					})->toArray();
				}
				
				if (
					isset(
						$defaultCharacterSetAndCollation['DEFAULT_CHARACTER_SET_NAME'],
						$characterSetVars['character_set_client'],
						$characterSetVars['character_set_connection'],
						$characterSetVars['character_set_database'],
						$characterSetVars['character_set_results'],
						$defaultCharacterSetAndCollation['DEFAULT_COLLATION_NAME'],
						$collationVars['collation_connection'],
						$collationVars['collation_database']
					)
				) {
					$isValidCharacterSet = (
						$defaultCharacterSetAndCollation['DEFAULT_CHARACTER_SET_NAME'] == $characterSetVars['character_set_client']
						&& $characterSetVars['character_set_client'] == $characterSetVars['character_set_connection']
						&& $characterSetVars['character_set_connection'] == $characterSetVars['character_set_database']
						&& $characterSetVars['character_set_database'] == $characterSetVars['character_set_results']
						&& $characterSetVars['character_set_results'] == $databaseCharset
					);
					
					$isValidCollation = (
						$defaultCharacterSetAndCollation['DEFAULT_COLLATION_NAME'] == $collationVars['collation_connection']
						&& $collationVars['collation_connection'] == $collationVars['collation_database']
						&& $collationVars['collation_database'] == $databaseCollation
					);
					
					return $isValidCharacterSet && $isValidCollation;
				}
			}
		} catch (\Throwable $e) {
			return false;
		}
		
		return false;
	}
}
