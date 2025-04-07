<?
namespace classes;

use PDO;

$sections = diseases::getSections('dis');

foreach ($sections as $section) {
	echo "section: $section <br/>";
}
?>