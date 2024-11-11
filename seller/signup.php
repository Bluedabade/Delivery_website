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
                  background-color: #f2cd92;

        }

        .jumbotron {
            padding: 2rem;
            margin-top: 4rem;
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
                    
                    <form class="jumbotron" action="../seller_php/signup.php" method="post" enctype="multipart/form-data" >
                        <h2>สมัครร้านอาหาร</h2><br>
                        <input name="resname"  type="text" class="form-control" placeholder="ร้านของคุณ" required><br>

                        <input name="firstname"  type="text" class="form-control" placeholder="ชื่อจริง" required><br>
                        <input name="surname"  type="text" class="form-control" placeholder="นามสกุล" required><br>
                        <input name="location"  type="text" class="form-control" placeholder="ที่อยู่ของคุณ" required><br>
                        <input name="phone"  type="text" class="form-control" placeholder="เบอร์โทรศัพย์" required><br>
                        <span>อัพโหลดรูปโปรไฟล์ร้านของคุณ</span>
                        <input name="img"  type="file" name="" class="form-control" id="" required><br>
                        <input name="email"  type="email" class="form-control" placeholder="อีเมล" required><br>
                        <select name= "type"  class="form-select" required>
                        <!-- <option selected required>เลือก</option> -->
                            <?php
                            require_once("../db/connect.php");
                            $sql = "SELECT * FROM `restype`";
                            $result = $conn->query($sql);
                             while($row = $result->fetch_assoc()){ ?>
                                <option><?php echo$row['type'] ?></option>
        
                                <?php } ?>
                        </select>
                        <br>
                        <input name="password"  type="password" class="form-control" placeholder="รหัสผ่าน" required><br>
                        <button name="submit"  type="submit" class="btn btn-block btn-primary">ยืนยันการสมัคร</button>
                        <!-- <a href="signup.php" type="submit" class="btn btn-block btn-primary">สมัครผู้ใช้งานระบบ</a> -->
                        <a href="login.php" class="btn btn-block btn-danger">กลับ</a>


                    </form>
                </div>
            </div>
        </div>
    </center>
</body>

</html>