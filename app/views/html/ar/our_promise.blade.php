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
        <div id="headrightaboutus"><span>لدينا وعد</span></div>
        <div id="textaboutas">
            <div class="phototitelPromise">
                <span class="titelPromise">لدينا عملاء</span>
                <a href="#"><img src="{{ lan_asset('img/1377697409_agt_print.png') }}"></a>
                <a href="#"><img src="{{ lan_asset('img/1377698320_folder_apollon.png') }}"></a>
            </div>
            <ul id="textPromise">
                <li> نسعى جاهدين لفهم، توقع وتلبية احتياجاتهم، وتزويدهم بأعلى مستويات جودة الخدمة والكفاءة المهنية. </li>
                <li> إثراء حياتهم مع منتجات مبتكرة، والتي تقدم والسلامة والاعتمادية وتجلب الراحة والترفيه لمنازلهم. </li>
                <li> يمد يده والاقتراب من أي وقت مضى لهم أينما كانوا. </li>
                <li> أكمل منتجاتنا بأسعار معقولة من خلال الحكمة المصادر، والتسعير التنافسي وخطط الدفع مريحة. </li>
            </ul>
        </div>
        <div id="textaboutas">
            <div class="phototitelPromise">
                <span class="titelPromise">موظفينا</span>
                <a href="#"><img src="{{ lan_asset('img/1377697409_agt_print.png') }}"></a>
                <a href="#"><img src="{{ lan_asset('img/1377698320_folder_apollon.png') }}"></a>
            </div>
            <ul id="textPromise">
                <li> توفير لهم بيئة عمل آمنة وعادلة وصحية. </li>
                <li> الاستثمار في التدريب والتطوير المهني الخاصة بهم بحيث يكون لكل موظف يمكن تحقيق طموحات حضارته والإمكانات الكاملة. </li>
                <li> مكافأة أولئك الذين تتطابق رؤيتنا مع التفاني والالتزام، بحيث انها سوف تشترك فى ثمار نجاحنا. </li>
            </ul>
        </div>
        <div id="textaboutas">
            <div class="phototitelPromise">
                <span class="titelPromise">لدينا شركاء الأعمال</span>
                <a href="#"><img src="{{ lan_asset('img/1377697409_agt_print.png') }}"></a>
                <a href="#"><img src="{{ lan_asset('img/1377698320_folder_apollon.png') }}"></a>
            </div>
            <ul id="textPromise">
                <li> سيظهر شراكة طويلة الأجل تتميز الإنصاف والاحترام. </li>
                <li> الاستثمار في تطوير أعمالنا المتبادلة. </li>
                <li> مساعدة شركائنا لتحقيق السوق الخاصة بهم وأهداف العمل. </li>
                <li> الأداء المتميز وتحقيق النمو المطرد والربحية. </li>
                <li> التماس التميز في كل ما نقوم به. </li>
                <li> الحفاظ على الشفافية والحكم الرشيد. </li>
            </ul>
        </div>
        <div id="textaboutas">
            <div class="phototitelPromise">
                <span class="titelPromise">جمعيتنا</span>
                <a href="#"><img src="{{ lan_asset('img/1377697409_agt_print.png') }}"></a>
                <a href="#"><img src="{{ lan_asset('img/1377698320_folder_apollon.png') }}"></a>
            </div>
            <ul id="textPromise">
                <li> المساهمة في التنمية الشاملة في مجتمعنا. </li>
                <li> العناية لالمحرومين. </li>
                <li> حماية بيئتنا. </li>
                <li> تقديم خيار، فرصة والتنقل. </li>
            </ul>
        </div>
        <div id="textaboutas">
            <div class="phototitelPromise">
                <span class="titelPromise">مستقبلنا</span>
                <a href="#"><img src="{{ lan_asset('img/1377697409_agt_print.png') }}"></a>
                <a href="#"><img src="{{ lan_asset('img/1377698320_folder_apollon.png') }}"></a>
            </div>
            <ul id="textPromise">
                البقاء وفيا ل<li> القيم الأساسية لدينا ورؤية الأعمال. </li>
                <li> رعاية وتنمية أحلامنا. </li>
                <li> فرصة معالجة بحكمة وشجاعة وعزيمة. </li>
                <li> تطوير مستمر قدراتنا. </li>
                <li> كل مهمة مع العاطفة ونعيش كل يوم مع الامتنان، المصداقية والثقة والدين </li>
            </ul>
        </div>
    </div>
</div>
