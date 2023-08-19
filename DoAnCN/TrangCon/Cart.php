<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/layoutCart.css">

    <script src="assets/vendors/jquery.min.js"></script>
    <script src="assets/owlcarousel/owl.carousel.js"></script>
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
</head>


<body>
  <!-- ---------------------------------------------------DauTrang -->
    <section class="Header">
    <div class="container">
        <div class="row">
            <div class="col-md-3 py-2">
                <img src="image/LOGO.PNG" alt="logo">

            </div>

            <div class="col-md-4 py-3">       
                
                <div class="input-group mb-3 py-2">
                    <input type="text" class="form-control" placeholder="Tìm Kiếm" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-magnifying-glass"></i></span>
                </div>
            </div>

            <div class="col-md-3 py-3">
                <div class="row">
                   
                    <div class="ThongTinLH"><i class="fa-solid fa-phone-volume"></i> SDT tư vấn</div>
                    <strong class="ThongTinLH2">0826843716</strong>
                

                </div>

            </div>
            
            <div class="col-md-3 py-3">
                <div class="row">
                   
                    <div class="EmailLH"><i class="fa-solid fa-phone-volume"></i> Email hỗ trợ</div>
                    <strong class="EmailLH2">dotien0913658082@gmail.com</strong>
                

                </div>

            </div>

    </div>
  </section>


<!--------------------------------------------------------ThankMenu -->
    <section class="MainMenu">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand d-none" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="HEADERSP.php">Sản phẩm</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      các thương hiệu phổ biến
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="HEADERSP.php">Adidas</a></li>
                      <li><a class="dropdown-item" href="HEADERSP.php">Nike</a></li>
                      <li><a class="dropdown-item" href="HEADERSP.php">Converse</a></li>
                      <li><a class="dropdown-item" href="HEADERSP.php">Supreme</a></li>
                      <li><a class="dropdown-item" href="HEADERSP.php">New balance</a></li>
                      <li><a class="dropdown-item" href="HEADERSP.php">Valentino</a></li>
                      <li><a class="dropdown-item" href="HEADERSP.php">Charles & Keith</a></li>
                      <li><a class="dropdown-item" href="HEADERSP.php">Jimmy Choo</a></li>
                      
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Chưa mở</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled"></a>
                  </li>
                </ul>
               
              </div>
            </div>
          </nav>
    </section>
<!-- -------------------------------------------------------cart -->
<section class="cart">
  <div class="container">
    <h3 class="tittle text-center">view cart</h3>
    <div class="col-md-6 contract-right-cnt">
      <?php
      echo var_dump( $_SESSION['GioHang'])
      ?>

    </div>
    <div class="col-md-6 contract-left-cnt">

    </div>
  </div>
</section>

<!-- ------------------------------------------------FTer -->
    <section class="Footer py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-5 py-2">
                    <h4>Về chúng tôi</h4>
                    <ul class="List-Menu">
                        <li class="Li-Menu">Trang chủ</li>
                        <li class="Li-Menu">Giới thiệu</li>
                        <li class="Li-Menu">Liên hệ</li>
                        <li class="Li-Menu">Tuyển dụng</li>
                        <li class="Li-Menu">Câu hỏi thường gặp</li>
                        <li class="Li-Menu">Tin nổi bật</li>
                  
                    </ul>
                </div> 
                <div class="col-md-5 py-2">
                  <h4>Về chúng tôi</h4>
                  <ul class="List-Menu">
                      <li class="Li-Menu">Địa chỉ</li>
                      <li class="Li-Menu">Số điện thoại</li>
                      <li class="Li-Menu">Liên hệ</li>
                  </ul>
              </div> 
              <div class="col-md-5 py-2">
                <h4>Về chúng tôi</h4>
                <ul class="List-Menu">
                    <li class="Li-Menu">Trang chủ</li>
                    <li class="Li-Menu">Giới thiệu</li>
                    <li class="Li-Menu">Liên hệ</li>
                    <li class="Li-Menu">Tuyển dụng</li>
                    <li class="Li-Menu">Câu hỏi thường gặp</li>
                    <li class="Li-Menu">Tin nổi bật</li>
              
                </ul>
            </div> 
            <div class="col-md-5 py-2">
              <h4>Về chúng tôi</h4>
              <ul class="List-Menu">
                  <li class="Li-Menu">Địa chỉ</li>
                  <li class="Li-Menu">Số điện thoại</li>
                  <li class="Li-Menu">Liên hệ</li>
              </ul>
          </div> 
          
                    </div>
                    <div class="row2">
                    <div class="MXH">
                        <span class="box50">
                            <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-messenger"></i></a>
                        </span>
                        <span class="box50">
                            <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>                        
                        </span>
                        <span class="box50">
                            <a href="https://www.youtube.com/" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                        </span>
                        <span class="box50">
                            <a href="https://www.google.com.vn/?hl=vi" target="_blank"><i class="fa-brands fa-google"></i></a>
                        </span>
                </div>
              </div>
            </div>
        </div>
    </section>
    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <script src="assets/vendors/highlight.js"></script>
    <script src="js/app.js"></script> 
  </body>

  </html>