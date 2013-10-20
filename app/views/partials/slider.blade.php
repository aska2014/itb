<div id="slider" class="sliderclass">
    <div id="da-slider" class="da-slider">
        @foreach($offers as $offer)
        <div class="da-slide">
            <a href="{{ URL::product($offer) }}" class="titelslider"><span>{{ $offer->title }}</span></a>

            <p>{{ Str::words($offer->description, 10) }}</p>
            <a href="{{ URL::product($offer) }}" class="da-link"><span>Read more</span></a>

            <div class="da-img">
                {{ $offer->getImage('main')->html(210,210, true) }}
            </div>
            <div class="da-img00"><img src="{{ lan_asset('images/picslider2.png') }}" alt="image01"/></div>
            <div class="price"><span><strong class="uyu">{{ $offer->price->format() }}</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong
                        class="tty">{{ $offer->offer_price->format() }}</strong></span></div>
        </div>
        @endforeach
        <nav class="da-arrows">
            <span class="da-arrows-prev"></span>
            <span class="da-arrows-next"></span>
        </nav>
    </div>
    <script type="text/javascript" src="{{ lan_asset('js/jquery.cslider.js') }}"></script>
    <script type="text/javascript">
        $(function () {

            $('#da-slider').cslider({
                autoplay: true,
                bgincrement: 450
            });

        });
    </script>
</div>