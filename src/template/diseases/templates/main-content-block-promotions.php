<div id="Promotions" class="main-content-block-promotions">
    <div class="block-promotions-title">
        <div class="tittle-stock">
            Акции
        </div>
        <div class="all-block">
            <a class="all">
                Все акции
            </a>
            <div class="all-chevron">
                <img src="img/chevron-right-blue.svg" alt="chevron-right">
            </div>
        </div>
    </div>
    <div class="promotions owl-carousel">
        <div class="promotion">
            <img src="img/promotion-item-second.png" alt="" class="mb-2">
            <div class="advertisement advertisement-main">
                <span>Реклама</span>
                <div class="advertisement-tooltip">
                    АПТЕКА <br>
                    ИНН 777777777777 <br>
                    ЕРИД Rghadvggndkjdbdbdb
                </div>
            </div>
            <div class="promotion-text">Скидка 25%</div>
            <div class="promotion-data">С 16.12.24 по 16.01.25</div>
        </div>
        <div class="promotion">
            <img src="img/promotion-item-first.png" alt="" class="mb-2">
            <div class="advertisement advertisement-main">
                <span>Реклама</span>
                <div class="advertisement-tooltip">
                    АПТЕКА <br>
                    ИНН 777777777777 <br>
                    ЕРИД Rghadvggndkjdbdbdb
                </div>
            </div>
            <div class="promotion-text">Скидка 15%</div>
            <div class="promotion-data">С 16.12.24 по 16.01.25</div>
        </div>
        <div class="promotion">
            <img src="img/promotion-item-second.png" alt="" class="mb-2">
            <div class="advertisement advertisement-main">
                <span>Реклама</span>
                <div class="advertisement-tooltip">
                    АПТЕКА <br>
                    ИНН 777777777777 <br>
                    ЕРИД Rghadvggndkjdbdbdb
                </div>
            </div>
            <div class="promotion-text">Скидка 45%</div>
            <div class="promotion-data">С 16.12.24 по 16.01.25</div>
        </div>
        <div class="promotion">
            <img src="img/promotion-item-first.png" alt="" class="mb-2">
            <div class="advertisement advertisement-main">
                <span>Реклама</span>
                <div class="advertisement-tooltip">
                    АПТЕКА <br>
                    ИНН 777777777777 <br>
                    ЕРИД Rghadvggndkjdbdbdb
                </div>
            </div>
            <div class="promotion-text">Скидка 35%</div>
            <div class="promotion-data">С 16.12.24 по 16.01.25</div>
        </div>
    </div>
</div>

<script>
    $(window).on('load', function () {
        $('.promotions.owl-carousel').owlCarousel({
            margin: 20,
            nav: true,
            dots: false,
            loop: true,
            responsive: {
                0: {
                    items: 3.28
                }
            }
        });
    })
</script>