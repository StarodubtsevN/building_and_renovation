<?php
require ("../_partials/_header.php");
require_once ("../_partials/_helper.php");
global $selectedWindow;
?>

<title>Стараница счета</title>
<body>
<!--меню перехода по страницам сайта-->
<div>
<!--<div class="photo">
            <img src="../../image/Male_User-1024.webp" alt="Ваше фото" height="162px" width="162px">
        </div>-->
<div class="account">
        <a href="<?= url('account/acc_form') ?>" class="account-text">Личный кабинет</a>
    </div>
    <div class="account">
        <a href="<?= url('calculator/calc_form') ?>" class="account-text" type="button">Страница счета</a>
    </div>
    <div class="account">
        <a href="<?= url('') ?>" class="account-text">Настройки </a>
    </div>
    <div class="account">
        <a href="<?= url('auth/sig_form') ?>" class="account-text">Выход</a> <!--сделать так, чтобы стералась сессия при выходе-->
    </div>
    <!-- Форма выбора окна -->
    <form method="post">
        <!--решить проблему с тем, что при нажатии на кнопку не сохраняется выбор пользователя(выбор-тип постройки)-->
        <label>Выберите тип постройки:</label>
        <select name="window" id="window">
            <option value="window1">Фундамент</option>
            <option value="window2">Стены</option>
            <option value="window3">Придумать еще, что-то</option>
        </select>
        <input type="submit" name="submit" value="Показать окно">
    </form>
    <hr>
    <div>
        <!-- Отображение содержимого выбранного окна -->
        <?php
        // Проверяем, была ли отправлена форма
        if (isset($_POST['window'])) {
            // Получаем выбранное значение из меню
            $selectedWindow = $_POST['window'];
            // В зависимости от выбора пользователя, подключаем нужное содержимое
            if ($selectedWindow === 'window1') {
                include('fund_proc.php');
            } elseif ($selectedWindow === 'window2') {
                include('wall_proc.php');
            } elseif ($selectedWindow === 'window3'){
                include('something_proc.php');
            }
        }
        ?>
    </div>
</div>
</body>



