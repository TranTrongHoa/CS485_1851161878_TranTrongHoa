<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản trị admin</title>
    <!--Bootstraps 4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!--Fontawesome -->
    <script src="https://kit.fontawesome.com/1534cbf1d9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12 padding-0">
                <div class="tool-bar01">
                    <ul>
                        <li><a class="nav-link" href="#"><i class="fas fa-star" style="color:red"></i> QUIZZ</a></li>
                        <li><a class="nav-link" href="#"><i class="fas fa-star" style="color:red"></i> MAGAZINE</a></li>
                        <li><a class="nav-link" href="#"><i class="fas fa-star" style="color:red"></i> ĐỌC CHẬM</a>
                        </li>
                        <li><a class="nav-link" href="#"><i class="fas fa-star" style="color:red"></i> HIP-HOP NEVA DIE</a></li>
                    </ul>
                </div>
                <div class="tool-bar02">
                    <ul>
                        <a href="trangchinh.php">
                            <img class="logo_top" src="./image/logo_kenh14.ico"></img>
                        </a>
                        <h4><span style="color:#FFFF;font-size: 20px;padding-top: 5px;">Kênh14.VN</span><br><span style="color: brown; font-size: 15px;">Kênh giải trí-xã hội</span></h4>
                        <li><a href="#" title="Hoa hậu Việt Nam 2020">#Hoa hậu Việt Nam 2020</a></li>
                        <li><a href="#" title="Lũ lụt ở miền Trung">#Lũ lụt ở miền Trung</a></li>
                        <li><a href="#" title="Mùa thu Hà Nội">#Mùa thu Hà Nội</a></li>
                    </ul>
                </div>
                <div class="nav-menu">
                    <ul>
                        <li class="nav-item"><a class="nav-link" href="trangchinh.php"><i class="fas fa-home"></i></a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Star</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">TV Show</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Ciné</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Musik</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Beauty&Fashion</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Xem Mua Luôn</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Đời sống</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Ăn-Quẩy-Đi</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Xã hội</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Thế giới</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Sport</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Học đường</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Video</a></li>
                        <li class="nav-item"><a class="nav-link" href="index-admin.php"><i class="far fa-user-circle"></i></a></li>
                </div>
                <!-- Nút bars khi reponsive -->
                <label for="check" class="navbar-button">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars"
                        class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512">
                        <path fill="currentColor"
                            d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
                        </path>
                    </svg>
                </label>
                <input type="checkbox" hidden id="check">
                <!--Menu sau khi responsive sẽ thấy ở bars -->
                <div class="nav-menu-responsive">
                    <ul>
                        <li class="nav-item"><a class="nav-link" href="Login-signup/login.php"><i class="far fa-user-circle"> Đăng nhập</i></a></li>
                        <li><a class="nav-link-responsive" href="trangchinh.php"><i class="fas fa-home"></i> Home</a></li>
                        <li><a class="nav-link-responsive" href="#"><i class="fas fa-star"></i> Star</a></li>
                        <li><a class="nav-link-responsive" href="#"><i class="fas fa-tv"></i> TV Show</a></li>
                        <li><a class="nav-link-responsive" href="#"><i class="fas fa-handshake"></i> Ciné</a></li>
                        <li><a class="nav-link-responsive" href="#"><i class="fas fa-music"></i> Musik</a></li>
                        <li><a class="nav-link-responsive" href="#"><i class="fas fa-vest"></i> Beauty&Fashion</a></li>
                        <li><a class="nav-link-responsive" href="#"><i class="fas fa-shopping-cart"></i> Xem Mua
                                Luôn</a></li>
                        <li><a class="nav-link-responsive" href="#"><i class="fas fa-house-user"></i> Đời sống</a>
                        </li>
                        <li><a class="nav-link-responsive" href="#"><i class="fas fa-child"></i> Ăn-Quẩy-Đi</a></li>
                        <li><a class="nav-link-responsive" href="#"><i class="fas fa-blog"></i> Xã hội</a></li>
                        <li><a class="nav-link-responsive" href="#"><i class="fas fa-globe-asia"></i> Thế giới</a>
                        </li>
                        <li><a class="nav-link-responsive" href="#"><i class="fas fa-futbol"></i> Sport</a></li>
                        <li><a class="nav-link-responsive" href="#"><i class="fas fa-graduation-cap"></i> Học
                                đường</a></li>
                        <li><a class="nav-link-responsive" href="#"><i class="fab fa-youtube"></i> Video</a></li>
                    </ul>
                    <!-- Nút close trong bars -->
                    <label for="check" class="nav-menu-close">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times"
                            class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 352 512">
                            <path fill="currentColor"
                                d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z">
                            </path>
                        </svg>
                    </label>
                </div>
            </div>

            <div class="col-md-3">
                <div id="card-418071">
				    <div class="card">
                        <div class="card-header">
						    <a class="card-link" data-toggle="collapse" data-parent="#card-418071" href="./admin/post/index-post.php"><i class="fas fa-book-open"></i> Quản lý bài viết</a>
					    </div>
				    </div>
				    <div class="card">
					    <div class="card-header">
						    <a class="card-link" data-toggle="collapse" data-parent="#card-418071" href="#"><i class="fas fa-flag"></i> Quản lý quảng cáo</a>
					    </div>
                    </div>
                
                    <div class="card">
					    <div class="card-header">
						    <a class="card-link" data-toggle="collapse" data-parent="#card-418071" href="./admin/user/index-user.php"><i class="fas fa-user"></i> Quản lý tài khoản</a>
					    </div>
                    </div>
                    <div class="card">
					    <div class="card-header">
						    <a style="color:red"class="card-link" data-toggle="collapse" data-parent="#card-418071" href="./Login-signup/logout.php"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
					    </div>
                    </div>
                </div>
            </div>  
                
                <div class="col-md-9">
                    <div class="anhdong" style="margin-left:60px">
                        <img src="./image/vit1.gif" style="width:100px;height:100px" alt="">
                        <img src="./image/welcome.gif" alt="" style="width:500px;height:300px"></img>
                        <img src="./image/vit1.gif" style="width:100px;height:100px" alt="">
                    </div>
                </div>
        </div>
    </div>
    <footer>
                <div class="footer-column1">
                    <div class="footer-column1-left">
                        <a href="kenh14.vn"><img src="./image/logo-duoi.png" class="logo-left"></a>
                        <div class="contact">
                            <p>ĐÓNG GÓP NỘI DUNG</p>
                            <div class="two-link-1column">
                                <a href="https://kenh14.vn/Static/faq-lightbox.htm"><i class="fas fa-question-circle" style="color: coral; margin-right: 5px;"></i>CÂU HỎI THƯỜNG GẶP</a>
                                <a href="mailto:bandoc@kenh14.vn"><i class="fas fa-envelope" style="color: coral; margin-right: 5px;"></i>bandoc@kenh14.vn</a>
                            </div>
                            <p class="contact-title">Kenh14.vn rất hoan nghênh độc giả gửi thông tin và góp ý cho chúng tôi.</p>
                        </div>
                    </div>
                    <div class="footer-column1-right">
                        <div class="footer-column1-right-column1">
                            <a href="https://www.facebook.com/K14vn/"><img src="./image/logo-duoi.png" alt="" class="logo-right" class="logo-right"></a>
                            <div class="footer-column1-right-column1-column2">
                                <a href="https://www.facebook.com/K14vn/">Kenh14.vn</a><i class="far fa-check-circle" style="border-radius: 50px; background-color: rgb(45, 34, 202); margin-left: 5px;"></i>
                                <p>5.658.347 lượt thích</p>
                            </div>
                        </div>
                        <div class="footer-column1-right-column2">
                            <a href="https://www.facebook.com/K14vn/"><i class="fab fa-facebook-square" style="color: blue; margin-right: 10px;"></i>Thích Trang</a>
                            <a href="https://www.messenger.com/t/390567570966109/?messaging_source=source%3Apages%3Apage_plugin_message"><i class="fas fa-comments" style="margin-right: 10px;"></i>Gửi tin nhắn</a>
                        </div>
                    </div>
                </div>
                <div class="footer-column2">
                    <div class="footer-column2-row1">
                        <p class="footer-column2-title">TRỤ SỞ HÀ NỘI</p>
                        <p class="footer-column2-describe">Tầng 21, tòa nhà Center Building, Hapulico Complex, số 1 Nguyễn Huy Tưởng, p. Thanh Xuân Trung, quận Thanh Xuân, Hà Nội. Điện thoại: 024 7309 5555, máy lẻ 370.</p>
                        <a class="map" href="https://www.google.com/maps/place/Hapulico+Complex,+Nguy%E1%BB%85n+Huy+T%C6%B0%E1%BB%9Fng,+Thanh+Xu%C3%A2n+Trung,+Thanh+Xu%C3%A2n,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam/@20.999655,105.807681,17z/data=!4m5!3m4!1s0x3135ac9788f39f1d:0xfe0d7beb1d82d125!8m2!3d20.9996553!4d105.8076813?hl=vi-VN"><i class="fas fa-map-marker-alt"></i>XEM BẢN ĐỒ</a>
                        <br>
                        <p class="footer-column2-title">TRỤ SỞ TP.HỒ CHÍ MINH</p>
                        <p class="footer-column2-describe">Tầng 4 Tòa nhà 123, 123 Võ Văn Tần, phường 6, quận 3, Tp. HCM Điện thoại: 028. 7307 7979.</p>
                        <a class="map" href="https://www.google.com/maps?ll=10.775736,106.68995&z=15&t=m&hl=vi-VN&gl=US&mapclient=embed&q=123+V%C3%B5+V%C4%83n+T%E1%BA%A7n+Ph%C6%B0%E1%BB%9Dng+6+Qu%E1%BA%ADn+3+H%E1%BB%93+Ch%C3%AD+Minh"><i class="fas fa-map-marker-alt"></i>XEM BẢN ĐỒ</a>
                    </div>
                    <div class="footer-column2-row2">
                        <p class="footer-column2-title">CHỊU TRÁCH NHIỆM QUẢN LÝ NỘI DUNG</p>
                        <p class="footer-column2-describe">Bà Nguyễn Bích Minh</p>
                        <p class="footer-column2-title">HỢP TÁC TRUYỀN THÔNG</p>
                        <p class="footer-column2-describe"><i class="fas fa-phone-alt"></i>024.73095555 (máy lẻ 62.370)</p>
                        <a href="#"><i class="fas fa-envelope" style="margin-right: 10px; color: #777 !important;"></i>marketing@kenh14.vn</a>
                        <p class="footer-column2-title">LIÊN HỆ QUẢNG CÁO</p>
                        <p class="footer-column2-describe"><i class="fas fa-phone-alt"></i>0942 86 11 33</p>
                        <a href="#"><i class="fas fa-envelope" style="margin-right: 10px; color: #777 !important;"></i>giaitrixahoi@admicro.vn</a>
                        <a class="messenger-k14" href="https://www.messenger.com/t/K14vn"><i class="fab fa-facebook-messenger" style="background-color: blue; color: white; border-radius: 50px; margin-right: 10px;"></i>CHAT VỚI TƯ VẤN VIÊN</a>
                        <a class="see-more" href="https://kenh14.vn/adv.chn">XEM CHI TIẾT</a>
                        <a class="title" href="https://adi.admicro.vn/chinh-sach/chinh_sach_bao_mat.pdf" style="margin-top: 10px;">CHÍNH SÁCH BẢO MẬT</a>
                    </div>
                    <div class="footer-column2-row3">
                        <a rel="nofollow" href="https://vccorp.vn/" title="Công ty Cổ phần VCCorp" target="_blank" class="vccorp-footer-logo k14h-sprite"></a>
                        <p class="footer-column2-title"><span style="font-weight: 0 !important;">© Copyright 2007 - 2020 </span>– CÔNG TY CỔ PHẦN VCCORP</p>
                        <p class="footer-column2-describe">Tầng 17, 19, 20, 21 Tòa nhà Center Building - Hapulico Complex, Số 1 Nguyễn Huy Tưởng, Thanh Xuân, Hà Nội.</p>
                        <p class="footer-column2-describe">Giấy phép số 2215/GP-TTĐT do Sở Thông tin và Truyền thông Hà Nội cấp ngày 10 tháng 4 năm 2019</p>
                    </div>
                </div>
            </footer>
</body>
</html>