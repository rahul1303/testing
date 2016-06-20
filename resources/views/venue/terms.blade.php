<div class="row" style="margin-top: 20px;">
    <div class="col-sm-12">
        <?php $term=$details->terms;?>
        @foreach($term as $terms)
                <blockquote>
                    <p>{{ $terms->term }}</p>
                </blockquote>
            @endforeach

    </div>
</div>