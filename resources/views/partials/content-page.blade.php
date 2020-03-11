<section class="section">
    <div class="container content-section">
        <div class="row">
            <div class="col" wp-block-gallery>
                @while(have_posts()) @php the_post() @endphp
                    @php the_content() @endphp
                @endwhile
            </div>
        </div>
    </div>
</section>
