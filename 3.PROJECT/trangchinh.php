<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kênh tin tức giải trí - Xã hội - Kenh14.vn</title>
    <!--Bootstraps 4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!--Fontawesome -->
    <script src="https://kit.fontawesome.com/1534cbf1d9.js" crossorigin="anonymous"></script>
    <!-- Style CSS-->
    <link rel="stylesheet" href="./CSS/style.css">
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
                        <a href="index.php">
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
                        <li class="nav-item"><a class="nav-link" href="Login-signup/login.php"><i class="far fa-user-circle"></i></a></li>
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

            <!--Banner quảng cáo đầu-->
            <div class="col-md-12 padding-0">
                <div class="banner_quangcao">
                    <a href="#" target=" _blank">
                        <img src="./image/banner_quangcao1.gif">
                    </a>
                </div>
            </div>

            <!-- Bài viết -->
            <div class="col-md-8 padding-0">
                <div class="baiviet_01">
                    <a href="#" target="_blank">
                        <img src="./image/baiviet_01.jpg" alt="Phép màu trong vụ sạt lở đất ở Trà Leng: Đã cứu sống được 33 người, tiếp tục tìm kiếm 13 nạn nhân mất tích">
                    </a>
                    <h2 class="tieude_baiviet_01">
                        <a href="#" target="_blank" title="Phép màu trong vụ sạt lở đất ở Trà Leng: Đã cứu sống được 33 người, tiếp tục tìm kiếm 13 nạn nhân mất tích">Phép
                            màu trong vụ sạt lở đất ở Trà Leng: Đã cứu sống được 33 người, tiếp tục tìm kiếm 13 nạn nhân
                            mất tích</a>
                    </h2>
                    <p class="noidungngan_baiviet_01">Một quả đồi lớn bị sạt lở đã vùi lấp một ngôi làng tại huyện miền núi tỉnh Quảng Nam, khiến nhiều người mất tích. Thủ tướng Chính phủ yêu cầu các cơ quan liên quan bằng mọi biện pháp cần thiết khẩn trương cứu hộ, cứu ...</p>
                </div>

                <div class="baiviet_02">
                    <a href="#" target="_blank">
                        <img src="./image/baiviet_02.png" alt="Infographic: Chỉ trong 2 ngày, 5 vụ sạt lở xảy ra liên tiếp khiến gần 20 người chết, nhiều người mất tích và bị thương tại Quảng Nam">
                    </a>
                    <h2 class="tieude_baiviet_02">
                        <a href="#" target="_blank" title="Infographic: Chỉ trong 2 ngày, 5 vụ sạt lở xảy ra liên tiếp khiến gần 20 người chết, nhiều người mất tích và bị thương tại Quảng Nam">Infographic:
                            Chỉ trong 2 ngày, 5 vụ sạt lở xảy ra liên tiếp khiến gần 20 người chết, nhiều người mất tích
                            và bị thương tại Quảng Nam</a>
                    </h2>
                    <p class="noidungngan_baiviet_02">
                    </p>
                </div>
                <div class="baiviet_03">
                    <!--Slideshow tin tức -->
                    <i class="fas fa-chevron-left prev"></i>
                    <i class="fas fa-chevron-right next"></i>
                    <div class="slideshow">
                        <div class="post">
                            <a href="single.php">
                                <img src="./image/slideshow_01.jpg" alt="" class="slider-image">
                                <div class="post-info">
                                    <p>
                                        <a href="single.php">Show Hương Giang đối đầu cùng antifan: Chịu trách nhiệm nếu
                                            bị phát hiện dàn dựng nhưng xem xong cảm giác ngược lại!</a>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="post">
                            <a href="single.php">
                                <img src="./image/slideshow_02.jpg" alt="" class="slider-image">
                                <div class="post-info">
                                    <p>
                                        <a href="single.php">Thuỷ Tiên thông báo ngừng hỗ trợ tại Hải Lăng, Quảng Trị do
                                            có nhiều người khá giả "đeo vàng, sơn móng chân" đến nhận tiền</a>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="post">
                            <a href="single.php">
                                <img src="./image/slideshow_03.jpg" alt="" class="slider-image">
                                <div class="post-info">
                                    <p>
                                        <a href="single.php"><br>SofM: 8 năm từ "thằng cu khu Cầu Giấy" đến mức lương 5,5 tỷ/ tháng và giấc mơ vô địch thế giới</a>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="post">
                            <a href="single.php">
                                <img src="./image/slideshow_04.jpg" alt="" class="slider-image">
                                <div class="post-info">
                                    <p>
                                        <a href="single.php">Thủy Tiên lên tiếng về vụ cán bộ thôn thu lại 400 triệu
                                            đồng cứu trợ, làm rõ chuyện bà con chê bánh chưng gây xôn xao</a>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="post">
                            <a href="single.php">
                                <img src="./image/slideshow_05.jpg" alt="" class="slider-image">
                                <div class="post-info">
                                    <p><a href="single.php">Dàn sao thế giới "chặt chém" Halloween: Nancy (MOMOLAND) hot
                                            nhất Kpop, Kylie chơi trội vẫn để thua bà hoàng Heidi Klum</a></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="list_baiviet">
                    <div class="post">
                        <img src="./image/list_baiviet01.jpg" alt="" class="post-image">
                        <div class="post-preview">
                            <h3><a href="#">Cách netizen nhìn nhận về drama antifan sau hơn 1 tuần: “Hương Giang cũng không ngờ, cô tự mắc vào cái bẫy tinh xảo của chính mình”</a></h3>
                            <a href="#">Star</a> - 1 ngày trước
                            <p class="preview-text">Netizen đã đưa ra rất nhiều quan điểm từ câu chuyện ồn ào của Hương Giang và antifan, nhưng đa số đều khẳng định nước ...</p>
                            <a href="#" class="btn read-more">Đọc thêm</a>
                        </div>
                    </div>
                    <div class="post">
                        <img src="./image/list_baiviet02.jpg" alt="" class="post-image">
                        <div class="post-preview">
                            <h3><a href="#">Như Chưa Hề Có Cuộc Chia Ly chính thức trở lại: 45 năm lưu lạc, 8 tiếng tìm thấy nhau nhờ cộng đồng mạng, 5 anh em khóc ngất trên sân khấu</a></h3>
                            <a href="#">TV Show</a> - 1 ngày trước
                            <p class="preview-text">Cuộc đoàn tụ của 5 anh em trong tập trở lại của Như Chưa Hề Có Cuộc Chia Ly khiến khán giả cũng không kìm được nước mắt.</p>
                            <a href="#" class="btn read-more">Đọc thêm</a>
                        </div>
                    </div>
                    <div class="post">
                        <img src="./image/list_baiviet03.jpg" alt="" class="post-image">
                        <div class="post-preview">
                            <h3><a href="#">Chung Hán Lương - Lý Tiểu Nhiễm tái hợp ở phim chuyển thể của Phỉ Ngã Tư Tồn, ngược nhau tơi tả như 10 năm trước?</a></h3>
                            <a href="#">Ciné</a> - 1 ngày trước
                            <p class="preview-text">Sau lần hợp tác từ 10 năm trước, cuối cùng Lý Tiểu Nhiễm và Chung Hán Lương có thể sẽ được tái hợp trên màn ảnh nhỏ.</p>
                            <a href="#" class="btn read-more">Đọc thêm</a>
                        </div>
                    </div>
                    <div class="post">
                        <img src="./image/list_baiviet04.jpg" alt="" class="post-image">
                        <div class="post-preview">
                            <h3><a href="#">Quỳnh Anh Shyn "tím lịm tìm sim", chặt đẹp Wowy và dàn sao xịn tại thảm đỏ ra mắt Sài Gòn Trong Cơn Mưa</a></h3>
                            <a href="#">Ciné</a> - 2 ngày trước
                            <p class="preview-text">Sài Gòn Trong Cơn Mưa đã có buổi ra mắt thành công ở thành phố Hồ Chí Minh.</p>
                            <a href="#" class="btn read-more">Đọc thêm</a>
                        </div>
                    </div>
                    <div class="post">
                        <img src="./image/list_baiviet05.jpg" alt="" class="post-image">
                        <div class="post-preview">
                            <h3><a href="#">Tin bão khẩn cấp: Bão số 10 diễn biến phức tạp, cường độ và quỹ đạo bất định, người dân cần cập nhật thường xuyên để ứng phó tốt nhất</a></h3>
                            <a href="#">Xã hội</a> - 3 ngày trước
                            <p class="preview-text">Theo Trung tâm Dự báo Khí tượng Thủy văn Quốc gia, hồi 19h ngày 3/11, bão số 10 đang cách quần đảo Hoàng Sa khoảng ...</p>
                            <a href="#" class="btn read-more">Đọc thêm</a>
                        </div>
                    </div>
                    <div class="post">
                        <img src="./image/list_baiviet06.jpg" alt="" class="post-image">
                        <div class="post-preview">
                            <h3><a href="#">Touliver xếp hạng mức độ lợi hại của HLV Rap Việt: Suboi - Wowy thuộc nhóm đầu!</a></h3>
                            <a href="#">TV Show</a> - 3 ngày trước
                            <p class="preview-text">"Ông xã" Tóc Tiên đã không ngần ngại, né tránh khi sắp xếp mức độ lợi hại của 4 HLV Rap Việt.</p>
                            <a href="#" class="btn read-more">Đọc thêm</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Quảng cáo bên cạnh-->
            <div class="col-md-4 padding-0">
                <div class="poster_quangcao">
                    <a href="#" target="_blank">
                        <img src="./image/poster_quangcao_03.jpg"></img>
                    </a>
                    <a href="#" target="_blank">
                        <img src="./image/poster_quangcao_01.jpg"></a>
                    </img>

                    <a href="#" target="_blank">
                        <img src="./image/poster_quangcao_02.jpg">
                    </a>
                    <a href="#" target="_blank"></a>
                    </img>

                    <a href="#" target="_blank">
                        <img src="./image/poster_quangcao_04.jpg"></img>
                    </a>
                    <a href="#" target="_blank">
                        <img src="./image/poster_quangcao_05.jpg"></img>
                    </a>
                </div>
            </div>

            <!--ĐÁNG CHÚ Ý VÀ BẢNG XẾP HẠNG-->
            <div class="col-md-12 padding-0">
                <div class="trendAds">
                    <!-- ĐÁNG CHÚ Ý-->
                    <div class="main-contain-dangchuy">
                        <h3 class="recent-post-title">Đáng chú ý</h3>
                        <div class="dangchuy-left">
                            <div class="post">
                                <img src="./image/dangchuy_01.jpg" alt="" class="post-image">
                                <div class="post-preview">
                                    <h3><a href="#">Ninh Dương Lan Ngọc nghẹn ngào kể chuyện bị tiền ung thư cổ tử cung, lời an ủi của Hương Giang gây xúc động</a></h3>
                                    <a style="color:#777;"><i class="fas fa-eye" style="color:orange;"></i> 457.368</a>
                                </div>
                            </div>
                            <div class="post">
                                <img src="./image/dangchuy_02.jpg" alt="" class="post-image">
                                <div class="post-preview">
                                    <h3><a href="#">Bà Tân làm hỏng món ăn nhưng các vị khách vẫn tấm tắc khen ngon, dân mạng lại soi ra 1 nhân vật đã “tố cáo” tất cả gian dối?</a></h3>
                                    <a style="color:#777;"><i class="fas fa-eye" style="color:orange;"></i> 432.114</a>
                                </div>
                            </div>
                            <div class="post">
                                <img src="./image/list_baiviet03.jpg" alt="" class="post-image">
                                <div class="post-preview">
                                    <h3><a href="#">Chung Hán Lương - Lý Tiểu Nhiễm tái hợp ở phim chuyển thể của Phỉ Ngã Tư Tồn, ngược nhau tơi tả như 10 năm trước?</a></h3>
                                    <a style="color:#777;"><i class="fas fa-eye" style="color:orange;"></i> 413.879</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bangxephang-right">

                    </div>
                </div>
            </div>

            <div class="col-md-8 pading-0">
                <div class="slideshow_2">
                    <!--Slideshow tin tức -->
                    <i class="fas fa-chevron-left prev"></i>
                    <i class="fas fa-chevron-right next"></i>
                    <div class="slideshow">
                        <div class="post">
                            <a href="single.php">
                                <img src="./image/slideshow_01.jpg" alt="" class="slider-image">
                                <div class="post-info">
                                    <p>
                                        <a href="single.php">Show Hương Giang đối đầu cùng antifan: Chịu trách nhiệm nếu
                                            bị phát hiện dàn dựng nhưng xem xong cảm giác ngược lại!</a>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="post">
                            <a href="single.php">
                                <img src="./image/slideshow_02.jpg" alt="" class="slider-image">
                                <div class="post-info">
                                    <p>
                                        <a href="single.php">Thuỷ Tiên thông báo ngừng hỗ trợ tại Hải Lăng, Quảng Trị do
                                            có nhiều người khá giả "đeo vàng, sơn móng chân" đến nhận tiền</a>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="post">
                            <a href="single.php">
                                <img src="./image/slideshow_03.jpg" alt="" class="slider-image">
                                <div class="post-info">
                                    <p>
                                        <a href="single.php"><br>SofM: 8 năm từ "thằng cu khu Cầu Giấy" đến mức lương 5,5 tỷ/ tháng và giấc mơ vô địch thế giới</a>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="post">
                            <a href="single.php">
                                <img src="./image/slideshow_04.jpg" alt="" class="slider-image">
                                <div class="post-info">
                                    <p>
                                        <a href="single.php">Thủy Tiên lên tiếng về vụ cán bộ thôn thu lại 400 triệu
                                            đồng cứu trợ, làm rõ chuyện bà con chê bánh chưng gây xôn xao</a>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="post">
                            <a href="single.php">
                                <img src="./image/slideshow_05.jpg" alt="" class="slider-image">
                                <div class="post-info">
                                    <p><a href="single.php">Dàn sao thế giới "chặt chém" Halloween: Nancy (MOMOLAND) hot
                                            nhất Kpop, Kylie chơi trội vẫn để thua bà hoàng Heidi Klum</a></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 padding-0">
                <div class="poster_quangcao">
                    Poster quảng cáo
                </div>
            </div>










            <!-- Footer -->
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
        </div>
    </div>
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--Slick Carousel -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- My JS-->
    <script src="./JS/javascript.js"></script>
</body>

</html>