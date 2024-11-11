<?php
session_start();
require_once("../db/connect.php");
if(isset($_POST['submit'])){
    $oldpass = $conn->real_escape_string($_POST['oldpass']);

    $sql = "SELECT * FROM `restaurant` WHERE ID = '".$_SESSION['restaurant_id']."' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if(!empty($row) && password_verify($oldpass , $row['password'])){
        $newpass = password_hash($_POST['newpass'], PASSWORD_DEFAULT);
        $sql = "UPDATE `restaurant` SET `password`= '$newpass' 
        WHERE ID = '".$_SESSION['restaurant_id']."' ";

        if($conn->query($sql) === true){
            echo("<script>alert('เปลี่ยนรหัสผ่านเสร็จสิ้น'); window.location ='../seller/index.php';</script>");   
        }
    }else{
        echo("<script>alert('รหัสผ่านเดิมผิด'); window.location ='../seller/editpassword.php';</script>");
    }
}
