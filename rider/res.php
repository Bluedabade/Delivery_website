<?php
session_start();
require_once("../db/connect.php");
    if(!$_SESSION['rider_id']){
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
    <link rel="stylesheet" href="../css/user/res.css">
    <!-- <link rel="stylesheet" href="../css/user/main.css"> -->
</head>

<body>
    <!-- navbar -->
    <header>
        <div class="logo">
            AYOI
        </div>
        <nav class="navbar">
            <a href="index.php" class="active">หน้าหลัก</a>
            <a href="profile.php">โปรไฟล์</a>
            <a href="status.php">สถาณะการส่ง</a>
            <a href="chart.php">หน้าตระกล้า</a>
        </nav>


        <form method="post" action="search.php" class="search-layout">
            <input type="text" name="search" class="form-contorl search outline-success" placeholder="ค้นหา ร้านอาหารหรืออาหาร" required>
            <button type="submit" class="btn-green">ค้นหา</button>
        </form>
            </div>

    </header>
    <!-- navbar -->
    <?php 
    $sql_res = "SELECT * FROM `restaurant` WHERE ID = '".$_SESSION['seller_id']."'";
    $result_res = $conn->query($sql_res);
    $row_res = $result_res->fetch_assoc();
    ?>

    <div class="pro">
        <div class="image">
            <img src="../upload/<?php echo$row_res['img'] ?>" class="c" alt="">
        </div>

    </div>
    <h2 style="margin-left: 20rem; font-size: 5rem;"><?php echo$row_res['resname'] ?></h2>





    <h2 style="margin-left: 20rem; font-size: 5rem;">ออเดอร์ของทางร้าน</h2>
    <div class="menu">
    <?php 
        $sql_food = "SELECT * FROM `food` WHERE res_id = '".$_SESSION['seller_id']."'";
        $result_food = $conn->query($sql_food);
        while($row_food = $result_food->fetch_assoc()){
        ?>
        <!-- กาดร้าน ยาว -->
        <div class="box1">
            <div class="image1">
                <img src="../upload/<?php echo $row_food['img'] ?>" alt="">

            </div>
            <div class="text">
                <h2><?php echo $row_food['foodname'] ?></h2>
                <p>ราคา: <?php echo $row_food['price'] ?> บาท</p>
            </div>

            <div class="btn-layout">
                <button href="res.php" class="btn-de">
                    รับออเดอร์
                </button>
                <!-- <p>ประเภทร้านอาหาร</p> -->
            </div>
        </div>
        <!-- กาดร้าน ยาว -->
    <?php } ?>
 
    </div>




</body>

</html>