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
    <link rel="stylesheet" href="../css/seller/main.css">
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
            <a href="chart.php">ยอดขาย</a>
        </nav>
        <form method="post" name="#" action="#" class="search-layout">
            <input type="search" name="" id="" class="form-contorl search outline-success" placeholder="ค้นหา ร้านอาหารหรืออาหาร">
            <button type="submit" class="btn-green">ค้นหา</button>
        </div>
    </header>
   <!-- navbar -->
   <div class="pro" >
   <?php 
    $sql = "SELECT * FROM `restaurant` WHERE ID = '".$_SESSION['restaurant_id']."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    ?>
        <div class="image">
            <img src="../upload/<?php echo$row['img'] ?>" class="c" alt="">
            
        </div>
        <div class="button" style="margin-right: 100rem; gap: 2rem;">
            <a href="addfood.php" class="btn-yellow">
                เพิ่มรายการอาหาร
               </a>&nbsp;
               <a href="addtypefood.php" class="btn-yellow">
                เพิ่มประเภทรายการอาหาร
               </a>
        </div>
       
   </div> 

   <div class="dishes">
    
    <div class="box-container">
        
    </div>
   </div> 
 

   <h3 style="margin-left: 20rem; font-size: 5rem; color: ;">เมนูของร้าน: <?php echo $row['resname'] ?></h3>

 

   <div class="menu">
    <!-- กาดร้าน ยาว -->
    <?php 
        $sql_food = "SELECT * FROM `food` WHERE res_id = '".$_SESSION['restaurant_id']."'";
        $result_food = $conn->query($sql_food);
        while($row_food = $result_food->fetch_assoc()){
        ?>
    <div class="box1">
            <div class="image1">
                <img src="../upload/<?php echo$row_food['img'] ?>" alt="">
             
            </div>
            <div class="text">
                <h2><?php echo $row_food['foodname'] ?></h2>
                <p>ราคา: <?php echo $row_food['price'] ?> บาท</p>
            </div>

            <div class="btn-layout">
            <a href="editfood.php?id=<?php echo$row_food['ID'] ?>" class="btn-de">
                แก้ไขเมนู
        </a>           
            <!-- <p>ประเภทร้านอาหาร</p> -->
         </div>
    </div>
    <!-- กาดร้าน ยาว -->
    <?php } ?>

   </div>




</body>
</html>