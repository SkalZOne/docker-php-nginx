<?
// echo '<pre>';
// print_r($_POST);
// print_r($serv_parts);
// echo '</pre>';
// echo '~~~';

$serv_part_1 = $serv_parts['1'] ?? null;
$serv_part_2 = $serv_parts['2'] ?? null;

if ($serv_part_1 && $serv_part_2) {
	$className = 'classes\\' . $serv_part_1;

    if(method_exists($className, $serv_part_2) && is_callable([$className, $serv_part_2])) {
      $a = $className::$serv_part_2();
    }else{
		echo "Метод {$serv_part_2} не найден или не является вызываемым в классе {$className}!";
		exit;
    }
}else{
	echo "Некорректный запрос: отсутствует название класса или метода!";
	exit;
}
