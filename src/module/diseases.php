<?
namespace classes;

use PDO;

class diseases{

	public static function getUserID($code,$prefix){
		$DBH = core::other_connectDB($prefix);

		try {
			$stmt = $DBH->prepare("SELECT pr_id FROM pr_element WHERE pr_code = :code");
			$stmt->bindParam(':code', $code);
			$stmt->execute();
			
			$result = $stmt->fetch(PDO::FETCH_COLUMN);

			return $result;
		}catch(PDOException $e){
			return false;
		}
	}
	public static function checkFileExists($url) {
  		$headers = @get_headers($url);
		if (!$headers) return false; 
		foreach($headers as $header){
			if (strpos($header, '200 OK') !== false) {
			  return true;
			}
		}
		return false;
	}
	public static function getElement($id){
		// Переменные img можно объявлять не тут, а в индексе для того чтобы использовать их не только при взятии кода и JSON
		// Но и для вставки <?=$imgPathCloud;?/> внутрь HTML вёрстки 
		$imgPathCloud = "https://f1.development-3sj8e.ru/assets/default/img";//!!!!!!!!!!!!!!!
		$imgPathLocal = '/assets/default/img';//!!!!!!!!!!!!!!!

		$url = "https://file.development-3sj8e.ru/cache/content/diseases/element/";
		$file = $url . "element_$id.json";
		if (diseases::checkFileExists($file)) {
			$json = file_get_contents($file);
			$decode = json_decode($json, true);

			foreach ($decode["pr_values"] as $value) {
				//JSON: <img src="$imgPathCloud/test.png" />
			    $value['pr_element_value'] = str_replace('$imgPath', $imgPathCloud, $value['pr_element_value']);//!!!!!!!!!!!!!!!
			    $element[] = $value["pr_element_value"];
			}

			return $element;
		}else{
			return false;
		}
	}
	public static function getElements($prefix){
		$DBH = core::other_connectDB($prefix);
		try {
			$stmt = $DBH->prepare("SELECT pr_name FROM pr_element");
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_COLUMN);
			
			return $result;
		}catch(PDOException $e){
			return false;
		}
	}
	public static function getSections($prefix){
		$DBH = core::other_connectDB($prefix);
		try {
			$stmt = $DBH->prepare("SELECT pr_name FROM pr_section");
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_COLUMN);
			
			return $result;
		}catch(PDOException $e){
			return false;
		}
	}

}