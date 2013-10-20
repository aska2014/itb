<div id="homepage">

    @include('partials.left')

    <div id="right">

        @include('partials.slider')

        <div id="minslid">
            <!-- Elastislide Carousel -->
            <ul id="carousel" class="elastislide-list">
                @foreach($videos as $video)
                @if($image = $video->getImage('main'))
                <li>
                    <a href="{{ URL::video($video) }}">
                        {{ $image->html(150, 160) }}
                    </a>
                </li>
                @endif
                @endforeach
            </ul>
            <script type="text/javascript" src="{{ lan_asset('js/jquerypp.custom.js') }}"></script>
            <script type="text/javascript" src="{{ lan_asset('js/jquery.elastislide.js') }}"></script>
            <script type="text/javascript">

                $('#carousel').elastislide();

            </script>
        </div>
        <div id="headright"><span>{{ trans('words.latest') }}</span></div>

        @include('partials.products', array('products' => $latest))

        <div id="headright"><span>{{ trans('words.featured') }}</span></div>

        @include('partials.products', array('products' => $featured))

    </div>
</div>
