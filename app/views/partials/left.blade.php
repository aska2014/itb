<div id="left">
    <div id="mnuleft">
        <ul>
            @foreach($menuItems as $item)
            <li><a href="{{ URL::to($item->getUri()) }}">{{ $item->getTranslatedTitle() }}</a></li>
            @endforeach
        </ul>
    </div>

    @include('partials.left_specials')

    @include('partials.mailing_list')
</div>
