<?php
session_start();
require_once("../db/connect.php");
    $status = 0;
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "SELECT * FROM `restaurant` WHERE ID = '".$id."' ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

    }

    if($row['status'] == 0){
        $status = 1;
    }
    $data = "UPDATE `restaurant` SET `status`= '$status' WHERE ID = '".$id."'" ;
    if($conn->query($data) === true){
        echo("<script>alert('ทำรายการเสร็จสิ้น'); window.location ='../admin/s_appove.php';</script>");
    }