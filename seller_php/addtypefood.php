<?php
session_start();
require_once("../db/connect.php");
if(isset($_POST['submit'])){
    $type = $_POST['type'];
    
    $temp = explode('.' , $_FILES['img']['name']);
    $filename = rand() . '.' . end($temp);
    $filepath = "../upload/" . $filename;

    if(move_uploaded_file($_FILES['img']['tmp_name'], $filepath)){
        $sql = "INSERT INTO `food_type`(`type`, `img`, `res_id`) 
        VALUES ('$type','$filename','".$_SESSION['restaurant_id']."')";
    }
    if($conn->query($sql) === true){
        echo("<script>alert('ทำรายการสำเร็จ'); window.location ='../seller/';</script>");

    }
    
}