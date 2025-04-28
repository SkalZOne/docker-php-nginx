<?

// $login_add = classes\core::setUserCookie('organization_session','11101');
// $login = classes\core::getUserCookie('organization_session');
// $a = classes\core::other_connectDB('org');

// echo '<pre>';
// print_r($a);
// print_r($_COOKIE);
// print_r($serv_parts);
// echo '</pre>';
// echo '<br/>';

// echo $login;

if(!classes\organization::isUserAuthorizedByCookie()){
	$serv_page = 'login.php';
}elseif( empty($serv_parts['1']) ){
	$serv_page = 'sections.php';
}elseif( empty($serv_parts['2']) ){
	$serv_page = 'elements.php';
}elseif( empty($serv_parts['3']) ){
	$pr_element = $serv_parts['2'];
	$serv_page = 'index.php';
}else{
	$serv_page = 'error.php';
}
?>