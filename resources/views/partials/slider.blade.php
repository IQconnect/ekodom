@php
    $silder = $data['slider'];
@endphp

<section class="slider">
    <div class="slider__carousel col-12">
        @foreach ( $silder as $img )
        <div class="slider__cell carousel-cell">
            <div class="slider__baner">
                <div class="slider__backcontent">
                    <div class="slider__content">
                        <header class="slider__header">
                            @if($lopp->first)
                            <h1 class="heading headline">
                                @if($img['title'])
                                {!! $img['title'] !!}
                                @endif
                                @if($img['suptitle'])
                                <span class="heading title slider__header--big">
                                    {!! $img['suptitle'] !!}
                                </span>
                                @endif
                            </h1>
                            @else
                            <h2 class="heading headline">
                                @if($img['title'])
                                {!! $img['title'] !!}
                                @endif
                                @if($img['suptitle'])
                                <span class="heading title slider__header--big">
                                    {!! $img['suptitle'] !!}
                                </span>
                                @endif
                            </h2>
                            @endif
                        </header>
                        @if($img['content'])
                        <p class="text--medium">
                            {{  $img['content']  }}
                        </p>
                        @endif
                    </div>
                </div>
            </div>
            <img  class="slider__img" src="{{ $img['image']['url'] }}" a lt="{{ $img['image']['alt'] }}">
        </div>
        @endforeach
    </div>
</section>
