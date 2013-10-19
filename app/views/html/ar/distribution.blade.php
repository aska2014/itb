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
        <div id="headrightaboutus"><span>التوزيع</span></div>
        <div id="textaboutas">
            <p>
                <span id="logoabout00"> <strong>I<span class="point">.</span>T<span class="point">.</span>B</strong> <strong class="ttt">Swiss</strong></span> تخطط لجعل شبكة التوزيع على الصعيد الوطني تتألف من العديد من التجار خدمة الزبائن في معظم أنحاء مصر.
            </p>
            <p>
                تسعى ITB السويسرية لتطوير ونجاح تجار من خلال برنامج الوكيل المعتمد شاملة
            </p>
            <span>ويتضمن هذا البرنامج:</span>
            <ol>
                <li> تقديم دعم عن التسويق. </li>
                <li> المنتج والأعمال التدريب. </li>
                <li> المنتج والأعمال التدريب. </li>
                <li> حزم الحوافز التجارة. </li>
                <li> تجار الباعة برامج الحوافز. </li>
                <li> التجارة والاجتماعي الأحداث والاتفاقيات ويوفر البرنامج أيضا الموظفين من تجار مفتاح مع الفوائد الاجتماعية والصحية كبادرة تقدير للناس الذين نقدم لعملائنا مع أعلى مستوى من الخدمة مباشرة مكافأة ولائهم والاحتراف. </li>
            </ol>
        </div>
    </div>

</div>
