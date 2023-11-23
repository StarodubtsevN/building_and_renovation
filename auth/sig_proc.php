<?php
// подключение к бд
$db = mysqli_connect("localhost", "root", "", "project_2");

if ($db->connect_errno) {
    echo "Извините возникла проблема с подключением к бд :(";
    exit;
}

if (isset($_POST['fam']) || isset($_POST['name']) || isset($_POST['em']) || isset($_POST['pass'])){
// запись в строковые переменные
    $fam=$_POST['fam'];
    $name=$_POST['name'];
    $em=$_POST['em'];
    $pass=$_POST['pass'];
    $pass = password_hash($pass, PASSWORD_DEFAULT);
// проверка на заполнение еще нужно доделать, чтобы выводилось сообщение в то поле, которое не заполнено
    if (empty($_POST['fam']) || empty($_POST['name']) || empty($_POST['em']) || empty($_POST['pass'])){
        echo ("Какое-то поле не заполнено");
        //header('Location: /pnt/code/auth/_sig_form.php');
        exit;
    }
    $sms_fam = htmlspecialchars($fam);
    $sms_email = htmlspecialchars($em);
    $sms_fio = urldecode($fam);
    $sms_email = urldecode($em);
    $sms_fio = trim($fam);
    $sms_email = trim($em);
    // перевод данных в формат бд
    $_fam= $db->real_escape_string($fam);
    $_name= $db->real_escape_string($name);
    $_em= $db->real_escape_string($em);
    $_pass= $db->real_escape_string($pass);

// @todo сделать так, чтобы пароль хешировался в базе данных
    $que= "INSERT INTO registration (surename, name, email, pass) VALUES ('$_fam','$_name','$_em','$_pass')";
    $res = $db->query($que);
// @todo сделать проверку на то есть ли пользователь, если же есть, то сделать переход на страницу авторизации
    if ($res) echo "после этого должен быть переход на главную страницу";header('Location: ../account/acc_form.php');
// @todo сделать отправку сообщения и сделать подтверждение кода,
/*    mail(".$sms_email.", "Заявка с сайта", "ФИО:".$fam.". E-mail: ".$em." \r\n");
      echo "Сообщение успешно отправлено";
    } else {
        echo "При отправке сообщения возникли ошибки";
    }*/
}




