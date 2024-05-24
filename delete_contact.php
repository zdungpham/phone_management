<?php
$id = $_GET["id"];

$host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "phone_management";

    $conn = new mysqli($host,$user,$pass,$db);
    if($conn->connect_error){
      die("Connect database failed");
    }

  $id = $_GET["id"];

  $sql = "DELETE FROM contacts WHERE id = $id";
  $conn->query($sql);
  
    header("Location: /index.php");
