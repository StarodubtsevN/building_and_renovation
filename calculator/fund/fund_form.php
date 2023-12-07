<?php
require("../../_partials/_header.php");
require_once("../../_partials/_helper.php");
global $selectedWindow;
?>
<title>Стараница счета фундамента</title>
<body>
<header> <?php include("../../_partials/menus/global_menu.php");?></header>
<hr>
<!-- отображение меню перехода по окнам -->
<footer>
    <?php include("../../_partials/menus/menu_type_build.php");?></footer>
<hr>
<div>
    <div>
        <form method="post">
            <!--решить проблему с тем, что при нажатии на кнопку не сохраняется выбор пользователя(выбор-тип постройки)-->
            <label for="window">Выберите тип фундаметна:</label>
            <select name="window_2" id="window_2">
                <option value="w_1">Ленточный</option>
                <option value="w_2">Столбчатый</option>
                <option value="w_3">Птлиный</option>
                <option value="w_4">Свайный</option>
            </select>
            <input type="submit" name="sub" value="Показать окно">
        </form>
        <hr>
        <div>
            <!-- Отображение содержимого выбранного окна -->
            <?php
            if (isset($_POST['window_2'])){
                $selectedW = $_POST['window_2'];
                switch ($selectedW)
                {
                    case 'w_1':
                        echo '<div class="fund_calc">
                            <form action="fund_proc.php">
                              <div> 
                                <input type="text" class="input-box" placeholder="Ширина"> </div>
                              <div> 
                                <input type="text" class="input-box" placeholder="Высота"> </div>
                              <div> 
                                <input type="text" class="input-box" placeholder="Общая длина"> </div>   
                                  <input type="submit" name="sub" value="Рассчитать">                
                            </form>
                             </div> 
                                ';
                        break;
                    case 'w_2':
                        echo '2проверка';
                        break;
                    case 'w_3':
                        echo '3проверка';
                        break;
                    case 'w_4':
                        echo '4проверка';
                        break;
                    default:
                        echo ':(';
                        break;
                }
            }
/*            if (isset($_POST['window_2'])) {
                $selectedWindow = $_POST['window_2'];
                if ($selectedWindow === 'w_1') {
                    echo 'здесь должен быть калькулятор по первому типу фундамента';
                } elseif ($selectedWindow === 'w_2'){
                    echo 'здесь должен быть калькулятор по второму типу фундамента';
                } elseif ($selectedWindow === 'w_3'){
                    echo 'здесь должен быть калькулятор по третьему типу фундамента';
                } elseif ($selectedWindow === 'w_4'){
                    echo 'здесь должен быть калькулятор по четвертому типу фундамента';
                }
            }*/ ?>
        </div>
    </div>
</body>
</html>