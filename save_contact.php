<?php

$name = $_POST["name"];
$tel = $_POST["tel"];

$host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "phone_management";

    $conn = new mysqli($host,$user,$pass,$db);
    if($conn->connect_error){
      die("Connect database failed");
    }

$sql = "INSERT INTO contacts(name, tel) VALUES('$name', '$tel')";
$conn->query($sql);
header("Location: /index.php");

