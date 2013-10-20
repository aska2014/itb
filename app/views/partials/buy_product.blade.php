

<div id="{{ lan_is('ar') ? 'headrightaboutus' : 'headright' }}"><span>{{ trans('words.buy') }}</span></div>

<div id="send">

    @if(! $errors->isEmpty())
    <div class="alert alert-danger fade in">
        {{ implode($errors->all(':message'), '<br/>') }}
    </div>
    @endif

    @if(! $success->isEmpty())
    <div class="alert alert-success fade in">
        {{ implode($success->all(':message'), '<br/>') }}
    </div>
    @endif
    <form action="{{ URL::buyProduct( $product ) }}" method="POST">
        <div id="textinput">
            <input type="text" name="User[name]" placeholder="{{ trans('words.name') }}"></br>
            <input type="text" name="User[email]" placeholder="{{ trans('words.email') }}"></br>
            <input type="text" name="User[mobile]" placeholder="{{ trans('words.mobile') }}"></br>
        </div>
        <div id="textore">
            <textarea rows="3" name="Order[message]" placeholder="{{ trans('words.message') }}"></textarea>
        </div>
        <div id="button">
            <button class="btn btn-primary" type="submit">{{ trans('words.send') }}</button>
        </div>
    </form>
</div>
