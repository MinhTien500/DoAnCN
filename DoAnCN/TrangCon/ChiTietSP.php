<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/ChiTietSP1.css">

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
              <div onclick="Back()" class="IconWayBack">
            <i class="fa-solid fa-caret-left"></i>
              </div>
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

            <div class="col-md-3 py-3">
              <div class="row">
                <button id="cart">
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                Giỏ Hàng
            </button>
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Giỏ Hàng</h5>
                        <span class="close">&times;</span>
                    </div>
                    <div class="modal-body">
                        <div class="cart-row">
                            <span class="cart-item cart-header cart-column">Sản Phẩm</span>
                            <span class="cart-price cart-header cart-column">Giá</span>
                            <span class="cart-quantity cart-header cart-column">Số Lượng</span>
                        </div>
                        <div class="cart-items">
                            
                            
                        </div>
                        <div class="cart-row">
                            
                        <div class="cart-total">
                            <strong class="cart-total-title">Tổng Cộng:</strong>
                            <span class="cart-total-price">0$</span>
                        </div>
                    </div>

                        
                   
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-footer">Đóng</button>
                        <button type="button" class="btn btn-primary order">Thanh Toán</button>
                    </div>
                </div>
            </div>
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
                      <li><a class="dropdown-item" href="#">Adidas</a></li>
                      <li><a class="dropdown-item" href="#">Nike</a></li>
                      <li><a class="dropdown-item" href="#">Converse</a></li>
                      <li><a class="dropdown-item" href="#">Supreme</a></li>
                      <li><a class="dropdown-item" href="#">New balance</a></li>
                      <li><a class="dropdown-item" href="#">Valentino</a></li>
                      <li><a class="dropdown-item" href="#">Charles & Keith</a></li>
                      <li><a class="dropdown-item" href="#">Jimmy Choo</a></li>
                      
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
<!-------------------------------------------------------- Nội dung -->
<section class="product">
    <div class="container">
        <div class="product-CNTLeft ">
          <div class="IMGProduct">
            <img src="image/IMGChiTietSPBig1.jpg" alt="">
          </div>
          <div class="IMGIN4_Small">
            <img src="image/IMGChiTietSPSmall1.jpg" alt="">
            <img src="image/IMGChiTietSPSmall2.jpg" alt="">
            <img src="image/IMGChiTietSPSmall3.jpg" alt="">
            <img src="image/IMGChiTietSPSmall4.jpg" alt="">
            
          </div>
        </div>


        <div class="product-CNTRight ">
            <div class="product-CNTName">
              <h3>Giày thể thao Nam PEAK Culture Fashion Mid-cut E224157B – Màu Trắng Canvas</h3>
            </div>
            <div class="Gia">
              <p><del>999<sup>$      </sup></del> 1<sup>$</sup></p>
            </div>
            <div class="product-Size">
              <p class="TEXT-SIZE">Size</p>
              <div class="Size">
                <span>39</span>
                <span>40</span>
                <span>41</span>
                <span>42</span>
                <span>43</span>
                <span>44</span>

              </div>

              <div class="SoLuong">
                <p>Số lượng</p>
                <input type="Number" min=1 value=1>
              </div>
              <div class="botton">
              <a href="ThanhToanXong.php"><input type="submit" value="Mua Ngay" class="SM_BTN" ></a>
             <button type="button" class="btn btn-cart">Thêm giỏ hàng

              </div>
              <div class="MoTa">
                
              </div>
            </div>
        </div>
    </div>
</section>


<!-- ------------------------------------------------------Footer -->
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
    <script src="js/main3.js"></script>
    <script>
      function Back(){
          history.back();
      }
  </script>
  </body>

  </html>