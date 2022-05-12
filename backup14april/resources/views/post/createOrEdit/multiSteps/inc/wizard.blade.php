@if (isset($wizardMenu) && !empty($wizardMenu))
<div id="stepWizard" class="container">
    <div class="row">
        <div class="col-12">
            <section>
                <div class="wizard">
                    
                    <ul class="nav nav-wizard">
                        @foreach($wizardMenu as $menu)
                            @continue(!$menu['condition'])
                            <li class="{{ $menu['class'] }}">
                                @if (!empty($menu['url']))
                                    <a href="{{ $menu['url'] }}">{{ $menu['name'] }}</a>
                                @else
                                    <a>{{ $menu['name'] }}</a>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                    
                </div>
            </section>
        </div>
    </div>
</div>
@endif

@section('after_styles')
    @parent
    @if (config('lang.direction') == 'rtl')
        <link href="{{ url('assets/css/rtl/wizard.css') }}" rel="stylesheet">
    @else
        <link href="{{ url('assets/css/wizard.css') }}" rel="stylesheet">
    @endif
@endsection
@section('after_scripts')
    @parent
@endsection