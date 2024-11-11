<?php
session_start();
require_once("../db/connect.php");
if(isset($_POST['submit'])){
    $resname = $_POST['resname'];
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $location = $_POST['location'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    

    $temp = explode('.' , $_FILES['img']['name']);
    $filename = rand() . '.' . end($temp);
    $filepath = "../upload/" . $filename;



    if(move_uploaded_file($_FILES['img']['tmp_name'], $filepath)){
        $sql = "UPDATE `restaurant` SET `resname`='$resname'
        ,`firstname`='$firstname'
        ,`surname`='$surname'
        ,`email`='$email'
        ,`img`='$filename'
        ,`location`='$location'
        ,`phone`='$phone'
        ,`type`='$type'
         WHERE  ID = '".$_SESSION['restaurant_id']."'";
    }
    else{
        $sql = "UPDATE `restaurant` SET `resname`='$resname'
        ,`firstname`='$firstname'
        ,`surname`='$surname'
        ,`email`='$email'
        ,`location`='$location'
        ,`phone`='$phone'
        ,`type`='$type'
         WHERE  ID = '".$_SESSION['restaurant_id']."'";
    }
    if($conn->query($sql) === true){
        echo("<script>alert('แก้ไขข้อมูลเสร็จสิ้น'); window.location ='../seller/profile.php';</script>");
    }else{
        echo("<script>alert('แก้ไขข้อมูลเสร็จสิ้น'); window.location ='../seller/profile.php';</script>");
    }

    


}