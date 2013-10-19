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
        <div id="headright"><span>Sales-markting</span></div>
        <div id="pagmarketing">
            <div id="pic-marketing"></div>
            <h4>Birkichstrasse 674549 WolpertshausenDeutschland</h4><br>
            <p class="text11">
                Ihr Ansprechpartner:<br>
                Telefon:<br>
                Fax:<br>
                eMail:<br>
            </p>
            <p class="text22">
                Karl Stutz<br>
                07904/700-222<br>
                07904/700-51222<br>
                werksverkauf@guede.com<br>
            </p>

        </div>
    </div>
</div>
