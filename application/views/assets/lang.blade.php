{{-- LANGUAGE CYCLE --}}

		<ul class="nav pull-right">
    		<li class="divider-vertical"></li>
		@foreach(Langtable::get_lang_params() as $key => $value)
		
		    @if(Session::get('lang') == $key)
			<li class="active">{{ HTML::link_to_route('lang', $value["text_lang"], array($key)) }}</li>
		    @else
			<li>{{ HTML::link_to_route('lang', $value["text_lang"], array($key)) }}</li>
		    @endif
		
		@endforeach
		</ul>
	
{{-- END LANGUAGE CYCLE --}}