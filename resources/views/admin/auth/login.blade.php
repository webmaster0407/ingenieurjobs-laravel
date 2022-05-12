@extends('admin.layouts.auth')

@section('content')
	
	@if (isset($errors) && $errors->any())
        <div class="alert alert-danger ms-0 me-0 mb-5">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
	@endif
    
    @if (session('status'))
        <div class="alert alert-success ms-0 me-0 mb-5">
            {{ session('status') }}
        </div>
    @endif
    
    <div id="loginform">
        
        <div class="logo">
            <h3 class="box-title mb-3">{{ trans('admin.login') }}</h3>
        </div>
        
        {{-- Form --}}
        <div class="row">
            <div class="col-12">
                
                <form class="form-horizontal mt-3" id="loginform" action="{{ admin_url('login') }}" method="post">
                    {!! csrf_field() !!}
                    
                    {{-- login/email --}}
                    <div class="row mb-3{{ $errors->has('login') ? ' has-danger' : '' }}">
                        <div class="">
                            <input class="form-control{{ $errors->has('login') ? ' form-control-danger' : '' }}"
                                   type="text"
                                   name="login"
                                   value="{{ old('login') }}"
                                   placeholder="{{ trans('admin.email_address') }}"
                            >
                        </div>
    
                        @if ($errors->has('login'))
                            <div class="invalid-feedback">{{ $errors->first('login') }}</div>
                        @endif
                    </div>
                    
                    {{-- password --}}
                    <div class="row mb-3{{ $errors->has('password') ? ' has-danger' : '' }}">
                        <div class="">
                            <input class="form-control{{ $errors->has('email') ? ' form-control-danger' : '' }}"
                                   type="password"
                                   name="password"
                                   placeholder="{{ trans('admin.password') }}"
                            >
                        </div>
    
                        @if ($errors->has('password'))
                            <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                        @endif
                    </div>
                    
                    {{-- captcha --}}
                    @include('layouts.inc.tools.captcha')
                    
                    {{-- remember me & password recover --}}
                    <div class="row mb-3">
                        <div class="d-flex">
                            <div class="checkbox checkbox-info pt-0">
                                <input type="checkbox" name="remember_me" id="rememberMe" class="material-inputs chk-col-indigo">
                                <label for="rememberMe"> {{ trans('admin.remember_me') }} </label>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0)" id="to-recover" class="text-muted float-end">
                                    <i class="fa fa-lock me-1"></i> {{ trans('admin.forgot_your_password') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    {{-- button --}}
                    <div class="row mb-3 text-center mt-4">
                        <div class="col-12 d-grid">
                            <button class="btn btn-primary btn-lg waves-effect waves-light" type="submit">{{ trans('admin.login') }}</button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
        
    </div>
    
    @include('admin.auth.passwords.inc.recover-form')
    
@endsection
