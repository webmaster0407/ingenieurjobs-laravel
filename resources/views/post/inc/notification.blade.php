@if (isset($errors) and $errors->any())
    <div class="col-xl-12">
        <div class="alert alert-danger">
            <h5><strong>{{ t('oops_an_error_has_occurred') }}</strong></h5>
            <ul class="list list-check">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

@if (session()->has('flash_notification'))
    <div class="col-xl-12">
        <div class="row">
            <div class="col-xl-12">
                @include('flash::message')
            </div>
        </div>
    </div>
@endif