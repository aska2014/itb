<div id="homepage">

    @include('partials.left')

    <div id="right">
        <div id="{{ lan_is('ar') ? 'headrightaboutus' : 'headright' }}"><span>{{ $product->title }}</span></div>
        <div id="pic-deteils">{{ $product->getImage('main')->html() }}</div>
        <div id="picsmall">

            @foreach($product->getImages('gallery') as $image)
                @if($version = $image->getNearest(200, 230, true))
                <a id="pic-photo22" class="photohead55" href="{{ $version->url }}">
                    <img src="{{ $version->url }}" alt="image" style="height:114px;" />
                </a>
                @endif
            @endforeach

        </div>
        <div id="textdetielis">
            <p>
                <strong>{{ trans('words.description') }}:</strong></br></br>

                {{ $product->description }}

                </br></br>

                <strong>{{ trans('words.specifications') }}:</strong></br>

                {{ $product->specifications }}
            </p>
        </div>

        @include('partials.buy_product')

        @include('partials.related')
    </div>
</div>

@section('scripts')
<script type="text/javascript">

    $(function() {

        var offsetX = 20;
        var offsetY = 10;

        $('#picsmall a').hover(function(e) {
            var href = $(this).attr('href');
            $('<img id="largeImage" src="' + href + '" alt="big image" style="position:absolute;" />')
                .css('top', e.pageY + offsetY)
                .css('left', e.pageX + offsetX)
                .appendTo('#picsmall');
        }, function() {
            $('#largeImage').remove();
        });

        $('#picsmall a').mousemove(function(e) {
            $("#largeImage").css('top', e.pageY + offsetY).css('left', e.pageX + offsetX);
        });

    });

</script>
@stop