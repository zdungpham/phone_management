<?php 
require_once("database.php");
function get_contacts(){
    $sql = "select * from contacts";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}