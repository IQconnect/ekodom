@php
$categories = $data['menubutton'];
@endphp

<section class="menubar">
    <div class="container">
		<div class="menubar__wrapper">
		@foreach ($categories as $cat )
		@php
 					$id = $cat -> ID;
 					$cat_title =get_the_title($id);
                    $cat_link = get_permalink( $cat );
		@endphp
		@if($cat_link)
		<a href="{!! $cat_link !!}" class="button button--primary menubar__button">
			{{$cat_title }}
		</a>
		@endif
		@endforeach
	</div>
	</div>
</section>
