<?php

// Include Database
$config = [
  'db_engine' => 'mysql',
  'db_host' => '127.0.0.1',
  'db_name' => 'db_derthona',
  'db_user' => 'root',
  'db_password' => '',
];

$db_config = $config['db_engine'] . ":host=".$config['db_host'] . ";dbname=" . $config['db_name'];

try {
  $pdo = new PDO($db_config, $config['db_user'], $config['db_password'], [
      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
  ]);
      
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}catch (PDOException $e) {
  exit("Impossibile connettersi al database: " . $e->getMessage());

}

//Login

 $name = strtolower($_POST['name']);
 $surname = strtolower($_POST['surname']);
 $password = $_POST['password'];
 $json = json_encode($name);

 $conn = new mysqli('127.0.0.1', 'root', '', 'db_derthona');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, surname, password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    if($name  === strtolower($row["name"]) && $surname === strtolower($row["surname"]) && $password === $row["password"]){
        // echo "ciao " .$row["name"];
      session_start();
      $_SESSION['id'] = $row['id']; 
      
      header("location: ../reservedarea.php");
        
    } else {
    }

  }
} else {
  echo "0 results";
}



$conn->close();

 

?>
