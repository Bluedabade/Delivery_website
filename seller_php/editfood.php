<?php
session_start();
require_once("../db/connect.php");
if(isset($_POST['submit'])){
    $foodid = $_POST['foodid'];
    $foodname = $_POST['foodname'];
    $price = $_POST['price'];
    $type = $_POST['type'];

    $temp = explode('.' , $_FILES['img']['name']);
    $filename = rand() . '.' . end($temp);
    $filepath = "../upload/" . $filename;

    if(move_uploaded_file($_FILES['img']['tmp_name'], $filepath)){
        $sql = "UPDATE `food` SET `foodname`='$foodname'
        ,`img`='$filename'
        ,`price`='$price'
        ,`type`='$type'
         WHERE ID = '".$foodid."'";
    }else{
        $sql = "UPDATE `food` SET `foodname`='$foodname'
        ,`price`='$price'
        ,`type`='$type'
         WHERE ID = '".$foodid."'";
    }
    if($conn->query($sql) === true){
        echo("<script>alert('ทำรายการสำเร็จ'); window.location ='../seller/';</script>");

    }
    
}
