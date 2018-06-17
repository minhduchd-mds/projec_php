<?php
/**
 * Created by PhpStorm.
 * User: Duc
 * Date: 1/31/2018
 * Time: 11:28 AM
 */
include_once 'db/db.php';
//  kiểm tra đã đăng nhập hay chưa và lấy dữ liệu ,  update ,  đổi pasword , quản trị viên
if(isset($_SESSION['username'])){
    if(isset($_POST['update_photo'])){
        $dir = "../upload/";
        $url_text = "../post/";
        $name_img = stripslashes($_FILES['images_accounts']['name']);
        $source_img = $_FILES['images_accounts']['tmp_name'];

        // Lấy ngày, tháng, năm hiện tại
        $day_current = substr($date_current, 8, 2);
        $month_current = substr($date_current, 5, 2);
        $year_current = substr($date_current, 0, 4);

        // Tạo folder năm hiện tại
        if (!is_dir($dir . $year_current)) {
            mkdir($dir . $year_current . '/');
        }

        // Tạo folder tháng hiện tại
        if (!is_dir($dir . $year_current . '/' . $month_current)) {
            mkdir($dir . $year_current . '/' . $month_current . '/');
        }

        // Tạo folder ngày hiện tại
        if (!is_dir($dir . $year_current . '/' . $month_current . '/' . $day_current)) {
            mkdir($dir . $year_current . '/' . $month_current . '/' . $day_current . '/');
        }

        $path_img = $dir . $year_current . '/' . $month_current . '/' . $day_current . '/' . $name_img; // Đường dẫn thư mục chứa file
        move_uploaded_file($source_img, $path_img); // Upload file
        $url_img = substr($path_img, 3); // Đường dẫn file
        $query = "UPDATE accounts SET avatar='$url_img' WHERE id='2' ORDER BY id";
         mysqli_query($conn, $query);


        header("location: profile.php");
    }
}