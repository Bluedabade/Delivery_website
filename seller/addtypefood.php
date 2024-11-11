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

                    <form class="jumbotron" action="../seller_php/addtypefood.php" method="post" enctype="multipart/form-data">
                        <h2>เพิ่มประเภทรายการอาหาร</h2><br>
                            <input type="text"  name="type"  class="form-control" placeholder="ชื่อประเภทอาหาร" required><br>
                            <!-- <input type="number" name="#" class="form-control" placeholder="ราคา" required><br> -->
                            <span>อัพโหลดภาพอาหาร</span>
                            <input type="file" name="img" class="form-control" id="" required><br>
                       
                            <span>ประเภทอาหารของทางร้านคุณ</span>
                            <select class="form-select">
                        <!-- <option selected required>เลือก</option> -->
                            <?php
                            require_once("../db/connect.php");
                            $sql = "SELECT * FROM `food_type` WHERE res_id = '".$_SESSION['restaurant_id']."'";
                            $result = $conn->query($sql);
                             while($row = $result->fetch_assoc()){ ?>
                                <option><?php echo$row['type'] ?></option>
        
                                <?php } ?>
                        </select><br><br>
                           <button name ="submit" type="submit" class="btn btn-block btn-success">ยืนยันการเพิ่ม</button>
                           <a href="../seller/" class="btn btn-block btn-danger">กลับ</a>
                    </form>

                </div>
            </div>
        </div>
    </center>
</body>
</html>