<?php
$search = $_POST['search'];
session_start();
require_once("../db/connect.php");
    if(!$_SESSION['user_id']){
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
    <link rel="stylesheet" href="../css/user/main.css">
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



    <div class="dishes">

        <div class="box-container">

            <!-- กาดเมนู -->

    <div class="menu">
        <!-- กาดร้าน ยาว -->
        <?php
    $sql_res = "SELECT * FROM `restaurant` WHERE resname = '".$search."'";
    $result_res = $conn->query($sql_res);
    while($row_res = $result_res->fetch_assoc()){ 
    ?>
        <div class="box1">
            <div class="image1">
                <img src="../upload/<?php echo $row_res['img'] ?>" alt="">

            </div>
            <div class="text">
                <h2>
                    <?php echo $row_res['resname'] ?>
                </h2>
                <p>ประเภทร้านอาหาร:
                    <?php echo $row_res['type'] ?>
                </p>
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
        <?php
        if(empty($row_res)){
        ?>

        <h2>ไม่พบร้านที่คุณค้นหา: <?php echo $search ?></h2>

        <?php } ?>
    </div>




</body>

</html>