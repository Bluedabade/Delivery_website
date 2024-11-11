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
    <link rel="stylesheet" href="../css/user/rider.css">
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
        </nav>
     

        <form method="post" name="#" action="#" class="search-layout">
            <input type="text" name="" id="" class="form-contorl search outline-success" placeholder="ค้นหา ร้านอาหารหรืออาหาร">
            <button type="submit" class="btn-green">ค้นหา</button>
        </form>
        </div>

    </header>
   <!-- navbar -->
        


   <div class="dishes">
     
    <div class="box-container">



    </div>

   </div> 

   <div class="menu">
    <!-- กาดร้าน ยาว -->
    <?php
    $sql_res = "SELECT * FROM `restaurant`";
   $result_res = $conn->query($sql_res);
   while($row_res = $result_res->fetch_assoc()){ 
   ?>
    <div class="box1">
            <div class="image1">
                <img src="../upload/<?php echo $row_res['img'] ?>" alt="">
             
            </div>
            <div class="text">
                <h2><?php echo $row_res['resname'] ?></h2>
                <p>ประเภทร้านอาหาร: <?php echo $row_res['type'] ?></p>
            </div>

            <div class="btn-layout">
            <a href="res.php?id=<?php echo $row_res['ID'] ?>" class="btn-de">
                ดูร้านอาหาร
   </a>           
            <!-- <p>ประเภทร้านอาหาร</p> -->
         </div>
    </div>
    <!-- กาดร้าน ยาว -->
    <?php } ?>
     
   </div>




</body>
</html>