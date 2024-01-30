<?php
session_start();
global $userId;

$DB = mysqli_connect("localhost", "root", "", "project_2");

if ($DB->connect_errno) {
    echo "Извините возникла проблема с подключением к бд :(";
    exit;
}
if (isset($_POST['em']) || isset($_POST['pass'])) {
    $log=$_POST['em'];
    $pas=$_POST['pass'];
    $_log= $DB->real_escape_string($log);
    $_pas= $DB->real_escape_string($pas);
    if (empty($_POST['em']) || empty($_POST['pass'])){
        echo ("Какое-то поле не заполнено");
        exit;
    }
    $query = $DB->prepare('SELECT id, email, pass FROM registration  
                         WHERE email = \''.$_log.'\'');
    $query->execute();
    $query->bind_result($userId, $us_email, $us_pass);
    $query->fetch();
if(password_verify($_pas, $us_pass)){
    echo "здесь можно реализовать страницу с кодом для авторизации"."\n";
    if($userId) {
        $_SESSION['id'] = $userId;
        echo "после переход на главную страницу";
                header('Location: ../account/acc_form.php');
    } else {
        echo "Ошибка";
    }
}
    $query->close();
}

