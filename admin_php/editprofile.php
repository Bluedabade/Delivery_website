<?php
session_start();
require_once("../db/connect.php");
if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];


    
    $temp = explode('.' , $_FILES['img']['name']);
    $filename = rand() . '.' . end($temp);
    $filepath = "../upload/" . $filename;

    if(move_uploaded_file($_FILES['img']['tmp_name'], $filepath)){
        $sql = "UPDATE `admin` SET `username`= '$username'
        ,`img`= '$filename'
        ,`firstname`= '$firstname'
        ,`surname`= '$surname'
         WHERE ID = '".$_SESSION['admin_id']."' ";
    }else{
        $sql = "UPDATE `admin` SET `username`= '$username'
        ,`firstname`= '$firstname'
        ,`surname`= '$surname'
         WHERE ID = '".$_SESSION['admin_id']."' ";
    }


    if($conn->query($sql) === true){
        echo("<script>alert('แกไขข้อมูลเสร็จสิ้น'); window.location ='../admin/profile.php';</script>");

    }
    
}