@extends('admin.layouts.auth')

@section('content')
    
    @if (isset($errors) && $errors->any())
        <div class="alert alert-danger ms-0 me-0 mb-5">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif
    
    <div id="recoverform">
        <div class="logo">
            <h3 class="fw-medium mb-3">{{ trans('admin.reset_password') }}</h3>
        </div>
        
        <div class="row">
            <div class="col-12">
                <form class="form-horizontal mt-3" action="{{ url('password/reset') }}" method="post">
                    {!! csrf_field() !!}
                    <input type="hidden" name="token" value="{{ $token }}">
                    
                    {{-- email --}}
                    <div class="row mb-3{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <div class="">
                            <input class="form-control{{ $errors->has('email') ? ' form-control-danger' : '' }}"
                                   type="text"
                                   name="email"
                                   value="{{ $email ?? old('email') }}"
                                   placeholder="{{ trans('admin.email_address') }}"
                            >
                        </div>
                        
                        @if ($errors->has('email'))
                            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                        @endif
                    </div>
                    
                    {{-- password --}}
                    <div class="row mb-3{{ $errors->has('password') ? ' has-danger' : '' }}">
                        <div class="">
                            <input class="form-control{{ $errors->has('password') ? ' form-control-danger' : '' }}"
                                   type="password"
                                   name="password"
                                   placeholder="{{ trans('admin.password') }}"
                            >
                        </div>
                        
                        @if ($errors->has('password'))
                            <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                        @endif
                    </div>
                    
                    {{-- confirm_password --}}
                    <div class="row mb-3{{ $errors->has('password_confirmation') ? ' has-danger' : '' }}">
                        <div class="">
                            <input class="form-control{{ $errors->has('password_confirmation') ? ' form-control-danger' : '' }}"
                                   type="password"
                                   name="confirm_password"
                                   placeholder="{{ trans('admin.confirm_password') }}"
                            >
                        </div>
                        
                        @if ($errors->has('password_confirmation'))
                            <div class="invalid-feedback">{{ $errors->first('password_confirmation') }}</div>
                        @endif
                    </div>
                    
                    {{-- captcha --}}
                    @include('layouts.inc.tools.captcha')
                    
                    {{-- remember me & password recover --}}
                    <div class="row mb-3">
                        <div class="d-flex">
                            <div class="ms-auto">
                                <a href="{{ admin_url('login') }}" id="to-login" class="text-muted float-end">
                                    <i class="fas fa-sign-in-alt me-1"></i> {{ trans('admin.login') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    {{-- button --}}
                    <div class="row mb-3 text-center mt-4">
                        <div class="col-12 d-grid">
                            <button class="btn btn-primary btn-lg waves-effect waves-light" type="submit">{{ trans('admin.reset_password') }}</button>
                        </div>
                    </div>
                    
                </form>
                
            </div>
        </div>
        
    </div>
    
@endsection
