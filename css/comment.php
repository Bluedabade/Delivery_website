<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าหลัก</title>
    <link rel="stylesheet" href="../css/main-com.css">
</head>
<body>
 <!-- navbar นะจ๊ะ -->
    <header>
       <a href="index.php"> <div class="logo">AYOI</div></a>
        <div class="navbar">
            <a href="index.php">หน้าหลัก</a>

            <a href="profile.php">โปรไฟล์</a>
            <a href="shop,php">ตระกร้า</a>
            <a href="" onclick="return confirm('ออกจากระบบ?')" >ออกจากระบบ</a>
        </div>
        <div class=""> 
             <input type="search" name="" id="" placeholder="ค้นหาร้านอาหาร">
             <button type="submit" class="btn1">ค้นหา</button>
        </div>
    </header>
<!-- จบ นะจ๊ะ -->

<!-- ตัวบอดี้ นะจ๊ะ -->
<section class="home" id="home">
    <div class="home-slider">
        <div class="swapper-wrpper wrpper">
            <div class="slide">
                <div class="content">
                <span>รีวิว</span>
                <h3>ร้านเจ๊จูน</h3>
                <p>ประเภท ร้านอาหารอินตาลี</p>
                <a href="food.php" class="btn " style="background-color:rgb(255, 98, 98) ;">ย้อนกลับ</a>    

            
                <input type="text"  placeholder="รีวิวได้เลย" name="" class="comment" id="">  
                <button type="submit" class="btn1">โพสต์</button>
          
      
            </div>
            <div class="image">
                <img src="../img/ร้านอาหาร1.jpg" alt="">
            </div>
            </div>
        </div>
    </div>
</section>
<!-- จบ นะจ๊ะ -->



<section class="dishes" id="dishes">

    <div class="box-container">
        <!-- คอมเม้น นะครับ -->
        <div class="box">
            <div class="flex">
                <img src="../img/pic-1.png" alt="">
                <div class="pa">
                <h4>แจ็ค ดอสั้น</h4>
                <p>อร่อยมากเลยครับ อร่อยจนผมยิ้มไม่หุบเลย</p>
            </div>
            </div> 
        </div><br>
        <!-- จบ นะครับ -->

 <!-- คอมเม้น นะครับ -->
 <div class="box">
    <div class="flex">
        <img src="../img/pic-2.png" alt="">
        <div class="pa">
        <h4>แจ็ค ดอยาว</h4>
        <p>อร่อยมากเลยครับ อร่อยจนผมยิ้มไม่หุบเลย</p>
    </div>
    </div> 
</div>
<!-- จบ นะครับ -->
        
    </div>

</section>

</body>
</html>