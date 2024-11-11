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
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bs/bootstrap.css">

    <link rel="stylesheet" href="../css/bs/bootstrap5.css">
    <style>
        body {
            background-color: #60a6bd;
        }

        .jumbotron {
            padding: 2rem;
            margin-top: 9rem;
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
                <form class="jumbotron" action="../admin_php/addtypefood.php" method="post" enctype="multipart/form-data" >
                        <h2>เพิ่มประเภทร้านอาหาร</h2><br>
                        <input name = "type" type="text" class="form-control" placeholder="เพิ่มประเภทร้านอาหาร" required><br>
                        <span>อัพโหลดรูปประเภทร้านอาหาร</span>
                        <input type="file" name="img" class="form-control"  required><br>
                        <select id="" class="form-control">
                            <?php $sql = "SELECT * FROM `restype`";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()){ ?>
                          <option value="" ><?php echo$row['type'] ?> </option> 
                          <?php } ?>

                        </select><BR></BR>

                        <button name = "submit"  type="submit" class="btn btn-block btn-success">ยืนยันการเพิ่มประเภทร้านอาหาร</button>
                        <!-- <a href="signup.php" type="submit" class="btn btn-block btn-primary">สมัครผู้ใช้งานระบบ</a> -->
                        <a href="s_appove.php"  class="btn btn-block btn-danger">ยกเลิก</a>
                    </form>
                </div>
            </div>
        </div>
    </center>
</body>

</html>