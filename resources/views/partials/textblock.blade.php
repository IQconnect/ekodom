@php
$title= $data['prodtitle'];
$suptitle= $data['prodsuptitle'];
$description = get_field('cat_content');
@endphp

<section class="textblock">
	<div class="container">
		<div class="textblock__wrapper">
			<h2 class="content-block__header heading title">
				{!! $title !!}
				<span class="heading subheader">
					{!! $suptitle !!}
				</span>
			</h2>
			<div class="content-block__content text body">
				{!! $description !!}
			</div>
		</div>
	</div>
</section>
