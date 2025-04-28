<?php

namespace classes;

// ---QUESTION: Куда пихать дбид
$databaseId = 0;

// ---QUESTION: Параметр = [1,2] - Фильтрация по свойствам, сейчас указываются id свойства из таблицы property, надо переделать, но на что?
$elementList = content::getElementList($databaseId, ['code','sort'], [1, 2], "OR", 10, 0, 'name', 'DESC');
if ($elementList){
  printList($elementList);
}

// $element = content::getElement($databaseId, 1);
// var_dump($element);

function printList($list){
  foreach ($list as $element) {
    var_dump($element);
    echo "<br/>";
  }
}