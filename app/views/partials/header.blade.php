<div id="header">
    <div id="head11">
        <div id="logo"></div>
        <div id="pic-photo22"><img src="{{ lan_asset('img/pic-header111.png') }}"></div>
        <div id="pic-photo22" class="photohead22"><img src="{{ lan_asset('img/pic-header222.png') }}"></div>
        <div id="pic-photo22" class="photohead33"><img src="{{ lan_asset('img/pic-photo22.png') }}"></div>
        <div id="pic-photo22" class="photohead44"><img src="{{ lan_asset('img/pic-headre333.png') }}"></div>
        <div id="icon-pic">
            <ul>
                <li><a href="{{ URL::language('ar') }}"><img src="{{ lan_asset('img/1377442371_Flag_of_Egypt.png') }}"></a></li>
                <li><a href="{{ URL::language('en') }}" id="pic-germany"><img src="{{ lan_asset('img/1377442347_Flag_of_United_Kingdom.png') }}"></a></li>
                <li><a href="{{ URL::language('en') }}"><img src="{{ lan_asset('img/1377442341_Flag_of_Switzerland.png') }}"></a></li>
            </ul>
        </div>
        <div id="contactheader">
            <span>{{ trans('words.email') }} : info@itbswiss.com</span></br>
            <span>{{ trans('words.mobile') }}:  012 005 331 3</span>
        </div>
        <div id="line22"></div>
    </div>
    <div id="head22">
        <div id="search">
            <input type="text">
            <a href="#"><img src="{{ lan_asset('img/pic-search.png') }}"></a>
        </div>
        <div id="follow">
            <a href="#"><img src="{{ lan_asset('img/1375730648_icontexto-inside-facebook.png') }}"></a>
            <a href="#"><img src="{{ lan_asset('img/1375730726_icontexto-inside-twitter.png') }}"></a>
            <a href="#"><img src="{{ lan_asset('img/1375730737_icontexto-inside-rss.png') }}"></a>
            <a href="#"><img src="{{ lan_asset('img/1375730714_icontexto-inside-youtube.png') }}"></a>
        </div>
    </div>
    <div id="line23"></div>
    <div id="mnu">
        <ul id="nav">
            @foreach($headerMenuItems as $item)
            <li><a href="{{ URL::to($item->getUri()) }}">{{ $item->getTranslatedTitle() }}</a></li>
            @endforeach
        </ul>
    </div>
</div>