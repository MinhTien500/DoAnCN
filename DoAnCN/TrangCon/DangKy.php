
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/DangKy.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
    <script src="assets/vendors/jquery.min.js"></script>
    <script src="assets/owlcarousel/owl.carousel.js"></script>
    <title>Đăng ký</title>
</head>
<body>
    <div id="wrapper">
        <form action="reg.php" id="FR-DK" method="post" >
            <div class="WayBackHome">
                <a href="Login.php"><i class="fa-solid fa-chevron-left"></i></a>
                <a href="home.php"><i class="fa-solid fa-house"></i></div></a>
                <div class="FR-Heading">
                    <h2>Đăng ký</h2>
                  </div>

                <form  class="row g-3">
                    <div class="col-md-4">
                        <label for="validationDefault03" class="form-label"><i class="fa-solid fa-person"></i></label>
                        <input id="name "type="text" name="Name" class="form-control"  required placeholder="Họ và tên">
                    </div>

                    <div class="col-md-4">
                        <label for="validationDefault03" class="form-label"><i class="fa-regular fa-user"></i></label>
                        <input id="UserName" type="text" name="UserName" class="form-control"  required placeholder="Tên đăng nhập">
                    </div>

                    <div class="col-md-4">
                        <label for="validationDefault03" class="form-label"><i class="fa-solid fa-key"></i></label>
                        <input id="PassWord" type="password" name="PassWord" class="form-control" required placeholder="Mật khẩu">
                    </div>
  
                    
                    <div class="col-md-4">
                      <label for="validationDefault03" class="form-label"><i class="fa-solid fa-house-user"></i></label>
                      <input id="DiaChi" type="text" name="DiaChi" class="form-control" required placeholder="Địa chỉ">
                    </div>

                    <div class="col-md-4">
                        <label for="validationDefault03" class="form-label"><i class="fa-solid fa-phone"></i></label>
                        <input id="SoDT" type="text" name="NumberPhone" class="form-control"  required placeholder="Số điện thoại">
                      </div>                   
                    <div class="col-md-3">
                      <label for="validationDefault04" class="form-label">Giới tính</label>
                      <select class="form-select" name="GioiTinh" id="validationDefault04" required>
                        <option selected disabled value="">Chọn</option>
                        <option class="GioiTinh">
                            Nam
                        </option>
                        <option class="GioiTinh">
                            Nữ
                        </option>
                      </select>
                    </div>
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                        <label class="form-check-label" for="invalidCheck2">
                          Agree to terms and conditions
                        </label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary" name="Btn-REG" type="submit">Đăng ký</button>
                    </div>
                  </form>
            
    </form>
    </div>
    
</body>


</script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <script src="js/app.js"></script>
</html>