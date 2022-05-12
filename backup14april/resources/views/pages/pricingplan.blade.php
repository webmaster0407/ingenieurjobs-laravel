{{--
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
--}}
@extends('layouts.master')
@section('content')
<div class="container" id="pricing-table">
<div class="new-class"> <span><strong>Pricing</strong> job class</span> </div>
<div class="inner" id="pricing-inner"> <h2> <span class="title-3">Choose Right <span style="font-weight: bold;">Plan For Your</span></span> </h2> </div>
  <div class="row flex-items-xs-middle flex-items-xs-center" id="pricing-table-inner">

    <!-- Table #1  -->
    <div class="col-xs-12 col-lg-4">
      <div class="card text-xs-center">
        <div class="card-header" id="card-head-one">
          <div class="new-class"> <span><strong> Pricing </strong>  &nbsp;ingenieurjobs </span> </div>
        </div>
        <div class="card-block">
          <h4 class="card-title"> 
            PURE
          </h4>
          <Span>Free for two months</span>
         <div class="get-btn">
		 <a href="#" class="btn btn-gradient mt-2">Get Started <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
		</div>
        </div>
		
      </div>
    </div>

    <!-- Table #1  -->
    <div class="col-xs-12 col-lg-4">
      <div class="card text-xs-center" id="card-two-inner">
        <div class="card-header" id="card-head-two">
          <div class="new-class"> <span><strong> Pricing </strong>  &nbsp;ingenieurjobs </span> </div>
        </div>
        <div class="card-block">
          <h4 class="card-title"> 
            PLUS...<span>Come later</span>
          </h4>
          
          
        </div>
      </div>
    </div>

    <!-- Table #1  -->
    <div class="col-xs-12 col-lg-4">
      <div class="card text-xs-center">
        <div class="card-header" id="card-head-three">
          <div class="new-class"> <span><strong> Pricing </strong>  &nbsp;ingenieurjobs </span> </div>
        </div>
        <div class="card-block">
          <h4 class="card-title"> 
            PRIME...<span>Come later</span>
          </h4>
         
    
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
@section('after_scripts')
@endsection