<?php

include 'database.php';


 $name = strtolower($_POST['name']);
 $json = json_encode($name);
 $surname = strtolower($_POST['surname']);
 $password = $_POST['password'];
 $url = '../reservedarea.html';

 $conn = new mysqli('127.0.0.1', 'root', '', 'db_derthona');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

function redirect($url) {
  header('Location: '.$url);
  die();
}

$sql = "SELECT id, name, surname, password FROM users";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    if($name  === strtolower($row["name"]) && $surname === strtolower($row["surname"]) && $password === $row["password"]){
        // echo "ciao " .$row["name"];
        
      redirect($url);
        
    } else {
    }

  }
} else {
  echo "0 results";
}



$conn->close();

 

?>