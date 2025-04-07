<?
namespace classes;

use PDO;

class organization{
	
	public static function isUserAuthorizedByCookie(){
		$DBH = core::other_connectDB('org');
		
		$sessionId = isset($_COOKIE['organization_session']) ? $_COOKIE['organization_session'] : null;

		if(!$sessionId){ return false; }

		try {
			$stmt = $DBH->prepare("SELECT pr_user_id FROM pr_sessions WHERE pr_code = :session_id");
			$stmt->bindParam(':session_id', $sessionId);
			$stmt->execute();
			return $stmt->rowCount() > 0;
		}catch(PDOException $e){
			return false;
		}
	}
	
	public static function login() {
		$DBH = core::other_connectDB('org');
		
		$ip = $_SERVER['REMOTE_ADDR'];
        $user_agent = $_SERVER['HTTP_USER_AGENT'];

        // Валидация данных
        $login = isset($_POST['login']) ? trim($_POST['login']) : '';
        $password = isset($_POST['password']) ? trim($_POST['password']) : '';

        if( empty($login) || empty($password) ) {
            return "Логин и пароль должны быть заполнены.";
        }

        // if( !ctype_alnum($login) ) {
            // return "Логин может содержать только буквы и цифры.";
        // }

        if( strlen($password) < 6 ) {
            return "Пароль должен быть не менее 6 символов.";
        }

        try{
            $stmt = $DBH->prepare("SELECT * FROM pr_user WHERE pr_email = :login");
            $stmt->bindParam(':login', $login);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if( $result && password_verify($password, $result['pr_password']) ){
				$uniq = core::generateUniqCode();
			
				core::setUserCookie('organization_session', $uniq);
				$stmt = $DBH->prepare("INSERT INTO `pr_sessions`(`pr_user_id`, `pr_code`) VALUES (:id, :code)");
				$stmt->bindParam(':id', $result['pr_id']);
				$stmt->bindParam(':code', $uniq);
				$stmt->execute();
				
                return true;
            }else{
                return "Неверный логин или пароль.";
            }
        }catch(PDOException $e){
			return "Ошибка авторизации.";
        }
    }
	
	public static function getUserId(){
		$DBH = core::other_connectDB('org');
		
		$sessionId = isset($_COOKIE['organization_session']) ? $_COOKIE['organization_session'] : null;

		if(!$sessionId){ return false; }

		try {
			$stmt = $DBH->prepare("SELECT pr_user_id FROM pr_sessions WHERE pr_code = :session_id");
			$stmt->bindParam(':session_id', $sessionId);
			$stmt->execute();
			$result = $stmt->fetch(PDO::FETCH_ASSOC); // Извлекаем результат в виде ассоциативного массива

			if($result && isset($result['pr_user_id'])){
				return $result['pr_user_id'];
			}else{
				return false;
			}
		}catch(PDOException $e){
			return false;
		}
	}
	
	public static function getCenter($prId){
		$DBH = core::other_connectDB('org');
		$userId = self::getUserId();
		
		if( $userId == false ){
			return 'error'; //не авторизован
		}
		
		$sql = "SELECT * FROM 
					pr_organiztion_center 
					LEFT JOIN pr_organiztion_center_time ON pr_organiztion_center.pr_id = pr_organiztion_center_time.pr_organiztion_id
					WHERE 
					pr_organiztion_center.pr_id = :pr_id";
		$stmt = $DBH->prepare($sql); 
		$stmt->execute([':pr_id' => $prId]);
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		return $result;
	}
	
	public static function getCenterType(){
		$DBH = core::other_connectDB('org');
		$userId = self::getUserId();
		
		if( $userId == false ){
			return 'error'; //не авторизован
		}
		
		$sql = "SELECT * FROM pr_organiztion_center_type";
		$stmt = $DBH->prepare($sql); 
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		foreach( $result as $code=>$value ){
			$res[$value['pr_id']] = $value['pr_name'];
		}
		return $res;
	}
	
	public static function updateCenter(){
		$DBH = core::other_connectDB('org');
		$userId = self::getUserId();
		
		if( $userId == false ){
			return 'error'; //не авторизован
		}
		
		$uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/dell/';
		if (isset($_FILES['org_foto']) && $_FILES['org_foto']['error'] === UPLOAD_ERR_OK) {
			$fileTmpName = $_FILES['org_foto']['tmp_name'];

			$fileName = $_FILES['org_foto']['name'];
			$fileNameCmps = explode(".", $fileName);
			$fileExtension = strtolower(end($fileNameCmps));
			
			// $newFileName = 'org_foto_' . $_POST['org_id'] . '.' . $fileExtension;
			$newFileName = 'org_foto_' . $_POST['org_id'] . '.png';
			$uploadPath = $uploadDir . $newFileName;
			
			move_uploaded_file($fileTmpName, $uploadPath);
		}
		if (isset($_FILES['org_logo']) && $_FILES['org_logo']['error'] === UPLOAD_ERR_OK) {
			$fileTmpName = $_FILES['org_logo']['tmp_name'];

			$fileName = $_FILES['org_logo']['name'];
			$fileNameCmps = explode(".", $fileName);
			$fileExtension = strtolower(end($fileNameCmps));
			
			// $newFileName = 'org_logo_' . $_POST['org_id'] . '.' . $fileExtension;
			$newFileName = 'org_logo_' . $_POST['org_id'] . '.png';
			$uploadPath = $uploadDir . $newFileName;
			
			move_uploaded_file($fileTmpName, $uploadPath);
		}
		
		$sql = "UPDATE pr_organiztion_center SET 
					pr_name = :pr_name,
					pr_adress = :pr_adress,
					pr_phone = :pr_phone,
					pr_site = :pr_site,
					pr_email = :pr_email,
					pr_desc = :pr_desc,
					pr_way = :pr_way,
					pr_type = :pr_type
				WHERE
					pr_id = :pr_id
				";
		$stmt = $DBH->prepare($sql); 
		$stmt->execute([
			':pr_id' => $_POST['org_id'],
			':pr_name' => $_POST['org_name'],
			':pr_adress' => $_POST['org_adress'],
			':pr_phone' => $_POST['org_phone'],
			':pr_site' => $_POST['org_site'],
			':pr_email' => $_POST['org_email'],
			':pr_desc' => $_POST['org_desc'],
			':pr_way' => $_POST['org_way'],
			':pr_type' => $_POST['org_type']
		]);
		
		$sql = "UPDATE `pr_organiztion_center_time` SET 
					pr_pn_open = :pr_pn_open,
					pr_pn_close = :pr_pn_close,
					pr_vt_open = :pr_vt_open,
					pr_vt_close = :pr_vt_close,
					pr_sr_open = :pr_sr_open,
					pr_sr_close = :pr_sr_close,
					pr_ch_open = :pr_ch_open,
					pr_ch_close = :pr_ch_close,
					pr_pt_open = :pr_pt_open,
					pr_pt_close = :pr_pt_close,
					pr_sb_open = :pr_sb_open,
					pr_sb_close = :pr_sb_close,
					pr_vs_open = :pr_vs_open,
					pr_vs_close = :pr_vs_close 
				WHERE 
					pr_organiztion_id = :pr_id
				";
		$stmt = $DBH->prepare($sql); 
		$stmt->execute([
			':pr_id' => $_POST['org_id'],
			':pr_pn_open' => $_POST['org_time_pn_open'],
			':pr_pn_close' => $_POST['org_time_pn_close'],
			':pr_vt_open' => $_POST['org_time_vt_open'],
			':pr_vt_close' => $_POST['org_time_vt_close'],
			':pr_sr_open' => $_POST['org_time_sr_open'],
			':pr_sr_close' => $_POST['org_time_sr_close'],
			':pr_ch_open' => $_POST['org_time_ch_open'],
			':pr_ch_close' => $_POST['org_time_ch_close'],
			':pr_pt_open' => $_POST['org_time_pt_open'],
			':pr_pt_close' => $_POST['org_time_pt_close'],
			':pr_sb_open' => $_POST['org_time_sb_open'],
			':pr_sb_close' => $_POST['org_time_sb_close'],
			':pr_vs_open' => $_POST['org_time_vs_open'],
			':pr_vs_close' => $_POST['org_time_vs_close']
		]);
		
		return true;
	}
	
	public static function test(){
		return 'GO51'; 
	}
}
?>