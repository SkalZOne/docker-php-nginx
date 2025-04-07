<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница Врача</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/tpl_style.css">
    <link rel="stylesheet" href="css/custom_classes.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <script src="lib/jquery/jquery.js"></script>
    <link href="lib/bootstrap/style.css" rel="stylesheet">
    <script src="lib/bootstrap/script.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/scripts.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Literata:ital,opsz,wght@0,7..72,200;0,7..72,300;0,7..72,400;0,7..72,500;0,7..72,600;0,7..72,700;0,7..72,800;0,7..72,900;1,7..72,200;1,7..72,300;1,7..72,400;1,7..72,500;1,7..72,600;1,7..72,700;1,7..72,800;1,7..72,900&family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
<!-- Ну тут типо header должен быть, но давайте без меня -->
<div style="height: 100px;"><h1 class="text-center">ХЕДЕР</h1></div>
<!-- Ну тут типо header должен быть, но давайте без меня -->
<div class="main-container">
    <?require $_SERVER['DOCUMENT_ROOT'] . '/site/templates/main-container-head.php';?>
    <div class="main-container-middle">
        <div class="main-content-middle main-content">
            <!-- ХЛЕБНЫЕ КРОШКИ -->
            <div class="breadcrumbs">
                <div class="breadcrumbs">
                    <a class="breadcrumbs-subtitle">Главная</a>
                    <div class="chevron-right">
                        <img src="img/chevron-right.svg" alt="chevron-right">
                    </div>
                    <a class="breadcrumbs-subtitle">Организации</a>
                    <div class="chevron-right active">
                        <img src="img/chevron-right.svg" alt="chevron-right">
                    </div>
                    <a class="breadcrumbs-subtitle">Медицинский центр «Мосмедпроф»</a>
                    <div class="chevron-right active">
                        <img src="img/chevron-right.svg" alt="chevron-right">
                    </div>
                    <a class="breadcrumbs-subtitle">Мельникова Надежда Андреевна</a>
                </div>
            </div>
            <!-- ХЛЕБНЫЕ КРОШКИ -->
            <div class="main-content-doctor-info m-m-top m-m-bot">
                <div class="main-content-doctor-info-title main-title">
                    Мельникова Надежда Андреевна
                    <div class="info-top-license">
                        <img src="img/license.svg" alt="license">
                        <span>Документы проверены</span>
                    </div>
                </div>
                <div class="main-content-doctor-info-block">
                    <div class="doctor-info-block">
                        <div class="doctor-info-left">
                            <div class="doctor-card">
                                <div class="doctor-card-left">
                                    <img src="img/doctor-card.png">
                                    <div class="rating-block">
                                        <div class="reviews-rating-big reviews-rating">
                                            <img src="img/star-yelow.svg" alt="star-y">
                                            <img src="img/star-yelow.svg" alt="star-y">
                                            <img src="img/star-yelow.svg" alt="star-y">
                                            <img src="img/star-yelow.svg" alt="star-y">
                                            <img src="img/star-gray.svg" alt="star-g">
                                        </div>
                                        <span>200 отзывов</span>
                                    </div>
                                    <div class="like-repost-block">
                                        <div class="like-block">
                                            <svg class="like-wrapper" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 14" fill="none">
                                                <path class="contour-like" d="M8 14C7.77219 14 7.55263 13.9188 7.38147 13.7714C6.73509 13.2155 6.11194 12.6932 5.56213 12.2324L5.55931 12.23C3.94737 10.879 2.55541 9.71231 1.58691 8.563C0.504281 7.27821 0 6.05996 0 4.72913C0 3.43613 0.450813 2.24324 1.26928 1.37008C2.09753 0.486587 3.234 0 4.46972 0C5.39331 0 6.23913 0.287182 6.98366 0.853494C7.35938 1.13932 7.69994 1.48917 8 1.89723C8.30016 1.48917 8.64062 1.13932 9.01647 0.853494C9.761 0.287182 10.6068 0 11.5304 0C12.766 0 13.9026 0.486587 14.7308 1.37008C15.5493 2.24324 16 3.43613 16 4.72913C16 6.05993 15.4958 7.27818 14.4132 8.56287C13.4447 9.71231 12.0528 10.8789 10.4412 12.2298C9.89038 12.6913 9.26625 13.2145 8.61841 13.7716C8.4472 13.9189 8.22745 14.0001 8 14ZM4.46972 0.921785C3.49891 0.921785 2.60706 1.30286 1.95825 1.99485C1.29981 2.69731 0.937125 3.66833 0.937125 4.72913C0.937125 5.84841 1.36009 6.84943 2.30847 7.97486C3.22509 9.06268 4.5885 10.2054 6.16713 11.5285L6.17003 11.5309C6.72191 11.9935 7.34753 12.5179 7.99866 13.0778C8.65369 12.5168 9.28028 11.9916 9.83325 11.5283C11.4117 10.2051 12.775 9.06268 13.6917 7.97486C14.6399 6.84943 15.0629 5.84841 15.0629 4.72913C15.0629 3.6683 14.7002 2.69728 14.0417 1.99485C13.3931 1.30286 12.5011 0.921785 11.5304 0.921785C10.8192 0.921785 10.1663 1.14415 9.58972 1.58257C9.07594 1.97349 8.71803 2.46763 8.50816 2.81339C8.40028 2.99119 8.21034 3.09732 8 3.09732C7.78966 3.09732 7.59972 2.99119 7.49181 2.81339C7.28212 2.46763 6.92419 1.97349 6.41025 1.58257C5.83375 1.14415 5.18078 0.921785 4.46972 0.921785Z" fill="#FFFFFF"></path>
                                                <path class="filling-like" xmlns="http://www.w3.org/2000/svg" d="M14.7307 1.37008C13.9025 0.486587 12.766 0 11.5304 0C10.6068 0 9.761 0.287182 9.01634 0.853494C8.64062 1.13932 8.30016 1.48908 8 1.89723C7.69994 1.48917 7.35938 1.13932 6.98353 0.853494C6.239 0.287182 5.39319 0 4.46959 0C3.234 0 2.09741 0.486587 1.26916 1.37008C0.450812 2.24324 0 3.43613 0 4.72913C0 6.05993 0.504281 7.27818 1.58691 8.563C2.55541 9.71231 3.94737 10.879 5.55931 12.23C6.10975 12.6914 6.73366 13.2143 7.38147 13.7714C7.55264 13.9188 7.77246 14.0001 8 14C8.22766 14 8.44738 13.9188 8.61828 13.7716C9.26609 13.2145 9.89038 12.6913 10.441 12.2296C12.0528 10.8789 13.4447 9.71231 14.4132 8.56287C15.4958 7.27821 16 6.05996 16 4.72901C16 3.43613 15.5492 2.24324 14.7307 1.37008Z" fill="none"></path>
                                            </svg>
                                        </div>
                                        <div class="repost-block">
                                            <svg class="repost-wrapper" xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17" fill="none">
                                                <path class="contour-repost" d="M18.4333 7.93333L13.3333 2.73133V5.51933L12.3778 5.66667C7.58889 6.358 4.34444 8.91933 2.48889 12.8407C5.06667 10.982 8.26667 10.0867 12.2222 10.0867H13.3333V13.1353M11.1111 11.2427C6.14444 11.4807 2.58889 13.3053 0 17C1.11111 11.3333 4.44444 5.66667 12.2222 4.53333V0L20 7.93333L12.2222 15.8667V11.22C11.8556 11.22 11.4889 11.2313 11.1111 11.2427Z" fill="white"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="doctor-card-right">
                                    <div class="doctor-card-point">
                                        <span>Взрослые пациенты (женщины)</span>
                                    </div>
                                    <div class="doctor-card-info">
                                        <div class="doctor-card-line color-main">
                                            <span>Стаж:</span>5 лет
                                        </div>
                                        <div class="doctor-card-line color-main">
                                            <span>Специальность:</span>Гинеколог
                                        </div>
                                        <div class="doctor-card-line color-main">
                                            <span>Квалификация:</span>Врач высшей категории
                                        </div>
                                        <div class="doctor-card-line color-main">
                                            <span>Телефон:</span>+7 (499) 460-01-13
                                        </div>
                                        <div class="doctor-card-line color-main">
                                            <span>E-mail:</span>info@mmp-med.ru
                                        </div>
                                    </div>
                                    <div class="doctor-card-price">
                                        <div class="doctor-card-price-head color-main">
                                            <span>Стоимость приема:</span>В клинике
                                        </div>
                                        <div class="doctor-card-price-footer">
                                            <div class="btn-doctor-l active">В клинике</div>
                                            <div class="btn-doctor-r">На дому</div>
                                            <div class="doctor-price">2000 <span>₽</span></div>
                                        </div>
                                        <script>
                                            $(document).ready(function() {
                                                // При клике на любую из кнопок (btn-doctor-l или btn-doctor-r)
                                                $('.btn-doctor-l, .btn-doctor-r').on('click', function() {
                                                    // Убираем класс active с обеих кнопок и сбрасываем цвета
                                                    $('.btn-doctor-l, .btn-doctor-r').removeClass('active');
                                                    $('.doctor-card-price-head span').css('color', ''); // Сброс цвета для span
                                                    $('.doctor-price').css('color', ''); // Сброс цвета для doctor-price

                                                    // Добавляем класс active к нажатой кнопке
                                                    $(this).addClass('active');

                                                    // Сохраняем текст "Стоимость приема:" в span и меняем только остальную часть текста
                                                    var labelText = $('.doctor-card-price-head span').text(); // Сохраняем "Стоимость приема:"

                                                    // В зависимости от того, какая кнопка была нажата, меняем текст, цвет и цену
                                                    if ($(this).hasClass('btn-doctor-l')) {
                                                        $('.doctor-card-price-head').html('<span>' + labelText + '</span> В клинике');
                                                        $('.doctor-price').text('2000 ₽');
                                                        $('.doctor-card-price-head span').css('color', '#E73821'); // Цвет для левой кнопки
                                                        $('.doctor-price').css('color', '#E73821'); // Цвет для price на левой кнопке
                                                    } else {
                                                        $('.doctor-card-price-head').html('<span>' + labelText + '</span> На дому');
                                                        $('.doctor-price').text('2500 ₽');
                                                        $('.doctor-card-price-head span').css('color', '#3A8DFF'); // Цвет для правой кнопки
                                                        $('.doctor-price').css('color', '#3A8DFF'); // Цвет для price на правой кнопке
                                                    }
                                                });
                                            });
                                        </script>
                                    </div>
                                    <div class="doctor-card-btn">
                                        <div class="doctor-card-btn-l btn-main">
                                            Записаться на прием
                                        </div>
                                        <div class="doctor-card-btn-r btn-main">
                                            Вызвать врача на дом
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="doctor-card-details">
                                <div class="main-text">
                                    <span class="text-show-hide">
                                        <span class="details-title">Основные направления деятельности — </span>
                                            терапия головных болей, головокружения, неврологических осложнения при заболеваниях опорно-двигательного аппарата. Лечение цервикалгий (боли в шее)<br> и цервикобрахиалгий (боли в шее, распространяющиеся в руку). Лечение боли в пояснично-крестцовом отделе<br>(люмбалгия) и боли в пояснице, отдающий в ногу (люмбоишиалгии). Лечение болей при поражении суставов <br> (артроз) и поражении мягких тканей, окружающих суставы<span class="ellipsis">...</span><span class="hidden-text"> окружающих суставы (периартропатия суставов конечностей). Основные направления деятельности — терапия головных болей, головокружения, неврологических осложнения при заболеваниях опорно-двигательного аппарата. Лечение цервикалгий (боли в шее) и цервикобрахиалгий (боли в шее, распространяющиеся в руку). Лечение боли в пояснично-крестцовом отделе (люмбалгия) и боли в пояснице, отдающий в ногу (люмбоишиалгии). Лечение болей при поражении суставов (артроз) и поражении мягких тканей, окружающих суставы (периартропатия суставов конечностей)</span>
                                        <a href="#" class="toggle-text">показать еще</a>
                                    </span>
                                </div>
                                <script>
                                    $(document).ready(function () {
                                        $('.toggle-text').on('click', function (e) {
                                            e.preventDefault(); // Предотвратить переход по ссылке

                                            var $toggleText = $(this); // Ссылка
                                            var $hiddenText = $('.hidden-text'); // Скрытый текст
                                            var $ellipsis = $('.ellipsis'); // Троеточие

                                            // Проверяем, отображается ли скрытый текст
                                            if ($hiddenText.is(':visible')) {
                                                // Если текст открыт, скрываем его
                                                $hiddenText.hide(); // Скрываем текст
                                                $ellipsis.text('...'); // Меняем запятую обратно на троеточие
                                                $toggleText.text('показать еще'); // Меняем текст ссылки
                                            } else {
                                                // Если текст скрыт, показываем его
                                                $hiddenText.show(); // Показываем скрытый текст
                                                $ellipsis.text(','); // Меняем троеточие на запятую
                                                $toggleText.text('скрыть'); // Меняем текст ссылки
                                            }
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="doctor-info-right">
                            <div class="doctor-info-right-title color-main">
                                Особые навыки и методики
                            </div>
                            <div class="doctor-info-right-perks mCustomScrollbar">
                                <div class="doctor-perk color-main">
                                    Владения уникальными методиками лечения инфекционных заболеваний
                                    <div class="l-line l-fiolet"></div>
                                </div>
                                <div class="doctor-perk color-main">
                                    Индивидуальный подход к пациентам с учетом их особенностей и предпочтений
                                    <div class="l-line l-green"></div>
                                </div>
                                <div class="doctor-perk color-main">
                                    Опыт работы с современными технологиями диагностики и терапии
                                    <div class="l-line l-blue"></div>
                                </div>
                                <div class="doctor-perk color-main">
                                    Постоянное повышение квалификации
                                    <div class="l-line l-yellow"></div>
                                </div>
                                <div class="doctor-perk color-main">
                                    Владения уникальными методиками лечения инфекционных заболеваний
                                    <div class="l-line l-fiolet"></div>
                                </div>
                                <div class="doctor-perk color-main">
                                    Индивидуальный подход к пациентам с учетом их особенностей и предпочтений
                                    <div class="l-line l-green"></div>
                                </div>
                                <div class="doctor-perk color-main">
                                    Опыт работы с современными технологиями диагностики и терапии
                                    <div class="l-line l-blue"></div>
                                </div>
                                <div class="doctor-perk color-main">
                                    Постоянное повышение квалификации
                                    <div class="l-line l-yellow"></div>
                                </div>
                                <div class="doctor-perk color-main">
                                    Владения уникальными методиками лечения инфекционных заболеваний
                                    <div class="l-line l-fiolet"></div>
                                </div>
                                <div class="doctor-perk color-main">
                                    Индивидуальный подход к пациентам с учетом их особенностей и предпочтений
                                    <div class="l-line l-green"></div>
                                </div>
                                <div class="doctor-perk color-main">
                                    Опыт работы с современными технологиями диагностики и терапии
                                    <div class="l-line l-blue"></div>
                                </div>
                                <div class="doctor-perk color-main">
                                    Постоянное повышение квалификации
                                    <div class="l-line l-yellow"></div>
                                </div>
                                <div class="doctor-perk color-main">
                                    Владения уникальными методиками лечения инфекционных заболеваний
                                    <div class="l-line l-fiolet"></div>
                                </div>
                                <div class="doctor-perk color-main">
                                    Индивидуальный подход к пациентам с учетом их особенностей и предпочтений
                                    <div class="l-line l-green"></div>
                                </div>
                                <div class="doctor-perk color-main">
                                    Опыт работы с современными технологиями диагностики и терапии
                                    <div class="l-line l-blue"></div>
                                </div>
                                <div class="doctor-perk color-main">
                                    Постоянное повышение квалификации
                                    <div class="l-line l-yellow"></div>
                                </div>
                                <div class="doctor-perk color-main">
                                    Владения уникальными методиками лечения инфекционных заболеваний
                                    <div class="l-line l-fiolet"></div>
                                </div>
                                <div class="doctor-perk color-main">
                                    Индивидуальный подход к пациентам с учетом их особенностей и предпочтений
                                    <div class="l-line l-green"></div>
                                </div>
                                <div class="doctor-perk color-main">
                                    Опыт работы с современными технологиями диагностики и терапии
                                    <div class="l-line l-blue"></div>
                                </div>
                                <div class="doctor-perk color-main">
                                    Постоянное повышение квалификации
                                    <div class="l-line l-yellow"></div>
                                </div>
                                <div class="doctor-perk color-main">
                                    Владения уникальными методиками лечения инфекционных заболеваний
                                    <div class="l-line l-fiolet"></div>
                                </div>
                                <div class="doctor-perk color-main">
                                    Индивидуальный подход к пациентам с учетом их особенностей и предпочтений
                                    <div class="l-line l-green"></div>
                                </div>
                                <div class="doctor-perk color-main">
                                    Опыт работы с современными технологиями диагностики и терапии
                                    <div class="l-line l-blue"></div>
                                </div>
                                <div class="doctor-perk color-main">
                                    Постоянное повышение квалификации
                                    <div class="l-line l-yellow"></div>
                                </div>
                                <div class="doctor-perk color-main">
                                    Владения уникальными методиками лечения инфекционных заболеваний
                                    <div class="l-line l-fiolet"></div>
                                </div>
                                <div class="doctor-perk color-main">
                                    Индивидуальный подход к пациентам с учетом их особенностей и предпочтений
                                    <div class="l-line l-green"></div>
                                </div>
                                <div class="doctor-perk color-main">
                                    Опыт работы с современными технологиями диагностики и терапии
                                    <div class="l-line l-blue"></div>
                                </div>
                                <div class="doctor-perk color-main">
                                    Постоянное повышение квалификации
                                    <div class="l-line l-yellow"></div>
                                </div>
                                <div class="doctor-perk color-main">
                                    Владения уникальными методиками лечения инфекционных заболеваний
                                    <div class="l-line l-fiolet"></div>
                                </div>
                                <div class="doctor-perk color-main">
                                    Индивидуальный подход к пациентам с учетом их особенностей и предпочтений
                                    <div class="l-line l-green"></div>
                                </div>
                                <div class="doctor-perk color-main">
                                    Опыт работы с современными технологиями диагностики и терапии
                                    <div class="l-line l-blue"></div>
                                </div>
                                <div class="doctor-perk color-main">
                                    Постоянное повышение квалификации
                                    <div class="l-line l-yellow"></div>
                                </div>
                            </div>
                            <script>
                                (function($){
                                    $(window).on("load",function(){
                                        $(".doctor-info-right-perks").mCustomScrollbar({

                                        });
                                    });
                                })(jQuery);
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Services-and-prices" class="main-content-doctor-services main-line-t">
                <div class="main-content-services-title main-title">
                    Услуги и цены
                </div>
                <div class="main-content-services-search">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                            <path d="M14.8751 14.875L11.7989 11.7987M11.7989 11.7987C12.3251 11.2725 12.7425 10.6478 13.0273 9.96026C13.312 9.27273 13.4586 8.53584 13.4586 7.79167C13.4586 7.04749 13.312 6.3106 13.0273 5.62307C12.7425 4.93554 12.3251 4.31084 11.7989 3.78462C11.2726 3.25841 10.6479 2.841 9.96041 2.55621C9.27288 2.27143 8.53599 2.12485 7.79181 2.12485C7.04764 2.12485 6.31075 2.27143 5.62322 2.55621C4.93569 2.841 4.31098 3.25841 3.78477 3.78462C2.72204 4.84736 2.125 6.28873 2.125 7.79167C2.125 9.2946 2.72204 10.736 3.78477 11.7987C4.8475 12.8614 6.28888 13.4585 7.79181 13.4585C9.29474 13.4585 10.7361 12.8614 11.7989 11.7987Z" stroke="#A4A4A4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <input type="text" class="services-search color-main" placeholder="Поиск услуг">
                </div>
                <div class="main-content-services-buttons">
                    <div class="services-btn" data-target="content1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <path d="M20 1.25C29.9375 1.25 38.0625 9.3125 38.0625 19.3125C38.0625 23.1875 36.8125 26.9375 34.5 30.0625L35.9375 38C36 38.3125 35.75 38.6875 35.4375 38.75H35.3125C35.25 38.75 35.125 38.75 35.0625 38.6875L27.75 35.5625C25.3125 36.75 22.6875 37.3125 20 37.3125C10 37.3125 1.9375 29.25 1.9375 19.25C1.9375 9.3125 10.0625 1.25 20 1.25ZM20 36.125C22.625 36.125 25.125 35.5 27.5 34.375C27.5625 34.3125 27.6875 34.3125 27.75 34.3125C27.8125 34.3125 27.9375 34.3125 28 34.375L34.5 37.125L33.25 30V29.75C33.25 29.6875 33.3125 29.625 33.3125 29.625C33.3125 29.625 33.3125 29.5625 33.375 29.5625C35.625 26.5625 36.8125 23 36.8125 19.3125C36.8125 10 29.25 2.5 20 2.5C10.75 2.5 3.1875 10 3.1875 19.3125C3.1875 28.5625 10.75 36.125 20 36.125Z" fill="#A4A4A4"/>
                            <path d="M12.1154 16.9231H16.4231V12.6154C16.4231 12.2735 16.6966 12 17.0385 12H21.9615C22.3034 12 22.5769 12.2735 22.5769 12.6154V16.9231H26.8846C27.2265 16.9231 27.5 17.1966 27.5 17.5385V22.4615C27.5 22.8034 27.2265 23.0769 26.8846 23.0769H22.5769V27.3846C22.5769 27.7265 22.3034 28 21.9615 28H17.0385C16.6966 28 16.4231 27.7265 16.4231 27.3846V23.0769H12.1154C11.7735 23.0769 11.5 22.8034 11.5 22.4615V17.5385C11.5342 17.1966 11.8077 16.9231 12.1154 16.9231ZM12.6966 21.8462H17.0385C17.3803 21.8462 17.6538 22.1197 17.6538 22.4615V26.7692H21.3462V22.4615C21.3462 22.1197 21.6197 21.8462 21.9615 21.8462H26.2692V18.1538H21.9615C21.6197 18.1538 21.3462 17.8803 21.3462 17.5385V13.2308H17.6197V17.5385C17.6197 17.8803 17.3462 18.1538 17.0043 18.1538H12.6966V21.8462Z" fill="#A4A4A4"/>
                        </svg>
                        <span>Консультации</span>
                    </div>
                    <div class="services-btn" data-target="content2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="39" height="38" viewBox="0 0 39 38" fill="none">
                            <path d="M38.7632 17.1601C38.5165 10.3299 28.7523 10.3393 28.5116 17.1601C28.5131 18.4374 28.985 19.6688 29.8361 20.6164C30.6872 21.5641 31.8572 22.1607 33.1201 22.2912C33.9941 33.8915 26.4148 35.9421 26.1468 36.0132C22.1264 36.6083 19.0041 35.9817 16.8686 34.1484C14.2504 31.9012 13.6836 28.309 13.5783 26.3657C17.972 25.073 23.5372 18.8855 24.476 7.84458C24.5781 6.59223 24.2082 5.34703 23.4398 4.35649C22.6713 3.36594 21.5605 2.70257 20.3282 2.49823C19.5728 -1.10067 14.3037 -0.622381 14.2444 3.10196C14.2511 3.8501 14.5275 4.57037 15.0221 5.12898C15.5168 5.6876 16.1962 6.04659 16.9341 6.13929C17.672 6.23199 18.4183 6.05209 19.0343 5.63301C19.6503 5.21393 20.0942 4.58416 20.2836 3.86064C21.1489 4.0438 21.9178 4.53924 22.4451 5.25351C22.9723 5.96777 23.2216 6.85147 23.1458 7.73793C22.3358 17.9919 17.4713 22.6688 14.6464 24.5417C14.1411 24.8822 13.5488 25.0688 12.9407 25.079C12.3326 25.0893 11.7345 24.9227 11.2181 24.5994C6.24898 21.2843 3.58207 13.044 2.4353 8.42685C2.31818 7.96315 2.29471 7.48051 2.36628 7.00752C2.43786 6.53453 2.60303 6.08079 2.852 5.67317C3.15065 5.19565 3.55074 4.79062 4.0235 4.4872C4.49627 4.18378 5.02997 3.9895 5.58625 3.91833C5.78964 4.64941 6.2537 5.27942 6.88971 5.68791C7.52572 6.09641 8.28905 6.25473 9.03378 6.1326C9.77851 6.01048 10.4524 5.61649 10.9265 5.02594C11.4007 4.4354 11.6419 3.68973 11.6041 2.93152C11.5662 2.1733 11.2519 1.45572 10.7213 0.915972C10.1907 0.376223 9.48094 0.0521722 8.7278 0.00577344C7.97466 -0.0406253 7.23094 0.193883 6.63883 0.664464C6.04673 1.13505 5.64777 1.80868 5.51824 2.55659L4.80418 2.72429C4.16921 2.87628 3.57039 3.15311 3.04218 3.53886C2.51397 3.92461 2.06681 4.41166 1.72642 4.97197C1.38603 5.53228 1.15915 6.15479 1.05882 6.80368C0.958499 7.45256 0.986715 8.115 1.14185 8.75286C2.4353 13.6223 5.65359 24.4518 12.2442 26.3831C12.3542 28.5216 12.9816 32.576 16.0032 35.1694C18.4607 37.4266 22.7705 37.9519 26.4015 37.3287C26.4928 37.3066 35.3796 34.9721 34.4522 22.2462C35.6536 22.0508 36.7469 21.4319 37.5366 20.5002C38.3264 19.5685 38.7611 18.3846 38.7632 17.1601ZM17.3166 4.85076C16.8555 4.85076 16.4132 4.66644 16.0871 4.33835C15.761 4.01026 15.5778 3.56527 15.5778 3.10129C15.5778 2.6373 15.761 2.19231 16.0871 1.86422C16.4132 1.53613 16.8555 1.35181 17.3166 1.35181C17.7778 1.35181 18.2201 1.53613 18.5462 1.86422C18.8723 2.19231 19.0555 2.6373 19.0555 3.10129C19.0555 3.56527 18.8723 4.01026 18.5462 4.33835C18.2201 4.66644 17.7778 4.85076 17.3166 4.85076ZM8.53585 1.35181C8.99701 1.35181 9.43929 1.53613 9.76538 1.86422C10.0915 2.19231 10.2747 2.6373 10.2747 3.10129C10.2747 3.56527 10.0915 4.01026 9.76538 4.33835C9.43929 4.66644 8.99701 4.85076 8.53585 4.85076C8.07468 4.85076 7.63241 4.66644 7.30632 4.33835C6.98022 4.01026 6.79703 3.56527 6.79703 3.10129C6.79703 2.6373 6.98022 2.19231 7.30632 1.86422C7.63241 1.53613 8.07468 1.35181 8.53585 1.35181ZM33.7028 20.973C28.6443 20.8871 28.5757 13.5284 33.6374 13.3446C38.6099 13.5002 38.6672 20.7355 33.7028 20.973Z" fill="#A4A4A4"/>
                            <path d="M33.6374 14.7989C33.015 14.7989 32.418 15.0477 31.9779 15.4905C31.5378 15.9333 31.2905 16.5339 31.2905 17.1601C31.2905 17.7864 31.5378 18.387 31.9779 18.8298C32.418 19.2726 33.015 19.5214 33.6374 19.5214C34.2598 19.5214 34.8568 19.2726 35.2969 18.8298C35.737 18.387 35.9843 17.7864 35.9843 17.1601C35.9843 16.5339 35.737 15.9333 35.2969 15.4905C34.8568 15.0477 34.2598 14.7989 33.6374 14.7989ZM33.6374 18.1798C33.3686 18.1798 33.1109 18.0724 32.9208 17.8811C32.7308 17.6899 32.624 17.4306 32.624 17.1601C32.624 16.8897 32.7308 16.6304 32.9208 16.4392C33.1109 16.2479 33.3686 16.1405 33.6374 16.1405C33.9062 16.1405 34.164 16.2479 34.354 16.4392C34.5441 16.6304 34.6508 16.8897 34.6508 17.1601C34.6508 17.4306 34.5441 17.6899 34.354 17.8811C34.164 18.0724 33.9062 18.1798 33.6374 18.1798Z" fill="#A4A4A4"/>
                        </svg>
                        <span>Диагностика</span>
                    </div>
                    <div class="services-btn active" data-target="content3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <path d="M11.3719 40C9.12295 39.9955 6.92561 39.3257 5.05664 38.0748C3.18768 36.8239 1.73069 35.0479 0.869179 32.9705C0.00767172 30.8931 -0.219817 28.6072 0.215369 26.4008C0.650554 24.1944 1.72895 22.1661 3.31472 20.5713L20.5491 3.337C21.6066 2.27907 22.8623 1.43985 24.2443 0.867279C25.6262 0.294709 27.1075 7.62939e-06 28.6034 7.62939e-06C30.0993 7.62939e-06 31.5805 0.294709 32.9625 0.867279C34.3445 1.43985 35.6001 2.27907 36.6577 3.337C38.7845 5.47806 39.9782 8.37343 39.9782 11.3913C39.9782 14.4092 38.7845 17.3046 36.6577 19.4456L19.4062 36.6628C18.354 37.7225 17.1022 38.563 15.7232 39.1358C14.3441 39.7086 12.8652 40.0023 11.3719 40ZM28.5834 1.14271C27.2374 1.13997 25.9042 1.40365 24.6607 1.91854C23.4171 2.43342 22.2877 3.18934 21.3376 4.14272L4.12044 21.3599C2.22599 23.2882 1.1698 25.8866 1.18175 28.5897C1.1937 31.2929 2.27281 33.8819 4.18423 35.7933C6.09565 37.7047 8.68467 38.7838 11.3878 38.7958C14.0909 38.8077 16.6894 37.7516 18.6176 35.8571L35.8348 18.6399C37.2676 17.2059 38.2431 15.3793 38.6379 13.391C39.0328 11.4027 38.8293 9.34199 38.0532 7.46932C37.2771 5.59665 35.9632 3.99611 34.2776 2.87001C32.5921 1.74392 30.6105 1.14282 28.5834 1.14271Z" fill="#A4A4A4"/>
                            <path d="M5.22888 34.7486C3.60209 33.1181 2.68848 30.9089 2.68848 28.6057C2.68848 26.3024 3.60209 24.0933 5.22888 22.4628L6.03459 23.2742C4.62101 24.6896 3.82702 26.6082 3.82702 28.6085C3.82702 30.6089 4.62101 32.5275 6.03459 33.9428L5.22888 34.7486ZM11.9146 12.7519L12.7226 11.9439L28.0232 27.244L27.2152 28.052L11.9146 12.7519Z" fill="#A4A4A4"/>
                        </svg>
                        <span>Лечение</span>
                    </div>
                    <div class="services-dropdown">
                        <div class="services-dropdown-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="6" viewBox="0 0 12 6" fill="none">
                                <path d="M10.4 0L11.5 1L6 6L0.5 1L1.6 0L6 4L10.4 0Z" fill="#A4A4A4"/>
                            </svg>
                            <span>остальные услуги</span>
                        </div>
                        <div class="services-dropdown-menu">
                            <a href="#">Медсправки</a>
                            <a href="#">Медсправки</a>
                            <a href="#">Медсправки</a>
                            <a href="#">Диагностика</a>
                            <a href="#">Диагностика</a>
                        </div>
                        <script>
                            // Находим все ссылки внутри меню
                            const menuLinks = document.querySelectorAll('.services-dropdown-menu a');
                            // Находим кнопку, на которой отображается текущий текст
                            const dropdownBtn = document.querySelector('.services-dropdown-btn span');

                            // Добавляем обработчик события для каждой ссылки
                            menuLinks.forEach(link => {
                                link.addEventListener('click', (event) => {
                                    event.preventDefault(); // Отключаем стандартное поведение ссылки
                                    dropdownBtn.textContent = link.textContent; // Меняем текст на тот, на который кликнули
                                });
                            });
                        </script>
                    </div>
                </div>
                <div class="main-content-services-accordion-head color-main">
                    <span>Название</span>
                    <span>Цена</span>
                </div>
                <div class="main-content-services-accordion">
                    <div id="content1" class="accordion-content">
                        <div class="services-accordion-item">
                            <div class="services-accordion-title accordion-title color-main">
                                <span>Медкнижки для ГИБДД</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28">
                                    <path class="ring" d="M14.5 26.25C7.745 26.25 2.25 20.755 2.25 14C2.25 7.245 7.745 1.75 14.5 1.75C21.255 1.75 26.75 7.245 26.75 14C26.75 20.755 21.255 26.25 14.5 26.25ZM14.5 3.5C8.7075 3.5 4 8.2075 4 14C4 19.7925 8.7075 24.5 14.5 24.5C20.2925 24.5 25 19.7925 25 14C25 8.2075 20.2925 3.5 14.5 3.5Z" fill="#D9D9D9"/>
                                    <path class="plus" d="M14.5 20.125C14.01 20.125 13.625 19.74 13.625 19.25V8.75C13.625 8.26 14.01 7.875 14.5 7.875C14.99 7.875 15.375 8.26 15.375 8.75V19.25C15.375 19.74 14.99 20.125 14.5 20.125Z" fill="#D9D9D9"/>
                                    <path class="minus" d="M19.75 14.875H9.25C8.76 14.875 8.375 14.49 8.375 14C8.375 13.51 8.76 13.125 9.25 13.125H19.75C20.24 13.125 20.625 13.51 20.625 14C20.625 14.49 20.24 14.875 19.75 14.875Z" fill="#D9D9D9"/>
                                </svg>
                            </div>
                            <div class="services-accordion-content">
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="services-accordion-item">
                            <div class="services-accordion-title accordion-title color-main">
                                <span>Медкнижки для работы</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28">
                                    <path class="ring" d="M14.5 26.25C7.745 26.25 2.25 20.755 2.25 14C2.25 7.245 7.745 1.75 14.5 1.75C21.255 1.75 26.75 7.245 26.75 14C26.75 20.755 21.255 26.25 14.5 26.25ZM14.5 3.5C8.7075 3.5 4 8.2075 4 14C4 19.7925 8.7075 24.5 14.5 24.5C20.2925 24.5 25 19.7925 25 14C25 8.2075 20.2925 3.5 14.5 3.5Z" fill="#D9D9D9"/>
                                    <path class="plus" d="M14.5 20.125C14.01 20.125 13.625 19.74 13.625 19.25V8.75C13.625 8.26 14.01 7.875 14.5 7.875C14.99 7.875 15.375 8.26 15.375 8.75V19.25C15.375 19.74 14.99 20.125 14.5 20.125Z" fill="#D9D9D9"/>
                                    <path class="minus" d="M19.75 14.875H9.25C8.76 14.875 8.375 14.49 8.375 14C8.375 13.51 8.76 13.125 9.25 13.125H19.75C20.24 13.125 20.625 13.51 20.625 14C20.625 14.49 20.24 14.875 19.75 14.875Z" fill="#D9D9D9"/>
                                </svg>
                            </div>
                            <div class="services-accordion-content">
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="services-accordion-item">
                            <div class="services-accordion-title accordion-title color-main">
                                <span>Медкнижки  для учебы</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28">
                                    <path class="ring" d="M14.5 26.25C7.745 26.25 2.25 20.755 2.25 14C2.25 7.245 7.745 1.75 14.5 1.75C21.255 1.75 26.75 7.245 26.75 14C26.75 20.755 21.255 26.25 14.5 26.25ZM14.5 3.5C8.7075 3.5 4 8.2075 4 14C4 19.7925 8.7075 24.5 14.5 24.5C20.2925 24.5 25 19.7925 25 14C25 8.2075 20.2925 3.5 14.5 3.5Z" fill="#D9D9D9"/>
                                    <path class="plus" d="M14.5 20.125C14.01 20.125 13.625 19.74 13.625 19.25V8.75C13.625 8.26 14.01 7.875 14.5 7.875C14.99 7.875 15.375 8.26 15.375 8.75V19.25C15.375 19.74 14.99 20.125 14.5 20.125Z" fill="#D9D9D9"/>
                                    <path class="minus" d="M19.75 14.875H9.25C8.76 14.875 8.375 14.49 8.375 14C8.375 13.51 8.76 13.125 9.25 13.125H19.75C20.24 13.125 20.625 13.51 20.625 14C20.625 14.49 20.24 14.875 19.75 14.875Z" fill="#D9D9D9"/>
                                </svg>
                            </div>
                            <div class="services-accordion-content">
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="services-accordion-item">
                            <div class="services-accordion-title accordion-title color-main">
                                <span>Медкнижки  от нарколога</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28">
                                    <path class="ring" d="M14.5 26.25C7.745 26.25 2.25 20.755 2.25 14C2.25 7.245 7.745 1.75 14.5 1.75C21.255 1.75 26.75 7.245 26.75 14C26.75 20.755 21.255 26.25 14.5 26.25ZM14.5 3.5C8.7075 3.5 4 8.2075 4 14C4 19.7925 8.7075 24.5 14.5 24.5C20.2925 24.5 25 19.7925 25 14C25 8.2075 20.2925 3.5 14.5 3.5Z" fill="#D9D9D9"/>
                                    <path class="plus" d="M14.5 20.125C14.01 20.125 13.625 19.74 13.625 19.25V8.75C13.625 8.26 14.01 7.875 14.5 7.875C14.99 7.875 15.375 8.26 15.375 8.75V19.25C15.375 19.74 14.99 20.125 14.5 20.125Z" fill="#D9D9D9"/>
                                    <path class="minus" d="M19.75 14.875H9.25C8.76 14.875 8.375 14.49 8.375 14C8.375 13.51 8.76 13.125 9.25 13.125H19.75C20.24 13.125 20.625 13.51 20.625 14C20.625 14.49 20.24 14.875 19.75 14.875Z" fill="#D9D9D9"/>
                                </svg>
                            </div>
                            <div class="services-accordion-content">
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="services-accordion-item">
                            <div class="services-accordion-title accordion-title color-main">
                                <span>Медкнижки  для соревнований</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28">
                                    <path class="ring" d="M14.5 26.25C7.745 26.25 2.25 20.755 2.25 14C2.25 7.245 7.745 1.75 14.5 1.75C21.255 1.75 26.75 7.245 26.75 14C26.75 20.755 21.255 26.25 14.5 26.25ZM14.5 3.5C8.7075 3.5 4 8.2075 4 14C4 19.7925 8.7075 24.5 14.5 24.5C20.2925 24.5 25 19.7925 25 14C25 8.2075 20.2925 3.5 14.5 3.5Z" fill="#D9D9D9"/>
                                    <path class="plus" d="M14.5 20.125C14.01 20.125 13.625 19.74 13.625 19.25V8.75C13.625 8.26 14.01 7.875 14.5 7.875C14.99 7.875 15.375 8.26 15.375 8.75V19.25C15.375 19.74 14.99 20.125 14.5 20.125Z" fill="#D9D9D9"/>
                                    <path class="minus" d="M19.75 14.875H9.25C8.76 14.875 8.375 14.49 8.375 14C8.375 13.51 8.76 13.125 9.25 13.125H19.75C20.24 13.125 20.625 13.51 20.625 14C20.625 14.49 20.24 14.875 19.75 14.875Z" fill="#D9D9D9"/>
                                </svg>
                            </div>
                            <div class="services-accordion-content">
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="content2" class="accordion-content">
                        <div class="services-accordion-item">
                            <div class="services-accordion-title accordion-title color-main">
                                <span>Диагностика для ГИБДД</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28">
                                    <path class="ring" d="M14.5 26.25C7.745 26.25 2.25 20.755 2.25 14C2.25 7.245 7.745 1.75 14.5 1.75C21.255 1.75 26.75 7.245 26.75 14C26.75 20.755 21.255 26.25 14.5 26.25ZM14.5 3.5C8.7075 3.5 4 8.2075 4 14C4 19.7925 8.7075 24.5 14.5 24.5C20.2925 24.5 25 19.7925 25 14C25 8.2075 20.2925 3.5 14.5 3.5Z" fill="#D9D9D9"/>
                                    <path class="plus" d="M14.5 20.125C14.01 20.125 13.625 19.74 13.625 19.25V8.75C13.625 8.26 14.01 7.875 14.5 7.875C14.99 7.875 15.375 8.26 15.375 8.75V19.25C15.375 19.74 14.99 20.125 14.5 20.125Z" fill="#D9D9D9"/>
                                    <path class="minus" d="M19.75 14.875H9.25C8.76 14.875 8.375 14.49 8.375 14C8.375 13.51 8.76 13.125 9.25 13.125H19.75C20.24 13.125 20.625 13.51 20.625 14C20.625 14.49 20.24 14.875 19.75 14.875Z" fill="#D9D9D9"/>
                                </svg>
                            </div>
                            <div class="services-accordion-content">
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="services-accordion-item">
                            <div class="services-accordion-title accordion-title color-main">
                                <span>Диагностика для работы</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28">
                                    <path class="ring" d="M14.5 26.25C7.745 26.25 2.25 20.755 2.25 14C2.25 7.245 7.745 1.75 14.5 1.75C21.255 1.75 26.75 7.245 26.75 14C26.75 20.755 21.255 26.25 14.5 26.25ZM14.5 3.5C8.7075 3.5 4 8.2075 4 14C4 19.7925 8.7075 24.5 14.5 24.5C20.2925 24.5 25 19.7925 25 14C25 8.2075 20.2925 3.5 14.5 3.5Z" fill="#D9D9D9"/>
                                    <path class="plus" d="M14.5 20.125C14.01 20.125 13.625 19.74 13.625 19.25V8.75C13.625 8.26 14.01 7.875 14.5 7.875C14.99 7.875 15.375 8.26 15.375 8.75V19.25C15.375 19.74 14.99 20.125 14.5 20.125Z" fill="#D9D9D9"/>
                                    <path class="minus" d="M19.75 14.875H9.25C8.76 14.875 8.375 14.49 8.375 14C8.375 13.51 8.76 13.125 9.25 13.125H19.75C20.24 13.125 20.625 13.51 20.625 14C20.625 14.49 20.24 14.875 19.75 14.875Z" fill="#D9D9D9"/>
                                </svg>
                            </div>
                            <div class="services-accordion-content">
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="services-accordion-item">
                            <div class="services-accordion-title accordion-title color-main">
                                <span>Диагностика для учебы</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28">
                                    <path class="ring" d="M14.5 26.25C7.745 26.25 2.25 20.755 2.25 14C2.25 7.245 7.745 1.75 14.5 1.75C21.255 1.75 26.75 7.245 26.75 14C26.75 20.755 21.255 26.25 14.5 26.25ZM14.5 3.5C8.7075 3.5 4 8.2075 4 14C4 19.7925 8.7075 24.5 14.5 24.5C20.2925 24.5 25 19.7925 25 14C25 8.2075 20.2925 3.5 14.5 3.5Z" fill="#D9D9D9"/>
                                    <path class="plus" d="M14.5 20.125C14.01 20.125 13.625 19.74 13.625 19.25V8.75C13.625 8.26 14.01 7.875 14.5 7.875C14.99 7.875 15.375 8.26 15.375 8.75V19.25C15.375 19.74 14.99 20.125 14.5 20.125Z" fill="#D9D9D9"/>
                                    <path class="minus" d="M19.75 14.875H9.25C8.76 14.875 8.375 14.49 8.375 14C8.375 13.51 8.76 13.125 9.25 13.125H19.75C20.24 13.125 20.625 13.51 20.625 14C20.625 14.49 20.24 14.875 19.75 14.875Z" fill="#D9D9D9"/>
                                </svg>
                            </div>
                            <div class="services-accordion-content">
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="services-accordion-item">
                            <div class="services-accordion-title accordion-title color-main">
                                <span>Диагностика от нарколога</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28">
                                    <path class="ring" d="M14.5 26.25C7.745 26.25 2.25 20.755 2.25 14C2.25 7.245 7.745 1.75 14.5 1.75C21.255 1.75 26.75 7.245 26.75 14C26.75 20.755 21.255 26.25 14.5 26.25ZM14.5 3.5C8.7075 3.5 4 8.2075 4 14C4 19.7925 8.7075 24.5 14.5 24.5C20.2925 24.5 25 19.7925 25 14C25 8.2075 20.2925 3.5 14.5 3.5Z" fill="#D9D9D9"/>
                                    <path class="plus" d="M14.5 20.125C14.01 20.125 13.625 19.74 13.625 19.25V8.75C13.625 8.26 14.01 7.875 14.5 7.875C14.99 7.875 15.375 8.26 15.375 8.75V19.25C15.375 19.74 14.99 20.125 14.5 20.125Z" fill="#D9D9D9"/>
                                    <path class="minus" d="M19.75 14.875H9.25C8.76 14.875 8.375 14.49 8.375 14C8.375 13.51 8.76 13.125 9.25 13.125H19.75C20.24 13.125 20.625 13.51 20.625 14C20.625 14.49 20.24 14.875 19.75 14.875Z" fill="#D9D9D9"/>
                                </svg>
                            </div>
                            <div class="services-accordion-content">
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="services-accordion-item">
                            <div class="services-accordion-title accordion-title color-main">
                                <span>Диагностика для соревнований</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28">
                                    <path class="ring" d="M14.5 26.25C7.745 26.25 2.25 20.755 2.25 14C2.25 7.245 7.745 1.75 14.5 1.75C21.255 1.75 26.75 7.245 26.75 14C26.75 20.755 21.255 26.25 14.5 26.25ZM14.5 3.5C8.7075 3.5 4 8.2075 4 14C4 19.7925 8.7075 24.5 14.5 24.5C20.2925 24.5 25 19.7925 25 14C25 8.2075 20.2925 3.5 14.5 3.5Z" fill="#D9D9D9"/>
                                    <path class="plus" d="M14.5 20.125C14.01 20.125 13.625 19.74 13.625 19.25V8.75C13.625 8.26 14.01 7.875 14.5 7.875C14.99 7.875 15.375 8.26 15.375 8.75V19.25C15.375 19.74 14.99 20.125 14.5 20.125Z" fill="#D9D9D9"/>
                                    <path class="minus" d="M19.75 14.875H9.25C8.76 14.875 8.375 14.49 8.375 14C8.375 13.51 8.76 13.125 9.25 13.125H19.75C20.24 13.125 20.625 13.51 20.625 14C20.625 14.49 20.24 14.875 19.75 14.875Z" fill="#D9D9D9"/>
                                </svg>
                            </div>
                            <div class="services-accordion-content">
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="content3" class="accordion-content active">
                        <div class="services-accordion-item">
                            <div class="services-accordion-title accordion-title color-main">
                                <span>Эрозия шейки матки</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28">
                                    <path class="ring" d="M14.5 26.25C7.745 26.25 2.25 20.755 2.25 14C2.25 7.245 7.745 1.75 14.5 1.75C21.255 1.75 26.75 7.245 26.75 14C26.75 20.755 21.255 26.25 14.5 26.25ZM14.5 3.5C8.7075 3.5 4 8.2075 4 14C4 19.7925 8.7075 24.5 14.5 24.5C20.2925 24.5 25 19.7925 25 14C25 8.2075 20.2925 3.5 14.5 3.5Z" fill="#D9D9D9"/>
                                    <path class="plus" d="M14.5 20.125C14.01 20.125 13.625 19.74 13.625 19.25V8.75C13.625 8.26 14.01 7.875 14.5 7.875C14.99 7.875 15.375 8.26 15.375 8.75V19.25C15.375 19.74 14.99 20.125 14.5 20.125Z" fill="#D9D9D9"/>
                                    <path class="minus" d="M19.75 14.875H9.25C8.76 14.875 8.375 14.49 8.375 14C8.375 13.51 8.76 13.125 9.25 13.125H19.75C20.24 13.125 20.625 13.51 20.625 14C20.625 14.49 20.24 14.875 19.75 14.875Z" fill="#D9D9D9"/>
                                </svg>
                            </div>
                            <div class="services-accordion-content">
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="services-accordion-item">
                            <div class="services-accordion-title accordion-title color-main">
                                <span>Введение/удаление ВМС</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28">
                                    <path class="ring" d="M14.5 26.25C7.745 26.25 2.25 20.755 2.25 14C2.25 7.245 7.745 1.75 14.5 1.75C21.255 1.75 26.75 7.245 26.75 14C26.75 20.755 21.255 26.25 14.5 26.25ZM14.5 3.5C8.7075 3.5 4 8.2075 4 14C4 19.7925 8.7075 24.5 14.5 24.5C20.2925 24.5 25 19.7925 25 14C25 8.2075 20.2925 3.5 14.5 3.5Z" fill="#D9D9D9"/>
                                    <path class="plus" d="M14.5 20.125C14.01 20.125 13.625 19.74 13.625 19.25V8.75C13.625 8.26 14.01 7.875 14.5 7.875C14.99 7.875 15.375 8.26 15.375 8.75V19.25C15.375 19.74 14.99 20.125 14.5 20.125Z" fill="#D9D9D9"/>
                                    <path class="minus" d="M19.75 14.875H9.25C8.76 14.875 8.375 14.49 8.375 14C8.375 13.51 8.76 13.125 9.25 13.125H19.75C20.24 13.125 20.625 13.51 20.625 14C20.625 14.49 20.24 14.875 19.75 14.875Z" fill="#D9D9D9"/>
                                </svg>
                            </div>
                            <div class="services-accordion-content">
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Установка внутриматочной спирали (без стоимости ВМС)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>2000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Медицинская справка для госслужбы 001-ГС/У (включены все обследования на территории клиники)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Медицинские осмотры (предварительные, периодические) по приказу 29н + продление ЛМК без АТТ (для медработников)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="services-accordion-item">
                            <div class="services-accordion-title accordion-title color-main">
                                <span>Инфекцционные заболевания</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28">
                                    <path class="ring" d="M14.5 26.25C7.745 26.25 2.25 20.755 2.25 14C2.25 7.245 7.745 1.75 14.5 1.75C21.255 1.75 26.75 7.245 26.75 14C26.75 20.755 21.255 26.25 14.5 26.25ZM14.5 3.5C8.7075 3.5 4 8.2075 4 14C4 19.7925 8.7075 24.5 14.5 24.5C20.2925 24.5 25 19.7925 25 14C25 8.2075 20.2925 3.5 14.5 3.5Z" fill="#D9D9D9"/>
                                    <path class="plus" d="M14.5 20.125C14.01 20.125 13.625 19.74 13.625 19.25V8.75C13.625 8.26 14.01 7.875 14.5 7.875C14.99 7.875 15.375 8.26 15.375 8.75V19.25C15.375 19.74 14.99 20.125 14.5 20.125Z" fill="#D9D9D9"/>
                                    <path class="minus" d="M19.75 14.875H9.25C8.76 14.875 8.375 14.49 8.375 14C8.375 13.51 8.76 13.125 9.25 13.125H19.75C20.24 13.125 20.625 13.51 20.625 14C20.625 14.49 20.24 14.875 19.75 14.875Z" fill="#D9D9D9"/>
                                </svg>
                            </div>
                            <div class="services-accordion-content">
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                                <div class="services-accordion-content-inner color-main">
                                    <span>
                                        Справка о профпригодности (прохождение медосмотра) по приказу 29н (старый приказ 302н)
                                    </span>
                                    <div class="accordion-content-price color-main">
                                        от <span>1000 ₽</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        document.querySelectorAll('.services-accordion-title').forEach((item) => {
                            item.addEventListener('click', () => {
                                const content = item.nextElementSibling;
                                const innerContents = content.querySelectorAll('.services-accordion-content-inner'); // находим все вложенные элементы
                                const icon = item.querySelector('svg');

                                // Проверяем, если контент открыт
                                if (content.classList.contains('active')) {
                                    content.classList.remove('active');
                                    icon.style.transform = "rotate(0deg)";
                                    item.classList.remove('active');  // Убираем класс active с заголовка

                                    innerContents.forEach(innerContent => {
                                        innerContent.classList.remove('active');  // Убираем класс active с каждого внутреннего контента
                                    });
                                } else {
                                    content.classList.add('active');
                                    icon.style.transform = "rotate(180deg)";
                                    item.classList.add('active');  // Добавляем класс active к заголовку

                                    innerContents.forEach(innerContent => {
                                        innerContent.classList.add('active');  // Добавляем класс active ко всем внутренним элементам
                                    });
                                }
                            });
                        });
                    </script>
                </div>
                <script>
                    document.querySelectorAll('.services-btn').forEach(button => {
                        button.addEventListener('click', function() {
                            // Сначала скрыть все блоки внутри main-content-services-accordion
                            document.querySelectorAll('.accordion-content').forEach(content => {
                                content.classList.remove('active');
                            });

                            // Затем показать нужный блок внутри main-content-services-accordion
                            const targetContent = document.getElementById(button.dataset.target);
                            targetContent.classList.add('active');

                            // Показать сам main-content-services-accordion
                            document.querySelector('.main-content-services-accordion').classList.add('active');

                            // Убираем класс active с остальных кнопок и добавляем на текущую
                            document.querySelectorAll('.services-btn').forEach(btn => {
                                btn.classList.remove('active');
                            });
                            button.classList.add('active');
                        });
                    });
                </script>
            </div>
            <?require $_SERVER['DOCUMENT_ROOT'] . '/site/templates/main-content-block-appointment.php';?>
            <div id="Doctor-experience" class="main-content-doctor-experience m-m-top m-m-bot">
                <div class="doctor-experience-left">
                    <div class="doctor-experience-left-title main-title">
                        Образование
                    </div>
                    <div class="doctor-experience-left-scroll mCustomScrollbar">
                        <div class="doctor-block-exp-first doctor-experience-block">
                            <div class="doctor-experience-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="53" viewBox="0 0 55 53" fill="none">
                                    <rect width="55" height="53" rx="26.5" fill="#F5F5F5"/>
                                    <path d="M41.1412 20.6454L28.3896 15.2498C27.9978 15.0849 27.5769 15 27.1518 15C26.7267 15 26.3059 15.0849 25.914 15.2498L13.1625 20.6454C12.8178 20.7912 12.5238 21.0353 12.317 21.3472C12.1103 21.6592 12 22.0251 12 22.3993C12 22.7735 12.1103 23.1395 12.317 23.4514C12.5238 23.7633 12.8178 24.0074 13.1625 24.1532L17.6314 26.043V32.1197C17.6279 32.6654 17.7666 33.2025 18.0337 33.6783C18.3008 34.1542 18.6872 34.5522 19.1548 34.8334C21.5816 36.2522 24.342 37 27.1531 37C29.9641 37 32.7246 36.2522 35.1513 34.8334C35.619 34.5522 36.0054 34.1542 36.2725 33.6783C36.5396 33.2025 36.6783 32.6654 36.6748 32.1197V26.043L38.5792 25.2368V28.2469C38.3242 28.3573 38.1028 28.533 37.9374 28.7564C37.772 28.9797 37.6685 29.2427 37.6373 29.5188C37.6061 29.7949 37.6482 30.0744 37.7595 30.329C37.8709 30.5836 38.0474 30.8043 38.2713 30.9689C38.0721 31.1154 37.9101 31.3066 37.7982 31.527C37.6863 31.7475 37.6277 31.9912 37.627 32.2384V33.8254C37.627 33.9937 37.6939 34.1552 37.8129 34.2743C37.932 34.3933 38.0934 34.4602 38.2618 34.4602H40.1661C40.3345 34.4602 40.4959 34.3933 40.615 34.2743C40.734 34.1552 40.8009 33.9937 40.8009 33.8254V32.2384C40.8003 31.9912 40.7416 31.7475 40.6297 31.527C40.5178 31.3066 40.3558 31.1154 40.1566 30.9689C40.3805 30.8043 40.557 30.5836 40.6684 30.329C40.7797 30.0744 40.8219 29.7949 40.7906 29.5188C40.7594 29.2427 40.6559 28.9797 40.4905 28.7564C40.3251 28.533 40.1037 28.3573 39.8487 28.2469V24.6998L41.1412 24.1532C41.4858 24.0074 41.7799 23.7633 41.9866 23.4514C42.1934 23.1395 42.3036 22.7735 42.3036 22.3993C42.3036 22.0251 42.1934 21.6592 41.9866 21.3472C41.7799 21.0353 41.4858 20.7912 41.1412 20.6454ZM39.5313 29.6993C39.5313 29.7621 39.5127 29.8234 39.4779 29.8756C39.443 29.9278 39.3934 29.9685 39.3354 29.9925C39.2774 30.0166 39.2136 30.0228 39.152 30.0106C39.0905 29.9984 39.0339 29.9681 38.9895 29.9237C38.9451 29.8793 38.9149 29.8228 38.9027 29.7612C38.8904 29.6997 38.8967 29.6358 38.9207 29.5778C38.9447 29.5199 38.9854 29.4703 39.0376 29.4354C39.0898 29.4005 39.1512 29.3819 39.214 29.3819C39.2981 29.3819 39.3789 29.4154 39.4384 29.4749C39.4979 29.5344 39.5313 29.6151 39.5313 29.6993ZM39.5313 33.1906H38.8966V32.2384C38.8966 32.1543 38.93 32.0735 38.9895 32.014C39.049 31.9545 39.1298 31.921 39.214 31.921C39.2981 31.921 39.3789 31.9545 39.4384 32.014C39.4979 32.0735 39.5313 32.1543 39.5313 32.2384V33.1906ZM35.4053 32.1197C35.4089 32.4444 35.3281 32.7644 35.1706 33.0483C35.0131 33.3323 34.7844 33.5703 34.507 33.7391C32.2755 35.0427 29.7375 35.7297 27.1531 35.7297C24.5687 35.7297 22.0307 35.0427 19.7991 33.7391C19.5218 33.5703 19.2931 33.3323 19.1356 33.0483C18.9781 32.7644 18.8972 32.4444 18.9009 32.1197V26.58L25.9165 29.5482C26.3084 29.7132 26.7292 29.7983 27.1544 29.7983C27.5795 29.7983 28.0004 29.7132 28.3922 29.5482L35.4053 26.58V32.1197ZM40.6467 22.9839L27.8951 28.3796C27.6602 28.4783 27.4079 28.5291 27.1531 28.5291C26.8983 28.5291 26.646 28.4783 26.411 28.3796L13.6595 22.9839C13.5446 22.9353 13.4466 22.854 13.3777 22.75C13.3088 22.646 13.272 22.5241 13.272 22.3993C13.272 22.2746 13.3088 22.1526 13.3777 22.0486C13.4466 21.9446 13.5446 21.8633 13.6595 21.8147L26.411 16.419C26.6459 16.3201 26.8982 16.2692 27.1531 16.2692C27.408 16.2692 27.6602 16.3201 27.8951 16.419L40.6467 21.8147C40.7615 21.8633 40.8596 21.9446 40.9285 22.0486C40.9974 22.1526 41.0342 22.2746 41.0342 22.3993C41.0342 22.5241 40.9974 22.646 40.9285 22.75C40.8596 22.854 40.7615 22.9353 40.6467 22.9839Z" fill="#26292C"/>
                                </svg>
                            </div>
                            <div class="doctor-experience-info">
                                <span class="experience-name color-main">
                                    Медицинское училище при ГВКГ им. Н.Н Бурденко, Москва
                                </span>
                                <span class="experience-type">
                                    Красный диплом, специальность «Медсестра»
                                </span>
                                <span class="experience-date">
                                    1994 г
                                </span>
                            </div>
                        </div>
                        <div class="doctor-block-exp-second doctor-experience-block">
                            <div class="doctor-experience-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="53" viewBox="0 0 55 53" fill="none">
                                    <rect width="55" height="53" rx="26.5" fill="#F5F5F5"/>
                                    <path d="M41.1412 20.6454L28.3896 15.2498C27.9978 15.0849 27.5769 15 27.1518 15C26.7267 15 26.3059 15.0849 25.914 15.2498L13.1625 20.6454C12.8178 20.7912 12.5238 21.0353 12.317 21.3472C12.1103 21.6592 12 22.0251 12 22.3993C12 22.7735 12.1103 23.1395 12.317 23.4514C12.5238 23.7633 12.8178 24.0074 13.1625 24.1532L17.6314 26.043V32.1197C17.6279 32.6654 17.7666 33.2025 18.0337 33.6783C18.3008 34.1542 18.6872 34.5522 19.1548 34.8334C21.5816 36.2522 24.342 37 27.1531 37C29.9641 37 32.7246 36.2522 35.1513 34.8334C35.619 34.5522 36.0054 34.1542 36.2725 33.6783C36.5396 33.2025 36.6783 32.6654 36.6748 32.1197V26.043L38.5792 25.2368V28.2469C38.3242 28.3573 38.1028 28.533 37.9374 28.7564C37.772 28.9797 37.6685 29.2427 37.6373 29.5188C37.6061 29.7949 37.6482 30.0744 37.7595 30.329C37.8709 30.5836 38.0474 30.8043 38.2713 30.9689C38.0721 31.1154 37.9101 31.3066 37.7982 31.527C37.6863 31.7475 37.6277 31.9912 37.627 32.2384V33.8254C37.627 33.9937 37.6939 34.1552 37.8129 34.2743C37.932 34.3933 38.0934 34.4602 38.2618 34.4602H40.1661C40.3345 34.4602 40.4959 34.3933 40.615 34.2743C40.734 34.1552 40.8009 33.9937 40.8009 33.8254V32.2384C40.8003 31.9912 40.7416 31.7475 40.6297 31.527C40.5178 31.3066 40.3558 31.1154 40.1566 30.9689C40.3805 30.8043 40.557 30.5836 40.6684 30.329C40.7797 30.0744 40.8219 29.7949 40.7906 29.5188C40.7594 29.2427 40.6559 28.9797 40.4905 28.7564C40.3251 28.533 40.1037 28.3573 39.8487 28.2469V24.6998L41.1412 24.1532C41.4858 24.0074 41.7799 23.7633 41.9866 23.4514C42.1934 23.1395 42.3036 22.7735 42.3036 22.3993C42.3036 22.0251 42.1934 21.6592 41.9866 21.3472C41.7799 21.0353 41.4858 20.7912 41.1412 20.6454ZM39.5313 29.6993C39.5313 29.7621 39.5127 29.8234 39.4779 29.8756C39.443 29.9278 39.3934 29.9685 39.3354 29.9925C39.2774 30.0166 39.2136 30.0228 39.152 30.0106C39.0905 29.9984 39.0339 29.9681 38.9895 29.9237C38.9451 29.8793 38.9149 29.8228 38.9027 29.7612C38.8904 29.6997 38.8967 29.6358 38.9207 29.5778C38.9447 29.5199 38.9854 29.4703 39.0376 29.4354C39.0898 29.4005 39.1512 29.3819 39.214 29.3819C39.2981 29.3819 39.3789 29.4154 39.4384 29.4749C39.4979 29.5344 39.5313 29.6151 39.5313 29.6993ZM39.5313 33.1906H38.8966V32.2384C38.8966 32.1543 38.93 32.0735 38.9895 32.014C39.049 31.9545 39.1298 31.921 39.214 31.921C39.2981 31.921 39.3789 31.9545 39.4384 32.014C39.4979 32.0735 39.5313 32.1543 39.5313 32.2384V33.1906ZM35.4053 32.1197C35.4089 32.4444 35.3281 32.7644 35.1706 33.0483C35.0131 33.3323 34.7844 33.5703 34.507 33.7391C32.2755 35.0427 29.7375 35.7297 27.1531 35.7297C24.5687 35.7297 22.0307 35.0427 19.7991 33.7391C19.5218 33.5703 19.2931 33.3323 19.1356 33.0483C18.9781 32.7644 18.8972 32.4444 18.9009 32.1197V26.58L25.9165 29.5482C26.3084 29.7132 26.7292 29.7983 27.1544 29.7983C27.5795 29.7983 28.0004 29.7132 28.3922 29.5482L35.4053 26.58V32.1197ZM40.6467 22.9839L27.8951 28.3796C27.6602 28.4783 27.4079 28.5291 27.1531 28.5291C26.8983 28.5291 26.646 28.4783 26.411 28.3796L13.6595 22.9839C13.5446 22.9353 13.4466 22.854 13.3777 22.75C13.3088 22.646 13.272 22.5241 13.272 22.3993C13.272 22.2746 13.3088 22.1526 13.3777 22.0486C13.4466 21.9446 13.5446 21.8633 13.6595 21.8147L26.411 16.419C26.6459 16.3201 26.8982 16.2692 27.1531 16.2692C27.408 16.2692 27.6602 16.3201 27.8951 16.419L40.6467 21.8147C40.7615 21.8633 40.8596 21.9446 40.9285 22.0486C40.9974 22.1526 41.0342 22.2746 41.0342 22.3993C41.0342 22.5241 40.9974 22.646 40.9285 22.75C40.8596 22.854 40.7615 22.9353 40.6467 22.9839Z" fill="#26292C"/>
                                </svg>
                            </div>
                            <div class="doctor-experience-info">
                                <span class="experience-name color-main">
                                    Военно-медицинская академия имени С.М. Кирова, Санкт-Петербург
                                </span>
                                <span class="experience-type">
                                    Факультет подготовки врачей для Военно-воздушных сил МО РФ,<br>специальность - Лечебное дело, Квалификация «Врач общей практики»
                                </span>
                                <span class="experience-date">
                                    2000 г
                                </span>
                            </div>
                        </div>
                        <div class="doctor-block-exp-third doctor-experience-block">
                            <div class="doctor-experience-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="53" viewBox="0 0 55 53" fill="none">
                                    <rect width="55" height="53" rx="26.5" fill="#F5F5F5"/>
                                    <path d="M41.1412 20.6454L28.3896 15.2498C27.9978 15.0849 27.5769 15 27.1518 15C26.7267 15 26.3059 15.0849 25.914 15.2498L13.1625 20.6454C12.8178 20.7912 12.5238 21.0353 12.317 21.3472C12.1103 21.6592 12 22.0251 12 22.3993C12 22.7735 12.1103 23.1395 12.317 23.4514C12.5238 23.7633 12.8178 24.0074 13.1625 24.1532L17.6314 26.043V32.1197C17.6279 32.6654 17.7666 33.2025 18.0337 33.6783C18.3008 34.1542 18.6872 34.5522 19.1548 34.8334C21.5816 36.2522 24.342 37 27.1531 37C29.9641 37 32.7246 36.2522 35.1513 34.8334C35.619 34.5522 36.0054 34.1542 36.2725 33.6783C36.5396 33.2025 36.6783 32.6654 36.6748 32.1197V26.043L38.5792 25.2368V28.2469C38.3242 28.3573 38.1028 28.533 37.9374 28.7564C37.772 28.9797 37.6685 29.2427 37.6373 29.5188C37.6061 29.7949 37.6482 30.0744 37.7595 30.329C37.8709 30.5836 38.0474 30.8043 38.2713 30.9689C38.0721 31.1154 37.9101 31.3066 37.7982 31.527C37.6863 31.7475 37.6277 31.9912 37.627 32.2384V33.8254C37.627 33.9937 37.6939 34.1552 37.8129 34.2743C37.932 34.3933 38.0934 34.4602 38.2618 34.4602H40.1661C40.3345 34.4602 40.4959 34.3933 40.615 34.2743C40.734 34.1552 40.8009 33.9937 40.8009 33.8254V32.2384C40.8003 31.9912 40.7416 31.7475 40.6297 31.527C40.5178 31.3066 40.3558 31.1154 40.1566 30.9689C40.3805 30.8043 40.557 30.5836 40.6684 30.329C40.7797 30.0744 40.8219 29.7949 40.7906 29.5188C40.7594 29.2427 40.6559 28.9797 40.4905 28.7564C40.3251 28.533 40.1037 28.3573 39.8487 28.2469V24.6998L41.1412 24.1532C41.4858 24.0074 41.7799 23.7633 41.9866 23.4514C42.1934 23.1395 42.3036 22.7735 42.3036 22.3993C42.3036 22.0251 42.1934 21.6592 41.9866 21.3472C41.7799 21.0353 41.4858 20.7912 41.1412 20.6454ZM39.5313 29.6993C39.5313 29.7621 39.5127 29.8234 39.4779 29.8756C39.443 29.9278 39.3934 29.9685 39.3354 29.9925C39.2774 30.0166 39.2136 30.0228 39.152 30.0106C39.0905 29.9984 39.0339 29.9681 38.9895 29.9237C38.9451 29.8793 38.9149 29.8228 38.9027 29.7612C38.8904 29.6997 38.8967 29.6358 38.9207 29.5778C38.9447 29.5199 38.9854 29.4703 39.0376 29.4354C39.0898 29.4005 39.1512 29.3819 39.214 29.3819C39.2981 29.3819 39.3789 29.4154 39.4384 29.4749C39.4979 29.5344 39.5313 29.6151 39.5313 29.6993ZM39.5313 33.1906H38.8966V32.2384C38.8966 32.1543 38.93 32.0735 38.9895 32.014C39.049 31.9545 39.1298 31.921 39.214 31.921C39.2981 31.921 39.3789 31.9545 39.4384 32.014C39.4979 32.0735 39.5313 32.1543 39.5313 32.2384V33.1906ZM35.4053 32.1197C35.4089 32.4444 35.3281 32.7644 35.1706 33.0483C35.0131 33.3323 34.7844 33.5703 34.507 33.7391C32.2755 35.0427 29.7375 35.7297 27.1531 35.7297C24.5687 35.7297 22.0307 35.0427 19.7991 33.7391C19.5218 33.5703 19.2931 33.3323 19.1356 33.0483C18.9781 32.7644 18.8972 32.4444 18.9009 32.1197V26.58L25.9165 29.5482C26.3084 29.7132 26.7292 29.7983 27.1544 29.7983C27.5795 29.7983 28.0004 29.7132 28.3922 29.5482L35.4053 26.58V32.1197ZM40.6467 22.9839L27.8951 28.3796C27.6602 28.4783 27.4079 28.5291 27.1531 28.5291C26.8983 28.5291 26.646 28.4783 26.411 28.3796L13.6595 22.9839C13.5446 22.9353 13.4466 22.854 13.3777 22.75C13.3088 22.646 13.272 22.5241 13.272 22.3993C13.272 22.2746 13.3088 22.1526 13.3777 22.0486C13.4466 21.9446 13.5446 21.8633 13.6595 21.8147L26.411 16.419C26.6459 16.3201 26.8982 16.2692 27.1531 16.2692C27.408 16.2692 27.6602 16.3201 27.8951 16.419L40.6467 21.8147C40.7615 21.8633 40.8596 21.9446 40.9285 22.0486C40.9974 22.1526 41.0342 22.2746 41.0342 22.3993C41.0342 22.5241 40.9974 22.646 40.9285 22.75C40.8596 22.854 40.7615 22.9353 40.6467 22.9839Z" fill="#26292C"/>
                                </svg>
                            </div>
                            <div class="doctor-experience-info">
                                <span class="experience-name color-main">
                                    Военно-медицинская академия имени С. М. Кирова, Санкт-Петербург
                                </span>
                                <span class="experience-type">
                                    Интернатура, специальность «Врач хирург»
                                </span>
                                <span class="experience-date">
                                    2001 г
                                </span>
                            </div>
                        </div>
                        <div class="doctor-block-exp-third doctor-experience-block">
                            <div class="doctor-experience-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="53" viewBox="0 0 55 53" fill="none">
                                    <rect width="55" height="53" rx="26.5" fill="#F5F5F5"/>
                                    <path d="M41.1412 20.6454L28.3896 15.2498C27.9978 15.0849 27.5769 15 27.1518 15C26.7267 15 26.3059 15.0849 25.914 15.2498L13.1625 20.6454C12.8178 20.7912 12.5238 21.0353 12.317 21.3472C12.1103 21.6592 12 22.0251 12 22.3993C12 22.7735 12.1103 23.1395 12.317 23.4514C12.5238 23.7633 12.8178 24.0074 13.1625 24.1532L17.6314 26.043V32.1197C17.6279 32.6654 17.7666 33.2025 18.0337 33.6783C18.3008 34.1542 18.6872 34.5522 19.1548 34.8334C21.5816 36.2522 24.342 37 27.1531 37C29.9641 37 32.7246 36.2522 35.1513 34.8334C35.619 34.5522 36.0054 34.1542 36.2725 33.6783C36.5396 33.2025 36.6783 32.6654 36.6748 32.1197V26.043L38.5792 25.2368V28.2469C38.3242 28.3573 38.1028 28.533 37.9374 28.7564C37.772 28.9797 37.6685 29.2427 37.6373 29.5188C37.6061 29.7949 37.6482 30.0744 37.7595 30.329C37.8709 30.5836 38.0474 30.8043 38.2713 30.9689C38.0721 31.1154 37.9101 31.3066 37.7982 31.527C37.6863 31.7475 37.6277 31.9912 37.627 32.2384V33.8254C37.627 33.9937 37.6939 34.1552 37.8129 34.2743C37.932 34.3933 38.0934 34.4602 38.2618 34.4602H40.1661C40.3345 34.4602 40.4959 34.3933 40.615 34.2743C40.734 34.1552 40.8009 33.9937 40.8009 33.8254V32.2384C40.8003 31.9912 40.7416 31.7475 40.6297 31.527C40.5178 31.3066 40.3558 31.1154 40.1566 30.9689C40.3805 30.8043 40.557 30.5836 40.6684 30.329C40.7797 30.0744 40.8219 29.7949 40.7906 29.5188C40.7594 29.2427 40.6559 28.9797 40.4905 28.7564C40.3251 28.533 40.1037 28.3573 39.8487 28.2469V24.6998L41.1412 24.1532C41.4858 24.0074 41.7799 23.7633 41.9866 23.4514C42.1934 23.1395 42.3036 22.7735 42.3036 22.3993C42.3036 22.0251 42.1934 21.6592 41.9866 21.3472C41.7799 21.0353 41.4858 20.7912 41.1412 20.6454ZM39.5313 29.6993C39.5313 29.7621 39.5127 29.8234 39.4779 29.8756C39.443 29.9278 39.3934 29.9685 39.3354 29.9925C39.2774 30.0166 39.2136 30.0228 39.152 30.0106C39.0905 29.9984 39.0339 29.9681 38.9895 29.9237C38.9451 29.8793 38.9149 29.8228 38.9027 29.7612C38.8904 29.6997 38.8967 29.6358 38.9207 29.5778C38.9447 29.5199 38.9854 29.4703 39.0376 29.4354C39.0898 29.4005 39.1512 29.3819 39.214 29.3819C39.2981 29.3819 39.3789 29.4154 39.4384 29.4749C39.4979 29.5344 39.5313 29.6151 39.5313 29.6993ZM39.5313 33.1906H38.8966V32.2384C38.8966 32.1543 38.93 32.0735 38.9895 32.014C39.049 31.9545 39.1298 31.921 39.214 31.921C39.2981 31.921 39.3789 31.9545 39.4384 32.014C39.4979 32.0735 39.5313 32.1543 39.5313 32.2384V33.1906ZM35.4053 32.1197C35.4089 32.4444 35.3281 32.7644 35.1706 33.0483C35.0131 33.3323 34.7844 33.5703 34.507 33.7391C32.2755 35.0427 29.7375 35.7297 27.1531 35.7297C24.5687 35.7297 22.0307 35.0427 19.7991 33.7391C19.5218 33.5703 19.2931 33.3323 19.1356 33.0483C18.9781 32.7644 18.8972 32.4444 18.9009 32.1197V26.58L25.9165 29.5482C26.3084 29.7132 26.7292 29.7983 27.1544 29.7983C27.5795 29.7983 28.0004 29.7132 28.3922 29.5482L35.4053 26.58V32.1197ZM40.6467 22.9839L27.8951 28.3796C27.6602 28.4783 27.4079 28.5291 27.1531 28.5291C26.8983 28.5291 26.646 28.4783 26.411 28.3796L13.6595 22.9839C13.5446 22.9353 13.4466 22.854 13.3777 22.75C13.3088 22.646 13.272 22.5241 13.272 22.3993C13.272 22.2746 13.3088 22.1526 13.3777 22.0486C13.4466 21.9446 13.5446 21.8633 13.6595 21.8147L26.411 16.419C26.6459 16.3201 26.8982 16.2692 27.1531 16.2692C27.408 16.2692 27.6602 16.3201 27.8951 16.419L40.6467 21.8147C40.7615 21.8633 40.8596 21.9446 40.9285 22.0486C40.9974 22.1526 41.0342 22.2746 41.0342 22.3993C41.0342 22.5241 40.9974 22.646 40.9285 22.75C40.8596 22.854 40.7615 22.9353 40.6467 22.9839Z" fill="#26292C"/>
                                </svg>
                            </div>
                            <div class="doctor-experience-info">
                                <span class="experience-name color-main">
                                    Военно-медицинская академия имени С. М. Кирова, Санкт-Петербург
                                </span>
                                <span class="experience-type">
                                    Интернатура, специальность «Врач хирург»
                                </span>
                                <span class="experience-date">
                                    2001 г
                                </span>
                            </div>
                        </div>
                        <div class="doctor-block-exp-first doctor-experience-block">
                            <div class="doctor-experience-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="53" viewBox="0 0 55 53" fill="none">
                                    <rect width="55" height="53" rx="26.5" fill="#F5F5F5"/>
                                    <path d="M41.1412 20.6454L28.3896 15.2498C27.9978 15.0849 27.5769 15 27.1518 15C26.7267 15 26.3059 15.0849 25.914 15.2498L13.1625 20.6454C12.8178 20.7912 12.5238 21.0353 12.317 21.3472C12.1103 21.6592 12 22.0251 12 22.3993C12 22.7735 12.1103 23.1395 12.317 23.4514C12.5238 23.7633 12.8178 24.0074 13.1625 24.1532L17.6314 26.043V32.1197C17.6279 32.6654 17.7666 33.2025 18.0337 33.6783C18.3008 34.1542 18.6872 34.5522 19.1548 34.8334C21.5816 36.2522 24.342 37 27.1531 37C29.9641 37 32.7246 36.2522 35.1513 34.8334C35.619 34.5522 36.0054 34.1542 36.2725 33.6783C36.5396 33.2025 36.6783 32.6654 36.6748 32.1197V26.043L38.5792 25.2368V28.2469C38.3242 28.3573 38.1028 28.533 37.9374 28.7564C37.772 28.9797 37.6685 29.2427 37.6373 29.5188C37.6061 29.7949 37.6482 30.0744 37.7595 30.329C37.8709 30.5836 38.0474 30.8043 38.2713 30.9689C38.0721 31.1154 37.9101 31.3066 37.7982 31.527C37.6863 31.7475 37.6277 31.9912 37.627 32.2384V33.8254C37.627 33.9937 37.6939 34.1552 37.8129 34.2743C37.932 34.3933 38.0934 34.4602 38.2618 34.4602H40.1661C40.3345 34.4602 40.4959 34.3933 40.615 34.2743C40.734 34.1552 40.8009 33.9937 40.8009 33.8254V32.2384C40.8003 31.9912 40.7416 31.7475 40.6297 31.527C40.5178 31.3066 40.3558 31.1154 40.1566 30.9689C40.3805 30.8043 40.557 30.5836 40.6684 30.329C40.7797 30.0744 40.8219 29.7949 40.7906 29.5188C40.7594 29.2427 40.6559 28.9797 40.4905 28.7564C40.3251 28.533 40.1037 28.3573 39.8487 28.2469V24.6998L41.1412 24.1532C41.4858 24.0074 41.7799 23.7633 41.9866 23.4514C42.1934 23.1395 42.3036 22.7735 42.3036 22.3993C42.3036 22.0251 42.1934 21.6592 41.9866 21.3472C41.7799 21.0353 41.4858 20.7912 41.1412 20.6454ZM39.5313 29.6993C39.5313 29.7621 39.5127 29.8234 39.4779 29.8756C39.443 29.9278 39.3934 29.9685 39.3354 29.9925C39.2774 30.0166 39.2136 30.0228 39.152 30.0106C39.0905 29.9984 39.0339 29.9681 38.9895 29.9237C38.9451 29.8793 38.9149 29.8228 38.9027 29.7612C38.8904 29.6997 38.8967 29.6358 38.9207 29.5778C38.9447 29.5199 38.9854 29.4703 39.0376 29.4354C39.0898 29.4005 39.1512 29.3819 39.214 29.3819C39.2981 29.3819 39.3789 29.4154 39.4384 29.4749C39.4979 29.5344 39.5313 29.6151 39.5313 29.6993ZM39.5313 33.1906H38.8966V32.2384C38.8966 32.1543 38.93 32.0735 38.9895 32.014C39.049 31.9545 39.1298 31.921 39.214 31.921C39.2981 31.921 39.3789 31.9545 39.4384 32.014C39.4979 32.0735 39.5313 32.1543 39.5313 32.2384V33.1906ZM35.4053 32.1197C35.4089 32.4444 35.3281 32.7644 35.1706 33.0483C35.0131 33.3323 34.7844 33.5703 34.507 33.7391C32.2755 35.0427 29.7375 35.7297 27.1531 35.7297C24.5687 35.7297 22.0307 35.0427 19.7991 33.7391C19.5218 33.5703 19.2931 33.3323 19.1356 33.0483C18.9781 32.7644 18.8972 32.4444 18.9009 32.1197V26.58L25.9165 29.5482C26.3084 29.7132 26.7292 29.7983 27.1544 29.7983C27.5795 29.7983 28.0004 29.7132 28.3922 29.5482L35.4053 26.58V32.1197ZM40.6467 22.9839L27.8951 28.3796C27.6602 28.4783 27.4079 28.5291 27.1531 28.5291C26.8983 28.5291 26.646 28.4783 26.411 28.3796L13.6595 22.9839C13.5446 22.9353 13.4466 22.854 13.3777 22.75C13.3088 22.646 13.272 22.5241 13.272 22.3993C13.272 22.2746 13.3088 22.1526 13.3777 22.0486C13.4466 21.9446 13.5446 21.8633 13.6595 21.8147L26.411 16.419C26.6459 16.3201 26.8982 16.2692 27.1531 16.2692C27.408 16.2692 27.6602 16.3201 27.8951 16.419L40.6467 21.8147C40.7615 21.8633 40.8596 21.9446 40.9285 22.0486C40.9974 22.1526 41.0342 22.2746 41.0342 22.3993C41.0342 22.5241 40.9974 22.646 40.9285 22.75C40.8596 22.854 40.7615 22.9353 40.6467 22.9839Z" fill="#26292C"/>
                                </svg>
                            </div>
                            <div class="doctor-experience-info">
                                <span class="experience-name color-main">
                                    Медицинское училище при ГВКГ им. Н.Н Бурденко, Москва
                                </span>
                                <span class="experience-type">
                                    Красный диплом, специальность «Медсестра»
                                </span>
                                <span class="experience-date">
                                    1994 г
                                </span>
                            </div>
                        </div>
                        <div class="doctor-block-exp-second doctor-experience-block">
                            <div class="doctor-experience-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="53" viewBox="0 0 55 53" fill="none">
                                    <rect width="55" height="53" rx="26.5" fill="#F5F5F5"/>
                                    <path d="M41.1412 20.6454L28.3896 15.2498C27.9978 15.0849 27.5769 15 27.1518 15C26.7267 15 26.3059 15.0849 25.914 15.2498L13.1625 20.6454C12.8178 20.7912 12.5238 21.0353 12.317 21.3472C12.1103 21.6592 12 22.0251 12 22.3993C12 22.7735 12.1103 23.1395 12.317 23.4514C12.5238 23.7633 12.8178 24.0074 13.1625 24.1532L17.6314 26.043V32.1197C17.6279 32.6654 17.7666 33.2025 18.0337 33.6783C18.3008 34.1542 18.6872 34.5522 19.1548 34.8334C21.5816 36.2522 24.342 37 27.1531 37C29.9641 37 32.7246 36.2522 35.1513 34.8334C35.619 34.5522 36.0054 34.1542 36.2725 33.6783C36.5396 33.2025 36.6783 32.6654 36.6748 32.1197V26.043L38.5792 25.2368V28.2469C38.3242 28.3573 38.1028 28.533 37.9374 28.7564C37.772 28.9797 37.6685 29.2427 37.6373 29.5188C37.6061 29.7949 37.6482 30.0744 37.7595 30.329C37.8709 30.5836 38.0474 30.8043 38.2713 30.9689C38.0721 31.1154 37.9101 31.3066 37.7982 31.527C37.6863 31.7475 37.6277 31.9912 37.627 32.2384V33.8254C37.627 33.9937 37.6939 34.1552 37.8129 34.2743C37.932 34.3933 38.0934 34.4602 38.2618 34.4602H40.1661C40.3345 34.4602 40.4959 34.3933 40.615 34.2743C40.734 34.1552 40.8009 33.9937 40.8009 33.8254V32.2384C40.8003 31.9912 40.7416 31.7475 40.6297 31.527C40.5178 31.3066 40.3558 31.1154 40.1566 30.9689C40.3805 30.8043 40.557 30.5836 40.6684 30.329C40.7797 30.0744 40.8219 29.7949 40.7906 29.5188C40.7594 29.2427 40.6559 28.9797 40.4905 28.7564C40.3251 28.533 40.1037 28.3573 39.8487 28.2469V24.6998L41.1412 24.1532C41.4858 24.0074 41.7799 23.7633 41.9866 23.4514C42.1934 23.1395 42.3036 22.7735 42.3036 22.3993C42.3036 22.0251 42.1934 21.6592 41.9866 21.3472C41.7799 21.0353 41.4858 20.7912 41.1412 20.6454ZM39.5313 29.6993C39.5313 29.7621 39.5127 29.8234 39.4779 29.8756C39.443 29.9278 39.3934 29.9685 39.3354 29.9925C39.2774 30.0166 39.2136 30.0228 39.152 30.0106C39.0905 29.9984 39.0339 29.9681 38.9895 29.9237C38.9451 29.8793 38.9149 29.8228 38.9027 29.7612C38.8904 29.6997 38.8967 29.6358 38.9207 29.5778C38.9447 29.5199 38.9854 29.4703 39.0376 29.4354C39.0898 29.4005 39.1512 29.3819 39.214 29.3819C39.2981 29.3819 39.3789 29.4154 39.4384 29.4749C39.4979 29.5344 39.5313 29.6151 39.5313 29.6993ZM39.5313 33.1906H38.8966V32.2384C38.8966 32.1543 38.93 32.0735 38.9895 32.014C39.049 31.9545 39.1298 31.921 39.214 31.921C39.2981 31.921 39.3789 31.9545 39.4384 32.014C39.4979 32.0735 39.5313 32.1543 39.5313 32.2384V33.1906ZM35.4053 32.1197C35.4089 32.4444 35.3281 32.7644 35.1706 33.0483C35.0131 33.3323 34.7844 33.5703 34.507 33.7391C32.2755 35.0427 29.7375 35.7297 27.1531 35.7297C24.5687 35.7297 22.0307 35.0427 19.7991 33.7391C19.5218 33.5703 19.2931 33.3323 19.1356 33.0483C18.9781 32.7644 18.8972 32.4444 18.9009 32.1197V26.58L25.9165 29.5482C26.3084 29.7132 26.7292 29.7983 27.1544 29.7983C27.5795 29.7983 28.0004 29.7132 28.3922 29.5482L35.4053 26.58V32.1197ZM40.6467 22.9839L27.8951 28.3796C27.6602 28.4783 27.4079 28.5291 27.1531 28.5291C26.8983 28.5291 26.646 28.4783 26.411 28.3796L13.6595 22.9839C13.5446 22.9353 13.4466 22.854 13.3777 22.75C13.3088 22.646 13.272 22.5241 13.272 22.3993C13.272 22.2746 13.3088 22.1526 13.3777 22.0486C13.4466 21.9446 13.5446 21.8633 13.6595 21.8147L26.411 16.419C26.6459 16.3201 26.8982 16.2692 27.1531 16.2692C27.408 16.2692 27.6602 16.3201 27.8951 16.419L40.6467 21.8147C40.7615 21.8633 40.8596 21.9446 40.9285 22.0486C40.9974 22.1526 41.0342 22.2746 41.0342 22.3993C41.0342 22.5241 40.9974 22.646 40.9285 22.75C40.8596 22.854 40.7615 22.9353 40.6467 22.9839Z" fill="#26292C"/>
                                </svg>
                            </div>
                            <div class="doctor-experience-info">
                                <span class="experience-name color-main">
                                    Военно-медицинская академия имени С.М. Кирова, Санкт-Петербург
                                </span>
                                <span class="experience-type">
                                    Факультет подготовки врачей для Военно-воздушных сил МО РФ,<br>специальность - Лечебное дело, Квалификация «Врач общей практики»
                                </span>
                                <span class="experience-date">
                                    2000 г
                                </span>
                            </div>
                        </div>
                        <div class="doctor-block-exp-third doctor-experience-block">
                            <div class="doctor-experience-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="53" viewBox="0 0 55 53" fill="none">
                                    <rect width="55" height="53" rx="26.5" fill="#F5F5F5"/>
                                    <path d="M41.1412 20.6454L28.3896 15.2498C27.9978 15.0849 27.5769 15 27.1518 15C26.7267 15 26.3059 15.0849 25.914 15.2498L13.1625 20.6454C12.8178 20.7912 12.5238 21.0353 12.317 21.3472C12.1103 21.6592 12 22.0251 12 22.3993C12 22.7735 12.1103 23.1395 12.317 23.4514C12.5238 23.7633 12.8178 24.0074 13.1625 24.1532L17.6314 26.043V32.1197C17.6279 32.6654 17.7666 33.2025 18.0337 33.6783C18.3008 34.1542 18.6872 34.5522 19.1548 34.8334C21.5816 36.2522 24.342 37 27.1531 37C29.9641 37 32.7246 36.2522 35.1513 34.8334C35.619 34.5522 36.0054 34.1542 36.2725 33.6783C36.5396 33.2025 36.6783 32.6654 36.6748 32.1197V26.043L38.5792 25.2368V28.2469C38.3242 28.3573 38.1028 28.533 37.9374 28.7564C37.772 28.9797 37.6685 29.2427 37.6373 29.5188C37.6061 29.7949 37.6482 30.0744 37.7595 30.329C37.8709 30.5836 38.0474 30.8043 38.2713 30.9689C38.0721 31.1154 37.9101 31.3066 37.7982 31.527C37.6863 31.7475 37.6277 31.9912 37.627 32.2384V33.8254C37.627 33.9937 37.6939 34.1552 37.8129 34.2743C37.932 34.3933 38.0934 34.4602 38.2618 34.4602H40.1661C40.3345 34.4602 40.4959 34.3933 40.615 34.2743C40.734 34.1552 40.8009 33.9937 40.8009 33.8254V32.2384C40.8003 31.9912 40.7416 31.7475 40.6297 31.527C40.5178 31.3066 40.3558 31.1154 40.1566 30.9689C40.3805 30.8043 40.557 30.5836 40.6684 30.329C40.7797 30.0744 40.8219 29.7949 40.7906 29.5188C40.7594 29.2427 40.6559 28.9797 40.4905 28.7564C40.3251 28.533 40.1037 28.3573 39.8487 28.2469V24.6998L41.1412 24.1532C41.4858 24.0074 41.7799 23.7633 41.9866 23.4514C42.1934 23.1395 42.3036 22.7735 42.3036 22.3993C42.3036 22.0251 42.1934 21.6592 41.9866 21.3472C41.7799 21.0353 41.4858 20.7912 41.1412 20.6454ZM39.5313 29.6993C39.5313 29.7621 39.5127 29.8234 39.4779 29.8756C39.443 29.9278 39.3934 29.9685 39.3354 29.9925C39.2774 30.0166 39.2136 30.0228 39.152 30.0106C39.0905 29.9984 39.0339 29.9681 38.9895 29.9237C38.9451 29.8793 38.9149 29.8228 38.9027 29.7612C38.8904 29.6997 38.8967 29.6358 38.9207 29.5778C38.9447 29.5199 38.9854 29.4703 39.0376 29.4354C39.0898 29.4005 39.1512 29.3819 39.214 29.3819C39.2981 29.3819 39.3789 29.4154 39.4384 29.4749C39.4979 29.5344 39.5313 29.6151 39.5313 29.6993ZM39.5313 33.1906H38.8966V32.2384C38.8966 32.1543 38.93 32.0735 38.9895 32.014C39.049 31.9545 39.1298 31.921 39.214 31.921C39.2981 31.921 39.3789 31.9545 39.4384 32.014C39.4979 32.0735 39.5313 32.1543 39.5313 32.2384V33.1906ZM35.4053 32.1197C35.4089 32.4444 35.3281 32.7644 35.1706 33.0483C35.0131 33.3323 34.7844 33.5703 34.507 33.7391C32.2755 35.0427 29.7375 35.7297 27.1531 35.7297C24.5687 35.7297 22.0307 35.0427 19.7991 33.7391C19.5218 33.5703 19.2931 33.3323 19.1356 33.0483C18.9781 32.7644 18.8972 32.4444 18.9009 32.1197V26.58L25.9165 29.5482C26.3084 29.7132 26.7292 29.7983 27.1544 29.7983C27.5795 29.7983 28.0004 29.7132 28.3922 29.5482L35.4053 26.58V32.1197ZM40.6467 22.9839L27.8951 28.3796C27.6602 28.4783 27.4079 28.5291 27.1531 28.5291C26.8983 28.5291 26.646 28.4783 26.411 28.3796L13.6595 22.9839C13.5446 22.9353 13.4466 22.854 13.3777 22.75C13.3088 22.646 13.272 22.5241 13.272 22.3993C13.272 22.2746 13.3088 22.1526 13.3777 22.0486C13.4466 21.9446 13.5446 21.8633 13.6595 21.8147L26.411 16.419C26.6459 16.3201 26.8982 16.2692 27.1531 16.2692C27.408 16.2692 27.6602 16.3201 27.8951 16.419L40.6467 21.8147C40.7615 21.8633 40.8596 21.9446 40.9285 22.0486C40.9974 22.1526 41.0342 22.2746 41.0342 22.3993C41.0342 22.5241 40.9974 22.646 40.9285 22.75C40.8596 22.854 40.7615 22.9353 40.6467 22.9839Z" fill="#26292C"/>
                                </svg>
                            </div>
                            <div class="doctor-experience-info">
                                <span class="experience-name color-main">
                                    Военно-медицинская академия имени С. М. Кирова, Санкт-Петербург
                                </span>
                                <span class="experience-type">
                                    Интернатура, специальность «Врач хирург»
                                </span>
                                <span class="experience-date">
                                    2001 г
                                </span>
                            </div>
                        </div>
                        <div class="doctor-block-exp-third doctor-experience-block">
                            <div class="doctor-experience-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="53" viewBox="0 0 55 53" fill="none">
                                    <rect width="55" height="53" rx="26.5" fill="#F5F5F5"/>
                                    <path d="M41.1412 20.6454L28.3896 15.2498C27.9978 15.0849 27.5769 15 27.1518 15C26.7267 15 26.3059 15.0849 25.914 15.2498L13.1625 20.6454C12.8178 20.7912 12.5238 21.0353 12.317 21.3472C12.1103 21.6592 12 22.0251 12 22.3993C12 22.7735 12.1103 23.1395 12.317 23.4514C12.5238 23.7633 12.8178 24.0074 13.1625 24.1532L17.6314 26.043V32.1197C17.6279 32.6654 17.7666 33.2025 18.0337 33.6783C18.3008 34.1542 18.6872 34.5522 19.1548 34.8334C21.5816 36.2522 24.342 37 27.1531 37C29.9641 37 32.7246 36.2522 35.1513 34.8334C35.619 34.5522 36.0054 34.1542 36.2725 33.6783C36.5396 33.2025 36.6783 32.6654 36.6748 32.1197V26.043L38.5792 25.2368V28.2469C38.3242 28.3573 38.1028 28.533 37.9374 28.7564C37.772 28.9797 37.6685 29.2427 37.6373 29.5188C37.6061 29.7949 37.6482 30.0744 37.7595 30.329C37.8709 30.5836 38.0474 30.8043 38.2713 30.9689C38.0721 31.1154 37.9101 31.3066 37.7982 31.527C37.6863 31.7475 37.6277 31.9912 37.627 32.2384V33.8254C37.627 33.9937 37.6939 34.1552 37.8129 34.2743C37.932 34.3933 38.0934 34.4602 38.2618 34.4602H40.1661C40.3345 34.4602 40.4959 34.3933 40.615 34.2743C40.734 34.1552 40.8009 33.9937 40.8009 33.8254V32.2384C40.8003 31.9912 40.7416 31.7475 40.6297 31.527C40.5178 31.3066 40.3558 31.1154 40.1566 30.9689C40.3805 30.8043 40.557 30.5836 40.6684 30.329C40.7797 30.0744 40.8219 29.7949 40.7906 29.5188C40.7594 29.2427 40.6559 28.9797 40.4905 28.7564C40.3251 28.533 40.1037 28.3573 39.8487 28.2469V24.6998L41.1412 24.1532C41.4858 24.0074 41.7799 23.7633 41.9866 23.4514C42.1934 23.1395 42.3036 22.7735 42.3036 22.3993C42.3036 22.0251 42.1934 21.6592 41.9866 21.3472C41.7799 21.0353 41.4858 20.7912 41.1412 20.6454ZM39.5313 29.6993C39.5313 29.7621 39.5127 29.8234 39.4779 29.8756C39.443 29.9278 39.3934 29.9685 39.3354 29.9925C39.2774 30.0166 39.2136 30.0228 39.152 30.0106C39.0905 29.9984 39.0339 29.9681 38.9895 29.9237C38.9451 29.8793 38.9149 29.8228 38.9027 29.7612C38.8904 29.6997 38.8967 29.6358 38.9207 29.5778C38.9447 29.5199 38.9854 29.4703 39.0376 29.4354C39.0898 29.4005 39.1512 29.3819 39.214 29.3819C39.2981 29.3819 39.3789 29.4154 39.4384 29.4749C39.4979 29.5344 39.5313 29.6151 39.5313 29.6993ZM39.5313 33.1906H38.8966V32.2384C38.8966 32.1543 38.93 32.0735 38.9895 32.014C39.049 31.9545 39.1298 31.921 39.214 31.921C39.2981 31.921 39.3789 31.9545 39.4384 32.014C39.4979 32.0735 39.5313 32.1543 39.5313 32.2384V33.1906ZM35.4053 32.1197C35.4089 32.4444 35.3281 32.7644 35.1706 33.0483C35.0131 33.3323 34.7844 33.5703 34.507 33.7391C32.2755 35.0427 29.7375 35.7297 27.1531 35.7297C24.5687 35.7297 22.0307 35.0427 19.7991 33.7391C19.5218 33.5703 19.2931 33.3323 19.1356 33.0483C18.9781 32.7644 18.8972 32.4444 18.9009 32.1197V26.58L25.9165 29.5482C26.3084 29.7132 26.7292 29.7983 27.1544 29.7983C27.5795 29.7983 28.0004 29.7132 28.3922 29.5482L35.4053 26.58V32.1197ZM40.6467 22.9839L27.8951 28.3796C27.6602 28.4783 27.4079 28.5291 27.1531 28.5291C26.8983 28.5291 26.646 28.4783 26.411 28.3796L13.6595 22.9839C13.5446 22.9353 13.4466 22.854 13.3777 22.75C13.3088 22.646 13.272 22.5241 13.272 22.3993C13.272 22.2746 13.3088 22.1526 13.3777 22.0486C13.4466 21.9446 13.5446 21.8633 13.6595 21.8147L26.411 16.419C26.6459 16.3201 26.8982 16.2692 27.1531 16.2692C27.408 16.2692 27.6602 16.3201 27.8951 16.419L40.6467 21.8147C40.7615 21.8633 40.8596 21.9446 40.9285 22.0486C40.9974 22.1526 41.0342 22.2746 41.0342 22.3993C41.0342 22.5241 40.9974 22.646 40.9285 22.75C40.8596 22.854 40.7615 22.9353 40.6467 22.9839Z" fill="#26292C"/>
                                </svg>
                            </div>
                            <div class="doctor-experience-info">
                                <span class="experience-name color-main">
                                    Военно-медицинская академия имени С. М. Кирова, Санкт-Петербург
                                </span>
                                <span class="experience-type">
                                    Интернатура, специальность «Врач хирург»
                                </span>
                                <span class="experience-date">
                                    2001 г
                                </span>
                            </div>
                        </div>
                        <div class="doctor-block-exp-fourth doctor-experience-block">
                            <div class="doctor-experience-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="53" viewBox="0 0 55 53" fill="none">
                                    <rect width="55" height="53" rx="26.5" fill="#F5F5F5"/>
                                    <path d="M41.1412 20.6454L28.3896 15.2498C27.9978 15.0849 27.5769 15 27.1518 15C26.7267 15 26.3059 15.0849 25.914 15.2498L13.1625 20.6454C12.8178 20.7912 12.5238 21.0353 12.317 21.3472C12.1103 21.6592 12 22.0251 12 22.3993C12 22.7735 12.1103 23.1395 12.317 23.4514C12.5238 23.7633 12.8178 24.0074 13.1625 24.1532L17.6314 26.043V32.1197C17.6279 32.6654 17.7666 33.2025 18.0337 33.6783C18.3008 34.1542 18.6872 34.5522 19.1548 34.8334C21.5816 36.2522 24.342 37 27.1531 37C29.9641 37 32.7246 36.2522 35.1513 34.8334C35.619 34.5522 36.0054 34.1542 36.2725 33.6783C36.5396 33.2025 36.6783 32.6654 36.6748 32.1197V26.043L38.5792 25.2368V28.2469C38.3242 28.3573 38.1028 28.533 37.9374 28.7564C37.772 28.9797 37.6685 29.2427 37.6373 29.5188C37.6061 29.7949 37.6482 30.0744 37.7595 30.329C37.8709 30.5836 38.0474 30.8043 38.2713 30.9689C38.0721 31.1154 37.9101 31.3066 37.7982 31.527C37.6863 31.7475 37.6277 31.9912 37.627 32.2384V33.8254C37.627 33.9937 37.6939 34.1552 37.8129 34.2743C37.932 34.3933 38.0934 34.4602 38.2618 34.4602H40.1661C40.3345 34.4602 40.4959 34.3933 40.615 34.2743C40.734 34.1552 40.8009 33.9937 40.8009 33.8254V32.2384C40.8003 31.9912 40.7416 31.7475 40.6297 31.527C40.5178 31.3066 40.3558 31.1154 40.1566 30.9689C40.3805 30.8043 40.557 30.5836 40.6684 30.329C40.7797 30.0744 40.8219 29.7949 40.7906 29.5188C40.7594 29.2427 40.6559 28.9797 40.4905 28.7564C40.3251 28.533 40.1037 28.3573 39.8487 28.2469V24.6998L41.1412 24.1532C41.4858 24.0074 41.7799 23.7633 41.9866 23.4514C42.1934 23.1395 42.3036 22.7735 42.3036 22.3993C42.3036 22.0251 42.1934 21.6592 41.9866 21.3472C41.7799 21.0353 41.4858 20.7912 41.1412 20.6454ZM39.5313 29.6993C39.5313 29.7621 39.5127 29.8234 39.4779 29.8756C39.443 29.9278 39.3934 29.9685 39.3354 29.9925C39.2774 30.0166 39.2136 30.0228 39.152 30.0106C39.0905 29.9984 39.0339 29.9681 38.9895 29.9237C38.9451 29.8793 38.9149 29.8228 38.9027 29.7612C38.8904 29.6997 38.8967 29.6358 38.9207 29.5778C38.9447 29.5199 38.9854 29.4703 39.0376 29.4354C39.0898 29.4005 39.1512 29.3819 39.214 29.3819C39.2981 29.3819 39.3789 29.4154 39.4384 29.4749C39.4979 29.5344 39.5313 29.6151 39.5313 29.6993ZM39.5313 33.1906H38.8966V32.2384C38.8966 32.1543 38.93 32.0735 38.9895 32.014C39.049 31.9545 39.1298 31.921 39.214 31.921C39.2981 31.921 39.3789 31.9545 39.4384 32.014C39.4979 32.0735 39.5313 32.1543 39.5313 32.2384V33.1906ZM35.4053 32.1197C35.4089 32.4444 35.3281 32.7644 35.1706 33.0483C35.0131 33.3323 34.7844 33.5703 34.507 33.7391C32.2755 35.0427 29.7375 35.7297 27.1531 35.7297C24.5687 35.7297 22.0307 35.0427 19.7991 33.7391C19.5218 33.5703 19.2931 33.3323 19.1356 33.0483C18.9781 32.7644 18.8972 32.4444 18.9009 32.1197V26.58L25.9165 29.5482C26.3084 29.7132 26.7292 29.7983 27.1544 29.7983C27.5795 29.7983 28.0004 29.7132 28.3922 29.5482L35.4053 26.58V32.1197ZM40.6467 22.9839L27.8951 28.3796C27.6602 28.4783 27.4079 28.5291 27.1531 28.5291C26.8983 28.5291 26.646 28.4783 26.411 28.3796L13.6595 22.9839C13.5446 22.9353 13.4466 22.854 13.3777 22.75C13.3088 22.646 13.272 22.5241 13.272 22.3993C13.272 22.2746 13.3088 22.1526 13.3777 22.0486C13.4466 21.9446 13.5446 21.8633 13.6595 21.8147L26.411 16.419C26.6459 16.3201 26.8982 16.2692 27.1531 16.2692C27.408 16.2692 27.6602 16.3201 27.8951 16.419L40.6467 21.8147C40.7615 21.8633 40.8596 21.9446 40.9285 22.0486C40.9974 22.1526 41.0342 22.2746 41.0342 22.3993C41.0342 22.5241 40.9974 22.646 40.9285 22.75C40.8596 22.854 40.7615 22.9353 40.6467 22.9839Z" fill="#26292C"/>
                                </svg>
                            </div>
                            <div class="doctor-experience-info">
                                <span class="experience-name color-main">
                                    Медицинское училище при ГВКГ им. Н.Н Бурденко, Москва
                                </span>
                                <span class="experience-type">
                                    Красный диплом, специальность «Медсестра»
                                </span>
                                <span class="experience-date">
                                    1994 г
                                </span>
                            </div>
                        </div>
                    </div>
                    <script>
                        (function($){
                            $(window).on("load",function(){
                                $(".doctor-experience-left-scroll").mCustomScrollbar({

                                });
                            });
                        })(jQuery);
                    </script>
                </div>
                <div class="doctor-experience-right">
                    <div class="doctor-experience-left-title main-title">
                        Опыт работы 5 лет
                    </div>
                    <div class="doctor-experience-right-scroll mCustomScrollbar">
                        <div class="doctor-block-exp-first-r doctor-experience-block">
                            <div class="doctor-experience-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="54" viewBox="0 0 55 54" fill="none">
                                    <rect width="55" height="53.3333" rx="26.6667" fill="#F5F5F5"/>
                                    <path d="M41 21.8025V36.1355C41 36.9501 40.6718 37.7313 40.0875 38.3073C39.5033 38.8833 38.7109 39.2069 37.8846 39.2069H17.1154C16.2891 39.2069 15.4967 38.8833 14.9125 38.3073C14.3282 37.7313 14 36.9501 14 36.1355V21.8025M41 21.8025C41 20.9879 40.6718 20.2067 40.0875 19.6307C39.5033 19.0547 38.7109 18.7311 37.8846 18.7311H17.1154C16.2891 18.7311 15.4967 19.0547 14.9125 19.6307C14.3282 20.2067 14 20.9879 14 21.8025M41 21.8025V22.1342C41.0001 22.6586 40.8639 23.1743 40.6046 23.6321C40.3453 24.0899 39.9713 24.4746 39.5185 24.7497L29.1338 31.0494C28.6426 31.3477 28.077 31.5056 27.5 31.5056C26.923 31.5056 26.3574 31.3477 25.8662 31.0494L20.6738 27.9002L15.4815 24.751C15.0287 24.476 14.6547 24.0913 14.3954 23.6334C14.1361 23.1756 13.9999 22.66 14 22.1356V21.8025" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M21.0156 18.4581V16.7291C21.0156 16.1224 21.2925 15 22.7695 15C24.2464 15 29.6002 15 33.2925 15C33.9079 15 35.0464 15.273 35.0464 16.7291C35.0464 18.1851 35.0464 17.8514 35.0464 18.4581" stroke="black"/>
                                </svg>
                            </div>
                            <div class="doctor-experience-info">
                                <span class="experience-name color-main">
                                    Клиника "Семейная", многопрофильный медицинский центр
                                </span>
                                <span class="experience-date">
                                    Июнь 2019 – Август 2021
                                </span>
                                <span class="experience-type">
                                    Врач-гинеколог
                                </span>
                            </div>
                        </div>
                        <div class="doctor-block-exp-second-r doctor-experience-block">
                            <div class="doctor-experience-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="54" viewBox="0 0 55 54" fill="none">
                                    <rect width="55" height="53.3333" rx="26.6667" fill="#F5F5F5"/>
                                    <path d="M41 21.8025V36.1355C41 36.9501 40.6718 37.7313 40.0875 38.3073C39.5033 38.8833 38.7109 39.2069 37.8846 39.2069H17.1154C16.2891 39.2069 15.4967 38.8833 14.9125 38.3073C14.3282 37.7313 14 36.9501 14 36.1355V21.8025M41 21.8025C41 20.9879 40.6718 20.2067 40.0875 19.6307C39.5033 19.0547 38.7109 18.7311 37.8846 18.7311H17.1154C16.2891 18.7311 15.4967 19.0547 14.9125 19.6307C14.3282 20.2067 14 20.9879 14 21.8025M41 21.8025V22.1342C41.0001 22.6586 40.8639 23.1743 40.6046 23.6321C40.3453 24.0899 39.9713 24.4746 39.5185 24.7497L29.1338 31.0494C28.6426 31.3477 28.077 31.5056 27.5 31.5056C26.923 31.5056 26.3574 31.3477 25.8662 31.0494L20.6738 27.9002L15.4815 24.751C15.0287 24.476 14.6547 24.0913 14.3954 23.6334C14.1361 23.1756 13.9999 22.66 14 22.1356V21.8025" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M21.0156 18.4581V16.7291C21.0156 16.1224 21.2925 15 22.7695 15C24.2464 15 29.6002 15 33.2925 15C33.9079 15 35.0464 15.273 35.0464 16.7291C35.0464 18.1851 35.0464 17.8514 35.0464 18.4581" stroke="black"/>
                                </svg>
                            </div>
                            <div class="doctor-experience-info">
                                <span class="experience-name color-main">
                                    Медицинский центр «Евро-Мед»
                                </span>
                                <span class="experience-date">
                                    Июнь 2019 – Август 2021
                                </span>
                                <span class="experience-type">
                                    Врач-гинеколог
                                </span>
                            </div>
                        </div>
                        <div class="doctor-block-exp-second-r doctor-experience-block">
                            <div class="doctor-experience-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="54" viewBox="0 0 55 54" fill="none">
                                    <rect width="55" height="53.3333" rx="26.6667" fill="#F5F5F5"/>
                                    <path d="M41 21.8025V36.1355C41 36.9501 40.6718 37.7313 40.0875 38.3073C39.5033 38.8833 38.7109 39.2069 37.8846 39.2069H17.1154C16.2891 39.2069 15.4967 38.8833 14.9125 38.3073C14.3282 37.7313 14 36.9501 14 36.1355V21.8025M41 21.8025C41 20.9879 40.6718 20.2067 40.0875 19.6307C39.5033 19.0547 38.7109 18.7311 37.8846 18.7311H17.1154C16.2891 18.7311 15.4967 19.0547 14.9125 19.6307C14.3282 20.2067 14 20.9879 14 21.8025M41 21.8025V22.1342C41.0001 22.6586 40.8639 23.1743 40.6046 23.6321C40.3453 24.0899 39.9713 24.4746 39.5185 24.7497L29.1338 31.0494C28.6426 31.3477 28.077 31.5056 27.5 31.5056C26.923 31.5056 26.3574 31.3477 25.8662 31.0494L20.6738 27.9002L15.4815 24.751C15.0287 24.476 14.6547 24.0913 14.3954 23.6334C14.1361 23.1756 13.9999 22.66 14 22.1356V21.8025" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M21.0156 18.4581V16.7291C21.0156 16.1224 21.2925 15 22.7695 15C24.2464 15 29.6002 15 33.2925 15C33.9079 15 35.0464 15.273 35.0464 16.7291C35.0464 18.1851 35.0464 17.8514 35.0464 18.4581" stroke="black"/>
                                </svg>
                            </div>
                            <div class="doctor-experience-info">
                                <span class="experience-name color-main">
                                    Медицинский центр «Евро-Мед»
                                </span>
                                <span class="experience-date">
                                    Июнь 2019 – Август 2021
                                </span>
                                <span class="experience-type">
                                    Врач-гинеколог
                                </span>
                            </div>
                        </div>
                        <div class="doctor-block-exp-second-r doctor-experience-block">
                            <div class="doctor-experience-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="54" viewBox="0 0 55 54" fill="none">
                                    <rect width="55" height="53.3333" rx="26.6667" fill="#F5F5F5"/>
                                    <path d="M41 21.8025V36.1355C41 36.9501 40.6718 37.7313 40.0875 38.3073C39.5033 38.8833 38.7109 39.2069 37.8846 39.2069H17.1154C16.2891 39.2069 15.4967 38.8833 14.9125 38.3073C14.3282 37.7313 14 36.9501 14 36.1355V21.8025M41 21.8025C41 20.9879 40.6718 20.2067 40.0875 19.6307C39.5033 19.0547 38.7109 18.7311 37.8846 18.7311H17.1154C16.2891 18.7311 15.4967 19.0547 14.9125 19.6307C14.3282 20.2067 14 20.9879 14 21.8025M41 21.8025V22.1342C41.0001 22.6586 40.8639 23.1743 40.6046 23.6321C40.3453 24.0899 39.9713 24.4746 39.5185 24.7497L29.1338 31.0494C28.6426 31.3477 28.077 31.5056 27.5 31.5056C26.923 31.5056 26.3574 31.3477 25.8662 31.0494L20.6738 27.9002L15.4815 24.751C15.0287 24.476 14.6547 24.0913 14.3954 23.6334C14.1361 23.1756 13.9999 22.66 14 22.1356V21.8025" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M21.0156 18.4581V16.7291C21.0156 16.1224 21.2925 15 22.7695 15C24.2464 15 29.6002 15 33.2925 15C33.9079 15 35.0464 15.273 35.0464 16.7291C35.0464 18.1851 35.0464 17.8514 35.0464 18.4581" stroke="black"/>
                                </svg>
                            </div>
                            <div class="doctor-experience-info">
                                <span class="experience-name color-main">
                                    Медицинский центр «Евро-Мед»
                                </span>
                                <span class="experience-date">
                                    Июнь 2019 – Август 2021
                                </span>
                                <span class="experience-type">
                                    Врач-гинеколог
                                </span>
                            </div>
                        </div>
                        <div class="doctor-block-exp-first-r doctor-experience-block">
                            <div class="doctor-experience-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="54" viewBox="0 0 55 54" fill="none">
                                    <rect width="55" height="53.3333" rx="26.6667" fill="#F5F5F5"/>
                                    <path d="M41 21.8025V36.1355C41 36.9501 40.6718 37.7313 40.0875 38.3073C39.5033 38.8833 38.7109 39.2069 37.8846 39.2069H17.1154C16.2891 39.2069 15.4967 38.8833 14.9125 38.3073C14.3282 37.7313 14 36.9501 14 36.1355V21.8025M41 21.8025C41 20.9879 40.6718 20.2067 40.0875 19.6307C39.5033 19.0547 38.7109 18.7311 37.8846 18.7311H17.1154C16.2891 18.7311 15.4967 19.0547 14.9125 19.6307C14.3282 20.2067 14 20.9879 14 21.8025M41 21.8025V22.1342C41.0001 22.6586 40.8639 23.1743 40.6046 23.6321C40.3453 24.0899 39.9713 24.4746 39.5185 24.7497L29.1338 31.0494C28.6426 31.3477 28.077 31.5056 27.5 31.5056C26.923 31.5056 26.3574 31.3477 25.8662 31.0494L20.6738 27.9002L15.4815 24.751C15.0287 24.476 14.6547 24.0913 14.3954 23.6334C14.1361 23.1756 13.9999 22.66 14 22.1356V21.8025" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M21.0156 18.4581V16.7291C21.0156 16.1224 21.2925 15 22.7695 15C24.2464 15 29.6002 15 33.2925 15C33.9079 15 35.0464 15.273 35.0464 16.7291C35.0464 18.1851 35.0464 17.8514 35.0464 18.4581" stroke="black"/>
                                </svg>
                            </div>
                            <div class="doctor-experience-info">
                                <span class="experience-name color-main">
                                    Клиника "Семейная", многопрофильный медицинский центр
                                </span>
                                <span class="experience-date">
                                    Июнь 2019 – Август 2021
                                </span>
                                <span class="experience-type">
                                    Врач-гинеколог
                                </span>
                            </div>
                        </div>
                        <div class="doctor-block-exp-second-r doctor-experience-block">
                            <div class="doctor-experience-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="54" viewBox="0 0 55 54" fill="none">
                                    <rect width="55" height="53.3333" rx="26.6667" fill="#F5F5F5"/>
                                    <path d="M41 21.8025V36.1355C41 36.9501 40.6718 37.7313 40.0875 38.3073C39.5033 38.8833 38.7109 39.2069 37.8846 39.2069H17.1154C16.2891 39.2069 15.4967 38.8833 14.9125 38.3073C14.3282 37.7313 14 36.9501 14 36.1355V21.8025M41 21.8025C41 20.9879 40.6718 20.2067 40.0875 19.6307C39.5033 19.0547 38.7109 18.7311 37.8846 18.7311H17.1154C16.2891 18.7311 15.4967 19.0547 14.9125 19.6307C14.3282 20.2067 14 20.9879 14 21.8025M41 21.8025V22.1342C41.0001 22.6586 40.8639 23.1743 40.6046 23.6321C40.3453 24.0899 39.9713 24.4746 39.5185 24.7497L29.1338 31.0494C28.6426 31.3477 28.077 31.5056 27.5 31.5056C26.923 31.5056 26.3574 31.3477 25.8662 31.0494L20.6738 27.9002L15.4815 24.751C15.0287 24.476 14.6547 24.0913 14.3954 23.6334C14.1361 23.1756 13.9999 22.66 14 22.1356V21.8025" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M21.0156 18.4581V16.7291C21.0156 16.1224 21.2925 15 22.7695 15C24.2464 15 29.6002 15 33.2925 15C33.9079 15 35.0464 15.273 35.0464 16.7291C35.0464 18.1851 35.0464 17.8514 35.0464 18.4581" stroke="black"/>
                                </svg>
                            </div>
                            <div class="doctor-experience-info">
                                <span class="experience-name color-main">
                                    Медицинский центр «Евро-Мед»
                                </span>
                                <span class="experience-date">
                                    Июнь 2019 – Август 2021
                                </span>
                                <span class="experience-type">
                                    Врач-гинеколог
                                </span>
                            </div>
                        </div>
                        <div class="doctor-block-exp-second-r doctor-experience-block">
                            <div class="doctor-experience-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="54" viewBox="0 0 55 54" fill="none">
                                    <rect width="55" height="53.3333" rx="26.6667" fill="#F5F5F5"/>
                                    <path d="M41 21.8025V36.1355C41 36.9501 40.6718 37.7313 40.0875 38.3073C39.5033 38.8833 38.7109 39.2069 37.8846 39.2069H17.1154C16.2891 39.2069 15.4967 38.8833 14.9125 38.3073C14.3282 37.7313 14 36.9501 14 36.1355V21.8025M41 21.8025C41 20.9879 40.6718 20.2067 40.0875 19.6307C39.5033 19.0547 38.7109 18.7311 37.8846 18.7311H17.1154C16.2891 18.7311 15.4967 19.0547 14.9125 19.6307C14.3282 20.2067 14 20.9879 14 21.8025M41 21.8025V22.1342C41.0001 22.6586 40.8639 23.1743 40.6046 23.6321C40.3453 24.0899 39.9713 24.4746 39.5185 24.7497L29.1338 31.0494C28.6426 31.3477 28.077 31.5056 27.5 31.5056C26.923 31.5056 26.3574 31.3477 25.8662 31.0494L20.6738 27.9002L15.4815 24.751C15.0287 24.476 14.6547 24.0913 14.3954 23.6334C14.1361 23.1756 13.9999 22.66 14 22.1356V21.8025" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M21.0156 18.4581V16.7291C21.0156 16.1224 21.2925 15 22.7695 15C24.2464 15 29.6002 15 33.2925 15C33.9079 15 35.0464 15.273 35.0464 16.7291C35.0464 18.1851 35.0464 17.8514 35.0464 18.4581" stroke="black"/>
                                </svg>
                            </div>
                            <div class="doctor-experience-info">
                                <span class="experience-name color-main">
                                    Медицинский центр «Евро-Мед»
                                </span>
                                <span class="experience-date">
                                    Июнь 2019 – Август 2021
                                </span>
                                <span class="experience-type">
                                    Врач-гинеколог
                                </span>
                            </div>
                        </div>
                        <div class="doctor-block-exp-third-r doctor-experience-block">
                            <div class="doctor-experience-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="54" viewBox="0 0 55 54" fill="none">
                                    <rect width="55" height="53.3333" rx="26.6667" fill="#F5F5F5"/>
                                    <path d="M41 21.8025V36.1355C41 36.9501 40.6718 37.7313 40.0875 38.3073C39.5033 38.8833 38.7109 39.2069 37.8846 39.2069H17.1154C16.2891 39.2069 15.4967 38.8833 14.9125 38.3073C14.3282 37.7313 14 36.9501 14 36.1355V21.8025M41 21.8025C41 20.9879 40.6718 20.2067 40.0875 19.6307C39.5033 19.0547 38.7109 18.7311 37.8846 18.7311H17.1154C16.2891 18.7311 15.4967 19.0547 14.9125 19.6307C14.3282 20.2067 14 20.9879 14 21.8025M41 21.8025V22.1342C41.0001 22.6586 40.8639 23.1743 40.6046 23.6321C40.3453 24.0899 39.9713 24.4746 39.5185 24.7497L29.1338 31.0494C28.6426 31.3477 28.077 31.5056 27.5 31.5056C26.923 31.5056 26.3574 31.3477 25.8662 31.0494L20.6738 27.9002L15.4815 24.751C15.0287 24.476 14.6547 24.0913 14.3954 23.6334C14.1361 23.1756 13.9999 22.66 14 22.1356V21.8025" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M21.0156 18.4581V16.7291C21.0156 16.1224 21.2925 15 22.7695 15C24.2464 15 29.6002 15 33.2925 15C33.9079 15 35.0464 15.273 35.0464 16.7291C35.0464 18.1851 35.0464 17.8514 35.0464 18.4581" stroke="black"/>
                                </svg>
                            </div>
                            <div class="doctor-experience-info">
                                <span class="experience-name color-main">
                                    Медицинский центр «Евро-Мед»
                                </span>
                                <span class="experience-date">
                                    Июнь 2019 – Август 2021
                                </span>
                                <span class="experience-type">
                                    Врач-гинеколог
                                </span>
                            </div>
                        </div>
                    </div>
                    <script>
                        (function($){
                            $(window).on("load",function(){
                                $(".doctor-experience-right-scroll").mCustomScrollbar({

                                });
                            });
                        })(jQuery);
                    </script>
                </div>
            </div>
            <div id="Documents" class="main-content-doctor-documents m-m-top main-line-t">
                <div class="main-content-doctor-document-wrapper">
                    <div class="main-content-doctor-documents-title main-title m-m-top">
                        Документы
                        <div class="all-block">
                            <div class="all">
                                Все документы
                            </div>
                            <div class="all-chevron">
                                <img src="img/chevron-right-blue.svg" alt="chevron-right">
                            </div>
                        </div>
                    </div>
                    <div class="doctor-diploms-slider owl-carousel">
                        <div class="diploms-slider-item hover-mod">
                            <img src="img/sertificate-2.png">
                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                                <g filter="url(#filter0_b_3987_3295)">
                                    <rect width="56" height="56" rx="28" fill="white" fill-opacity="0.8"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M33.4257 31.7079C36.3997 27.8885 36.1311 22.3627 32.6199 18.8515C28.8179 15.0495 22.6536 15.0495 18.8515 18.8515C15.0495 22.6536 15.0495 28.8179 18.8515 32.6199C22.3627 36.1311 27.8885 36.3997 31.7079 33.4257C31.7244 33.4444 31.7416 33.4626 31.7594 33.4804L36.9225 38.6436C37.3978 39.1188 38.1683 39.1188 38.6436 38.6436C39.1188 38.1683 39.1188 37.3978 38.6436 36.9225L33.4804 31.7594C33.4626 31.7416 33.4444 31.7244 33.4257 31.7079ZM30.8988 20.5726C33.7504 23.4241 33.7504 28.0473 30.8988 30.8988C28.0473 33.7504 23.4241 33.7504 20.5726 30.8988C17.721 28.0473 17.721 23.4241 20.5726 20.5726C23.4241 17.721 28.0473 17.721 30.8988 20.5726Z" fill="#3A8DFF"/>
                                </g>
                                <defs>
                                    <filter id="filter0_b_3987_3295" x="-4.7" y="-4.7" width="65.4" height="65.4" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                        <feGaussianBlur in="BackgroundImageFix" stdDeviation="2.35"/>
                                        <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_3987_3295"/>
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_3987_3295" result="shape"/>
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                        <div class="diploms-slider-item hover-mod">
                            <img src="img/sertificate-2.png">
                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                                <g filter="url(#filter0_b_3987_3295)">
                                    <rect width="56" height="56" rx="28" fill="white" fill-opacity="0.8"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M33.4257 31.7079C36.3997 27.8885 36.1311 22.3627 32.6199 18.8515C28.8179 15.0495 22.6536 15.0495 18.8515 18.8515C15.0495 22.6536 15.0495 28.8179 18.8515 32.6199C22.3627 36.1311 27.8885 36.3997 31.7079 33.4257C31.7244 33.4444 31.7416 33.4626 31.7594 33.4804L36.9225 38.6436C37.3978 39.1188 38.1683 39.1188 38.6436 38.6436C39.1188 38.1683 39.1188 37.3978 38.6436 36.9225L33.4804 31.7594C33.4626 31.7416 33.4444 31.7244 33.4257 31.7079ZM30.8988 20.5726C33.7504 23.4241 33.7504 28.0473 30.8988 30.8988C28.0473 33.7504 23.4241 33.7504 20.5726 30.8988C17.721 28.0473 17.721 23.4241 20.5726 20.5726C23.4241 17.721 28.0473 17.721 30.8988 20.5726Z" fill="#3A8DFF"/>
                                </g>
                                <defs>
                                    <filter id="filter0_b_3987_3295" x="-4.7" y="-4.7" width="65.4" height="65.4" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                        <feGaussianBlur in="BackgroundImageFix" stdDeviation="2.35"/>
                                        <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_3987_3295"/>
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_3987_3295" result="shape"/>
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                        <div class="diploms-slider-item hover-mod">
                            <img src="img/sertificate-2.png">
                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                                <g filter="url(#filter0_b_3987_3295)">
                                    <rect width="56" height="56" rx="28" fill="white" fill-opacity="0.8"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M33.4257 31.7079C36.3997 27.8885 36.1311 22.3627 32.6199 18.8515C28.8179 15.0495 22.6536 15.0495 18.8515 18.8515C15.0495 22.6536 15.0495 28.8179 18.8515 32.6199C22.3627 36.1311 27.8885 36.3997 31.7079 33.4257C31.7244 33.4444 31.7416 33.4626 31.7594 33.4804L36.9225 38.6436C37.3978 39.1188 38.1683 39.1188 38.6436 38.6436C39.1188 38.1683 39.1188 37.3978 38.6436 36.9225L33.4804 31.7594C33.4626 31.7416 33.4444 31.7244 33.4257 31.7079ZM30.8988 20.5726C33.7504 23.4241 33.7504 28.0473 30.8988 30.8988C28.0473 33.7504 23.4241 33.7504 20.5726 30.8988C17.721 28.0473 17.721 23.4241 20.5726 20.5726C23.4241 17.721 28.0473 17.721 30.8988 20.5726Z" fill="#3A8DFF"/>
                                </g>
                                <defs>
                                    <filter id="filter0_b_3987_3295" x="-4.7" y="-4.7" width="65.4" height="65.4" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                        <feGaussianBlur in="BackgroundImageFix" stdDeviation="2.35"/>
                                        <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_3987_3295"/>
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_3987_3295" result="shape"/>
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                        <div class="diploms-slider-item hover-mod">
                            <img src="img/sertificate-2.png">
                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                                <g filter="url(#filter0_b_3987_3295)">
                                    <rect width="56" height="56" rx="28" fill="white" fill-opacity="0.8"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M33.4257 31.7079C36.3997 27.8885 36.1311 22.3627 32.6199 18.8515C28.8179 15.0495 22.6536 15.0495 18.8515 18.8515C15.0495 22.6536 15.0495 28.8179 18.8515 32.6199C22.3627 36.1311 27.8885 36.3997 31.7079 33.4257C31.7244 33.4444 31.7416 33.4626 31.7594 33.4804L36.9225 38.6436C37.3978 39.1188 38.1683 39.1188 38.6436 38.6436C39.1188 38.1683 39.1188 37.3978 38.6436 36.9225L33.4804 31.7594C33.4626 31.7416 33.4444 31.7244 33.4257 31.7079ZM30.8988 20.5726C33.7504 23.4241 33.7504 28.0473 30.8988 30.8988C28.0473 33.7504 23.4241 33.7504 20.5726 30.8988C17.721 28.0473 17.721 23.4241 20.5726 20.5726C23.4241 17.721 28.0473 17.721 30.8988 20.5726Z" fill="#3A8DFF"/>
                                </g>
                                <defs>
                                    <filter id="filter0_b_3987_3295" x="-4.7" y="-4.7" width="65.4" height="65.4" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                        <feGaussianBlur in="BackgroundImageFix" stdDeviation="2.35"/>
                                        <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_3987_3295"/>
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_3987_3295" result="shape"/>
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                        <div class="diploms-slider-item hover-mod">
                            <img src="img/sertificate-2.png">
                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                                <g filter="url(#filter0_b_3987_3295)">
                                    <rect width="56" height="56" rx="28" fill="white" fill-opacity="0.8"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M33.4257 31.7079C36.3997 27.8885 36.1311 22.3627 32.6199 18.8515C28.8179 15.0495 22.6536 15.0495 18.8515 18.8515C15.0495 22.6536 15.0495 28.8179 18.8515 32.6199C22.3627 36.1311 27.8885 36.3997 31.7079 33.4257C31.7244 33.4444 31.7416 33.4626 31.7594 33.4804L36.9225 38.6436C37.3978 39.1188 38.1683 39.1188 38.6436 38.6436C39.1188 38.1683 39.1188 37.3978 38.6436 36.9225L33.4804 31.7594C33.4626 31.7416 33.4444 31.7244 33.4257 31.7079ZM30.8988 20.5726C33.7504 23.4241 33.7504 28.0473 30.8988 30.8988C28.0473 33.7504 23.4241 33.7504 20.5726 30.8988C17.721 28.0473 17.721 23.4241 20.5726 20.5726C23.4241 17.721 28.0473 17.721 30.8988 20.5726Z" fill="#3A8DFF"/>
                                </g>
                                <defs>
                                    <filter id="filter0_b_3987_3295" x="-4.7" y="-4.7" width="65.4" height="65.4" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                        <feGaussianBlur in="BackgroundImageFix" stdDeviation="2.35"/>
                                        <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_3987_3295"/>
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_3987_3295" result="shape"/>
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                    </div>
                    <div class="doctor-document-slider owl-carousel">
                        <div class="doctor-document-item hover-mod">
                            <div class="document-item-wrapper">
                                <img src="img/slider-license-2.png">
                            </div>
                        </div>
                        <div class="doctor-document-item hover-mod">
                            <div class="document-item-wrapper">
                                <img src="img/slider-license-2.png">
                            </div>
                        </div>
                        <div class="doctor-document-item hover-mod">
                            <div class="document-item-wrapper">
                                <img src="img/slider-license-2.png">
                            </div>
                        </div>
                        <div class="doctor-document-item hover-mod">
                            <div class="document-item-wrapper">
                                <img src="img/slider-license-2.png">
                            </div>
                        </div>
                        <div class="doctor-document-item hover-mod">
                            <div class="document-item-wrapper">
                                <img src="img/slider-license-2.png">
                            </div>
                        </div>
                        <div class="doctor-document-item hover-mod">
                            <div class="document-item-wrapper">
                                <img src="img/slider-license-2.png">
                            </div>
                        </div>
                        <div class="doctor-document-item hover-mod">
                            <div class="document-item-wrapper">
                                <img src="img/slider-license-2.png">
                            </div>
                        </div>
                    </div>
                    <script>
                        $(window).on('load', function () {
                            $('.doctor-document-slider.owl-carousel').owlCarousel({
                                margin: 20,
                                nav: true,
                                dots: false,
                                loop: true,
                                responsive: {
                                    0: {
                                        items: 5
                                    }
                                }
                            });
                        })
                        $(window).on('load', function () {
                            $('.doctor-diploms-slider.owl-carousel').owlCarousel({
                                margin: 20,
                                nav: true,
                                dots: false,
                                loop: true,
                                responsive: {
                                    0: {
                                        items: 4
                                    }
                                }
                            });
                        })
                    </script>
                </div>
            </div>
            <div id="Reviews" class="main-content-doctor-reviews m-m-bot">
                <div class="main-content-reviews-head">
                    <div class="reviews-head-title main-title">
                        Отзывы
                    </div>
                    <div class="reviews-rating-big reviews-rating">
                        <img src="img/star-yelow.svg" alt="star-y">
                        <img src="img/star-yelow.svg" alt="star-y">
                        <img src="img/star-yelow.svg" alt="star-y">
                        <img src="img/star-yelow.svg" alt="star-y">
                        <img src="img/star-gray.svg" alt="star-g">
                    </div>
                    <div class="reviews-head-quantity main-text">
                        345 отзывов
                    </div>
                    <div class="all-block">
                        <a class="all">Все отзывы</a>
                        <div class="all-chevron">
                            <img src="img/chevron-right-blue.svg" alt="chevron-right">
                        </div>
                    </div>
                </div>
                <div class="main-content-reviews-info">
                    <div class="reviews-info-text main-text color-main">
                        Каждая заявка на вакансию проходит тщательную проверку мы проверяем все данные, чтобы обеспечить надежность<br>и конфиденциальность. Анонимные заявки не рассматриваются. Все предоставленные документы и информация обрабатываются строго в соответствии с политикой конфиденциальности.
                    </div>
                    <div class="reviews-info-btn btn-main">
                        Оставить отзыв
                    </div>
                </div>
                <div class="main-content-reviews-dropdown">
                    <div class="reviews-dropdown">
                        <div class="reviews-dropdown-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="6" viewBox="0 0 12 6" fill="none">
                                <path d="M10.4 0L11.5 1L6 6L0.5 1L1.6 0L6 4L10.4 0Z" fill="#A4A4A4"/>
                            </svg>
                            <span id="dropdown-text">По умолчанию</span>
                        </div>
                        <div class="reviews-dropdown-menu">
                            <a class="dropdown-item" href="#">По умолчанию</a>
                            <a class="dropdown-item" href="#">Новые</a>
                            <a class="dropdown-item" href="#">С высокой оценкой</a>
                            <a class="dropdown-item" href="#">С низкой оценкой</a>
                        </div>
                        <script>
                            // Получаем все элементы <a> внутри меню
                            const dropdownItems = document.querySelectorAll('.dropdown-item');

                            // Получаем элемент, где нужно изменить текст
                            const dropdownBtnText = document.getElementById('dropdown-text');

                            // Добавляем обработчик события для каждого пункта меню
                            dropdownItems.forEach(item => {
                                item.addEventListener('click', function(event) {
                                    event.preventDefault();  // Предотвращаем переход по ссылке
                                    // Меняем текст кнопки на текст выбранного пункта
                                    dropdownBtnText.textContent = this.textContent;
                                });
                            });
                        </script>
                    </div>
                </div>
                <div class="main-content-review-container">
                    <div class="review-head">
                        <div class="review-avatar">
                            <img src="img/review-avatar-women.png" alt="avatar">
                        </div>
                        <div class="review-info">
                            <div class="review-name color-main">
                                Наталья Р.
                            </div>
                            <div class="review-rating-data">
                                <div class="reviews-rating">
                                    <img src="img/star-yelow.svg" alt="star-y">
                                    <img src="img/star-yelow.svg" alt="star-y">
                                    <img src="img/star-yelow.svg" alt="star-y">
                                    <img src="img/star-yelow.svg" alt="star-y">
                                    <img src="img/star-gray.svg" alt="star-g">
                                </div>
                                <span>6 ноября 2024</span>
                            </div>
                        </div>
                    </div>
                    <div class="review-body main-text">
                        Прекрасный врач и просто замечательный человек! Обратилась по рекомендации, и не пожалела. Очень чутко отнеслась к моим переживаниям, все подробно объяснила и помогла справиться с проблемой. Теперь буду обращаться только к ней!
                    </div>
                    <div class="review-footer">
                        <div class="review-footer-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                <path d="M16.2518 6.89448C15.7532 6.32228 14.9726 5.96683 14.2145 5.96683H12.2091C12.6604 5.28195 13.0001 4.59276 13.2071 3.93648C13.523 2.93501 13.5119 2.06202 13.1751 1.41185C12.7957 0.679556 12.027 0.276245 11.0105 0.276245C10.8974 0.276248 10.7869 0.308217 10.693 0.3681C10.5991 0.427982 10.5259 0.513081 10.4828 0.612604C9.69136 2.4407 7.62694 5.06818 5.68191 6.79906C5.48344 6.14255 4.84739 5.66074 4.09499 5.66074H1.65153C0.740885 5.66074 0 6.36627 0 7.23342V14.151C0 15.0182 0.740885 15.7237 1.65153 15.7237H4.09499C4.65206 15.7237 5.14525 15.4594 5.44452 15.0559C5.89726 15.4707 6.49746 15.7237 7.15512 15.7237H13.3077C13.9879 15.7237 14.5935 15.448 15.0593 14.9262C15.4433 14.496 15.716 13.9149 15.8479 13.2457L16.7548 8.64543C16.8764 8.02822 16.6978 7.40639 16.2518 6.89448ZM4.60501 14.1511C4.60501 14.4189 4.37622 14.6368 4.09499 14.6368H1.65153C1.3703 14.6368 1.14147 14.4189 1.14147 14.1511V7.23346C1.14147 6.96565 1.3703 6.74777 1.65153 6.74777H4.09499C4.37622 6.74777 4.60501 6.96565 4.60501 7.23346V14.1511ZM15.6329 8.44488L14.7261 13.0452C14.5744 13.8146 14.1221 14.6368 13.3076 14.6368H7.15509C6.37839 14.6368 5.74651 13.9678 5.74651 13.1455V8.19484C7.89786 6.49409 10.3072 3.57315 11.3708 1.38998C11.9383 1.48142 12.0942 1.78228 12.1514 1.89275C12.5219 2.60783 12.2144 4.25433 10.6641 6.17957C10.5992 6.26006 10.5594 6.35621 10.5489 6.45716C10.5385 6.55811 10.558 6.65981 10.6051 6.75078C10.6522 6.84174 10.7252 6.91833 10.8156 6.97188C10.9061 7.02543 11.0105 7.05381 11.117 7.05379H14.2145C14.6355 7.05379 15.0903 7.26369 15.3733 7.58853C15.5327 7.77149 15.7071 8.06851 15.6329 8.44488Z" fill="#8C8C8C"/>
                            </svg>
                            <span>121</span>
                        </div>
                        <div class="review-footer-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none">
                                <path d="M1.33415 9.10319C1.83255 9.67554 2.61307 10.0312 3.37115 10.0314L5.37653 10.032C4.92502 10.7168 4.58516 11.4059 4.37797 12.0621C4.06181 13.0635 4.07261 13.9365 4.40923 14.5867C4.78837 15.3191 5.55703 15.7227 6.57351 15.723C6.68655 15.723 6.79706 15.6911 6.89101 15.6312C6.98497 15.5713 7.05814 15.4863 7.10125 15.3868C7.89326 13.5589 9.95845 10.932 11.904 9.20171C12.1023 9.85828 12.7382 10.3403 13.4906 10.3405L15.934 10.3412C16.8447 10.3415 17.5858 9.63617 17.586 8.76902L17.5881 1.85142C17.5883 0.984229 16.8476 0.278481 15.937 0.278213L13.4935 0.277497C12.9365 0.277333 12.4432 0.541499 12.1438 0.944961C11.6912 0.530035 11.0911 0.276792 10.4334 0.276599L4.28084 0.274794C3.60066 0.274595 2.99489 0.550209 2.52895 1.07183C2.14486 1.50187 1.87198 2.08289 1.73987 2.75207L0.831663 7.35209C0.709809 7.96927 0.888267 8.59115 1.33415 9.10319ZM12.983 1.85003C12.9831 1.58222 13.212 1.36438 13.4932 1.36446L15.9367 1.36518C16.2179 1.36526 16.4467 1.58324 16.4466 1.85105L16.4446 8.76865C16.4445 9.03646 16.2156 9.25427 15.9344 9.25419L13.4909 9.25347C13.2097 9.25339 12.9809 9.03545 12.981 8.76764L12.983 1.85003ZM1.95349 7.55297L2.86167 2.95292C3.01356 2.18354 3.46608 1.36152 4.28055 1.36176L10.4331 1.36357C11.2098 1.36379 11.8415 2.03296 11.8412 2.85527L11.8398 7.80592C9.68794 9.50603 7.27777 12.4263 6.21349 14.6091C5.64603 14.5175 5.49024 14.2166 5.43302 14.1061C5.06278 13.3909 5.37071 11.7445 6.92164 9.81974C6.98649 9.73927 7.0264 9.64313 7.03685 9.54219C7.0473 9.44124 7.02788 9.33953 6.98078 9.24855C6.93368 9.15757 6.86078 9.08096 6.77033 9.02738C6.67989 8.97381 6.5755 8.9454 6.46899 8.94539L3.37143 8.94448C2.95051 8.94435 2.4957 8.73433 2.21278 8.4094C2.05349 8.2264 1.87915 7.92932 1.95349 7.55297Z" fill="#8C8C8C"/>
                            </svg>
                        </div>
                        <div class="review-footer-btn-answer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                <path d="M14.6117 14.4033L12.2894 13.5806L11.8712 13.7966C10.9032 14.2953 9.79687 14.561 8.58887 14.561C4.59344 14.561 1.73172 11.5299 1.73172 7.88721C1.73172 4.23119 4.57287 1.21342 8.58887 1.21342C12.6049 1.21342 15.446 4.23119 15.446 7.88721C15.4393 9.28631 15.0054 10.6454 14.2094 11.7604L13.8232 12.3065L14.6117 14.402V14.4033ZM15.4197 15.9686C15.5231 16.0054 15.6343 16.01 15.7401 15.9818C15.8459 15.9537 15.9419 15.894 16.0168 15.8098C16.0917 15.7255 16.1423 15.6203 16.1626 15.5066C16.183 15.3928 16.1723 15.2752 16.1317 15.1677L15.1226 12.4897C16.0675 11.1644 16.582 9.54941 16.5889 7.88721C16.5889 3.86595 13.5237 0 8.58887 0C3.65401 0 0.588867 3.86595 0.588867 7.88721C0.588867 11.9085 3.68601 15.7744 8.58887 15.7744C10.0117 15.7744 11.2826 15.4492 12.3694 14.8886L15.4209 15.9686H15.4197Z" fill="#8C8C8C"/>
                            </svg>
                            <span>1</span>
                        </div>
                    </div>
                    <div class="review-answer-wrapper">
                        <div class="review-answer-container">
                            <div class="review-answer-avatar">
                                <img src="img/doctor-answer.png" alt="avatar">
                            </div>
                            <div class="review-answer-inner">
                                <div class="review-answer-name-data color-main">
                                    Мельникова Надежда Андреевна <span>6 ноября 2024</span>
                                </div>
                                <div class="review-answer-text main-text color-main">
                                    Арина, спасибо за ваш отзыв! Я рад, что смогла помочь вам разобраться с проблемой и найти правильное решение. Ваша благодарность – для меня самая высокая оценка моей работы. Буду рада видеть вас на следующих приемах!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-content-review-container">
                    <div class="review-head">
                        <div class="review-avatar">
                            <img src="img/review-avatar-man.png" alt="avatar">
                        </div>
                        <div class="review-info">
                            <div class="review-name color-main">
                                Арина К.
                            </div>
                            <div class="review-rating-data">
                                <div class="reviews-rating">
                                    <img src="img/star-yelow.svg" alt="star-y">
                                    <img src="img/star-yelow.svg" alt="star-y">
                                    <img src="img/star-yelow.svg" alt="star-y">
                                    <img src="img/star-yelow.svg" alt="star-y">
                                    <img src="img/star-gray.svg" alt="star-g">
                                </div>
                                <span>6 ноября 2024</span>
                            </div>
                        </div>
                    </div>
                    <div class="review-body main-text">
                        Обратилась к доктору с проблемами, которые мучили меня долгое время. После консультации все стало ясно, и лечение было назначено правильно. Приятная атмосфера на приеме, внимательное отношение. Очень благодарна врачу!
                    </div>
                    <div class="review-footer">
                        <div class="review-footer-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                <path d="M16.2518 6.89448C15.7532 6.32228 14.9726 5.96683 14.2145 5.96683H12.2091C12.6604 5.28195 13.0001 4.59276 13.2071 3.93648C13.523 2.93501 13.5119 2.06202 13.1751 1.41185C12.7957 0.679556 12.027 0.276245 11.0105 0.276245C10.8974 0.276248 10.7869 0.308217 10.693 0.3681C10.5991 0.427982 10.5259 0.513081 10.4828 0.612604C9.69136 2.4407 7.62694 5.06818 5.68191 6.79906C5.48344 6.14255 4.84739 5.66074 4.09499 5.66074H1.65153C0.740885 5.66074 0 6.36627 0 7.23342V14.151C0 15.0182 0.740885 15.7237 1.65153 15.7237H4.09499C4.65206 15.7237 5.14525 15.4594 5.44452 15.0559C5.89726 15.4707 6.49746 15.7237 7.15512 15.7237H13.3077C13.9879 15.7237 14.5935 15.448 15.0593 14.9262C15.4433 14.496 15.716 13.9149 15.8479 13.2457L16.7548 8.64543C16.8764 8.02822 16.6978 7.40639 16.2518 6.89448ZM4.60501 14.1511C4.60501 14.4189 4.37622 14.6368 4.09499 14.6368H1.65153C1.3703 14.6368 1.14147 14.4189 1.14147 14.1511V7.23346C1.14147 6.96565 1.3703 6.74777 1.65153 6.74777H4.09499C4.37622 6.74777 4.60501 6.96565 4.60501 7.23346V14.1511ZM15.6329 8.44488L14.7261 13.0452C14.5744 13.8146 14.1221 14.6368 13.3076 14.6368H7.15509C6.37839 14.6368 5.74651 13.9678 5.74651 13.1455V8.19484C7.89786 6.49409 10.3072 3.57315 11.3708 1.38998C11.9383 1.48142 12.0942 1.78228 12.1514 1.89275C12.5219 2.60783 12.2144 4.25433 10.6641 6.17957C10.5992 6.26006 10.5594 6.35621 10.5489 6.45716C10.5385 6.55811 10.558 6.65981 10.6051 6.75078C10.6522 6.84174 10.7252 6.91833 10.8156 6.97188C10.9061 7.02543 11.0105 7.05381 11.117 7.05379H14.2145C14.6355 7.05379 15.0903 7.26369 15.3733 7.58853C15.5327 7.77149 15.7071 8.06851 15.6329 8.44488Z" fill="#8C8C8C"/>
                            </svg>
                            <span>121</span>
                        </div>
                        <div class="review-footer-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none">
                                <path d="M1.33415 9.10319C1.83255 9.67554 2.61307 10.0312 3.37115 10.0314L5.37653 10.032C4.92502 10.7168 4.58516 11.4059 4.37797 12.0621C4.06181 13.0635 4.07261 13.9365 4.40923 14.5867C4.78837 15.3191 5.55703 15.7227 6.57351 15.723C6.68655 15.723 6.79706 15.6911 6.89101 15.6312C6.98497 15.5713 7.05814 15.4863 7.10125 15.3868C7.89326 13.5589 9.95845 10.932 11.904 9.20171C12.1023 9.85828 12.7382 10.3403 13.4906 10.3405L15.934 10.3412C16.8447 10.3415 17.5858 9.63617 17.586 8.76902L17.5881 1.85142C17.5883 0.984229 16.8476 0.278481 15.937 0.278213L13.4935 0.277497C12.9365 0.277333 12.4432 0.541499 12.1438 0.944961C11.6912 0.530035 11.0911 0.276792 10.4334 0.276599L4.28084 0.274794C3.60066 0.274595 2.99489 0.550209 2.52895 1.07183C2.14486 1.50187 1.87198 2.08289 1.73987 2.75207L0.831663 7.35209C0.709809 7.96927 0.888267 8.59115 1.33415 9.10319ZM12.983 1.85003C12.9831 1.58222 13.212 1.36438 13.4932 1.36446L15.9367 1.36518C16.2179 1.36526 16.4467 1.58324 16.4466 1.85105L16.4446 8.76865C16.4445 9.03646 16.2156 9.25427 15.9344 9.25419L13.4909 9.25347C13.2097 9.25339 12.9809 9.03545 12.981 8.76764L12.983 1.85003ZM1.95349 7.55297L2.86167 2.95292C3.01356 2.18354 3.46608 1.36152 4.28055 1.36176L10.4331 1.36357C11.2098 1.36379 11.8415 2.03296 11.8412 2.85527L11.8398 7.80592C9.68794 9.50603 7.27777 12.4263 6.21349 14.6091C5.64603 14.5175 5.49024 14.2166 5.43302 14.1061C5.06278 13.3909 5.37071 11.7445 6.92164 9.81974C6.98649 9.73927 7.0264 9.64313 7.03685 9.54219C7.0473 9.44124 7.02788 9.33953 6.98078 9.24855C6.93368 9.15757 6.86078 9.08096 6.77033 9.02738C6.67989 8.97381 6.5755 8.9454 6.46899 8.94539L3.37143 8.94448C2.95051 8.94435 2.4957 8.73433 2.21278 8.4094C2.05349 8.2264 1.87915 7.92932 1.95349 7.55297Z" fill="#8C8C8C"/>
                            </svg>
                        </div>
                        <div class="review-footer-btn-answer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                <path d="M14.6117 14.4033L12.2894 13.5806L11.8712 13.7966C10.9032 14.2953 9.79687 14.561 8.58887 14.561C4.59344 14.561 1.73172 11.5299 1.73172 7.88721C1.73172 4.23119 4.57287 1.21342 8.58887 1.21342C12.6049 1.21342 15.446 4.23119 15.446 7.88721C15.4393 9.28631 15.0054 10.6454 14.2094 11.7604L13.8232 12.3065L14.6117 14.402V14.4033ZM15.4197 15.9686C15.5231 16.0054 15.6343 16.01 15.7401 15.9818C15.8459 15.9537 15.9419 15.894 16.0168 15.8098C16.0917 15.7255 16.1423 15.6203 16.1626 15.5066C16.183 15.3928 16.1723 15.2752 16.1317 15.1677L15.1226 12.4897C16.0675 11.1644 16.582 9.54941 16.5889 7.88721C16.5889 3.86595 13.5237 0 8.58887 0C3.65401 0 0.588867 3.86595 0.588867 7.88721C0.588867 11.9085 3.68601 15.7744 8.58887 15.7744C10.0117 15.7744 11.2826 15.4492 12.3694 14.8886L15.4209 15.9686H15.4197Z" fill="#8C8C8C"/>
                            </svg>
                            <span>1</span>
                        </div>
                    </div>
                    <div class="review-answer-wrapper">
                        <div class="review-answer-container">
                            <div class="review-answer-avatar">
                                <img src="img/doctor-answer.png" alt="avatar">
                            </div>
                            <div class="review-answer-inner">
                                <div class="review-answer-name-data color-main">
                                    Мельникова Надежда Андреевна <span>6 ноября 2024</span>
                                </div>
                                <div class="review-answer-text main-text color-main">
                                    Арина, спасибо за ваш отзыв! Я рад, что смогла помочь вам разобраться с проблемой и найти правильное решение. Ваша благодарность – для меня самая высокая оценка моей работы. Буду рада видеть вас на следующих приемах!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-content-review-container">
                    <div class="review-head">
                        <div class="review-avatar">
                            <img src="img/review-avatar-man.png" alt="avatar">
                        </div>
                        <div class="review-info">
                            <div class="review-name color-main">
                                Татьяна К.
                            </div>
                            <div class="review-rating-data">
                                <div class="reviews-rating">
                                    <img src="img/star-yelow.svg" alt="star-y">
                                    <img src="img/star-yelow.svg" alt="star-y">
                                    <img src="img/star-yelow.svg" alt="star-y">
                                    <img src="img/star-yelow.svg" alt="star-y">
                                    <img src="img/star-gray.svg" alt="star-g">
                                </div>
                                <span>6 ноября 2024</span>
                            </div>
                        </div>
                    </div>
                    <div class="review-body main-text">
                        Очень довольна визитом! Доктор внимательная и профессиональная, создала атмосферу доверия. Рекомендую всем, кто ищет не только квалифицированного, но и доброжелательного специалиста!
                    </div>
                    <div class="review-footer">
                        <div class="review-footer-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                <path d="M16.2518 6.89448C15.7532 6.32228 14.9726 5.96683 14.2145 5.96683H12.2091C12.6604 5.28195 13.0001 4.59276 13.2071 3.93648C13.523 2.93501 13.5119 2.06202 13.1751 1.41185C12.7957 0.679556 12.027 0.276245 11.0105 0.276245C10.8974 0.276248 10.7869 0.308217 10.693 0.3681C10.5991 0.427982 10.5259 0.513081 10.4828 0.612604C9.69136 2.4407 7.62694 5.06818 5.68191 6.79906C5.48344 6.14255 4.84739 5.66074 4.09499 5.66074H1.65153C0.740885 5.66074 0 6.36627 0 7.23342V14.151C0 15.0182 0.740885 15.7237 1.65153 15.7237H4.09499C4.65206 15.7237 5.14525 15.4594 5.44452 15.0559C5.89726 15.4707 6.49746 15.7237 7.15512 15.7237H13.3077C13.9879 15.7237 14.5935 15.448 15.0593 14.9262C15.4433 14.496 15.716 13.9149 15.8479 13.2457L16.7548 8.64543C16.8764 8.02822 16.6978 7.40639 16.2518 6.89448ZM4.60501 14.1511C4.60501 14.4189 4.37622 14.6368 4.09499 14.6368H1.65153C1.3703 14.6368 1.14147 14.4189 1.14147 14.1511V7.23346C1.14147 6.96565 1.3703 6.74777 1.65153 6.74777H4.09499C4.37622 6.74777 4.60501 6.96565 4.60501 7.23346V14.1511ZM15.6329 8.44488L14.7261 13.0452C14.5744 13.8146 14.1221 14.6368 13.3076 14.6368H7.15509C6.37839 14.6368 5.74651 13.9678 5.74651 13.1455V8.19484C7.89786 6.49409 10.3072 3.57315 11.3708 1.38998C11.9383 1.48142 12.0942 1.78228 12.1514 1.89275C12.5219 2.60783 12.2144 4.25433 10.6641 6.17957C10.5992 6.26006 10.5594 6.35621 10.5489 6.45716C10.5385 6.55811 10.558 6.65981 10.6051 6.75078C10.6522 6.84174 10.7252 6.91833 10.8156 6.97188C10.9061 7.02543 11.0105 7.05381 11.117 7.05379H14.2145C14.6355 7.05379 15.0903 7.26369 15.3733 7.58853C15.5327 7.77149 15.7071 8.06851 15.6329 8.44488Z" fill="#8C8C8C"/>
                            </svg>
                            <span>121</span>
                        </div>
                        <div class="review-footer-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none">
                                <path d="M1.33415 9.10319C1.83255 9.67554 2.61307 10.0312 3.37115 10.0314L5.37653 10.032C4.92502 10.7168 4.58516 11.4059 4.37797 12.0621C4.06181 13.0635 4.07261 13.9365 4.40923 14.5867C4.78837 15.3191 5.55703 15.7227 6.57351 15.723C6.68655 15.723 6.79706 15.6911 6.89101 15.6312C6.98497 15.5713 7.05814 15.4863 7.10125 15.3868C7.89326 13.5589 9.95845 10.932 11.904 9.20171C12.1023 9.85828 12.7382 10.3403 13.4906 10.3405L15.934 10.3412C16.8447 10.3415 17.5858 9.63617 17.586 8.76902L17.5881 1.85142C17.5883 0.984229 16.8476 0.278481 15.937 0.278213L13.4935 0.277497C12.9365 0.277333 12.4432 0.541499 12.1438 0.944961C11.6912 0.530035 11.0911 0.276792 10.4334 0.276599L4.28084 0.274794C3.60066 0.274595 2.99489 0.550209 2.52895 1.07183C2.14486 1.50187 1.87198 2.08289 1.73987 2.75207L0.831663 7.35209C0.709809 7.96927 0.888267 8.59115 1.33415 9.10319ZM12.983 1.85003C12.9831 1.58222 13.212 1.36438 13.4932 1.36446L15.9367 1.36518C16.2179 1.36526 16.4467 1.58324 16.4466 1.85105L16.4446 8.76865C16.4445 9.03646 16.2156 9.25427 15.9344 9.25419L13.4909 9.25347C13.2097 9.25339 12.9809 9.03545 12.981 8.76764L12.983 1.85003ZM1.95349 7.55297L2.86167 2.95292C3.01356 2.18354 3.46608 1.36152 4.28055 1.36176L10.4331 1.36357C11.2098 1.36379 11.8415 2.03296 11.8412 2.85527L11.8398 7.80592C9.68794 9.50603 7.27777 12.4263 6.21349 14.6091C5.64603 14.5175 5.49024 14.2166 5.43302 14.1061C5.06278 13.3909 5.37071 11.7445 6.92164 9.81974C6.98649 9.73927 7.0264 9.64313 7.03685 9.54219C7.0473 9.44124 7.02788 9.33953 6.98078 9.24855C6.93368 9.15757 6.86078 9.08096 6.77033 9.02738C6.67989 8.97381 6.5755 8.9454 6.46899 8.94539L3.37143 8.94448C2.95051 8.94435 2.4957 8.73433 2.21278 8.4094C2.05349 8.2264 1.87915 7.92932 1.95349 7.55297Z" fill="#8C8C8C"/>
                            </svg>
                        </div>
                        <div class="review-footer-btn-answer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                <path d="M14.6117 14.4033L12.2894 13.5806L11.8712 13.7966C10.9032 14.2953 9.79687 14.561 8.58887 14.561C4.59344 14.561 1.73172 11.5299 1.73172 7.88721C1.73172 4.23119 4.57287 1.21342 8.58887 1.21342C12.6049 1.21342 15.446 4.23119 15.446 7.88721C15.4393 9.28631 15.0054 10.6454 14.2094 11.7604L13.8232 12.3065L14.6117 14.402V14.4033ZM15.4197 15.9686C15.5231 16.0054 15.6343 16.01 15.7401 15.9818C15.8459 15.9537 15.9419 15.894 16.0168 15.8098C16.0917 15.7255 16.1423 15.6203 16.1626 15.5066C16.183 15.3928 16.1723 15.2752 16.1317 15.1677L15.1226 12.4897C16.0675 11.1644 16.582 9.54941 16.5889 7.88721C16.5889 3.86595 13.5237 0 8.58887 0C3.65401 0 0.588867 3.86595 0.588867 7.88721C0.588867 11.9085 3.68601 15.7744 8.58887 15.7744C10.0117 15.7744 11.2826 15.4492 12.3694 14.8886L15.4209 15.9686H15.4197Z" fill="#8C8C8C"/>
                            </svg>
                            <span>1</span>
                        </div>
                    </div>
                    <div class="review-answer-wrapper">
                        <div class="review-answer-container">
                            <div class="review-answer-avatar">
                                <img src="img/doctor-answer.png" alt="avatar">
                            </div>
                            <div class="review-answer-inner">
                                <div class="review-answer-name-data color-main">
                                    Мельникова Надежда Андреевна <span>6 ноября 2024</span>
                                </div>
                                <div class="review-answer-text main-text color-main">
                                    Арина, спасибо за ваш отзыв! Я рад, что смогла помочь вам разобраться с проблемой и найти правильное решение. Ваша благодарность – для меня самая высокая оценка моей работы. Буду рада видеть вас на следующих приемах!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    $(document).ready(function() {
                        // Обработчик клика по кнопке
                        $('.review-footer-btn-answer').on('click', function() {
                            // Получаем родительский контейнер для этого отзыва
                            var parentContainer = $(this).closest('.main-content-review-container');

                            // Переключаем класс 'active' для блока с ответом в этом контейнере
                            parentContainer.find('.review-answer-wrapper').toggleClass('active');

                            // Переключаем класс 'active' для самой кнопки в этом контейнере
                            $(this).toggleClass('active');
                        });
                    });
                </script>
            </div>
            <?require $_SERVER['DOCUMENT_ROOT'] . '/site/templates/main-content-slider-video.php';?>
            <div id="FAQ" class="main-content-doctor-accordion-questions m-m-bot main-line-b">
                <div class="accordion-questions-title main-title">
                    <div>Часто задаваемые вопросы</div>
                </div>
                <div class="accordion-questions-container">
                    <div class="questions-accordion-item">
                        <div class="questions-accordion-title accordion-title color-main">
                            <span>У меня нерегулярный цикл. Что это может быть?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28">
                                <path class="ring" d="M14.5 26.25C7.745 26.25 2.25 20.755 2.25 14C2.25 7.245 7.745 1.75 14.5 1.75C21.255 1.75 26.75 7.245 26.75 14C26.75 20.755 21.255 26.25 14.5 26.25ZM14.5 3.5C8.7075 3.5 4 8.2075 4 14C4 19.7925 8.7075 24.5 14.5 24.5C20.2925 24.5 25 19.7925 25 14C25 8.2075 20.2925 3.5 14.5 3.5Z" fill="#D9D9D9"/>
                                <path class="plus" d="M14.5 20.125C14.01 20.125 13.625 19.74 13.625 19.25V8.75C13.625 8.26 14.01 7.875 14.5 7.875C14.99 7.875 15.375 8.26 15.375 8.75V19.25C15.375 19.74 14.99 20.125 14.5 20.125Z" fill="#D9D9D9"/>
                                <path class="minus" d="M19.75 14.875H9.25C8.76 14.875 8.375 14.49 8.375 14C8.375 13.51 8.76 13.125 9.25 13.125H19.75C20.24 13.125 20.625 13.51 20.625 14C20.625 14.49 20.24 14.875 19.75 14.875Z" fill="#D9D9D9"/>
                            </svg>
                        </div>
                        <div class="questions-accordion-content">
                            <div class="questions-accordion-content-inner color-main">
                                <div class="main-text">
                                    Боль внизу живота может быть симптомом различных состояний, от менструальных болей до воспалительных процессов. Чтобы определить причину, мне нужно провести осмотр и, возможно, назначить дополнительные исследования, такие как УЗИ или анализы. Не стоит терпеть боль, лучше обратиться ко мне для диагностики и лечения.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="questions-accordion-item">
                        <div class="questions-accordion-title accordion-title color-main">
                            <span>У меня боли внизу живота. Что это может быть?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28">
                                <path class="ring" d="M14.5 26.25C7.745 26.25 2.25 20.755 2.25 14C2.25 7.245 7.745 1.75 14.5 1.75C21.255 1.75 26.75 7.245 26.75 14C26.75 20.755 21.255 26.25 14.5 26.25ZM14.5 3.5C8.7075 3.5 4 8.2075 4 14C4 19.7925 8.7075 24.5 14.5 24.5C20.2925 24.5 25 19.7925 25 14C25 8.2075 20.2925 3.5 14.5 3.5Z" fill="#D9D9D9"/>
                                <path class="plus" d="M14.5 20.125C14.01 20.125 13.625 19.74 13.625 19.25V8.75C13.625 8.26 14.01 7.875 14.5 7.875C14.99 7.875 15.375 8.26 15.375 8.75V19.25C15.375 19.74 14.99 20.125 14.5 20.125Z" fill="#D9D9D9"/>
                                <path class="minus" d="M19.75 14.875H9.25C8.76 14.875 8.375 14.49 8.375 14C8.375 13.51 8.76 13.125 9.25 13.125H19.75C20.24 13.125 20.625 13.51 20.625 14C20.625 14.49 20.24 14.875 19.75 14.875Z" fill="#D9D9D9"/>
                            </svg>
                        </div>
                        <div class="questions-accordion-content">
                            <div class="questions-accordion-content-inner color-main">
                                <div class="main-text">
                                    Боль внизу живота может быть симптомом различных состояний, от менструальных болей до воспалительных процессов. Чтобы определить причину, мне нужно провести осмотр и, возможно, назначить дополнительные исследования, такие как УЗИ или анализы. Не стоит терпеть боль, лучше обратиться ко мне для диагностики и лечения.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="questions-accordion-item">
                        <div class="questions-accordion-title accordion-title color-main">
                            <span>Какие методы контрацепции вы рекомендуете?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28">
                                <path class="ring" d="M14.5 26.25C7.745 26.25 2.25 20.755 2.25 14C2.25 7.245 7.745 1.75 14.5 1.75C21.255 1.75 26.75 7.245 26.75 14C26.75 20.755 21.255 26.25 14.5 26.25ZM14.5 3.5C8.7075 3.5 4 8.2075 4 14C4 19.7925 8.7075 24.5 14.5 24.5C20.2925 24.5 25 19.7925 25 14C25 8.2075 20.2925 3.5 14.5 3.5Z" fill="#D9D9D9"/>
                                <path class="plus" d="M14.5 20.125C14.01 20.125 13.625 19.74 13.625 19.25V8.75C13.625 8.26 14.01 7.875 14.5 7.875C14.99 7.875 15.375 8.26 15.375 8.75V19.25C15.375 19.74 14.99 20.125 14.5 20.125Z" fill="#D9D9D9"/>
                                <path class="minus" d="M19.75 14.875H9.25C8.76 14.875 8.375 14.49 8.375 14C8.375 13.51 8.76 13.125 9.25 13.125H19.75C20.24 13.125 20.625 13.51 20.625 14C20.625 14.49 20.24 14.875 19.75 14.875Z" fill="#D9D9D9"/>
                            </svg>
                        </div>
                        <div class="questions-accordion-content">
                            <div class="questions-accordion-content-inner color-main">
                                <div class="main-text">
                                    Боль внизу живота может быть симптомом различных состояний, от менструальных болей до воспалительных процессов. Чтобы определить причину, мне нужно провести осмотр и, возможно, назначить дополнительные исследования, такие как УЗИ или анализы. Не стоит терпеть боль, лучше обратиться ко мне для диагностики и лечения.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="questions-accordion-item">
                        <div class="questions-accordion-title accordion-title color-main">
                            <span>Я планирую беременность. Что мне нужно сделать?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28">
                                <path class="ring" d="M14.5 26.25C7.745 26.25 2.25 20.755 2.25 14C2.25 7.245 7.745 1.75 14.5 1.75C21.255 1.75 26.75 7.245 26.75 14C26.75 20.755 21.255 26.25 14.5 26.25ZM14.5 3.5C8.7075 3.5 4 8.2075 4 14C4 19.7925 8.7075 24.5 14.5 24.5C20.2925 24.5 25 19.7925 25 14C25 8.2075 20.2925 3.5 14.5 3.5Z" fill="#D9D9D9"/>
                                <path class="plus" d="M14.5 20.125C14.01 20.125 13.625 19.74 13.625 19.25V8.75C13.625 8.26 14.01 7.875 14.5 7.875C14.99 7.875 15.375 8.26 15.375 8.75V19.25C15.375 19.74 14.99 20.125 14.5 20.125Z" fill="#D9D9D9"/>
                                <path class="minus" d="M19.75 14.875H9.25C8.76 14.875 8.375 14.49 8.375 14C8.375 13.51 8.76 13.125 9.25 13.125H19.75C20.24 13.125 20.625 13.51 20.625 14C20.625 14.49 20.24 14.875 19.75 14.875Z" fill="#D9D9D9"/>
                            </svg>
                        </div>
                        <div class="questions-accordion-content">
                            <div class="questions-accordion-content-inner color-main">
                                <div class="main-text">
                                    Боль внизу живота может быть симптомом различных состояний, от менструальных болей до воспалительных процессов. Чтобы определить причину, мне нужно провести осмотр и, возможно, назначить дополнительные исследования, такие как УЗИ или анализы. Не стоит терпеть боль, лучше обратиться ко мне для диагностики и лечения.
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        document.querySelectorAll('.questions-accordion-title').forEach((item) => {
                            item.addEventListener('click', () => {
                                const content = item.nextElementSibling;
                                const innerContents = content.querySelectorAll('.questions-accordion-content-inner'); // находим все вложенные элементы
                                const icon = item.querySelector('svg');

                                // Проверяем, если контент открыт
                                if (content.classList.contains('active')) {
                                    content.classList.remove('active');
                                    icon.style.transform = "rotate(0deg)";
                                    item.classList.remove('active');  // Убираем класс active с заголовка

                                    innerContents.forEach(innerContent => {
                                        innerContent.classList.remove('active');  // Убираем класс active с каждого внутреннего контента
                                    });
                                } else {
                                    content.classList.add('active');
                                    icon.style.transform = "rotate(180deg)";
                                    item.classList.add('active');  // Добавляем класс active к заголовку

                                    innerContents.forEach(innerContent => {
                                        innerContent.classList.add('active');  // Добавляем класс active ко всем внутренним элементам
                                    });
                                }
                            });
                        });
                    </script>
                </div>
            </div>
            <div id="Doctors" class="main-content-block-carousel">
                <div class="block-main-carousel-title main-title">
                    <div class="tittle-doctors">Врачи гинекологи</div>
                    <div class="all-block">
                        <a class="all">Все врачи</a>
                        <div class="all-chevron">
                            <img src="img/chevron-right-blue.svg" alt="chevron-right">
                        </div>
                    </div>
                </div>
                <div class="block-main-carousel-doctors owl-carousel">
                    <div class="block-doctor" style="background-image: url('img/doctor-1.png')">
                        <h3 style="position: relative">
                            Мельникова Надежда Андреевна
                            <div class="block-doctor-experience-point">
                                <div style="margin: -4px 0 0px 0;">Стаж 8 лет</div>
                            </div>
                        </h3>
                        <span class="doctor-specialty">Гинеколог</span>
                        <div class="block-doctor-btn btn-main">
                            Записаться на прием
                        </div>
                        <img class="block-doctor-logo" src="img/slide-doctor-logo.png" alt="logo">
                        <div class="block-like favourites-doctor">
                            <svg class="like-wrapper" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 14" fill="none">
                                <path class="contour-like" d="M8 14C7.77219 14 7.55263 13.9188 7.38147 13.7714C6.73509 13.2155 6.11194 12.6932 5.56213 12.2324L5.55931 12.23C3.94737 10.879 2.55541 9.71231 1.58691 8.563C0.504281 7.27821 0 6.05996 0 4.72913C0 3.43613 0.450813 2.24324 1.26928 1.37008C2.09753 0.486587 3.234 0 4.46972 0C5.39331 0 6.23913 0.287182 6.98366 0.853494C7.35938 1.13932 7.69994 1.48917 8 1.89723C8.30016 1.48917 8.64062 1.13932 9.01647 0.853494C9.761 0.287182 10.6068 0 11.5304 0C12.766 0 13.9026 0.486587 14.7308 1.37008C15.5493 2.24324 16 3.43613 16 4.72913C16 6.05993 15.4958 7.27818 14.4132 8.56287C13.4447 9.71231 12.0528 10.8789 10.4412 12.2298C9.89038 12.6913 9.26625 13.2145 8.61841 13.7716C8.4472 13.9189 8.22745 14.0001 8 14ZM4.46972 0.921785C3.49891 0.921785 2.60706 1.30286 1.95825 1.99485C1.29981 2.69731 0.937125 3.66833 0.937125 4.72913C0.937125 5.84841 1.36009 6.84943 2.30847 7.97486C3.22509 9.06268 4.5885 10.2054 6.16713 11.5285L6.17003 11.5309C6.72191 11.9935 7.34753 12.5179 7.99866 13.0778C8.65369 12.5168 9.28028 11.9916 9.83325 11.5283C11.4117 10.2051 12.775 9.06268 13.6917 7.97486C14.6399 6.84943 15.0629 5.84841 15.0629 4.72913C15.0629 3.6683 14.7002 2.69728 14.0417 1.99485C13.3931 1.30286 12.5011 0.921785 11.5304 0.921785C10.8192 0.921785 10.1663 1.14415 9.58972 1.58257C9.07594 1.97349 8.71803 2.46763 8.50816 2.81339C8.40028 2.99119 8.21034 3.09732 8 3.09732C7.78966 3.09732 7.59972 2.99119 7.49181 2.81339C7.28212 2.46763 6.92419 1.97349 6.41025 1.58257C5.83375 1.14415 5.18078 0.921785 4.46972 0.921785Z" fill="#FFFFFF"/>
                                <path class="filling-like" xmlns="http://www.w3.org/2000/svg" d="M14.7307 1.37008C13.9025 0.486587 12.766 0 11.5304 0C10.6068 0 9.761 0.287182 9.01634 0.853494C8.64062 1.13932 8.30016 1.48908 8 1.89723C7.69994 1.48917 7.35938 1.13932 6.98353 0.853494C6.239 0.287182 5.39319 0 4.46959 0C3.234 0 2.09741 0.486587 1.26916 1.37008C0.450812 2.24324 0 3.43613 0 4.72913C0 6.05993 0.504281 7.27818 1.58691 8.563C2.55541 9.71231 3.94737 10.879 5.55931 12.23C6.10975 12.6914 6.73366 13.2143 7.38147 13.7714C7.55264 13.9188 7.77246 14.0001 8 14C8.22766 14 8.44738 13.9188 8.61828 13.7716C9.26609 13.2145 9.89038 12.6913 10.441 12.2296C12.0528 10.8789 13.4447 9.71231 14.4132 8.56287C15.4958 7.27821 16 6.05996 16 4.72901C16 3.43613 15.5492 2.24324 14.7307 1.37008Z" fill="none"/>
                            </svg>
                        </div>
                        <div class="block-repost">
                            <svg class="repost-wrapper" xmlns="http://www.w3.org/2000/svg" width="24" height="26" viewBox="0 0 20 20" fill="none">
                                <path class="contour-repost" d="M17.0276 9.94442L12.7776 5.60942V7.93276L11.9813 8.05554C7.99058 8.63165 5.28687 10.7661 3.74058 14.0339C5.88873 12.485 8.55539 11.7389 11.8517 11.7389H12.7776V14.2794M10.9258 12.7022C6.78687 12.9005 3.82391 14.4211 1.6665 17.5C2.59243 12.7778 5.37021 8.05554 11.8517 7.11109V3.33331L18.3332 9.94442L11.8517 16.5555V12.6833C11.5461 12.6833 11.2406 12.6928 10.9258 12.7022Z" fill="white"/>
                            </svg>
                        </div>
                    </div>
                    <div class="block-doctor" style="background-image: url('img/doctor-2.png')">
                        <h3 style="position: relative">
                            Громов Валерий Леонидович
                            <div class="block-doctor-experience-point">
                                <div style="margin: -4px 0 0px 0;">Стаж 11 лет</div>
                            </div>
                        </h3>
                        <span class="doctor-specialty">Врач ультразвуковой диагностики</span>
                        <div class="block-doctor-btn btn-main">
                            Записаться на прием
                        </div>
                        <img class="block-doctor-logo" src="img/slide-doctor-logo.png" alt="logo">
                        <div class="block-like favourites-doctor">
                            <svg class="like-wrapper" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 14" fill="none">
                                <path class="contour-like" d="M8 14C7.77219 14 7.55263 13.9188 7.38147 13.7714C6.73509 13.2155 6.11194 12.6932 5.56213 12.2324L5.55931 12.23C3.94737 10.879 2.55541 9.71231 1.58691 8.563C0.504281 7.27821 0 6.05996 0 4.72913C0 3.43613 0.450813 2.24324 1.26928 1.37008C2.09753 0.486587 3.234 0 4.46972 0C5.39331 0 6.23913 0.287182 6.98366 0.853494C7.35938 1.13932 7.69994 1.48917 8 1.89723C8.30016 1.48917 8.64062 1.13932 9.01647 0.853494C9.761 0.287182 10.6068 0 11.5304 0C12.766 0 13.9026 0.486587 14.7308 1.37008C15.5493 2.24324 16 3.43613 16 4.72913C16 6.05993 15.4958 7.27818 14.4132 8.56287C13.4447 9.71231 12.0528 10.8789 10.4412 12.2298C9.89038 12.6913 9.26625 13.2145 8.61841 13.7716C8.4472 13.9189 8.22745 14.0001 8 14ZM4.46972 0.921785C3.49891 0.921785 2.60706 1.30286 1.95825 1.99485C1.29981 2.69731 0.937125 3.66833 0.937125 4.72913C0.937125 5.84841 1.36009 6.84943 2.30847 7.97486C3.22509 9.06268 4.5885 10.2054 6.16713 11.5285L6.17003 11.5309C6.72191 11.9935 7.34753 12.5179 7.99866 13.0778C8.65369 12.5168 9.28028 11.9916 9.83325 11.5283C11.4117 10.2051 12.775 9.06268 13.6917 7.97486C14.6399 6.84943 15.0629 5.84841 15.0629 4.72913C15.0629 3.6683 14.7002 2.69728 14.0417 1.99485C13.3931 1.30286 12.5011 0.921785 11.5304 0.921785C10.8192 0.921785 10.1663 1.14415 9.58972 1.58257C9.07594 1.97349 8.71803 2.46763 8.50816 2.81339C8.40028 2.99119 8.21034 3.09732 8 3.09732C7.78966 3.09732 7.59972 2.99119 7.49181 2.81339C7.28212 2.46763 6.92419 1.97349 6.41025 1.58257C5.83375 1.14415 5.18078 0.921785 4.46972 0.921785Z" fill="#FFFFFF"/>
                                <path class="filling-like" xmlns="http://www.w3.org/2000/svg" d="M14.7307 1.37008C13.9025 0.486587 12.766 0 11.5304 0C10.6068 0 9.761 0.287182 9.01634 0.853494C8.64062 1.13932 8.30016 1.48908 8 1.89723C7.69994 1.48917 7.35938 1.13932 6.98353 0.853494C6.239 0.287182 5.39319 0 4.46959 0C3.234 0 2.09741 0.486587 1.26916 1.37008C0.450812 2.24324 0 3.43613 0 4.72913C0 6.05993 0.504281 7.27818 1.58691 8.563C2.55541 9.71231 3.94737 10.879 5.55931 12.23C6.10975 12.6914 6.73366 13.2143 7.38147 13.7714C7.55264 13.9188 7.77246 14.0001 8 14C8.22766 14 8.44738 13.9188 8.61828 13.7716C9.26609 13.2145 9.89038 12.6913 10.441 12.2296C12.0528 10.8789 13.4447 9.71231 14.4132 8.56287C15.4958 7.27821 16 6.05996 16 4.72901C16 3.43613 15.5492 2.24324 14.7307 1.37008Z" fill="none"/>
                            </svg>
                        </div>
                        <div class="block-repost">
                            <svg class="repost-wrapper" xmlns="http://www.w3.org/2000/svg" width="24" height="26" viewBox="0 0 20 20" fill="none">
                                <path class="contour-repost" d="M17.0276 9.94442L12.7776 5.60942V7.93276L11.9813 8.05554C7.99058 8.63165 5.28687 10.7661 3.74058 14.0339C5.88873 12.485 8.55539 11.7389 11.8517 11.7389H12.7776V14.2794M10.9258 12.7022C6.78687 12.9005 3.82391 14.4211 1.6665 17.5C2.59243 12.7778 5.37021 8.05554 11.8517 7.11109V3.33331L18.3332 9.94442L11.8517 16.5555V12.6833C11.5461 12.6833 11.2406 12.6928 10.9258 12.7022Z" fill="white"/>
                            </svg>
                        </div>
                    </div>
                    <div class="block-doctor" style="background-image: url('img/doctor-3.png')">
                        <h3 style="position: relative">
                            Волков Александр Аркадьевич
                            <div class="block-doctor-experience-point">
                                <div style="margin: -4px 0 0px 0;">Стаж 10 лет</div>
                            </div>
                        </h3>
                        <span class="doctor-specialty">Врач ультразвуковой диагностики</span>
                        <div class="block-doctor-btn btn-main">
                            Записаться на прием
                        </div>
                        <img class="block-doctor-logo" src="img/slide-doctor-logo.png" alt="logo">
                        <div class="block-like favourites-doctor">
                            <svg class="like-wrapper" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 14" fill="none">
                                <path class="contour-like" d="M8 14C7.77219 14 7.55263 13.9188 7.38147 13.7714C6.73509 13.2155 6.11194 12.6932 5.56213 12.2324L5.55931 12.23C3.94737 10.879 2.55541 9.71231 1.58691 8.563C0.504281 7.27821 0 6.05996 0 4.72913C0 3.43613 0.450813 2.24324 1.26928 1.37008C2.09753 0.486587 3.234 0 4.46972 0C5.39331 0 6.23913 0.287182 6.98366 0.853494C7.35938 1.13932 7.69994 1.48917 8 1.89723C8.30016 1.48917 8.64062 1.13932 9.01647 0.853494C9.761 0.287182 10.6068 0 11.5304 0C12.766 0 13.9026 0.486587 14.7308 1.37008C15.5493 2.24324 16 3.43613 16 4.72913C16 6.05993 15.4958 7.27818 14.4132 8.56287C13.4447 9.71231 12.0528 10.8789 10.4412 12.2298C9.89038 12.6913 9.26625 13.2145 8.61841 13.7716C8.4472 13.9189 8.22745 14.0001 8 14ZM4.46972 0.921785C3.49891 0.921785 2.60706 1.30286 1.95825 1.99485C1.29981 2.69731 0.937125 3.66833 0.937125 4.72913C0.937125 5.84841 1.36009 6.84943 2.30847 7.97486C3.22509 9.06268 4.5885 10.2054 6.16713 11.5285L6.17003 11.5309C6.72191 11.9935 7.34753 12.5179 7.99866 13.0778C8.65369 12.5168 9.28028 11.9916 9.83325 11.5283C11.4117 10.2051 12.775 9.06268 13.6917 7.97486C14.6399 6.84943 15.0629 5.84841 15.0629 4.72913C15.0629 3.6683 14.7002 2.69728 14.0417 1.99485C13.3931 1.30286 12.5011 0.921785 11.5304 0.921785C10.8192 0.921785 10.1663 1.14415 9.58972 1.58257C9.07594 1.97349 8.71803 2.46763 8.50816 2.81339C8.40028 2.99119 8.21034 3.09732 8 3.09732C7.78966 3.09732 7.59972 2.99119 7.49181 2.81339C7.28212 2.46763 6.92419 1.97349 6.41025 1.58257C5.83375 1.14415 5.18078 0.921785 4.46972 0.921785Z" fill="#FFFFFF"/>
                                <path class="filling-like" xmlns="http://www.w3.org/2000/svg" d="M14.7307 1.37008C13.9025 0.486587 12.766 0 11.5304 0C10.6068 0 9.761 0.287182 9.01634 0.853494C8.64062 1.13932 8.30016 1.48908 8 1.89723C7.69994 1.48917 7.35938 1.13932 6.98353 0.853494C6.239 0.287182 5.39319 0 4.46959 0C3.234 0 2.09741 0.486587 1.26916 1.37008C0.450812 2.24324 0 3.43613 0 4.72913C0 6.05993 0.504281 7.27818 1.58691 8.563C2.55541 9.71231 3.94737 10.879 5.55931 12.23C6.10975 12.6914 6.73366 13.2143 7.38147 13.7714C7.55264 13.9188 7.77246 14.0001 8 14C8.22766 14 8.44738 13.9188 8.61828 13.7716C9.26609 13.2145 9.89038 12.6913 10.441 12.2296C12.0528 10.8789 13.4447 9.71231 14.4132 8.56287C15.4958 7.27821 16 6.05996 16 4.72901C16 3.43613 15.5492 2.24324 14.7307 1.37008Z" fill="none"/>
                            </svg>
                        </div>
                        <div class="block-repost">
                            <svg class="repost-wrapper" xmlns="http://www.w3.org/2000/svg" width="24" height="26" viewBox="0 0 20 20" fill="none">
                                <path class="contour-repost" d="M17.0276 9.94442L12.7776 5.60942V7.93276L11.9813 8.05554C7.99058 8.63165 5.28687 10.7661 3.74058 14.0339C5.88873 12.485 8.55539 11.7389 11.8517 11.7389H12.7776V14.2794M10.9258 12.7022C6.78687 12.9005 3.82391 14.4211 1.6665 17.5C2.59243 12.7778 5.37021 8.05554 11.8517 7.11109V3.33331L18.3332 9.94442L11.8517 16.5555V12.6833C11.5461 12.6833 11.2406 12.6928 10.9258 12.7022Z" fill="white"/>
                            </svg>
                        </div>
                    </div>
                    <div class="block-doctor" style="background-image: url('img/doctor-4.png')">
                        <h3 style="position: relative">
                            Волков Александр Аркадьевич
                            <div class="block-doctor-experience-point">
                                <div style="margin: -4px 0 0px 0;">Стаж 5 лет</div>
                            </div>
                        </h3>
                        <span class="doctor-specialty">Окулист(офтальмолог)</span>
                        <div class="block-doctor-btn btn-main">
                            Записаться на прием
                        </div>
                        <img class="block-doctor-logo" src="img/slide-doctor-logo.png" alt="logo">
                        <div class="block-like favourites-doctor">
                            <svg class="like-wrapper" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 14" fill="none">
                                <path class="contour-like" d="M8 14C7.77219 14 7.55263 13.9188 7.38147 13.7714C6.73509 13.2155 6.11194 12.6932 5.56213 12.2324L5.55931 12.23C3.94737 10.879 2.55541 9.71231 1.58691 8.563C0.504281 7.27821 0 6.05996 0 4.72913C0 3.43613 0.450813 2.24324 1.26928 1.37008C2.09753 0.486587 3.234 0 4.46972 0C5.39331 0 6.23913 0.287182 6.98366 0.853494C7.35938 1.13932 7.69994 1.48917 8 1.89723C8.30016 1.48917 8.64062 1.13932 9.01647 0.853494C9.761 0.287182 10.6068 0 11.5304 0C12.766 0 13.9026 0.486587 14.7308 1.37008C15.5493 2.24324 16 3.43613 16 4.72913C16 6.05993 15.4958 7.27818 14.4132 8.56287C13.4447 9.71231 12.0528 10.8789 10.4412 12.2298C9.89038 12.6913 9.26625 13.2145 8.61841 13.7716C8.4472 13.9189 8.22745 14.0001 8 14ZM4.46972 0.921785C3.49891 0.921785 2.60706 1.30286 1.95825 1.99485C1.29981 2.69731 0.937125 3.66833 0.937125 4.72913C0.937125 5.84841 1.36009 6.84943 2.30847 7.97486C3.22509 9.06268 4.5885 10.2054 6.16713 11.5285L6.17003 11.5309C6.72191 11.9935 7.34753 12.5179 7.99866 13.0778C8.65369 12.5168 9.28028 11.9916 9.83325 11.5283C11.4117 10.2051 12.775 9.06268 13.6917 7.97486C14.6399 6.84943 15.0629 5.84841 15.0629 4.72913C15.0629 3.6683 14.7002 2.69728 14.0417 1.99485C13.3931 1.30286 12.5011 0.921785 11.5304 0.921785C10.8192 0.921785 10.1663 1.14415 9.58972 1.58257C9.07594 1.97349 8.71803 2.46763 8.50816 2.81339C8.40028 2.99119 8.21034 3.09732 8 3.09732C7.78966 3.09732 7.59972 2.99119 7.49181 2.81339C7.28212 2.46763 6.92419 1.97349 6.41025 1.58257C5.83375 1.14415 5.18078 0.921785 4.46972 0.921785Z" fill="#FFFFFF"/>
                                <path class="filling-like" xmlns="http://www.w3.org/2000/svg" d="M14.7307 1.37008C13.9025 0.486587 12.766 0 11.5304 0C10.6068 0 9.761 0.287182 9.01634 0.853494C8.64062 1.13932 8.30016 1.48908 8 1.89723C7.69994 1.48917 7.35938 1.13932 6.98353 0.853494C6.239 0.287182 5.39319 0 4.46959 0C3.234 0 2.09741 0.486587 1.26916 1.37008C0.450812 2.24324 0 3.43613 0 4.72913C0 6.05993 0.504281 7.27818 1.58691 8.563C2.55541 9.71231 3.94737 10.879 5.55931 12.23C6.10975 12.6914 6.73366 13.2143 7.38147 13.7714C7.55264 13.9188 7.77246 14.0001 8 14C8.22766 14 8.44738 13.9188 8.61828 13.7716C9.26609 13.2145 9.89038 12.6913 10.441 12.2296C12.0528 10.8789 13.4447 9.71231 14.4132 8.56287C15.4958 7.27821 16 6.05996 16 4.72901C16 3.43613 15.5492 2.24324 14.7307 1.37008Z" fill="none"/>
                            </svg>
                        </div>
                        <div class="block-repost">
                            <svg class="repost-wrapper" xmlns="http://www.w3.org/2000/svg" width="24" height="26" viewBox="0 0 20 20" fill="none">
                                <path class="contour-repost" d="M17.0276 9.94442L12.7776 5.60942V7.93276L11.9813 8.05554C7.99058 8.63165 5.28687 10.7661 3.74058 14.0339C5.88873 12.485 8.55539 11.7389 11.8517 11.7389H12.7776V14.2794M10.9258 12.7022C6.78687 12.9005 3.82391 14.4211 1.6665 17.5C2.59243 12.7778 5.37021 8.05554 11.8517 7.11109V3.33331L18.3332 9.94442L11.8517 16.5555V12.6833C11.5461 12.6833 11.2406 12.6928 10.9258 12.7022Z" fill="white"/>
                            </svg>
                        </div>
                    </div>
                    <div class="block-doctor" style="background-image: url('img/doctor-4.png')">
                        <h3 style="position: relative">
                            Волков Александр Аркадьевич
                            <div class="block-doctor-experience-point">
                                <div style="margin: -4px 0 0px 0;">Стаж 15 лет</div>
                            </div>
                        </h3>
                        <span class="doctor-specialty">Окулист(офтальмолог)</span>
                        <div class="block-doctor-btn btn-main">
                            Записаться на прием
                        </div>
                        <img class="block-doctor-logo" src="img/slide-doctor-logo.png" alt="logo">
                        <div class="block-like favourites-doctor">
                            <svg class="like-wrapper" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 14" fill="none">
                                <path class="contour-like" d="M8 14C7.77219 14 7.55263 13.9188 7.38147 13.7714C6.73509 13.2155 6.11194 12.6932 5.56213 12.2324L5.55931 12.23C3.94737 10.879 2.55541 9.71231 1.58691 8.563C0.504281 7.27821 0 6.05996 0 4.72913C0 3.43613 0.450813 2.24324 1.26928 1.37008C2.09753 0.486587 3.234 0 4.46972 0C5.39331 0 6.23913 0.287182 6.98366 0.853494C7.35938 1.13932 7.69994 1.48917 8 1.89723C8.30016 1.48917 8.64062 1.13932 9.01647 0.853494C9.761 0.287182 10.6068 0 11.5304 0C12.766 0 13.9026 0.486587 14.7308 1.37008C15.5493 2.24324 16 3.43613 16 4.72913C16 6.05993 15.4958 7.27818 14.4132 8.56287C13.4447 9.71231 12.0528 10.8789 10.4412 12.2298C9.89038 12.6913 9.26625 13.2145 8.61841 13.7716C8.4472 13.9189 8.22745 14.0001 8 14ZM4.46972 0.921785C3.49891 0.921785 2.60706 1.30286 1.95825 1.99485C1.29981 2.69731 0.937125 3.66833 0.937125 4.72913C0.937125 5.84841 1.36009 6.84943 2.30847 7.97486C3.22509 9.06268 4.5885 10.2054 6.16713 11.5285L6.17003 11.5309C6.72191 11.9935 7.34753 12.5179 7.99866 13.0778C8.65369 12.5168 9.28028 11.9916 9.83325 11.5283C11.4117 10.2051 12.775 9.06268 13.6917 7.97486C14.6399 6.84943 15.0629 5.84841 15.0629 4.72913C15.0629 3.6683 14.7002 2.69728 14.0417 1.99485C13.3931 1.30286 12.5011 0.921785 11.5304 0.921785C10.8192 0.921785 10.1663 1.14415 9.58972 1.58257C9.07594 1.97349 8.71803 2.46763 8.50816 2.81339C8.40028 2.99119 8.21034 3.09732 8 3.09732C7.78966 3.09732 7.59972 2.99119 7.49181 2.81339C7.28212 2.46763 6.92419 1.97349 6.41025 1.58257C5.83375 1.14415 5.18078 0.921785 4.46972 0.921785Z" fill="#FFFFFF"/>
                                <path class="filling-like" xmlns="http://www.w3.org/2000/svg" d="M14.7307 1.37008C13.9025 0.486587 12.766 0 11.5304 0C10.6068 0 9.761 0.287182 9.01634 0.853494C8.64062 1.13932 8.30016 1.48908 8 1.89723C7.69994 1.48917 7.35938 1.13932 6.98353 0.853494C6.239 0.287182 5.39319 0 4.46959 0C3.234 0 2.09741 0.486587 1.26916 1.37008C0.450812 2.24324 0 3.43613 0 4.72913C0 6.05993 0.504281 7.27818 1.58691 8.563C2.55541 9.71231 3.94737 10.879 5.55931 12.23C6.10975 12.6914 6.73366 13.2143 7.38147 13.7714C7.55264 13.9188 7.77246 14.0001 8 14C8.22766 14 8.44738 13.9188 8.61828 13.7716C9.26609 13.2145 9.89038 12.6913 10.441 12.2296C12.0528 10.8789 13.4447 9.71231 14.4132 8.56287C15.4958 7.27821 16 6.05996 16 4.72901C16 3.43613 15.5492 2.24324 14.7307 1.37008Z" fill="none"/>
                            </svg>
                        </div>
                        <div class="block-repost">
                            <svg class="repost-wrapper" xmlns="http://www.w3.org/2000/svg" width="24" height="26" viewBox="0 0 20 20" fill="none">
                                <path class="contour-repost" d="M17.0276 9.94442L12.7776 5.60942V7.93276L11.9813 8.05554C7.99058 8.63165 5.28687 10.7661 3.74058 14.0339C5.88873 12.485 8.55539 11.7389 11.8517 11.7389H12.7776V14.2794M10.9258 12.7022C6.78687 12.9005 3.82391 14.4211 1.6665 17.5C2.59243 12.7778 5.37021 8.05554 11.8517 7.11109V3.33331L18.3332 9.94442L11.8517 16.5555V12.6833C11.5461 12.6833 11.2406 12.6928 10.9258 12.7022Z" fill="white"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <script>
                    $(window).on('load', function () {
                        $('.block-main-carousel-doctors.owl-carousel').owlCarousel({
                            margin: 20,
                            nav: true,
                            dots: false,
                            loop: true,
                            responsive: {
                                0: {
                                    items: 4.1
                                }
                            }
                        });
                    })
                </script>
            </div>
            <?require $_SERVER['DOCUMENT_ROOT'] . '/site/templates/main-content-block-ad-sale.php';?>
            <div class="main-content-doctor-slider-articles-doctor">
                <?require $_SERVER['DOCUMENT_ROOT'] . '/site/templates/main-content-slider-articles.php';?>
            </div>

        </div>
        <div class="main-sidebar-container sidebar-container">
            <div class="side-block-menu">
                <div class="side-block-menu-line">
                    <a href="#About-us">О нас</a>
                </div>
                <div class="side-block-menu-line">
                    <a href="#Services-and-prices">Услуги</a>
                </div>
                <div class="side-block-menu-line">
                    <a href="#Reviews">Отзывы</a>
                </div>
                <div class="side-block-menu-line">
                    <a href="#Doctor-experience">Опыт работы</a>
                </div>
                <div class="side-block-menu-line">
                    <a href="#Documents">Документы</a>
                </div>
                <div class="side-block-menu-line">
                    <a href="#Doctor-experience">Образование</a>
                </div>
                <div class="side-block-menu-line">
                    <a href="#Video">Видео</a>
                </div>
                <div class="side-block-menu-line">
                    <a href="#FAQ">Часто задаваемые вопросы</a>
                </div>
                <div class="side-block-menu-line">
                    <a href="#Doctors">Врачи</a>
                </div>
                <div class="side-block-menu-line">
                    <a href="#Articles">Статьи</a>
                </div>

                <script>
                    $(document).ready(function(){
                        // Переменная для включения/выключения всего скрипта
                        var isScriptActive = true; // Установи в false, если хочешь отключить скрипт

                        // Переменная для включения/выключения учёта фиксированного хедера
                        var isFixedHeaderActive = false; // Установи в false, если не хочешь учитывать фиксированный хедер

                        // Высота фиксированного хедера (если включено)
                        var headerHeight = 300;

                        // Буферный диапазон (в пикселях) для улучшенной точности
                        var buffer = 5; // Дополнительный буфер (пиксели), чтобы учесть погрешности

                        // Функция для обновления активного пункта меню
                        function updateActiveMenuItem() {
                            if (!isScriptActive) return; // Если скрипт выключен, ничего не делаем

                            var scrollPosition = $(window).scrollTop(); // Позиция прокрутки страницы

                            // Проходим по всем пунктам меню
                            $('.side-block-menu a').each(function() {
                                var target = $(this).attr('href'); // Получаем id элемента
                                var targetOffset = $(target).offset().top; // Позиция элемента на странице
                                var targetHeight = $(target).outerHeight(); // Высота элемента

                                // Если учёт хедера активен, учитываем его высоту
                                if (isFixedHeaderActive) {
                                    // Увеличиваем диапазон проверки с учетом буфера
                                    if (scrollPosition + headerHeight - buffer >= targetOffset && scrollPosition + headerHeight - buffer < targetOffset + targetHeight) {
                                        $('.side-block-menu-line').removeClass('active');
                                        $(this).closest('.side-block-menu-line').addClass('active');
                                    }
                                } else {
                                    // Без учета хедера
                                    if (scrollPosition >= targetOffset - buffer && scrollPosition < targetOffset + targetHeight + buffer) {
                                        $('.side-block-menu-line').removeClass('active');
                                        $(this).closest('.side-block-menu-line').addClass('active');
                                    }
                                }
                            });
                        }

                        // Вызываем функцию при прокрутке страницы
                        $(window).on('scroll', function() {
                            updateActiveMenuItem();
                        });

                        // При клике на ссылку плавный скролл
                        $('.side-block-menu a').on('click', function(event) {
                            event.preventDefault();

                            var target = $(this).attr('href'); // Получаем id элемента

                            // Плавно прокручиваем страницу к нужному элементу с учетом хедера
                            $('html, body').animate({
                                scrollTop: $(target).offset().top - (isFixedHeaderActive ? headerHeight : 0)
                            }, 50); // 1000 - время анимации
                        });
                    });

                </script>
            </div>
            <?require $_SERVER['DOCUMENT_ROOT'] . '/site/templates/side-block-doctor.php';?>
            <?require $_SERVER['DOCUMENT_ROOT'] . '/site/templates/side-block-banner.php';?>
            <?require $_SERVER['DOCUMENT_ROOT'] . '/site/templates/side-block-banner-sail.php';?>
            <?require $_SERVER['DOCUMENT_ROOT'] . '/site/templates/side-block-news.php';?>
            <?require $_SERVER['DOCUMENT_ROOT'] . '/site/templates/side-block-score.php';?>
        </div>
    </div>
    <?require $_SERVER['DOCUMENT_ROOT'] . '/site/templates/main-content-bottom-subscribe.php';?>
</div>

<div class="modal-container-bckg" id="modal-container-bckg-first">
    <div class="modal-invocation-container">
        <div class="modal-invocation-title m-m-bot">
            Вызов врача на дом «Мосмедпроф»
        </div>
        <div class="modal-invocation-block">
            <div class="modal-invocation-left">
                <div class="modal-invocation-left-title">
                    Заполните данные
                </div>
                <div class="modal-invocation-left-input-block">
                    <div class="modal-invocation-left-input-name">
                        <label for="invocation-left-label">Ваше ФИО</label>
                        <input class="invocation-left-input" rows="1" placeholder="Мельникова Надежда Андреевна">
                    </div>
                    <div class="modal-invocation-left-input-data">
                        <label for="invocation-left-label">Дата рождения</label>
                        <input class="invocation-data invocation-left-input" rows="1" placeholder="22.12.24">
                    </div>
                    <div class="modal-invocation-left-input-phone">
                        <label for="invocation-left-label">Номер телефона</label>
                        <input class="invocation-phone invocation-left-input" rows="1" placeholder="+7 (499) 460-01-13">
                    </div>
                    <script>
                        $(document).ready(function (){
                            $('.invocation-data').mask('99.99.99');
                            $('.invocation-phone').mask('+7 (999) 999-99-99');
                        })
                    </script>
                </div>
                <div class="modal-invocation-left-checkbox-block">
                    <div class="invocation-left-checkbox">
                        <div class="invocation-checkbox">
                            <input type="checkbox">
                            <svg class="invocation-check" xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 10 7" fill="none">
                                <path d="M1.09082 3.68155L3.81809 6.22701L9.27264 0.772461" stroke="#3A8DFF" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="invocation-checkbox-text color-main">
                            Я соглашаюсь получать <span>письма с рекламными<br> акциями и новостями</span>
                        </div>
                    </div>
                    <div class="invocation-left-checkbox">
                        <div class="invocation-checkbox">
                            <input type="checkbox">
                            <svg class="invocation-check" xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 10 7" fill="none">
                                <path d="M1.09082 3.68155L3.81809 6.22701L9.27264 0.772461" stroke="#3A8DFF" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="invocation-checkbox-text color-main">
                            Я принимаю условия <span>пользовательского <br>
                                соглашения</span> и даю <span>согласие на обработку<br>
                                персональных данных</span>
                        </div>
                    </div>
                </div>
                <div class="modal-invocation-left-btn">
                    <div class="invocation-left-btn btn-main">Вызвать врача</div>
                </div>
            </div>
            <div class="modal-invocation-middle">
                <div class="modal-invocation-middle-header">
                    <div class="invocation-middle-header-photo">
                        <img src="img/doctor-modal-1.png">
                    </div>
                    <div class="invocation-middle-header-info">
                        <div class="invo-middle-header-name">
                            Мельникова Надежда Андреевна
                        </div>
                        <div class="invo-middle-header-spec">
                            Гинеколог
                        </div>
                        <div class="invo-middle-header-price color-main">
                            <span>Стоимость приема:</span>  На дому
                        </div>
                        <div class="invo-middle-header-btn-block">
                            <div class="invo-btn">
                                Взрослые
                            </div>
                            <div class="invo-btn">
                                Дети
                            </div>
                            <div class="invo-btn-price">
                                2000 <span> ₽</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-invocation-middle-choose">
                    <span>Выбрать врача</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="6" viewBox="0 0 12 6" fill="none">
                        <path d="M10.4 0L11.5 1L6 6L0.5 1L1.6 0L6 4L10.4 0Z" fill="#A4A4A4"></path>
                    </svg>
                </div>
                <div class="modal-invocation-middle-sliders">
                    <div class="modal-invocation-middle-title">
                        Дата и время приема
                    </div>
                    <div class="modal-invocation-middle-data owl-carousel">
                        <div class="modal-invocation-middle-data-item">
                            15 дек
                            <span>Сегодня</span>
                        </div>
                        <div class="modal-invocation-middle-data-item">
                            16 дек
                            <span>Завтра</span>
                        </div>
                        <div class="modal-invocation-middle-data-item">
                            17 дек
                            <span>Вт</span>
                        </div>
                        <div class="modal-invocation-middle-data-item">
                            18 дек
                            <span>Ср</span>
                        </div>
                        <div class="modal-invocation-middle-data-item">
                            19 дек
                            <span>Чт</span>
                        </div>
                        <div class="modal-invocation-middle-data-item">
                            20 дек
                            <span>Пт</span>
                        </div>
                        <div class="modal-invocation-middle-data-item">
                            21 дек
                            <span>Сб</span>
                        </div>
                        <div class="modal-invocation-middle-data-item">
                            22 дек
                            <span>Вс</span>
                        </div>
                    </div>
                    <script>
                        $(window).on('load', function () {
                            $('.modal-invocation-middle-data.owl-carousel').owlCarousel({
                                margin: 6,
                                nav: true,
                                dots: false,
                                loop: true,
                                responsive: {
                                    0: {
                                        items: 6.3
                                    }
                                }
                            });
                        })
                    </script>
                    <div class="modal-invocation-middle-time owl-carousel">
                        <div class="modal-invocation-middle-time-item color-main">
                            8:00
                        </div>
                        <div class="modal-invocation-middle-time-item color-main">
                            8:30
                        </div>
                        <div class="modal-invocation-middle-time-item color-main">
                            9:00
                        </div>
                        <div class="modal-invocation-middle-time-item color-main">
                            9:30
                        </div>
                        <div class="modal-invocation-middle-time-item color-main">
                            10:00
                        </div>
                        <div class="modal-invocation-middle-time-item color-main">
                            10:30
                        </div>
                        <div class="modal-invocation-middle-time-item color-main">
                            11:00
                        </div>
                        <div class="modal-invocation-middle-time-item color-main">
                            11:30
                        </div>
                        <div class="modal-invocation-middle-time-item color-main">
                            12:00
                        </div>
                        <div class="modal-invocation-middle-time-item color-main">
                            12:30
                        </div>
                    </div>
                    <script>
                        $(window).on('load', function () {
                            $('.modal-invocation-middle-time.owl-carousel').owlCarousel({
                                margin: 6,
                                nav: true,
                                dots: false,
                                loop: true,
                                responsive: {
                                    0: {
                                        items: 8.5
                                    }
                                }
                            });
                        })
                    </script>
                </div>
            </div>
            <div class="modal-invocation-right">
                <div class="modal-invocation-right-title">
                    Укажите ваш адрес:
                </div>
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aaddaeb70788a9d4f455471bafd16f842a8012fe0d9f7612bdb1a8bd50a650f33&amp;width=403&amp;height=405&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
        <svg class="modal-close-second" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
            <path d="M5.51397 5.51332C5.70931 5.31804 5.97422 5.20834 6.25043 5.20834C6.52664 5.20834 6.79155 5.31804 6.98689 5.51332L12.5004 11.0269L18.014 5.51332C18.1101 5.41383 18.225 5.33447 18.3521 5.27988C18.4792 5.22529 18.6159 5.19655 18.7542 5.19535C18.8925 5.19415 19.0297 5.22051 19.1577 5.27288C19.2857 5.32526 19.402 5.4026 19.4998 5.50041C19.5976 5.59821 19.675 5.71452 19.7273 5.84254C19.7797 5.97055 19.8061 6.10772 19.8049 6.24603C19.8037 6.38434 19.7749 6.52103 19.7203 6.64812C19.6657 6.7752 19.5864 6.89015 19.4869 6.98624L13.9733 12.4998L19.4869 18.0133C19.6766 18.2098 19.7816 18.4729 19.7793 18.746C19.7769 19.0192 19.6673 19.2804 19.4742 19.4735C19.2811 19.6667 19.0198 19.7762 18.7467 19.7786C18.4736 19.781 18.2104 19.676 18.014 19.4862L12.5004 13.9727L6.98689 19.4862C6.79043 19.676 6.5273 19.781 6.25418 19.7786C5.98106 19.7762 5.71979 19.6667 5.52666 19.4735C5.33353 19.2804 5.22397 19.0192 5.2216 18.746C5.21923 18.4729 5.32422 18.2098 5.51397 18.0133L11.0275 12.4998L5.51397 6.98624C5.31869 6.7909 5.20898 6.52599 5.20898 6.24978C5.20898 5.97357 5.31869 5.70866 5.51397 5.51332Z" fill="#D3D3D3"/>
        </svg>
    </div>
</div>
<div class="modal-container-bckg" id="modal-container-bckg-second">
    <div class="modal-invocation-container">
        <div class="modal-invocation-title m-m-bot">
            Запись на прием в медицинский центр «Мосмедпроф»
        </div>
        <div class="modal-invocation-block">
            <div class="modal-invocation-left">
                <div class="modal-invocation-left-title">
                    Заполните данные
                </div>
                <div class="modal-invocation-left-input-block">
                    <div class="modal-invocation-left-input-name">
                        <label for="invocation-left-label">Ваше ФИО</label>
                        <input class="invocation-left-input" rows="1" placeholder="Мельникова Надежда Андреевна">
                    </div>
                    <div class="modal-invocation-left-input-data">
                        <label for="invocation-left-label">Дата рождения</label>
                        <input class="invocation-data invocation-left-input" rows="1" placeholder="22.12.24">
                    </div>
                    <div class="modal-invocation-left-input-phone">
                        <label for="invocation-left-label">Номер телефона</label>
                        <input class="invocation-phone invocation-left-input" rows="1" placeholder="+7 (499) 460-01-13">
                    </div>
                    <script>
                        $(document).ready(function (){
                            $('.invocation-data').mask('99.99.99');
                            $('.invocation-phone').mask('+7 (999) 999-99-99');
                        })
                    </script>
                </div>
                <div class="modal-invocation-left-checkbox-block">
                    <div class="invocation-left-checkbox">
                        <div class="invocation-checkbox">
                            <input type="checkbox">
                            <svg class="invocation-check" xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 10 7" fill="none">
                                <path d="M1.09082 3.68155L3.81809 6.22701L9.27264 0.772461" stroke="#3A8DFF" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="invocation-checkbox-text color-main">
                            Я соглашаюсь получать <span>письма с рекламными<br> акциями и новостями</span>
                        </div>
                    </div>
                    <div class="invocation-left-checkbox">
                        <div class="invocation-checkbox">
                            <input type="checkbox">
                            <svg class="invocation-check" xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 10 7" fill="none">
                                <path d="M1.09082 3.68155L3.81809 6.22701L9.27264 0.772461" stroke="#3A8DFF" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="invocation-checkbox-text color-main">
                            Я принимаю условия <span>пользовательского <br>
                                соглашения</span> и даю <span>согласие на обработку<br>
                                персональных данных</span>
                        </div>
                    </div>
                </div>
                <div class="modal-invocation-left-btn">
                    <div class="invocation-left-btn-red btn-main">Записаться на прием</div>
                </div>
            </div>
            <div class="modal-invocation-middle">
                <div class="modal-invocation-middle-header">
                    <div class="invocation-middle-header-photo">
                        <img src="img/doctor-modal-1.png">
                    </div>
                    <div class="invocation-middle-header-info">
                        <div class="invo-middle-header-name">
                            Мельникова Надежда Андреевна
                        </div>
                        <div class="invo-middle-header-spec">
                            Гинеколог
                        </div>
                        <div class="invo-middle-header-price color-main">
                            <span style="color: #E73821">Стоимость приема:</span>  На дому
                        </div>
                        <div class="invo-middle-header-btn-block">
                            <div class="second-modal invo-btn">
                                Взрослые
                            </div>
                            <div class="second-modal invo-btn">
                                Дети
                            </div>
                            <div class="invo-btn-price" style="color: #E73821">
                                2000 <span> ₽</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-invocation-middle-choose">
                    <span style="color: #E73821">Выбрать врача</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="6" viewBox="0 0 12 6" fill="none">
                        <path d="M10.4 0L11.5 1L6 6L0.5 1L1.6 0L6 4L10.4 0Z" fill="#E73821"></path>
                    </svg>
                </div>
                <div class="modal-invocation-middle-sliders">
                    <div class="modal-invocation-middle-title">
                        Дата и время приема
                    </div>
                    <div class="modal-invocation-middle-data owl-carousel">
                        <div class="modal-invocation-middle-data-item">
                            15 дек
                            <span>Сегодня</span>
                        </div>
                        <div class="modal-invocation-middle-data-item">
                            16 дек
                            <span>Завтра</span>
                        </div>
                        <div class="modal-invocation-middle-data-item">
                            17 дек
                            <span>Вт</span>
                        </div>
                        <div class="modal-invocation-middle-data-item">
                            18 дек
                            <span>Ср</span>
                        </div>
                        <div class="modal-invocation-middle-data-item">
                            19 дек
                            <span>Чт</span>
                        </div>
                        <div class="modal-invocation-middle-data-item">
                            20 дек
                            <span>Пт</span>
                        </div>
                        <div class="modal-invocation-middle-data-item">
                            21 дек
                            <span>Сб</span>
                        </div>
                        <div class="modal-invocation-middle-data-item">
                            22 дек
                            <span>Вс</span>
                        </div>
                    </div>
                    <script>
                        $(window).on('load', function () {
                            $('.modal-invocation-middle-data.owl-carousel').owlCarousel({
                                margin: 6,
                                nav: true,
                                dots: false,
                                loop: true,
                                responsive: {
                                    0: {
                                        items: 6.3
                                    }
                                }
                            });
                        })
                    </script>
                    <div class="modal-invocation-middle-time owl-carousel">
                        <div class="modal-invocation-middle-time-item color-main">
                            8:00
                        </div>
                        <div class="modal-invocation-middle-time-item color-main">
                            8:30
                        </div>
                        <div class="modal-invocation-middle-time-item color-main">
                            9:00
                        </div>
                        <div class="modal-invocation-middle-time-item color-main">
                            9:30
                        </div>
                        <div class="modal-invocation-middle-time-item color-main">
                            10:00
                        </div>
                        <div class="modal-invocation-middle-time-item color-main">
                            10:30
                        </div>
                        <div class="modal-invocation-middle-time-item color-main">
                            11:00
                        </div>
                        <div class="modal-invocation-middle-time-item color-main">
                            11:30
                        </div>
                        <div class="modal-invocation-middle-time-item color-main">
                            12:00
                        </div>
                        <div class="modal-invocation-middle-time-item color-main">
                            12:30
                        </div>
                    </div>
                    <script>
                        $(window).on('load', function () {
                            $('.modal-invocation-middle-time.owl-carousel').owlCarousel({
                                margin: 6,
                                nav: true,
                                dots: false,
                                loop: true,
                                responsive: {
                                    0: {
                                        items: 8.5
                                    }
                                }
                            });
                        })
                    </script>
                </div>
            </div>
            <div class="modal-invocation-right">
                <div class="modal-invocation-right-title">
                    Прием по адресу:
                </div>
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aaddaeb70788a9d4f455471bafd16f842a8012fe0d9f7612bdb1a8bd50a650f33&amp;width=403&amp;height=405&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
        <svg class="modal-close-second" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
            <path d="M5.51397 5.51332C5.70931 5.31804 5.97422 5.20834 6.25043 5.20834C6.52664 5.20834 6.79155 5.31804 6.98689 5.51332L12.5004 11.0269L18.014 5.51332C18.1101 5.41383 18.225 5.33447 18.3521 5.27988C18.4792 5.22529 18.6159 5.19655 18.7542 5.19535C18.8925 5.19415 19.0297 5.22051 19.1577 5.27288C19.2857 5.32526 19.402 5.4026 19.4998 5.50041C19.5976 5.59821 19.675 5.71452 19.7273 5.84254C19.7797 5.97055 19.8061 6.10772 19.8049 6.24603C19.8037 6.38434 19.7749 6.52103 19.7203 6.64812C19.6657 6.7752 19.5864 6.89015 19.4869 6.98624L13.9733 12.4998L19.4869 18.0133C19.6766 18.2098 19.7816 18.4729 19.7793 18.746C19.7769 19.0192 19.6673 19.2804 19.4742 19.4735C19.2811 19.6667 19.0198 19.7762 18.7467 19.7786C18.4736 19.781 18.2104 19.676 18.014 19.4862L12.5004 13.9727L6.98689 19.4862C6.79043 19.676 6.5273 19.781 6.25418 19.7786C5.98106 19.7762 5.71979 19.6667 5.52666 19.4735C5.33353 19.2804 5.22397 19.0192 5.2216 18.746C5.21923 18.4729 5.32422 18.2098 5.51397 18.0133L11.0275 12.4998L5.51397 6.98624C5.31869 6.7909 5.20898 6.52599 5.20898 6.24978C5.20898 5.97357 5.31869 5.70866 5.51397 5.51332Z" fill="#D3D3D3"/>
        </svg>
    </div>
</div>
<script>
    $(document).ready(function() {
        // Используем делегирование событий, чтобы поймать клик по repost-wrapper
        $(document).on('click', '.doctor-card-btn-l', function() {
            // При клике на repost-wrapper добавляем класс open к modal-container-bckg
            $('#modal-container-bckg-second').addClass('open');
        });

        // Когда клик по фону модального окна (modal-container-bckg)
        $(document).on('click', '#modal-container-bckg-second', function(e) {
            // Проверяем, был ли клик по фону (не по modal-repost-container)
            if ($(e.target).is('#modal-container-bckg-second')) {
                $('#modal-container-bckg-second').removeClass('open');
            }
        });

        // Когда клик по кнопке закрытия modal-close
        $(document).on('click', '.modal-close-second', function() {
            $('#modal-container-bckg-second').removeClass('open');
        });
    });
</script>
<script>
    $(document).ready(function() {
        // Используем делегирование событий, чтобы поймать клик по repost-wrapper
        $(document).on('click', '.doctor-card-btn-r', function() {
            // При клике на repost-wrapper добавляем класс open к modal-container-bckg
            $('#modal-container-bckg-first').addClass('open');
        });

        // Когда клик по фону модального окна (modal-container-bckg)
        $(document).on('click', '#modal-container-bckg-first', function(e) {
            // Проверяем, был ли клик по фону (не по modal-repost-container)
            if ($(e.target).is('#modal-container-bckg-first')) {
                $('#modal-container-bckg-first').removeClass('open');
            }
        });

        // Когда клик по кнопке закрытия modal-close
        $(document).on('click', '.modal-close-second', function() {
            $('#modal-container-bckg-first').removeClass('open');
        });
    });
</script>
<div class="modal-container-bckg" id="modal-container-bckg">
    <div class="modal-repost-container">
        <div class="modal-repost-block">
            <div class="social">
                Поделиться
            </div>
            <div class="share">
                <img src="img/footer-share-vk.svg" alt="">
                <img src="img/footer-share-youtube.svg" alt="">
                <img src="img/footer-share-tiktok.svg" alt="">
                <img src="img/footer-share-telegram.svg" alt="">
                <img src="img/footer-share-whatsapp.svg" alt="">
            </div>
            <div class="repost-link main-text">
                Ссылка
            </div>
            <div class="repost-copy">
                <input type="text" value="https://www.example-medical-site.com" readonly class="copy-input">
                <div class="copy-btn btn-main">
                    Скопировать
                </div>
            </div>
            <div class="modal-close">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                    <path d="M5.07246 5.07246C5.25217 4.8928 5.49588 4.79187 5.75 4.79187C6.00411 4.79187 6.24783 4.8928 6.42754 5.07246L11.5 10.1449L16.5725 5.07246C16.6609 4.98093 16.7666 4.90792 16.8835 4.8577C17.0004 4.80747 17.1262 4.78103 17.2534 4.77993C17.3807 4.77882 17.5069 4.80307 17.6247 4.85126C17.7424 4.89944 17.8494 4.9706 17.9394 5.06058C18.0294 5.15056 18.1006 5.25756 18.1487 5.37534C18.1969 5.49311 18.2212 5.61931 18.2201 5.74655C18.219 5.8738 18.1925 5.99955 18.1423 6.11647C18.0921 6.23339 18.0191 6.33914 17.9275 6.42754L12.8551 11.5L17.9275 16.5725C18.1021 16.7532 18.1987 16.9953 18.1965 17.2466C18.1943 17.4978 18.0935 17.7382 17.9159 17.9159C17.7382 18.0936 17.4978 18.1943 17.2465 18.1965C16.9953 18.1987 16.7532 18.1021 16.5725 17.9275L11.5 12.8551L6.42754 17.9275C6.2468 18.1021 6.00472 18.1987 5.75345 18.1965C5.50218 18.1943 5.26181 18.0936 5.08413 17.9159C4.90645 17.7382 4.80566 17.4978 4.80348 17.2466C4.80129 16.9953 4.89789 16.7532 5.07246 16.5725L10.1449 11.5L5.07246 6.42754C4.8928 6.24783 4.79187 6.00412 4.79187 5.75C4.79187 5.49589 4.8928 5.25217 5.07246 5.07246Z" fill="#D3D3D3"/>
                </svg>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        // Используем делегирование событий, чтобы поймать клик по repost-wrapper
        $(document).on('click', '.repost-wrapper', function() {
            // При клике на repost-wrapper добавляем класс open к modal-container-bckg
            $('#modal-container-bckg').addClass('open');
        });

        // Когда клик по фону модального окна (modal-container-bckg)
        $(document).on('click', '#modal-container-bckg', function(e) {
            // Проверяем, был ли клик по фону (не по modal-repost-container)
            if ($(e.target).is('#modal-container-bckg')) {
                $('#modal-container-bckg').removeClass('open');
            }
        });

        // Когда клик по кнопке закрытия modal-close
        $(document).on('click', '.modal-close', function() {
            $('#modal-container-bckg').removeClass('open');
        });
    });
</script>
<?require_once 'tpl/footer.php'?>
</body>

</html>