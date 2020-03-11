@php
    $image = get_field('contact_image', 'options');
    $title = get_field('contact_title', 'options');
    $suptitle = get_field('contact_suptitle', 'options');
    $adres = get_field('adres','options');
    $phone = get_field('phone','options');
    $kom = get_field('kom','options');
    $mail = get_field('mail','options');
    $NIP = get_field('nip','options');
    $REGON = get_field('regon','options');
@endphp

<section class="text-img text-img--nobot">
    <div class="container-fluid">
        <div class="row text-img__wrapper">
            <div class="col-12 col-md-12 col-lg-6 text-img__map-wrapper">
                {!! do_shortcode('[google_map_easy id="1"]') !!}
            </div>
            <div class="col-12 col-md-12 col-lg-6 text-img__content text-img__content--has-bg content-block">
                <img class="text-img__image text-img__image--bg" src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
                <h2 class="content-block__header heading title">
                    {{ $title }}
                    <span class="heading subheader">
                        {{ $suptitle }}
                    </span>
                </h2>
                <div class="content-block__content text body">
                    @if($adres)
                    <p class="body">
                        <strong>
                            Adres:
                        </strong>
                        <br>
                        {{ $adres }}
                    </p>
                    @endif

                    @if($phone)
                    <p class="body">
                        <strong>
                            Telefon:
                        </strong>
                        <br>
                        <a href="tel:{{ str_replace(' ', '', $phone) }}" class="text body">
                            {{ $phone }}
                        </a>
                    </p>
                    @endif

                    @if($kom)
                    <p class="body">
                        <strong>
                            Komórka:
                        </strong>
                        <br>
                        <a href="tel:{{ str_replace(' ', '', $kom) }}" class="text body">
                            {{ $kom }}
                        </a>
                    </p>
                    @endif

                    @if($mail)
                    <p class="body">
                        <strong>
                            Mail:
                        </strong>
                        <br>
                        <a href="mailto:{{ $mail }}" class="text contact__hover body">
                            {{ $mail }}
                        </a>
                    </p>
                    @endif

                    @if($NIP || $REGON)
                    <p>
                        <strong>
                            Dane:
                        </strong>
                        <br>
                        @if($NIP)
                        NIP: {{ $NIP }}
                        @endif
                        @if($NIP)
                        <br>
                        REGON: {{ $REGON }}
                        @endif
                    </p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</section>
