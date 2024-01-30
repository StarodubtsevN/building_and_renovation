<?php
if (!empty($_POST)) if (isset($_POST['height_p'], $_POST['length_p'], $_POST['widths_p'])) {
    $height = str_replace(',', '.', $_POST['height_p']);
    $width = str_replace(',', '.', $_POST['length_p']);
    $total_length = str_replace(',', '.', $_POST['widths_p']);

    if (is_numeric($height) && is_numeric($width) && is_numeric($total_length)) {
        $result = $height * $width * $total_length;
        echo 'Ответ: ' . $result;
    } else {
        echo 'Ошибка: Введите числовые значения для высоты, ширины и общей длины постройки.';
    }
} else {
    echo 'Ошибка: Не все данные были переданы.';
}