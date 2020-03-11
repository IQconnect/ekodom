@php
	$realisation = $data['cat'];
	$site = $data['pozycja'];
	$title = $data['title'];
	$suptitle = $data['suptitle'];
@endphp
<section class="realisation">
	<div class="container">
		<div class="@if ($site == 'tak') col-12 col-md-12 col-lg-4 content-block content-block--lowbottom  @endif">
			<h2 class="@if ($site == 'tak') content-block__header  heading title @endif">
				{{ $title }}
				<span class="heading subheader">
				{{ $suptitle }}
				</span>
			</h2>
		</div>
		<div class="realisation__menu">
			@foreach ( $realisation as $elem )
				@php
					$id = $elem -> ID;
					$cat_title = get_the_title($id);
					$cat_link = get_permalink( $elem );
					$image= get_field('cat_image', $id);
				@endphp

				<div class="realisation__cat">
					@if ($cat_title)
					<a href="{{ $cat_link }}">
						@if($image)
							<div class="realisation__box">
								<img class="realisation__image" src="{{ $image['url'] }}" alt="{{ $image ['alt'] }}">
							</div>
						@endif
						<div class="realisation__button  realisation__button--center">
							{{ $cat_title }}
						</div>
					</a>
					@endif
				</div>
			@endforeach
		</div>
	</div>
</section>
