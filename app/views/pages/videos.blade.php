<div id="homepage">

    @include('partials.left')

    <div id="right">
        <div id="{{ lan_is('ar') ? 'headrightaboutus' : 'headright' }}"><span>{{ trans('words.videos') }}</span></div>
        <div id="pagevadio">
            @foreach($videos as $video)
            <div class="vadio11"><span>{{ $video->title }}</span>
                <a href="{{ $video->youtube }}" rel="vidbox" title="caption" class="vadio11"><img src="{{ lan_asset('img/pic-vadio.png') }}"></a></div>
            @endforeach
        </div>
    </div>
</div>