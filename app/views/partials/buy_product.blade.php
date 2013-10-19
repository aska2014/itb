<div id="{{ lan_is('ar') ? 'headrightaboutus' : 'headright' }}"><span>{{ trans('words.buy') }}</span></div>
<div id="send">
    <div id="textinput">
        <input type="text" placeholder="{{ trans('words.name') }}"></br>
        <input type="text" placeholder="{{ trans('words.email') }}"></br>
        <input type="text" placeholder="{{ trans('words.mobile') }}"></br>
    </div>
    <div id="textore">
        <textarea rows="3" placeholder="{{ trans('words.message') }}"></textarea>
    </div>
    <div id="button">
        <button class="btn btn-primary" type="button">{{ trans('words.send') }}</button>
    </div>
</div>