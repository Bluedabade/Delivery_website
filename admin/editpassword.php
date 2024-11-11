<?php
session_start();
require_once("../db/connect.php");
    if(!$_SESSION['admin_id']){
        header("location:../");

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขโปรไฟล์</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bs/bootstrap.css">
    <link rel="stylesheet" href="../css/bs/bootstrap5.css">

    <style>
        body {
            background-color: #60a6bd;
        }

        .jumbotron {
            padding: 2rem;
            margin-top: 5rem;
            border-radius: .5rem;
        }
    </style>
</head>

<body>
    <center>
        <div class="container">
            <div class="top"></div>
            <div class="container">
                <div class="col-md-5">
                    <?php 
                    $sql = "SELECT * FROM `admin` WHERE ID = '".$_SESSION['admin_id']."'";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    ?>
                    
                    <form class="jumbotron" action="../admin_php/editpassword.php" method="post" enctype="multipart/form-data" >
                        <h2>แก้ไขรหัสผ่าน</h2><br>
                        <input name="oldpass" type="password" class="form-control" placeholder="รหัสผ่านเก่า" required  ><br>
                        <input name="newpass" type="password" class="form-control" placeholder="รหัสผ่านใหม่" required ><br>
                        <button type="submit" name="submit" class="btn btn-block btn-primary">ยืนยันการแก้ไข</button>

                        <a href="index.php" class="btn btn-block btn-danger">กลับ</a>

                    </form>
                </div>
            </div>
        </div>
    </center>
</body>

</html>