<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Статьи</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/tpl_style.css">
    <link rel="stylesheet" href="css/custom_classes.css">
    <script src="lib/jquery/jquery.js"></script>
    <link href="lib/bootstrap/style.css" rel="stylesheet">
    <script src="lib/bootstrap/script.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="js/scripts.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Literata:ital,opsz,wght@0,7..72,200;0,7..72,300;0,7..72,400;0,7..72,500;0,7..72,600;0,7..72,700;0,7..72,800;0,7..72,900;1,7..72,200;1,7..72,300;1,7..72,400;1,7..72,500;1,7..72,600;1,7..72,700;1,7..72,800;1,7..72,900&family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
<!-- Ну тут типо header должен быть, но давайте без меня -->
<div style="height: 100px;"><h1 class="text-center">ХЕДЕР</h1></div>
<!-- Ну тут типо header должен быть, но давайте без меня -->
<div class="main-container">
    <?require $_SERVER['DOCUMENT_ROOT'] . '/site/templates/main-container-head.php';?>
    <div class="main-container-middle">
        <div class="main-content-middle main-content main-all-width">
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
                    <a class="breadcrumbs-subtitle">Статьи</a>
                </div>
            </div>
            <!-- ХЛЕБНЫЕ КРОШКИ -->
            <div class="main-content-articles">
                <div class="content-articles-title main-title">
                    <div>Статьи</div>
                </div>
                <div class="content-articles-btn-menu">
                    <div id="btn-1" class="articles-btn active">
                        Все
                    </div>
                    <div id="btn-2" class="articles-btn mx-wdt-1">
                        Педиатрия
                    </div>
                    <div id="btn-3" class="articles-btn mx-wdt-2">
                        Терапия
                    </div>
                    <div id="btn-4" class="articles-btn mx-wdt-3">
                        Хирургия
                    </div>
                    <div class="articles-dropdown">
                        <div class="articles-dropdown-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="6" viewBox="0 0 12 6" fill="none">
                                <path d="M10.4 0L11.5 1L6 6L0.5 1L1.6 0L6 4L10.4 0Z" fill="#A4A4A4"/>
                            </svg>
                            <span>посмотреть ещё</span>
                        </div>
                        <div class="articles-dropdown-menu">
                            <a href="#">посмотреть ещё</a>
                            <a href="#">Все</a>
                            <a href="#">Педиатрия</a>
                            <a href="#">Терапия</a>
                            <a href="#">Хирургия</a>
                        </div>
                        <script>
                            // Находим все ссылки внутри меню
                            const menuLinks = document.querySelectorAll('.articles-dropdown-menu a');
                            // Находим кнопку, на которой отображается текущий текст
                            const dropdownBtn = document.querySelector('.articles-dropdown-btn span');

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
                <div id="content-1" class="content-item active">
                    <div class="content-articles-grid">
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-1.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Новые технологии <br> в медицине
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-2.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Как выбрать лучшего врача
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-3.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Здоровый сон: секреты крепкого сна
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-1.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Новые технологии <br> в медицине
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-2.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Как выбрать лучшего врача
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-3.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Здоровый сон: секреты крепкого сна
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-1.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Новые технологии <br> в медицине
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-2.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Как выбрать лучшего врача
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-3.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Здоровый сон: секреты крепкого сна
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-1.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Новые технологии <br> в медицине
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-2.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Как выбрать лучшего врача
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-3.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Здоровый сон: секреты крепкого сна
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-1.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Новые технологии <br> в медицине
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-2.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Как выбрать лучшего врача
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-3.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Здоровый сон: секреты крепкого сна
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                    </div>
                </div>
                <div id="content-2" class="content-item">
                    <div class="content-articles-grid">
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-1.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Новые технологии <br> в медицине
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-2.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Как выбрать лучшего врача
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-3.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Здоровый сон: секреты крепкого сна
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-1.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Новые технологии <br> в медицине
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-2.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Как выбрать лучшего врача
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-3.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Здоровый сон: секреты крепкого сна
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-1.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Новые технологии <br> в медицине
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-2.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Как выбрать лучшего врача
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-3.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Здоровый сон: секреты крепкого сна
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-1.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Новые технологии <br> в медицине
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                    </div>
                </div>
                <div id="content-3" class="content-item">
                    <div class="content-articles-grid">
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-1.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Новые технологии <br> в медицине
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-2.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Как выбрать лучшего врача
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-3.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Здоровый сон: секреты крепкого сна
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-1.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Новые технологии <br> в медицине
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-2.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Как выбрать лучшего врача
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                    </div>
                </div>
                <div id="content-4" class="content-item">
                    <div class="content-articles-grid">
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-1.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Новые технологии <br> в медицине
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-2.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Как выбрать лучшего врача
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-3.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Здоровый сон: секреты крепкого сна
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-1.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Новые технологии <br> в медицине
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-2.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Как выбрать лучшего врача
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-3.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Здоровый сон: секреты крепкого сна
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-1.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Новые технологии <br> в медицине
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-2.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Как выбрать лучшего врача
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-3.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Здоровый сон: секреты крепкого сна
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-1.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Новые технологии <br> в медицине
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-2.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Как выбрать лучшего врача
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-3.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Здоровый сон: секреты крепкого сна
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-1.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Новые технологии <br> в медицине
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-2.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Как выбрать лучшего врача
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-3.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Здоровый сон: секреты крепкого сна
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-2.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Как выбрать лучшего врача
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-3.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Здоровый сон: секреты крепкого сна
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-1.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Новые технологии <br> в медицине
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-2.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Как выбрать лучшего врача
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                        <div class="slider-articles-item mx-whdt-grid">
                            <img src="img/slider-articles-3.png">
                            <div class="slider-articles-item-container">
                                <div class="slider-articles-item-title color-main">
                                    Здоровый сон: секреты крепкого сна
                                </div>
                                <div class="slider-articles-item-data main-text">
                                    12 марта 2024
                                </div>
                            </div>
                            <div class="slider-articles-item-btn btn-main">
                                Подробнее
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-articles-load-more">
                    <div class="load-more-container">
                        <div class="load-more-svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                <path class="load-more-stroke" d="M3.72324 11.9167C3.68579 11.6164 3.6665 11.3105 3.6665 11C3.6665 6.94993 6.94975 3.66669 10.9998 3.66669C13.2921 3.66669 15.3386 4.71835 16.6834 6.3655M16.6834 6.3655V3.66669M16.6834 6.3655V6.41662L13.9334 6.41669M18.2764 10.0834C18.3139 10.3837 18.3332 10.6895 18.3332 11C18.3332 15.0501 15.0499 18.3334 10.9998 18.3334C8.80956 18.3334 6.84357 17.3731 5.49984 15.8507M5.49984 15.8507V15.5834H8.24984M5.49984 15.8507V18.3334" stroke="#A0A0A0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span>
                            Загрузить еще
                        </span>
                    </div>
                </div>
                <div class="content-articles-pagination">
                    <div class="articles-pagination">
                        <a class="pg-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="45" viewBox="0 0 29 45" fill="none">
                                <path d="M18.5 16.5L17.1667 15L10.5 22.5L13.8333 26.25L17.1667 30L18.5 28.5L13.1667 22.5L18.5 16.5Z" fill="#A4A4A4"/>
                            </svg>
                        </a>
                        <a class="pg-number">
                            1
                        </a>
                        <a class="pg-number">
                            2
                        </a>
                        <a class="pg-number">
                            3
                        </a>
                        <a class="pg-number active">
                            4
                        </a>
                        <a class="pg-number">
                            5
                        </a>
                        <span class="pg-dots">
                            ...
                        </span>
                        <a class="pg-number">
                            40
                        </a>
                        <a class="pg-next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="49" viewBox="0 0 29 49" fill="none">
                                <path d="M10.5 18.5L11.8333 17L18.5 24.5L15.1667 28.25L11.8333 32L10.5 30.5L15.8333 24.5L10.5 18.5Z" fill="#A4A4A4"/>
                            </svg>
                        </a>
                    </div>
                    <script>
                        $(document).ready(function() {
                            // Обработчик клика по кнопке .pg-number
                            $('.pg-number').click(function() {
                                // Убираем класс active с всех элементов
                                $('.pg-number').removeClass('active');

                                // Добавляем класс active на элемент, по которому кликнули
                                $(this).addClass('active');
                            });

                            // Обработчик клика по кнопке .pg-prev (предыдущая страница)
                            $('.pg-prev').click(function() {
                                // Находим текущую активную страницу
                                var currentPage = $('.pg-number.active');

                                // Если текущая страница не первая, перемещаем актив на предыдущую
                                if (currentPage.prev('.pg-number').length) {
                                    currentPage.removeClass('active');
                                    currentPage.prev('.pg-number').addClass('active');
                                }
                            });

                            // Обработчик клика по кнопке .pg-next (следующая страница)
                            $('.pg-next').click(function() {
                                // Находим текущую активную страницу
                                var currentPage = $('.pg-number.active');

                                // Если текущая страница не последняя, перемещаем актив на следующую
                                if (currentPage.next('.pg-number').length) {
                                    currentPage.removeClass('active');
                                    currentPage.next('.pg-number').addClass('active');
                                }
                            });
                        });
                    </script>
                </div>
                <script>
                    $(document).ready(function() {
                        $(".articles-btn").click(function() {
                            // Убираем класс active у всех кнопок и контента
                            $(".articles-btn").removeClass("active");
                            $(".content-item").removeClass("active");

                            // Добавляем класс active к нажатой кнопке
                            $(this).addClass("active");

                            // Находим соответствующий контент, заменяя только префикс btn-
                            var contentId = $(this).attr("id").replace("btn-", "content-");
                            console.log(contentId); // Проверка, что contentId правильный
                            $("#" + contentId).addClass("active");
                        });
                    });
                </script>
            </div>
        </div>
    </div>
    <?require $_SERVER['DOCUMENT_ROOT'] . '/site/templates/main-content-bottom-subscribe.php';?>
</div>

<?require_once 'tpl/footer.php'?>
</body>
</html>