<?php
namespace classes;

use PDO;

class core{
	//конект к базе данных админ. панели
	public static function connectDB(){
		global $DBH;
		if(!$DBH){
			$host = '217.114.1.18:3306';
			$dbname = 'infoaqtl_dis0';
			$user = 'infoaqtl';
			$pass = 'ePE2KygmXp0u5o87!';
			$DBH = new PDO("mysql:host=$host;dbname=$dbname;charset=UTF8", $user, $pass, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]);
			return $DBH;
		}else{
			return $DBH;
		}
	}
	//конект к сторонней базе данных
	public static function new_other_connectDB($admId, $arr = false){
		global $ODBH;
		if (!isset($ODBH[$admId]) || !$ODBH[$admId] instanceof PDO) {
			if( !is_array($arr) ){
				$arr = self::getContentById($admId, true);
			}
			$host = $arr['adm_server'];
			$dbname = $arr['adm_name'];
			$user = $arr['adm_user'];
			$pass = $arr['adm_password'];
			$ODBH[$admId] = new PDO("mysql:host=$host;dbname=$dbname;charset=UTF8", $user, $pass, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]);
			return $ODBH[$admId];
		}else{
			return $ODBH[$admId];
		}
	}
	//получить данные для подключения к бд
	public static function getContentById(int $admId, bool $decrypt = false){
		$DBH = self::connectDB();
		$stmt = $DBH->prepare("SELECT ac.*, adb.* FROM adm_content ac INNER JOIN adm_db adb ON ac.adm_db_id = adb.adm_id WHERE ac.adm_id = :admId");
		$stmt->execute([':admId' => $admId]);
		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		if($result && $decrypt){
			foreach($result as $code => &$value){
				$value = self::decryptData($value);
			}
		}
		return $result ?: false;
	}

	//конект к сторонней базе данных
	public static function other_connectDB($admId){
		global $ODBH;
		
		$arr_file = require $_SERVER['DOCUMENT_ROOT'] . '/config/connect_db.php';
		if( is_numeric($admId) ){
			$pref = 'adm_id';
		}else{
			$pref = 'adm_prefix';
		}
		
		$arr = [];	
		$key = array_search($admId, array_column($arr_file, $pref));
		if ($key !== false) {
			$value = $arr_file[$key];
			foreach ($value as $c => $v) {
				$arr[$c] = self::decryptData($v);
			}
		}
		
		if (!isset($ODBH[$arr['adm_id']]) || !$ODBH[$arr['adm_id']] instanceof PDO) {
			$host = $arr['adm_server'];
			$dbname = $arr['adm_name'];
			$user = $arr['adm_user'];
			$pass = $arr['adm_password'];
			$ODBH[$arr['adm_id']] = new PDO("mysql:host=$host;dbname=$dbname;charset=UTF8", $user, $pass, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]);
			return $ODBH[$arr['adm_id']];
		}else{
			return $ODBH[$arr['adm_id']];
		}
	}
	
	
	//шифрование данных !УБАРТЬ КЛЮЧ ПОСЛЕ ТЕСТИРОВАНИЯ
	public static function encryptData(string $data, string $key = 'IBcI4HpoZI0EPRTV', string $method = 'aes-256-cbc'){
		$ivlen = openssl_cipher_iv_length($method);
		$iv = openssl_random_pseudo_bytes($ivlen);
		$ciphertext_raw = openssl_encrypt($data, $method, $key, OPENSSL_RAW_DATA, $iv);
		$hmac = hash_hmac('sha256', $ciphertext_raw, $key, true);
		$encrypted = base64_encode($iv . $hmac . $ciphertext_raw);
		return "CRY_" . $encrypted;
	}
	
	//дешифрование данных !УБАРТЬ КЛЮЧ ПОСЛЕ ТЕСТИРОВАНИЯ
	public static function decryptData(string $data, string $key = 'IBcI4HpoZI0EPRTV', string $method = 'aes-256-cbc'){
		if( strpos($data, 'CRY_') === 0 ) {
			$data = substr($data, 4); // Удаляем префикс "CRY_"
			$c = base64_decode($data);
			$ivlen = openssl_cipher_iv_length($method);
			$iv = substr($c, 0, $ivlen);
			$hmac = substr($c, $ivlen, $sha2len = 32);
			$ciphertext_raw = substr($c, $ivlen + $sha2len);
			$original_plaintext = openssl_decrypt($ciphertext_raw, $method, $key, OPENSSL_RAW_DATA, $iv);

			$calcmac = hash_hmac('sha256', $ciphertext_raw, $key, true);

			if( hash_equals($hmac, $calcmac) ){
				return $original_plaintext;
			}
		}
		return $data; // Возвращаем исходную строку, если она не зашифрована (не начинается с CRY_)
	}
	
	public static function generateUniqCode(int $length = 16): string {
		$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
		$code = '';
		$alphabetLength = strlen($alphabet) - 1;
		for ($i = 0; $i < $length; $i++) {
			$randomIndex = random_int(0, $alphabetLength);
			$code .= $alphabet[$randomIndex];
		}
		return $code;
	}
	
	//работа с куки
	public static function setUserCookie($name, $value, $expire = 0, $path = "/", $domain = "", $secure = true, $httponly = true) {
		if ($expire > 0) {
			$expire = time() + $expire;
		}
		return setcookie($name, $value, $expire, $path, $domain, $secure, $httponly);
	}

	public static function getUserCookie($name) {
		return isset($_COOKIE[$name]) ? $_COOKIE[$name] : null;
	}	
	
	public static function deleteUserCookie($name, $path = "/", $domain = "", $secure = true, $httponly = true) {
		return setcookie($name, '', time() - 3600, $path, $domain, $secure, $httponly);
	}
	
	function deleteUserAllCookies(){
		foreach( $_COOKIE as $name => $value ){
			deleteUserCookie($name);
		}
	}
	
	public static function phoneValidation($phone, $format = 1){
		$phone = strval($phone);
		$phone = preg_replace('/\D/', '', $phone);
	
		if (strlen($phone) != 11) return "Invalid lenght phone";
	
		switch ($phone[0]) {
		  case 7:break;
		  case 8:break;
		  default:
			return "Invalid country phone";
		}
	
		$phone[0] = 7;
		$phone = "+" . $phone;
	
		switch ($format) {
		  case 1://+79999999999
			return $phone;
		  case 2://+7 (999) 999-99-99
			$phone = substr($phone, 0, 2)." (".substr($phone, 2, 3).") ".substr($phone, 5, 3)."-".substr($phone, 8, 2)."-".substr($phone, 10, 2);
			return $phone;
		  default:
			return "Undifferent format";
		}
	}

	public static function getExtension($file){
		$pathInfo = pathinfo($file);
		return isset($pathInfo['extension']) ? strtolower($pathInfo['extension']) : '';
	}
	public static function linkAdd($type,$path){
		switch ($type) {
			case 'js':
				echo "<script src='$path'></script>";
				break;
			case 'css':
				echo "<link href='$path' rel='stylesheet'>";
				break;
			default:
				return false;
				break;
		}
	}
	public static function link($page){
		$domain = "f1.development-3sj8e.ru";
		$arrResult = require $_SERVER['DOCUMENT_ROOT'] . "/page/$page/link.php";
		foreach ($arrResult as $value) {
			if (!is_array($value)) return false;;
			$type = $value[0];
			$file = $value[1];

			$path = "/assets/$page/$type/$file";
			if(array_key_exists(2, $value)) $path = "/assets/$value[2]/$type/$file";
			if (substr($file, 0, 4) == 'http') $path = $file;
			if ($type == 'lib') $type = core::getExtension($path);

			if (is_dir($path)) {
				$list = scandir($path);
				foreach ($list as $file) {
					if ($file != '.' && $file != '..'){
						core::linkAdd($type, $path . '/' . $file);
					}
				}
				unset($value);
			} else {
				core::linkAdd($type, $path);
			}
		}
	}
	public static function img($file){
		$imgPathCloud = "https://f1.development-3sj8e.ru/assets/default/img";//!!!!!!!!!!!!!!!
		echo "<img src='$imgPathCloud/chevron-right.svg' alt='chevron-right'>";
	}

	public static function test(){
		return 'GO51'; 
	}
}

?>