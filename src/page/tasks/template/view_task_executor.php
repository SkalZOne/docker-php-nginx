<!DOCTYPE html>
<html>
<body>
	<?require 'modules/side.php';?>
	<div class="main">
		<div class="main_content">
			<div class="main_head">
				<h1 class="head_name">Создать дизайн страницы, информационного медицинского портала</h1>
			</div>
			<div class='row'>
				<div class="table_wrapper view_left">
					<h2 class="task_title">Задача № 1 - ждёт выполнения</h2>
					<div class="task_descr">Насрать кругом</div>
					<div class='check_list'>
						<div class='cl_header'>
							<h3 class="cl_title">Чек-лист 1 </h3>
							<div class='cl_progress_bar'>
								<div class='cl_progress_bar_fill'>
								</div>
							</div>
							<div class='cl_progress'>
								Выполненно 5 из 10
							</div>
						</div>


						<div id='cl_items' class='cl_items'>
							<div class='cl_item'>
								<div class='drag_btn'><img src='/assets/tasks/img/cl_drag.svg'></div>
								<div class='cl_item_content'>
									<img src='/assets/tasks/img/checkbox.svg'>
									<div class='cl_item_position'>1.</div>
									<textarea class='cl_item_text' name='cl_item_text' spellcheck="false">Выполнено 0 из 10</textarea>
								</div>
							</div>
							<div class='cl_item'>
								<div class='drag_btn'><img src='/assets/tasks/img/cl_drag.svg'></div>
								<div class='cl_item_content'>
									<img src='/assets/tasks/img/checkbox.svg'>
									<div class='cl_item_position'>2.</div>
									<textarea class='cl_item_text' name='cl_item_text' spellcheck="false">Выполнено 0 из 10</textarea>
								</div>
							</div>
						</div>

						<div class='cl_items'>
							<div class='cl_item'>
								<div class='cl_item_content beetwen'>
									<div class='cl_btn'>
										<p class='add_cl_item'>+</p>
										<p class='cl_btn_base'>добавить пункт</p>
									</div>
									<div class='cl_btn cl_btn_red'>Удалить чек-лист</div>
								</div>
							</div>
						</div>
					</div>
					<div class='foot_btns'>
						<div class='btn foot_btn green_btn'>
							Начать выполнение
						</div>
						<div class='btn foot_btn blue_btn'>
							Задача выполнена
						</div>
						<div class='btn foot_btn orange_btn'>
							Приостановить
						</div>
					</div>
				</div>
				<div class="table_wrapper view_right card">
					<div class='card_header'>
						Ждёт выполнения с 04.02.2025 14:25
					</div>
					<div class='card_row'>
						<div class='card_left'>Крайний срок:</div>
						<div class='card_right'>Нет</div>
					</div>
					<div class='card_row'>
						<div class='card_left'>Проект:</div>
						<div class='card_right'>Роботы</div>
					</div>
					<div class='card_row'>
						<div class='card_left'>Поставлена:</div>
						<div class='card_right'>04.02.2025 14:25</div>
					</div>
					<div class='card_row'>
						<div class='card_user_head'>
							Постановщик:
						</div>
					</div>
					<div class='card_row card_row_user'>
						<div class='card_user'>
							Максончик
						</div>
					</div>
					<div class='card_row'>
						<div class='card_user_head'>
							Исполнитель:
						</div>
					</div>
					<div class='card_row card_row_user'>
						<div class='card_user'>
							Максончик2
						</div>
					</div>
					<div class='card_row'>
						<div class='card_left'>Соисполнители:</div>
						<div class='card_right'>Нет</div>
					</div>
					<div class='card_row'>
						<div class='card_left'>Наблюдатели:</div>
						<div class='card_right'>Нет</div>
					</div>
				</div>
			</div>

			<div class="table_wrapper">
				<div class='title_row'>
					<h3 class="comms_title">Комментарии</h3>
					<div class="comms_count comms_blue">1</div>
					<div class="comms_count comms_gray">0</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>