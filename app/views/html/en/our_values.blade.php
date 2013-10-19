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
        <div id="headright"><span>Our Values</span></div>
        <div id="textaboutas">
            <strong>Our constructing framework on 7 shielded columns:</strong><br>
            <ol id="textValues">
                <li><strong class="mmm">Trust ..</strong> reliable and credible, we believe that fairness, honesty, transparency and integrity are the basis for trust &amp; success.</li>
                <li><strong class="mmm">Love ..</strong> Care and passion, we love what we do and strive to enable our stakeholders to do what they want.</li>
                <li><strong class="mmm">Excellence .. </strong>and Highest standards, we are always keen on improving ourselves through attention to each detail.</li>
                <li><strong class="mmm">Empowerment .. </strong>We enable our stakeholders to achieve their goals.</li>
                <li><strong class="mmm">Innovation ..</strong> discovering and finding new solutions, our services and solutions to exceed our partnersâ€™ expectations.</li>
                <li><strong class="mmm">Fun ..</strong> and enjoyment, our services and our way of doing business should enable our customers and employees to enjoy life.</li>
                <li><strong class="mmm">Efficiency..</strong> we strive to do things better and faster in a more efficient manner.</li>
            </ol>
        </div>
    </div>
</div>
