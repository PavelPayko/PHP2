<?php
include 'DB.php';

// Начало вывода товаров
$startFrom = $_POST['startFrom'];

// Получаем 10 следующих товаров
$res = mysqli_query($db, "SELECT * FROM `goods` ORDER BY `id` DESC LIMIT {$startFrom}, 5");

// Формируем массив с товарами
$goods = array();
while ($row = mysqli_fetch_assoc($res))
{
    $goods[] = $row;
}

// Превращаем массив товаров в json-строку для передачи через Ajax-запрос
echo json_encode($goods);