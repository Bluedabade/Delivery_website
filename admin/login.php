<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bs/bootstrap.css">
    <style>
        body{
            background-color: #192a56;
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

                    <form class="jumbotron" action="../admin_php/login.php" method="post">
                        <h2>เข้าสู่ระบบผู้ดูแลระบบ</h2><br>
                            <input name="username" type="text" class="form-control" placeholder="อีเมล" required><br>
                            <input name="password" type="password" class="form-control" placeholder="รหัสผ่าน" required><br>
                           <button name="submit" type="submit" class="btn btn-block btn-success">เข้าสู่ระบบ</button>
                           <a href="../index.php" class="btn btn-block btn-danger">กลับ</a>
                    </form>
                    
                </div>
            </div>
        </div>
    </center>
</body>
</html>