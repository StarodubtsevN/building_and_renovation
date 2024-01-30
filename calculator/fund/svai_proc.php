<?php
if (!empty($_POST)) if (isset($_POST['radius'], $_POST['depth'], $_POST['quantity'])) {
    $radius = str_replace(',', '.', $_POST['radius']);
    $depth = str_replace(',', '.', $_POST['depth']);
    $quantity = str_replace(',', '.', $_POST['quantity']);

    if (is_numeric($radius) && is_numeric($depth) && is_numeric($quantity)) {
        $result = 3.14 * ($radius**2) * $depth * $quantity;
        echo 'Ответ: ' . $result;
    } else {
        echo 'Ошибка: Введите числовые значения для высоты, ширины и общей длины постройки.';
    }
} else {
    echo 'Ошибка: Не все данные были переданы.';
}