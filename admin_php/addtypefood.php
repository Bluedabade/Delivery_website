<?php
require_once("../db/connect.php");
if(isset($_POST['submit'])){
    $type = $_POST['type'];
    
    $temp = explode('.' , $_FILES['img']['name']);
    $filename = rand() . '.' . end($temp);
    $filepath = "../upload/" . $filename;

    if(move_uploaded_file($_FILES['img']['tmp_name'], $filepath)){
        $sql = "INSERT INTO `restype`(`type`, `img`) 
        VALUES ('$type','$filename')";
    }
    if($conn->query($sql) === true){
        echo("<script>alert('สมัครใช้งานเสรจสิ้น'); window.location ='../admin/s_appove.php';</script>");

    }
    
}