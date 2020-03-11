@php
$site = $data['pozycja'];
$title = $data['title'];
$suptitle = $data['suptitle'];
$content = $data['content'];
$button_text = $data['button'];
$button_link = $data['button_link'];
$categories = $data['cat'];

@endphp

<section class="products @if ($site == 'prawo') products--rev @endif">
    <div class="container">
        <div class="row products__wrapper">
            <div class="col-12 col-md-12 col-lg-6 @if ($site == 'prawo') offset-lg-2 products--rev @endif products__slider rotator">
                @foreach ($categories as $cat)
                    @php
                        $id = $cat -> ID;
                        $cat_title =get_the_title($id);
                        $description = get_field('cat_content', $id);
                        $cat_link = get_permalink( $cat );
                        $image= get_field('cat_image', $id);
                        $img= $image['ID'];
                        $index = $loop->iteration;
                        if($index < 10) {
                        $index  = '0'.$index;
                        };
                    @endphp
                    <div class="rotator__cell">
                        @if($img)
                            <img class="rotator__image" src="{{ $image['url'] }}" alt="{{ $image ['alt'] }}">
                        @endif
                        <article class="rotator__content" data-index="{{ $index }}.">
                            <header class="rotator__header">
                                <h3 class="heading subheader">
                                    {!! $cat_title !!}
                                </h3>
                            </header>
                            <p class="text products__button">
                                <a href="{!!$cat_link!!}" class="button button--primary">Czytaj więcej</a>
                            </p>
                        </article>
                    </div>
                @endforeach
            </div>
        <div class="col-12 col-md-12 col-lg-4  products__content content-block content-block--equalline  rotator ">
            @foreach ($categories as $cat)
                @php
                    $id = $cat -> ID;
                    $cat_title = get_the_title($id);
                    $description = get_field('cat_content', $id);
                    $cat_link = get_permalink( $cat );
                    $image= get_field('cat_image', $id);
                    $img= $image['ID'];
                    $index = $loop->iteration;
                    if($index < 10) {
                    $index  = '0'.$index;
                    };
                @endphp
                <div class="products__description  @if($loop->first) -is-active @endif "tab  data-direction="{{ $loop->$index}}" >
                    <h2 class="content-block__header heading title">
                        {{ $title }}
                        <span class="heading subheader">
                            {{ $suptitle }}
                        </span>
                    </h2>
                    <div class="content-block__content text body">
                        {!! $description !!}
                    </div>
                    @if ($button_text)
                        <a href="{{ $button_link }}" class="button button--primary">
                        {{ $button_text }}
                        </a>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>
