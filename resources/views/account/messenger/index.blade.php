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
	@includeFirst([config('larapen.core.customizedViewPath') . 'common.spacer', 'common.spacer'])
    <div class="main-container">
        <div class="container">
            <div class="row">
                
                <div class="col-md-3 page-sidebar">
                    @includeFirst([config('larapen.core.customizedViewPath') . 'account.inc.sidebar', 'account.inc.sidebar'])
                </div>
                <!--/.page-sidebar-->
                
                <div class="col-md-9 page-content">
                    <div class="inner-box">
                        <h2 class="title-2">
                            <i class="fas fa-envelope"></i> {{ t('inbox') }}
                        </h2>
                        
                        @if (session()->has('flash_notification'))
                            <div class="row">
                                <div class="col-xl-12">
                                    @include('flash::message')
                                </div>
                            </div>
                        @endif
                        
                        <div id="successMsg" class="alert alert-success hide" role="alert"></div>
                        <div id="errorMsg" class="alert alert-danger hide" role="alert"></div>
                        
                        <div class="inbox-wrapper">
                            <div class="row">
                                <div class="col-md-3 col-lg-2">
                                    <div class="btn-group hidden-sm"></div>
                                </div>
                                
                                <div class="col-md-9 col-lg-10">
                                    
                                    <div class="btn-group mobile-only-inline">
                                        <a href="#" class="btn btn-primary text-uppercase">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </div>
                                    <div class="btn-group hidden-sm">
                                        <button type="button" class="btn btn-secondary pb-0">
                                            <div class="form-check p-0 m-0">
                                                <input type="checkbox" id="form-check-all">
                                            </div>
                                        </button>
                                        
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown">
                                            <span class="dropdown-menu-sort-selected">{{ t('action') }}</span>
                                        </button>
    
                                        {!! csrf_field() !!}
                                        <ul id="groupedAction" class="dropdown-menu dropdown-menu-sort" role="menu">
                                            <li class="dropdown-item">
                                                <a href="{{ url('account/messages/actions?type=markAsRead') }}">
                                                    {{  t('Mark as read') }}
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="{{ url('account/messages/actions?type=markAsUnread') }}">
                                                    {{ t('Mark as unread') }}
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="{{ url('account/messages/actions?type=markAsImportant') }}">
                                                    {{ t('Mark as important') }}
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="{{ url('account/messages/actions?type=markAsNotImportant') }}">
                                                    {{ t('Mark as not important') }}
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="{{ url('account/messages/delete') }}">
                                                    {{ t('Delete') }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <button type="button" id="btnRefresh" class="btn btn-secondary hidden-sm" data-bs-toggle="tooltip" title="{{ t('refresh') }}">
                                        <span class="fas fa-sync-alt"></span>
                                    </button>
                                    
                                    <div class="btn-group hidden-sm">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown">
                                            {{ t('more') }}
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="dropdown-item">
                                                <a class="markAllAsRead">{{ t('Mark all as read') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <div class="message-tool-bar-right float-end" id="linksThreads">
                                        
                                        @include('account.messenger.threads.links')
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <hr class="border-0 bg-secondary">
                            
                            <div class="row">
                                @include('account.messenger.partials.sidebar')
                                
                                <div class="col-md-9 col-lg-10">
                                    <div class="message-list">
                                        <div id="listThreads">
                                            
                                            @include('account.messenger.threads.threads')
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection

@section('after_styles')
    <style>
        {{-- Center image related to the parent element --}}
        .loading-img {
            position: absolute;
            width: 32px;
            height: 32px;
            left: 50%;
            top: 50%;
            margin-left: -16px;
            margin-right: -16px;
            z-index: 100000;
        }
    </style>
@endsection

@section('after_scripts')
	<script>
        var loadingImage = '{{ url('images/loading.gif') }}';
        var loadingErrorMessage = '{{ t('Threads could not be loaded') }}';
        var actionText = '{{ t('action') }}';
        var actionErrorMessage = '{{ t('This action could not be done') }}';
        var title = {
            'seen': '{{ t('Mark as read') }}',
            'notSeen': '{{ t('Mark as unread') }}',
            'important': '{{ t('Mark as important') }}',
            'notImportant': '{{ t('Mark as not important') }}',
        };
	</script>
    <script src="{{ url('assets/js/app/messenger.js') }}" type="text/javascript"></script>
@endsection