<?php
session_start();
require_once("../db/connect.php");
if(isset($_POST['submit'])){
    $oldpass = $conn->real_escape_string($_POST['oldpass']);

    $sql = "SELECT * FROM `admin` WHERE ID = '".$_SESSION['admin_id']."' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if(!empty($row) && password_verify($oldpass , $row['password'])){
        $newpass = password_hash($_POST['newpass'], PASSWORD_DEFAULT);
        $sql = "UPDATE `admin` SET `password`= '$newpass' 
        WHERE ID = '".$_SESSION['admin_id']."' ";

        if($conn->query($sql) === true){
            echo("<script>alert('เปลี่ยนรหัสผ่านเสร็จสิ้น'); window.location ='../admin/index.php';</script>");   
        }
    }else{
        echo("<script>alert('รหัสผ่านเดิมผิด'); window.location ='../admin/editpassword.php';</script>");
    }
}
