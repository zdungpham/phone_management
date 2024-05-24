<?php
$id = $_GET["id"];

$name = $_POST["name"];
$price = $_POST["tel"];


$host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "phone_management";

    $conn = new mysqli($host,$user,$pass,$db);
    if($conn->connect_error){
      die("Connect database failed");
    }

  $id = $_GET["id"];

  $sql = "UPDATE contacts SET name = '$name', tel = '$tel' WHERE id = $id";
  $conn->query($sql);
  
    header("Location: /index.php");
