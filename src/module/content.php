<?php

namespace classes;

use PDO;

class content
{
  public static function getElementList($databaseId, $requestedFields = null, $propertyFilters = null, $filterType = "AND",  $limit = 10, $offset = 0, $sortBy = 'id', $sortOrder = 'ASC'){
    $DBH = core::connectDB();
    
    // ---QUESTION: Нужно ли эту защиту от инъекций добавлять, а если нужно, то нужно ли делать это например для параметра $requestedFields
    // Защита от SQL-инъекций через $sort_by
    // Белый список для поля сортировки
    $allowedSortBy = ['e.id', 'e.name', 'e.code', 'e.date_create', 'e.date_update', 'e.sort', 'e.is_action']; // Допустимые поля
    if (!in_array($sortBy, $allowedSortBy)) {
        $sortBy = 'id'; // Значение по умолчанию
    }


    // Определяем список полей для выборки
    // Если указаны конкретные Поля, добавляем их в запрос
    if (!empty($requestedFields) && is_array($requestedFields)) {
      $selectedFields = "e.id, e.name, " . implode(", ", array_map(fn($property) => "e." . $property, $requestedFields));
    } else {
      // Если Поля не указаны, выбираем только id и name
      $selectedFields = "e.id, e.name";
    }
    
    // Базовый SQL-запрос
    $sql = "SELECT $selectedFields FROM element e";
    
    // Фильтрация по свойствам, если переданы фильтры
    if (!empty($propertyFilters) && is_array($propertyFilters)) {
      $placeholders = implode(',', array_fill(0, count($propertyFilters), '?'));
      
      // Присоединяем таблицу значений свойств
      $sql .= " LEFT JOIN element_value ev ON e.id = ev.element_id ";
      
      if ($filterType == "AND") {
        // Оставляем только те элементы, у которых есть ВСЕ указанные свойства (AND)
        $sql .= " WHERE ev.property_id IN ($placeholders) ";
        $sql .= " GROUP BY e.id HAVING COUNT(DISTINCT ev.property_id) = " . count($propertyFilters);
      } else {
        // Оставляем элементы, у которых есть хотя бы одно из указанных свойств (OR)
        $sql .= " WHERE ev.property_id IN ($placeholders) ";
      }
    }
    
    // Добавляем сортировку по указанному полю и порядку
    $sortBy = 'e.' . $sortBy; // Добавляем Алиас
    $sql .= " ORDER BY $sortBy $sortOrder";
    
    // Добавляем параметры для пагинации (LIMIT и OFFSET)
    $sql .= " LIMIT ? OFFSET ?";
    
    $stmt = $DBH->prepare($sql);
    
    // Привязываем параметры к подготовленному запросу
    $params = $propertyFilters ? array_values($propertyFilters) : [];
    $params[] = (int)$limit; // Лимит на количество записей
    $params[] = (int)$offset; // Смещение (для постраничной навигации)
    
    foreach ($params as $index => $param) {
      $stmt->bindValue($index + 1, $param, PDO::PARAM_INT);
    }
    
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Возвращаем массив элементов или false, если ничего не найдено
    return $result ?: false;
  }

	public static function getElement($admId, $elementId)
	{
    $DBH = core::connectDB();

    $sql = "SELECT * FROM element WHERE id=:id";
    $stmt = $DBH->prepare($sql);
		$stmt->bindValue(':id', $elementId, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;
  }
}