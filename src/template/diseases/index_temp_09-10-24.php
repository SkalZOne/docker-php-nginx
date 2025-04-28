<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>МедПортал</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/tpl_style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="js/scripts.js"></script>
    <script src="js/owl.carousel.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Literata:ital,opsz,wght@0,7..72,200;0,7..72,300;0,7..72,400;0,7..72,500;0,7..72,600;0,7..72,700;0,7..72,800;0,7..72,900;1,7..72,200;1,7..72,300;1,7..72,400;1,7..72,500;1,7..72,600;1,7..72,700;1,7..72,800;1,7..72,900&family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"
    >
</head>
<body>
    <!-- Ну тут типо header должен быть, но давайте без меня -->
    <div style="height: 100px;"><h1 class="text-center">ТИПА ХЕДЕР</h1></div>
    <!-- Ну тут типо header должен быть, но давайте без меня -->

    <!-- main-block -->
    <div class="container-fluid">
        <div class="main-block-slider owl-carousel">
            <div class="container d-flex flex-column p-5 def-border-rad align-items-start" style="background-color: #ffa230;">
                <h1 class="fw-bold text-white col-6">Укрепляем здоровье с витаминами Dr. Verdi</h1>
                <div class="mt-2">Новейшие технологии производства позволяют достичь оптимального баланса ингредиентов, необходимых для здоровья организма.</div>
                <div class="mt-3 button">Забрать за 15 минут</div>
            </div>
            <div class="container d-flex flex-column p-5 def-border-rad align-items-start" style="background-color: #ffa230;">
                <h1 class="fw-bold text-white col-6">Укрепляем здоровье с витаминами Dr. Verdi</h1>
                <div class="mt-2">Новейшие технологии производства позволяют достичь оптимального баланса ингредиентов, необходимых для здоровья организма.</div>
                <div class="mt-3 button">Забрать за 15 минут</div>
            </div>
        </div>
        <script>
            $(window).on('load', function () {
                $('.main-block-slider.owl-carousel').owlCarousel({
                    margin: 30,
                    nav: false,
                    dots: false,
                    loop: false,
                    responsive: {
                        0: {
                            items: 1
                        }
                    }
                });
            })
        </script>
    </div>
    <!-- main-block -->

    <!-- main-content -->
    <div class="container-fluid mt-4">
        <div class="container d-flex px-0">
            <div class="main-content p-5">
                <!-- Хлебные крошки -->
                <div class="d-flex">
                    <div class="fs-mini">Главная</div>
                    <div class="fs-mini mx-2">/</div>
                    <div class="fs-mini">О нас</div>
                    <div class="fs-mini mx-2">/</div>
                    <div class="fs-mini">Сведения об организации</div>
                </div>
                <!-- Хлебные крошки -->

                <!-- Основной контент -->
                <div class="mt-5">
                    <h2 class="fw-bold mb-4">Почему терапевт из «МЕДЭП»?</h2>
                    <ol>
                        <li>Используем мировые клинические рекомендации и стандарты лечения; </li>
                        <li>Комплексный подход к заболеванию и плану лечения; </li>
                        <li>Современное медицинское оборудование; </li>
                        <li>Качественная лабораторная диагностика; </li>
                        <li>Высокий уровень сервиса по оптимальным ценам; </li>
                        <li>Гибкая система скидок; </li>
                        <li>Бонусы для постоянных клиентов; </li>
                        <li>Сезонные акции на услуги врачей и анализы; </li>
                        <li><a href="#">Возможность получить услугу за минимальную стоимость в <b>«Счастливые часы»</b></a></li>
                    </ol>
                </div>
                <div class="mt-5">
                    <h3 class="fw-bold">Как записаться к врачу терапевту?</h3>
                    <div class="fw-bold my-4 focus-color">Записаться на консультацию и прием в семейную клинику «МЕДЭП» в Новых Ватутинках можно несколькими удобными способами:</div>
                    <ol>
                        <li>Оставить заявку на обратный звонок; </li>
                        <li>Позвонить нам по телефону; </li>
                        <li>Написать на адрес электронной почты; </li>
                        <li>Связаться с нами в мессенджерах. </li>
                    </ol>
                </div>
                <div class="mt-5">
                    <h3 class="fw-bold mb-4">Наши сотрудники</h3>
                    <div class="employees owl-carousel">
                        <div class="employee img-hover def-border-rad" style="background-image: url(img/employee1.jpg);">
                            <div class="text-white fw-bold z-2">Трахов Абубачир Вольфович</div></div>
                        <div class="employee img-hover def-border-rad" style="background-image: url(img/employee2.jpg);">
                            <div class="text-white fw-bold z-2">Трахов Абубачир Вольфович</div></div>
                        <div class="employee img-hover def-border-rad" style="background-image: url(img/employee3.jpg);">
                            <div class="text-white fw-bold z-2">Трахов Абубачир Вольфович</div></div>
                        <div class="employee img-hover def-border-rad" style="background-image: url(img/employee4.jpg);">
                            <div class="text-white fw-bold z-2">Трахов Абубачир Вольфович</div></div>
                        <div class="employee img-hover def-border-rad" style="background-image: url(img/employee5.jpg);">
                            <div class="text-white fw-bold z-2">Трахов Абубачир Вольфович</div></div>
                    </div>
                </div>
                <script>
                    $(window).on('load', function () {
                        $('.employees.owl-carousel').owlCarousel({
                            margin: 30,
                            nav: true,
                            dots: false,
                            loop: false,
                            responsive: {
                                0: {
                                    items: 4
                                }
                            }
                        });
                    })
                </script>
                <div class="mt-5">
                    <h3 class="fw-bold mb-4">Кто такой терапевт?</h3>
                    <div class="d-flex justify-content-between">
                        <div class="col-6">
                            <p style="text-align: justify;">Врач терапевт – медицинский специалист, который проводит прием взрослых пациентов – лиц достигших 18-летнего возраста и старше. Именно этот врач занимается диагностикой, лечением и профилактикой заболеваний широкого спектра.  </p>
                            <p style="text-align: justify;">Терапевт определяет природу заболевания и при необходимости направляет к специалистам узкого профиля, таким как гастроэнтеролог, кардиолог, невролог и др. Первым действием при недомогании, вялости или признаках простуды должен быть поход к терапевту или вызов данного специалиста на дом. </p>
                            <p style="text-align: justify;">Консультация терапевта необходима людям с хроническими заболеваниями, людям с предстоящей операцией, в состоянии беременности или тем, кто планирует записаться в спортивную секцию или оздоровительный клуб без вреда для своего здоровья. </p>
                        </div>
                        <div class="col-5"><img class="img-hover mw-100 def-border-rad" src="img/main-content-img1.jpg" alt="" class="mw-100"></div>
                    </div>
                </div>
                <div class="mt-5">
                    <h3 class="fw-bold mb-4">Как выбрать терапевта?</h3>
                    <p style="text-align: justify;">Посещение терапевта в семейной клинике «МЕДЭП» в Новых Ватутинках гарантирует вам получение качественной медицинской помощи экспертного уровня, так как все специалисты проходят своевременное обучение и повышение квалификации по своему профилю, участвуют консилиумах между филиалами, а также имеют возможность получить консультацию у ведущих специалистов Москвы и России (профессоров, докторов и кандидатов медицинских наук).</p>
                </div>
                <div class="d-flex my-5">
                    <a href="#" class="col main-content-low-img" style="background-image: url(img/main-content-ad1.jpg);"></a>
                </div>
                <div class="mt-5">
                    <h3 class="fw-bold">Какие болезни лечит терапевт?</h3>
                    <blockquote class="my-5">Терапевт – это широкопрофильный специалист, перед которым ставятся задачи по диагностике, лечению и профилактике заболеваний внутренних органов человека. Он без труда готов оказать помощь пациентам с патологиями сердечно-сосудистой системы, респираторной системы, печени, почек, мочеполовой системы, желудочно-кишечного тракта и т.д. После определения очага болезни, он незамедлительно выдает направление на прием к специалисту узкого профиля - хирург, гинеколог, уролог и многим другим.</blockquote>
                    <p style="text-align: justify;">Врач терапевт – медицинский специалист, который проводит прием взрослых пациентов – лиц достигших 18-летнего возраста и старше. Именно этот врач занимается диагностикой, лечением и профилактикой заболеваний широкого спектра.</p>
                    <ul>
                        <li>Простудные заболевания - ОРЗ, грипп или сезонная простуда; </li>
                        <li>Патологии сердечно сосудистой системы – стенокардия, аритмия, гипертония, перенесенный инфаркт миокарда, ишемическая болезнь сердца; </li>
                        <li>Болезни ЛОР-органов –ларингит, отит, синусит, болезнь и т.д.; </li>
                        <li>Патологии системы дыхания – бронхиальная астма, бронхит, плеврит, пневмония и пр. </li>
                    </ul>
                    <p style="text-align: justify;">Вышеперечисленное лишь малая часть недугов, с которыми борется врач, поэтому в случае плохого самочувствия настоятельно рекомендуем позвонить в семейную клинику «МЕДЭП» в Новых Ватутинках и записаться на консультацию к терапевту. Не откладывайте на потом, так как от этого зачастую зависит протекание болезни, либо ее возможное обострение.</p>
                    <p style="text-align: justify;">Запись на консультацию и прием к врачу терапевту в семейной клинике в Новых Ватутинках осуществляется по телефону или через форму на сайте. Стоимость первичного приема составляет <b class="focus-color">2500 руб.</b></p>
                </div>
                <div class="mt-5">
                    <h3 class="fw-bold mb-4">Как проходит прием у терапевта? </h3>
                    <div class="d-flex justify-content-between">
                        <div class="col me-5"><img class="img-hover mw-100 def-border-rad" src="img/main-content-img2.jpg" alt="" class="mw-100"></div>
                        <div class="col-6">
                            <p class="focus-color fw-bold" style="text-align: justify;">Прием у терапевта проходит по следующему сценарию:</p>
                            <p style="text-align: justify;">Врач терапевт – медицинский специалист, который проводит прием взрослых пациентов – лиц достигших 18-летнего возраста и старше. Именно этот врач занимается диагностикой, лечением и профилактикой заболеваний широкого спектра.  </p>
                            <p style="text-align: justify;">Терапевт определяет природу заболевания и при необходимости направляет к специалистам узкого профиля, таким как гастроэнтеролог, кардиолог, невролог и др. Первым действием при недомогании, вялости или признаках простуды должен быть поход к терапевту или вызов данного специалиста на дом. </p>
                            <p style="text-align: justify;">Консультация терапевта необходима людям с хроническими заболеваниями, людям с предстоящей операцией, в состоянии беременности или тем, кто планирует записаться в спортивную секцию или оздоровительный клуб без вреда для своего здоровья. </p>
                        </div>
                    </div>
                </div>
                <div class="d-flex my-5">
                    <a href="#" class="col main-content-low-img me-3" style="background-image: url(img/main-content-ad2.jpg);"></a>
                    <a href="#" class="col main-content-low-img" style="background-image: url(img/main-content-ad3.jpg);"></a>
                </div>
                <div class="mt-5">
                    <h3 class="fw-bold mb-4">Итак, вы зашли в кабинет на прием. Что же дальше?</h3>
                    <ol>
                        <li>Врач должен выполнить сбор анамнеза. Внимательно выслушать жалобы и их особенности при проявлении. Уточнить что предшествовало проявлению симптомов или патологий. Спросить у пациента, если ли у него аллергия, хронические заболевания или наследственная предрасположенность; </li>
                        <li>Провести осмотр кожных покровов, видимые слизистых оболочки и оценить конституцию тела. Проверить на наличие ран, травм, асимметрий и других дефектов; </li>
                        <li>Пальпация – определение напряженности мышц, наличие или отсутствие болезненных ощущений в месте осмотра и воздействия, а также проверка подвижности и состояния внутренних органов; </li>
                        <li>Методом простукивания выполнить перкуссию, благодаря которой будет выполнена оценка состояния некоторых внутренних органов, в зависимости от типа звука; </li>
                        <li>Аускультация. Это прослушивание легких, сердца и перистальтики кишечника с помощью стетофонендоскопа; </li>
                        <li>Измерение артериального давления и частоты пульса (сердечных сокращений); </li>
                        <li>Назначение лабораторных анализов и инструментально-диагностических процедур.</li>
                    </ol>
                    <div class="fw-bold focus-color mt-5 mb-4">Наиболее популярные из них, это:</div>
                    <ul>
                        <li>ОАК (общий анализ крови); </li>
                        <li>Анализ крови на гормоны; </li>
                        <li>АМ (анализ мочи); </li>
                        <li>Коагулограмму; </li>
                        <li>Сцинтиграфию; </li>
                        <li>Электрокардиографию; </li>
                        <li>УЗД (УЗИ – ультразвуковое исследования, таких органов как сердце, печень, почки, поджелудочная, щитовидная железа, лимфатические узлы, кровеносные сосуды и т.д.); </li>
                        <li>Флюорографию, рентгенографию, КТ и МРТ; </li>
                        <li>Эндоскопическое исследование – ФГДС, колоноскопия и пр.; </li>
                        <li>Пункционную биопсию. </li>
                    </ul>
                    <blockquote class="my-5">В случае, если диагностических данных достаточно для подтверждения и постановки диагноза, врачом составляется индивидуальный план лечения в зависимости от конкретного клинического случая с последующим процессом контроля лечения до окончательного выздоровления пациента.</blockquote>
                </div>
                <div class="d-flex my-5">
                    <a href="#" class="col main-content-low-img me-3" style="background-image: url(img/main-content-ad4.jpg);"></a>
                    <a href="#" class="col main-content-low-img me-3" style="background-image: url(img/main-content-ad5.jpg);"></a>
                    <a href="#" class="col main-content-low-img" style="background-image: url(img/main-content-ad6.jpg);"></a>
                </div>
                <div class="mt-5">
                    <h3 class="fw-bold mb-5">При каких симптомах обращаются к терапевту?</h3>
                    <div class="mb-4 fw-bold focus-color">Для обращения к терапевту существует большое количество поводов:</div>
                    <p style="text-align: justify;">К сожалению, далеко не все знают в какой момент необходимо выполнить обращение к терапевту, так как не догадываются о важности его роли в медицине. Ответ в этом случае один – при любых проявлениях ухудшения здоровья, общего самочувствия, слабости или недомогании.</p>
                    <ul>
                        <li>Первые симптомы простудных заболеваний: повышенная температура, головные боли и боли в горле, слабость, сонливость, усталость, заложенность носа, кашель и т.д.; </li>
                        <li>Сильная мышечная слабость и услалось даже при небольших физических нагрузках; </li>
                        <li>Нарушение режима сна: бессонница, недосып, сложности с засыпанием и пробуждением; </li>
                        <li>Изменения кожных покровов: микротравмы, сыпь, зуд, пигментные пятна, родинки, папилломы; </li>
                        <li>Различные болевые синдромы в любой локации – шейного или поясничного отдела, голове, груди, животе или гениталиях; </li>
                        <li>Проблемы с весом или питанием – потеря либо чрезмерный аппетит, сильная потеря либо набор в весе, рвота, тошнота или боль во время либо после приема пищи, деформация вкусовых ощущений; </li>
                        <li>Явные проблемы с дыханием – одышка, ощущения сжатости в груди или нехватки воздуха, сухой или влажный кашель, невозможность выполнить глубокий вдох; </li>
                        <li>Нарушение стула или мочеиспускании – диарея, запор, повышенное газообразование, неконтролируемое отхождение газов, наличие крови или гноя в кале и прочих нехарактерных примесей, несвойственный цвет мочи, либо присутствие в ней крови; </li>
                        <li>Психоэмоциональные расстройства – резкая смена настроения, повышенная раздражительность, апатия или плаксивость. </li>
                    </ul>
                    <blockquote class="my-5">Проведя осмотр, врач терапевт назначит дополнительные обследования, если это требуется для постановки точного диагноза, а после его подтверждения выпишет лечение и проконтролирует полное выздоровление.</blockquote>
                </div>

                <!-- запись на прием -->
                <div class="appointment p-5">
                    <div class="col-auto me-5"><img style="height:70px;" src="img/document.png" alt="" class="mw-100"></div>
                    <div class="col">
                        Записаться на прием к врачу терапевту вы можете по телефону<br>
                        <b><a href="tel:88002223402">8 (800) 222-34-02</a></b> либо оставьте заявку через <b>форму обратной связи</b>.
                    </div>
                    <div class="col-auto">
                        <div class="button">Записаться</div>
                    </div>
                </div>
                <!-- запись на прием -->

                <div class="mt-5">
                    <div class="mb-2">Поделиться статьей</div>
                    <div class="d-flex">
                        <a href="" class="share-btn def-border-rad">
                            <img src="img/vk_icon.png" alt="">
                        </a>
                        <a href="" class="share-btn def-border-rad">
                            <img src="img/telegram_icon.png" alt="">
                        </a>
                        <a href="" class="share-btn def-border-rad">
                            <img src="img/whatsapp_icon.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="fw-bold m-0">Акции</h3>
                        <div class="product-btn fw-bold fs-mini px-3 py-2">Посмотреть все акции</div>
                    </div>
                    <div class="promotions owl-carousel">
                        <div class="promotion">
                            <img src="img/promotion-card1.webp" alt="" class="mb-2">
                            <div class="mt-2">Скидка 15%</div>
                        </div>
                        <div class="promotion">
                            <img src="img/promotion-card1.webp" alt="" class="mb-2">
                            <div class="mt-2">Аттракцион невиданной щедрости!</div>
                        </div>
                        <div class="promotion">
                            <img src="img/promotion-card1.webp" alt="" class="mb-2">
                            <div class="mt-2">Розыгрыш призов</div>
                        </div>
                        <div class="promotion">
                            <img src="img/promotion-card1.webp" alt="" class="mb-2">
                            <div class="mt-2">Новинка</div>
                        </div>
                        <div class="promotion">
                            <img src="img/promotion-card1.webp" alt="" class="mb-2">
                            <div class="mt-2">Скидка 20%</div>
                        </div>
                    </div>
                </div>
                <script>
                    $(window).on('load', function () {
                        $('.promotions.owl-carousel').owlCarousel({
                            margin: 30,
                            nav: true,
                            dots: false,
                            loop: true,
                            responsive: {
                                0: {
                                    items: 4.5
                                }
                            }
                        });
                    })
                </script>
                <div class="d-flex mt-4">
                    <div class="product-btn-alt active fw-bold fs-mini px-3 py-2 me-3">Лучшие предложения</div>
                    <div class="product-btn-alt fw-bold fs-mini px-3 py-2 me-3">Популярные товары</div>
                    <div class="product-btn-alt fw-bold fs-mini px-3 py-2 me-3">Вместе выгоднее!</div>
                    <div class="product-btn-alt fw-bold fs-mini px-3 py-2 me-3">-20% при покупке 2-х</div>
                    <div class="product-btn-alt fw-bold fs-mini px-3 py-2 me-3">-30% на 2-ую упаковку</div>
                    <div class="product-btn-alt fw-bold fs-mini px-3 py-2 me-3">К школе готов</div>
                    <div class="product-btn-alt fw-bold fs-mini px-3 py-2 me-3">Новинки</div>
                </div>
                <div class="mt-4">
                    <div class="products owl-carousel">
                        <div class="product p-2">
                            <div class="d-flex flex-column">
                                <img src="img/product-1.png" alt="">
                                <div class="mt-2 fs-mini">Lorem ipsum dolor sit</div>
                            </div>
                            <div class="product-separator">
                                <div class="d-flex align-items-center py-2">
                                    <div class="fs-mini">Цена: </div>
                                    <div class="fw-bold me-1">10 ₽</div>
                                    <div class="old-price">15 ₽</div>
                                    <div class="text-white fw-bold fs-mini primary-bg def-border-rad ms-1 px-1">20%</div>
                                </div>
                                <div class="button primary-bg fs-mini">Купить</div>
                            </div>
                        </div>
                        <div class="product p-2">
                            <div class="d-flex flex-column">
                                <img src="img/product-2.png" alt="">
                                <div class="mt-2 fs-mini">Lorem ipsum dolor sit, amet consectetur adipisicing.</div>
                            </div>
                            <div class="product-separator">
                                <div class="d-flex align-items-center py-2">
                                    <div class="fs-mini">Цена: </div>
                                    <div class="fw-bold me-1">100 ₽</div>
                                    <div class="old-price">150 ₽</div>
                                    <div class="text-white fw-bold fs-mini primary-bg def-border-rad ms-1 px-1">20%</div>
                                </div>
                                <div class="button primary-bg fs-mini">Купить</div>
                            </div>
                        </div>
                        <div class="product p-2">
                            <div class="d-flex flex-column">
                                <img src="img/product-3.png" alt="">
                                <div class="mt-2 fs-mini">Lorem ipsum dolor sit, amet consectetur adipisicing. amet consectetur adipisicing. amet consectetur adipisicing</div>
                            </div>
                            <div class="product-separator">
                                <div class="d-flex align-items-center py-2">
                                    <div class="fs-mini">Цена: </div>
                                    <div class="fw-bold me-1">1 000 ₽</div>
                                    <div class="old-price">1 5000 ₽</div>
                                    <div class="text-white fw-bold fs-mini primary-bg def-border-rad ms-1 px-1">20%</div>
                                </div>
                                <div class="button primary-bg fs-mini">Купить</div>
                            </div>
                        </div>
                        <div class="product p-2">
                            <div class="d-flex flex-column">
                                <img src="img/product-1.png" alt="">
                                <div class="mt-2 fs-mini">Lorem ipsum dolor sit, amet consectetur adipisicing. amet consectetur adipisicing. amet consectetur adipisicing. amet consectetur adipisicing. amet consectetur adipisicing</div>
                            </div>
                            <div class="product-separator">
                                <div class="d-flex align-items-center py-2">
                                    <div class="fs-mini">Цена: </div>
                                    <div class="fw-bold me-1">10 000 ₽</div>
                                    <div class="old-price">15 000 ₽</div>
                                    <div class="text-white fw-bold fs-mini primary-bg def-border-rad ms-1 px-1">20%</div>
                                </div>
                                <div class="button primary-bg fs-mini">Купить</div>
                            </div>
                        </div>
                        <div class="product p-2">
                            <div class="d-flex flex-column">
                                <img src="img/product-2.png" alt="">
                                <div class="mt-2 fs-mini">Lorem ipsum dolor sit, amet consectetur adipisicing. amet consectetur adipisicing</div>
                            </div>
                            <div class="product-separator">
                                <div class="d-flex align-items-center py-2">
                                    <div class="fs-mini">Цена: </div>
                                    <div class="fw-bold me-1">10.12 ₽</div>
                                    <div class="old-price">15.12 ₽</div>
                                    <div class="text-white fw-bold fs-mini primary-bg def-border-rad ms-1 px-1">20%</div>
                                </div>
                                <div class="button primary-bg fs-mini">Купить</div>
                            </div>
                        </div>
                        <div class="product p-2">
                            <div class="d-flex flex-column">
                                <img src="img/product-3.png" alt="">
                                <div class="mt-2 fs-mini">Lorem ipsum dolor sit, amet consectetur adipisicing</div>
                            </div>
                            <div class="product-separator">
                                <div class="d-flex align-items-center py-2">
                                    <div class="fs-mini">Цена: </div>
                                    <div class="fw-bold me-1">1 000 ₽</div>
                                    <div class="old-price">1 500 ₽</div>
                                    <div class="text-white fw-bold fs-mini primary-bg def-border-rad ms-1 px-1">20%</div>
                                </div>
                                <div class="button primary-bg fs-mini">Купить</div>
                            </div>
                        </div>
                        <div class="product p-2">
                            <div class="d-flex flex-column">
                                <img src="img/product-1.png" alt="">
                                <div class="mt-2 fs-mini">Lorem ipsum dolor sit</div>
                            </div>
                            <div class="product-separator">
                                <div class="d-flex align-items-center py-2">
                                    <div class="fs-mini">Цена: </div>
                                    <div class="fw-bold me-1">10 000 ₽</div>
                                    <div class="old-price">15 000 ₽</div>
                                    <div class="text-white fw-bold fs-mini primary-bg def-border-rad ms-1 px-1">20%</div>
                                </div>
                                <div class="button primary-bg fs-mini">Купить</div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    $(window).on('load', function () {
                        $('.products.owl-carousel').owlCarousel({
                            margin: 2,
                            nav: true,
                            dots: false,
                            loop: false,
                            responsive: {
                                0: {
                                    items: 6
                                }
                            }
                        });
                    }).on('initialized.owl.carousel', function(event){
                        maxHeight = 0;
                        $(event.target).find('.product').each(function(){
                            if( $(this).height() > maxHeight ) {
                                maxHeight = $(this).height();
                            }
                        });
                        $(event.target).find('.product').each(function(){
                            $(this).height(maxHeight);
                        });
                    });
                </script>

                <!-- Основной контент -->
            </div>

            <div class="side-content ms-3 px-2">
                <div class="d-flex flex-column align-items-start def-border-rad def-shadow bg-white">
                    <img class="mw-100" src="img/side-bar-img1.jpg" alt="" style="border-top-left-radius: var(--default-border-radius);border-top-right-radius: var(--default-border-radius);">
                    <h6 class="fw-bold my-2 px-3">Медицинский центр «МОСМЕДПРОФ»</h6>
                    <div class="d-flex align-items-center mb-2 px-3">
                        <svg width="17px" height="17px" viewBox="0 0 24 24" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.75C6.89137 2.75 2.75 6.89137 2.75 12C2.75 17.1086 6.89137 21.25 12 21.25C17.1086 21.25 21.25 17.1086 21.25 12C21.25 6.89137 17.1086 2.75 12 2.75ZM1.25 12C1.25 6.06294 6.06294 1.25 12 1.25C17.9371 1.25 22.75 6.06294 22.75 12C22.75 17.9371 17.9371 22.75 12 22.75C6.06294 22.75 1.25 17.9371 1.25 12ZM12 7.25C12.4142 7.25 12.75 7.58579 12.75 8V11.6893L15.0303 13.9697C15.3232 14.2626 15.3232 14.7374 15.0303 15.0303C14.7374 15.3232 14.2626 15.3232 13.9697 15.0303L11.4697 12.5303C11.329 12.3897 11.25 12.1989 11.25 12V8C11.25 7.58579 11.5858 7.25 12 7.25Z" fill="var(--focus-color)"/>
                        </svg>
                        <div class="focus-color ms-4">Открыто до 21:00</div>
                    </div>
                    <div class="d-flex align-items-center px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17px" height="17px" viewBox="0 0 24 24" fill="none">
                            <path d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z" stroke="var(--focus-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z" stroke="var(--focus-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div class="focus-color ms-4">ул. Школьная, д. 11/3</div>
                    </div>
                    <ul class="nostyle fs-mini focus-color ms-5 mb-2 px-3">
                        <li>
                            Римская
                            <svg width="15px" height="15px" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13 6C14.1046 6 15 5.10457 15 4C15 2.89543 14.1046 2 13 2C11.8955 2 11 2.89543 11 4C11 5.10457 11.8955 6 13 6ZM11.0528 6.60557C11.3841 6.43992 11.7799 6.47097 12.0813 6.68627L13.0813 7.40056C13.3994 7.6278 13.5559 8.01959 13.482 8.40348L12.4332 13.847L16.8321 20.4453C17.1384 20.9048 17.0143 21.5257 16.5547 21.8321C16.0952 22.1384 15.4743 22.0142 15.168 21.5547L10.5416 14.6152L9.72611 13.3919C9.58336 13.1778 9.52866 12.9169 9.57338 12.6634L10.1699 9.28309L8.38464 10.1757L7.81282 13.0334C7.70445 13.575 7.17759 13.9261 6.63604 13.8178C6.09449 13.7094 5.74333 13.1825 5.85169 12.641L6.51947 9.30379C6.58001 9.00123 6.77684 8.74356 7.05282 8.60557L11.0528 6.60557ZM16.6838 12.9487L13.8093 11.9905L14.1909 10.0096L17.3163 11.0513C17.8402 11.226 18.1234 11.7923 17.9487 12.3162C17.7741 12.8402 17.2078 13.1234 16.6838 12.9487ZM6.12844 20.5097L9.39637 14.7001L9.70958 15.1699L10.641 16.5669L7.87159 21.4903C7.60083 21.9716 6.99111 22.1423 6.50976 21.8716C6.0284 21.6008 5.85768 20.9911 6.12844 20.5097Z" fill="var(--focus-color)"/>
                            </svg>
                            9 мин
                        </li>
                        <li>
                            Площадь Ильича
                            <svg width="15px" height="15px" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13 6C14.1046 6 15 5.10457 15 4C15 2.89543 14.1046 2 13 2C11.8955 2 11 2.89543 11 4C11 5.10457 11.8955 6 13 6ZM11.0528 6.60557C11.3841 6.43992 11.7799 6.47097 12.0813 6.68627L13.0813 7.40056C13.3994 7.6278 13.5559 8.01959 13.482 8.40348L12.4332 13.847L16.8321 20.4453C17.1384 20.9048 17.0143 21.5257 16.5547 21.8321C16.0952 22.1384 15.4743 22.0142 15.168 21.5547L10.5416 14.6152L9.72611 13.3919C9.58336 13.1778 9.52866 12.9169 9.57338 12.6634L10.1699 9.28309L8.38464 10.1757L7.81282 13.0334C7.70445 13.575 7.17759 13.9261 6.63604 13.8178C6.09449 13.7094 5.74333 13.1825 5.85169 12.641L6.51947 9.30379C6.58001 9.00123 6.77684 8.74356 7.05282 8.60557L11.0528 6.60557ZM16.6838 12.9487L13.8093 11.9905L14.1909 10.0096L17.3163 11.0513C17.8402 11.226 18.1234 11.7923 17.9487 12.3162C17.7741 12.8402 17.2078 13.1234 16.6838 12.9487ZM6.12844 20.5097L9.39637 14.7001L9.70958 15.1699L10.641 16.5669L7.87159 21.4903C7.60083 21.9716 6.99111 22.1423 6.50976 21.8716C6.0284 21.6008 5.85768 20.9911 6.12844 20.5097Z" fill="var(--focus-color)"/>
                            </svg>
                            9 мин
                        </li>
                        <li>
                            Марксистская
                            <svg width="15px" height="15px" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13 6C14.1046 6 15 5.10457 15 4C15 2.89543 14.1046 2 13 2C11.8955 2 11 2.89543 11 4C11 5.10457 11.8955 6 13 6ZM11.0528 6.60557C11.3841 6.43992 11.7799 6.47097 12.0813 6.68627L13.0813 7.40056C13.3994 7.6278 13.5559 8.01959 13.482 8.40348L12.4332 13.847L16.8321 20.4453C17.1384 20.9048 17.0143 21.5257 16.5547 21.8321C16.0952 22.1384 15.4743 22.0142 15.168 21.5547L10.5416 14.6152L9.72611 13.3919C9.58336 13.1778 9.52866 12.9169 9.57338 12.6634L10.1699 9.28309L8.38464 10.1757L7.81282 13.0334C7.70445 13.575 7.17759 13.9261 6.63604 13.8178C6.09449 13.7094 5.74333 13.1825 5.85169 12.641L6.51947 9.30379C6.58001 9.00123 6.77684 8.74356 7.05282 8.60557L11.0528 6.60557ZM16.6838 12.9487L13.8093 11.9905L14.1909 10.0096L17.3163 11.0513C17.8402 11.226 18.1234 11.7923 17.9487 12.3162C17.7741 12.8402 17.2078 13.1234 16.6838 12.9487ZM6.12844 20.5097L9.39637 14.7001L9.70958 15.1699L10.641 16.5669L7.87159 21.4903C7.60083 21.9716 6.99111 22.1423 6.50976 21.8716C6.0284 21.6008 5.85768 20.9911 6.12844 20.5097Z" fill="var(--focus-color)"/>
                            </svg>
                            13 мин
                        </li>
                    </ul>
                    <div class="d-flex align-items-center px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17px" height="17px" viewBox="0 0 24 24" fill="none">
                            <path d="M3 5.5C3 14.0604 9.93959 21 18.5 21C18.8862 21 19.2691 20.9859 19.6483 20.9581C20.0834 20.9262 20.3009 20.9103 20.499 20.7963C20.663 20.7019 20.8185 20.5345 20.9007 20.364C21 20.1582 21 19.9181 21 19.438V16.6207C21 16.2169 21 16.015 20.9335 15.842C20.8749 15.6891 20.7795 15.553 20.6559 15.4456C20.516 15.324 20.3262 15.255 19.9468 15.117L16.74 13.9509C16.2985 13.7904 16.0777 13.7101 15.8683 13.7237C15.6836 13.7357 15.5059 13.7988 15.3549 13.9058C15.1837 14.0271 15.0629 14.2285 14.8212 14.6314L14 16C11.3501 14.7999 9.2019 12.6489 8 10L9.36863 9.17882C9.77145 8.93713 9.97286 8.81628 10.0942 8.64506C10.2012 8.49408 10.2643 8.31637 10.2763 8.1317C10.2899 7.92227 10.2096 7.70153 10.0491 7.26005L8.88299 4.05321C8.745 3.67376 8.67601 3.48403 8.55442 3.3441C8.44701 3.22049 8.31089 3.12515 8.15802 3.06645C7.98496 3 7.78308 3 7.37932 3H4.56201C4.08188 3 3.84181 3 3.63598 3.09925C3.4655 3.18146 3.29814 3.33701 3.2037 3.50103C3.08968 3.69907 3.07375 3.91662 3.04189 4.35173C3.01413 4.73086 3 5.11378 3 5.5Z" stroke="var(--bs-secondary-text-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div class="secondary-color ms-4">+7 495 023-19-56</div>
                    </div>
                    <div class="px-3 py-2 fw-bold fs-mini button secondary-bg mx-auto my-3">Записаться на прием</div>
                </div>
                <div class="mt-4 def-shadow def-border-rad">
                    <a href=""><img class="mw-100 def-border-rad" style="aspect-ratio: 0.9;" src="img/side-bar-banner1.jpg" alt=""></a>
                    
                </div>
                <div class="mt-5">
                    <h5 class="fw-bold mb-4">Лекарственные препараты</h5>
                    <div class="mb-2 d-flex align-items-center bg-white def-shadow def-border-rad p-3 img-hover cursor-pointer">
                        <img src="img/drug1.png" style="height:50px;width:50px;" alt="">
                        <div class="ms-3">Противовирусные средства</div>
                    </div>
                    <div class="mb-2 d-flex align-items-center bg-white def-shadow def-border-rad p-3 img-hover cursor-pointer">
                        <svg width="50px" height="50px" viewBox="0 0 1024 1024">
                            <path d="M776 239l-48-13 48-13 13-49 13 49 48 13-48 13-13 48-13-48zM824 292l-19-5 19-4 4-19 5 19 18 4-18 5-5 18-4-18z" fill="#FDCD60"/><path d="M184 562l-21-5 21-5 5-21 5 21 21 5-21 5-5 21-5-21z" fill="#FDCD60"/><path d="M212 255m-9 0a9 9 0 1 0 18 0 9 9 0 1 0-18 0Z" fill="#5546CB"/><path d="M805 754a25 25 0 1 1 25-25 25 25 0 0 1-25 25z m0-36a10 10 0 1 0 10 10 10 10 0 0 0-10-10z" fill="#5546CB"/><path d="M747.553228 751.6268l51.618795 51.618795-125.942789 125.942788-51.618795-51.618795 125.942789-125.942788Z" fill="#F97744"/><path d="M695 820l-40 40c-10 10-10 27 1 38 9 8 25 9 36-1l40-40zM232 847l-27-6 27-7 6-27 7 27 27 7-27 6-7 27-6-27z" fill="#FDCD60"/><path d="M723 677V460H308v217zM459 559h49v-49h20v49h49v20h-49v49h-20v-49h-49z" fill="#FFFFFF"/><path d="M632 765a47 47 0 0 1 66 0l11 11 5-5 9-7v-67H307v132a34 34 0 0 0 34 34h288a47 47 0 0 1 11-19l3-3-11-11a47 47 0 0 1 0-65zM723 369a34 34 0 0 0-34-34H544v-74h-58v73H341a34 34 0 0 0-34 34v71h416zM508 628h20v-49h49v-20h-49v-49h-20v49h-49v20h49v49z" fill="#FF8859"/><path d="M424 153h19v87.98h-19zM464 153h19v87.98h-19zM385 154v87h19v-88h-19zM645 240v-86h-24v88h23zM582 153h19v87.98h-19zM503 153h19v87.98h-19zM543 153h19v87.98h-19z" fill="#FDCD60"/><path d="M724 893a27 27 0 0 0 37-37zM695 790l-11-11a27 27 0 0 0-38 38l11 11z" fill="#AFBCF3"/><path d="M650 889l-2-6zM748 777a26 26 0 0 0-18 8l-48 48 13-13 37 36-20 20 55-55a26 26 0 0 0-18-44z" fill="#F97744"/><path d="M781 836a47 47 0 0 0-38-80V369a54 54 0 0 0-54-54H564v-54h80a21 21 0 0 0 21-21v-86a21 21 0 0 0-21-21H386a21 21 0 0 0-21 21v87a21 21 0 0 0 21 21h80v54H341a54 54 0 0 0-54 54v459a54 54 0 0 0 54 54h286a47 47 0 0 0 80 28l3-3a47 47 0 0 0 66-66zM621 153h23v87h-23z m-39 0h19v88h-19z m141 307v217H308V460zM543 153h19v88h-19z m-39 0h19v88h-20z m-99 88h-20v-87h19z m39 0h-20v-88h19z m20 0v-88h19v88zM307 369a34 34 0 0 1 34-34h145v-74h59v73h144a34 34 0 0 1 34 34v71H307z m333 475a47 47 0 0 0-11 19H341a34 34 0 0 1-34-34V697h416v66l-9 7-5 5-11-11a47 47 0 0 0-66 66l11 11z m7-65a27 27 0 0 1 38 0l11 11-38 38-11-11a27 27 0 0 1 0-38z m111 112a27 27 0 0 1-34 3l37-37a27 27 0 0 1-3 34z m8-69l-55 55-20 20c-10 10-27 9-36 1l-5-7-2-6a26 26 0 0 1 7-23l27-26 48-48a26 26 0 0 1 37 37z" fill="#5546CB"/><path d="M695 819l-13 13-27 26a26 26 0 0 0-7 23l2 6 5 7c9 8 25 9 36-1l20-20 20-20z" fill="#FDCD60"/>
                        </svg>
                        <div class="ms-3">От насморка</div>
                    </div>
                    <div class="mb-2 d-flex align-items-center bg-white def-shadow def-border-rad p-3 img-hover cursor-pointer">
                        <img src="img/drug1.png" style="height:50px;width:50px;" alt="">
                        <div class="ms-3">Здоровье горла</div>
                    </div>
                    <div class="mb-2 d-flex align-items-center bg-white def-shadow def-border-rad p-3 img-hover cursor-pointer">
                        <svg width="50px" height="50px" viewBox="0 0 1024 1024">
                            <path d="M776 239l-48-13 48-13 13-49 13 49 48 13-48 13-13 48-13-48zM824 292l-19-5 19-4 4-19 5 19 18 4-18 5-5 18-4-18z" fill="#FDCD60"/><path d="M184 562l-21-5 21-5 5-21 5 21 21 5-21 5-5 21-5-21z" fill="#FDCD60"/><path d="M212 255m-9 0a9 9 0 1 0 18 0 9 9 0 1 0-18 0Z" fill="#5546CB"/><path d="M805 754a25 25 0 1 1 25-25 25 25 0 0 1-25 25z m0-36a10 10 0 1 0 10 10 10 10 0 0 0-10-10z" fill="#5546CB"/><path d="M747.553228 751.6268l51.618795 51.618795-125.942789 125.942788-51.618795-51.618795 125.942789-125.942788Z" fill="#F97744"/><path d="M695 820l-40 40c-10 10-10 27 1 38 9 8 25 9 36-1l40-40zM232 847l-27-6 27-7 6-27 7 27 27 7-27 6-7 27-6-27z" fill="#FDCD60"/><path d="M723 677V460H308v217zM459 559h49v-49h20v49h49v20h-49v49h-20v-49h-49z" fill="#FFFFFF"/><path d="M632 765a47 47 0 0 1 66 0l11 11 5-5 9-7v-67H307v132a34 34 0 0 0 34 34h288a47 47 0 0 1 11-19l3-3-11-11a47 47 0 0 1 0-65zM723 369a34 34 0 0 0-34-34H544v-74h-58v73H341a34 34 0 0 0-34 34v71h416zM508 628h20v-49h49v-20h-49v-49h-20v49h-49v20h49v49z" fill="#FF8859"/><path d="M424 153h19v87.98h-19zM464 153h19v87.98h-19zM385 154v87h19v-88h-19zM645 240v-86h-24v88h23zM582 153h19v87.98h-19zM503 153h19v87.98h-19zM543 153h19v87.98h-19z" fill="#FDCD60"/><path d="M724 893a27 27 0 0 0 37-37zM695 790l-11-11a27 27 0 0 0-38 38l11 11z" fill="#AFBCF3"/><path d="M650 889l-2-6zM748 777a26 26 0 0 0-18 8l-48 48 13-13 37 36-20 20 55-55a26 26 0 0 0-18-44z" fill="#F97744"/><path d="M781 836a47 47 0 0 0-38-80V369a54 54 0 0 0-54-54H564v-54h80a21 21 0 0 0 21-21v-86a21 21 0 0 0-21-21H386a21 21 0 0 0-21 21v87a21 21 0 0 0 21 21h80v54H341a54 54 0 0 0-54 54v459a54 54 0 0 0 54 54h286a47 47 0 0 0 80 28l3-3a47 47 0 0 0 66-66zM621 153h23v87h-23z m-39 0h19v88h-19z m141 307v217H308V460zM543 153h19v88h-19z m-39 0h19v88h-20z m-99 88h-20v-87h19z m39 0h-20v-88h19z m20 0v-88h19v88zM307 369a34 34 0 0 1 34-34h145v-74h59v73h144a34 34 0 0 1 34 34v71H307z m333 475a47 47 0 0 0-11 19H341a34 34 0 0 1-34-34V697h416v66l-9 7-5 5-11-11a47 47 0 0 0-66 66l11 11z m7-65a27 27 0 0 1 38 0l11 11-38 38-11-11a27 27 0 0 1 0-38z m111 112a27 27 0 0 1-34 3l37-37a27 27 0 0 1-3 34z m8-69l-55 55-20 20c-10 10-27 9-36 1l-5-7-2-6a26 26 0 0 1 7-23l27-26 48-48a26 26 0 0 1 37 37z" fill="#5546CB"/><path d="M695 819l-13 13-27 26a26 26 0 0 0-7 23l2 6 5 7c9 8 25 9 36-1l20-20 20-20z" fill="#FDCD60"/>
                        </svg>
                        <div class="ms-3">Лечение простуды</div>
                    </div>
                    <div class="mb-2 d-flex align-items-center bg-white def-shadow def-border-rad p-3 img-hover cursor-pointer">
                        <img src="img/drug1.png" style="height:50px;width:50px;" alt="">
                        <div class="ms-3">От повышенного давления</div>
                    </div>
                    <div class="mb-2 d-flex align-items-center bg-white def-shadow def-border-rad p-3 img-hover cursor-pointer">
                        <svg width="50px" height="50px" viewBox="0 0 1024 1024">
                            <path d="M776 239l-48-13 48-13 13-49 13 49 48 13-48 13-13 48-13-48zM824 292l-19-5 19-4 4-19 5 19 18 4-18 5-5 18-4-18z" fill="#FDCD60"/><path d="M184 562l-21-5 21-5 5-21 5 21 21 5-21 5-5 21-5-21z" fill="#FDCD60"/><path d="M212 255m-9 0a9 9 0 1 0 18 0 9 9 0 1 0-18 0Z" fill="#5546CB"/><path d="M805 754a25 25 0 1 1 25-25 25 25 0 0 1-25 25z m0-36a10 10 0 1 0 10 10 10 10 0 0 0-10-10z" fill="#5546CB"/><path d="M747.553228 751.6268l51.618795 51.618795-125.942789 125.942788-51.618795-51.618795 125.942789-125.942788Z" fill="#F97744"/><path d="M695 820l-40 40c-10 10-10 27 1 38 9 8 25 9 36-1l40-40zM232 847l-27-6 27-7 6-27 7 27 27 7-27 6-7 27-6-27z" fill="#FDCD60"/><path d="M723 677V460H308v217zM459 559h49v-49h20v49h49v20h-49v49h-20v-49h-49z" fill="#FFFFFF"/><path d="M632 765a47 47 0 0 1 66 0l11 11 5-5 9-7v-67H307v132a34 34 0 0 0 34 34h288a47 47 0 0 1 11-19l3-3-11-11a47 47 0 0 1 0-65zM723 369a34 34 0 0 0-34-34H544v-74h-58v73H341a34 34 0 0 0-34 34v71h416zM508 628h20v-49h49v-20h-49v-49h-20v49h-49v20h49v49z" fill="#FF8859"/><path d="M424 153h19v87.98h-19zM464 153h19v87.98h-19zM385 154v87h19v-88h-19zM645 240v-86h-24v88h23zM582 153h19v87.98h-19zM503 153h19v87.98h-19zM543 153h19v87.98h-19z" fill="#FDCD60"/><path d="M724 893a27 27 0 0 0 37-37zM695 790l-11-11a27 27 0 0 0-38 38l11 11z" fill="#AFBCF3"/><path d="M650 889l-2-6zM748 777a26 26 0 0 0-18 8l-48 48 13-13 37 36-20 20 55-55a26 26 0 0 0-18-44z" fill="#F97744"/><path d="M781 836a47 47 0 0 0-38-80V369a54 54 0 0 0-54-54H564v-54h80a21 21 0 0 0 21-21v-86a21 21 0 0 0-21-21H386a21 21 0 0 0-21 21v87a21 21 0 0 0 21 21h80v54H341a54 54 0 0 0-54 54v459a54 54 0 0 0 54 54h286a47 47 0 0 0 80 28l3-3a47 47 0 0 0 66-66zM621 153h23v87h-23z m-39 0h19v88h-19z m141 307v217H308V460zM543 153h19v88h-19z m-39 0h19v88h-20z m-99 88h-20v-87h19z m39 0h-20v-88h19z m20 0v-88h19v88zM307 369a34 34 0 0 1 34-34h145v-74h59v73h144a34 34 0 0 1 34 34v71H307z m333 475a47 47 0 0 0-11 19H341a34 34 0 0 1-34-34V697h416v66l-9 7-5 5-11-11a47 47 0 0 0-66 66l11 11z m7-65a27 27 0 0 1 38 0l11 11-38 38-11-11a27 27 0 0 1 0-38z m111 112a27 27 0 0 1-34 3l37-37a27 27 0 0 1-3 34z m8-69l-55 55-20 20c-10 10-27 9-36 1l-5-7-2-6a26 26 0 0 1 7-23l27-26 48-48a26 26 0 0 1 37 37z" fill="#5546CB"/><path d="M695 819l-13 13-27 26a26 26 0 0 0-7 23l2 6 5 7c9 8 25 9 36-1l20-20 20-20z" fill="#FDCD60"/>
                        </svg>
                        <div class="ms-3">От пониженного давления</div>
                    </div>
                    <div class="mb-2 d-flex align-items-center bg-white def-shadow def-border-rad p-3 img-hover cursor-pointer">
                        <img src="img/drug1.png" style="height:50px;width:50px;" alt="">
                        <div class="ms-3">Лечение аллергии</div>
                    </div>
                    <div class="mb-2 d-flex align-items-center bg-white def-shadow def-border-rad p-3 img-hover cursor-pointer">
                        <svg width="50px" height="50px" viewBox="0 0 1024 1024">
                            <path d="M776 239l-48-13 48-13 13-49 13 49 48 13-48 13-13 48-13-48zM824 292l-19-5 19-4 4-19 5 19 18 4-18 5-5 18-4-18z" fill="#FDCD60"/><path d="M184 562l-21-5 21-5 5-21 5 21 21 5-21 5-5 21-5-21z" fill="#FDCD60"/><path d="M212 255m-9 0a9 9 0 1 0 18 0 9 9 0 1 0-18 0Z" fill="#5546CB"/><path d="M805 754a25 25 0 1 1 25-25 25 25 0 0 1-25 25z m0-36a10 10 0 1 0 10 10 10 10 0 0 0-10-10z" fill="#5546CB"/><path d="M747.553228 751.6268l51.618795 51.618795-125.942789 125.942788-51.618795-51.618795 125.942789-125.942788Z" fill="#F97744"/><path d="M695 820l-40 40c-10 10-10 27 1 38 9 8 25 9 36-1l40-40zM232 847l-27-6 27-7 6-27 7 27 27 7-27 6-7 27-6-27z" fill="#FDCD60"/><path d="M723 677V460H308v217zM459 559h49v-49h20v49h49v20h-49v49h-20v-49h-49z" fill="#FFFFFF"/><path d="M632 765a47 47 0 0 1 66 0l11 11 5-5 9-7v-67H307v132a34 34 0 0 0 34 34h288a47 47 0 0 1 11-19l3-3-11-11a47 47 0 0 1 0-65zM723 369a34 34 0 0 0-34-34H544v-74h-58v73H341a34 34 0 0 0-34 34v71h416zM508 628h20v-49h49v-20h-49v-49h-20v49h-49v20h49v49z" fill="#FF8859"/><path d="M424 153h19v87.98h-19zM464 153h19v87.98h-19zM385 154v87h19v-88h-19zM645 240v-86h-24v88h23zM582 153h19v87.98h-19zM503 153h19v87.98h-19zM543 153h19v87.98h-19z" fill="#FDCD60"/><path d="M724 893a27 27 0 0 0 37-37zM695 790l-11-11a27 27 0 0 0-38 38l11 11z" fill="#AFBCF3"/><path d="M650 889l-2-6zM748 777a26 26 0 0 0-18 8l-48 48 13-13 37 36-20 20 55-55a26 26 0 0 0-18-44z" fill="#F97744"/><path d="M781 836a47 47 0 0 0-38-80V369a54 54 0 0 0-54-54H564v-54h80a21 21 0 0 0 21-21v-86a21 21 0 0 0-21-21H386a21 21 0 0 0-21 21v87a21 21 0 0 0 21 21h80v54H341a54 54 0 0 0-54 54v459a54 54 0 0 0 54 54h286a47 47 0 0 0 80 28l3-3a47 47 0 0 0 66-66zM621 153h23v87h-23z m-39 0h19v88h-19z m141 307v217H308V460zM543 153h19v88h-19z m-39 0h19v88h-20z m-99 88h-20v-87h19z m39 0h-20v-88h19z m20 0v-88h19v88zM307 369a34 34 0 0 1 34-34h145v-74h59v73h144a34 34 0 0 1 34 34v71H307z m333 475a47 47 0 0 0-11 19H341a34 34 0 0 1-34-34V697h416v66l-9 7-5 5-11-11a47 47 0 0 0-66 66l11 11z m7-65a27 27 0 0 1 38 0l11 11-38 38-11-11a27 27 0 0 1 0-38z m111 112a27 27 0 0 1-34 3l37-37a27 27 0 0 1-3 34z m8-69l-55 55-20 20c-10 10-27 9-36 1l-5-7-2-6a26 26 0 0 1 7-23l27-26 48-48a26 26 0 0 1 37 37z" fill="#5546CB"/><path d="M695 819l-13 13-27 26a26 26 0 0 0-7 23l2 6 5 7c9 8 25 9 36-1l20-20 20-20z" fill="#FDCD60"/>
                        </svg>
                        <div class="ms-3">От изжоги</div>
                    </div>
                </div>
                <div class="side-bar-item1 mt-4 p-4 def-shadow" style="background-image:url(img/side-bar-img2.jpg);">
                    <div class="fs-4 text-center fw-bold mb-2">ДЕЖУРНЫЙ ТЕРАПЕВТ</div>
                    <div class="fw-bold text-center mb-3">бесплатная онлайн консультация</div>
                    <div class="fw-bold button secondary-bg">Записаться</div>
                </div>
                <div class="mt-5 def-shadow def-border-rad">
                    <a href=""><img class="mw-100 def-border-rad" style="aspect-ratio: 0.9;" src="img/side-bar-banner2.jpg" alt=""></a>
                </div>
                <div class="mt-5">
                    <h5 class="fw-bold mb-3">НОВОСТИ МЕДИЦИНЫ</h5>
                    <div class="bg-white def-border-rad def-shadow">
                        <div class="d-flex p-2">
                            <img src="img/main-content-img1.jpg" style="height:70px;aspect-ratio: 1.2;" alt="" class="mw-100 object-fit-cover">
                            <div class="ms-2">
                                <div class="text-secondary fs-micro">25 сентября 2024</div>
                                <div class="fw-bold" style="font-size: 0.65rem;">ЦРПТ объяснил аптекам, что делать с некорректными кодами маркировки БАД.</div>
                            </div>
                        </div>
                        <div class="d-flex p-2">
                            <img src="img/main-content-ad.jpg" style="height:70px;aspect-ratio: 1.2;" alt="" class="mw-100 object-fit-cover">
                            <div class="ms-2">
                                <div class="text-secondary fs-micro">24 сентября 2024</div>
                                <div class="fw-bold" style="font-size: 0.65rem;">В Москве хотят провести эксперимент по продаже лекарств через вендинг.</div>
                            </div>
                        </div>
                        <div class="d-flex p-2">
                            <img src="img/main-content-img1.jpg" style="height:70px;aspect-ratio: 1.2;" alt="" class="mw-100 object-fit-cover">
                            <div class="ms-2">
                                <div class="text-secondary fs-micro">23 сентября 2024</div>
                                <div class="fw-bold" style="font-size: 0.65rem;">Красноярская аптека получила предостережение за мерцающую вывеску</div>
                            </div>
                        </div>
                        <div class="d-flex p-2">
                            <img src="img/main-content-ad.jpg" style="height:70px;aspect-ratio: 1.2;" alt="" class="mw-100 object-fit-cover">
                            <div class="ms-2">
                                <div class="text-secondary fs-micro">23 сентября 2024</div>
                                <div class="fw-bold" style="font-size: 0.65rem;">Депутаты предложили регулировать деятельность аптечных сетей</div>
                            </div>
                        </div>
                        <div class="d-flex p-2">
                            <img src="img/main-content-img1.jpg" style="height:70px;aspect-ratio: 1.2;" alt="" class="mw-100 object-fit-cover">
                            <div class="ms-2">
                                <div class="text-secondary fs-micro">21 сентября 2024</div>
                                <div class="fw-bold" style="font-size: 0.65rem;">Открыта регистрация на вебинар о разработке и внедрении СОП в аптеке после 1 сентября</div>
                            </div>
                        </div>
                        <div class="d-flex p-2">
                            <img src="img/main-content-img1.jpg" style="height:70px;aspect-ratio: 1.2;" alt="" class="mw-100 object-fit-cover">
                            <div class="ms-2">
                                <div class="text-secondary fs-micro">25 сентября 2024</div>
                                <div class="fw-bold" style="font-size: 0.65rem;">ЦРПТ объяснил аптекам, что делать с некорректными кодами маркировки БАД.</div>
                            </div>
                        </div>
                        <div class="d-flex p-2">
                            <img src="img/main-content-ad.jpg" style="height:70px;aspect-ratio: 1.2;" alt="" class="mw-100 object-fit-cover">
                            <div class="ms-2">
                                <div class="text-secondary fs-micro">24 сентября 2024</div>
                                <div class="fw-bold" style="font-size: 0.65rem;">В Москве хотят провести эксперимент по продаже лекарств через вендинг.</div>
                            </div>
                        </div>
                        <div class="d-flex p-2">
                            <img src="img/main-content-img1.jpg" style="height:70px;aspect-ratio: 1.2;" alt="" class="mw-100 object-fit-cover">
                            <div class="ms-2">
                                <div class="text-secondary fs-micro">23 сентября 2024</div>
                                <div class="fw-bold" style="font-size: 0.65rem;">Красноярская аптека получила предостережение за мерцающую вывеску</div>
                            </div>
                        </div>
                        <div class="d-flex p-2">
                            <img src="img/main-content-ad.jpg" style="height:70px;aspect-ratio: 1.2;" alt="" class="mw-100 object-fit-cover">
                            <div class="ms-2">
                                <div class="text-secondary fs-micro">23 сентября 2024</div>
                                <div class="fw-bold" style="font-size: 0.65rem;">Депутаты предложили регулировать деятельность аптечных сетей</div>
                            </div>
                        </div>
                        <div class="d-flex p-2">
                            <img src="img/main-content-img1.jpg" style="height:70px;aspect-ratio: 1.2;" alt="" class="mw-100 object-fit-cover">
                            <div class="ms-2">
                                <div class="text-secondary fs-micro">21 сентября 2024</div>
                                <div class="fw-bold" style="font-size: 0.65rem;">Открыта регистрация на вебинар о разработке и внедрении СОП в аптеке после 1 сентября</div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="mt-4 def-shadow def-border-rad">
                    <a href=""><img class="mw-100 def-border-rad" style="aspect-ratio: 0.9;" src="img/side-bar-banner3.jpg" alt=""></a>
                </div>
                <!-- Кнопка личного кабинета -->
                <div class="personal-cabinet-button mt-5">
                    <div class="col text-white text-center fs-5">Личный кабинет</div>
                    <img class="p-1" src="img/person.png" alt="">
                </div>
                <!-- Кнопка личного кабинета -->
            </div>
        </div>
    </div>
    <!-- main-content -->  

    <?require_once 'tpl/footer.php'?>
</body>
</html>