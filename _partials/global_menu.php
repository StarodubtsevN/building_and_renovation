<?php
require("_header.php");
require_once("_helper.php");
?>

<body>
<div class="option-window">
    <div class="menu">
        <a href="<?= url('account/acc_form') ?>" class="menu-text">Личный кабинет</a></div>
    <div class="menu">
        <a href="<?= url('calculator/calc_form') ?>" class="menu-text" type="button">Страница счета</a></div>
    <div class="menu">
        <a href="<?= url('') ?>" class="menu-text">Настройки </a></div>
    <div class="menu">
        <a href="<?= url('auth/sig_form') ?>" class="menu-text">Выход</a> </div>
</div>
</body>