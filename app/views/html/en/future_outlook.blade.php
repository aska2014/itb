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
        <div id="headright"><span>Future Outlook</span></div>
        <div id="textaboutas">
            <p>
                In fulfilling our mission, we strive to reach our customers wherever they may be. This is why we plan to widen our reach through opening new outlets and expanding our authorized dealer and service networks.
            </p>
            <p>
                By the last season in year 2013<span id="logoabout00"> <strong>I<span class="point">.</span>T<span class="point">.</span>B</strong> <strong class="ttt">Swiss</strong></span> plan to have arround 50 authorized dealers and service centers to get even closer to our customers in each town in Egypt. On the regional level.
            </p>
            <p>
                <span id="logoabout00"> <strong>I<span class="point">.</span>T<span class="point">.</span>B</strong> <strong class="ttt">Swiss</strong></span>is currently evaluating several opportunities to enter key new markets in the Middle East region
            </p>
        </div>
    </div>
</div>
