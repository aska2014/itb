<div id="homepage">

    <?php
    $menuItems = menu_items(

        'prospect_catalogue',
        'spire_parts',
        'special_offers'
    );
    ?>

    @include('partials.left', compact('menuItems'))

    <div id="right">
        <div id="headright"><span>Download</span></div>
    </div>
</div>
