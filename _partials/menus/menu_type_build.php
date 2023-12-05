<?php
require("../_partials/_header.php");
require_once("../_partials/_helper.php");
?>
<!--меню перехода по типам постройки-->
<body>
<div class="optionWindow">
    <div class="account">
        <a href="<?= url('calculator/fund_proc') ?>" class="account-text">Фундамент</a>
    </div>
    <div class="account">
        <a href="<?= url('calculator/wall_proc') ?>" class="account-text" type="button">Стены</a>
    </div>
    <div class="account">
        <a href="<?= url('calculator/something_proc') ?>" class="account-text">Крыша</a>
    </div>
    <div class="account">
        <a href="<?= url('calculator/something_proc') ?>" class="account-text">Еще что-то</a>
    </div>
</div>
</body>
