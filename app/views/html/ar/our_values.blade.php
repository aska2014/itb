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
        <div id="headrightaboutus"><span>قيمنا</span></div>
        <div id="textaboutas">
            <strong>لدينا إطار بناء على 7 أعمدة محمية:</strong><br>
            <ol id="textValues">
                <li> <strong class="mmm"> الثقة .. </strong> موثوقة وذات مصداقية، ونحن نعتقد أن العدل والأمانة والشفافية والنزاهة هي أساس للثقة ونجاح. <br>
                </li><li> <strong class="mmm"> الحب .. </strong> العناية والعاطفة، ونحن نحب ما نقوم به ونسعى جاهدين لتمكين أصحاب المصلحة لدينا لتفعل ما تريد. <br>
                </li><li> <strong class="mmm"> التميز .. </strong> وأعلى المعايير، ونحن دائما حريصون على تحسين أنفسنا من خلال الانتباه إلى كل التفاصيل. <br>
                </li><li> <strong class="mmm"> التمكين .. </strong> ونحن تمكين أصحاب المصلحة من أجل تحقيق أهدافهم. <br>
                </li><li> <strong class="mmm"> الابتكار .. </strong> اكتشاف وإيجاد حلول جديدة، وخدماتنا والحلول لتجاوز توقعات شركائنا '. <br>
                </li><li> <strong class="mmm"> المرح .. </strong> والتمتع بها، وخدماتنا وطريقتنا في ممارسة الأعمال التجارية على تمكين عملائنا والعاملين في الاستمتاع بالحياة. <br>
                </li><li> <strong class="mmm"> الكفاءة .. </strong> ونحن نسعى جاهدين لتفعل أشياء أفضل وأسرع بطريقة أكثر كفاءة. <br>
                </li></ol>
        </div>
    </div>
</div>
