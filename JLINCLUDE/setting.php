<?php
date_default_timezone_set("Asia/Kolkata");

$user_pwd="e{3*Bq%&z*.j";
$db_user="anychatadmin";
$host="localhost";
$db_name="AnyChat";

$conn = new mysqli($host, $db_user, $user_pwd, $db_name);     // OOPS
$conn2 = new mysqli($host, $db_user, $user_pwd, $db_name);   // OOPS
$conn3 = new mysqli($host, $db_user, $user_pwd, $db_name);  // OOPS
$conn4 = mysqli_connect($host, $db_user, $user_pwd, $db_name);  //Procedural
 
 try {
  $pdo= new PDO("mysql:host=$host;dbname=$db_name", $db_user, $user_pwd); // PDO
  // set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {}

?>
