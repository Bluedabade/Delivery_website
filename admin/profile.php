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
                    
                    <form class="jumbotron" action="../admin_php/editprofile.php" method="post" enctype="multipart/form-data" >
                        <h2>แก้ไขโปรไฟล์</h2><br>
                        <input name="firstname" type="text" class="form-control" placeholder="ชื่อจริง" required VALUE = "<?php echo $row['firstname'] ?>" ><br>
                        <input name="surname" type="text" class="form-control" placeholder="นามสกุล" required VALUE = "<?php echo $row['surname'] ?>"><br>
                        <span>อัพโหลดรูปโปรไฟล์ของคุณ</span>
                        <input name="img" type="file"  class="form-control" id=""><br>
                        <img src="../upload/<?php echo $row['img'] ?>" alt="" class="b">
                        <br>
                        <br>
                        <input name="username" type="text" class="form-control" placeholder="อีเมล" required VALUE = "<?php echo $row['username'] ?>"><br>
                        <button type="submit" name="submit" class="btn btn-block btn-primary">ยืนยันการแก้ไข</button>
                        <a href="editpassword.php" class="btn btn-block btn-warning">แก้ไขรหัสผ่าน</a>
                        <a onclick= "return confirm('ยืนยันการออกจากระบบ')" href="../admin_php/logout.php" class="btn btn-block btn-danger">ออกจากระบบ</a>
                        <a href="index.php" class="btn btn-block btn-danger">กลับ</a>

                    </form>
                </div>
            </div>
        </div>
    </center>
</body>

</html>