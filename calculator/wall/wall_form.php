
<?php
require("../../_partials/_header.php");
require_once("../../_partials/_helper.php");
global $selectedWindow;
?>

<title>Стараница счета стен</title>
<body>
<!-- отображение меню перехода по страницам сайта-->
<div>
    <header> <?php include("../../_partials/global_menu.php");?></header>
    <hr>
    <!-- отображение меню перехода по окнам -->
    <footer>
    <?php include("../../_partials/menu_type_build.php");?></footer>
    <hr>
    <div>
        <form method="post">
            <!--решить проблему с тем, что при нажатии на кнопку не сохраняется выбор пользователя(выбор-тип постройки)-->
            <label for="window">Выберите тип фундаметна:</label>
            <select name="window_2" id="window_2">
                <option value="w_1">односкатная</option>
                <option value="w_2">двускатная</option>
                <option value="w_3">вальмовая</option>
                <option value="w_4">ломаная</option>
            </select>
            <input type="submit" name="sub" value="Показать окно">
        </form>
        <!--сюда написать скрипт php-->
    </div>
</div>
</body>
</html>