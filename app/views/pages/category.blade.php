<div id="homepage">

    <div id="left">

        @include('partials.category_menu')

        @include('partials.left_specials')

        @include('partials.mailing_list')

    </div>

    <div id="right">

        <div id="{{ lan_is('ar') ? 'headrightaboutus' : 'headright' }}"><span>{{ $category->title }}</span></div>

        @include('partials.products')

    </div>
</div>