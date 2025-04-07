<div class="side-block-menu">
    <div class="side-block-menu-line">
        <a href="#About-us">О нас</a>
    </div>
    <div class="side-block-menu-line">
        <a href="#Doctors">Врачи</a>
    </div>
    <div class="side-block-menu-line">
        <a href="#Services-and-prices">Услуги и цены</a>
    </div>
    <div class="side-block-menu-line">
        <a href="#Reviews">Отзывы</a>
    </div>
    <div class="side-block-menu-line">
        <a href="#Photo-clinic">Фото клиники</a>
    </div>
    <div class="side-block-menu-line">
        <a href="#Video">Видео</a>
    </div>
    <div class="side-block-menu-line">
        <a href="#Licenses">Лицензии клиники</a>
    </div>
    <div class="side-block-menu-line">
        <a href="#Partners">Наши партнеры</a>
    </div>
    <div class="side-block-menu-line">
        <a href="#FAQ">Часто задаваемые вопросы</a>
    </div>
    <div class="side-block-menu-line">
        <a href="#Vacancy">Актуальные вакансии</a>
    </div>
    <div class="side-block-menu-line">
        <a href="#Promotions">Акции</a>
    </div>
    <div class="side-block-menu-line">
        <a href="#Product">Каталог препаратов</a>
    </div>
    <div class="side-block-menu-line">
        <a href="#Events">Мероприятия</a>
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