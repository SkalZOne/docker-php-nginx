<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>МедПортал</title>
    <link rel="stylesheet" href="https://layout.development-3sj8e.ru/site/css/style.css">
    <link rel="stylesheet" href="https://layout.development-3sj8e.ru/site/css/tpl_style.css">
    <link rel="stylesheet" href="https://layout.development-3sj8e.ru/site/css/custom_classes.css">
    <link rel="stylesheet" href="https://layout.development-3sj8e.ru/site/css/owl.carousel.min.css">
    <script src="https://layout.development-3sj8e.ru/site/lib/jquery/jquery.js"></script>
    <link href="https://layout.development-3sj8e.ru/site/lib/bootstrap/style.css" rel="stylesheet">
    <script src="https://layout.development-3sj8e.ru/site/lib/bootstrap/script.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://layout.development-3sj8e.ru/site/js/scripts.js"></script>
    <script src="https://layout.development-3sj8e.ru/site/js/owl.carousel.min.js"></script>
</head>

<body>
    <!-- Ну тут типо header должен быть, но давайте без меня -->
    <div style="height: 100px;"><br/><h1 class="text-center">ДЕМО СТРАНИЦА</h1></div>
    <!-- Ну тут типо header должен быть, но давайте без меня -->

    <div class="main-container">
		<div id="About-us" class="main-container-head">
			<div class="main-container-head-wrapper">
				<div class="head-left-wrapper">
					<div class="head-left">
						<div class="head-left-top">
							<div class="head-left-top-logo">
								<img src="/dell/org_logo_<?=$arrTemplate['pr_id']?>.png">
							</div>
							<div class="head-left-top-medals">
								<div class="medal">
									<img src="https://layout.development-3sj8e.ru/site/img/medal-1.svg" alt="check">
								</div>
								<div class="medal">
									<img src="https://layout.development-3sj8e.ru/site/img/medal-2.svg" alt="check">
								</div>
								<div class="medal">
									<img src="https://layout.development-3sj8e.ru/site/img/medal-3.svg" alt="check">
								</div>
								<div class="medal">
									<img src="https://layout.development-3sj8e.ru/site/img/medal-4.svg" alt="check">
								</div>
								<div class="medal">
									<img src="https://layout.development-3sj8e.ru/site/img/medal-5.svg" alt="check">
								</div>
								<div class="dropdown-arrow">
									<img src="https://layout.development-3sj8e.ru/site/img/arrow-down.svg" alt="arrow">
								</div>
							</div>
						</div>
						<div class="head-left-title">
							<h3><?=$arrTemplate['pr_name']?></h3>
							<div class="point-head">
								<?=$arrTemplate['type'][$arrTemplate['pr_type']]?>
							</div>
						</div>
						<div class="head-left-bottom">
							<div class="head-left-bottom-info">
								<div class="info-block-left">
									<div class="info-block-left-title color-main head-title">
										<img src="https://layout.development-3sj8e.ru/site/img/point.svg" alt="point">
										<span>Адрес</span>
									</div>
									<div class="info-block-left-text color-main main-text"><?=$arrTemplate['pr_adress']?></div>
									<div class="info-block-left-title color-main head-title">
										<img src="https://layout.development-3sj8e.ru/site/img/phone.svg" alt="phone">
										<span>Телефон</span>
									</div>
									<div class="info-block-left-text color-main main-text">
										<a href="tel:<?=$arrTemplate['pr_phone']?>"><?=$arrTemplate['pr_phone']?></a>
									</div>
									<div class="info-block-left-title color-main head-title">
										<img src="https://layout.development-3sj8e.ru/site/img/web.svg" alt="web">
										<span>Сайт</span>
									</div>
									<div class="info-block-left-text color-main main-text">
										<a href="<?=$arrTemplate['pr_site']?>" target="blank"><?=$arrTemplate['pr_site']?></a>
									</div>
									<div class="info-block-left-title color-main head-title">
										<img src="https://layout.development-3sj8e.ru/site/img/email.svg" alt="email">
										<span>E-mail</span>
									</div>
									<div class="info-block-left-text color-main main-text">
										<a href="mailto:<?=$arrTemplate['pr_email']?>"><?=$arrTemplate['pr_email']?></a>
									</div>
								</div>
								<div class="info-block-right">
									<div class="info-block-right-title color-main head-title">
										<img src="https://layout.development-3sj8e.ru/site/img/clock.svg" alt="clock">
										<span>Время работы</span>
									</div>
									<div class="info-block-timetable">
										<div class="info-block-timetable-container">
											<div class="timetable-left main-text">
												<span <?if( $arrTemplate['pr_pn_open'] == '00:00:00' && $arrTemplate['pr_pn_close'] == '00:00:00' ){?>style="color: #E73821; font-weight: 500"<?}?>>Понедельник</span>
											</div>
											<div class="timetable-right main-text">
												<?if( $arrTemplate['pr_pn_open'] == '00:00:00' && $arrTemplate['pr_pn_close'] == '00:00:00' ){?>
													<span style="color: #E73821; font-weight: 500">Выходной</span>
												<?}else{?>
													<?=date("H:i", strtotime($arrTemplate['pr_pn_open']));?> - <?=date("H:i", strtotime($arrTemplate['pr_pn_close']));?>
												<?}?>
											</div>
										</div>
										<div class="info-block-timetable-container">
											<div class="timetable-left main-text">
												<span <?if( $arrTemplate['pr_vt_open'] == '00:00:00' && $arrTemplate['pr_vt_close'] == '00:00:00' ){?>style="color: #E73821; font-weight: 500"<?}?>>Вторник</span>
											</div>
											<div class="timetable-right main-text">
												<?if( $arrTemplate['pr_vt_open'] == '00:00:00' && $arrTemplate['pr_vt_close'] == '00:00:00' ){?>
													<span style="color: #E73821; font-weight: 500">Выходной</span>
												<?}else{?>
													<?=date("H:i", strtotime($arrTemplate['pr_vt_open']));?> - <?=date("H:i", strtotime($arrTemplate['pr_vt_close']));?>
												<?}?>
											</div>
										</div>
										<div class="info-block-timetable-container">
											<div class="timetable-left main-text">
												<span <?if( $arrTemplate['pr_sr_open'] == '00:00:00' && $arrTemplate['pr_sr_close'] == '00:00:00' ){?>style="color: #E73821; font-weight: 500"<?}?>>Среда</span>
											</div>
											<div class="timetable-right main-text">
												<?if( $arrTemplate['pr_sr_open'] == '00:00:00' && $arrTemplate['pr_sr_close'] == '00:00:00' ){?>
													<span style="color: #E73821; font-weight: 500">Выходной</span>
												<?}else{?>
													<?=date("H:i", strtotime($arrTemplate['pr_sr_open']));?> - <?=date("H:i", strtotime($arrTemplate['pr_sr_close']));?>
												<?}?>
											</div>
										</div>
										<div class="info-block-timetable-container">
											<div class="timetable-left main-text">
												<span <?if( $arrTemplate['pr_ch_open'] == '00:00:00' && $arrTemplate['pr_ch_close'] == '00:00:00' ){?>style="color: #E73821; font-weight: 500"<?}?>>Четверг</span>
											</div>
											<div class="timetable-right main-text">
												<?if( $arrTemplate['pr_ch_open'] == '00:00:00' && $arrTemplate['pr_ch_close'] == '00:00:00' ){?>
													<span style="color: #E73821; font-weight: 500">Выходной</span>
												<?}else{?>
													<?=date("H:i", strtotime($arrTemplate['pr_ch_open']));?> - <?=date("H:i", strtotime($arrTemplate['pr_ch_close']));?>
												<?}?>
											</div>
										</div>
										<div class="info-block-timetable-container">
											<div class="timetable-left main-text">
												<span <?if( $arrTemplate['pr_pt_open'] == '00:00:00' && $arrTemplate['pr_pt_close'] == '00:00:00' ){?>style="color: #E73821; font-weight: 500"<?}?>>Пятница</span>
											</div>
											<div class="timetable-right main-text">
												<?if( $arrTemplate['pr_pt_open'] == '00:00:00' && $arrTemplate['pr_pt_close'] == '00:00:00' ){?>
													<span style="color: #E73821; font-weight: 500">Выходной</span>
												<?}else{?>
													<?=date("H:i", strtotime($arrTemplate['pr_pt_open']));?> - <?=date("H:i", strtotime($arrTemplate['pr_pt_close']));?>
												<?}?>
											</div>
										</div>
										<div class="info-block-timetable-container">
											<div class="timetable-left main-text">
												<span <?if( $arrTemplate['pr_sb_open'] == '00:00:00' && $arrTemplate['pr_sb_close'] == '00:00:00' ){?>style="color: #E73821; font-weight: 500"<?}?>>Суббота</span>
											</div>
											<div class="timetable-right main-text">
												<?if( $arrTemplate['pr_sb_open'] == '00:00:00' && $arrTemplate['pr_sb_close'] == '00:00:00' ){?>
													<span style="color: #E73821; font-weight: 500">Выходной</span>
												<?}else{?>
													<?=date("H:i", strtotime($arrTemplate['pr_sb_open']));?> - <?=date("H:i", strtotime($arrTemplate['pr_sb_close']));?>
												<?}?>
											</div>
										</div>
										<div class="info-block-timetable-container">
											<div class="timetable-left main-text">
												<span <?if( $arrTemplate['pr_vs_open'] == '00:00:00' && $arrTemplate['pr_vs_close'] == '00:00:00' ){?>style="color: #E73821; font-weight: 500"<?}?>>Воскресенье</span>
											</div>
											<div class="timetable-right main-text">
												<?if( $arrTemplate['pr_vs_open'] == '00:00:00' && $arrTemplate['pr_vs_close'] == '00:00:00' ){?>
													<span style="color: #E73821; font-weight: 500">Выходной</span>
												<?}else{?>
													<?=date("H:i", strtotime($arrTemplate['pr_vs_open']));?> - <?=date("H:i", strtotime($arrTemplate['pr_vs_close']));?>
												<?}?>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="head-right">
					<div class="head-right-info">
						<div class="head-right-info-top">
							<div class="info-top-license">
								<img src="https://layout.development-3sj8e.ru/site/img/license.svg" alt="license">
								<span>Лицензия проверена</span>
							</div>
							<div class="info-top-rating">
								<img src="https://layout.development-3sj8e.ru/site/img/rating.svg" alt="rating">
								<span>Рейтинг: 4000</span>
							</div>
						</div>
						<div class="head-right-info-middle">
							<h3 class="head-title">Описание</h3>
							<span class="main-text"><?=$arrTemplate['pr_desc']?>
										<!--
											<span style="color: #1A58AD; cursor: pointer;">подробнее</span>
										-->
							</span>
							<h3 class="head-title">Как добраться</h3>
							<span class="main-text"><?=$arrTemplate['pr_way']?></span>
						</div>
						<div class="head-right-info-bottom">
							<div class="info-bottom-btn btn-main">
								Записаться на прием
							</div>
						</div>
					</div>
					<div class="head-right-image">
						<img src="https://layout.development-3sj8e.ru/site/img/head-right-image.png" alt="head-right-image">
					</div>
				</div>
			</div>
		</div>
    </div>
</body>

</html>