<!DOCTYPE html>
<html>
<body>
	<?require 'modules/side.php';?>
	<div class="main">
		<div class="main_content">
			<div class="main_head">
				<h1 class="head_name">Новая задача</h1>
			</div>
			<div class="table_wrapper">
				<h2 class="task_title">Введите название задачи</h2>
				<div class="editor">
					<div class="editor_icons">---Тут иконки---</div>
					<div class='editor_text_cont'>
						<textarea class='editor_text' name='editor_text'>Напишите задачу</textarea>
					</div>
					<div class='editor_footer'>
						<div class='text_btn add_file'>
							Файл
						</div>
						<div class='text_btn add_check_list'>
							Чек-лист
						</div>
					</div>
				</div>
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
				<div class="check_list executor_list">
					<div class='cl_item executor_item'>
						<div class='cl_item_content'>
							<div class='executor_descr'>Исполнитель</div>
							<div class='executors'>
								<div class='executor'>
									Максим Саперов
									<div class='delete_executor'>
										<img src='/assets/tasks/img/exit_x.svg'>
									</div>
								</div>
								<div class='add_executor'>
									<img src='/assets/tasks/img/plus.svg'>
									<div class='add_executor_descr'>
										Добавить еще
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class='cl_item executor_item'>
						<div class='cl_item_content'>
							<div class='executor_descr'>Крайний срок</div>
							<div class='executors'>
							</div>
						</div>
					</div>
				</div>
				<div class="check_list executor_list">
					<div class='cl_item executor_item'>
						<div class='cl_item_content'>
							<div class='executor_descr'>Проект</div>
							<div class='executors'>
								<div class='add_executor'>
									<img src='/assets/tasks/img/plus.svg'>
									<div class='add_executor_descr'>
										Выбрать
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class='foot_btns'>
				<div class='btn foot_btn green_btn'>
					ПОСТАВИТЬ ЗАДАЧУ (CTRL+ENTER)
				</div>
				<div class='btn foot_btn white_btn'>
					ОТМЕНА
				</div>
			</div>
		</div>
	</div>
</body>
</html>