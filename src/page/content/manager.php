<?php

if(!classes\organization::isUserAuthorizedByCookie()){
	$serv_page = 'login.php';
}elseif( empty($serv_parts['1']) ){
	$serv_page = 'index.php';
}else{
	$serv_page = 'error.php';
}
?>