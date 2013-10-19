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
        <div id="headrightaboutus"><span>النظرية المستقبلية</span></div>
        <div id="textaboutas">
            <p>
                في تحقيق رسالتنا، ونحن نسعى للوصول إلى عملائنا أينما كانوا. هذا هو السبب في أننا نخطط لتوسيع حضورنا من خلال فتح منافذ جديدة وتوسيع لدينا تاجر أذن وشبكات الخدمات.
            </p>
            <p>
                قبل الموسم الماضي في عام 2013 و<span id="logoabout00"> <strong>I<span class="point">.</span>T<span class="point">.</span>B</strong> <strong class="ttt">Swiss</strong></span> خطة ل: حول 50 الوكلاء المعتمدين ومراكز الخدمة للحصول حتى أقرب إلى عملائنا في كل مدينة في مصر. على المستوى الإقليمي.
            </p>
            <p>
                <span id="logoabout00"> <strong>I<span class="point">.</span>T<span class="point">.</span>B</strong> <strong class="ttt">Swiss</strong></span>تقوم حاليا بتقييم عدة فرص لدخول أسواق جديدة رئيسيا في منطقة الشرق الأوسط
            </p>
        </div>
    </div>
</div>
