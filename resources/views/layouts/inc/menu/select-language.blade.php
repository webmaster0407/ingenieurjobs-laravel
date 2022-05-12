<?php $supportedLanguages = getSupportedLanguages(); ?>
@if (is_array($supportedLanguages) && count($supportedLanguages) > 1)
	{{-- Language Selector --}}
	<li class="nav-item dropdown lang-menu no-arrow open-on-hover">
		<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown" id="langDropdown">
			<span class="language-select"><i class="bi bi-flag"> Select Language</i></span>
			<!--i class="bi bi-chevron-down"></i-->
		</a>
		<ul id="langMenuDropdown"
			class="dropdown-menu dropdown-menu-end user-menu shadow-sm"
			role="menu"
			aria-labelledby="langDropdown"
		>
			@foreach($supportedLanguages as $langCode => $lang)
				<li class="dropdown-item{{ (strtolower($langCode) == strtolower(config('app.locale'))) ? ' active' : '' }}">
					<a href="{{ url('lang/' . $langCode) }}" tabindex="-1" rel="alternate" hreflang="{{ $langCode }}" title="{{ $lang['name'] }}">
						<?php
							$langFlag = (
								config('settings.app.show_languages_flags')
								&& isset($lang, $lang['flag'])
								&& is_string($lang['flag'])
								&& !empty(trim($lang['flag']))
							)
								? '<i class="flag-icon ' . $lang['flag'] . '"></i>&nbsp;'
								: '';
						?>
						{!! $langFlag. $lang['native'] !!}
					</a>
				</li>
			@endforeach
		</ul>
	</li>
@endif