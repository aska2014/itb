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
        <div id="headright"><span>Mission &amp;Vision</span></div>
        <div id="textaboutas">
            <span id="logoabout00"> <strong>I<span class="point">.</span>T<span class="point">.</span>B</strong> <strong class="ttt">Swiss</strong></span> has ultimate promise is to make customersâ€™ lives more convenient, fun and enjoyable. In fulfilling this promise, we strive to bring the most reliable and high quality products which feature state-of-the-art world technology and entertainment solutions to our customers at competitive prices and affordable payment schemes.<br>
            Our role at <span id="logoabout00"> <strong>I<span class="point">.</span>T<span class="point">.</span>B</strong> <strong class="ttt">Swiss</strong></span> is to provide our customers with variety and value to enhance each customerâ€™s right to have the best choices which match his or her needs and lifestyle. And while we reach out to our customers wherever they are, we strive to provide the highest levels of professionalism and service quality.<br>
            So, due to the previous words we can summarize our<span class="kkk">Mission </span> in three sentences:<br>
        </div>
        <ol class="textnamber">
            <li>Satisfaction of our Customers above all else.</li>
            <li>Offering our customers faith, clearness, trust and honesty</li>
            <li>Recognizing the hug responsibility that we get from our partners, before the great honour that will be gotten</li>
        </ol>
        <p id="textaboutas00">
            As well we summarize our <span class="kkk"> Vision </span> in two sentences:
        </p><p>
        </p><ol class="textnamber">
            <li>To be one of the best providers of modern life needs.</li>
            <li>To be one of the biggest supplier for the most trusted regional chains.</li>
        </ol>
    </div>
</div>
