<?
namespace classes;

use PDO;

$elements = diseases::getElements('dis');

foreach ($elements as $element) {
	echo "element: $element <br/>";
}
?>