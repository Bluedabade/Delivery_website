<?php
session_start();
require_once("../db/connect.php");
    if(!$_SESSION['restaurant_id']){
        header("location:../");

    }
    $food_id = $_GET['id'];
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
                <?php 
        $sql_food = "SELECT * FROM `food` WHERE ID = '".$food_id."'";
        $result_food = $conn->query($sql_food);
        $row_food = $result_food->fetch_assoc();
        ?>

                <form class="jumbotron" action="../seller_php/editfood.php" method="post" enctype="multipart/form-data">
                        <h2>แก้ไขรายการอาหาร</h2><br>
                        <input type="text"  name="foodid"  class="form-control" placeholder="ชื่ออาหาร" required value = "<?php echo$row_food['ID'] ?>" hidden><br>
                            <input type="text"  name="foodname"  class="form-control" placeholder="ชื่ออาหาร" required value = "<?php echo$row_food['foodname'] ?>"><br>
                            <input type="number" name="price" class="form-control" placeholder="ราคา" required value = "<?php echo$row_food['price'] ?>"><br>
                            <span>อัพโหลดรูปประเภทอาหาร</span>
                            <input type="file" name="img" class="form-control" id="" ><br>
                            <img src="../upload/<?php echo $row_food['img'] ?>" alt="" class="a"><br>
                            <span>เลือกประเภทอาหาร</span>
                            <select name= "type"  class="form-select" required>
                        <!-- <option selected required>เลือก</option> -->
                            <?php
                            require_once("../db/connect.php");
                            $sql = "SELECT * FROM `food_type` WHERE res_id = '".$_SESSION['restaurant_id']."'";
                            $result = $conn->query($sql);?>
                            <option><?php echo$row_food['type'] ?></option>
                            <?php while($row = $result->fetch_assoc()){ ?>
                                <option><?php echo $row['type'] ?></option>
        
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