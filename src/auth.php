<?

namespace classes;

// Подключение к БД
use PDO;
use PDOException;
try {
    $dbh = new PDO('mysql:host=172.22.0.3;dbname=test_db', 'admin', 'admin');
} catch (PDOException $e) {
    echo $e->getMessage();
}

// Функции
function isMail($string) {
    if (preg_match('/@.*\.\w.*/', $string)) return true;
}

function getUserByMailOrPhone()

$email_phone = $_POST['email_phone'];


isMail($email_phone) ? 
$user = $dbh->query("SELECT * FROM users WHERE email='$email_phone'")->fetch() : 
$user = $dbh->query("SELECT * FROM users WHERE phone='$email_phone'")->fetch();





// print_r(core::phoneValidation($_POST['email_phone']));

// print_r($_POST['email_phone']);
