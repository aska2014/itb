<div id="{{ lan_is('ar') ? 'headrightaboutus' : 'headright' }}"><span>{{ trans('words.related') }}</span></div>
<div id="minslid">
    <!-- Elastislide Carousel -->
    <ul id="carousel" class="elastislide-list" dir="ltr">

        @foreach($related as $product)
            @if($image = $product->getImage('main'))
            <li>
                <a href="{{ URL::product($product) }}">
                    <img src="{{ $image->getNearest(150, 160, true)->url }}" width="150" />
                </a>
            </li>
            @endif
        @endforeach
    </ul>
    <script type="text/javascript" src="{{ lan_asset('js/jquerypp.custom.js') }}"></script>
    <script type="text/javascript" src="{{ lan_asset('js/jquery.elastislide.js') }}"></script>
    <script type="text/javascript">

        $( '#carousel' ).elastislide();

    </script>
</div>