<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <nav class="navbar navbar-default">
                <div class="container-fluid">

                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Trang chủ</a></li>
                        <li><a href="#">Bảng lương</a></li>
                        <li><a href="#">Thu Chi</a></li>
                        <li><a href="#"  data-toggle="modal" data-target="#adminModel">Admin</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#registerModel">Đăng kí</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#loginModal">Đăng Nhập</a></li>
                        <li><a><?php  if (isset($_SESSION['username'])) : ?>
                                    <?php echo $_SESSION['username']; ?>

                                <?php endif ?> </a></li>
                        <li><a href="file.php?logout='1'" style="color: red;">Đăng xuất</a></li>
                    </ul>
                    <?php if (isset($_SESSION['success'])) : ?>
                        <div class="error success" >
                            <h3>
                                <?php
                                echo $_SESSION['success'];
                                unset($_SESSION['success']);
                                ?>
                            </h3>
                        </div>
                    <?php endif?>
                </div>
            </nav>
            <!---------Đăng ký-------->
            <div class="modal fade" id="registerModel" tabindex="1" role="dialog" aria-labelledby="login-tile" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <div class="header header-primary text-center">
                                <h4 class="card-title">Đăng ký</h4>
                            </div>
                        </div>
                        <div class="modal-body">
                            <form class="form-login"  method="post" action="index.php">
                                <div class="card-content">
                                    <?php include('errors.php'); ?>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <div class="form-group is-empty"><input type="text" name="username"   placeholder="Nhập Tên" required="" autofocus=""><span class="material-input"></span></div>
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <div class="form-group is-empty"><input type="email" name="email"  placeholder="Nhập Email" required="" autofocus=""><span class="material-input"></span></div>
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <div class="form-group is-empty"><input type="password" name="password_1"  placeholder="Nhập mật khẩu" required="required"><span class="material-input"></span></div>
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <div class="form-group is-empty"><input type="password" name="password_2"   placeholder="Nhập lại mật khẩu" required="required"><span class="material-input"></span></div>
                                    </div>
                                </div>
                                <br><br>
                                <div class="footer text-center">
                                    <button type="submit" name="reg_user" class="btn btn-primary btn-simple btn-wd btn-lg">Đăng Ký</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--------Đăng Nhập--------->
            <div class="modal fade" id="loginModal" tabindex="-2" role="dialog" aria-labelledby="login-tile" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <div class="header header-primary text-center">
                                <h4 class="card-title">Đăng Nhập</h4>
                                <div class="social-line">
                                    <a href="#" class="btn btn-just-icon btn-simple">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                    <a href="#" class="btn btn-just-icon btn-simple">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#" class="btn btn-just-icon btn-simple">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <p class="description text-center">Hoặc Đăng Nhập</p>
                        </div>
                        <div class="modal-body">
                            <form class="form-login"  method="post" action="index.php">
                                <div class="card-content">
                                    <?php include('errors.php'); ?>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <div class="form-group is-empty"><input type="text" name="username"  class="form-control" placeholder="Email.." required="" autofocus=""><span class="material-input"></span></div>
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <div class="form-group is-empty"><input type="password" name="password"  class="form-control" placeholder="Password" required="required"><span class="material-input"></span></div>
                                    </div>
                                </div>
                                <br><br>
                                <div class="footer text-center">
                                    <button type="submit" name="login_user" class="btn btn-primary btn-simple btn-wd btn-lg">Đăng Nhập</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!---------end login----->
            <!---------Admin----->
            <div class="modal fade" id="adminModal" tabindex="-2" role="dialog" aria-labelledby="login-tile" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <div class="header header-primary text-center">
                                <h4 class="card-title">Cài đặt</h4>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="nav nav-tabs">
                                <ul>
                                    <li><a href="#danhsach" class="active" data-toggle="tab">Danh sách</a></li>
                                    <li><a href="#update" data-toggle="tab">Update</a></li>
                                    <li><a href="#tuychinh" data-toggle="tab">Tùy chỉnh</a></li>
                                    <li><a href="#ngonngu" data-toggle="tab">Ngôn ngữ</a></li>
                                    <li><a href="#gioithieu" data-toggle="tab">Ngôn ngữ</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="danhsach" class="tab-pane fade in active">
                                        <h3 class="text-center">Danh sách đăng nhập</h3>

                                    </div>
                                    <div id="update" class="tab-pane fade">
                                        <h3>Menu 1</h3>
                                        <p>Some content in menu 1.</p>
                                    </div>
                                    <div id="tuychinh" class="tab-pane fade">
                                        <h3>Menu 2</h3>
                                        <p>Some content in menu 2.</p>
                                    </div>
                                    <div id="ngonngu" class="tab-pane fade">
                                        <h3>Menu 2</h3>
                                        <p>Some content in menu 2.</p>
                                    </div>
                                    <div id="gioithieu" class="tab-pane fade">
                                        <h3>Menu 2</h3>
                                        <p>Some content in menu 2.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Nhập Sô tiền--->
<!--            <form action="" method="get" class="form-section">-->
<!--                <div class="form-group">-->
<!--                    <label>Nhập số tiền</label>-->
<!--                    <input type="number" placeholder="nhập số" name="sotien" value="sotien" size="50" class="form-control">-->
<!--                </div>-->
<!--                <select name="Country" class="form-control">-->
<!--                    <option>Ngày 1</option>-->
<!--                    <option>Ngày 2</option>-->
<!--                    <option>Ngày 3</option>-->
<!--                    <option>Ngày 4</option>-->
<!--                    <option>Ngày 5</option>-->
<!--                    <option>Ngày 6</option>-->
<!--                    <option>Ngày 7</option>-->
<!--                    <option selected>Chọn ngày nhập</option>-->
<!--                </select>-->
<!--                <div class="form-group">-->
<!--                    <label>Kết quả số tiền trong 7 ngày</label>-->
<!--                    <input type="number" placeholder="Kết quả" name="ketqua" value="ketqua" size="50" class="form-control">-->
<!--                </div>-->
<!--            </form>-->
            <!-- End-->
            <!-- Nhập số tiền trong 1 tháng-->
            <!-- End-->
            <div class="row">

            </div>
        </div>
    </div>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/edit.js"></script>
</body>
</html>