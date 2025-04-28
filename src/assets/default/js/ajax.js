$(document).ready(function() {
	console.log('работает');
	
	
	
	 $('form').submit(function(event) { // Выбираем все формы на странице. Если нужна конкретная, используйте её id, например $('#myForm')
		event.preventDefault(); // Предотвращаем стандартную отправку формы

var formData = new FormData();

		// Собираем обычные поля
		$(this).find(':input').each(function(){
			var fieldName = $(this).attr('name');
			var fieldValue = $(this).val();

			if($(this).is(':checkbox') || $(this).is(':radio')){
				if ($(this).is(':checked')) {
				  formData.append(fieldName, fieldValue);
				}
			}else if($(this).is(':file')){
			// Обработка файлов
				var files = $(this)[0].files;
				for (var i = 0; i < files.length; i++) {
				  formData.append(fieldName, files[i]); // Добавляем каждый файл в FormData
				}
			}else{
				formData.append(fieldName, fieldValue);
			}
		});
		
		// console.log(formData);


		$.ajax({
			url: $(this).attr('action'), // URL из атрибута action формы
			method: $(this).attr('method'), // Метод из атрибута method формы (POST, GET)
			data: formData,
			processData: false,
			contentType: false,
			success: function(response) {
			// Обработка успешного ответа от сервера
			// console.log("Данные успешно отправлены", response);
				location.reload();
			},
			error: function(error) {
			// Обработка ошибки
			console.error("Ошибка отправки данных", error);
			}
		});
	});
	
});