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

namespace App\Helpers\Search\Traits\Relations;

use App\Models\Package;
use App\Models\Payment;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

trait PaymentRelation
{
	protected function setPaymentRelation()
	{
		if (!(isset($this->posts) && isset($this->postsTable) && isset($this->groupBy))) {
			dd('Fatal Error: Payment relation cannot be applied.');
		}
		
		// latestPayment
		$this->posts->with('latestPayment', function ($query) {
			$query->with('package');
		});
		
		// latestPayment (Can be used in orderBy)
		$tablesPrefix = DB::getTablePrefix();
		
		$select = [];
		$select[] = $tablesPrefix . 'tPackage.lft';
		if (env('DB_MODE_STRICT')) {
			$this->groupBy[] = 'tPackage.lft';
		}
		
		$this->posts->addSelect(DB::raw(implode(', ', $select)));
		
		$paymentsTable = (new Payment())->getTable();
		$packagesTable = (new Package())->getTable();
		
		$tmpLatestPayment = DB::table($paymentsTable, 'lp')
			->select(DB::raw('MAX(' . $tablesPrefix . 'lp.id) as lpId'), 'lp.post_id')
			->where('lp.active', 1)
			->groupBy('lp.post_id');
		
		$this->posts->leftJoinSub($tmpLatestPayment, 'tmpLp', function ($join) {
			$join->on('tmpLp.post_id', '=', $this->postsTable . '.id')->where('featured', 1);
		});
		$this->posts->leftJoin($paymentsTable . ' as latestPayment', 'latestPayment.id', '=', 'tmpLp.lpId');
		$this->posts->leftJoin($packagesTable . ' as tPackage', 'tPackage.id', '=', 'latestPayment.package_id');
		
		// Priority to the Premium Ads
		// Push the Package Position order onto the beginning of an array
		// Check out the orderBy items positions in the OrderBy file
		$this->orderBy = Arr::prepend($this->orderBy, 'tPackage.lft DESC');
	}
}
