<?php
session_start();
require_once("../db/connect.php");
if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $location = $_POST['location'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    
    $hashed = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $temp = explode('.' , $_FILES['img']['name']);
    $filename = rand() . '.' . end($temp);
    $filepath = "../upload/" . $filename;

    $status = 0;

    if(move_uploaded_file($_FILES['img']['tmp_name'], $filepath)){
        $sql = "INSERT INTO `user`(`firstname`, `surname`, `email`, `password`, `img`, `location`, `phone`, `status`) 
        VALUES ('$firstname','$surname','$email','$hashed','$filename','$location','$phone','$status')";
    }
    if($conn->query($sql) === true){
        echo("<script>alert('สมัครใช้งานเสรจสิ้น'); window.location ='../user/login.php';</script>");

    }
    else{
        echo("<script>alert('ไม่สำเร็จ'); window.location ='../user/signup.php';</script>");
    }

}