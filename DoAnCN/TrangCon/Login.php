<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Login1.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
    <script src="assets/vendors/jquery.min.js"></script>
    <script src="assets/owlcarousel/owl.carousel.js"></script>
    <script src="js/app.js"></script>
    <title>Đăng nhập</title>
</head>
<body>
    <div id="wrapper">
        <form action="log.php" id="FR-Login" method="POST">
            <div class="WayBackHome">
                <a href="home.php"><i class="fa-solid fa-house"></i></div></a>
            <h2 class="FR-Heading">Đăng nhập</h2>
        <div class="FR-GR">
            <i class="fa-regular fa-user"></i>
            <input type="text" Name="UserName" class="FR-Input" placeholder="Tên đăng nhập">
        </div>

        
        <div class="FR-GR">
            <i class="fa-solid fa-key"></i>
            <input type="password" name="PassWord" class="FR-Input" placeholder="Mật khẩu">
            <div id="Eye">
                <i class="fa-regular fa-eye"></i>

            </div>
        </div>

        <input type="submit" value="Đăng nhập" class="FR-Submit">
       
        <div class="DangKy">
            <b> Đăng ký tài khoản <a href="DangKy.php">tại đây</a></b>
        </div>

        <div class="IconLogin">
            <a href="https://www.google.com.vn/?hl=vi" class="IconGG"><i class="fa-brands fa-google"></i></a>
            
            <a href="https://www.facebook.com/" class="IconFB"><i class="fa-brands fa-facebook"></i></a>
        </div>
    </form>
    </div>
</body>

</html>