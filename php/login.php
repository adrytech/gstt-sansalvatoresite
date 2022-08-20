<?php

include 'database.php';
$mysqli = new mysqli("localhost", "root", "", "db_derthona");

 $name = $_POST['name'];
 $surname = $_POST['surname'];
 $password = $_POST['password'];

 echo $name ."  ". $surname;

 $mysqli->query("SELECT id, FROM users");

 echo $mysqli;
?>
