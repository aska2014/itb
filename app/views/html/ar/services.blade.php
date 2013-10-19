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
        <div id="headrightaboutus"><span>خدمتنا</span></div>
        <div id="textaboutas">
            <p>
                <span id="logoabout00"> <strong>I<span class="point">.</span>T<span class="point">.</span>B</strong> <strong class="ttt">Swiss</strong></span>تدير أون لاين هل انها للجميع حيث يمكن للعملاء شراء المنتجات والخدمات طلبنا أو إجراء تحقيقات من أي مكان. ويمكن للعملاء وضع النقود أو الائتمان المشتريات، الاستفسار عن منتجات جديدة. ويتم رصد مؤشرات جودة الخدمة وتحليلها على أساس يومية وأسبوعية وشهرية للعثور على أنماط وتطوير مستمر وتحسين مستويات الخدمة التي نقدمها.
            </p>
            <p>
                ونحن أيضا الحصول على ميزة لعملائنا وشركائنا التي يمكن من خلالها الحصول على اتصال مباشر وبسيط ومباشر إلى صناع القرار مع من العمليات المعقدة.
            </p><br>
        </div>
    </div>
</div>
