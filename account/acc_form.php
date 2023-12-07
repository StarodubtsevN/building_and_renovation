<?php
require ("../_partials/_header.php");
require_once ("../_partials/_helper.php");
require ('acc_proc.php');
global $name;
global $sure_name;
?>
<title>Личный кабинет</title>
<div>
    <header> <?php include("../_partials/global_menu.php");?></header>

    <div class="window-account">
        <p class="home-name"><?php echo "Имя пользователя: ".$name ?></p>
        <p class="home-surname"><?php echo "Фамилия пользователя: ".$sure_name ?></p>
    </div>
</div>
</body>
</html>
