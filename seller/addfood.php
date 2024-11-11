<?php
session_start();
require_once("../db/connect.php");
    if(!$_SESSION['restaurant_id']){
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
        body{
            background-color: #f2cd92;
        }
        .jumbotron{
            padding: 2rem;
            margin-top: 9rem;
            border-radius:.5rem;
        }
    </style>
</head>
<body>
    <center>
        <div class="container">
            <div class="top"></div>
            <div class="container">
                <div class="col-md-5">

                <form class="jumbotron" action="../seller_php/addfood.php" method="post" enctype="multipart/form-data">
                        <h2>เพิ่มรายการอาหาร</h2><br>
                            <input type="text"  name="foodname"  class="form-control" placeholder="ชื่ออาหาร" required><br>
                            <input type="number" name="price" class="form-control" placeholder="ราคา" required><br>
                            <span>อัพโหลดรูปประเภทอาหาร</span>
                            <input type="file" name="img" class="form-control" id="" required><br>
                       
                            <span>เลือกประเภทอาหาร</span>
                            <select name= "type"  class="form-select" required>
                        <!-- <option selected required>เลือก</option> -->
                            <?php
                            require_once("../db/connect.php");
                            $sql = "SELECT * FROM `food_type` WHERE res_id = '".$_SESSION['restaurant_id']."'";
                            $result = $conn->query($sql);
                             while($row = $result->fetch_assoc()){ ?>
                                <option><?php echo$row['type'] ?></option>
        
                                <?php } ?>
                        </select><br><br>
                           <button type="submit" name="submit" class="btn btn-block btn-success">ยืนยันการเพิ่ม</button>
                           <a href="../seller/" class="btn btn-block btn-danger">กลับ</a>
                    </form>

                </div>
            </div>
        </div>
    </center>
</body>
</html>