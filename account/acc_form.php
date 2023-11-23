<?php
require ("../_partials/_header.php");
require_once ("../_partials/_helper.php");
require ('acc_proc.php');
global $name;
global $sure_name; ?>
<title>Личный кабинет</title>
<body>
    <div class="option-window">
<!--    <div class="photo">
       <img src="../../image/Male_User-1024.webp" alt="Ваше фото" height="162px" width="162px">
    </div>-->
    <div class="account">
        <a href="<?= url('account/acc_form') ?>" class="account-text">Личный кабинет</a>
    </div>
    <div class="account" type="reset">
        <a href="<?= url('') ?>" class="account-text">Подписка</a>
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
</div>

<div class="window-account">
<!--    <img src="../../image/Male_User-1024.webp" alt="ваше фото" width="100px" height="100px" class="image-home">
-->    <p class="home-name"><?php echo $name ?></p>
    <p class="home-surname"><?php echo $sure_name ?></p>
</div>
</body>
</html>
