<?php
if (isset($_POST['height'], $_POST['width'], $_POST['total_length'])) {
    $height = str_replace(',', '.', $_POST['height']);
    $width = str_replace(',', '.', $_POST['width']);
    $total_length = str_replace(',', '.', $_POST['total_length']);

    if (is_numeric($height) && is_numeric($width) && is_numeric($total_length)) {
        $res = $height * $width * $total_length;
        echo 'Ответ: ' . $res;
    } else {
        echo 'Ошибка: Введите числовые значения для высоты, ширины и общей длины постройки.';
    }
} else {
    echo 'Ошибка: Не все данные были переданы.';
}

