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
    <link rel="stylesheet" href="../css/admin/main.css">
    <link rel="stylesheet" href="../css/admin/bootstarp-admin.css">
</head>
<body>
    <!-- navbar -->
 <header>
        <div class="logo">
             AYOI
        </div>
        <nav class="navbar">
            <a href="index.php" >อนุมัติผู้ใช้งานระบบ</a>
            <a href="s_appove.php" class="active"> อนุมัติร้านอาหาร</a>
            <a href="r_appove.php">อนุมัติผู้ส่งอาหาร</a>
            <a href="profile.php">โปรไฟล์</a>
        </nav>
        <form method="post" name="#" action="#" class="search-layout">
            <input type="search" name="" id="a" class="form-contorl search outline-success" placeholder="ค้นหา ร้านอาหารหรืออาหาร">
            <button type="submit" class="btn-green">ค้นหา</button>
        </div>

    </header> 
   <!-- navbar -->
        
   <div class="container">
    <br>
    <br>
    <br>
    <div class="container" style="text-align:right; ">
        <a href="addtypefood.php" class="btn btn-lg btn-primary" style="font-size: 1.7rem;"> เพิ่มประเภทร้านอาหาร</a>

    </div>

    <table class="table table-hover form-contorl primary" >
    <thead>
        <tr>
            <td>
                ลำดับ
            </td>
            <td>
                ชื่อร้าน
            </td>
            <td class="a">
                รูปโปรไฟล์
            </td>
        
            <td>
                ชื่อ
                
            </td>
            <td>
             นามสกุล
            </td>
            <td>
            คำสั่ง                
            </td>
        </tr>
    </thead>
    <tbody>
    <?php
        $sql = "SELECT * FROM `restaurant`";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td>
                <?php echo $row['ID'] ?>
            </td>
            <td>
                <?php echo $row['resname'] ?>
            </td>
            <td >
                <img src="../upload/<?php echo $row['img'] ?>" alt="" class="b">
            </td>
            
            <td>
            <?php echo $row['firstname'] ?>
            </td>

            <td>
                <?php echo $row['surname'] ?>
            </td>

            <td><br>
            <?php if($row['status'] == 0){ ?>
                <a  href = "../admin_php/s_appove.php?id=<?php echo $row['ID'] ?>" class="btn btn-lg btn-success">อนุมัติ</button>
            <?php }else{ ?>
                <a  href = "../admin_php/s_appove.php?id=<?php echo $row['ID'] ?>" class="btn btn-lg btn-danger" >ยกเลิก</button>
            </td>
        </tr>
            <?php } ?>
        <?php } ?>
    </tbody>
</table>


</div>


</body>
</html>