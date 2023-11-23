<?php
session_start();
$DB = mysqli_connect("localhost", "root", "", "project_2");
global $name, $sure_name, $organization, $position;
$s_id = $_SESSION['id'];
$query = $DB->prepare('SELECT name, surename FROM registration WHERE id=\''.$s_id.'\';');
$query->execute();
$query->bind_result($name, $sure_name);
$query->fetch();
/*echo $name;
echo $sure_name;*/
$query->close();
