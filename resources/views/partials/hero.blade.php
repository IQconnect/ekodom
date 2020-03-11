@php
    $image = $data['image']['url'];
@endphp

<section class="hero" style="background-image: url({{ $image }});">
    <div class="container hero__content">
        <div class="row">
            <div class="col">
                <h1 class="headline">
                    {{ the_title() }}
                </h1>
            </div>
        </div>
    </div>
</section>