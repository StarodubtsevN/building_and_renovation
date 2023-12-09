<?php
require("../../_partials/_header.php");
require_once("../../_partials/_helper.php");
?>
<title>Стараница счета фундамента</title>
<body>
<header> <?php include("../../_partials/global_menu.php");?></header>
<hr>
<!-- отображение меню перехода по окнам -->
<footer>
    <?php include("../../_partials/menu_type_build.php");?></footer>
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
                        echo '
    <form name="form1"  action="lent_proc.php" method="POST">
        <label for="height">Высота:</label>
        <input type="text" name="height" id="height"><br><br>

        <label for="width">Ширина:</label>
        <input type="text" name="width" id="width"><br><br>

        <label for="total_length">Общая длина постройки:</label>
        <input type="text" name="total_length" id="total_length"><br><br>

        <button class="bottom-reg" type="submit" name="ras">Рассчитать</button>
    </form>
    <div id="result"></div>
    <script>
        // При отправке формы отменяем стандартное поведение и отправляем данные через AJAX
        document.querySelector("form1").addEventListener("ras", function(event) {
            event.preventDefault();
            const form = new FormData(this);
            fetch("lent_proc.php", {
                method: "POST",
                body: form
            })
            .then(response => response.text())
            .then(data => {
                document.getElementById("result").innerHTML = data;
            })
            .catch(error => {
                console.error("Ошибка:", error);
            });
        });
    </script>
</body>
</html> 
';
                        break;
                    case 'w_2':
                        echo '    
    <form name="form2" action="stolb_proc.php" method="POST">
        <label for="height_s">Высота столба:</label>
        <input type="text" name="height_s" id="height_s"><br><br>

        <label for="diameter">Диаметр столба:</label>
        <input type="text" name="diameter" id="diameter"><br><br>

        <label for="quantity ">Количество стоблов:</label>
        <input type="text" name="quantity " id="quantity "><br><br>

        <button class="bottom-reg" type="submit" name="res">Рассчитать</button>
    </form>
    <div id="result_s"></div>
    <script>
        // При отправке формы отменяем стандартное поведение и отправляем данные через AJAX
        document.querySelector("form2").addEventListener("res", function(event) {
            event.preventDefault();
            const form_s = new FormData(this);
            fetch("stolb_proc.php", {
                method: "POST",
                body: form
            })
            .then(response => response.text())
            .then(data => {
                document.getElementById("result_s").innerHTML = data;
            })
            .catch(error => {
                console.error("Ошибка:", error);
            });
        });
    </script>
</body>
</html> ';
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
 ?>
        </div>
    </div>
</body>
</html>