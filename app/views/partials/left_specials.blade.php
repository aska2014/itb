<div id="specials">
    <div id="headspical">
        <span><a href="#">{{ trans('words.specials') }}</a></span>
    </div>
    <div id="oferspecials">
        @foreach($specials as $special)
        <div class="picofer">
            <a href="{{ URL::product($special) }}">
            @if($image = $special->getImage('main'))
                <img src="{{ $image->getNearest(75, 61)->url }}" style="width:75px" />
            @endif
            </a>
            <a href="{{ URL::product($special) }}"><span>{{ $special->title }}</span></a>

            <a href="{{ URL::product($special) }}">
                <span class="pric"><I class="ppp">{{ $special->price->format() }}</I>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                @if($special->hasOfferPrice())
                    <I class="qqq">{{ $special->offer_price->format() }}</I></span>
                @endif
            </a>
            <div class="linepfer"></div>
        </div>
        @endforeach
    </div>
</div>