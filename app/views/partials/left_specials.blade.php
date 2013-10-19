<div id="specials">
    <div id="headspical">
        <span><a href="#">{{ trans('words.specials') }}</a></span>
    </div>
    <div id="oferspecials">
        @foreach($specials as $special)
        <div class="picofer">
            @if($image = $special->getImage('main'))
                {{ $image->html() }}
            @endif
            <span>{{ $special->title }}</span>
                <span class="pric"><I class="ppp">{{ $special->price->format() }}</I>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<I
                        class="qqq">{{ $special->offer_price->format() }}</I></span>
            <div class="linepfer"></div>
        </div>
        @endforeach
    </div>
</div>