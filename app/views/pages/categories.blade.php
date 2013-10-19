<div id="homepage">
    <div id="left">
        <div id="mnuleft">
            <ul id="menu">
                @foreach($categories as $category)
                <li id="menu1"><a href="p1.html">{{ $category->title }}</a></li>
                @endforeach
            </ul>
        </div>

        @include('partials.left_specials')

        <div id="malinglist">
            <div id="picmaling"></div>
            <input type="email" id="email" name="email" class="txt">
            <div id="ptnmail"><a href="#"><span>Send</span></a></div>
        </div>
    </div>

    <div id="right">
        <div id="{{ lan_is('ar') ? 'headrightaboutus' : 'headright' }}"><span>{{ trans('words.our_products') }}</span></div>
        <div id="productspage">
            @foreach($categories as $category)
            <div class="products11">
                <a href="p1.html"><img src="{{ $category->getImage('main')->getNearest(114, 115)->url }}"></a>
                <a href="p1.html"><h4>{{ $category->title }}</h4></a>
            </div>
            @endforeach
        </div>
    </div>
</div>
