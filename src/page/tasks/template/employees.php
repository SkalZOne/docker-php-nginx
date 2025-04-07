<!DOCTYPE html>
<html>
<body>
	<?require 'modules/side.php';?>
	<div class="main">
		<div class="main_content">
			<div class="main_head">
				<h1 class="head_name">Сотрудники</h1>
				<div class="btn btn_create">
					<div class="btn_content btn_create_content">
						Добавить
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

				    <div class='table_cell'>
							<div class='table_contaiter'>
								Сотрудник
								<img class='strelka_down' src='/assets/tasks/img/strelka_down.svg'>
							</div>
				    </div>

				    <div class='table_cell'>
							<div class='table_contaiter'>
								Подразделение<img class='strelka_down' src='/assets/tasks/img/strelka_down.svg'>
							</div>
				    </div>

				    <div class='table_cell'>
							<div class='table_contaiter'>
								E-Mail<img class='strelka_down' src='/assets/tasks/img/strelka_down.svg'>
							</div>
				    </div>

				    <div class='table_cell'>
							<div class='table_contaiter'>
								Мобильный телефон<img class='strelka_down' src='/assets/tasks/img/strelka_down.svg'>
							</div>
				    </div>

				    <div class='table_cell'>
							<div class='table_contaiter'>
								Дата последней активности<img class='strelka_down' src='/assets/tasks/img/strelka_down.svg'>
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

	    <div class='table_cell '>
			<div class='table_contaiter'>
				Максим Саперов
			</div>
		</div>

	    <div class='table_cell '>
			<div class='table_contaiter'>
				Битрикс
			</div>
		</div>

	    <div class='table_cell '>
			<div class='table_contaiter'>
				max_sap@mail.ru
			</div>
		</div>

	    <div class='table_cell '>
			<div class='table_contaiter'>
				+7 (908) 719-24-37
			</div>
		</div>

	    <div class='table_cell '>
			<div class='table_contaiter'>
				04.02.2025, 16:48
			</div>
		</div>

	</div>
	";
}
?>