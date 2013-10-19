<div id="homepage">

    <?php
    $menuItems = menu_items(

        'mission_vision',
        'our_values',
        'our_promise',
        'services',
        'distribution',
        'future_outlook'
    );
    ?>

    @include('partials.left', compact('menuItems'))

    <div id="right">
        <div id="headright"><span>Services</span></div>
        <div id="textaboutas">
            <p>
                <span id="logoabout00"> <strong>I<span class="point">.</span>T<span class="point">.</span>B</strong> <strong class="ttt">Swiss</strong></span> operates a Online -Does-It-All where customers can buy our products, request service or make inquiries from anywhere. Customers can place cash or credit purchases, inquire about new products. Service Quality indicators are monitored and analyzed on daily, weekly and monthly basis to find patterns and continuously upgrade and improve our service standards.
            </p>
            <p>
                We also obtain an advantage for our customers and partners which they can get a direct and simple contact the direct to the decision makers with out complicated processes.
            </p><br>
        </div>
    </div>
</div>
