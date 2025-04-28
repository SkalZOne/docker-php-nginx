<?
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
session_start();

$serv_basePath = $_SERVER['DOCUMENT_ROOT'] . '/page/';
$serv_requestedPath = isset($_REQUEST['path']) ? $_REQUEST['path'] : '';
$serv_decodedPath = urldecode($serv_requestedPath);
$serv_parts = explode('/', $serv_decodedPath);
$serv_parts = array_filter($serv_parts);

if( isset($serv_parts['1']) ){
	if( $serv_parts['1'] == 'ajax' ){
		require $serv_basePath.'ajax.php'; //ПРОВЕРЯЕМ И ИСПОЛНЯЕМ AJAX ЗАПРОС
	}elseif( is_dir($serv_basePath.$serv_parts['1']) ){
	    echo $serv_basePath.$serv_parts['1'].'/manager.php';
		require $serv_basePath.$serv_parts['1'].'/manager.php'; //ОБРАБОТКА ЧПУ
		require $serv_basePath.'/header.php'; //ПОДКЛЮЧАЕМ ШАПКУ - СЕО, ПОДКЛЮЧЕНИЯ
		require $serv_basePath.'/page.php'; //СОБИРАЕМ СТРАНИЦУ
	}else{
		require $serv_basePath . '404.php';
	}
}else{
	// echo '<br/>111';
}

echo '<pre>';
print_r($_REQUEST);
print_r($_SERVER);
echo '</pre>';
