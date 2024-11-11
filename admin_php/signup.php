<?php
require_once("../db/connect.php");
if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];

    $hashed = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    $temp = explode('.' , $_FILES['img']['name']);
    $filename = rand() . '.' . end($temp);
    $filepath = "../upload/" . $filename;

    if(move_uploaded_file($_FILES['img']['tmp_name'], $filepath)){
        $sql = "INSERT INTO `admin`(`username`, `password`, `img`, `firstname`, `surname`) 
        VALUES ('$username','$hashed','$filename','$firstname','$surname')";
    }
    if($conn->query($sql) === true){
        echo("<script>alert('สมัครใช้งานเสรจสิ้น'); window.location ='../admin/login.php';</script>");

    }
    
}