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
        <div id="headright"><span>Distribution</span></div>
        <div id="textaboutas">
            <p>
                <span id="logoabout00"> <strong>I<span class="point">.</span>T<span class="point">.</span>B</strong> <strong class="ttt">Swiss</strong></span> planning to make a nationwide distribution network consisting of many dealers serving customers in most parts of Egypt.
            </p>
            <p>
                I.T.B Swiss is seeking to the development and success of its dealers through a comprehensive Authorized Dealer Program
            </p>
            <span>This program includes:</span>
            <ol>
                <li>Marketing support.</li>
                <li>Product and business training.</li>
                <li>Product and business training.</li>
                <li>Trade incentive packages.</li>
                <li>Dealers salesmen incentive programs.</li>
                <li>Trade and social events and conventions The program also provides staff of key dealers with social and health benefits as a gesture of appreciation to the people who provide our customers with the highest level of service first hand rewarding their loyalty and professionalism.</li>
            </ol>
        </div>
    </div>
</div>
