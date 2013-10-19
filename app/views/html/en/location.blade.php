<div id="homepage">

    <?php
    $menuItems = menu_items(

        'location',
        'contact_form',
        'sales_marketing'
    );
    ?>

    @include('partials.left', compact('menuItems'))

    <div id="right">
        <div id="headright"><span>Location</span></div>
        <div id="rightpartener">
            <div class="blockpartener11">
                <div class="picinternationalr">
                    <img src="{{ lan_asset('img/interpic2.png') }}">
                </div>
                <h3>EGYPT</h3><br>
                <p>
                    Office Address : El Zahraâ€™a Street No.8 â€“ Benha â€“ Al Qualubiya.
                    Stores Address : Tant El-Gazira â€“ Toukh â€“ Al-Qualubiya
                    Tel.: +2 013 249 26 17
                    Mobile: +2 012 005 331 3
                    Email : info@itbswiss.com
                </p>
            </div>
            <div class="blockpartener11">
                <div class="picinternationalr">
                    <img src="{{ lan_asset('img/interpic1.png') }}">
                </div>
                <h3>ENGLAND</h3><br>
                <p>
                    Office Address : El Zahraâ€™a Street No.8 â€“ Benha â€“ Al Qualubiya.
                    Stores Address : Tant El-Gazira â€“ Toukh â€“ Al-Qualubiya
                    Tel.: +2 013 249 26 17
                    Mobile: +2 012 005 331 3
                    Email : info@itbswiss.com
                </p>
            </div>
            <div class="blockpartener11">
                <div class="picinternationalr">
                    <img src="{{ lan_asset('img/interpic3.png') }}">
                </div>
                <h3>SWITZERLAND</h3><br>
                <p>
                    Office Address : El Zahraâ€™a Street No.8 â€“ Benha â€“ Al Qualubiya.
                    Stores Address : Tant El-Gazira â€“ Toukh â€“ Al-Qualubiya
                    Tel.: +2 013 249 26 17
                    Mobile: +2 012 005 331 3
                    Email : info@itbswiss.com
                </p>
            </div>
        </div>
        <div id="picmap"></div>
    </div>
</div>
