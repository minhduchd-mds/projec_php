<?php include('admin/server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content=" Education system">
    <meta name="keywords" content="MDS ">
    <meta name="author" content="MDS dev">
    <meta name="robots" content="index, follow">
    <title>Facebook & Đăng nhập hoặc đăng ký</title>
    <link rel="canonical" href=""/>
    <link rel="icon" type="image/png" href="http://localhost/fackbook/images/icon/fb_icon.png"/>
    <!------Bootstrap------>
    <link rel="stylesheet" href="http://localhost/fackbook/css/bootstrap.css">
    <!------Style------>
    <link type="text/css" rel="stylesheet" href="css/login.css">

    <!-- Font-awesome -->
    <link type="text/css" rel="stylesheet" href="http://localhost/fackbook/css/font-awesome.min.css">
    <!-- Font-Rotobo ,Lato ,Oswald,Raleway -->
    <link href="https://fonts.googleapis.com/css?family=Lato|Oswald|Raleway:400,300,500,600,700,800|Roboto" rel="stylesheet">
    <!-- Responsive -->
    <!--[if lt IE 9]
<script src="js/html5shiv.js"></script>
<![endif]-->
    <body>
        <header id="from-login">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <div class="header-logo">

                            <a href="#">
                                <i class="logo"></i>
                                <img class="logo" src="images/icon/f.png">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="login">
                            <form method="post" class="form-horizontal">
                                <table cellspacing="0" role="presentation">
                                    <?php include('admin/errors.php');?>
                                    <thead>
                                        <tr>
                                            <th>Email hoặc điện thoại</th>
                                            <th>Mật khẩu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label>
                                                    <input type="text" id="user"  name="username">
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input type="password" id="pass"  name="password">
                                                </label>
                                            </td>
                                            <td>
                                                <input type="submit"  value="Đăng nhập" id="login" name="login">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <a href="restpassword.php">Quên mật khẩu</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
<!--   main     -->
        <section id="main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <div class="user_id">
                            <h2 class="text">Facebook giúp bạn kết nối và chia sẻ với mọi người trong cuộc sống của bạn.</h2>
                            <div class="img_">
                                <img src="images/icon/2.png " class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                       <div class="title">
                           <h2 class="text">Tạo tài khoản mới</h2>
                           <span class="text">Miễn phí và sẽ luôn như vậy.</span>
                       </div>
                        <div class="from-sigin">
                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input class="form-control"  name="" type="text" placeholder="Họ">
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="form-control"  name="" type="text" placeholder="Tên">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control"  name="username_sigin" type="email" placeholder="Số di động hoặc email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control"  name="password_sigin" type="password" placeholder="Mật khẩu mới">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control"  name="password_sigin" type="password" placeholder="Nhập ngày tháng">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input type="radio" name="gender" value="male" checked> Nam
                                        <input type="radio" name="gender" value="female"> Nữ
                                    </div>
                                </div>
                                <div class="text">
                                    <p class="text-one">Bằng cách nhấp vào Tạo tài khoản, bạn đồng ý với Điều khoản của chúng tôi và rằng bạn đã đọc Chính sách dữ liệu của chúng tôi, bao gồm <a href="#">Sử dụng cookie</a>. Bạn có thể nhận được thông báo qua SMS từ Facebook và có thể bỏ chọn bất kỳ lúc nào.</p>
                                </div>
                                <button type="submit" class="btn btn-default btn-login">Tạo Tài Khoản</button>
                            </form>

                            <hr>
                            <p class="text-one"> <a href="#">Tạo Trang</a> dành cho người nổi tiếng, nhãn hiệu hoặc doanh nghiệp. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!--Footer-->
    <footer>
        <div class="container">
            <div class="footer-conten">
                <ul class="">
                    <li>Tiếng Việt</li>
                    <li><a href="#">English (UK)</a></li>
                    <li><a href="#">한국어</a></li>
                    <li><a href="#">日本語</a></li>
                    <li><a href="#">Français (France)</a></li>
                    <li><a href="#">ภาษาไทย</a></li>
                    <li><a href="#">Español</a></li>
                    <li><a href="#">Português (Brasil)</a></li>
                    <li><a href="#">Deutsch</a></li>
                    <li><a href="#">Italiano</a></li>
                    <li><a class="btn btn-default" data-toggle="modal" data-target="#language">+</a></li>
                    <div id="hr"></div>
                    <li><a href="#">Đăng ký</a></li>
                    <li ><a href="#">Đăng nhập</a></li>
                    <li><a href="#">Messenger</a></li>
                    <li><a href="#">Facebook Lite</a></li>
                    <li><a href="#">Di động</a></li>
                    <li><a href="#">Tìm bạn bè</a></li>
                    <li><a href="#">Danh bạ</a></li>
                    <li><a href="#">Trang</a></li>
                    <li><a href="#">Địa điểm</a></li>
                    <li><a href="#">Trò chơi</a></li>
                    <li><a href="#">Vị trí</a></li>
                    <li><a href="#">Người nổi tiếng</a></li>
                    <li><a href="#">Marketplace</a></li>
                    <li><a href="#">Nhóm</a></li>
                    <li><a href="#">Công thức nấu ăn</a></li>
                    <li><a href="#">Thể thao</a></li>
                    <li><a href="#">Look</a></li>
                    <li><a href="#">Moments</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Địa phương</a></li>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#">Tạo quảng cáo</a></li>
                    <li><a href="#">Tạo Trang</a></li>
                    <li><a href="#">Nhà phát triển</a></li>
                    <li><a href="#">Tuyển dụng</a></li>
                    <li><a href="#">Quyền riêng tư</a></li>
                    <li><a href="#">Cookie</a></li>
                    <li><a href="#">Lựa chọn quảng cáo</a></li>
                    <li><a href="#">Điều khoản</a></li>
                    <li><a href="#">Trợ giúpCài đặt</a></li>
                </ul>
                <p>Facebook © 2018</p>
                <!-- Modal -->
                <div id="language" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Chọn ngôn ngữ của bạn</h4>
                            </div>
                            <div class="modal-body">
                                <p>Some text in the modal.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>
        <!-- Jquery -->
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script type="text/javascript"  src="js/bootstrap.js"></script>
    </body>
</html>