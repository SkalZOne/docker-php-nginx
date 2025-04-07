<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Все видео</title>
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
                    <a class="breadcrumbs-subtitle">Видео</a>
                </div>
            </div>
            <!-- ХЛЕБНЫЕ КРОШКИ -->
            <div class="main-content-video">
                <div class="main-content-btn-menu">
                    <div id="btn-1" class="video-btn active">
                        Главная
                    </div>
                    <div id="btn-2" class="video-btn">
                        Все видео
                    </div>
                    <div id="btn-3" class="video-btn">
                        Плейлисты
                    </div>
                    <div class="video-search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18" viewBox="0 0 17 18" fill="none">
                            <path d="M14.875 15.375L11.7987 12.2987M11.7987 12.2987C12.3249 11.7725 12.7423 11.1478 13.0271 10.4603C13.3119 9.77276 13.4585 9.03587 13.4585 8.29169C13.4585 7.54751 13.3119 6.81062 13.0271 6.1231C12.7423 5.43557 12.3249 4.81086 11.7987 4.28465C11.2725 3.75844 10.6478 3.34102 9.96026 3.05624C9.27273 2.77145 8.53584 2.62488 7.79166 2.62488C7.04748 2.62488 6.31059 2.77145 5.62306 3.05624C4.93554 3.34102 4.31083 3.75844 3.78462 4.28465C2.72188 5.34738 2.12485 6.78876 2.12485 8.29169C2.12485 9.79462 2.72188 11.236 3.78462 12.2987C4.84735 13.3615 6.28873 13.9585 7.79166 13.9585C9.29459 13.9585 10.736 13.3615 11.7987 12.2987Z" stroke="#A4A4A4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <div class="main-content-video-title main-title">
                    Видео
                </div>
                <div id="content-1" class="content-item active">
                    <div class="main-content-all-video-grid">
                        <div class="video-item-container fix-h">
                            <div class="video-item-img">
                                <img src="img/video-item-2.png">
                                <div class="video-duration">
                                    <span>3:00</span>
                                </div>
                                <div class="video-start-stop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                        <circle cx="27.5" cy="27.5" r="26.5" stroke="#FDFDFD" stroke-width="2"/>
                                        <path d="M19.6468 15.9945C19.5063 15.9113 19.3463 15.8667 19.1831 15.8652C19.0198 15.8638 18.8591 15.9056 18.7172 15.9864C18.5753 16.0672 18.4574 16.1841 18.3753 16.3253C18.2933 16.4664 18.25 16.6268 18.25 16.79V38.21C18.25 38.3732 18.2933 38.5336 18.3753 38.6747C18.4574 38.8159 18.5753 38.9328 18.7172 39.0136C18.8591 39.0944 19.0198 39.1362 19.1831 39.1348C19.3463 39.1333 19.5063 39.0887 19.6468 39.0055L37.7197 28.2955C37.8577 28.2136 37.9721 28.0972 38.0515 27.9577C38.1309 27.8182 38.1727 27.6605 38.1727 27.5C38.1727 27.3395 38.1309 27.1818 38.0515 27.0423C37.9721 26.9028 37.8577 26.7864 37.7197 26.7045L19.6468 15.9945Z" fill="#FDFDFD" stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="video-item-footer fix-sb">
                                <div class="video-item-info">
                                    <div class="video-item-name fix-mb">
                                        Профилактика гриппа
                                    </div>
                                    <div class="video-item-views-data">
                                        2,9 млн просмотров <span>|</span> 6 месяцев назад
                                    </div>
                                </div>
                                <div class="video-item-dots">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="12" viewBox="0 0 3 12" fill="none">
                                        <path d="M3 1.5C3 2.32843 2.32843 3 1.5 3C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0C2.32843 0 3 0.671573 3 1.5Z" fill="black"/>
                                        <path d="M3 6C3 6.82843 2.32843 7.5 1.5 7.5C0.671573 7.5 0 6.82843 0 6C0 5.17157 0.671573 4.5 1.5 4.5C2.32843 4.5 3 5.17157 3 6Z" fill="black"/>
                                        <path d="M3 10.5C3 11.3284 2.32843 12 1.5 12C0.671573 12 0 11.3284 0 10.5C0 9.67157 0.671573 9 1.5 9C2.32843 9 3 9.67157 3 10.5Z" fill="black"/>
                                    </svg>
                                    <div class="dots-dropdown-menu">
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M10.3125 2.75V14.1371L6.68181 10.505L5.6925 11.495L10.505 16.3075L10.9993 16.7798L11.4936 16.3075L16.3061 11.495L15.3175 10.5064L11.6875 14.1364V2.75H10.3125ZM4.8125 17.875V19.25H17.1875V17.875H4.8125Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Скачать
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M14.3333 8.2C7.41867 7.542 2.97422 10.342 1 16.6C4.76667 12.204 9.45467 11.3948 14.3333 13.8V18L21 11L14.3333 4V8.2Z" stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span>
                                            Поделиться
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 22C4.93209 22 0 17.0679 0 11C0 4.93209 4.93209 0 11 0C17.0679 0 22 4.93209 22 11C22 17.0679 17.0679 22 11 22ZM11 1.53488C5.7814 1.53488 1.53488 5.7814 1.53488 11C1.53488 16.2186 5.7814 20.4651 11 20.4651C16.2186 20.4651 20.4651 16.2186 20.4651 11C20.4651 5.7814 16.2186 1.53488 11 1.53488Z" fill="black"/>
                                                <path d="M10.9999 12.7907C10.5804 12.7907 10.2325 12.4428 10.2325 12.0232V6.90697C10.2325 6.48743 10.5804 6.13953 10.9999 6.13953C11.4195 6.13953 11.7674 6.48743 11.7674 6.90697V12.0232C11.7674 12.4428 11.4195 12.7907 10.9999 12.7907ZM10.9999 16.1163C10.8669 16.1163 10.7339 16.0856 10.6111 16.0344C10.4883 15.9832 10.3758 15.9116 10.2734 15.8195C10.1813 15.7172 10.1097 15.6149 10.0585 15.4818C10.0074 15.3591 9.97668 15.226 9.97668 15.093C9.97668 14.96 10.0074 14.827 10.0585 14.7042C10.1097 14.5814 10.1813 14.4688 10.2734 14.3665C10.3758 14.2744 10.4883 14.2028 10.6111 14.1516C10.8602 14.0493 11.1397 14.0493 11.3888 14.1516C11.5116 14.2028 11.6241 14.2744 11.7265 14.3665C11.8185 14.4688 11.8902 14.5814 11.9413 14.7042C11.9925 14.827 12.0232 14.96 12.0232 15.093C12.0232 15.226 11.9925 15.3591 11.9413 15.4818C11.8902 15.6149 11.8185 15.7172 11.7265 15.8195C11.6241 15.9116 11.5116 15.9832 11.3888 16.0344C11.266 16.0856 11.133 16.1163 10.9999 16.1163Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Пожаловаться
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video-item-container fix-h">
                            <div class="video-item-img">
                                <img src="img/video-item-2.png">
                                <div class="video-duration">
                                    <span>3:00</span>
                                </div>
                                <div class="video-start-stop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                        <circle cx="27.5" cy="27.5" r="26.5" stroke="#FDFDFD" stroke-width="2"/>
                                        <path d="M19.6468 15.9945C19.5063 15.9113 19.3463 15.8667 19.1831 15.8652C19.0198 15.8638 18.8591 15.9056 18.7172 15.9864C18.5753 16.0672 18.4574 16.1841 18.3753 16.3253C18.2933 16.4664 18.25 16.6268 18.25 16.79V38.21C18.25 38.3732 18.2933 38.5336 18.3753 38.6747C18.4574 38.8159 18.5753 38.9328 18.7172 39.0136C18.8591 39.0944 19.0198 39.1362 19.1831 39.1348C19.3463 39.1333 19.5063 39.0887 19.6468 39.0055L37.7197 28.2955C37.8577 28.2136 37.9721 28.0972 38.0515 27.9577C38.1309 27.8182 38.1727 27.6605 38.1727 27.5C38.1727 27.3395 38.1309 27.1818 38.0515 27.0423C37.9721 26.9028 37.8577 26.7864 37.7197 26.7045L19.6468 15.9945Z" fill="#FDFDFD" stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="video-item-footer fix-sb">
                                <div class="video-item-info">
                                    <div class="video-item-name fix-mb">
                                        Профилактика гриппа
                                    </div>
                                    <div class="video-item-views-data">
                                        2,9 млн просмотров <span>|</span> 6 месяцев назад
                                    </div>
                                </div>
                                <div class="video-item-dots">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="12" viewBox="0 0 3 12" fill="none">
                                        <path d="M3 1.5C3 2.32843 2.32843 3 1.5 3C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0C2.32843 0 3 0.671573 3 1.5Z" fill="black"/>
                                        <path d="M3 6C3 6.82843 2.32843 7.5 1.5 7.5C0.671573 7.5 0 6.82843 0 6C0 5.17157 0.671573 4.5 1.5 4.5C2.32843 4.5 3 5.17157 3 6Z" fill="black"/>
                                        <path d="M3 10.5C3 11.3284 2.32843 12 1.5 12C0.671573 12 0 11.3284 0 10.5C0 9.67157 0.671573 9 1.5 9C2.32843 9 3 9.67157 3 10.5Z" fill="black"/>
                                    </svg>
                                    <div class="dots-dropdown-menu">
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M10.3125 2.75V14.1371L6.68181 10.505L5.6925 11.495L10.505 16.3075L10.9993 16.7798L11.4936 16.3075L16.3061 11.495L15.3175 10.5064L11.6875 14.1364V2.75H10.3125ZM4.8125 17.875V19.25H17.1875V17.875H4.8125Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Скачать
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M14.3333 8.2C7.41867 7.542 2.97422 10.342 1 16.6C4.76667 12.204 9.45467 11.3948 14.3333 13.8V18L21 11L14.3333 4V8.2Z" stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span>
                                            Поделиться
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 22C4.93209 22 0 17.0679 0 11C0 4.93209 4.93209 0 11 0C17.0679 0 22 4.93209 22 11C22 17.0679 17.0679 22 11 22ZM11 1.53488C5.7814 1.53488 1.53488 5.7814 1.53488 11C1.53488 16.2186 5.7814 20.4651 11 20.4651C16.2186 20.4651 20.4651 16.2186 20.4651 11C20.4651 5.7814 16.2186 1.53488 11 1.53488Z" fill="black"/>
                                                <path d="M10.9999 12.7907C10.5804 12.7907 10.2325 12.4428 10.2325 12.0232V6.90697C10.2325 6.48743 10.5804 6.13953 10.9999 6.13953C11.4195 6.13953 11.7674 6.48743 11.7674 6.90697V12.0232C11.7674 12.4428 11.4195 12.7907 10.9999 12.7907ZM10.9999 16.1163C10.8669 16.1163 10.7339 16.0856 10.6111 16.0344C10.4883 15.9832 10.3758 15.9116 10.2734 15.8195C10.1813 15.7172 10.1097 15.6149 10.0585 15.4818C10.0074 15.3591 9.97668 15.226 9.97668 15.093C9.97668 14.96 10.0074 14.827 10.0585 14.7042C10.1097 14.5814 10.1813 14.4688 10.2734 14.3665C10.3758 14.2744 10.4883 14.2028 10.6111 14.1516C10.8602 14.0493 11.1397 14.0493 11.3888 14.1516C11.5116 14.2028 11.6241 14.2744 11.7265 14.3665C11.8185 14.4688 11.8902 14.5814 11.9413 14.7042C11.9925 14.827 12.0232 14.96 12.0232 15.093C12.0232 15.226 11.9925 15.3591 11.9413 15.4818C11.8902 15.6149 11.8185 15.7172 11.7265 15.8195C11.6241 15.9116 11.5116 15.9832 11.3888 16.0344C11.266 16.0856 11.133 16.1163 10.9999 16.1163Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Пожаловаться
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video-item-container fix-h">
                            <div class="video-item-img">
                                <img src="img/video-item-1.png">
                                <div class="video-duration">
                                    <span>3:00</span>
                                </div>
                                <div class="video-start-stop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                        <circle cx="27.5" cy="27.5" r="26.5" stroke="#FDFDFD" stroke-width="2"/>
                                        <path d="M19.6468 15.9945C19.5063 15.9113 19.3463 15.8667 19.1831 15.8652C19.0198 15.8638 18.8591 15.9056 18.7172 15.9864C18.5753 16.0672 18.4574 16.1841 18.3753 16.3253C18.2933 16.4664 18.25 16.6268 18.25 16.79V38.21C18.25 38.3732 18.2933 38.5336 18.3753 38.6747C18.4574 38.8159 18.5753 38.9328 18.7172 39.0136C18.8591 39.0944 19.0198 39.1362 19.1831 39.1348C19.3463 39.1333 19.5063 39.0887 19.6468 39.0055L37.7197 28.2955C37.8577 28.2136 37.9721 28.0972 38.0515 27.9577C38.1309 27.8182 38.1727 27.6605 38.1727 27.5C38.1727 27.3395 38.1309 27.1818 38.0515 27.0423C37.9721 26.9028 37.8577 26.7864 37.7197 26.7045L19.6468 15.9945Z" fill="#FDFDFD" stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="video-item-footer fix-sb">
                                <div class="video-item-info">
                                    <div class="video-item-name fix-mb">
                                        День из жизни "Мосмедпроф": как мы работаем
                                    </div>
                                    <div class="video-item-views-data">
                                        2,9 млн просмотров <span>|</span> 6 месяцев назад
                                    </div>
                                </div>
                                <div class="video-item-dots">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="12" viewBox="0 0 3 12" fill="none">
                                        <path d="M3 1.5C3 2.32843 2.32843 3 1.5 3C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0C2.32843 0 3 0.671573 3 1.5Z" fill="black"/>
                                        <path d="M3 6C3 6.82843 2.32843 7.5 1.5 7.5C0.671573 7.5 0 6.82843 0 6C0 5.17157 0.671573 4.5 1.5 4.5C2.32843 4.5 3 5.17157 3 6Z" fill="black"/>
                                        <path d="M3 10.5C3 11.3284 2.32843 12 1.5 12C0.671573 12 0 11.3284 0 10.5C0 9.67157 0.671573 9 1.5 9C2.32843 9 3 9.67157 3 10.5Z" fill="black"/>
                                    </svg>
                                    <div class="dots-dropdown-menu">
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M10.3125 2.75V14.1371L6.68181 10.505L5.6925 11.495L10.505 16.3075L10.9993 16.7798L11.4936 16.3075L16.3061 11.495L15.3175 10.5064L11.6875 14.1364V2.75H10.3125ZM4.8125 17.875V19.25H17.1875V17.875H4.8125Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Скачать
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M14.3333 8.2C7.41867 7.542 2.97422 10.342 1 16.6C4.76667 12.204 9.45467 11.3948 14.3333 13.8V18L21 11L14.3333 4V8.2Z" stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span>
                                            Поделиться
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 22C4.93209 22 0 17.0679 0 11C0 4.93209 4.93209 0 11 0C17.0679 0 22 4.93209 22 11C22 17.0679 17.0679 22 11 22ZM11 1.53488C5.7814 1.53488 1.53488 5.7814 1.53488 11C1.53488 16.2186 5.7814 20.4651 11 20.4651C16.2186 20.4651 20.4651 16.2186 20.4651 11C20.4651 5.7814 16.2186 1.53488 11 1.53488Z" fill="black"/>
                                                <path d="M10.9999 12.7907C10.5804 12.7907 10.2325 12.4428 10.2325 12.0232V6.90697C10.2325 6.48743 10.5804 6.13953 10.9999 6.13953C11.4195 6.13953 11.7674 6.48743 11.7674 6.90697V12.0232C11.7674 12.4428 11.4195 12.7907 10.9999 12.7907ZM10.9999 16.1163C10.8669 16.1163 10.7339 16.0856 10.6111 16.0344C10.4883 15.9832 10.3758 15.9116 10.2734 15.8195C10.1813 15.7172 10.1097 15.6149 10.0585 15.4818C10.0074 15.3591 9.97668 15.226 9.97668 15.093C9.97668 14.96 10.0074 14.827 10.0585 14.7042C10.1097 14.5814 10.1813 14.4688 10.2734 14.3665C10.3758 14.2744 10.4883 14.2028 10.6111 14.1516C10.8602 14.0493 11.1397 14.0493 11.3888 14.1516C11.5116 14.2028 11.6241 14.2744 11.7265 14.3665C11.8185 14.4688 11.8902 14.5814 11.9413 14.7042C11.9925 14.827 12.0232 14.96 12.0232 15.093C12.0232 15.226 11.9925 15.3591 11.9413 15.4818C11.8902 15.6149 11.8185 15.7172 11.7265 15.8195C11.6241 15.9116 11.5116 15.9832 11.3888 16.0344C11.266 16.0856 11.133 16.1163 10.9999 16.1163Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Пожаловаться
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video-item-container fix-h">
                            <div class="video-item-img">
                                <img src="img/video-item-2.png">
                                <div class="video-duration">
                                    <span>3:00</span>
                                </div>
                                <div class="video-start-stop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                        <circle cx="27.5" cy="27.5" r="26.5" stroke="#FDFDFD" stroke-width="2"/>
                                        <path d="M19.6468 15.9945C19.5063 15.9113 19.3463 15.8667 19.1831 15.8652C19.0198 15.8638 18.8591 15.9056 18.7172 15.9864C18.5753 16.0672 18.4574 16.1841 18.3753 16.3253C18.2933 16.4664 18.25 16.6268 18.25 16.79V38.21C18.25 38.3732 18.2933 38.5336 18.3753 38.6747C18.4574 38.8159 18.5753 38.9328 18.7172 39.0136C18.8591 39.0944 19.0198 39.1362 19.1831 39.1348C19.3463 39.1333 19.5063 39.0887 19.6468 39.0055L37.7197 28.2955C37.8577 28.2136 37.9721 28.0972 38.0515 27.9577C38.1309 27.8182 38.1727 27.6605 38.1727 27.5C38.1727 27.3395 38.1309 27.1818 38.0515 27.0423C37.9721 26.9028 37.8577 26.7864 37.7197 26.7045L19.6468 15.9945Z" fill="#FDFDFD" stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="video-item-footer fix-sb">
                                <div class="video-item-info">
                                    <div class="video-item-name fix-mb">
                                        Профилактика гриппа
                                    </div>
                                    <div class="video-item-views-data">
                                        2,9 млн просмотров <span>|</span> 6 месяцев назад
                                    </div>
                                </div>
                                <div class="video-item-dots">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="12" viewBox="0 0 3 12" fill="none">
                                        <path d="M3 1.5C3 2.32843 2.32843 3 1.5 3C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0C2.32843 0 3 0.671573 3 1.5Z" fill="black"/>
                                        <path d="M3 6C3 6.82843 2.32843 7.5 1.5 7.5C0.671573 7.5 0 6.82843 0 6C0 5.17157 0.671573 4.5 1.5 4.5C2.32843 4.5 3 5.17157 3 6Z" fill="black"/>
                                        <path d="M3 10.5C3 11.3284 2.32843 12 1.5 12C0.671573 12 0 11.3284 0 10.5C0 9.67157 0.671573 9 1.5 9C2.32843 9 3 9.67157 3 10.5Z" fill="black"/>
                                    </svg>
                                    <div class="dots-dropdown-menu">
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M10.3125 2.75V14.1371L6.68181 10.505L5.6925 11.495L10.505 16.3075L10.9993 16.7798L11.4936 16.3075L16.3061 11.495L15.3175 10.5064L11.6875 14.1364V2.75H10.3125ZM4.8125 17.875V19.25H17.1875V17.875H4.8125Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Скачать
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M14.3333 8.2C7.41867 7.542 2.97422 10.342 1 16.6C4.76667 12.204 9.45467 11.3948 14.3333 13.8V18L21 11L14.3333 4V8.2Z" stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span>
                                            Поделиться
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 22C4.93209 22 0 17.0679 0 11C0 4.93209 4.93209 0 11 0C17.0679 0 22 4.93209 22 11C22 17.0679 17.0679 22 11 22ZM11 1.53488C5.7814 1.53488 1.53488 5.7814 1.53488 11C1.53488 16.2186 5.7814 20.4651 11 20.4651C16.2186 20.4651 20.4651 16.2186 20.4651 11C20.4651 5.7814 16.2186 1.53488 11 1.53488Z" fill="black"/>
                                                <path d="M10.9999 12.7907C10.5804 12.7907 10.2325 12.4428 10.2325 12.0232V6.90697C10.2325 6.48743 10.5804 6.13953 10.9999 6.13953C11.4195 6.13953 11.7674 6.48743 11.7674 6.90697V12.0232C11.7674 12.4428 11.4195 12.7907 10.9999 12.7907ZM10.9999 16.1163C10.8669 16.1163 10.7339 16.0856 10.6111 16.0344C10.4883 15.9832 10.3758 15.9116 10.2734 15.8195C10.1813 15.7172 10.1097 15.6149 10.0585 15.4818C10.0074 15.3591 9.97668 15.226 9.97668 15.093C9.97668 14.96 10.0074 14.827 10.0585 14.7042C10.1097 14.5814 10.1813 14.4688 10.2734 14.3665C10.3758 14.2744 10.4883 14.2028 10.6111 14.1516C10.8602 14.0493 11.1397 14.0493 11.3888 14.1516C11.5116 14.2028 11.6241 14.2744 11.7265 14.3665C11.8185 14.4688 11.8902 14.5814 11.9413 14.7042C11.9925 14.827 12.0232 14.96 12.0232 15.093C12.0232 15.226 11.9925 15.3591 11.9413 15.4818C11.8902 15.6149 11.8185 15.7172 11.7265 15.8195C11.6241 15.9116 11.5116 15.9832 11.3888 16.0344C11.266 16.0856 11.133 16.1163 10.9999 16.1163Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Пожаловаться
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video-item-container fix-h">
                            <div class="video-item-img">
                                <img src="img/video-item-1.png">
                                <div class="video-duration">
                                    <span>3:00</span>
                                </div>
                                <div class="video-start-stop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                        <circle cx="27.5" cy="27.5" r="26.5" stroke="#FDFDFD" stroke-width="2"/>
                                        <path d="M19.6468 15.9945C19.5063 15.9113 19.3463 15.8667 19.1831 15.8652C19.0198 15.8638 18.8591 15.9056 18.7172 15.9864C18.5753 16.0672 18.4574 16.1841 18.3753 16.3253C18.2933 16.4664 18.25 16.6268 18.25 16.79V38.21C18.25 38.3732 18.2933 38.5336 18.3753 38.6747C18.4574 38.8159 18.5753 38.9328 18.7172 39.0136C18.8591 39.0944 19.0198 39.1362 19.1831 39.1348C19.3463 39.1333 19.5063 39.0887 19.6468 39.0055L37.7197 28.2955C37.8577 28.2136 37.9721 28.0972 38.0515 27.9577C38.1309 27.8182 38.1727 27.6605 38.1727 27.5C38.1727 27.3395 38.1309 27.1818 38.0515 27.0423C37.9721 26.9028 37.8577 26.7864 37.7197 26.7045L19.6468 15.9945Z" fill="#FDFDFD" stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="video-item-footer fix-sb">
                                <div class="video-item-info">
                                    <div class="video-item-name fix-mb">
                                        День из жизни "Мосмедпроф": как мы работаем
                                    </div>
                                    <div class="video-item-views-data">
                                        2,9 млн просмотров <span>|</span> 6 месяцев назад
                                    </div>
                                </div>
                                <div class="video-item-dots">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="12" viewBox="0 0 3 12" fill="none">
                                        <path d="M3 1.5C3 2.32843 2.32843 3 1.5 3C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0C2.32843 0 3 0.671573 3 1.5Z" fill="black"/>
                                        <path d="M3 6C3 6.82843 2.32843 7.5 1.5 7.5C0.671573 7.5 0 6.82843 0 6C0 5.17157 0.671573 4.5 1.5 4.5C2.32843 4.5 3 5.17157 3 6Z" fill="black"/>
                                        <path d="M3 10.5C3 11.3284 2.32843 12 1.5 12C0.671573 12 0 11.3284 0 10.5C0 9.67157 0.671573 9 1.5 9C2.32843 9 3 9.67157 3 10.5Z" fill="black"/>
                                    </svg>
                                    <div class="dots-dropdown-menu">
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M10.3125 2.75V14.1371L6.68181 10.505L5.6925 11.495L10.505 16.3075L10.9993 16.7798L11.4936 16.3075L16.3061 11.495L15.3175 10.5064L11.6875 14.1364V2.75H10.3125ZM4.8125 17.875V19.25H17.1875V17.875H4.8125Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Скачать
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M14.3333 8.2C7.41867 7.542 2.97422 10.342 1 16.6C4.76667 12.204 9.45467 11.3948 14.3333 13.8V18L21 11L14.3333 4V8.2Z" stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span>
                                            Поделиться
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 22C4.93209 22 0 17.0679 0 11C0 4.93209 4.93209 0 11 0C17.0679 0 22 4.93209 22 11C22 17.0679 17.0679 22 11 22ZM11 1.53488C5.7814 1.53488 1.53488 5.7814 1.53488 11C1.53488 16.2186 5.7814 20.4651 11 20.4651C16.2186 20.4651 20.4651 16.2186 20.4651 11C20.4651 5.7814 16.2186 1.53488 11 1.53488Z" fill="black"/>
                                                <path d="M10.9999 12.7907C10.5804 12.7907 10.2325 12.4428 10.2325 12.0232V6.90697C10.2325 6.48743 10.5804 6.13953 10.9999 6.13953C11.4195 6.13953 11.7674 6.48743 11.7674 6.90697V12.0232C11.7674 12.4428 11.4195 12.7907 10.9999 12.7907ZM10.9999 16.1163C10.8669 16.1163 10.7339 16.0856 10.6111 16.0344C10.4883 15.9832 10.3758 15.9116 10.2734 15.8195C10.1813 15.7172 10.1097 15.6149 10.0585 15.4818C10.0074 15.3591 9.97668 15.226 9.97668 15.093C9.97668 14.96 10.0074 14.827 10.0585 14.7042C10.1097 14.5814 10.1813 14.4688 10.2734 14.3665C10.3758 14.2744 10.4883 14.2028 10.6111 14.1516C10.8602 14.0493 11.1397 14.0493 11.3888 14.1516C11.5116 14.2028 11.6241 14.2744 11.7265 14.3665C11.8185 14.4688 11.8902 14.5814 11.9413 14.7042C11.9925 14.827 12.0232 14.96 12.0232 15.093C12.0232 15.226 11.9925 15.3591 11.9413 15.4818C11.8902 15.6149 11.8185 15.7172 11.7265 15.8195C11.6241 15.9116 11.5116 15.9832 11.3888 16.0344C11.266 16.0856 11.133 16.1163 10.9999 16.1163Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Пожаловаться
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video-item-container fix-h">
                            <div class="video-item-img">
                                <img src="img/video-item-2.png">
                                <div class="video-duration">
                                    <span>3:00</span>
                                </div>
                                <div class="video-start-stop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                        <circle cx="27.5" cy="27.5" r="26.5" stroke="#FDFDFD" stroke-width="2"/>
                                        <path d="M19.6468 15.9945C19.5063 15.9113 19.3463 15.8667 19.1831 15.8652C19.0198 15.8638 18.8591 15.9056 18.7172 15.9864C18.5753 16.0672 18.4574 16.1841 18.3753 16.3253C18.2933 16.4664 18.25 16.6268 18.25 16.79V38.21C18.25 38.3732 18.2933 38.5336 18.3753 38.6747C18.4574 38.8159 18.5753 38.9328 18.7172 39.0136C18.8591 39.0944 19.0198 39.1362 19.1831 39.1348C19.3463 39.1333 19.5063 39.0887 19.6468 39.0055L37.7197 28.2955C37.8577 28.2136 37.9721 28.0972 38.0515 27.9577C38.1309 27.8182 38.1727 27.6605 38.1727 27.5C38.1727 27.3395 38.1309 27.1818 38.0515 27.0423C37.9721 26.9028 37.8577 26.7864 37.7197 26.7045L19.6468 15.9945Z" fill="#FDFDFD" stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="video-item-footer fix-sb">
                                <div class="video-item-info">
                                    <div class="video-item-name fix-mb">
                                        Профилактика гриппа
                                    </div>
                                    <div class="video-item-views-data">
                                        2,9 млн просмотров <span>|</span> 6 месяцев назад
                                    </div>
                                </div>
                                <div class="video-item-dots">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="12" viewBox="0 0 3 12" fill="none">
                                        <path d="M3 1.5C3 2.32843 2.32843 3 1.5 3C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0C2.32843 0 3 0.671573 3 1.5Z" fill="black"/>
                                        <path d="M3 6C3 6.82843 2.32843 7.5 1.5 7.5C0.671573 7.5 0 6.82843 0 6C0 5.17157 0.671573 4.5 1.5 4.5C2.32843 4.5 3 5.17157 3 6Z" fill="black"/>
                                        <path d="M3 10.5C3 11.3284 2.32843 12 1.5 12C0.671573 12 0 11.3284 0 10.5C0 9.67157 0.671573 9 1.5 9C2.32843 9 3 9.67157 3 10.5Z" fill="black"/>
                                    </svg>
                                    <div class="dots-dropdown-menu">
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M10.3125 2.75V14.1371L6.68181 10.505L5.6925 11.495L10.505 16.3075L10.9993 16.7798L11.4936 16.3075L16.3061 11.495L15.3175 10.5064L11.6875 14.1364V2.75H10.3125ZM4.8125 17.875V19.25H17.1875V17.875H4.8125Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Скачать
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M14.3333 8.2C7.41867 7.542 2.97422 10.342 1 16.6C4.76667 12.204 9.45467 11.3948 14.3333 13.8V18L21 11L14.3333 4V8.2Z" stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span>
                                            Поделиться
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 22C4.93209 22 0 17.0679 0 11C0 4.93209 4.93209 0 11 0C17.0679 0 22 4.93209 22 11C22 17.0679 17.0679 22 11 22ZM11 1.53488C5.7814 1.53488 1.53488 5.7814 1.53488 11C1.53488 16.2186 5.7814 20.4651 11 20.4651C16.2186 20.4651 20.4651 16.2186 20.4651 11C20.4651 5.7814 16.2186 1.53488 11 1.53488Z" fill="black"/>
                                                <path d="M10.9999 12.7907C10.5804 12.7907 10.2325 12.4428 10.2325 12.0232V6.90697C10.2325 6.48743 10.5804 6.13953 10.9999 6.13953C11.4195 6.13953 11.7674 6.48743 11.7674 6.90697V12.0232C11.7674 12.4428 11.4195 12.7907 10.9999 12.7907ZM10.9999 16.1163C10.8669 16.1163 10.7339 16.0856 10.6111 16.0344C10.4883 15.9832 10.3758 15.9116 10.2734 15.8195C10.1813 15.7172 10.1097 15.6149 10.0585 15.4818C10.0074 15.3591 9.97668 15.226 9.97668 15.093C9.97668 14.96 10.0074 14.827 10.0585 14.7042C10.1097 14.5814 10.1813 14.4688 10.2734 14.3665C10.3758 14.2744 10.4883 14.2028 10.6111 14.1516C10.8602 14.0493 11.1397 14.0493 11.3888 14.1516C11.5116 14.2028 11.6241 14.2744 11.7265 14.3665C11.8185 14.4688 11.8902 14.5814 11.9413 14.7042C11.9925 14.827 12.0232 14.96 12.0232 15.093C12.0232 15.226 11.9925 15.3591 11.9413 15.4818C11.8902 15.6149 11.8185 15.7172 11.7265 15.8195C11.6241 15.9116 11.5116 15.9832 11.3888 16.0344C11.266 16.0856 11.133 16.1163 10.9999 16.1163Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Пожаловаться
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video-item-container fix-h">
                            <div class="video-item-img">
                                <img src="img/video-item-1.png">
                                <div class="video-duration">
                                    <span>3:00</span>
                                </div>
                                <div class="video-start-stop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                        <circle cx="27.5" cy="27.5" r="26.5" stroke="#FDFDFD" stroke-width="2"/>
                                        <path d="M19.6468 15.9945C19.5063 15.9113 19.3463 15.8667 19.1831 15.8652C19.0198 15.8638 18.8591 15.9056 18.7172 15.9864C18.5753 16.0672 18.4574 16.1841 18.3753 16.3253C18.2933 16.4664 18.25 16.6268 18.25 16.79V38.21C18.25 38.3732 18.2933 38.5336 18.3753 38.6747C18.4574 38.8159 18.5753 38.9328 18.7172 39.0136C18.8591 39.0944 19.0198 39.1362 19.1831 39.1348C19.3463 39.1333 19.5063 39.0887 19.6468 39.0055L37.7197 28.2955C37.8577 28.2136 37.9721 28.0972 38.0515 27.9577C38.1309 27.8182 38.1727 27.6605 38.1727 27.5C38.1727 27.3395 38.1309 27.1818 38.0515 27.0423C37.9721 26.9028 37.8577 26.7864 37.7197 26.7045L19.6468 15.9945Z" fill="#FDFDFD" stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="video-item-footer fix-sb">
                                <div class="video-item-info">
                                    <div class="video-item-name fix-mb">
                                        День из жизни "Мосмедпроф": как мы работаем
                                    </div>
                                    <div class="video-item-views-data">
                                        2,9 млн просмотров <span>|</span> 6 месяцев назад
                                    </div>
                                </div>
                                <div class="video-item-dots">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="12" viewBox="0 0 3 12" fill="none">
                                        <path d="M3 1.5C3 2.32843 2.32843 3 1.5 3C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0C2.32843 0 3 0.671573 3 1.5Z" fill="black"/>
                                        <path d="M3 6C3 6.82843 2.32843 7.5 1.5 7.5C0.671573 7.5 0 6.82843 0 6C0 5.17157 0.671573 4.5 1.5 4.5C2.32843 4.5 3 5.17157 3 6Z" fill="black"/>
                                        <path d="M3 10.5C3 11.3284 2.32843 12 1.5 12C0.671573 12 0 11.3284 0 10.5C0 9.67157 0.671573 9 1.5 9C2.32843 9 3 9.67157 3 10.5Z" fill="black"/>
                                    </svg>
                                    <div class="dots-dropdown-menu">
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M10.3125 2.75V14.1371L6.68181 10.505L5.6925 11.495L10.505 16.3075L10.9993 16.7798L11.4936 16.3075L16.3061 11.495L15.3175 10.5064L11.6875 14.1364V2.75H10.3125ZM4.8125 17.875V19.25H17.1875V17.875H4.8125Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Скачать
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M14.3333 8.2C7.41867 7.542 2.97422 10.342 1 16.6C4.76667 12.204 9.45467 11.3948 14.3333 13.8V18L21 11L14.3333 4V8.2Z" stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span>
                                            Поделиться
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 22C4.93209 22 0 17.0679 0 11C0 4.93209 4.93209 0 11 0C17.0679 0 22 4.93209 22 11C22 17.0679 17.0679 22 11 22ZM11 1.53488C5.7814 1.53488 1.53488 5.7814 1.53488 11C1.53488 16.2186 5.7814 20.4651 11 20.4651C16.2186 20.4651 20.4651 16.2186 20.4651 11C20.4651 5.7814 16.2186 1.53488 11 1.53488Z" fill="black"/>
                                                <path d="M10.9999 12.7907C10.5804 12.7907 10.2325 12.4428 10.2325 12.0232V6.90697C10.2325 6.48743 10.5804 6.13953 10.9999 6.13953C11.4195 6.13953 11.7674 6.48743 11.7674 6.90697V12.0232C11.7674 12.4428 11.4195 12.7907 10.9999 12.7907ZM10.9999 16.1163C10.8669 16.1163 10.7339 16.0856 10.6111 16.0344C10.4883 15.9832 10.3758 15.9116 10.2734 15.8195C10.1813 15.7172 10.1097 15.6149 10.0585 15.4818C10.0074 15.3591 9.97668 15.226 9.97668 15.093C9.97668 14.96 10.0074 14.827 10.0585 14.7042C10.1097 14.5814 10.1813 14.4688 10.2734 14.3665C10.3758 14.2744 10.4883 14.2028 10.6111 14.1516C10.8602 14.0493 11.1397 14.0493 11.3888 14.1516C11.5116 14.2028 11.6241 14.2744 11.7265 14.3665C11.8185 14.4688 11.8902 14.5814 11.9413 14.7042C11.9925 14.827 12.0232 14.96 12.0232 15.093C12.0232 15.226 11.9925 15.3591 11.9413 15.4818C11.8902 15.6149 11.8185 15.7172 11.7265 15.8195C11.6241 15.9116 11.5116 15.9832 11.3888 16.0344C11.266 16.0856 11.133 16.1163 10.9999 16.1163Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Пожаловаться
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video-item-container fix-h">
                            <div class="video-item-img">
                                <img src="img/video-item-2.png">
                                <div class="video-duration">
                                    <span>3:00</span>
                                </div>
                                <div class="video-start-stop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                        <circle cx="27.5" cy="27.5" r="26.5" stroke="#FDFDFD" stroke-width="2"/>
                                        <path d="M19.6468 15.9945C19.5063 15.9113 19.3463 15.8667 19.1831 15.8652C19.0198 15.8638 18.8591 15.9056 18.7172 15.9864C18.5753 16.0672 18.4574 16.1841 18.3753 16.3253C18.2933 16.4664 18.25 16.6268 18.25 16.79V38.21C18.25 38.3732 18.2933 38.5336 18.3753 38.6747C18.4574 38.8159 18.5753 38.9328 18.7172 39.0136C18.8591 39.0944 19.0198 39.1362 19.1831 39.1348C19.3463 39.1333 19.5063 39.0887 19.6468 39.0055L37.7197 28.2955C37.8577 28.2136 37.9721 28.0972 38.0515 27.9577C38.1309 27.8182 38.1727 27.6605 38.1727 27.5C38.1727 27.3395 38.1309 27.1818 38.0515 27.0423C37.9721 26.9028 37.8577 26.7864 37.7197 26.7045L19.6468 15.9945Z" fill="#FDFDFD" stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="video-item-footer fix-sb">
                                <div class="video-item-info">
                                    <div class="video-item-name fix-mb">
                                        Профилактика гриппа
                                    </div>
                                    <div class="video-item-views-data">
                                        2,9 млн просмотров <span>|</span> 6 месяцев назад
                                    </div>
                                </div>
                                <div class="video-item-dots">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="12" viewBox="0 0 3 12" fill="none">
                                        <path d="M3 1.5C3 2.32843 2.32843 3 1.5 3C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0C2.32843 0 3 0.671573 3 1.5Z" fill="black"/>
                                        <path d="M3 6C3 6.82843 2.32843 7.5 1.5 7.5C0.671573 7.5 0 6.82843 0 6C0 5.17157 0.671573 4.5 1.5 4.5C2.32843 4.5 3 5.17157 3 6Z" fill="black"/>
                                        <path d="M3 10.5C3 11.3284 2.32843 12 1.5 12C0.671573 12 0 11.3284 0 10.5C0 9.67157 0.671573 9 1.5 9C2.32843 9 3 9.67157 3 10.5Z" fill="black"/>
                                    </svg>
                                    <div class="dots-dropdown-menu">
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M10.3125 2.75V14.1371L6.68181 10.505L5.6925 11.495L10.505 16.3075L10.9993 16.7798L11.4936 16.3075L16.3061 11.495L15.3175 10.5064L11.6875 14.1364V2.75H10.3125ZM4.8125 17.875V19.25H17.1875V17.875H4.8125Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Скачать
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M14.3333 8.2C7.41867 7.542 2.97422 10.342 1 16.6C4.76667 12.204 9.45467 11.3948 14.3333 13.8V18L21 11L14.3333 4V8.2Z" stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span>
                                            Поделиться
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 22C4.93209 22 0 17.0679 0 11C0 4.93209 4.93209 0 11 0C17.0679 0 22 4.93209 22 11C22 17.0679 17.0679 22 11 22ZM11 1.53488C5.7814 1.53488 1.53488 5.7814 1.53488 11C1.53488 16.2186 5.7814 20.4651 11 20.4651C16.2186 20.4651 20.4651 16.2186 20.4651 11C20.4651 5.7814 16.2186 1.53488 11 1.53488Z" fill="black"/>
                                                <path d="M10.9999 12.7907C10.5804 12.7907 10.2325 12.4428 10.2325 12.0232V6.90697C10.2325 6.48743 10.5804 6.13953 10.9999 6.13953C11.4195 6.13953 11.7674 6.48743 11.7674 6.90697V12.0232C11.7674 12.4428 11.4195 12.7907 10.9999 12.7907ZM10.9999 16.1163C10.8669 16.1163 10.7339 16.0856 10.6111 16.0344C10.4883 15.9832 10.3758 15.9116 10.2734 15.8195C10.1813 15.7172 10.1097 15.6149 10.0585 15.4818C10.0074 15.3591 9.97668 15.226 9.97668 15.093C9.97668 14.96 10.0074 14.827 10.0585 14.7042C10.1097 14.5814 10.1813 14.4688 10.2734 14.3665C10.3758 14.2744 10.4883 14.2028 10.6111 14.1516C10.8602 14.0493 11.1397 14.0493 11.3888 14.1516C11.5116 14.2028 11.6241 14.2744 11.7265 14.3665C11.8185 14.4688 11.8902 14.5814 11.9413 14.7042C11.9925 14.827 12.0232 14.96 12.0232 15.093C12.0232 15.226 11.9925 15.3591 11.9413 15.4818C11.8902 15.6149 11.8185 15.7172 11.7265 15.8195C11.6241 15.9116 11.5116 15.9832 11.3888 16.0344C11.266 16.0856 11.133 16.1163 10.9999 16.1163Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Пожаловаться
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video-item-container fix-h">
                            <div class="video-item-img">
                                <img src="img/video-item-1.png">
                                <div class="video-duration">
                                    <span>3:00</span>
                                </div>
                                <div class="video-start-stop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                        <circle cx="27.5" cy="27.5" r="26.5" stroke="#FDFDFD" stroke-width="2"/>
                                        <path d="M19.6468 15.9945C19.5063 15.9113 19.3463 15.8667 19.1831 15.8652C19.0198 15.8638 18.8591 15.9056 18.7172 15.9864C18.5753 16.0672 18.4574 16.1841 18.3753 16.3253C18.2933 16.4664 18.25 16.6268 18.25 16.79V38.21C18.25 38.3732 18.2933 38.5336 18.3753 38.6747C18.4574 38.8159 18.5753 38.9328 18.7172 39.0136C18.8591 39.0944 19.0198 39.1362 19.1831 39.1348C19.3463 39.1333 19.5063 39.0887 19.6468 39.0055L37.7197 28.2955C37.8577 28.2136 37.9721 28.0972 38.0515 27.9577C38.1309 27.8182 38.1727 27.6605 38.1727 27.5C38.1727 27.3395 38.1309 27.1818 38.0515 27.0423C37.9721 26.9028 37.8577 26.7864 37.7197 26.7045L19.6468 15.9945Z" fill="#FDFDFD" stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="video-item-footer fix-sb">
                                <div class="video-item-info">
                                    <div class="video-item-name fix-mb">
                                        День из жизни "Мосмедпроф": как мы работаем
                                    </div>
                                    <div class="video-item-views-data">
                                        2,9 млн просмотров <span>|</span> 6 месяцев назад
                                    </div>
                                </div>
                                <div class="video-item-dots">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="12" viewBox="0 0 3 12" fill="none">
                                        <path d="M3 1.5C3 2.32843 2.32843 3 1.5 3C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0C2.32843 0 3 0.671573 3 1.5Z" fill="black"/>
                                        <path d="M3 6C3 6.82843 2.32843 7.5 1.5 7.5C0.671573 7.5 0 6.82843 0 6C0 5.17157 0.671573 4.5 1.5 4.5C2.32843 4.5 3 5.17157 3 6Z" fill="black"/>
                                        <path d="M3 10.5C3 11.3284 2.32843 12 1.5 12C0.671573 12 0 11.3284 0 10.5C0 9.67157 0.671573 9 1.5 9C2.32843 9 3 9.67157 3 10.5Z" fill="black"/>
                                    </svg>
                                    <div class="dots-dropdown-menu">
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M10.3125 2.75V14.1371L6.68181 10.505L5.6925 11.495L10.505 16.3075L10.9993 16.7798L11.4936 16.3075L16.3061 11.495L15.3175 10.5064L11.6875 14.1364V2.75H10.3125ZM4.8125 17.875V19.25H17.1875V17.875H4.8125Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Скачать
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M14.3333 8.2C7.41867 7.542 2.97422 10.342 1 16.6C4.76667 12.204 9.45467 11.3948 14.3333 13.8V18L21 11L14.3333 4V8.2Z" stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span>
                                            Поделиться
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 22C4.93209 22 0 17.0679 0 11C0 4.93209 4.93209 0 11 0C17.0679 0 22 4.93209 22 11C22 17.0679 17.0679 22 11 22ZM11 1.53488C5.7814 1.53488 1.53488 5.7814 1.53488 11C1.53488 16.2186 5.7814 20.4651 11 20.4651C16.2186 20.4651 20.4651 16.2186 20.4651 11C20.4651 5.7814 16.2186 1.53488 11 1.53488Z" fill="black"/>
                                                <path d="M10.9999 12.7907C10.5804 12.7907 10.2325 12.4428 10.2325 12.0232V6.90697C10.2325 6.48743 10.5804 6.13953 10.9999 6.13953C11.4195 6.13953 11.7674 6.48743 11.7674 6.90697V12.0232C11.7674 12.4428 11.4195 12.7907 10.9999 12.7907ZM10.9999 16.1163C10.8669 16.1163 10.7339 16.0856 10.6111 16.0344C10.4883 15.9832 10.3758 15.9116 10.2734 15.8195C10.1813 15.7172 10.1097 15.6149 10.0585 15.4818C10.0074 15.3591 9.97668 15.226 9.97668 15.093C9.97668 14.96 10.0074 14.827 10.0585 14.7042C10.1097 14.5814 10.1813 14.4688 10.2734 14.3665C10.3758 14.2744 10.4883 14.2028 10.6111 14.1516C10.8602 14.0493 11.1397 14.0493 11.3888 14.1516C11.5116 14.2028 11.6241 14.2744 11.7265 14.3665C11.8185 14.4688 11.8902 14.5814 11.9413 14.7042C11.9925 14.827 12.0232 14.96 12.0232 15.093C12.0232 15.226 11.9925 15.3591 11.9413 15.4818C11.8902 15.6149 11.8185 15.7172 11.7265 15.8195C11.6241 15.9116 11.5116 15.9832 11.3888 16.0344C11.266 16.0856 11.133 16.1163 10.9999 16.1163Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Пожаловаться
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video-item-container fix-h">
                            <div class="video-item-img">
                                <img src="img/video-item-2.png">
                                <div class="video-duration">
                                    <span>3:00</span>
                                </div>
                                <div class="video-start-stop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                        <circle cx="27.5" cy="27.5" r="26.5" stroke="#FDFDFD" stroke-width="2"/>
                                        <path d="M19.6468 15.9945C19.5063 15.9113 19.3463 15.8667 19.1831 15.8652C19.0198 15.8638 18.8591 15.9056 18.7172 15.9864C18.5753 16.0672 18.4574 16.1841 18.3753 16.3253C18.2933 16.4664 18.25 16.6268 18.25 16.79V38.21C18.25 38.3732 18.2933 38.5336 18.3753 38.6747C18.4574 38.8159 18.5753 38.9328 18.7172 39.0136C18.8591 39.0944 19.0198 39.1362 19.1831 39.1348C19.3463 39.1333 19.5063 39.0887 19.6468 39.0055L37.7197 28.2955C37.8577 28.2136 37.9721 28.0972 38.0515 27.9577C38.1309 27.8182 38.1727 27.6605 38.1727 27.5C38.1727 27.3395 38.1309 27.1818 38.0515 27.0423C37.9721 26.9028 37.8577 26.7864 37.7197 26.7045L19.6468 15.9945Z" fill="#FDFDFD" stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="video-item-footer fix-sb">
                                <div class="video-item-info">
                                    <div class="video-item-name fix-mb">
                                        Профилактика гриппа
                                    </div>
                                    <div class="video-item-views-data">
                                        2,9 млн просмотров <span>|</span> 6 месяцев назад
                                    </div>
                                </div>
                                <div class="video-item-dots">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="12" viewBox="0 0 3 12" fill="none">
                                        <path d="M3 1.5C3 2.32843 2.32843 3 1.5 3C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0C2.32843 0 3 0.671573 3 1.5Z" fill="black"/>
                                        <path d="M3 6C3 6.82843 2.32843 7.5 1.5 7.5C0.671573 7.5 0 6.82843 0 6C0 5.17157 0.671573 4.5 1.5 4.5C2.32843 4.5 3 5.17157 3 6Z" fill="black"/>
                                        <path d="M3 10.5C3 11.3284 2.32843 12 1.5 12C0.671573 12 0 11.3284 0 10.5C0 9.67157 0.671573 9 1.5 9C2.32843 9 3 9.67157 3 10.5Z" fill="black"/>
                                    </svg>
                                    <div class="dots-dropdown-menu">
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M10.3125 2.75V14.1371L6.68181 10.505L5.6925 11.495L10.505 16.3075L10.9993 16.7798L11.4936 16.3075L16.3061 11.495L15.3175 10.5064L11.6875 14.1364V2.75H10.3125ZM4.8125 17.875V19.25H17.1875V17.875H4.8125Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Скачать
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M14.3333 8.2C7.41867 7.542 2.97422 10.342 1 16.6C4.76667 12.204 9.45467 11.3948 14.3333 13.8V18L21 11L14.3333 4V8.2Z" stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span>
                                            Поделиться
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 22C4.93209 22 0 17.0679 0 11C0 4.93209 4.93209 0 11 0C17.0679 0 22 4.93209 22 11C22 17.0679 17.0679 22 11 22ZM11 1.53488C5.7814 1.53488 1.53488 5.7814 1.53488 11C1.53488 16.2186 5.7814 20.4651 11 20.4651C16.2186 20.4651 20.4651 16.2186 20.4651 11C20.4651 5.7814 16.2186 1.53488 11 1.53488Z" fill="black"/>
                                                <path d="M10.9999 12.7907C10.5804 12.7907 10.2325 12.4428 10.2325 12.0232V6.90697C10.2325 6.48743 10.5804 6.13953 10.9999 6.13953C11.4195 6.13953 11.7674 6.48743 11.7674 6.90697V12.0232C11.7674 12.4428 11.4195 12.7907 10.9999 12.7907ZM10.9999 16.1163C10.8669 16.1163 10.7339 16.0856 10.6111 16.0344C10.4883 15.9832 10.3758 15.9116 10.2734 15.8195C10.1813 15.7172 10.1097 15.6149 10.0585 15.4818C10.0074 15.3591 9.97668 15.226 9.97668 15.093C9.97668 14.96 10.0074 14.827 10.0585 14.7042C10.1097 14.5814 10.1813 14.4688 10.2734 14.3665C10.3758 14.2744 10.4883 14.2028 10.6111 14.1516C10.8602 14.0493 11.1397 14.0493 11.3888 14.1516C11.5116 14.2028 11.6241 14.2744 11.7265 14.3665C11.8185 14.4688 11.8902 14.5814 11.9413 14.7042C11.9925 14.827 12.0232 14.96 12.0232 15.093C12.0232 15.226 11.9925 15.3591 11.9413 15.4818C11.8902 15.6149 11.8185 15.7172 11.7265 15.8195C11.6241 15.9116 11.5116 15.9832 11.3888 16.0344C11.266 16.0856 11.133 16.1163 10.9999 16.1163Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Пожаловаться
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video-item-container fix-h">
                            <div class="video-item-img">
                                <img src="img/video-item-1.png">
                                <div class="video-duration">
                                    <span>3:00</span>
                                </div>
                                <div class="video-start-stop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                        <circle cx="27.5" cy="27.5" r="26.5" stroke="#FDFDFD" stroke-width="2"/>
                                        <path d="M19.6468 15.9945C19.5063 15.9113 19.3463 15.8667 19.1831 15.8652C19.0198 15.8638 18.8591 15.9056 18.7172 15.9864C18.5753 16.0672 18.4574 16.1841 18.3753 16.3253C18.2933 16.4664 18.25 16.6268 18.25 16.79V38.21C18.25 38.3732 18.2933 38.5336 18.3753 38.6747C18.4574 38.8159 18.5753 38.9328 18.7172 39.0136C18.8591 39.0944 19.0198 39.1362 19.1831 39.1348C19.3463 39.1333 19.5063 39.0887 19.6468 39.0055L37.7197 28.2955C37.8577 28.2136 37.9721 28.0972 38.0515 27.9577C38.1309 27.8182 38.1727 27.6605 38.1727 27.5C38.1727 27.3395 38.1309 27.1818 38.0515 27.0423C37.9721 26.9028 37.8577 26.7864 37.7197 26.7045L19.6468 15.9945Z" fill="#FDFDFD" stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="video-item-footer fix-sb">
                                <div class="video-item-info">
                                    <div class="video-item-name fix-mb">
                                        День из жизни "Мосмедпроф": как мы работаем
                                    </div>
                                    <div class="video-item-views-data">
                                        2,9 млн просмотров <span>|</span> 6 месяцев назад
                                    </div>
                                </div>
                                <div class="video-item-dots">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="12" viewBox="0 0 3 12" fill="none">
                                        <path d="M3 1.5C3 2.32843 2.32843 3 1.5 3C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0C2.32843 0 3 0.671573 3 1.5Z" fill="black"/>
                                        <path d="M3 6C3 6.82843 2.32843 7.5 1.5 7.5C0.671573 7.5 0 6.82843 0 6C0 5.17157 0.671573 4.5 1.5 4.5C2.32843 4.5 3 5.17157 3 6Z" fill="black"/>
                                        <path d="M3 10.5C3 11.3284 2.32843 12 1.5 12C0.671573 12 0 11.3284 0 10.5C0 9.67157 0.671573 9 1.5 9C2.32843 9 3 9.67157 3 10.5Z" fill="black"/>
                                    </svg>
                                    <div class="dots-dropdown-menu">
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M10.3125 2.75V14.1371L6.68181 10.505L5.6925 11.495L10.505 16.3075L10.9993 16.7798L11.4936 16.3075L16.3061 11.495L15.3175 10.5064L11.6875 14.1364V2.75H10.3125ZM4.8125 17.875V19.25H17.1875V17.875H4.8125Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Скачать
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M14.3333 8.2C7.41867 7.542 2.97422 10.342 1 16.6C4.76667 12.204 9.45467 11.3948 14.3333 13.8V18L21 11L14.3333 4V8.2Z" stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span>
                                            Поделиться
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 22C4.93209 22 0 17.0679 0 11C0 4.93209 4.93209 0 11 0C17.0679 0 22 4.93209 22 11C22 17.0679 17.0679 22 11 22ZM11 1.53488C5.7814 1.53488 1.53488 5.7814 1.53488 11C1.53488 16.2186 5.7814 20.4651 11 20.4651C16.2186 20.4651 20.4651 16.2186 20.4651 11C20.4651 5.7814 16.2186 1.53488 11 1.53488Z" fill="black"/>
                                                <path d="M10.9999 12.7907C10.5804 12.7907 10.2325 12.4428 10.2325 12.0232V6.90697C10.2325 6.48743 10.5804 6.13953 10.9999 6.13953C11.4195 6.13953 11.7674 6.48743 11.7674 6.90697V12.0232C11.7674 12.4428 11.4195 12.7907 10.9999 12.7907ZM10.9999 16.1163C10.8669 16.1163 10.7339 16.0856 10.6111 16.0344C10.4883 15.9832 10.3758 15.9116 10.2734 15.8195C10.1813 15.7172 10.1097 15.6149 10.0585 15.4818C10.0074 15.3591 9.97668 15.226 9.97668 15.093C9.97668 14.96 10.0074 14.827 10.0585 14.7042C10.1097 14.5814 10.1813 14.4688 10.2734 14.3665C10.3758 14.2744 10.4883 14.2028 10.6111 14.1516C10.8602 14.0493 11.1397 14.0493 11.3888 14.1516C11.5116 14.2028 11.6241 14.2744 11.7265 14.3665C11.8185 14.4688 11.8902 14.5814 11.9413 14.7042C11.9925 14.827 12.0232 14.96 12.0232 15.093C12.0232 15.226 11.9925 15.3591 11.9413 15.4818C11.8902 15.6149 11.8185 15.7172 11.7265 15.8195C11.6241 15.9116 11.5116 15.9832 11.3888 16.0344C11.266 16.0856 11.133 16.1163 10.9999 16.1163Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Пожаловаться
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video-item-container fix-h">
                            <div class="video-item-img">
                                <img src="img/video-item-2.png">
                                <div class="video-duration">
                                    <span>3:00</span>
                                </div>
                                <div class="video-start-stop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                        <circle cx="27.5" cy="27.5" r="26.5" stroke="#FDFDFD" stroke-width="2"/>
                                        <path d="M19.6468 15.9945C19.5063 15.9113 19.3463 15.8667 19.1831 15.8652C19.0198 15.8638 18.8591 15.9056 18.7172 15.9864C18.5753 16.0672 18.4574 16.1841 18.3753 16.3253C18.2933 16.4664 18.25 16.6268 18.25 16.79V38.21C18.25 38.3732 18.2933 38.5336 18.3753 38.6747C18.4574 38.8159 18.5753 38.9328 18.7172 39.0136C18.8591 39.0944 19.0198 39.1362 19.1831 39.1348C19.3463 39.1333 19.5063 39.0887 19.6468 39.0055L37.7197 28.2955C37.8577 28.2136 37.9721 28.0972 38.0515 27.9577C38.1309 27.8182 38.1727 27.6605 38.1727 27.5C38.1727 27.3395 38.1309 27.1818 38.0515 27.0423C37.9721 26.9028 37.8577 26.7864 37.7197 26.7045L19.6468 15.9945Z" fill="#FDFDFD" stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="video-item-footer fix-sb">
                                <div class="video-item-info">
                                    <div class="video-item-name fix-mb">
                                        Профилактика гриппа
                                    </div>
                                    <div class="video-item-views-data">
                                        2,9 млн просмотров <span>|</span> 6 месяцев назад
                                    </div>
                                </div>
                                <div class="video-item-dots">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="12" viewBox="0 0 3 12" fill="none">
                                        <path d="M3 1.5C3 2.32843 2.32843 3 1.5 3C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0C2.32843 0 3 0.671573 3 1.5Z" fill="black"/>
                                        <path d="M3 6C3 6.82843 2.32843 7.5 1.5 7.5C0.671573 7.5 0 6.82843 0 6C0 5.17157 0.671573 4.5 1.5 4.5C2.32843 4.5 3 5.17157 3 6Z" fill="black"/>
                                        <path d="M3 10.5C3 11.3284 2.32843 12 1.5 12C0.671573 12 0 11.3284 0 10.5C0 9.67157 0.671573 9 1.5 9C2.32843 9 3 9.67157 3 10.5Z" fill="black"/>
                                    </svg>
                                    <div class="dots-dropdown-menu">
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M10.3125 2.75V14.1371L6.68181 10.505L5.6925 11.495L10.505 16.3075L10.9993 16.7798L11.4936 16.3075L16.3061 11.495L15.3175 10.5064L11.6875 14.1364V2.75H10.3125ZM4.8125 17.875V19.25H17.1875V17.875H4.8125Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Скачать
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M14.3333 8.2C7.41867 7.542 2.97422 10.342 1 16.6C4.76667 12.204 9.45467 11.3948 14.3333 13.8V18L21 11L14.3333 4V8.2Z" stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span>
                                            Поделиться
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 22C4.93209 22 0 17.0679 0 11C0 4.93209 4.93209 0 11 0C17.0679 0 22 4.93209 22 11C22 17.0679 17.0679 22 11 22ZM11 1.53488C5.7814 1.53488 1.53488 5.7814 1.53488 11C1.53488 16.2186 5.7814 20.4651 11 20.4651C16.2186 20.4651 20.4651 16.2186 20.4651 11C20.4651 5.7814 16.2186 1.53488 11 1.53488Z" fill="black"/>
                                                <path d="M10.9999 12.7907C10.5804 12.7907 10.2325 12.4428 10.2325 12.0232V6.90697C10.2325 6.48743 10.5804 6.13953 10.9999 6.13953C11.4195 6.13953 11.7674 6.48743 11.7674 6.90697V12.0232C11.7674 12.4428 11.4195 12.7907 10.9999 12.7907ZM10.9999 16.1163C10.8669 16.1163 10.7339 16.0856 10.6111 16.0344C10.4883 15.9832 10.3758 15.9116 10.2734 15.8195C10.1813 15.7172 10.1097 15.6149 10.0585 15.4818C10.0074 15.3591 9.97668 15.226 9.97668 15.093C9.97668 14.96 10.0074 14.827 10.0585 14.7042C10.1097 14.5814 10.1813 14.4688 10.2734 14.3665C10.3758 14.2744 10.4883 14.2028 10.6111 14.1516C10.8602 14.0493 11.1397 14.0493 11.3888 14.1516C11.5116 14.2028 11.6241 14.2744 11.7265 14.3665C11.8185 14.4688 11.8902 14.5814 11.9413 14.7042C11.9925 14.827 12.0232 14.96 12.0232 15.093C12.0232 15.226 11.9925 15.3591 11.9413 15.4818C11.8902 15.6149 11.8185 15.7172 11.7265 15.8195C11.6241 15.9116 11.5116 15.9832 11.3888 16.0344C11.266 16.0856 11.133 16.1163 10.9999 16.1163Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Пожаловаться
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video-item-container fix-h">
                            <div class="video-item-img">
                                <img src="img/video-item-1.png">
                                <div class="video-duration">
                                    <span>3:00</span>
                                </div>
                                <div class="video-start-stop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                        <circle cx="27.5" cy="27.5" r="26.5" stroke="#FDFDFD" stroke-width="2"/>
                                        <path d="M19.6468 15.9945C19.5063 15.9113 19.3463 15.8667 19.1831 15.8652C19.0198 15.8638 18.8591 15.9056 18.7172 15.9864C18.5753 16.0672 18.4574 16.1841 18.3753 16.3253C18.2933 16.4664 18.25 16.6268 18.25 16.79V38.21C18.25 38.3732 18.2933 38.5336 18.3753 38.6747C18.4574 38.8159 18.5753 38.9328 18.7172 39.0136C18.8591 39.0944 19.0198 39.1362 19.1831 39.1348C19.3463 39.1333 19.5063 39.0887 19.6468 39.0055L37.7197 28.2955C37.8577 28.2136 37.9721 28.0972 38.0515 27.9577C38.1309 27.8182 38.1727 27.6605 38.1727 27.5C38.1727 27.3395 38.1309 27.1818 38.0515 27.0423C37.9721 26.9028 37.8577 26.7864 37.7197 26.7045L19.6468 15.9945Z" fill="#FDFDFD" stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="video-item-footer fix-sb">
                                <div class="video-item-info">
                                    <div class="video-item-name fix-mb">
                                        День из жизни "Мосмедпроф": как мы работаем
                                    </div>
                                    <div class="video-item-views-data">
                                        2,9 млн просмотров <span>|</span> 6 месяцев назад
                                    </div>
                                </div>
                                <div class="video-item-dots">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="12" viewBox="0 0 3 12" fill="none">
                                        <path d="M3 1.5C3 2.32843 2.32843 3 1.5 3C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0C2.32843 0 3 0.671573 3 1.5Z" fill="black"/>
                                        <path d="M3 6C3 6.82843 2.32843 7.5 1.5 7.5C0.671573 7.5 0 6.82843 0 6C0 5.17157 0.671573 4.5 1.5 4.5C2.32843 4.5 3 5.17157 3 6Z" fill="black"/>
                                        <path d="M3 10.5C3 11.3284 2.32843 12 1.5 12C0.671573 12 0 11.3284 0 10.5C0 9.67157 0.671573 9 1.5 9C2.32843 9 3 9.67157 3 10.5Z" fill="black"/>
                                    </svg>
                                    <div class="dots-dropdown-menu">
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M10.3125 2.75V14.1371L6.68181 10.505L5.6925 11.495L10.505 16.3075L10.9993 16.7798L11.4936 16.3075L16.3061 11.495L15.3175 10.5064L11.6875 14.1364V2.75H10.3125ZM4.8125 17.875V19.25H17.1875V17.875H4.8125Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Скачать
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M14.3333 8.2C7.41867 7.542 2.97422 10.342 1 16.6C4.76667 12.204 9.45467 11.3948 14.3333 13.8V18L21 11L14.3333 4V8.2Z" stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span>
                                            Поделиться
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 22C4.93209 22 0 17.0679 0 11C0 4.93209 4.93209 0 11 0C17.0679 0 22 4.93209 22 11C22 17.0679 17.0679 22 11 22ZM11 1.53488C5.7814 1.53488 1.53488 5.7814 1.53488 11C1.53488 16.2186 5.7814 20.4651 11 20.4651C16.2186 20.4651 20.4651 16.2186 20.4651 11C20.4651 5.7814 16.2186 1.53488 11 1.53488Z" fill="black"/>
                                                <path d="M10.9999 12.7907C10.5804 12.7907 10.2325 12.4428 10.2325 12.0232V6.90697C10.2325 6.48743 10.5804 6.13953 10.9999 6.13953C11.4195 6.13953 11.7674 6.48743 11.7674 6.90697V12.0232C11.7674 12.4428 11.4195 12.7907 10.9999 12.7907ZM10.9999 16.1163C10.8669 16.1163 10.7339 16.0856 10.6111 16.0344C10.4883 15.9832 10.3758 15.9116 10.2734 15.8195C10.1813 15.7172 10.1097 15.6149 10.0585 15.4818C10.0074 15.3591 9.97668 15.226 9.97668 15.093C9.97668 14.96 10.0074 14.827 10.0585 14.7042C10.1097 14.5814 10.1813 14.4688 10.2734 14.3665C10.3758 14.2744 10.4883 14.2028 10.6111 14.1516C10.8602 14.0493 11.1397 14.0493 11.3888 14.1516C11.5116 14.2028 11.6241 14.2744 11.7265 14.3665C11.8185 14.4688 11.8902 14.5814 11.9413 14.7042C11.9925 14.827 12.0232 14.96 12.0232 15.093C12.0232 15.226 11.9925 15.3591 11.9413 15.4818C11.8902 15.6149 11.8185 15.7172 11.7265 15.8195C11.6241 15.9116 11.5116 15.9832 11.3888 16.0344C11.266 16.0856 11.133 16.1163 10.9999 16.1163Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Пожаловаться
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video-item-container fix-h">
                            <div class="video-item-img">
                                <img src="img/video-item-2.png">
                                <div class="video-duration">
                                    <span>3:00</span>
                                </div>
                                <div class="video-start-stop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                        <circle cx="27.5" cy="27.5" r="26.5" stroke="#FDFDFD" stroke-width="2"/>
                                        <path d="M19.6468 15.9945C19.5063 15.9113 19.3463 15.8667 19.1831 15.8652C19.0198 15.8638 18.8591 15.9056 18.7172 15.9864C18.5753 16.0672 18.4574 16.1841 18.3753 16.3253C18.2933 16.4664 18.25 16.6268 18.25 16.79V38.21C18.25 38.3732 18.2933 38.5336 18.3753 38.6747C18.4574 38.8159 18.5753 38.9328 18.7172 39.0136C18.8591 39.0944 19.0198 39.1362 19.1831 39.1348C19.3463 39.1333 19.5063 39.0887 19.6468 39.0055L37.7197 28.2955C37.8577 28.2136 37.9721 28.0972 38.0515 27.9577C38.1309 27.8182 38.1727 27.6605 38.1727 27.5C38.1727 27.3395 38.1309 27.1818 38.0515 27.0423C37.9721 26.9028 37.8577 26.7864 37.7197 26.7045L19.6468 15.9945Z" fill="#FDFDFD" stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="video-item-footer fix-sb">
                                <div class="video-item-info">
                                    <div class="video-item-name fix-mb">
                                        Профилактика гриппа
                                    </div>
                                    <div class="video-item-views-data">
                                        2,9 млн просмотров <span>|</span> 6 месяцев назад
                                    </div>
                                </div>
                                <div class="video-item-dots">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="12" viewBox="0 0 3 12" fill="none">
                                        <path d="M3 1.5C3 2.32843 2.32843 3 1.5 3C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0C2.32843 0 3 0.671573 3 1.5Z" fill="black"/>
                                        <path d="M3 6C3 6.82843 2.32843 7.5 1.5 7.5C0.671573 7.5 0 6.82843 0 6C0 5.17157 0.671573 4.5 1.5 4.5C2.32843 4.5 3 5.17157 3 6Z" fill="black"/>
                                        <path d="M3 10.5C3 11.3284 2.32843 12 1.5 12C0.671573 12 0 11.3284 0 10.5C0 9.67157 0.671573 9 1.5 9C2.32843 9 3 9.67157 3 10.5Z" fill="black"/>
                                    </svg>
                                    <div class="dots-dropdown-menu">
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M10.3125 2.75V14.1371L6.68181 10.505L5.6925 11.495L10.505 16.3075L10.9993 16.7798L11.4936 16.3075L16.3061 11.495L15.3175 10.5064L11.6875 14.1364V2.75H10.3125ZM4.8125 17.875V19.25H17.1875V17.875H4.8125Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Скачать
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M14.3333 8.2C7.41867 7.542 2.97422 10.342 1 16.6C4.76667 12.204 9.45467 11.3948 14.3333 13.8V18L21 11L14.3333 4V8.2Z" stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span>
                                            Поделиться
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 22C4.93209 22 0 17.0679 0 11C0 4.93209 4.93209 0 11 0C17.0679 0 22 4.93209 22 11C22 17.0679 17.0679 22 11 22ZM11 1.53488C5.7814 1.53488 1.53488 5.7814 1.53488 11C1.53488 16.2186 5.7814 20.4651 11 20.4651C16.2186 20.4651 20.4651 16.2186 20.4651 11C20.4651 5.7814 16.2186 1.53488 11 1.53488Z" fill="black"/>
                                                <path d="M10.9999 12.7907C10.5804 12.7907 10.2325 12.4428 10.2325 12.0232V6.90697C10.2325 6.48743 10.5804 6.13953 10.9999 6.13953C11.4195 6.13953 11.7674 6.48743 11.7674 6.90697V12.0232C11.7674 12.4428 11.4195 12.7907 10.9999 12.7907ZM10.9999 16.1163C10.8669 16.1163 10.7339 16.0856 10.6111 16.0344C10.4883 15.9832 10.3758 15.9116 10.2734 15.8195C10.1813 15.7172 10.1097 15.6149 10.0585 15.4818C10.0074 15.3591 9.97668 15.226 9.97668 15.093C9.97668 14.96 10.0074 14.827 10.0585 14.7042C10.1097 14.5814 10.1813 14.4688 10.2734 14.3665C10.3758 14.2744 10.4883 14.2028 10.6111 14.1516C10.8602 14.0493 11.1397 14.0493 11.3888 14.1516C11.5116 14.2028 11.6241 14.2744 11.7265 14.3665C11.8185 14.4688 11.8902 14.5814 11.9413 14.7042C11.9925 14.827 12.0232 14.96 12.0232 15.093C12.0232 15.226 11.9925 15.3591 11.9413 15.4818C11.8902 15.6149 11.8185 15.7172 11.7265 15.8195C11.6241 15.9116 11.5116 15.9832 11.3888 16.0344C11.266 16.0856 11.133 16.1163 10.9999 16.1163Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Пожаловаться
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video-item-container fix-h">
                            <div class="video-item-img">
                                <img src="img/video-item-1.png">
                                <div class="video-duration">
                                    <span>3:00</span>
                                </div>
                                <div class="video-start-stop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                        <circle cx="27.5" cy="27.5" r="26.5" stroke="#FDFDFD" stroke-width="2"/>
                                        <path d="M19.6468 15.9945C19.5063 15.9113 19.3463 15.8667 19.1831 15.8652C19.0198 15.8638 18.8591 15.9056 18.7172 15.9864C18.5753 16.0672 18.4574 16.1841 18.3753 16.3253C18.2933 16.4664 18.25 16.6268 18.25 16.79V38.21C18.25 38.3732 18.2933 38.5336 18.3753 38.6747C18.4574 38.8159 18.5753 38.9328 18.7172 39.0136C18.8591 39.0944 19.0198 39.1362 19.1831 39.1348C19.3463 39.1333 19.5063 39.0887 19.6468 39.0055L37.7197 28.2955C37.8577 28.2136 37.9721 28.0972 38.0515 27.9577C38.1309 27.8182 38.1727 27.6605 38.1727 27.5C38.1727 27.3395 38.1309 27.1818 38.0515 27.0423C37.9721 26.9028 37.8577 26.7864 37.7197 26.7045L19.6468 15.9945Z" fill="#FDFDFD" stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="video-item-footer fix-sb">
                                <div class="video-item-info">
                                    <div class="video-item-name fix-mb">
                                        День из жизни "Мосмедпроф": как мы работаем
                                    </div>
                                    <div class="video-item-views-data">
                                        2,9 млн просмотров <span>|</span> 6 месяцев назад
                                    </div>
                                </div>
                                <div class="video-item-dots">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="12" viewBox="0 0 3 12" fill="none">
                                        <path d="M3 1.5C3 2.32843 2.32843 3 1.5 3C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0C2.32843 0 3 0.671573 3 1.5Z" fill="black"/>
                                        <path d="M3 6C3 6.82843 2.32843 7.5 1.5 7.5C0.671573 7.5 0 6.82843 0 6C0 5.17157 0.671573 4.5 1.5 4.5C2.32843 4.5 3 5.17157 3 6Z" fill="black"/>
                                        <path d="M3 10.5C3 11.3284 2.32843 12 1.5 12C0.671573 12 0 11.3284 0 10.5C0 9.67157 0.671573 9 1.5 9C2.32843 9 3 9.67157 3 10.5Z" fill="black"/>
                                    </svg>
                                    <div class="dots-dropdown-menu">
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M10.3125 2.75V14.1371L6.68181 10.505L5.6925 11.495L10.505 16.3075L10.9993 16.7798L11.4936 16.3075L16.3061 11.495L15.3175 10.5064L11.6875 14.1364V2.75H10.3125ZM4.8125 17.875V19.25H17.1875V17.875H4.8125Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Скачать
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M14.3333 8.2C7.41867 7.542 2.97422 10.342 1 16.6C4.76667 12.204 9.45467 11.3948 14.3333 13.8V18L21 11L14.3333 4V8.2Z" stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span>
                                            Поделиться
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 22C4.93209 22 0 17.0679 0 11C0 4.93209 4.93209 0 11 0C17.0679 0 22 4.93209 22 11C22 17.0679 17.0679 22 11 22ZM11 1.53488C5.7814 1.53488 1.53488 5.7814 1.53488 11C1.53488 16.2186 5.7814 20.4651 11 20.4651C16.2186 20.4651 20.4651 16.2186 20.4651 11C20.4651 5.7814 16.2186 1.53488 11 1.53488Z" fill="black"/>
                                                <path d="M10.9999 12.7907C10.5804 12.7907 10.2325 12.4428 10.2325 12.0232V6.90697C10.2325 6.48743 10.5804 6.13953 10.9999 6.13953C11.4195 6.13953 11.7674 6.48743 11.7674 6.90697V12.0232C11.7674 12.4428 11.4195 12.7907 10.9999 12.7907ZM10.9999 16.1163C10.8669 16.1163 10.7339 16.0856 10.6111 16.0344C10.4883 15.9832 10.3758 15.9116 10.2734 15.8195C10.1813 15.7172 10.1097 15.6149 10.0585 15.4818C10.0074 15.3591 9.97668 15.226 9.97668 15.093C9.97668 14.96 10.0074 14.827 10.0585 14.7042C10.1097 14.5814 10.1813 14.4688 10.2734 14.3665C10.3758 14.2744 10.4883 14.2028 10.6111 14.1516C10.8602 14.0493 11.1397 14.0493 11.3888 14.1516C11.5116 14.2028 11.6241 14.2744 11.7265 14.3665C11.8185 14.4688 11.8902 14.5814 11.9413 14.7042C11.9925 14.827 12.0232 14.96 12.0232 15.093C12.0232 15.226 11.9925 15.3591 11.9413 15.4818C11.8902 15.6149 11.8185 15.7172 11.7265 15.8195C11.6241 15.9116 11.5116 15.9832 11.3888 16.0344C11.266 16.0856 11.133 16.1163 10.9999 16.1163Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Пожаловаться
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="content-2" class="content-item">
                    <div class="main-content-all-video-grid">
                        <div class="video-item-container fix-h">
                            <div class="video-item-img">
                                <img src="img/video-item-2.png">
                                <div class="video-duration">
                                    <span>3:00</span>
                                </div>
                                <div class="video-start-stop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                        <circle cx="27.5" cy="27.5" r="26.5" stroke="#FDFDFD" stroke-width="2"/>
                                        <path d="M19.6468 15.9945C19.5063 15.9113 19.3463 15.8667 19.1831 15.8652C19.0198 15.8638 18.8591 15.9056 18.7172 15.9864C18.5753 16.0672 18.4574 16.1841 18.3753 16.3253C18.2933 16.4664 18.25 16.6268 18.25 16.79V38.21C18.25 38.3732 18.2933 38.5336 18.3753 38.6747C18.4574 38.8159 18.5753 38.9328 18.7172 39.0136C18.8591 39.0944 19.0198 39.1362 19.1831 39.1348C19.3463 39.1333 19.5063 39.0887 19.6468 39.0055L37.7197 28.2955C37.8577 28.2136 37.9721 28.0972 38.0515 27.9577C38.1309 27.8182 38.1727 27.6605 38.1727 27.5C38.1727 27.3395 38.1309 27.1818 38.0515 27.0423C37.9721 26.9028 37.8577 26.7864 37.7197 26.7045L19.6468 15.9945Z" fill="#FDFDFD" stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="video-item-footer fix-sb">
                                <div class="video-item-info">
                                    <div class="video-item-name fix-mb">
                                        Профилактика гриппа
                                    </div>
                                    <div class="video-item-views-data">
                                        2,9 млн просмотров <span>|</span> 6 месяцев назад
                                    </div>
                                </div>
                                <div class="video-item-dots">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="12" viewBox="0 0 3 12" fill="none">
                                        <path d="M3 1.5C3 2.32843 2.32843 3 1.5 3C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0C2.32843 0 3 0.671573 3 1.5Z" fill="black"/>
                                        <path d="M3 6C3 6.82843 2.32843 7.5 1.5 7.5C0.671573 7.5 0 6.82843 0 6C0 5.17157 0.671573 4.5 1.5 4.5C2.32843 4.5 3 5.17157 3 6Z" fill="black"/>
                                        <path d="M3 10.5C3 11.3284 2.32843 12 1.5 12C0.671573 12 0 11.3284 0 10.5C0 9.67157 0.671573 9 1.5 9C2.32843 9 3 9.67157 3 10.5Z" fill="black"/>
                                    </svg>
                                    <div class="dots-dropdown-menu">
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M10.3125 2.75V14.1371L6.68181 10.505L5.6925 11.495L10.505 16.3075L10.9993 16.7798L11.4936 16.3075L16.3061 11.495L15.3175 10.5064L11.6875 14.1364V2.75H10.3125ZM4.8125 17.875V19.25H17.1875V17.875H4.8125Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Скачать
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M14.3333 8.2C7.41867 7.542 2.97422 10.342 1 16.6C4.76667 12.204 9.45467 11.3948 14.3333 13.8V18L21 11L14.3333 4V8.2Z" stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span>
                                            Поделиться
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 22C4.93209 22 0 17.0679 0 11C0 4.93209 4.93209 0 11 0C17.0679 0 22 4.93209 22 11C22 17.0679 17.0679 22 11 22ZM11 1.53488C5.7814 1.53488 1.53488 5.7814 1.53488 11C1.53488 16.2186 5.7814 20.4651 11 20.4651C16.2186 20.4651 20.4651 16.2186 20.4651 11C20.4651 5.7814 16.2186 1.53488 11 1.53488Z" fill="black"/>
                                                <path d="M10.9999 12.7907C10.5804 12.7907 10.2325 12.4428 10.2325 12.0232V6.90697C10.2325 6.48743 10.5804 6.13953 10.9999 6.13953C11.4195 6.13953 11.7674 6.48743 11.7674 6.90697V12.0232C11.7674 12.4428 11.4195 12.7907 10.9999 12.7907ZM10.9999 16.1163C10.8669 16.1163 10.7339 16.0856 10.6111 16.0344C10.4883 15.9832 10.3758 15.9116 10.2734 15.8195C10.1813 15.7172 10.1097 15.6149 10.0585 15.4818C10.0074 15.3591 9.97668 15.226 9.97668 15.093C9.97668 14.96 10.0074 14.827 10.0585 14.7042C10.1097 14.5814 10.1813 14.4688 10.2734 14.3665C10.3758 14.2744 10.4883 14.2028 10.6111 14.1516C10.8602 14.0493 11.1397 14.0493 11.3888 14.1516C11.5116 14.2028 11.6241 14.2744 11.7265 14.3665C11.8185 14.4688 11.8902 14.5814 11.9413 14.7042C11.9925 14.827 12.0232 14.96 12.0232 15.093C12.0232 15.226 11.9925 15.3591 11.9413 15.4818C11.8902 15.6149 11.8185 15.7172 11.7265 15.8195C11.6241 15.9116 11.5116 15.9832 11.3888 16.0344C11.266 16.0856 11.133 16.1163 10.9999 16.1163Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Пожаловаться
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video-item-container fix-h">
                            <div class="video-item-img">
                                <img src="img/video-item-2.png">
                                <div class="video-duration">
                                    <span>3:00</span>
                                </div>
                                <div class="video-start-stop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                        <circle cx="27.5" cy="27.5" r="26.5" stroke="#FDFDFD" stroke-width="2"/>
                                        <path d="M19.6468 15.9945C19.5063 15.9113 19.3463 15.8667 19.1831 15.8652C19.0198 15.8638 18.8591 15.9056 18.7172 15.9864C18.5753 16.0672 18.4574 16.1841 18.3753 16.3253C18.2933 16.4664 18.25 16.6268 18.25 16.79V38.21C18.25 38.3732 18.2933 38.5336 18.3753 38.6747C18.4574 38.8159 18.5753 38.9328 18.7172 39.0136C18.8591 39.0944 19.0198 39.1362 19.1831 39.1348C19.3463 39.1333 19.5063 39.0887 19.6468 39.0055L37.7197 28.2955C37.8577 28.2136 37.9721 28.0972 38.0515 27.9577C38.1309 27.8182 38.1727 27.6605 38.1727 27.5C38.1727 27.3395 38.1309 27.1818 38.0515 27.0423C37.9721 26.9028 37.8577 26.7864 37.7197 26.7045L19.6468 15.9945Z" fill="#FDFDFD" stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="video-item-footer fix-sb">
                                <div class="video-item-info">
                                    <div class="video-item-name fix-mb">
                                        Профилактика гриппа
                                    </div>
                                    <div class="video-item-views-data">
                                        2,9 млн просмотров <span>|</span> 6 месяцев назад
                                    </div>
                                </div>
                                <div class="video-item-dots">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="12" viewBox="0 0 3 12" fill="none">
                                        <path d="M3 1.5C3 2.32843 2.32843 3 1.5 3C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0C2.32843 0 3 0.671573 3 1.5Z" fill="black"/>
                                        <path d="M3 6C3 6.82843 2.32843 7.5 1.5 7.5C0.671573 7.5 0 6.82843 0 6C0 5.17157 0.671573 4.5 1.5 4.5C2.32843 4.5 3 5.17157 3 6Z" fill="black"/>
                                        <path d="M3 10.5C3 11.3284 2.32843 12 1.5 12C0.671573 12 0 11.3284 0 10.5C0 9.67157 0.671573 9 1.5 9C2.32843 9 3 9.67157 3 10.5Z" fill="black"/>
                                    </svg>
                                    <div class="dots-dropdown-menu">
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M10.3125 2.75V14.1371L6.68181 10.505L5.6925 11.495L10.505 16.3075L10.9993 16.7798L11.4936 16.3075L16.3061 11.495L15.3175 10.5064L11.6875 14.1364V2.75H10.3125ZM4.8125 17.875V19.25H17.1875V17.875H4.8125Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Скачать
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M14.3333 8.2C7.41867 7.542 2.97422 10.342 1 16.6C4.76667 12.204 9.45467 11.3948 14.3333 13.8V18L21 11L14.3333 4V8.2Z" stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span>
                                            Поделиться
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 22C4.93209 22 0 17.0679 0 11C0 4.93209 4.93209 0 11 0C17.0679 0 22 4.93209 22 11C22 17.0679 17.0679 22 11 22ZM11 1.53488C5.7814 1.53488 1.53488 5.7814 1.53488 11C1.53488 16.2186 5.7814 20.4651 11 20.4651C16.2186 20.4651 20.4651 16.2186 20.4651 11C20.4651 5.7814 16.2186 1.53488 11 1.53488Z" fill="black"/>
                                                <path d="M10.9999 12.7907C10.5804 12.7907 10.2325 12.4428 10.2325 12.0232V6.90697C10.2325 6.48743 10.5804 6.13953 10.9999 6.13953C11.4195 6.13953 11.7674 6.48743 11.7674 6.90697V12.0232C11.7674 12.4428 11.4195 12.7907 10.9999 12.7907ZM10.9999 16.1163C10.8669 16.1163 10.7339 16.0856 10.6111 16.0344C10.4883 15.9832 10.3758 15.9116 10.2734 15.8195C10.1813 15.7172 10.1097 15.6149 10.0585 15.4818C10.0074 15.3591 9.97668 15.226 9.97668 15.093C9.97668 14.96 10.0074 14.827 10.0585 14.7042C10.1097 14.5814 10.1813 14.4688 10.2734 14.3665C10.3758 14.2744 10.4883 14.2028 10.6111 14.1516C10.8602 14.0493 11.1397 14.0493 11.3888 14.1516C11.5116 14.2028 11.6241 14.2744 11.7265 14.3665C11.8185 14.4688 11.8902 14.5814 11.9413 14.7042C11.9925 14.827 12.0232 14.96 12.0232 15.093C12.0232 15.226 11.9925 15.3591 11.9413 15.4818C11.8902 15.6149 11.8185 15.7172 11.7265 15.8195C11.6241 15.9116 11.5116 15.9832 11.3888 16.0344C11.266 16.0856 11.133 16.1163 10.9999 16.1163Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Пожаловаться
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video-item-container fix-h">
                            <div class="video-item-img">
                                <img src="img/video-item-1.png">
                                <div class="video-duration">
                                    <span>3:00</span>
                                </div>
                                <div class="video-start-stop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                        <circle cx="27.5" cy="27.5" r="26.5" stroke="#FDFDFD" stroke-width="2"/>
                                        <path d="M19.6468 15.9945C19.5063 15.9113 19.3463 15.8667 19.1831 15.8652C19.0198 15.8638 18.8591 15.9056 18.7172 15.9864C18.5753 16.0672 18.4574 16.1841 18.3753 16.3253C18.2933 16.4664 18.25 16.6268 18.25 16.79V38.21C18.25 38.3732 18.2933 38.5336 18.3753 38.6747C18.4574 38.8159 18.5753 38.9328 18.7172 39.0136C18.8591 39.0944 19.0198 39.1362 19.1831 39.1348C19.3463 39.1333 19.5063 39.0887 19.6468 39.0055L37.7197 28.2955C37.8577 28.2136 37.9721 28.0972 38.0515 27.9577C38.1309 27.8182 38.1727 27.6605 38.1727 27.5C38.1727 27.3395 38.1309 27.1818 38.0515 27.0423C37.9721 26.9028 37.8577 26.7864 37.7197 26.7045L19.6468 15.9945Z" fill="#FDFDFD" stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="video-item-footer fix-sb">
                                <div class="video-item-info">
                                    <div class="video-item-name fix-mb">
                                        День из жизни "Мосмедпроф": как мы работаем
                                    </div>
                                    <div class="video-item-views-data">
                                        2,9 млн просмотров <span>|</span> 6 месяцев назад
                                    </div>
                                </div>
                                <div class="video-item-dots">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="12" viewBox="0 0 3 12" fill="none">
                                        <path d="M3 1.5C3 2.32843 2.32843 3 1.5 3C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0C2.32843 0 3 0.671573 3 1.5Z" fill="black"/>
                                        <path d="M3 6C3 6.82843 2.32843 7.5 1.5 7.5C0.671573 7.5 0 6.82843 0 6C0 5.17157 0.671573 4.5 1.5 4.5C2.32843 4.5 3 5.17157 3 6Z" fill="black"/>
                                        <path d="M3 10.5C3 11.3284 2.32843 12 1.5 12C0.671573 12 0 11.3284 0 10.5C0 9.67157 0.671573 9 1.5 9C2.32843 9 3 9.67157 3 10.5Z" fill="black"/>
                                    </svg>
                                    <div class="dots-dropdown-menu">
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M10.3125 2.75V14.1371L6.68181 10.505L5.6925 11.495L10.505 16.3075L10.9993 16.7798L11.4936 16.3075L16.3061 11.495L15.3175 10.5064L11.6875 14.1364V2.75H10.3125ZM4.8125 17.875V19.25H17.1875V17.875H4.8125Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Скачать
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M14.3333 8.2C7.41867 7.542 2.97422 10.342 1 16.6C4.76667 12.204 9.45467 11.3948 14.3333 13.8V18L21 11L14.3333 4V8.2Z" stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span>
                                            Поделиться
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 22C4.93209 22 0 17.0679 0 11C0 4.93209 4.93209 0 11 0C17.0679 0 22 4.93209 22 11C22 17.0679 17.0679 22 11 22ZM11 1.53488C5.7814 1.53488 1.53488 5.7814 1.53488 11C1.53488 16.2186 5.7814 20.4651 11 20.4651C16.2186 20.4651 20.4651 16.2186 20.4651 11C20.4651 5.7814 16.2186 1.53488 11 1.53488Z" fill="black"/>
                                                <path d="M10.9999 12.7907C10.5804 12.7907 10.2325 12.4428 10.2325 12.0232V6.90697C10.2325 6.48743 10.5804 6.13953 10.9999 6.13953C11.4195 6.13953 11.7674 6.48743 11.7674 6.90697V12.0232C11.7674 12.4428 11.4195 12.7907 10.9999 12.7907ZM10.9999 16.1163C10.8669 16.1163 10.7339 16.0856 10.6111 16.0344C10.4883 15.9832 10.3758 15.9116 10.2734 15.8195C10.1813 15.7172 10.1097 15.6149 10.0585 15.4818C10.0074 15.3591 9.97668 15.226 9.97668 15.093C9.97668 14.96 10.0074 14.827 10.0585 14.7042C10.1097 14.5814 10.1813 14.4688 10.2734 14.3665C10.3758 14.2744 10.4883 14.2028 10.6111 14.1516C10.8602 14.0493 11.1397 14.0493 11.3888 14.1516C11.5116 14.2028 11.6241 14.2744 11.7265 14.3665C11.8185 14.4688 11.8902 14.5814 11.9413 14.7042C11.9925 14.827 12.0232 14.96 12.0232 15.093C12.0232 15.226 11.9925 15.3591 11.9413 15.4818C11.8902 15.6149 11.8185 15.7172 11.7265 15.8195C11.6241 15.9116 11.5116 15.9832 11.3888 16.0344C11.266 16.0856 11.133 16.1163 10.9999 16.1163Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Пожаловаться
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video-item-container fix-h">
                            <div class="video-item-img">
                                <img src="img/video-item-2.png">
                                <div class="video-duration">
                                    <span>3:00</span>
                                </div>
                                <div class="video-start-stop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                        <circle cx="27.5" cy="27.5" r="26.5" stroke="#FDFDFD" stroke-width="2"/>
                                        <path d="M19.6468 15.9945C19.5063 15.9113 19.3463 15.8667 19.1831 15.8652C19.0198 15.8638 18.8591 15.9056 18.7172 15.9864C18.5753 16.0672 18.4574 16.1841 18.3753 16.3253C18.2933 16.4664 18.25 16.6268 18.25 16.79V38.21C18.25 38.3732 18.2933 38.5336 18.3753 38.6747C18.4574 38.8159 18.5753 38.9328 18.7172 39.0136C18.8591 39.0944 19.0198 39.1362 19.1831 39.1348C19.3463 39.1333 19.5063 39.0887 19.6468 39.0055L37.7197 28.2955C37.8577 28.2136 37.9721 28.0972 38.0515 27.9577C38.1309 27.8182 38.1727 27.6605 38.1727 27.5C38.1727 27.3395 38.1309 27.1818 38.0515 27.0423C37.9721 26.9028 37.8577 26.7864 37.7197 26.7045L19.6468 15.9945Z" fill="#FDFDFD" stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="video-item-footer fix-sb">
                                <div class="video-item-info">
                                    <div class="video-item-name fix-mb">
                                        Профилактика гриппа
                                    </div>
                                    <div class="video-item-views-data">
                                        2,9 млн просмотров <span>|</span> 6 месяцев назад
                                    </div>
                                </div>
                                <div class="video-item-dots">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="12" viewBox="0 0 3 12" fill="none">
                                        <path d="M3 1.5C3 2.32843 2.32843 3 1.5 3C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0C2.32843 0 3 0.671573 3 1.5Z" fill="black"/>
                                        <path d="M3 6C3 6.82843 2.32843 7.5 1.5 7.5C0.671573 7.5 0 6.82843 0 6C0 5.17157 0.671573 4.5 1.5 4.5C2.32843 4.5 3 5.17157 3 6Z" fill="black"/>
                                        <path d="M3 10.5C3 11.3284 2.32843 12 1.5 12C0.671573 12 0 11.3284 0 10.5C0 9.67157 0.671573 9 1.5 9C2.32843 9 3 9.67157 3 10.5Z" fill="black"/>
                                    </svg>
                                    <div class="dots-dropdown-menu">
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M10.3125 2.75V14.1371L6.68181 10.505L5.6925 11.495L10.505 16.3075L10.9993 16.7798L11.4936 16.3075L16.3061 11.495L15.3175 10.5064L11.6875 14.1364V2.75H10.3125ZM4.8125 17.875V19.25H17.1875V17.875H4.8125Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Скачать
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M14.3333 8.2C7.41867 7.542 2.97422 10.342 1 16.6C4.76667 12.204 9.45467 11.3948 14.3333 13.8V18L21 11L14.3333 4V8.2Z" stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span>
                                            Поделиться
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 22C4.93209 22 0 17.0679 0 11C0 4.93209 4.93209 0 11 0C17.0679 0 22 4.93209 22 11C22 17.0679 17.0679 22 11 22ZM11 1.53488C5.7814 1.53488 1.53488 5.7814 1.53488 11C1.53488 16.2186 5.7814 20.4651 11 20.4651C16.2186 20.4651 20.4651 16.2186 20.4651 11C20.4651 5.7814 16.2186 1.53488 11 1.53488Z" fill="black"/>
                                                <path d="M10.9999 12.7907C10.5804 12.7907 10.2325 12.4428 10.2325 12.0232V6.90697C10.2325 6.48743 10.5804 6.13953 10.9999 6.13953C11.4195 6.13953 11.7674 6.48743 11.7674 6.90697V12.0232C11.7674 12.4428 11.4195 12.7907 10.9999 12.7907ZM10.9999 16.1163C10.8669 16.1163 10.7339 16.0856 10.6111 16.0344C10.4883 15.9832 10.3758 15.9116 10.2734 15.8195C10.1813 15.7172 10.1097 15.6149 10.0585 15.4818C10.0074 15.3591 9.97668 15.226 9.97668 15.093C9.97668 14.96 10.0074 14.827 10.0585 14.7042C10.1097 14.5814 10.1813 14.4688 10.2734 14.3665C10.3758 14.2744 10.4883 14.2028 10.6111 14.1516C10.8602 14.0493 11.1397 14.0493 11.3888 14.1516C11.5116 14.2028 11.6241 14.2744 11.7265 14.3665C11.8185 14.4688 11.8902 14.5814 11.9413 14.7042C11.9925 14.827 12.0232 14.96 12.0232 15.093C12.0232 15.226 11.9925 15.3591 11.9413 15.4818C11.8902 15.6149 11.8185 15.7172 11.7265 15.8195C11.6241 15.9116 11.5116 15.9832 11.3888 16.0344C11.266 16.0856 11.133 16.1163 10.9999 16.1163Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Пожаловаться
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video-item-container fix-h">
                            <div class="video-item-img">
                                <img src="img/video-item-1.png">
                                <div class="video-duration">
                                    <span>3:00</span>
                                </div>
                                <div class="video-start-stop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                        <circle cx="27.5" cy="27.5" r="26.5" stroke="#FDFDFD" stroke-width="2"/>
                                        <path d="M19.6468 15.9945C19.5063 15.9113 19.3463 15.8667 19.1831 15.8652C19.0198 15.8638 18.8591 15.9056 18.7172 15.9864C18.5753 16.0672 18.4574 16.1841 18.3753 16.3253C18.2933 16.4664 18.25 16.6268 18.25 16.79V38.21C18.25 38.3732 18.2933 38.5336 18.3753 38.6747C18.4574 38.8159 18.5753 38.9328 18.7172 39.0136C18.8591 39.0944 19.0198 39.1362 19.1831 39.1348C19.3463 39.1333 19.5063 39.0887 19.6468 39.0055L37.7197 28.2955C37.8577 28.2136 37.9721 28.0972 38.0515 27.9577C38.1309 27.8182 38.1727 27.6605 38.1727 27.5C38.1727 27.3395 38.1309 27.1818 38.0515 27.0423C37.9721 26.9028 37.8577 26.7864 37.7197 26.7045L19.6468 15.9945Z" fill="#FDFDFD" stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="video-item-footer fix-sb">
                                <div class="video-item-info">
                                    <div class="video-item-name fix-mb">
                                        День из жизни "Мосмедпроф": как мы работаем
                                    </div>
                                    <div class="video-item-views-data">
                                        2,9 млн просмотров <span>|</span> 6 месяцев назад
                                    </div>
                                </div>
                                <div class="video-item-dots">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="12" viewBox="0 0 3 12" fill="none">
                                        <path d="M3 1.5C3 2.32843 2.32843 3 1.5 3C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0C2.32843 0 3 0.671573 3 1.5Z" fill="black"/>
                                        <path d="M3 6C3 6.82843 2.32843 7.5 1.5 7.5C0.671573 7.5 0 6.82843 0 6C0 5.17157 0.671573 4.5 1.5 4.5C2.32843 4.5 3 5.17157 3 6Z" fill="black"/>
                                        <path d="M3 10.5C3 11.3284 2.32843 12 1.5 12C0.671573 12 0 11.3284 0 10.5C0 9.67157 0.671573 9 1.5 9C2.32843 9 3 9.67157 3 10.5Z" fill="black"/>
                                    </svg>
                                    <div class="dots-dropdown-menu">
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M10.3125 2.75V14.1371L6.68181 10.505L5.6925 11.495L10.505 16.3075L10.9993 16.7798L11.4936 16.3075L16.3061 11.495L15.3175 10.5064L11.6875 14.1364V2.75H10.3125ZM4.8125 17.875V19.25H17.1875V17.875H4.8125Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Скачать
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M14.3333 8.2C7.41867 7.542 2.97422 10.342 1 16.6C4.76667 12.204 9.45467 11.3948 14.3333 13.8V18L21 11L14.3333 4V8.2Z" stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span>
                                            Поделиться
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 22C4.93209 22 0 17.0679 0 11C0 4.93209 4.93209 0 11 0C17.0679 0 22 4.93209 22 11C22 17.0679 17.0679 22 11 22ZM11 1.53488C5.7814 1.53488 1.53488 5.7814 1.53488 11C1.53488 16.2186 5.7814 20.4651 11 20.4651C16.2186 20.4651 20.4651 16.2186 20.4651 11C20.4651 5.7814 16.2186 1.53488 11 1.53488Z" fill="black"/>
                                                <path d="M10.9999 12.7907C10.5804 12.7907 10.2325 12.4428 10.2325 12.0232V6.90697C10.2325 6.48743 10.5804 6.13953 10.9999 6.13953C11.4195 6.13953 11.7674 6.48743 11.7674 6.90697V12.0232C11.7674 12.4428 11.4195 12.7907 10.9999 12.7907ZM10.9999 16.1163C10.8669 16.1163 10.7339 16.0856 10.6111 16.0344C10.4883 15.9832 10.3758 15.9116 10.2734 15.8195C10.1813 15.7172 10.1097 15.6149 10.0585 15.4818C10.0074 15.3591 9.97668 15.226 9.97668 15.093C9.97668 14.96 10.0074 14.827 10.0585 14.7042C10.1097 14.5814 10.1813 14.4688 10.2734 14.3665C10.3758 14.2744 10.4883 14.2028 10.6111 14.1516C10.8602 14.0493 11.1397 14.0493 11.3888 14.1516C11.5116 14.2028 11.6241 14.2744 11.7265 14.3665C11.8185 14.4688 11.8902 14.5814 11.9413 14.7042C11.9925 14.827 12.0232 14.96 12.0232 15.093C12.0232 15.226 11.9925 15.3591 11.9413 15.4818C11.8902 15.6149 11.8185 15.7172 11.7265 15.8195C11.6241 15.9116 11.5116 15.9832 11.3888 16.0344C11.266 16.0856 11.133 16.1163 10.9999 16.1163Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Пожаловаться
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video-item-container fix-h">
                            <div class="video-item-img">
                                <img src="img/video-item-2.png">
                                <div class="video-duration">
                                    <span>3:00</span>
                                </div>
                                <div class="video-start-stop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                        <circle cx="27.5" cy="27.5" r="26.5" stroke="#FDFDFD" stroke-width="2"/>
                                        <path d="M19.6468 15.9945C19.5063 15.9113 19.3463 15.8667 19.1831 15.8652C19.0198 15.8638 18.8591 15.9056 18.7172 15.9864C18.5753 16.0672 18.4574 16.1841 18.3753 16.3253C18.2933 16.4664 18.25 16.6268 18.25 16.79V38.21C18.25 38.3732 18.2933 38.5336 18.3753 38.6747C18.4574 38.8159 18.5753 38.9328 18.7172 39.0136C18.8591 39.0944 19.0198 39.1362 19.1831 39.1348C19.3463 39.1333 19.5063 39.0887 19.6468 39.0055L37.7197 28.2955C37.8577 28.2136 37.9721 28.0972 38.0515 27.9577C38.1309 27.8182 38.1727 27.6605 38.1727 27.5C38.1727 27.3395 38.1309 27.1818 38.0515 27.0423C37.9721 26.9028 37.8577 26.7864 37.7197 26.7045L19.6468 15.9945Z" fill="#FDFDFD" stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="video-item-footer fix-sb">
                                <div class="video-item-info">
                                    <div class="video-item-name fix-mb">
                                        Профилактика гриппа
                                    </div>
                                    <div class="video-item-views-data">
                                        2,9 млн просмотров <span>|</span> 6 месяцев назад
                                    </div>
                                </div>
                                <div class="video-item-dots">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="12" viewBox="0 0 3 12" fill="none">
                                        <path d="M3 1.5C3 2.32843 2.32843 3 1.5 3C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0C2.32843 0 3 0.671573 3 1.5Z" fill="black"/>
                                        <path d="M3 6C3 6.82843 2.32843 7.5 1.5 7.5C0.671573 7.5 0 6.82843 0 6C0 5.17157 0.671573 4.5 1.5 4.5C2.32843 4.5 3 5.17157 3 6Z" fill="black"/>
                                        <path d="M3 10.5C3 11.3284 2.32843 12 1.5 12C0.671573 12 0 11.3284 0 10.5C0 9.67157 0.671573 9 1.5 9C2.32843 9 3 9.67157 3 10.5Z" fill="black"/>
                                    </svg>
                                    <div class="dots-dropdown-menu">
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M10.3125 2.75V14.1371L6.68181 10.505L5.6925 11.495L10.505 16.3075L10.9993 16.7798L11.4936 16.3075L16.3061 11.495L15.3175 10.5064L11.6875 14.1364V2.75H10.3125ZM4.8125 17.875V19.25H17.1875V17.875H4.8125Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Скачать
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M14.3333 8.2C7.41867 7.542 2.97422 10.342 1 16.6C4.76667 12.204 9.45467 11.3948 14.3333 13.8V18L21 11L14.3333 4V8.2Z" stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span>
                                            Поделиться
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 22C4.93209 22 0 17.0679 0 11C0 4.93209 4.93209 0 11 0C17.0679 0 22 4.93209 22 11C22 17.0679 17.0679 22 11 22ZM11 1.53488C5.7814 1.53488 1.53488 5.7814 1.53488 11C1.53488 16.2186 5.7814 20.4651 11 20.4651C16.2186 20.4651 20.4651 16.2186 20.4651 11C20.4651 5.7814 16.2186 1.53488 11 1.53488Z" fill="black"/>
                                                <path d="M10.9999 12.7907C10.5804 12.7907 10.2325 12.4428 10.2325 12.0232V6.90697C10.2325 6.48743 10.5804 6.13953 10.9999 6.13953C11.4195 6.13953 11.7674 6.48743 11.7674 6.90697V12.0232C11.7674 12.4428 11.4195 12.7907 10.9999 12.7907ZM10.9999 16.1163C10.8669 16.1163 10.7339 16.0856 10.6111 16.0344C10.4883 15.9832 10.3758 15.9116 10.2734 15.8195C10.1813 15.7172 10.1097 15.6149 10.0585 15.4818C10.0074 15.3591 9.97668 15.226 9.97668 15.093C9.97668 14.96 10.0074 14.827 10.0585 14.7042C10.1097 14.5814 10.1813 14.4688 10.2734 14.3665C10.3758 14.2744 10.4883 14.2028 10.6111 14.1516C10.8602 14.0493 11.1397 14.0493 11.3888 14.1516C11.5116 14.2028 11.6241 14.2744 11.7265 14.3665C11.8185 14.4688 11.8902 14.5814 11.9413 14.7042C11.9925 14.827 12.0232 14.96 12.0232 15.093C12.0232 15.226 11.9925 15.3591 11.9413 15.4818C11.8902 15.6149 11.8185 15.7172 11.7265 15.8195C11.6241 15.9116 11.5116 15.9832 11.3888 16.0344C11.266 16.0856 11.133 16.1163 10.9999 16.1163Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Пожаловаться
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video-item-container fix-h">
                            <div class="video-item-img">
                                <img src="img/video-item-1.png">
                                <div class="video-duration">
                                    <span>3:00</span>
                                </div>
                                <div class="video-start-stop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                        <circle cx="27.5" cy="27.5" r="26.5" stroke="#FDFDFD" stroke-width="2"/>
                                        <path d="M19.6468 15.9945C19.5063 15.9113 19.3463 15.8667 19.1831 15.8652C19.0198 15.8638 18.8591 15.9056 18.7172 15.9864C18.5753 16.0672 18.4574 16.1841 18.3753 16.3253C18.2933 16.4664 18.25 16.6268 18.25 16.79V38.21C18.25 38.3732 18.2933 38.5336 18.3753 38.6747C18.4574 38.8159 18.5753 38.9328 18.7172 39.0136C18.8591 39.0944 19.0198 39.1362 19.1831 39.1348C19.3463 39.1333 19.5063 39.0887 19.6468 39.0055L37.7197 28.2955C37.8577 28.2136 37.9721 28.0972 38.0515 27.9577C38.1309 27.8182 38.1727 27.6605 38.1727 27.5C38.1727 27.3395 38.1309 27.1818 38.0515 27.0423C37.9721 26.9028 37.8577 26.7864 37.7197 26.7045L19.6468 15.9945Z" fill="#FDFDFD" stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="video-item-footer fix-sb">
                                <div class="video-item-info">
                                    <div class="video-item-name fix-mb">
                                        День из жизни "Мосмедпроф": как мы работаем
                                    </div>
                                    <div class="video-item-views-data">
                                        2,9 млн просмотров <span>|</span> 6 месяцев назад
                                    </div>
                                </div>
                                <div class="video-item-dots">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="12" viewBox="0 0 3 12" fill="none">
                                        <path d="M3 1.5C3 2.32843 2.32843 3 1.5 3C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0C2.32843 0 3 0.671573 3 1.5Z" fill="black"/>
                                        <path d="M3 6C3 6.82843 2.32843 7.5 1.5 7.5C0.671573 7.5 0 6.82843 0 6C0 5.17157 0.671573 4.5 1.5 4.5C2.32843 4.5 3 5.17157 3 6Z" fill="black"/>
                                        <path d="M3 10.5C3 11.3284 2.32843 12 1.5 12C0.671573 12 0 11.3284 0 10.5C0 9.67157 0.671573 9 1.5 9C2.32843 9 3 9.67157 3 10.5Z" fill="black"/>
                                    </svg>
                                    <div class="dots-dropdown-menu">
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M10.3125 2.75V14.1371L6.68181 10.505L5.6925 11.495L10.505 16.3075L10.9993 16.7798L11.4936 16.3075L16.3061 11.495L15.3175 10.5064L11.6875 14.1364V2.75H10.3125ZM4.8125 17.875V19.25H17.1875V17.875H4.8125Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Скачать
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M14.3333 8.2C7.41867 7.542 2.97422 10.342 1 16.6C4.76667 12.204 9.45467 11.3948 14.3333 13.8V18L21 11L14.3333 4V8.2Z" stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span>
                                            Поделиться
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 22C4.93209 22 0 17.0679 0 11C0 4.93209 4.93209 0 11 0C17.0679 0 22 4.93209 22 11C22 17.0679 17.0679 22 11 22ZM11 1.53488C5.7814 1.53488 1.53488 5.7814 1.53488 11C1.53488 16.2186 5.7814 20.4651 11 20.4651C16.2186 20.4651 20.4651 16.2186 20.4651 11C20.4651 5.7814 16.2186 1.53488 11 1.53488Z" fill="black"/>
                                                <path d="M10.9999 12.7907C10.5804 12.7907 10.2325 12.4428 10.2325 12.0232V6.90697C10.2325 6.48743 10.5804 6.13953 10.9999 6.13953C11.4195 6.13953 11.7674 6.48743 11.7674 6.90697V12.0232C11.7674 12.4428 11.4195 12.7907 10.9999 12.7907ZM10.9999 16.1163C10.8669 16.1163 10.7339 16.0856 10.6111 16.0344C10.4883 15.9832 10.3758 15.9116 10.2734 15.8195C10.1813 15.7172 10.1097 15.6149 10.0585 15.4818C10.0074 15.3591 9.97668 15.226 9.97668 15.093C9.97668 14.96 10.0074 14.827 10.0585 14.7042C10.1097 14.5814 10.1813 14.4688 10.2734 14.3665C10.3758 14.2744 10.4883 14.2028 10.6111 14.1516C10.8602 14.0493 11.1397 14.0493 11.3888 14.1516C11.5116 14.2028 11.6241 14.2744 11.7265 14.3665C11.8185 14.4688 11.8902 14.5814 11.9413 14.7042C11.9925 14.827 12.0232 14.96 12.0232 15.093C12.0232 15.226 11.9925 15.3591 11.9413 15.4818C11.8902 15.6149 11.8185 15.7172 11.7265 15.8195C11.6241 15.9116 11.5116 15.9832 11.3888 16.0344C11.266 16.0856 11.133 16.1163 10.9999 16.1163Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Пожаловаться
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video-item-container fix-h">
                            <div class="video-item-img">
                                <img src="img/video-item-2.png">
                                <div class="video-duration">
                                    <span>3:00</span>
                                </div>
                                <div class="video-start-stop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                        <circle cx="27.5" cy="27.5" r="26.5" stroke="#FDFDFD" stroke-width="2"/>
                                        <path d="M19.6468 15.9945C19.5063 15.9113 19.3463 15.8667 19.1831 15.8652C19.0198 15.8638 18.8591 15.9056 18.7172 15.9864C18.5753 16.0672 18.4574 16.1841 18.3753 16.3253C18.2933 16.4664 18.25 16.6268 18.25 16.79V38.21C18.25 38.3732 18.2933 38.5336 18.3753 38.6747C18.4574 38.8159 18.5753 38.9328 18.7172 39.0136C18.8591 39.0944 19.0198 39.1362 19.1831 39.1348C19.3463 39.1333 19.5063 39.0887 19.6468 39.0055L37.7197 28.2955C37.8577 28.2136 37.9721 28.0972 38.0515 27.9577C38.1309 27.8182 38.1727 27.6605 38.1727 27.5C38.1727 27.3395 38.1309 27.1818 38.0515 27.0423C37.9721 26.9028 37.8577 26.7864 37.7197 26.7045L19.6468 15.9945Z" fill="#FDFDFD" stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="video-item-footer fix-sb">
                                <div class="video-item-info">
                                    <div class="video-item-name fix-mb">
                                        Профилактика гриппа
                                    </div>
                                    <div class="video-item-views-data">
                                        2,9 млн просмотров <span>|</span> 6 месяцев назад
                                    </div>
                                </div>
                                <div class="video-item-dots">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="12" viewBox="0 0 3 12" fill="none">
                                        <path d="M3 1.5C3 2.32843 2.32843 3 1.5 3C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0C2.32843 0 3 0.671573 3 1.5Z" fill="black"/>
                                        <path d="M3 6C3 6.82843 2.32843 7.5 1.5 7.5C0.671573 7.5 0 6.82843 0 6C0 5.17157 0.671573 4.5 1.5 4.5C2.32843 4.5 3 5.17157 3 6Z" fill="black"/>
                                        <path d="M3 10.5C3 11.3284 2.32843 12 1.5 12C0.671573 12 0 11.3284 0 10.5C0 9.67157 0.671573 9 1.5 9C2.32843 9 3 9.67157 3 10.5Z" fill="black"/>
                                    </svg>
                                    <div class="dots-dropdown-menu">
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M10.3125 2.75V14.1371L6.68181 10.505L5.6925 11.495L10.505 16.3075L10.9993 16.7798L11.4936 16.3075L16.3061 11.495L15.3175 10.5064L11.6875 14.1364V2.75H10.3125ZM4.8125 17.875V19.25H17.1875V17.875H4.8125Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Скачать
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M14.3333 8.2C7.41867 7.542 2.97422 10.342 1 16.6C4.76667 12.204 9.45467 11.3948 14.3333 13.8V18L21 11L14.3333 4V8.2Z" stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span>
                                            Поделиться
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 22C4.93209 22 0 17.0679 0 11C0 4.93209 4.93209 0 11 0C17.0679 0 22 4.93209 22 11C22 17.0679 17.0679 22 11 22ZM11 1.53488C5.7814 1.53488 1.53488 5.7814 1.53488 11C1.53488 16.2186 5.7814 20.4651 11 20.4651C16.2186 20.4651 20.4651 16.2186 20.4651 11C20.4651 5.7814 16.2186 1.53488 11 1.53488Z" fill="black"/>
                                                <path d="M10.9999 12.7907C10.5804 12.7907 10.2325 12.4428 10.2325 12.0232V6.90697C10.2325 6.48743 10.5804 6.13953 10.9999 6.13953C11.4195 6.13953 11.7674 6.48743 11.7674 6.90697V12.0232C11.7674 12.4428 11.4195 12.7907 10.9999 12.7907ZM10.9999 16.1163C10.8669 16.1163 10.7339 16.0856 10.6111 16.0344C10.4883 15.9832 10.3758 15.9116 10.2734 15.8195C10.1813 15.7172 10.1097 15.6149 10.0585 15.4818C10.0074 15.3591 9.97668 15.226 9.97668 15.093C9.97668 14.96 10.0074 14.827 10.0585 14.7042C10.1097 14.5814 10.1813 14.4688 10.2734 14.3665C10.3758 14.2744 10.4883 14.2028 10.6111 14.1516C10.8602 14.0493 11.1397 14.0493 11.3888 14.1516C11.5116 14.2028 11.6241 14.2744 11.7265 14.3665C11.8185 14.4688 11.8902 14.5814 11.9413 14.7042C11.9925 14.827 12.0232 14.96 12.0232 15.093C12.0232 15.226 11.9925 15.3591 11.9413 15.4818C11.8902 15.6149 11.8185 15.7172 11.7265 15.8195C11.6241 15.9116 11.5116 15.9832 11.3888 16.0344C11.266 16.0856 11.133 16.1163 10.9999 16.1163Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Пожаловаться
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video-item-container fix-h">
                            <div class="video-item-img">
                                <img src="img/video-item-1.png">
                                <div class="video-duration">
                                    <span>3:00</span>
                                </div>
                                <div class="video-start-stop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                        <circle cx="27.5" cy="27.5" r="26.5" stroke="#FDFDFD" stroke-width="2"/>
                                        <path d="M19.6468 15.9945C19.5063 15.9113 19.3463 15.8667 19.1831 15.8652C19.0198 15.8638 18.8591 15.9056 18.7172 15.9864C18.5753 16.0672 18.4574 16.1841 18.3753 16.3253C18.2933 16.4664 18.25 16.6268 18.25 16.79V38.21C18.25 38.3732 18.2933 38.5336 18.3753 38.6747C18.4574 38.8159 18.5753 38.9328 18.7172 39.0136C18.8591 39.0944 19.0198 39.1362 19.1831 39.1348C19.3463 39.1333 19.5063 39.0887 19.6468 39.0055L37.7197 28.2955C37.8577 28.2136 37.9721 28.0972 38.0515 27.9577C38.1309 27.8182 38.1727 27.6605 38.1727 27.5C38.1727 27.3395 38.1309 27.1818 38.0515 27.0423C37.9721 26.9028 37.8577 26.7864 37.7197 26.7045L19.6468 15.9945Z" fill="#FDFDFD" stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="video-item-footer fix-sb">
                                <div class="video-item-info">
                                    <div class="video-item-name fix-mb">
                                        День из жизни "Мосмедпроф": как мы работаем
                                    </div>
                                    <div class="video-item-views-data">
                                        2,9 млн просмотров <span>|</span> 6 месяцев назад
                                    </div>
                                </div>
                                <div class="video-item-dots">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="12" viewBox="0 0 3 12" fill="none">
                                        <path d="M3 1.5C3 2.32843 2.32843 3 1.5 3C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0C2.32843 0 3 0.671573 3 1.5Z" fill="black"/>
                                        <path d="M3 6C3 6.82843 2.32843 7.5 1.5 7.5C0.671573 7.5 0 6.82843 0 6C0 5.17157 0.671573 4.5 1.5 4.5C2.32843 4.5 3 5.17157 3 6Z" fill="black"/>
                                        <path d="M3 10.5C3 11.3284 2.32843 12 1.5 12C0.671573 12 0 11.3284 0 10.5C0 9.67157 0.671573 9 1.5 9C2.32843 9 3 9.67157 3 10.5Z" fill="black"/>
                                    </svg>
                                    <div class="dots-dropdown-menu">
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M10.3125 2.75V14.1371L6.68181 10.505L5.6925 11.495L10.505 16.3075L10.9993 16.7798L11.4936 16.3075L16.3061 11.495L15.3175 10.5064L11.6875 14.1364V2.75H10.3125ZM4.8125 17.875V19.25H17.1875V17.875H4.8125Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Скачать
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M14.3333 8.2C7.41867 7.542 2.97422 10.342 1 16.6C4.76667 12.204 9.45467 11.3948 14.3333 13.8V18L21 11L14.3333 4V8.2Z" stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span>
                                            Поделиться
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 22C4.93209 22 0 17.0679 0 11C0 4.93209 4.93209 0 11 0C17.0679 0 22 4.93209 22 11C22 17.0679 17.0679 22 11 22ZM11 1.53488C5.7814 1.53488 1.53488 5.7814 1.53488 11C1.53488 16.2186 5.7814 20.4651 11 20.4651C16.2186 20.4651 20.4651 16.2186 20.4651 11C20.4651 5.7814 16.2186 1.53488 11 1.53488Z" fill="black"/>
                                                <path d="M10.9999 12.7907C10.5804 12.7907 10.2325 12.4428 10.2325 12.0232V6.90697C10.2325 6.48743 10.5804 6.13953 10.9999 6.13953C11.4195 6.13953 11.7674 6.48743 11.7674 6.90697V12.0232C11.7674 12.4428 11.4195 12.7907 10.9999 12.7907ZM10.9999 16.1163C10.8669 16.1163 10.7339 16.0856 10.6111 16.0344C10.4883 15.9832 10.3758 15.9116 10.2734 15.8195C10.1813 15.7172 10.1097 15.6149 10.0585 15.4818C10.0074 15.3591 9.97668 15.226 9.97668 15.093C9.97668 14.96 10.0074 14.827 10.0585 14.7042C10.1097 14.5814 10.1813 14.4688 10.2734 14.3665C10.3758 14.2744 10.4883 14.2028 10.6111 14.1516C10.8602 14.0493 11.1397 14.0493 11.3888 14.1516C11.5116 14.2028 11.6241 14.2744 11.7265 14.3665C11.8185 14.4688 11.8902 14.5814 11.9413 14.7042C11.9925 14.827 12.0232 14.96 12.0232 15.093C12.0232 15.226 11.9925 15.3591 11.9413 15.4818C11.8902 15.6149 11.8185 15.7172 11.7265 15.8195C11.6241 15.9116 11.5116 15.9832 11.3888 16.0344C11.266 16.0856 11.133 16.1163 10.9999 16.1163Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Пожаловаться
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video-item-container fix-h">
                            <div class="video-item-img">
                                <img src="img/video-item-2.png">
                                <div class="video-duration">
                                    <span>3:00</span>
                                </div>
                                <div class="video-start-stop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                        <circle cx="27.5" cy="27.5" r="26.5" stroke="#FDFDFD" stroke-width="2"/>
                                        <path d="M19.6468 15.9945C19.5063 15.9113 19.3463 15.8667 19.1831 15.8652C19.0198 15.8638 18.8591 15.9056 18.7172 15.9864C18.5753 16.0672 18.4574 16.1841 18.3753 16.3253C18.2933 16.4664 18.25 16.6268 18.25 16.79V38.21C18.25 38.3732 18.2933 38.5336 18.3753 38.6747C18.4574 38.8159 18.5753 38.9328 18.7172 39.0136C18.8591 39.0944 19.0198 39.1362 19.1831 39.1348C19.3463 39.1333 19.5063 39.0887 19.6468 39.0055L37.7197 28.2955C37.8577 28.2136 37.9721 28.0972 38.0515 27.9577C38.1309 27.8182 38.1727 27.6605 38.1727 27.5C38.1727 27.3395 38.1309 27.1818 38.0515 27.0423C37.9721 26.9028 37.8577 26.7864 37.7197 26.7045L19.6468 15.9945Z" fill="#FDFDFD" stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="video-item-footer fix-sb">
                                <div class="video-item-info">
                                    <div class="video-item-name fix-mb">
                                        Профилактика гриппа
                                    </div>
                                    <div class="video-item-views-data">
                                        2,9 млн просмотров <span>|</span> 6 месяцев назад
                                    </div>
                                </div>
                                <div class="video-item-dots">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="12" viewBox="0 0 3 12" fill="none">
                                        <path d="M3 1.5C3 2.32843 2.32843 3 1.5 3C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0C2.32843 0 3 0.671573 3 1.5Z" fill="black"/>
                                        <path d="M3 6C3 6.82843 2.32843 7.5 1.5 7.5C0.671573 7.5 0 6.82843 0 6C0 5.17157 0.671573 4.5 1.5 4.5C2.32843 4.5 3 5.17157 3 6Z" fill="black"/>
                                        <path d="M3 10.5C3 11.3284 2.32843 12 1.5 12C0.671573 12 0 11.3284 0 10.5C0 9.67157 0.671573 9 1.5 9C2.32843 9 3 9.67157 3 10.5Z" fill="black"/>
                                    </svg>
                                    <div class="dots-dropdown-menu">
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M10.3125 2.75V14.1371L6.68181 10.505L5.6925 11.495L10.505 16.3075L10.9993 16.7798L11.4936 16.3075L16.3061 11.495L15.3175 10.5064L11.6875 14.1364V2.75H10.3125ZM4.8125 17.875V19.25H17.1875V17.875H4.8125Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Скачать
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M14.3333 8.2C7.41867 7.542 2.97422 10.342 1 16.6C4.76667 12.204 9.45467 11.3948 14.3333 13.8V18L21 11L14.3333 4V8.2Z" stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span>
                                            Поделиться
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 22C4.93209 22 0 17.0679 0 11C0 4.93209 4.93209 0 11 0C17.0679 0 22 4.93209 22 11C22 17.0679 17.0679 22 11 22ZM11 1.53488C5.7814 1.53488 1.53488 5.7814 1.53488 11C1.53488 16.2186 5.7814 20.4651 11 20.4651C16.2186 20.4651 20.4651 16.2186 20.4651 11C20.4651 5.7814 16.2186 1.53488 11 1.53488Z" fill="black"/>
                                                <path d="M10.9999 12.7907C10.5804 12.7907 10.2325 12.4428 10.2325 12.0232V6.90697C10.2325 6.48743 10.5804 6.13953 10.9999 6.13953C11.4195 6.13953 11.7674 6.48743 11.7674 6.90697V12.0232C11.7674 12.4428 11.4195 12.7907 10.9999 12.7907ZM10.9999 16.1163C10.8669 16.1163 10.7339 16.0856 10.6111 16.0344C10.4883 15.9832 10.3758 15.9116 10.2734 15.8195C10.1813 15.7172 10.1097 15.6149 10.0585 15.4818C10.0074 15.3591 9.97668 15.226 9.97668 15.093C9.97668 14.96 10.0074 14.827 10.0585 14.7042C10.1097 14.5814 10.1813 14.4688 10.2734 14.3665C10.3758 14.2744 10.4883 14.2028 10.6111 14.1516C10.8602 14.0493 11.1397 14.0493 11.3888 14.1516C11.5116 14.2028 11.6241 14.2744 11.7265 14.3665C11.8185 14.4688 11.8902 14.5814 11.9413 14.7042C11.9925 14.827 12.0232 14.96 12.0232 15.093C12.0232 15.226 11.9925 15.3591 11.9413 15.4818C11.8902 15.6149 11.8185 15.7172 11.7265 15.8195C11.6241 15.9116 11.5116 15.9832 11.3888 16.0344C11.266 16.0856 11.133 16.1163 10.9999 16.1163Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Пожаловаться
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="content-3" class="content-item">
                    <div class="main-content-all-video-grid">
                        <div class="video-item-container fix-h">
                            <div class="video-item-img">
                                <img src="img/video-item-2.png">
                                <div class="video-duration">
                                    <span>3:00</span>
                                </div>
                                <div class="video-start-stop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                        <circle cx="27.5" cy="27.5" r="26.5" stroke="#FDFDFD" stroke-width="2"/>
                                        <path d="M19.6468 15.9945C19.5063 15.9113 19.3463 15.8667 19.1831 15.8652C19.0198 15.8638 18.8591 15.9056 18.7172 15.9864C18.5753 16.0672 18.4574 16.1841 18.3753 16.3253C18.2933 16.4664 18.25 16.6268 18.25 16.79V38.21C18.25 38.3732 18.2933 38.5336 18.3753 38.6747C18.4574 38.8159 18.5753 38.9328 18.7172 39.0136C18.8591 39.0944 19.0198 39.1362 19.1831 39.1348C19.3463 39.1333 19.5063 39.0887 19.6468 39.0055L37.7197 28.2955C37.8577 28.2136 37.9721 28.0972 38.0515 27.9577C38.1309 27.8182 38.1727 27.6605 38.1727 27.5C38.1727 27.3395 38.1309 27.1818 38.0515 27.0423C37.9721 26.9028 37.8577 26.7864 37.7197 26.7045L19.6468 15.9945Z" fill="#FDFDFD" stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="video-item-footer fix-sb">
                                <div class="video-item-info">
                                    <div class="video-item-name fix-mb">
                                        Профилактика гриппа
                                    </div>
                                    <div class="video-item-views-data">
                                        2,9 млн просмотров <span>|</span> 6 месяцев назад
                                    </div>
                                </div>
                                <div class="video-item-dots">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="12" viewBox="0 0 3 12" fill="none">
                                        <path d="M3 1.5C3 2.32843 2.32843 3 1.5 3C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0C2.32843 0 3 0.671573 3 1.5Z" fill="black"/>
                                        <path d="M3 6C3 6.82843 2.32843 7.5 1.5 7.5C0.671573 7.5 0 6.82843 0 6C0 5.17157 0.671573 4.5 1.5 4.5C2.32843 4.5 3 5.17157 3 6Z" fill="black"/>
                                        <path d="M3 10.5C3 11.3284 2.32843 12 1.5 12C0.671573 12 0 11.3284 0 10.5C0 9.67157 0.671573 9 1.5 9C2.32843 9 3 9.67157 3 10.5Z" fill="black"/>
                                    </svg>
                                    <div class="dots-dropdown-menu">
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M10.3125 2.75V14.1371L6.68181 10.505L5.6925 11.495L10.505 16.3075L10.9993 16.7798L11.4936 16.3075L16.3061 11.495L15.3175 10.5064L11.6875 14.1364V2.75H10.3125ZM4.8125 17.875V19.25H17.1875V17.875H4.8125Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Скачать
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M14.3333 8.2C7.41867 7.542 2.97422 10.342 1 16.6C4.76667 12.204 9.45467 11.3948 14.3333 13.8V18L21 11L14.3333 4V8.2Z" stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span>
                                            Поделиться
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 22C4.93209 22 0 17.0679 0 11C0 4.93209 4.93209 0 11 0C17.0679 0 22 4.93209 22 11C22 17.0679 17.0679 22 11 22ZM11 1.53488C5.7814 1.53488 1.53488 5.7814 1.53488 11C1.53488 16.2186 5.7814 20.4651 11 20.4651C16.2186 20.4651 20.4651 16.2186 20.4651 11C20.4651 5.7814 16.2186 1.53488 11 1.53488Z" fill="black"/>
                                                <path d="M10.9999 12.7907C10.5804 12.7907 10.2325 12.4428 10.2325 12.0232V6.90697C10.2325 6.48743 10.5804 6.13953 10.9999 6.13953C11.4195 6.13953 11.7674 6.48743 11.7674 6.90697V12.0232C11.7674 12.4428 11.4195 12.7907 10.9999 12.7907ZM10.9999 16.1163C10.8669 16.1163 10.7339 16.0856 10.6111 16.0344C10.4883 15.9832 10.3758 15.9116 10.2734 15.8195C10.1813 15.7172 10.1097 15.6149 10.0585 15.4818C10.0074 15.3591 9.97668 15.226 9.97668 15.093C9.97668 14.96 10.0074 14.827 10.0585 14.7042C10.1097 14.5814 10.1813 14.4688 10.2734 14.3665C10.3758 14.2744 10.4883 14.2028 10.6111 14.1516C10.8602 14.0493 11.1397 14.0493 11.3888 14.1516C11.5116 14.2028 11.6241 14.2744 11.7265 14.3665C11.8185 14.4688 11.8902 14.5814 11.9413 14.7042C11.9925 14.827 12.0232 14.96 12.0232 15.093C12.0232 15.226 11.9925 15.3591 11.9413 15.4818C11.8902 15.6149 11.8185 15.7172 11.7265 15.8195C11.6241 15.9116 11.5116 15.9832 11.3888 16.0344C11.266 16.0856 11.133 16.1163 10.9999 16.1163Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Пожаловаться
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video-item-container fix-h">
                            <div class="video-item-img">
                                <img src="img/video-item-2.png">
                                <div class="video-duration">
                                    <span>3:00</span>
                                </div>
                                <div class="video-start-stop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                        <circle cx="27.5" cy="27.5" r="26.5" stroke="#FDFDFD" stroke-width="2"/>
                                        <path d="M19.6468 15.9945C19.5063 15.9113 19.3463 15.8667 19.1831 15.8652C19.0198 15.8638 18.8591 15.9056 18.7172 15.9864C18.5753 16.0672 18.4574 16.1841 18.3753 16.3253C18.2933 16.4664 18.25 16.6268 18.25 16.79V38.21C18.25 38.3732 18.2933 38.5336 18.3753 38.6747C18.4574 38.8159 18.5753 38.9328 18.7172 39.0136C18.8591 39.0944 19.0198 39.1362 19.1831 39.1348C19.3463 39.1333 19.5063 39.0887 19.6468 39.0055L37.7197 28.2955C37.8577 28.2136 37.9721 28.0972 38.0515 27.9577C38.1309 27.8182 38.1727 27.6605 38.1727 27.5C38.1727 27.3395 38.1309 27.1818 38.0515 27.0423C37.9721 26.9028 37.8577 26.7864 37.7197 26.7045L19.6468 15.9945Z" fill="#FDFDFD" stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="video-item-footer fix-sb">
                                <div class="video-item-info">
                                    <div class="video-item-name fix-mb">
                                        Профилактика гриппа
                                    </div>
                                    <div class="video-item-views-data">
                                        2,9 млн просмотров <span>|</span> 6 месяцев назад
                                    </div>
                                </div>
                                <div class="video-item-dots">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="12" viewBox="0 0 3 12" fill="none">
                                        <path d="M3 1.5C3 2.32843 2.32843 3 1.5 3C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0C2.32843 0 3 0.671573 3 1.5Z" fill="black"/>
                                        <path d="M3 6C3 6.82843 2.32843 7.5 1.5 7.5C0.671573 7.5 0 6.82843 0 6C0 5.17157 0.671573 4.5 1.5 4.5C2.32843 4.5 3 5.17157 3 6Z" fill="black"/>
                                        <path d="M3 10.5C3 11.3284 2.32843 12 1.5 12C0.671573 12 0 11.3284 0 10.5C0 9.67157 0.671573 9 1.5 9C2.32843 9 3 9.67157 3 10.5Z" fill="black"/>
                                    </svg>
                                    <div class="dots-dropdown-menu">
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M10.3125 2.75V14.1371L6.68181 10.505L5.6925 11.495L10.505 16.3075L10.9993 16.7798L11.4936 16.3075L16.3061 11.495L15.3175 10.5064L11.6875 14.1364V2.75H10.3125ZM4.8125 17.875V19.25H17.1875V17.875H4.8125Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Скачать
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M14.3333 8.2C7.41867 7.542 2.97422 10.342 1 16.6C4.76667 12.204 9.45467 11.3948 14.3333 13.8V18L21 11L14.3333 4V8.2Z" stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span>
                                            Поделиться
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 22C4.93209 22 0 17.0679 0 11C0 4.93209 4.93209 0 11 0C17.0679 0 22 4.93209 22 11C22 17.0679 17.0679 22 11 22ZM11 1.53488C5.7814 1.53488 1.53488 5.7814 1.53488 11C1.53488 16.2186 5.7814 20.4651 11 20.4651C16.2186 20.4651 20.4651 16.2186 20.4651 11C20.4651 5.7814 16.2186 1.53488 11 1.53488Z" fill="black"/>
                                                <path d="M10.9999 12.7907C10.5804 12.7907 10.2325 12.4428 10.2325 12.0232V6.90697C10.2325 6.48743 10.5804 6.13953 10.9999 6.13953C11.4195 6.13953 11.7674 6.48743 11.7674 6.90697V12.0232C11.7674 12.4428 11.4195 12.7907 10.9999 12.7907ZM10.9999 16.1163C10.8669 16.1163 10.7339 16.0856 10.6111 16.0344C10.4883 15.9832 10.3758 15.9116 10.2734 15.8195C10.1813 15.7172 10.1097 15.6149 10.0585 15.4818C10.0074 15.3591 9.97668 15.226 9.97668 15.093C9.97668 14.96 10.0074 14.827 10.0585 14.7042C10.1097 14.5814 10.1813 14.4688 10.2734 14.3665C10.3758 14.2744 10.4883 14.2028 10.6111 14.1516C10.8602 14.0493 11.1397 14.0493 11.3888 14.1516C11.5116 14.2028 11.6241 14.2744 11.7265 14.3665C11.8185 14.4688 11.8902 14.5814 11.9413 14.7042C11.9925 14.827 12.0232 14.96 12.0232 15.093C12.0232 15.226 11.9925 15.3591 11.9413 15.4818C11.8902 15.6149 11.8185 15.7172 11.7265 15.8195C11.6241 15.9116 11.5116 15.9832 11.3888 16.0344C11.266 16.0856 11.133 16.1163 10.9999 16.1163Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Пожаловаться
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video-item-container fix-h">
                            <div class="video-item-img">
                                <img src="img/video-item-1.png">
                                <div class="video-duration">
                                    <span>3:00</span>
                                </div>
                                <div class="video-start-stop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                        <circle cx="27.5" cy="27.5" r="26.5" stroke="#FDFDFD" stroke-width="2"/>
                                        <path d="M19.6468 15.9945C19.5063 15.9113 19.3463 15.8667 19.1831 15.8652C19.0198 15.8638 18.8591 15.9056 18.7172 15.9864C18.5753 16.0672 18.4574 16.1841 18.3753 16.3253C18.2933 16.4664 18.25 16.6268 18.25 16.79V38.21C18.25 38.3732 18.2933 38.5336 18.3753 38.6747C18.4574 38.8159 18.5753 38.9328 18.7172 39.0136C18.8591 39.0944 19.0198 39.1362 19.1831 39.1348C19.3463 39.1333 19.5063 39.0887 19.6468 39.0055L37.7197 28.2955C37.8577 28.2136 37.9721 28.0972 38.0515 27.9577C38.1309 27.8182 38.1727 27.6605 38.1727 27.5C38.1727 27.3395 38.1309 27.1818 38.0515 27.0423C37.9721 26.9028 37.8577 26.7864 37.7197 26.7045L19.6468 15.9945Z" fill="#FDFDFD" stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="video-item-footer fix-sb">
                                <div class="video-item-info">
                                    <div class="video-item-name fix-mb">
                                        День из жизни "Мосмедпроф": как мы работаем
                                    </div>
                                    <div class="video-item-views-data">
                                        2,9 млн просмотров <span>|</span> 6 месяцев назад
                                    </div>
                                </div>
                                <div class="video-item-dots">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="12" viewBox="0 0 3 12" fill="none">
                                        <path d="M3 1.5C3 2.32843 2.32843 3 1.5 3C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0C2.32843 0 3 0.671573 3 1.5Z" fill="black"/>
                                        <path d="M3 6C3 6.82843 2.32843 7.5 1.5 7.5C0.671573 7.5 0 6.82843 0 6C0 5.17157 0.671573 4.5 1.5 4.5C2.32843 4.5 3 5.17157 3 6Z" fill="black"/>
                                        <path d="M3 10.5C3 11.3284 2.32843 12 1.5 12C0.671573 12 0 11.3284 0 10.5C0 9.67157 0.671573 9 1.5 9C2.32843 9 3 9.67157 3 10.5Z" fill="black"/>
                                    </svg>
                                    <div class="dots-dropdown-menu">
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M10.3125 2.75V14.1371L6.68181 10.505L5.6925 11.495L10.505 16.3075L10.9993 16.7798L11.4936 16.3075L16.3061 11.495L15.3175 10.5064L11.6875 14.1364V2.75H10.3125ZM4.8125 17.875V19.25H17.1875V17.875H4.8125Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Скачать
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M14.3333 8.2C7.41867 7.542 2.97422 10.342 1 16.6C4.76667 12.204 9.45467 11.3948 14.3333 13.8V18L21 11L14.3333 4V8.2Z" stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span>
                                            Поделиться
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 22C4.93209 22 0 17.0679 0 11C0 4.93209 4.93209 0 11 0C17.0679 0 22 4.93209 22 11C22 17.0679 17.0679 22 11 22ZM11 1.53488C5.7814 1.53488 1.53488 5.7814 1.53488 11C1.53488 16.2186 5.7814 20.4651 11 20.4651C16.2186 20.4651 20.4651 16.2186 20.4651 11C20.4651 5.7814 16.2186 1.53488 11 1.53488Z" fill="black"/>
                                                <path d="M10.9999 12.7907C10.5804 12.7907 10.2325 12.4428 10.2325 12.0232V6.90697C10.2325 6.48743 10.5804 6.13953 10.9999 6.13953C11.4195 6.13953 11.7674 6.48743 11.7674 6.90697V12.0232C11.7674 12.4428 11.4195 12.7907 10.9999 12.7907ZM10.9999 16.1163C10.8669 16.1163 10.7339 16.0856 10.6111 16.0344C10.4883 15.9832 10.3758 15.9116 10.2734 15.8195C10.1813 15.7172 10.1097 15.6149 10.0585 15.4818C10.0074 15.3591 9.97668 15.226 9.97668 15.093C9.97668 14.96 10.0074 14.827 10.0585 14.7042C10.1097 14.5814 10.1813 14.4688 10.2734 14.3665C10.3758 14.2744 10.4883 14.2028 10.6111 14.1516C10.8602 14.0493 11.1397 14.0493 11.3888 14.1516C11.5116 14.2028 11.6241 14.2744 11.7265 14.3665C11.8185 14.4688 11.8902 14.5814 11.9413 14.7042C11.9925 14.827 12.0232 14.96 12.0232 15.093C12.0232 15.226 11.9925 15.3591 11.9413 15.4818C11.8902 15.6149 11.8185 15.7172 11.7265 15.8195C11.6241 15.9116 11.5116 15.9832 11.3888 16.0344C11.266 16.0856 11.133 16.1163 10.9999 16.1163Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Пожаловаться
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video-item-container fix-h">
                            <div class="video-item-img">
                                <img src="img/video-item-2.png">
                                <div class="video-duration">
                                    <span>3:00</span>
                                </div>
                                <div class="video-start-stop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                        <circle cx="27.5" cy="27.5" r="26.5" stroke="#FDFDFD" stroke-width="2"/>
                                        <path d="M19.6468 15.9945C19.5063 15.9113 19.3463 15.8667 19.1831 15.8652C19.0198 15.8638 18.8591 15.9056 18.7172 15.9864C18.5753 16.0672 18.4574 16.1841 18.3753 16.3253C18.2933 16.4664 18.25 16.6268 18.25 16.79V38.21C18.25 38.3732 18.2933 38.5336 18.3753 38.6747C18.4574 38.8159 18.5753 38.9328 18.7172 39.0136C18.8591 39.0944 19.0198 39.1362 19.1831 39.1348C19.3463 39.1333 19.5063 39.0887 19.6468 39.0055L37.7197 28.2955C37.8577 28.2136 37.9721 28.0972 38.0515 27.9577C38.1309 27.8182 38.1727 27.6605 38.1727 27.5C38.1727 27.3395 38.1309 27.1818 38.0515 27.0423C37.9721 26.9028 37.8577 26.7864 37.7197 26.7045L19.6468 15.9945Z" fill="#FDFDFD" stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="video-item-footer fix-sb">
                                <div class="video-item-info">
                                    <div class="video-item-name fix-mb">
                                        Профилактика гриппа
                                    </div>
                                    <div class="video-item-views-data">
                                        2,9 млн просмотров <span>|</span> 6 месяцев назад
                                    </div>
                                </div>
                                <div class="video-item-dots">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="12" viewBox="0 0 3 12" fill="none">
                                        <path d="M3 1.5C3 2.32843 2.32843 3 1.5 3C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0C2.32843 0 3 0.671573 3 1.5Z" fill="black"/>
                                        <path d="M3 6C3 6.82843 2.32843 7.5 1.5 7.5C0.671573 7.5 0 6.82843 0 6C0 5.17157 0.671573 4.5 1.5 4.5C2.32843 4.5 3 5.17157 3 6Z" fill="black"/>
                                        <path d="M3 10.5C3 11.3284 2.32843 12 1.5 12C0.671573 12 0 11.3284 0 10.5C0 9.67157 0.671573 9 1.5 9C2.32843 9 3 9.67157 3 10.5Z" fill="black"/>
                                    </svg>
                                    <div class="dots-dropdown-menu">
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M10.3125 2.75V14.1371L6.68181 10.505L5.6925 11.495L10.505 16.3075L10.9993 16.7798L11.4936 16.3075L16.3061 11.495L15.3175 10.5064L11.6875 14.1364V2.75H10.3125ZM4.8125 17.875V19.25H17.1875V17.875H4.8125Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Скачать
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M14.3333 8.2C7.41867 7.542 2.97422 10.342 1 16.6C4.76667 12.204 9.45467 11.3948 14.3333 13.8V18L21 11L14.3333 4V8.2Z" stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span>
                                            Поделиться
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 22C4.93209 22 0 17.0679 0 11C0 4.93209 4.93209 0 11 0C17.0679 0 22 4.93209 22 11C22 17.0679 17.0679 22 11 22ZM11 1.53488C5.7814 1.53488 1.53488 5.7814 1.53488 11C1.53488 16.2186 5.7814 20.4651 11 20.4651C16.2186 20.4651 20.4651 16.2186 20.4651 11C20.4651 5.7814 16.2186 1.53488 11 1.53488Z" fill="black"/>
                                                <path d="M10.9999 12.7907C10.5804 12.7907 10.2325 12.4428 10.2325 12.0232V6.90697C10.2325 6.48743 10.5804 6.13953 10.9999 6.13953C11.4195 6.13953 11.7674 6.48743 11.7674 6.90697V12.0232C11.7674 12.4428 11.4195 12.7907 10.9999 12.7907ZM10.9999 16.1163C10.8669 16.1163 10.7339 16.0856 10.6111 16.0344C10.4883 15.9832 10.3758 15.9116 10.2734 15.8195C10.1813 15.7172 10.1097 15.6149 10.0585 15.4818C10.0074 15.3591 9.97668 15.226 9.97668 15.093C9.97668 14.96 10.0074 14.827 10.0585 14.7042C10.1097 14.5814 10.1813 14.4688 10.2734 14.3665C10.3758 14.2744 10.4883 14.2028 10.6111 14.1516C10.8602 14.0493 11.1397 14.0493 11.3888 14.1516C11.5116 14.2028 11.6241 14.2744 11.7265 14.3665C11.8185 14.4688 11.8902 14.5814 11.9413 14.7042C11.9925 14.827 12.0232 14.96 12.0232 15.093C12.0232 15.226 11.9925 15.3591 11.9413 15.4818C11.8902 15.6149 11.8185 15.7172 11.7265 15.8195C11.6241 15.9116 11.5116 15.9832 11.3888 16.0344C11.266 16.0856 11.133 16.1163 10.9999 16.1163Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Пожаловаться
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video-item-container fix-h">
                            <div class="video-item-img">
                                <img src="img/video-item-1.png">
                                <div class="video-duration">
                                    <span>3:00</span>
                                </div>
                                <div class="video-start-stop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                        <circle cx="27.5" cy="27.5" r="26.5" stroke="#FDFDFD" stroke-width="2"/>
                                        <path d="M19.6468 15.9945C19.5063 15.9113 19.3463 15.8667 19.1831 15.8652C19.0198 15.8638 18.8591 15.9056 18.7172 15.9864C18.5753 16.0672 18.4574 16.1841 18.3753 16.3253C18.2933 16.4664 18.25 16.6268 18.25 16.79V38.21C18.25 38.3732 18.2933 38.5336 18.3753 38.6747C18.4574 38.8159 18.5753 38.9328 18.7172 39.0136C18.8591 39.0944 19.0198 39.1362 19.1831 39.1348C19.3463 39.1333 19.5063 39.0887 19.6468 39.0055L37.7197 28.2955C37.8577 28.2136 37.9721 28.0972 38.0515 27.9577C38.1309 27.8182 38.1727 27.6605 38.1727 27.5C38.1727 27.3395 38.1309 27.1818 38.0515 27.0423C37.9721 26.9028 37.8577 26.7864 37.7197 26.7045L19.6468 15.9945Z" fill="#FDFDFD" stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="video-item-footer fix-sb">
                                <div class="video-item-info">
                                    <div class="video-item-name fix-mb">
                                        День из жизни "Мосмедпроф": как мы работаем
                                    </div>
                                    <div class="video-item-views-data">
                                        2,9 млн просмотров <span>|</span> 6 месяцев назад
                                    </div>
                                </div>
                                <div class="video-item-dots">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="12" viewBox="0 0 3 12" fill="none">
                                        <path d="M3 1.5C3 2.32843 2.32843 3 1.5 3C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0C2.32843 0 3 0.671573 3 1.5Z" fill="black"/>
                                        <path d="M3 6C3 6.82843 2.32843 7.5 1.5 7.5C0.671573 7.5 0 6.82843 0 6C0 5.17157 0.671573 4.5 1.5 4.5C2.32843 4.5 3 5.17157 3 6Z" fill="black"/>
                                        <path d="M3 10.5C3 11.3284 2.32843 12 1.5 12C0.671573 12 0 11.3284 0 10.5C0 9.67157 0.671573 9 1.5 9C2.32843 9 3 9.67157 3 10.5Z" fill="black"/>
                                    </svg>
                                    <div class="dots-dropdown-menu">
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M10.3125 2.75V14.1371L6.68181 10.505L5.6925 11.495L10.505 16.3075L10.9993 16.7798L11.4936 16.3075L16.3061 11.495L15.3175 10.5064L11.6875 14.1364V2.75H10.3125ZM4.8125 17.875V19.25H17.1875V17.875H4.8125Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Скачать
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M14.3333 8.2C7.41867 7.542 2.97422 10.342 1 16.6C4.76667 12.204 9.45467 11.3948 14.3333 13.8V18L21 11L14.3333 4V8.2Z" stroke="black" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span>
                                            Поделиться
                                        </span>
                                        </div>
                                        <div class="dots-dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 22C4.93209 22 0 17.0679 0 11C0 4.93209 4.93209 0 11 0C17.0679 0 22 4.93209 22 11C22 17.0679 17.0679 22 11 22ZM11 1.53488C5.7814 1.53488 1.53488 5.7814 1.53488 11C1.53488 16.2186 5.7814 20.4651 11 20.4651C16.2186 20.4651 20.4651 16.2186 20.4651 11C20.4651 5.7814 16.2186 1.53488 11 1.53488Z" fill="black"/>
                                                <path d="M10.9999 12.7907C10.5804 12.7907 10.2325 12.4428 10.2325 12.0232V6.90697C10.2325 6.48743 10.5804 6.13953 10.9999 6.13953C11.4195 6.13953 11.7674 6.48743 11.7674 6.90697V12.0232C11.7674 12.4428 11.4195 12.7907 10.9999 12.7907ZM10.9999 16.1163C10.8669 16.1163 10.7339 16.0856 10.6111 16.0344C10.4883 15.9832 10.3758 15.9116 10.2734 15.8195C10.1813 15.7172 10.1097 15.6149 10.0585 15.4818C10.0074 15.3591 9.97668 15.226 9.97668 15.093C9.97668 14.96 10.0074 14.827 10.0585 14.7042C10.1097 14.5814 10.1813 14.4688 10.2734 14.3665C10.3758 14.2744 10.4883 14.2028 10.6111 14.1516C10.8602 14.0493 11.1397 14.0493 11.3888 14.1516C11.5116 14.2028 11.6241 14.2744 11.7265 14.3665C11.8185 14.4688 11.8902 14.5814 11.9413 14.7042C11.9925 14.827 12.0232 14.96 12.0232 15.093C12.0232 15.226 11.9925 15.3591 11.9413 15.4818C11.8902 15.6149 11.8185 15.7172 11.7265 15.8195C11.6241 15.9116 11.5116 15.9832 11.3888 16.0344C11.266 16.0856 11.133 16.1163 10.9999 16.1163Z" fill="black"/>
                                            </svg>
                                            <span>
                                            Пожаловаться
                                        </span>
                                        </div>
                                    </div>
                                </div>
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
                    $(window).on('load', function() {
                        // Когда клик на пункт "Поделиться"
                        $('.dots-dropdown-item').each(function() {
                            var itemText = $(this).text().trim();
                            if (itemText === 'Поделиться') {
                                $(this).on('click', function() {
                                    $('#modal-container-bckg').addClass('open');
                                });
                            }
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
                <script>
                    $(document).ready(function() {
                        $("body").on('click', '.video-btn',function() {
                            // Убираем класс active у всех кнопок и контента
                            $(".video-btn").removeClass("active");
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
<?require_once 'tpl/footer.php'?>

</body>

</html>