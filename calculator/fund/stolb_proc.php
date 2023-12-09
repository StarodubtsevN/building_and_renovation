<?php
if (isset($_POST['height_s'], $_POST['diameter'], $_POST['quantity'])) {
    $height_s = str_replace(',', '.', $_POST['height_s']); /*высота*/
    $diameter = str_replace(',', '.', $_POST['diameter']); /*диаметр*/
    $quantity = str_replace(',', '.', $_POST['quantity']); /*количество столбов*/

    if (is_numeric($height_s) && is_numeric($diameter) && is_numeric($quantity)) {
        $result = /*(((3.14 * ($diameter ** 2)) /4)*$height_s)*$quantity*/ "123";
        echo 'Ответ: ' . $result;
    } else {
        echo 'Ошибка: Введите числовые значения для высоты, ширины и общей длины постройки.';
    }
} else {
    echo 'Ошибка: Не все данные были переданы.';
}