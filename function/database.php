<?php 
function connect(){
    $host = "127.0.0.1";
    $user = "root";
    $pwd = "root";
    $db = "phone_management";
    $conn = new mysqli($host,$user,$pwd,$db);
    if($conn->connect_error)
        die("Connect refused!");
    return $conn;
}
function query($sql){
    $conn = connect();
    return $conn->query($sql);
}