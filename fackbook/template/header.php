
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
    <link rel="icon" type="image/png" href="<?php echo $_DOMAIN; ?>images/icon/fb_icon.png"/>
    <!------Bootstrap------>
    <link rel="stylesheet" href="<?php echo $_DOMAIN; ?>css/bootstrap.css">
    <!------Style------>
    <link rel="stylesheet" href="<?php echo $_DOMAIN; ?>css/style.css">
    <!-- Font-awesome -->
    <link rel="stylesheet" href="<?php echo $_DOMAIN; ?>css/font-awesome.css">

    <!-- Font-Rotobo ,Lato ,Oswald,Raleway -->
    <link href="https://fonts.googleapis.com/css?family=Lato|Oswald|Raleway:400,300,500,600,700,800|Roboto" rel="stylesheet">
    <!-- Responsive -->
    <!--[if lt IE 9]
<script src="js/html5shiv.js"></script>
<![endif]-->
<body>
    <header>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <a href="#"><img class="navbar-brand" src="<?php echo $_DOMAIN; ?>images/icon/icon1.png"></a>
                </div>
                <form class="navbar-form navbar-left">
                    <div class="input-group" style="width: 490px;">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <ul class="nav navbar-nav ">
                    <li><a href="#">
                            <?php
                            $post_text="SELECT * FROM accounts";
                            // sql to delete a record
                            $result = mysqli_query($conn,$post_text);
                            if($row = mysqli_fetch_array($result)){
                                $url_avatar = $row['avatar'];
                                echo "<img class='responsive-img activator' src='".$_DOMAIN. $url_avatar ."' />";
                            }
                            mysqli_close($conn);
                            ?>
                            <?php  if (isset($_SESSION['username'])) : ?>
                                <span class="color-00b0ff center card-title"><?php echo $_SESSION['username']; ?></span>
                            <?php endif ?>
                        </a>
                    </li>

                    <li><a href="#">Trang chủ</a>
                    </li>
                    <!--setting-->
                    <li><a href="#">
                            <i class="fa fa-globe"></i>
                        </a>
                    </li>
                    <!--setting-->
                    <li><a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                        </a>
                    </li>
                    <!--setting-->
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                            <i class="fa fa-globe" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu" id="">
                            <li><a href="#section41">Nhật kí</a></li>
                            <li><a href="#section42">Tùy chỉnh bảng tin</a></li>
                            <li>

                            </li>
                        </ul>
                    </li>
                    <!--question-sign-->
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-question-circle"></i>
                        </a>
                        <ul class="dropdown-menu" id="">
                            <li><a href="#section41">Nhật kí</a></li>
                            <li><a href="#section42">Tùy chỉnh bảng tin</a></li>
                            <li><a href="#section43">Đăng xuất</a></li>
                        </ul>
                    </li>
                    <!--setting-->
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Cài Đặt<span class="caret"></span></a>
                        <ul class="dropdown-menu" id="settting">
                            <li><a href="#section41">Nhật kí</a></li>
                            <li><a href="#section42">Tùy chỉnh bảng tin</a></li>
                            <li>
                                <a href="page.php?logout='1'" class="center">Đăng xuất</a>
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
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>