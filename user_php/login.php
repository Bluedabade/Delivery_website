<?php
session_start();
require_once("../db/connect.php");
if(isset($_POST['submit'])){
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    $sql = "SELECT * FROM `user` WHERE  email = '".$email."' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if(!empty($row) && password_verify($password , $row['password'])){
        if($row['status'] == 1){
                $_SESSION['user_id'] = $row['ID'];
                header("location:../user/index.php");
        }else{
                echo("<script>alert('คุณยังไม่ได้รับการอนุมัติ'); window.location ='../user/login.php';</script>");
        }
    }else{
        echo("<script>alert('อีเมลหรือรหัสผ่านผิด'); window.location ='../user/login.php';</script>");
    }
}
