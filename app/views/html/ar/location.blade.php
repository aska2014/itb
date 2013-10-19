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
        <div id="headrightaboutus"><span>الموقـــع</span></div>
        <div id="rightpartener">
            <div class="blockpartener11">
                <div class="picinternationalr">
                    <img src="{{ lan_asset('img/interpic2.png') }}">
                </div>
                <h3>مصـــر</h3><br>
                <p>
                    عنوان المكتب: مدرسة الزهراء شارع NO.8 - بنها - شارع Qualubiya. متاجر العنوان: تانت جريدة الجزيرة - طوخ - آل Qualubiya<br>
                    هاتف: +2013249 26 17 جوال: +2012005331<br>
                    البريد الإلكتروني 3: info@itbswiss.com
                </p>
            </div>
            <div class="blockpartener11">
                <div class="picinternationalr">
                    <img src="{{ lan_asset('img/interpic1.png') }}">
                </div>
                <h3>انجلترا</h3><br>
                <p>
                    عنوان المكتب: مدرسة الزهراء شارع NO.8 - بنها - شارع Qualubiya. متاجر العنوان: تانت جريدة الجزيرة - طوخ - آل Qualubiya<br>
                    هاتف: +2013249 26 17 جوال: +2012005331<br>
                    البريد الإلكتروني 3: info@itbswiss.com
                </p>
            </div>
            <div class="blockpartener11">
                <div class="picinternationalr">
                    <img src="{{ lan_asset('{{ lan_asset('img/interpic3.png') }}">
                </div>
                <h3>سويسرا</h3><br>
                <p>
                    عنوان المكتب: مدرسة الزهراء شارع NO.8 - بنها - شارع Qualubiya. متاجر العنوان: تانت جريدة الجزيرة - طوخ - آل Qualubiya<br>
                    هاتف: +2013249 26 17 جوال: +2012005331<br>
                    البريد الإلكتروني 3: info@itbswiss.com
                </p>
            </div>
        </div>
        <div id="picmap"></div>
    </div>
</div>
