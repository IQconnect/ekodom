@php
  $phone = get_field('phone','options');
  $mail = get_field('mail','options');

  $sm = get_field('icons','options');
@endphp
<section class="infobar">
  <div class="container">
    <div class="row">
      <div class="infobar__wrapper col-12">
        <ul class="infobar__list">
          @if($phone)
          <li class="infobar__elem">
            <a href="tel:{{ str_replace(' ', '',$phone) }}" class="text secoundary-body">
              <span class="infobar__icon fas fa-phone"></span>
              {{ $phone }}
            </a>
          </li>
          @endif
          @if($phone)
          <li class="infobar__elem">
            <a href="mailto:{{ $mail }}" class="text secoundary-body">
              <span class="infobar__icon fas fa-envelope"></span>
                {{ $mail }}
            </a>
          </li>
          @endif
        </ul>
        @if($sm)
        <ul class="infobar__list">
        @foreach ($sm as $link)
          <li class="infobar__elem">
            <a href="{{ $link['link'] }}" class="text secoundary-body header__facebook">
              <span class="infobar__icon infobar__icon--sm {{ $link['icon'] }}"></span>
            </a>
          </li>
        @endforeach
        </ul>
        @endif
      </div>
    </div>
  </div>
</section>

</div>
<header class="header" header>
  <div class="container">
    <div class="row">
      <a class="header__brand col-12 col-sm-2 col-xl-4" href="{{ home_url('/') }}">
        <img src="{{  get_field('logo', 'options')['url'] }}" alt="Jartech">
      </a>
      <button class="header__hamburger hamburger" data-toggle-menu>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </button>
      <nav class="header__nav col-12 col-sm-10 col-xl-8" data-nav>
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'header__menu']) !!}
        @endif
      </nav>
    </div>
  </div>
</header>
