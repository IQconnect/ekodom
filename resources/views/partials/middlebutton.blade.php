@php
$button_link = $data['middle_url'];
$button_title = $data['button_title'];
@endphp

<section class="middlebutton">
    <div class="container">
		<div class="middlebutton__wrapper">
			<a href="{!! $button_link['url'] !!}" class="button button--primary">
				{!! $button_title !!}
			</a>
		</div>
	</div>
</section>
