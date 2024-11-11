<?php
session_start();
require_once("../db/connect.php");
if(isset($_POST['submit'])){
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);

    $sql = "SELECT * FROM `admin` WHERE username = '".$username."' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if(!empty($row) && password_verify($password , $row['password'])){
        $_SESSION['admin_id'] = $row['ID'];
        header("location:../admin/index.php");
    }else{
        echo("<script>alert('ชื่อผู้ใช้หรือรหัสผ่านผิด'); window.location ='../admin/login.php';</script>");
    }
}
