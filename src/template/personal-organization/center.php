<?php
function generateTimeBlocks($start = '00:00', $end = '23:30', $interval = 30) {
    $startTime = strtotime($start);
    $endTime = strtotime($end);
    $intervalSeconds = $interval * 60;
    $timeBlocks = [];

    for ($currentTime = $startTime; $currentTime <= $endTime; $currentTime += $intervalSeconds) {
        $timeBlocks[] = date('H:i', $currentTime);
    }

    return $timeBlocks;
}
?>
<!DOCTYPE html>
<html lang="en">

<body>
<div class="adm-main-container adm-container">
    <?require $_SERVER['DOCUMENT_ROOT'] . '/template/personal-organization/left-menu.php';?>
    <div class="adm-main-content">
        <div class="adm-main-content-title">
            О центре
        </div>
		<form action="/ajax/organization/updateCenter/" method="POST" enctype="multipart/form-data">
		
		<input name="org_id" value="<?=$serv_parts['2']?>" type="hidden">
		<input type="submit" value="Сохранить"/>
		<a href="/personal-organization/center/<?=$serv_parts['2']?>/demo/">просмотр демо</a> 
        <div class="adm-main-content-block">
            <div class="adm-main-content-left">
                <div class="content-left-title adm-block-title">
                    Название центра
                </div>
                <div class="content-left-name">
                    <label for="input-name">Название</label>
                    <textarea name="org_name" class="input-field" rows="2" placeholder="Медицинский центр «Мосмедпроф» Медицинский центр «Мосмедпроф» "><?=$arrTemplate['pr_name']?></textarea>
                </div>
                <div class="content-left-title adm-block-title">
                    Тип клиники
                </div>
                <div class="content-left-type-dropdown">
                    <select name="org_type" style="display: none;">
					<?foreach( $arrTemplate['type'] as $code=>$value ){?>
						<option value="<?=$code?>"><?=$value?></option>
					<?}?>
                    </select>
                    <div class="content-left-type-dropdown-btn adm-block-text">
                        <span><?=$arrTemplate['type'][$arrTemplate['pr_type']]?></span>
                        <svg class="chevron-dropdown" xmlns="http://www.w3.org/2000/svg" width="15" height="8" viewBox="0 0 15 8" fill="none">
                            <path d="M13.5 0L15 1.33333L7.5 8L0 1.33333L1.5 0L7.5 5.33333L13.5 0Z" fill="#A4A4A4"/>
                        </svg>
                    </div>
                    <div class="content-left-type-dropdown-inner">
					<?foreach( $arrTemplate['type'] as $code=>$value ){?>
                        <div class="type-dropdown-item adm-block-text" data-value="<?=$code?>"><?=$value?></div>
					<?}?>
                    </div>
                    <script>
                        $(document).ready(function () {
                            $(".content-left-type-dropdown-btn").click(function () {
                                $(this).toggleClass("active");
                                $(".content-left-type-dropdown-inner").stop(true, true).slideToggle(300);
                            });
							$(document).click(function(event) {
								if(!$(event.target).closest(".content-left-type-dropdown-btn").length){
									$(".content-left-type-dropdown-btn").removeClass("active");
									$(".content-left-type-dropdown-inner").stop(true, true).slideUp(300);
								}
							});
                            $('.type-dropdown-item').on('click', function () {
								$(this).parents('.content-left-type-dropdown').find('select').val($(this).attr('data-value'));
								$(this).parents('.content-left-type-dropdown').find('.content-left-type-dropdown-btn span').html($(this).html());
                            });
                        });
                    </script>
                </div>
                 <div class="content-left-title adm-block-title">
                    Контакты
                </div>
                <div class="content-left-name con-fix">
                    <label for="input-name">
                        <svg class="input-svg" xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                            <path d="M1 3.72222C1 11.3315 7.16852 17.5 14.7778 17.5C15.1211 17.5 15.4614 17.4875 15.7985 17.4628C16.1852 17.4344 16.3786 17.4203 16.5547 17.3189C16.7004 17.235 16.8387 17.0862 16.9117 16.9347C17 16.7517 17 16.5383 17 16.1116V13.6073C17 13.2484 17 13.0689 16.9409 12.9151C16.8888 12.7792 16.804 12.6582 16.6941 12.5628C16.5698 12.4547 16.4011 12.3933 16.0638 12.2707L13.2133 11.2341C12.8209 11.0915 12.6246 11.0201 12.4385 11.0322C12.2743 11.0428 12.1164 11.0989 11.9821 11.194C11.83 11.3019 11.7226 11.4809 11.5077 11.839L10.7778 13.0556C8.42231 11.9888 6.5128 10.0768 5.44444 7.72222L6.661 6.99228C7.01907 6.77745 7.1981 6.67003 7.30596 6.51783C7.40107 6.38363 7.45716 6.22566 7.46782 6.06151C7.47991 5.87535 7.40853 5.67914 7.26587 5.28671L6.22932 2.43619C6.10667 2.0989 6.04534 1.93025 5.93726 1.80587C5.84179 1.69599 5.72079 1.61124 5.58491 1.55907C5.43108 1.5 5.25163 1.5 4.89273 1.5H2.38845C1.96167 1.5 1.74828 1.5 1.56532 1.58822C1.41378 1.6613 1.26501 1.79956 1.18107 1.94536C1.07972 2.1214 1.06556 2.31477 1.03724 2.70154C1.01256 3.03854 1 3.37892 1 3.72222Z" stroke="#A4A4A4" stroke-width="1.41667" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Телефон
                    </label>
                    <input name="org_phone" class="maskPhone input-field con-fix-input" rows="1" placeholder="+7 (499) 460-01-13" value="<?=$arrTemplate['pr_phone']?>">
                    <script>
                        $(document).ready(function () {
                            $('.maskPhone').mask('+7 (999) 999-99-99');
                        });
                    </script>
                </div>
                <div class="content-left-name con-fix">
                    <label for="input-name">
                        <svg class="input-svg" xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                            <path d="M15.4284 8.49998C15.4284 10.4702 14.6458 12.3596 13.2527 13.7528C11.8595 15.1459 9.97004 15.9286 7.99986 15.9286C6.02968 15.9286 4.14019 15.1459 2.74707 13.7528C1.35394 12.3596 0.571289 10.4702 0.571289 8.49998M15.4284 8.49998C15.4284 6.5298 14.6458 4.64032 13.2527 3.24719C11.8595 1.85406 9.97004 1.07141 7.99986 1.07141C6.02968 1.07141 4.14019 1.85406 2.74707 3.24719C1.35394 4.64032 0.571289 6.5298 0.571289 8.49998M15.4284 8.49998H0.571289" stroke="#A4A4A4" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.8569 8.49998C10.7165 11.2165 9.71593 13.8181 7.99972 15.9286C6.28352 13.8181 5.28292 11.2165 5.14258 8.49998C5.28292 5.78342 6.28352 3.18187 7.99972 1.07141C9.71593 3.18187 10.7165 5.78342 10.8569 8.49998Z" stroke="#A4A4A4" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Сайт
                    </label>
                    <input name="org_site" class="input-field con-fix-input" rows="1" placeholder="www.mmp-med.ru" value="<?=$arrTemplate['pr_site']?>">
                </div>
                <div class="content-left-name con-fix">
                    <label for="input-name">
                        <svg class="input-svg" xmlns="http://www.w3.org/2000/svg" width="18" height="13" viewBox="0 0 18 13" fill="none">
                            <path d="M16.3125 2.5625V10.4375C16.3125 10.8851 16.1347 11.3143 15.8182 11.6307C15.5018 11.9472 15.0726 12.125 14.625 12.125H3.375C2.92745 12.125 2.49822 11.9472 2.18176 11.6307C1.86529 11.3143 1.6875 10.8851 1.6875 10.4375V2.5625M16.3125 2.5625C16.3125 2.11495 16.1347 1.68573 15.8182 1.36926C15.5018 1.05279 15.0726 0.875 14.625 0.875H3.375C2.92745 0.875 2.49822 1.05279 2.18176 1.36926C1.86529 1.68573 1.6875 2.11495 1.6875 2.5625M16.3125 2.5625V2.74475C16.3125 3.03286 16.2388 3.31618 16.0983 3.56772C15.9578 3.81926 15.7553 4.03065 15.51 4.18175L9.885 7.643C9.61891 7.8069 9.31252 7.89369 9 7.89369C8.68748 7.89369 8.38109 7.8069 8.115 7.643L2.49 4.1825C2.24469 4.0314 2.04215 3.82001 1.90168 3.56847C1.7612 3.31693 1.68747 3.03361 1.6875 2.7455V2.5625" stroke="#A4A4A4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        E-mail
                    </label>
                    <input name="org_email" class="input-field con-fix-input" rows="1" placeholder="info@mmp-med.ru" value="<?=$arrTemplate['pr_email']?>">
                </div>
                <div class="content-left-title adm-block-title">
                    Описание
                </div>
                <div class="textarea-container">
                    <textarea name="org_desc" class="text-description" id="textArea-description" rows="7" maxlength="500"><?=$arrTemplate['pr_desc']?></textarea>
                    <div id="charCounter" class="char-counter">Количество символов 352/500</div>
                </div>
                <div class="content-left-title adm-block-title">
                    Как добраться?
                </div>
                <div class="textarea-container">
                    <textarea name="org_way" class="text-description" id="textArea-description" rows="7" maxlength="500"><?=$arrTemplate['pr_way']?></textarea>
                    <div id="charCounter" class="char-counter">Количество символов 352/500</div>
                </div>
                <script>
                    $(document).ready(function() {
                        // Обрабатываем все элементы .textarea-container
                        $('.textarea-container').each(function() {
                            var $textArea = $(this).find('.text-description'); // Находим textarea внутри текущего блока
                            var $charCounter = $(this).find('.char-counter'); // Находим счетчик внутри того же блока
                            var maxLength = $textArea.attr('maxlength'); // Получаем максимальное количество символов
                            var placeholderLength = $textArea.attr('placeholder').length; // Получаем длину текста в placeholder

                            // Функция для обновления счетчика символов
                            function updateCharCount() {
                                var currentLength = $textArea.val().length; // Получаем количество введенных символов
                                $charCounter.text('Количество символов ' + currentLength + '/' + maxLength); // Обновляем текст в счетчике
                            }

                            // Устанавливаем начальный счетчик с учетом текста в placeholder
                            $charCounter.text('Количество символов ' + placeholderLength + '/' + maxLength);

                            // При каждом вводе текста обновляем счетчик
                            $textArea.on('input', function() {
                                updateCharCount();
                            });

                            // Изначально учитываем длину текста в placeholder
                            $textArea.val($textArea.attr('placeholder'));
                            updateCharCount();
                        });
                    });
                </script>

            </div>
            <div class="adm-main-content-right">
                <div class="adm-main-content-load">
                    <div class="content-left-title adm-block-title">
                        Фото центра
                        <img src="https://layout.development-3sj8e.ru/adm-f/img/load-1.png">
						<input type="file" name="org_foto">
                    </div>
                    <div class="content-left-title adm-block-title">
                        Логотип
                        <img src="https://layout.development-3sj8e.ru/adm-f/img/load-2.png">
						<input type="file" name="org_logo">
                    </div>

                </div>
                <div class="content-left-title adm-block-title">
                    Время работы
                </div>
                <div class="adm-main-content-timetable">
                    <div class="adm-main-content-timetable-head">
                        <div class="timetable-item">
                            <span>Понедельник</span>
                            <div class="time-inputs color-main">
                                <input name="org_time_pn_open" type="text" class="star-time color-main" value="<?=$arrTemplate['pr_pn_open']?>">
                                <span>-</span>
                                <input name="org_time_pn_close" type="text" class="end-time color-main" value="<?=$arrTemplate['pr_pn_close']?>">
                            </div>
                            <svg class="timetable-item-svg" xmlns="http://www.w3.org/2000/svg" width="11" height="6" viewBox="0 0 11 6" fill="none">
                                <path d="M9.9 0L11 1L5.5 6L0 1L1.1 0L5.5 4L9.9 0Z" fill="#A9A9A9"/>
                            </svg>
                            <div class="hidden-weekend main-text color-main">Выходной</div>
                            <div class="timetable-choose-block">
                                <div class="timetable-choose-head">
                                    <div class="timetable-choose-text">
                                        Выходной
                                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                                            <path d="M0 3C0 2.20435 0.316071 1.44129 0.87868 0.87868C1.44129 0.316071 2.20435 0 3 0C3.79565 0 4.55871 0.316071 5.12132 0.87868C5.68393 1.44129 6 2.20435 6 3C6 3.79565 5.68393 4.55871 5.12132 5.12132C4.55871 5.68393 3.79565 6 3 6C2.20435 6 1.44129 5.68393 0.87868 5.12132C0.316071 4.55871 0 3.79565 0 3ZM3 0.514286C2.67357 0.514286 2.35034 0.578581 2.04876 0.703499C1.74718 0.828418 1.47315 1.01151 1.24233 1.24233C1.01151 1.47315 0.828418 1.74718 0.703499 2.04876C0.578581 2.35034 0.514286 2.67357 0.514286 3C0.514286 3.32643 0.578581 3.64966 0.703499 3.95124C0.828418 4.25282 1.01151 4.52685 1.24233 4.75767C1.47315 4.98849 1.74718 5.17158 2.04876 5.2965C2.35034 5.42142 2.67357 5.48571 3 5.48571C3.65925 5.48571 4.2915 5.22383 4.75767 4.75767C5.22383 4.2915 5.48571 3.65925 5.48571 3C5.48571 2.34075 5.22383 1.7085 4.75767 1.24233C4.2915 0.776173 3.65925 0.514286 3 0.514286Z" fill="#A4A4A4"/>
                                            <path d="M3.00007 1.75386C2.69891 1.75386 2.45449 1.96063 2.45449 2.2154V2.2549C2.45449 2.32835 2.42001 2.39879 2.35862 2.45072C2.29723 2.50265 2.21397 2.53183 2.12715 2.53183C2.04033 2.53183 1.95707 2.50265 1.89568 2.45072C1.83429 2.39879 1.7998 2.32835 1.7998 2.2549V2.2154C1.7998 1.9461 1.92626 1.68783 2.15135 1.49741C2.37645 1.30699 2.68174 1.20001 3.00007 1.20001H3.0507C3.2855 1.2001 3.51464 1.26102 3.7073 1.37456C3.89997 1.4881 4.04691 1.64882 4.12838 1.83512C4.20985 2.02141 4.22194 2.22435 4.16302 2.41662C4.10409 2.6089 3.97699 2.78131 3.79879 2.91066L3.46272 3.15435C3.42055 3.18531 3.38668 3.22353 3.36334 3.26644C3.34001 3.30935 3.32776 3.35598 3.32741 3.40321V3.60001C3.32741 3.67346 3.29293 3.74389 3.23154 3.79583C3.17015 3.84776 3.08689 3.87694 3.00007 3.87694C2.91325 3.87694 2.82999 3.84776 2.7686 3.79583C2.70721 3.74389 2.67272 3.67346 2.67272 3.60001V3.40321C2.67272 3.14586 2.80541 2.90143 3.0363 2.73417L3.37281 2.49047C3.44959 2.4348 3.50437 2.36056 3.52978 2.27775C3.55518 2.19494 3.54999 2.10754 3.5149 2.0273C3.47982 1.94706 3.41652 1.87784 3.33352 1.82895C3.25053 1.78006 3.15183 1.75386 3.0507 1.75386H3.00007ZM3.00007 4.80001C3.11583 4.80001 3.22684 4.76111 3.30869 4.69187C3.39054 4.62262 3.43653 4.52871 3.43653 4.43078C3.43653 4.33286 3.39054 4.23894 3.30869 4.1697C3.22684 4.10045 3.11583 4.06155 3.00007 4.06155C2.88431 4.06155 2.7733 4.10045 2.69145 4.1697C2.60959 4.23894 2.56361 4.33286 2.56361 4.43078C2.56361 4.52871 2.60959 4.62262 2.69145 4.69187C2.7733 4.76111 2.88431 4.80001 3.00007 4.80001Z" fill="#A4A4A4"/>
                                        </svg>
                                    </div>
                                    <div class="timetable-choose-checkbox">
                                        <svg class="choose-checkbox" xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 10 7" fill="none">
                                            <path d="M0.5 3.68155L3.22727 6.22701L8.68182 0.772461" stroke="#3A8DFF" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="timetable-choose-footer">
                                    <div class="timetable-type timetable-star-time color-main">
                                        <div class="timetable-value">10:00</div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="5" height="3" viewBox="0 0 5 3" fill="none">
                                            <path d="M0.5 3L0 2.5L2.5 0L5 2.5L4.5 3L2.5 1L0.5 3Z" fill="#BBBBBB"/>
                                        </svg>
                                        <div class="timetable-star-time-dropdown mCustomScrollbar">
                                            <?php
                                            $timeBlocks = generateTimeBlocks();
                                            foreach ($timeBlocks as $block) {
                                                echo '<div class="time-dropdown color-main">
                                                <div>'.$block.'</div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="5" viewBox="0 0 6 5" fill="none">
                                                    <path d="M0.375 2.375L2.125 4.125L5.625 0.375" stroke="#3A8DFF" stroke-width="0.7" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>';
                                            }
                                            ?>
                                        </div>
                                        <script>
                                            (function($){
                                                $(window).on("load",function(){
                                                    $(".timetable-star-time-dropdown").mCustomScrollbar({
                                                    });
                                                });
                                            })(jQuery);
                                        </script>
                                    </div>
                                    <span>-</span>
                                    <div class="timetable-type timetable-end-time color-main">
                                        <div class="timetable-value">
                                            18:00
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="5" height="3" viewBox="0 0 5 3" fill="none">
                                            <path d="M0.5 3L0 2.5L2.5 0L5 2.5L4.5 3L2.5 1L0.5 3Z" fill="#BBBBBB"/>
                                        </svg>
                                        <div class="timetable-end-time-dropdown mCustomScrollbar">
                                            <?php
                                            $timeBlocks = generateTimeBlocks();
                                            foreach ($timeBlocks as $block) {
                                                echo '<div class="time-dropdown color-main">
                                                <div>'.$block.'</div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="5" viewBox="0 0 6 5" fill="none">
                                                    <path d="M0.375 2.375L2.125 4.125L5.625 0.375" stroke="#3A8DFF" stroke-width="0.7" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>';
                                            }
                                            ?>
                                        </div>
                                        <script>
                                            (function($){
                                                $(window).on("load",function(){
                                                    $(".timetable-end-time-dropdown").mCustomScrollbar({
                                                    });
                                                });
                                            })(jQuery);
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timetable-item">
                            <span>Вторник</span>
                            <div class="time-inputs color-main">
                                <input name="org_time_vt_open" type="text" class="star-time color-main" value="<?=$arrTemplate['pr_vt_open']?>">
                                <span>-</span>
                                <input name="org_time_vt_close" type="text" class="end-time color-main" value="<?=$arrTemplate['pr_vt_close']?>">
                            </div>
                            <svg class="timetable-item-svg" xmlns="http://www.w3.org/2000/svg" width="11" height="6" viewBox="0 0 11 6" fill="none">
                                <path d="M9.9 0L11 1L5.5 6L0 1L1.1 0L5.5 4L9.9 0Z" fill="#A9A9A9"/>
                            </svg>
                            <div class="hidden-weekend main-text color-main">Выходной</div>
                            <div class="timetable-choose-block">
                                <div class="timetable-choose-head">
                                    <div class="timetable-choose-text">
                                        Выходной
                                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                                            <path d="M0 3C0 2.20435 0.316071 1.44129 0.87868 0.87868C1.44129 0.316071 2.20435 0 3 0C3.79565 0 4.55871 0.316071 5.12132 0.87868C5.68393 1.44129 6 2.20435 6 3C6 3.79565 5.68393 4.55871 5.12132 5.12132C4.55871 5.68393 3.79565 6 3 6C2.20435 6 1.44129 5.68393 0.87868 5.12132C0.316071 4.55871 0 3.79565 0 3ZM3 0.514286C2.67357 0.514286 2.35034 0.578581 2.04876 0.703499C1.74718 0.828418 1.47315 1.01151 1.24233 1.24233C1.01151 1.47315 0.828418 1.74718 0.703499 2.04876C0.578581 2.35034 0.514286 2.67357 0.514286 3C0.514286 3.32643 0.578581 3.64966 0.703499 3.95124C0.828418 4.25282 1.01151 4.52685 1.24233 4.75767C1.47315 4.98849 1.74718 5.17158 2.04876 5.2965C2.35034 5.42142 2.67357 5.48571 3 5.48571C3.65925 5.48571 4.2915 5.22383 4.75767 4.75767C5.22383 4.2915 5.48571 3.65925 5.48571 3C5.48571 2.34075 5.22383 1.7085 4.75767 1.24233C4.2915 0.776173 3.65925 0.514286 3 0.514286Z" fill="#A4A4A4"/>
                                            <path d="M3.00007 1.75386C2.69891 1.75386 2.45449 1.96063 2.45449 2.2154V2.2549C2.45449 2.32835 2.42001 2.39879 2.35862 2.45072C2.29723 2.50265 2.21397 2.53183 2.12715 2.53183C2.04033 2.53183 1.95707 2.50265 1.89568 2.45072C1.83429 2.39879 1.7998 2.32835 1.7998 2.2549V2.2154C1.7998 1.9461 1.92626 1.68783 2.15135 1.49741C2.37645 1.30699 2.68174 1.20001 3.00007 1.20001H3.0507C3.2855 1.2001 3.51464 1.26102 3.7073 1.37456C3.89997 1.4881 4.04691 1.64882 4.12838 1.83512C4.20985 2.02141 4.22194 2.22435 4.16302 2.41662C4.10409 2.6089 3.97699 2.78131 3.79879 2.91066L3.46272 3.15435C3.42055 3.18531 3.38668 3.22353 3.36334 3.26644C3.34001 3.30935 3.32776 3.35598 3.32741 3.40321V3.60001C3.32741 3.67346 3.29293 3.74389 3.23154 3.79583C3.17015 3.84776 3.08689 3.87694 3.00007 3.87694C2.91325 3.87694 2.82999 3.84776 2.7686 3.79583C2.70721 3.74389 2.67272 3.67346 2.67272 3.60001V3.40321C2.67272 3.14586 2.80541 2.90143 3.0363 2.73417L3.37281 2.49047C3.44959 2.4348 3.50437 2.36056 3.52978 2.27775C3.55518 2.19494 3.54999 2.10754 3.5149 2.0273C3.47982 1.94706 3.41652 1.87784 3.33352 1.82895C3.25053 1.78006 3.15183 1.75386 3.0507 1.75386H3.00007ZM3.00007 4.80001C3.11583 4.80001 3.22684 4.76111 3.30869 4.69187C3.39054 4.62262 3.43653 4.52871 3.43653 4.43078C3.43653 4.33286 3.39054 4.23894 3.30869 4.1697C3.22684 4.10045 3.11583 4.06155 3.00007 4.06155C2.88431 4.06155 2.7733 4.10045 2.69145 4.1697C2.60959 4.23894 2.56361 4.33286 2.56361 4.43078C2.56361 4.52871 2.60959 4.62262 2.69145 4.69187C2.7733 4.76111 2.88431 4.80001 3.00007 4.80001Z" fill="#A4A4A4"/>
                                        </svg>
                                    </div>
                                    <div class="timetable-choose-checkbox">
                                        <svg class="choose-checkbox" xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 10 7" fill="none">
                                            <path d="M0.5 3.68155L3.22727 6.22701L8.68182 0.772461" stroke="#3A8DFF" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="timetable-choose-footer">
                                    <div class="timetable-type timetable-star-time color-main">
                                        <div class="timetable-value">10:00</div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="5" height="3" viewBox="0 0 5 3" fill="none">
                                            <path d="M0.5 3L0 2.5L2.5 0L5 2.5L4.5 3L2.5 1L0.5 3Z" fill="#BBBBBB"/>
                                        </svg>
                                        <div class="timetable-star-time-dropdown mCustomScrollbar">
                                            <?php
                                            $timeBlocks = generateTimeBlocks();
                                            foreach ($timeBlocks as $block) {
                                                echo '<div class="time-dropdown color-main">
                                                <div>'.$block.'</div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="5" viewBox="0 0 6 5" fill="none">
                                                    <path d="M0.375 2.375L2.125 4.125L5.625 0.375" stroke="#3A8DFF" stroke-width="0.7" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>';
                                            }
                                            ?>
                                        </div>
                                        <script>
                                            (function($){
                                                $(window).on("load",function(){
                                                    $(".timetable-star-time-dropdown").mCustomScrollbar({
                                                    });
                                                });
                                            })(jQuery);
                                        </script>
                                    </div>
                                    <span>-</span>
                                    <div class="timetable-type timetable-end-time color-main">
                                        <div class="timetable-value">
                                            18:00
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="5" height="3" viewBox="0 0 5 3" fill="none">
                                            <path d="M0.5 3L0 2.5L2.5 0L5 2.5L4.5 3L2.5 1L0.5 3Z" fill="#BBBBBB"/>
                                        </svg>
                                        <div class="timetable-end-time-dropdown mCustomScrollbar">
                                            <?php
                                            $timeBlocks = generateTimeBlocks();
                                            foreach ($timeBlocks as $block) {
                                                echo '<div class="time-dropdown color-main">
                                                <div>'.$block.'</div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="5" viewBox="0 0 6 5" fill="none">
                                                    <path d="M0.375 2.375L2.125 4.125L5.625 0.375" stroke="#3A8DFF" stroke-width="0.7" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>';
                                            }
                                            ?>
                                        </div>
                                        <script>
                                            (function($){
                                                $(window).on("load",function(){
                                                    $(".timetable-end-time-dropdown").mCustomScrollbar({
                                                    });
                                                });
                                            })(jQuery);
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timetable-item">
                            <span>Среда</span>
                            <div class="time-inputs color-main">
                                <input name="org_time_sr_open" type="text" class="star-time color-main" value="<?=$arrTemplate['pr_sr_open']?>">
                                <span>-</span>
                                <input name="org_time_sr_close" type="text" class="end-time color-main" value="<?=$arrTemplate['pr_sr_close']?>">
                            </div>
                            <svg class="timetable-item-svg" xmlns="http://www.w3.org/2000/svg" width="11" height="6" viewBox="0 0 11 6" fill="none">
                                <path d="M9.9 0L11 1L5.5 6L0 1L1.1 0L5.5 4L9.9 0Z" fill="#A9A9A9"/>
                            </svg>
                            <div class="hidden-weekend main-text color-main">Выходной</div>
                            <div class="timetable-choose-block">
                                <div class="timetable-choose-head">
                                    <div class="timetable-choose-text">
                                        Выходной
                                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                                            <path d="M0 3C0 2.20435 0.316071 1.44129 0.87868 0.87868C1.44129 0.316071 2.20435 0 3 0C3.79565 0 4.55871 0.316071 5.12132 0.87868C5.68393 1.44129 6 2.20435 6 3C6 3.79565 5.68393 4.55871 5.12132 5.12132C4.55871 5.68393 3.79565 6 3 6C2.20435 6 1.44129 5.68393 0.87868 5.12132C0.316071 4.55871 0 3.79565 0 3ZM3 0.514286C2.67357 0.514286 2.35034 0.578581 2.04876 0.703499C1.74718 0.828418 1.47315 1.01151 1.24233 1.24233C1.01151 1.47315 0.828418 1.74718 0.703499 2.04876C0.578581 2.35034 0.514286 2.67357 0.514286 3C0.514286 3.32643 0.578581 3.64966 0.703499 3.95124C0.828418 4.25282 1.01151 4.52685 1.24233 4.75767C1.47315 4.98849 1.74718 5.17158 2.04876 5.2965C2.35034 5.42142 2.67357 5.48571 3 5.48571C3.65925 5.48571 4.2915 5.22383 4.75767 4.75767C5.22383 4.2915 5.48571 3.65925 5.48571 3C5.48571 2.34075 5.22383 1.7085 4.75767 1.24233C4.2915 0.776173 3.65925 0.514286 3 0.514286Z" fill="#A4A4A4"/>
                                            <path d="M3.00007 1.75386C2.69891 1.75386 2.45449 1.96063 2.45449 2.2154V2.2549C2.45449 2.32835 2.42001 2.39879 2.35862 2.45072C2.29723 2.50265 2.21397 2.53183 2.12715 2.53183C2.04033 2.53183 1.95707 2.50265 1.89568 2.45072C1.83429 2.39879 1.7998 2.32835 1.7998 2.2549V2.2154C1.7998 1.9461 1.92626 1.68783 2.15135 1.49741C2.37645 1.30699 2.68174 1.20001 3.00007 1.20001H3.0507C3.2855 1.2001 3.51464 1.26102 3.7073 1.37456C3.89997 1.4881 4.04691 1.64882 4.12838 1.83512C4.20985 2.02141 4.22194 2.22435 4.16302 2.41662C4.10409 2.6089 3.97699 2.78131 3.79879 2.91066L3.46272 3.15435C3.42055 3.18531 3.38668 3.22353 3.36334 3.26644C3.34001 3.30935 3.32776 3.35598 3.32741 3.40321V3.60001C3.32741 3.67346 3.29293 3.74389 3.23154 3.79583C3.17015 3.84776 3.08689 3.87694 3.00007 3.87694C2.91325 3.87694 2.82999 3.84776 2.7686 3.79583C2.70721 3.74389 2.67272 3.67346 2.67272 3.60001V3.40321C2.67272 3.14586 2.80541 2.90143 3.0363 2.73417L3.37281 2.49047C3.44959 2.4348 3.50437 2.36056 3.52978 2.27775C3.55518 2.19494 3.54999 2.10754 3.5149 2.0273C3.47982 1.94706 3.41652 1.87784 3.33352 1.82895C3.25053 1.78006 3.15183 1.75386 3.0507 1.75386H3.00007ZM3.00007 4.80001C3.11583 4.80001 3.22684 4.76111 3.30869 4.69187C3.39054 4.62262 3.43653 4.52871 3.43653 4.43078C3.43653 4.33286 3.39054 4.23894 3.30869 4.1697C3.22684 4.10045 3.11583 4.06155 3.00007 4.06155C2.88431 4.06155 2.7733 4.10045 2.69145 4.1697C2.60959 4.23894 2.56361 4.33286 2.56361 4.43078C2.56361 4.52871 2.60959 4.62262 2.69145 4.69187C2.7733 4.76111 2.88431 4.80001 3.00007 4.80001Z" fill="#A4A4A4"/>
                                        </svg>
                                    </div>
                                    <div class="timetable-choose-checkbox">
                                        <svg class="choose-checkbox" xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 10 7" fill="none">
                                            <path d="M0.5 3.68155L3.22727 6.22701L8.68182 0.772461" stroke="#3A8DFF" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="timetable-choose-footer">
                                    <div class="timetable-type timetable-star-time color-main">
                                        <div class="timetable-value">10:00</div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="5" height="3" viewBox="0 0 5 3" fill="none">
                                            <path d="M0.5 3L0 2.5L2.5 0L5 2.5L4.5 3L2.5 1L0.5 3Z" fill="#BBBBBB"/>
                                        </svg>
                                        <div class="timetable-star-time-dropdown mCustomScrollbar">
                                            <?php
                                            $timeBlocks = generateTimeBlocks();
                                            foreach ($timeBlocks as $block) {
                                                echo '<div class="time-dropdown color-main">
                                                <div>'.$block.'</div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="5" viewBox="0 0 6 5" fill="none">
                                                    <path d="M0.375 2.375L2.125 4.125L5.625 0.375" stroke="#3A8DFF" stroke-width="0.7" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>';
                                            }
                                            ?>
                                        </div>
                                        <script>
                                            (function($){
                                                $(window).on("load",function(){
                                                    $(".timetable-star-time-dropdown").mCustomScrollbar({
                                                    });
                                                });
                                            })(jQuery);
                                        </script>
                                    </div>
                                    <span>-</span>
                                    <div class="timetable-type timetable-end-time color-main">
                                        <div class="timetable-value">
                                            18:00
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="5" height="3" viewBox="0 0 5 3" fill="none">
                                            <path d="M0.5 3L0 2.5L2.5 0L5 2.5L4.5 3L2.5 1L0.5 3Z" fill="#BBBBBB"/>
                                        </svg>
                                        <div class="timetable-end-time-dropdown mCustomScrollbar">
                                            <?php
                                            $timeBlocks = generateTimeBlocks();
                                            foreach ($timeBlocks as $block) {
                                                echo '<div class="time-dropdown color-main">
                                                <div>'.$block.'</div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="5" viewBox="0 0 6 5" fill="none">
                                                    <path d="M0.375 2.375L2.125 4.125L5.625 0.375" stroke="#3A8DFF" stroke-width="0.7" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>';
                                            }
                                            ?>
                                        </div>
                                        <script>
                                            (function($){
                                                $(window).on("load",function(){
                                                    $(".timetable-end-time-dropdown").mCustomScrollbar({
                                                    });
                                                });
                                            })(jQuery);
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timetable-item">
                            <span>Четверг</span>
                            <div class="time-inputs color-main">
                                <input name="org_time_ch_open" type="text" class="star-time color-main" value="<?=$arrTemplate['pr_ch_open']?>">
                                <span>-</span>
                                <input name="org_time_ch_close" type="text" class="end-time color-main" value="<?=$arrTemplate['pr_ch_close']?>">
                            </div>
                            <svg class="timetable-item-svg" xmlns="http://www.w3.org/2000/svg" width="11" height="6" viewBox="0 0 11 6" fill="none">
                                <path d="M9.9 0L11 1L5.5 6L0 1L1.1 0L5.5 4L9.9 0Z" fill="#A9A9A9"/>
                            </svg>
                            <div class="hidden-weekend main-text color-main">Выходной</div>
                            <div class="timetable-choose-block">
                                <div class="timetable-choose-head">
                                    <div class="timetable-choose-text">
                                        Выходной
                                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                                            <path d="M0 3C0 2.20435 0.316071 1.44129 0.87868 0.87868C1.44129 0.316071 2.20435 0 3 0C3.79565 0 4.55871 0.316071 5.12132 0.87868C5.68393 1.44129 6 2.20435 6 3C6 3.79565 5.68393 4.55871 5.12132 5.12132C4.55871 5.68393 3.79565 6 3 6C2.20435 6 1.44129 5.68393 0.87868 5.12132C0.316071 4.55871 0 3.79565 0 3ZM3 0.514286C2.67357 0.514286 2.35034 0.578581 2.04876 0.703499C1.74718 0.828418 1.47315 1.01151 1.24233 1.24233C1.01151 1.47315 0.828418 1.74718 0.703499 2.04876C0.578581 2.35034 0.514286 2.67357 0.514286 3C0.514286 3.32643 0.578581 3.64966 0.703499 3.95124C0.828418 4.25282 1.01151 4.52685 1.24233 4.75767C1.47315 4.98849 1.74718 5.17158 2.04876 5.2965C2.35034 5.42142 2.67357 5.48571 3 5.48571C3.65925 5.48571 4.2915 5.22383 4.75767 4.75767C5.22383 4.2915 5.48571 3.65925 5.48571 3C5.48571 2.34075 5.22383 1.7085 4.75767 1.24233C4.2915 0.776173 3.65925 0.514286 3 0.514286Z" fill="#A4A4A4"/>
                                            <path d="M3.00007 1.75386C2.69891 1.75386 2.45449 1.96063 2.45449 2.2154V2.2549C2.45449 2.32835 2.42001 2.39879 2.35862 2.45072C2.29723 2.50265 2.21397 2.53183 2.12715 2.53183C2.04033 2.53183 1.95707 2.50265 1.89568 2.45072C1.83429 2.39879 1.7998 2.32835 1.7998 2.2549V2.2154C1.7998 1.9461 1.92626 1.68783 2.15135 1.49741C2.37645 1.30699 2.68174 1.20001 3.00007 1.20001H3.0507C3.2855 1.2001 3.51464 1.26102 3.7073 1.37456C3.89997 1.4881 4.04691 1.64882 4.12838 1.83512C4.20985 2.02141 4.22194 2.22435 4.16302 2.41662C4.10409 2.6089 3.97699 2.78131 3.79879 2.91066L3.46272 3.15435C3.42055 3.18531 3.38668 3.22353 3.36334 3.26644C3.34001 3.30935 3.32776 3.35598 3.32741 3.40321V3.60001C3.32741 3.67346 3.29293 3.74389 3.23154 3.79583C3.17015 3.84776 3.08689 3.87694 3.00007 3.87694C2.91325 3.87694 2.82999 3.84776 2.7686 3.79583C2.70721 3.74389 2.67272 3.67346 2.67272 3.60001V3.40321C2.67272 3.14586 2.80541 2.90143 3.0363 2.73417L3.37281 2.49047C3.44959 2.4348 3.50437 2.36056 3.52978 2.27775C3.55518 2.19494 3.54999 2.10754 3.5149 2.0273C3.47982 1.94706 3.41652 1.87784 3.33352 1.82895C3.25053 1.78006 3.15183 1.75386 3.0507 1.75386H3.00007ZM3.00007 4.80001C3.11583 4.80001 3.22684 4.76111 3.30869 4.69187C3.39054 4.62262 3.43653 4.52871 3.43653 4.43078C3.43653 4.33286 3.39054 4.23894 3.30869 4.1697C3.22684 4.10045 3.11583 4.06155 3.00007 4.06155C2.88431 4.06155 2.7733 4.10045 2.69145 4.1697C2.60959 4.23894 2.56361 4.33286 2.56361 4.43078C2.56361 4.52871 2.60959 4.62262 2.69145 4.69187C2.7733 4.76111 2.88431 4.80001 3.00007 4.80001Z" fill="#A4A4A4"/>
                                        </svg>
                                    </div>
                                    <div class="timetable-choose-checkbox">
                                        <svg class="choose-checkbox" xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 10 7" fill="none">
                                            <path d="M0.5 3.68155L3.22727 6.22701L8.68182 0.772461" stroke="#3A8DFF" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="timetable-choose-footer">
                                    <div class="timetable-type timetable-star-time color-main">
                                        <div class="timetable-value">10:00</div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="5" height="3" viewBox="0 0 5 3" fill="none">
                                            <path d="M0.5 3L0 2.5L2.5 0L5 2.5L4.5 3L2.5 1L0.5 3Z" fill="#BBBBBB"/>
                                        </svg>
                                        <div class="timetable-star-time-dropdown mCustomScrollbar">
                                            <?php
                                            $timeBlocks = generateTimeBlocks();
                                            foreach ($timeBlocks as $block) {
                                                echo '<div class="time-dropdown color-main">
                                                <div>'.$block.'</div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="5" viewBox="0 0 6 5" fill="none">
                                                    <path d="M0.375 2.375L2.125 4.125L5.625 0.375" stroke="#3A8DFF" stroke-width="0.7" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>';
                                            }
                                            ?>
                                        </div>
                                        <script>
                                            (function($){
                                                $(window).on("load",function(){
                                                    $(".timetable-star-time-dropdown").mCustomScrollbar({
                                                    });
                                                });
                                            })(jQuery);
                                        </script>
                                    </div>
                                    <span>-</span>
                                    <div class="timetable-type timetable-end-time color-main">
                                        <div class="timetable-value">
                                            18:00
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="5" height="3" viewBox="0 0 5 3" fill="none">
                                            <path d="M0.5 3L0 2.5L2.5 0L5 2.5L4.5 3L2.5 1L0.5 3Z" fill="#BBBBBB"/>
                                        </svg>
                                        <div class="timetable-end-time-dropdown mCustomScrollbar">
                                            <?php
                                            $timeBlocks = generateTimeBlocks();
                                            foreach ($timeBlocks as $block) {
                                                echo '<div class="time-dropdown color-main">
                                                <div>'.$block.'</div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="5" viewBox="0 0 6 5" fill="none">
                                                    <path d="M0.375 2.375L2.125 4.125L5.625 0.375" stroke="#3A8DFF" stroke-width="0.7" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>';
                                            }
                                            ?>
                                        </div>
                                        <script>
                                            (function($){
                                                $(window).on("load",function(){
                                                    $(".timetable-end-time-dropdown").mCustomScrollbar({
                                                    });
                                                });
                                            })(jQuery);
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="adm-main-content-timetable-footer">
                        <div class="timetable-item">
                            <span>Пятница</span>
                            <div class="time-inputs color-main">
                                <input name="org_time_pt_open" type="text" class="star-time color-main" value="<?=$arrTemplate['pr_pt_open']?>">
                                <span>-</span>
                                <input name="org_time_pt_close" type="text" class="end-time color-main" value="<?=$arrTemplate['pr_pt_close']?>">
                            </div>
                            <svg class="timetable-item-svg" xmlns="http://www.w3.org/2000/svg" width="11" height="6" viewBox="0 0 11 6" fill="none">
                                <path d="M9.9 0L11 1L5.5 6L0 1L1.1 0L5.5 4L9.9 0Z" fill="#A9A9A9"/>
                            </svg>
                            <div class="hidden-weekend main-text color-main">Выходной</div>
                            <div class="timetable-choose-block">
                                <div class="timetable-choose-head">
                                    <div class="timetable-choose-text">
                                        Выходной
                                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                                            <path d="M0 3C0 2.20435 0.316071 1.44129 0.87868 0.87868C1.44129 0.316071 2.20435 0 3 0C3.79565 0 4.55871 0.316071 5.12132 0.87868C5.68393 1.44129 6 2.20435 6 3C6 3.79565 5.68393 4.55871 5.12132 5.12132C4.55871 5.68393 3.79565 6 3 6C2.20435 6 1.44129 5.68393 0.87868 5.12132C0.316071 4.55871 0 3.79565 0 3ZM3 0.514286C2.67357 0.514286 2.35034 0.578581 2.04876 0.703499C1.74718 0.828418 1.47315 1.01151 1.24233 1.24233C1.01151 1.47315 0.828418 1.74718 0.703499 2.04876C0.578581 2.35034 0.514286 2.67357 0.514286 3C0.514286 3.32643 0.578581 3.64966 0.703499 3.95124C0.828418 4.25282 1.01151 4.52685 1.24233 4.75767C1.47315 4.98849 1.74718 5.17158 2.04876 5.2965C2.35034 5.42142 2.67357 5.48571 3 5.48571C3.65925 5.48571 4.2915 5.22383 4.75767 4.75767C5.22383 4.2915 5.48571 3.65925 5.48571 3C5.48571 2.34075 5.22383 1.7085 4.75767 1.24233C4.2915 0.776173 3.65925 0.514286 3 0.514286Z" fill="#A4A4A4"/>
                                            <path d="M3.00007 1.75386C2.69891 1.75386 2.45449 1.96063 2.45449 2.2154V2.2549C2.45449 2.32835 2.42001 2.39879 2.35862 2.45072C2.29723 2.50265 2.21397 2.53183 2.12715 2.53183C2.04033 2.53183 1.95707 2.50265 1.89568 2.45072C1.83429 2.39879 1.7998 2.32835 1.7998 2.2549V2.2154C1.7998 1.9461 1.92626 1.68783 2.15135 1.49741C2.37645 1.30699 2.68174 1.20001 3.00007 1.20001H3.0507C3.2855 1.2001 3.51464 1.26102 3.7073 1.37456C3.89997 1.4881 4.04691 1.64882 4.12838 1.83512C4.20985 2.02141 4.22194 2.22435 4.16302 2.41662C4.10409 2.6089 3.97699 2.78131 3.79879 2.91066L3.46272 3.15435C3.42055 3.18531 3.38668 3.22353 3.36334 3.26644C3.34001 3.30935 3.32776 3.35598 3.32741 3.40321V3.60001C3.32741 3.67346 3.29293 3.74389 3.23154 3.79583C3.17015 3.84776 3.08689 3.87694 3.00007 3.87694C2.91325 3.87694 2.82999 3.84776 2.7686 3.79583C2.70721 3.74389 2.67272 3.67346 2.67272 3.60001V3.40321C2.67272 3.14586 2.80541 2.90143 3.0363 2.73417L3.37281 2.49047C3.44959 2.4348 3.50437 2.36056 3.52978 2.27775C3.55518 2.19494 3.54999 2.10754 3.5149 2.0273C3.47982 1.94706 3.41652 1.87784 3.33352 1.82895C3.25053 1.78006 3.15183 1.75386 3.0507 1.75386H3.00007ZM3.00007 4.80001C3.11583 4.80001 3.22684 4.76111 3.30869 4.69187C3.39054 4.62262 3.43653 4.52871 3.43653 4.43078C3.43653 4.33286 3.39054 4.23894 3.30869 4.1697C3.22684 4.10045 3.11583 4.06155 3.00007 4.06155C2.88431 4.06155 2.7733 4.10045 2.69145 4.1697C2.60959 4.23894 2.56361 4.33286 2.56361 4.43078C2.56361 4.52871 2.60959 4.62262 2.69145 4.69187C2.7733 4.76111 2.88431 4.80001 3.00007 4.80001Z" fill="#A4A4A4"/>
                                        </svg>
                                    </div>
                                    <div class="timetable-choose-checkbox">
                                        <svg class="choose-checkbox" xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 10 7" fill="none">
                                            <path d="M0.5 3.68155L3.22727 6.22701L8.68182 0.772461" stroke="#3A8DFF" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="timetable-choose-footer">
                                    <div class="timetable-type timetable-star-time color-main">
                                        <div class="timetable-value">10:00</div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="5" height="3" viewBox="0 0 5 3" fill="none">
                                            <path d="M0.5 3L0 2.5L2.5 0L5 2.5L4.5 3L2.5 1L0.5 3Z" fill="#BBBBBB"/>
                                        </svg>
                                        <div class="timetable-star-time-dropdown mCustomScrollbar">
                                            <?php
                                            $timeBlocks = generateTimeBlocks();
                                            foreach ($timeBlocks as $block) {
                                                echo '<div class="time-dropdown color-main">
                                                <div>'.$block.'</div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="5" viewBox="0 0 6 5" fill="none">
                                                    <path d="M0.375 2.375L2.125 4.125L5.625 0.375" stroke="#3A8DFF" stroke-width="0.7" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>';
                                            }
                                            ?>
                                        </div>
                                        <script>
                                            (function($){
                                                $(window).on("load",function(){
                                                    $(".timetable-star-time-dropdown").mCustomScrollbar({
                                                    });
                                                });
                                            })(jQuery);
                                        </script>
                                    </div>
                                    <span>-</span>
                                    <div class="timetable-type timetable-end-time color-main">
                                        <div class="timetable-value">
                                            18:00
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="5" height="3" viewBox="0 0 5 3" fill="none">
                                            <path d="M0.5 3L0 2.5L2.5 0L5 2.5L4.5 3L2.5 1L0.5 3Z" fill="#BBBBBB"/>
                                        </svg>
                                        <div class="timetable-end-time-dropdown mCustomScrollbar">
                                            <?php
                                            $timeBlocks = generateTimeBlocks();
                                            foreach ($timeBlocks as $block) {
                                                echo '<div class="time-dropdown color-main">
                                                <div>'.$block.'</div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="5" viewBox="0 0 6 5" fill="none">
                                                    <path d="M0.375 2.375L2.125 4.125L5.625 0.375" stroke="#3A8DFF" stroke-width="0.7" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>';
                                            }
                                            ?>
                                        </div>
                                        <script>
                                            (function($){
                                                $(window).on("load",function(){
                                                    $(".timetable-end-time-dropdown").mCustomScrollbar({
                                                    });
                                                });
                                            })(jQuery);
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timetable-item">
                            <span>Суббота</span>
                            <div class="time-inputs color-main">
                                <input name="org_time_sb_open" type="text" class="star-time color-main" value="<?=$arrTemplate['pr_sb_open']?>">
                                <span>-</span>
                                <input name="org_time_sb_close" type="text" class="end-time color-main" value="<?=$arrTemplate['pr_sb_close']?>">
                            </div>
                            <svg class="timetable-item-svg" xmlns="http://www.w3.org/2000/svg" width="11" height="6" viewBox="0 0 11 6" fill="none">
                                <path d="M9.9 0L11 1L5.5 6L0 1L1.1 0L5.5 4L9.9 0Z" fill="#A9A9A9"/>
                            </svg>
                            <div class="hidden-weekend main-text color-main">Выходной</div>
                            <div class="timetable-choose-block">
                                <div class="timetable-choose-head">
                                    <div class="timetable-choose-text">
                                        Выходной
                                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                                            <path d="M0 3C0 2.20435 0.316071 1.44129 0.87868 0.87868C1.44129 0.316071 2.20435 0 3 0C3.79565 0 4.55871 0.316071 5.12132 0.87868C5.68393 1.44129 6 2.20435 6 3C6 3.79565 5.68393 4.55871 5.12132 5.12132C4.55871 5.68393 3.79565 6 3 6C2.20435 6 1.44129 5.68393 0.87868 5.12132C0.316071 4.55871 0 3.79565 0 3ZM3 0.514286C2.67357 0.514286 2.35034 0.578581 2.04876 0.703499C1.74718 0.828418 1.47315 1.01151 1.24233 1.24233C1.01151 1.47315 0.828418 1.74718 0.703499 2.04876C0.578581 2.35034 0.514286 2.67357 0.514286 3C0.514286 3.32643 0.578581 3.64966 0.703499 3.95124C0.828418 4.25282 1.01151 4.52685 1.24233 4.75767C1.47315 4.98849 1.74718 5.17158 2.04876 5.2965C2.35034 5.42142 2.67357 5.48571 3 5.48571C3.65925 5.48571 4.2915 5.22383 4.75767 4.75767C5.22383 4.2915 5.48571 3.65925 5.48571 3C5.48571 2.34075 5.22383 1.7085 4.75767 1.24233C4.2915 0.776173 3.65925 0.514286 3 0.514286Z" fill="#A4A4A4"/>
                                            <path d="M3.00007 1.75386C2.69891 1.75386 2.45449 1.96063 2.45449 2.2154V2.2549C2.45449 2.32835 2.42001 2.39879 2.35862 2.45072C2.29723 2.50265 2.21397 2.53183 2.12715 2.53183C2.04033 2.53183 1.95707 2.50265 1.89568 2.45072C1.83429 2.39879 1.7998 2.32835 1.7998 2.2549V2.2154C1.7998 1.9461 1.92626 1.68783 2.15135 1.49741C2.37645 1.30699 2.68174 1.20001 3.00007 1.20001H3.0507C3.2855 1.2001 3.51464 1.26102 3.7073 1.37456C3.89997 1.4881 4.04691 1.64882 4.12838 1.83512C4.20985 2.02141 4.22194 2.22435 4.16302 2.41662C4.10409 2.6089 3.97699 2.78131 3.79879 2.91066L3.46272 3.15435C3.42055 3.18531 3.38668 3.22353 3.36334 3.26644C3.34001 3.30935 3.32776 3.35598 3.32741 3.40321V3.60001C3.32741 3.67346 3.29293 3.74389 3.23154 3.79583C3.17015 3.84776 3.08689 3.87694 3.00007 3.87694C2.91325 3.87694 2.82999 3.84776 2.7686 3.79583C2.70721 3.74389 2.67272 3.67346 2.67272 3.60001V3.40321C2.67272 3.14586 2.80541 2.90143 3.0363 2.73417L3.37281 2.49047C3.44959 2.4348 3.50437 2.36056 3.52978 2.27775C3.55518 2.19494 3.54999 2.10754 3.5149 2.0273C3.47982 1.94706 3.41652 1.87784 3.33352 1.82895C3.25053 1.78006 3.15183 1.75386 3.0507 1.75386H3.00007ZM3.00007 4.80001C3.11583 4.80001 3.22684 4.76111 3.30869 4.69187C3.39054 4.62262 3.43653 4.52871 3.43653 4.43078C3.43653 4.33286 3.39054 4.23894 3.30869 4.1697C3.22684 4.10045 3.11583 4.06155 3.00007 4.06155C2.88431 4.06155 2.7733 4.10045 2.69145 4.1697C2.60959 4.23894 2.56361 4.33286 2.56361 4.43078C2.56361 4.52871 2.60959 4.62262 2.69145 4.69187C2.7733 4.76111 2.88431 4.80001 3.00007 4.80001Z" fill="#A4A4A4"/>
                                        </svg>
                                    </div>
                                    <div class="timetable-choose-checkbox">
                                        <svg class="choose-checkbox" xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 10 7" fill="none">
                                            <path d="M0.5 3.68155L3.22727 6.22701L8.68182 0.772461" stroke="#3A8DFF" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="timetable-choose-footer">
                                    <div class="timetable-type timetable-star-time color-main">
                                        <div class="timetable-value">10:00</div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="5" height="3" viewBox="0 0 5 3" fill="none">
                                            <path d="M0.5 3L0 2.5L2.5 0L5 2.5L4.5 3L2.5 1L0.5 3Z" fill="#BBBBBB"/>
                                        </svg>
                                        <div class="timetable-star-time-dropdown mCustomScrollbar">
                                            <?php
                                            $timeBlocks = generateTimeBlocks();
                                            foreach ($timeBlocks as $block) {
                                                echo '<div class="time-dropdown color-main">
                                                <div>'.$block.'</div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="5" viewBox="0 0 6 5" fill="none">
                                                    <path d="M0.375 2.375L2.125 4.125L5.625 0.375" stroke="#3A8DFF" stroke-width="0.7" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>';
                                            }
                                            ?>
                                        </div>
                                        <script>
                                            (function($){
                                                $(window).on("load",function(){
                                                    $(".timetable-star-time-dropdown").mCustomScrollbar({
                                                    });
                                                });
                                            })(jQuery);
                                        </script>
                                    </div>
                                    <span>-</span>
                                    <div class="timetable-type timetable-end-time color-main">
                                        <div class="timetable-value">
                                            18:00
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="5" height="3" viewBox="0 0 5 3" fill="none">
                                            <path d="M0.5 3L0 2.5L2.5 0L5 2.5L4.5 3L2.5 1L0.5 3Z" fill="#BBBBBB"/>
                                        </svg>
                                        <div class="timetable-end-time-dropdown mCustomScrollbar">
                                            <?php
                                            $timeBlocks = generateTimeBlocks();
                                            foreach ($timeBlocks as $block) {
                                                echo '<div class="time-dropdown color-main">
                                                <div>'.$block.'</div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="5" viewBox="0 0 6 5" fill="none">
                                                    <path d="M0.375 2.375L2.125 4.125L5.625 0.375" stroke="#3A8DFF" stroke-width="0.7" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>';
                                            }
                                            ?>
                                        </div>
                                        <script>
                                            (function($){
                                                $(window).on("load",function(){
                                                    $(".timetable-end-time-dropdown").mCustomScrollbar({
                                                    });
                                                });
                                            })(jQuery);
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timetable-item">
                            <span>Воскресенье</span>
                            <div class="time-inputs color-main">
                                <input name="org_time_vs_open" type="text" class="star-time color-main" value="<?=$arrTemplate['pr_vs_open']?>">
                                <span>-</span>
                                <input name="org_time_vs_close" type="text" class="end-time color-main" value="<?=$arrTemplate['pr_vs_close']?>">
                            </div>
                            <svg class="timetable-item-svg" xmlns="http://www.w3.org/2000/svg" width="11" height="6" viewBox="0 0 11 6" fill="none">
                                <path d="M9.9 0L11 1L5.5 6L0 1L1.1 0L5.5 4L9.9 0Z" fill="#A9A9A9"/>
                            </svg>
                            <div class="hidden-weekend main-text color-main">Выходной</div>
                            <div class="timetable-choose-block">
                                <div class="timetable-choose-head">
                                    <div class="timetable-choose-text">
                                        Выходной
                                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                                            <path d="M0 3C0 2.20435 0.316071 1.44129 0.87868 0.87868C1.44129 0.316071 2.20435 0 3 0C3.79565 0 4.55871 0.316071 5.12132 0.87868C5.68393 1.44129 6 2.20435 6 3C6 3.79565 5.68393 4.55871 5.12132 5.12132C4.55871 5.68393 3.79565 6 3 6C2.20435 6 1.44129 5.68393 0.87868 5.12132C0.316071 4.55871 0 3.79565 0 3ZM3 0.514286C2.67357 0.514286 2.35034 0.578581 2.04876 0.703499C1.74718 0.828418 1.47315 1.01151 1.24233 1.24233C1.01151 1.47315 0.828418 1.74718 0.703499 2.04876C0.578581 2.35034 0.514286 2.67357 0.514286 3C0.514286 3.32643 0.578581 3.64966 0.703499 3.95124C0.828418 4.25282 1.01151 4.52685 1.24233 4.75767C1.47315 4.98849 1.74718 5.17158 2.04876 5.2965C2.35034 5.42142 2.67357 5.48571 3 5.48571C3.65925 5.48571 4.2915 5.22383 4.75767 4.75767C5.22383 4.2915 5.48571 3.65925 5.48571 3C5.48571 2.34075 5.22383 1.7085 4.75767 1.24233C4.2915 0.776173 3.65925 0.514286 3 0.514286Z" fill="#A4A4A4"/>
                                            <path d="M3.00007 1.75386C2.69891 1.75386 2.45449 1.96063 2.45449 2.2154V2.2549C2.45449 2.32835 2.42001 2.39879 2.35862 2.45072C2.29723 2.50265 2.21397 2.53183 2.12715 2.53183C2.04033 2.53183 1.95707 2.50265 1.89568 2.45072C1.83429 2.39879 1.7998 2.32835 1.7998 2.2549V2.2154C1.7998 1.9461 1.92626 1.68783 2.15135 1.49741C2.37645 1.30699 2.68174 1.20001 3.00007 1.20001H3.0507C3.2855 1.2001 3.51464 1.26102 3.7073 1.37456C3.89997 1.4881 4.04691 1.64882 4.12838 1.83512C4.20985 2.02141 4.22194 2.22435 4.16302 2.41662C4.10409 2.6089 3.97699 2.78131 3.79879 2.91066L3.46272 3.15435C3.42055 3.18531 3.38668 3.22353 3.36334 3.26644C3.34001 3.30935 3.32776 3.35598 3.32741 3.40321V3.60001C3.32741 3.67346 3.29293 3.74389 3.23154 3.79583C3.17015 3.84776 3.08689 3.87694 3.00007 3.87694C2.91325 3.87694 2.82999 3.84776 2.7686 3.79583C2.70721 3.74389 2.67272 3.67346 2.67272 3.60001V3.40321C2.67272 3.14586 2.80541 2.90143 3.0363 2.73417L3.37281 2.49047C3.44959 2.4348 3.50437 2.36056 3.52978 2.27775C3.55518 2.19494 3.54999 2.10754 3.5149 2.0273C3.47982 1.94706 3.41652 1.87784 3.33352 1.82895C3.25053 1.78006 3.15183 1.75386 3.0507 1.75386H3.00007ZM3.00007 4.80001C3.11583 4.80001 3.22684 4.76111 3.30869 4.69187C3.39054 4.62262 3.43653 4.52871 3.43653 4.43078C3.43653 4.33286 3.39054 4.23894 3.30869 4.1697C3.22684 4.10045 3.11583 4.06155 3.00007 4.06155C2.88431 4.06155 2.7733 4.10045 2.69145 4.1697C2.60959 4.23894 2.56361 4.33286 2.56361 4.43078C2.56361 4.52871 2.60959 4.62262 2.69145 4.69187C2.7733 4.76111 2.88431 4.80001 3.00007 4.80001Z" fill="#A4A4A4"/>
                                        </svg>
                                    </div>
                                    <div class="timetable-choose-checkbox">
                                        <svg class="choose-checkbox" xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 10 7" fill="none">
                                            <path d="M0.5 3.68155L3.22727 6.22701L8.68182 0.772461" stroke="#3A8DFF" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="timetable-choose-footer">
                                    <div class="timetable-type timetable-star-time color-main">
                                        <div class="timetable-value">10:00</div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="5" height="3" viewBox="0 0 5 3" fill="none">
                                            <path d="M0.5 3L0 2.5L2.5 0L5 2.5L4.5 3L2.5 1L0.5 3Z" fill="#BBBBBB"/>
                                        </svg>
                                        <div class="timetable-star-time-dropdown mCustomScrollbar">
                                            <?php
                                            $timeBlocks = generateTimeBlocks();
                                            foreach ($timeBlocks as $block) {
                                                echo '<div class="time-dropdown color-main">
                                                <div>'.$block.'</div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="5" viewBox="0 0 6 5" fill="none">
                                                    <path d="M0.375 2.375L2.125 4.125L5.625 0.375" stroke="#3A8DFF" stroke-width="0.7" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>';
                                            }
                                            ?>
                                        </div>
                                        <script>
                                            (function($){
                                                $(window).on("load",function(){
                                                    $(".timetable-star-time-dropdown").mCustomScrollbar({
                                                    });
                                                });
                                            })(jQuery);
                                        </script>
                                    </div>
                                    <span>-</span>
                                    <div class="timetable-type timetable-end-time color-main">
                                        <div class="timetable-value">
                                            18:00
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="5" height="3" viewBox="0 0 5 3" fill="none">
                                            <path d="M0.5 3L0 2.5L2.5 0L5 2.5L4.5 3L2.5 1L0.5 3Z" fill="#BBBBBB"/>
                                        </svg>
                                        <div class="timetable-end-time-dropdown mCustomScrollbar">
                                            <?php
                                            $timeBlocks = generateTimeBlocks();
                                            foreach ($timeBlocks as $block) {
                                                echo '<div class="time-dropdown color-main">
                                                <div>'.$block.'</div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="5" viewBox="0 0 6 5" fill="none">
                                                    <path d="M0.375 2.375L2.125 4.125L5.625 0.375" stroke="#3A8DFF" stroke-width="0.7" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>';
                                            }
                                            ?>
                                        </div>
                                        <script>
                                            (function($){
                                                $(window).on("load",function(){
                                                    $(".timetable-end-time-dropdown").mCustomScrollbar({
                                                    });
                                                });
                                            })(jQuery);
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        $(document).ready(function () {
                            $('.star-time, .end-time').mask('99:99');

                            $('.timetable-item').on('click',function() {
                                $(this).find('.timetable-choose-block').addClass('active');
                            });

                            $('.timetable-star-time,.timetable-end-time').on('click',function() {
                                $(this).find('.timetable-star-time-dropdown,.timetable-end-time-dropdown').addClass('active');
                                $(this).addClass('active');
                            });

                            $('.timetable-choose-checkbox').on('click',function(){
                                if($(this).hasClass('active')){
                                    $(this).removeClass('active');
                                    $(this).parents('.timetable-item').find('.hidden-weekend').removeClass('active');
                                    times = $(this).parents('.timetable-choose-block').find('.timetable-star-time .timetable-value').html().trim();
                                    timee = $(this).parents('.timetable-choose-block').find('.timetable-end-time .timetable-value').html().trim();
                                    $(this).parents('.timetable-item').find('.star-time').val(times);
                                    $(this).parents('.timetable-item').find('.end-time').val(timee);
                                }else{
                                    $(this).addClass('active');
                                    $(this).parents('.timetable-item').find('.hidden-weekend').addClass('active');
                                    $(this).parents('.timetable-item').find('.star-time, .end-time').val('00:00');
                                }
                            });

                            $('.time-dropdown').on('click',function (){
                                times = $(this).find('div').html().trim();
                                tThis = parseInt($(this).find('div').html().trim().replace(':', ''));
                                tStar = parseInt($(this).parents('.timetable-choose-block').find('.timetable-star-time .timetable-value').html().trim().replace(':',''));
                                tEnd = parseInt($(this).parents('.timetable-choose-block').find('.timetable-end-time .timetable-value').html().trim().replace(':',''));

                                // console.log(tStar);

                                if( $(this).parents('.timetable-type').hasClass('timetable-star-time') ){
                                    if ( tThis >= tEnd) {
                                        return false;
                                    }
                                    $(this).parents('.timetable-item').find('.star-time').val(times);
                                }else{
                                    if ( tThis <= tStar ) {
                                        return false;
                                    }
                                    $(this).parents('.timetable-item').find('.end-time').val(times);
                                }

                                $(this).parents('.timetable-star-time,.timetable-end-time').find('.timetable-value').html(times);

                                $(this).parents('.timetable-type').find('.time-dropdown').removeClass('active');
                                $(this).addClass('active');
                            });

                            $(document).click(function(event) {
                                if(!$(event.target).closest(".timetable-item").length){
                                    $(".timetable-choose-block").removeClass("active");
                                }
                                if(!$(event.target).closest(".timetable-star-time").length){
                                    $(".timetable-star-time-dropdown").removeClass("active");
                                    $('.timetable-star-time').removeClass('active');
                                }
                                if(!$(event.target).closest(".timetable-end-time").length){
                                    $(".timetable-end-time-dropdown").removeClass("active");
                                    $('.timetable-end-time').removeClass('active');
                                }
                            });
                        });
                    </script>
                </div>
                <div class="adm-main-content-timetable-btn">
                    <div class="adm-timetable-btn">
                        <span>Будни 5/2</span>
                    </div>
                    <div class="adm-timetable-btn active">
                        <span>Ежедневно</span>
                    </div>
                    <div class="adm-timetable-btn">
                        <span>Круглосуточно</span>
                    </div>
                </div>
                <div class="content-left-title adm-block-title">
                    Расположение
                </div>
                <div class="content-left-ymap">
                    <div class="content-left-ymap-search">
                        <input name="org_adress" placeholder="г. Москва, ул. Угрешская, д. 31Б" type="text" class="ymap-search" value="<?=$arrTemplate['pr_adress']?>" />
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                            <path d="M5.07258 5.07248C5.25229 4.89282 5.49601 4.79189 5.75012 4.79189C6.00424 4.79189 6.24795 4.89282 6.42766 5.07248L11.5001 10.1449L16.5726 5.07248C16.661 4.98094 16.7667 4.90794 16.8837 4.85771C17.0006 4.80749 17.1263 4.78105 17.2536 4.77994C17.3808 4.77884 17.507 4.80308 17.6248 4.85127C17.7426 4.89946 17.8496 4.97062 17.9395 5.0606C18.0295 5.15058 18.1007 5.25758 18.1489 5.37535C18.1971 5.49313 18.2213 5.61932 18.2202 5.74657C18.2191 5.87381 18.1927 5.99957 18.1424 6.11649C18.0922 6.23341 18.0192 6.33916 17.9277 6.42756L12.8552 11.5L17.9277 16.5725C18.1022 16.7532 18.1988 16.9953 18.1966 17.2466C18.1945 17.4978 18.0937 17.7382 17.916 17.9159C17.7383 18.0936 17.4979 18.1944 17.2467 18.1965C16.9954 18.1987 16.7533 18.1021 16.5726 17.9276L11.5001 12.8551L6.42766 17.9276C6.24692 18.1021 6.00484 18.1987 5.75357 18.1965C5.5023 18.1944 5.26194 18.0936 5.08425 17.9159C4.90657 17.7382 4.80578 17.4978 4.8036 17.2466C4.80142 16.9953 4.89801 16.7532 5.07258 16.5725L10.145 11.5L5.07258 6.42756C4.89292 6.24784 4.79199 6.00413 4.79199 5.75002C4.79199 5.4959 4.89292 5.25219 5.07258 5.07248Z" fill="#D3D3D3"/>
                        </svg>
                    </div>
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae46ce63435f78de9da8e390f0aceb24d4b166aac8508fef39fd7201eab47a946&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=true;"></script>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-menu">
    <div class="menu-wrapper">
        <div class="sticky-button">Странички</div>
        <div class="menu">
            <a href="/adm-f/">О странице</a>
            <a href="/adm-f/adm-main-page.php">Главная страница</a>
        </div>
    </div>
</div>
</body>

</html>