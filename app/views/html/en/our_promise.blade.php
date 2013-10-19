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
        <div id="headright"><span>Our Promise</span></div>
        <div id="textaboutas">
            <div class="phototitelPromise">
                <span class="titelPromise">Our Customers</span>
                <a href="#"><img src="{{ lan_asset('img/1377697409_agt_print.png') }}"></a>
                <a href="#"><img src="{{ lan_asset('img/1377698320_folder_apollon.png') }}"></a>
            </div>
            <ul id="textPromise">
                <li>Strive to understand, anticipate and fulfill their needs, providing them with the highest levels of service quality and professionalism.</li>
                <li>Enrich their lives with innovative products, which offer safety and reliability and bring convenience and entertainment to their homes.</li>
                <li>Reach out and get ever closer to them wherever they are.</li>
                <li>Make our products affordable through prudent sourcing, competitive pricing and convenient payment schemes.</li>
            </ul>
        </div>
        <div id="textaboutas">
            <div class="phototitelPromise">
                <span class="titelPromise">Our Employees</span>
                <a href="#"><img src="{{ lan_asset('img/1377697409_agt_print.png') }}"></a>
                <a href="#"><img src="{{ lan_asset('img/1377698320_folder_apollon.png') }}"></a>
            </div>
            <ul id="textPromise">
                <li>Provide them with a safe, fair and healthy work environment.</li>
                <li>Invest in their training and professional development so that each employee can realize his or her own ambitions and full potential.</li>
                <li>Reward those who match our vision with dedication and commitment, such that they will share the fruits of our success.</li>
            </ul>
        </div>
        <div id="textaboutas">
            <div class="phototitelPromise">
                <span class="titelPromise">Our Business Partners</span>
                <a href="#"><img src="{{ lan_asset('img/1377697409_agt_print.png') }}"></a>
                <a href="#"><img src="{{ lan_asset('img/1377698320_folder_apollon.png') }}"></a>
            </div>
            <ul id="textPromise">
                <li>Build a long-term partnership characterized by fairness and respect.</li>
                <li>Invest into the development of our mutual business.</li>
                <li>Help our partners to achieve their own market and business objectives.</li>
                <li>Sustain outstanding performance and achieve steady growth and profitability.</li>
                <li>Seek excellence in everything we do.</li>
                <li>Maintain transparency and good governance.</li>
            </ul>
        </div>
        <div id="textaboutas">
            <div class="phototitelPromise">
                <span class="titelPromise">Our Society</span>
                <a href="#"><img src="{{ lan_asset('img/1377697409_agt_print.png') }}"></a>
                <a href="#"><img src="{{ lan_asset('img/1377698320_folder_apollon.png') }}"></a>
            </div>
            <ul id="textPromise">
                <li>Contribute to the comprehensive development of our community.</li>
                <li>Care for the unprivileged.</li>
                <li>Protect our environment.</li>
                <li>Provide choice, opportunity and mobility.</li>
            </ul>
        </div>
        <div id="textaboutas">
            <div class="phototitelPromise">
                <span class="titelPromise">Our Future</span>
                <a href="#"><img src="{{ lan_asset('img/1377697409_agt_print.png') }}"></a>
                <a href="#"><img src="{{ lan_asset('img/1377698320_folder_apollon.png') }}"></a>
            </div>
            <ul id="textPromise">
                <li>Stay true to our core values and business vision.</li>
                <li>Nurture and grow our dreams.</li>
                <li>Tackle opportunity with prudence, courage and resolve.</li>
                <li>Continuously develop our capabilities.</li>
                <li>Tackle each task with passion and live each day with gratefulness, credence, confidence and true religion..</li>
            </ul>
        </div>
    </div>
</div>
