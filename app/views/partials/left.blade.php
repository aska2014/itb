<div id="left">
    <div id="mnuleft">
        <ul>
            @foreach($menuItems as $item)
            <li><a href="{{ URL::to($item->getUri()) }}">{{ $item->getTranslatedTitle() }}</a></li>
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
