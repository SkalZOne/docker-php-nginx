<?	
	//данные для шаблона
	$arrTemplate = classes\organization::getCenter($serv_parts['2']);
	if( !$arrTemplate )
		exit('данные не найдены');
	
	$arrTemplate['type'] = classes\organization::getCenterType();
	
	require $_SERVER['DOCUMENT_ROOT'] . '/template/personal-organization/center.php';