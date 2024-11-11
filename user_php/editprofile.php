<?php
session_start();
require_once("../db/connect.php");
if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $location = $_POST['location'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    

    $temp = explode('.' , $_FILES['img']['name']);
    $filename = rand() . '.' . end($temp);
    $filepath = "../upload/" . $filename;



    if(move_uploaded_file($_FILES['img']['tmp_name'], $filepath)){
        $sql = "UPDATE `user` SET `firstname`='$firstname'
        ,`surname`='$surname'
        ,`email`='$email'
        ,`img`='$filename'
        ,`location`='$location'
        ,`phone`='$phone'
         WHERE ID = '".$_SESSION['user_id']."'";
    }
    else{
        $sql = "UPDATE `user` SET `firstname`='$firstname'
        ,`surname`='$surname'
        ,`email`='$email'
        ,`location`='$location'
        ,`phone`='$phone'
         WHERE ID = '".$_SESSION['user_id']."'";
    }
    if($conn->query($sql) === true){
        echo("<script>alert('แก้ไขข้อมูลเสร็จสิ้น'); window.location ='../user/profile.php';</script>");
    }else{
        echo("<script>alert('แก้ไขข้อมูลเสร็จสิ้น'); window.location ='../user/profile.php';</script>");
    }

    


}