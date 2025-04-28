<!DOCTYPE html>
<html>
<body>
	<?require 'modules/side.php';?>
	<div class="main">
		<div class="main_content">
			<div class="main_head">
				<h1 class="head_name">Список задач</h1>
				<div class="btn btn_create">
					<div class="btn_content btn_create_content">
						Создать
					</div>
				</div>
			</div>
			<div class="filter">
				<div class="filter_content">
					<p class="filter_descr">Мои:</p>
					<div class="filter_btns">
						<div class="filter_btn_cont">
							<span class="announce_count count_inwork">1</span>
							<p id="btn_filter_inwork"  class="btn filter_btn">В работе</p>
						</div>
						<div class="filter_btn_cont">
							<span class="announce_count count_soonexpired">1</span>
							<p id="btn_filter_soonexpired" class="btn filter_btn filter_btn_select">Подходит срок</p>
						</div>
						<div class="filter_btn_cont">
							<span class="announce_count count_expired">1</span>
							<p id="btn_filter_expired" class="btn filter_btn">Просрочены</p>
						</div>
						<div class="filter_btn_cont">
							<span class="announce_count count_complete">0</span>
							<p id="btn_filter_complete" class="btn filter_btn">Завершённые</p>
						</div>
					</div>
					<div class="filter_btn_right">Прочитать все</div>
				</div>
				<div class="filter_content relative">
					<div id="btn_filter_proj" class="btn filter_btn_proj">
						<p class="">Проекты</p>
						<p class="filter_btn_right">▾</p>
					</div>
					<div class="over hidden">
						<div class="btns_over_list">
							<div class="btn btn_over"><p>Aqirus</p></div>
							<div class="btn btn_over"><p>CMS</p></div>
							<div class="btn btn_over"><p>Aqirus</p></div>
						</div>
					</div>
				</div>
			</div>
			<div class="table_wrapper">
				<div class="table">
				  <div class="table_row table_header">

				    <div id="T_select" class='table_cell'>
							<div class='table_contaiter'>
								<img src='/assets/tasks/img/checkbox.svg'>
							</div>
				    </div>

				    <div id="T_settings" class='table_cell'>
							<div class='table_contaiter'>
								<img src='/assets/tasks/img/settings.svg'>
							</div>
				    </div>

				    <div id="T_name" class='table_cell'>
							<div class='table_contaiter'>
								Название
								<img class='strelka_down' src='/assets/tasks/img/strelka_down.svg'>
							</div>
				    </div>

				    <div id="T_zakrep" class='table_cell'>
							<div class='table_contaiter'>
							</div>
				    </div>

				    <div class='table_cell'>
							<div class='table_contaiter'>
								Дата создания<img class='strelka_down' src='/assets/tasks/img/strelka_down.svg'>
							</div>
				    </div>

				    <div class='table_cell'>
							<div class='table_contaiter'>
								Крайний срок<img class='strelka_down' src='/assets/tasks/img/strelka_down.svg'>
							</div>
				    </div>

				    <div class='table_cell'>
							<div class='table_contaiter'>
								Постановщик<img class='strelka_down' src='/assets/tasks/img/strelka_down.svg'>
							</div>
				    </div>

				    <div class='table_cell'>
							<div class='table_contaiter'>
								Исполнитель<img class='strelka_down' src='/assets/tasks/img/strelka_down.svg'>
							</div>
				    </div>

				  </div>
				  <?=tableRow(true,0);?>
				  <?=tableRow(true,1);?>
				  <?=tableRow(false,2);?>
				  <?=tableRow(false,3);?>
				</div>
				<div class='table_footer'>
			    <div class='tf_blocks'>
			    	<div class='tf_block'>
			    		ОТМЕЧЕНО: 
			    		<div class="tf_select">
			    			0 / 4
			    		</div>
			    	</div>
			    	<div class='tf_block'>
			    		СТРАНИЦЫ: 
			    		<div class="tf_pages">
		    				1 | 2 | 3
			    		</div>
			    	</div>
			    	<div class='tf_block'>
			    		НА СТРАНИЦЕ:
			    		<div class="tf_count">
			    			10 <img class='strelka_down' src='/assets/tasks/img/strelka_down.svg'>
			    		</div>
			    	</div>
			    </div>
				</div>
				<div class='table_footer_actions'>
			    <div class='tf_blocks tfa_blocks'>
			    	<div class='tf_block tfa_block'>
			    		<div class="tf_action">
			    			Выберите действие
			    			<img class='strelka_down' src='/assets/tasks/img/strelka_down.svg'>
			    		</div>
			    		<div class="tf_accept">
			    			Применить
			    		</div>
			    	</div>
			    </div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?
function tableRow($a,$b){
	echo "
		<div class='table_row'>

	    <div class='table_cell '>
				<div class='table_contaiter'>
					<img src='/assets/tasks/img/checkbox.svg'>
				</div>
			</div>

	    <div class='table_cell '>
				<div class='table_contaiter'>
					<img src='/assets/tasks/img/3rows.svg'>
				</div>
			</div>

	    <div class='table_cell'>
				<div class='table_contaiter'>
					Создать дизайн страницы, информздать дизайн страницы, информаационного медицинского портала
				</div>
			</div>

	    <div class='table_cell '>
				<div class='table_contaiter'>
					";
					if ($a) {
						echo "
							<img src='/assets/tasks/img/fixed.svg'>
						";
					} else {
						echo "
							<img src='/assets/tasks/img/open.svg'>
						";
					}
					echo "
				</div>
			</div>

	    <div class='table_cell '>
				<div class='table_contaiter'>
					27 декабря 2023, 12:00
				</div>
			</div>

	    <div class='table_cell '>
				<div class='table_contaiter'>
					";
					switch ($b) {
						case 0:
							echo "
								<div class='deadline no_dl'>
									Без срока
								</div>";
							break;
						case 1:
							echo "
								<div class='deadline over_dl'>
									Задача просрочена
								</div>";
							break;
						case 2:
							echo "
								<div class='deadline soon_dl'>
									Подходит срок
								</div>";
							break;
						default:
							echo "27 декабря 2023, 12:00";
							break;
					}
					echo "
				</div>
			</div>

	    <div class='table_cell '>
				<div class='table_contaiter'>
					Максим Саперов
				</div>
			</div>

	    <div class='table_cell '>
				<div class='table_contaiter'>
					Максим Саперов
				</div>
			</div>

		</div>
	";
}
?>