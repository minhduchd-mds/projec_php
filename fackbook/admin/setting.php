<?php include('post.php') ?>
<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trang admin</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <!--Import Style-->
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<header>
    <nav id="nav">
        <div class="nav-wrapper">
            <div class="container">
                <a href="#" class="brand-logo center"><img src="../images/text-lines.png"></a>
            </div>
        </div>
    </nav>
    <!--Quảng Cáo -->
    <div class="container">
        <div id="advertisement"></div>
    </div>
</header>
<div class="container">
    <div class="section">
        <div class="row">
<!--            Bẳng điều khiển-->
            <div class="col s12 xl3 xl3">
                <div class="setting">
                    <div class="card sticky-action">
                        <div class="card-image">
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
                        </div>
                        <div class="card-content card-content-fixd">
                            <?php  if (isset($_SESSION['username'])) : ?>
                                    <span class="color-00b0ff center card-title"><?php echo $_SESSION['username']; ?></span>
                                <?php endif ?>
                                <a href="setting.php?logout='1'" class="center">Đăng xuất</a>
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
                        <div class="collection collection-fixd">
                            <a href="setting.php" class="collection-item active">Bảng điều khiển</a>
                            <a href="add.php" class="collection-item">Bài viết</a>
                            <a href="#updatephoto" class="collection-item">Cập nhập quảng cáo</a>
                            <a href="profile.php" class="collection-item">Cập nhập hồ sơ </a>
                            <a href="#alllist" class="collection-item">Danh sách bài viết</a>
                        </div>
                    </div>
                </div>
            </div>
<!--   Main -->
            <div class="col s12 xl9 x9">
                <div class="card-panel row">
                    <div class="card-panel col s4 xl4">Số bài viết</div>
                    <div class="card-panel col s4 xl4">Hình ảnh</div>
                    <div class="card-panel col s4 xl4">dung lượng</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--Main JS-->
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>