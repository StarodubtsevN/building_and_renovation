<?php
require("../_partials/_header.php");
require_once("../_partials/_helper.php");
?>

<body>
<div class="option-window">
    <div class="account">
        <a href="<?= url('account/acc_form') ?>" class="account-text">Личный кабинет</a></div>
    <div class="account">
        <a href="<?= url('calculator/calc_form') ?>" class="account-text" type="button">Страница счета</a></div>
    <div class="account">
        <a href="<?= url('') ?>" class="account-text">Настройки </a></div>
    <div class="account">
        <a href="<?= url('auth/sig_form') ?>" class="account-text">Выход</a> </div>
</div>
</body>