<?php
require("_header.php");
require_once("_helper.php");
?>
<!--меню перехода по типам постройки-->
<body>
<div class="optionWindow">
    <div class="menu">
        <a href="<?= url('calculator/fund/fund_form') ?>" class="menu-text">Фундамент</a>
    </div>
    <div class="account">
        <a href="<?= url('calculator/wall/wall_form') ?>" class="menu-text" type="button">Стены</a>
    </div>
    <div class="account">
        <a href="<?= url('calculator/something/something_form') ?>" class="menu-text">Крыша</a>
    </div>
    <div class="account">
        <a href="<?= url('calculator/something/something_form') ?>" class="menu-text">Еще что-то</a>
    </div>
</div>
</body>
