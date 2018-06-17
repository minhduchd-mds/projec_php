<?php
session_start();

// connect to database
$conn = mysqli_connect('localhost', 'root', '', 'news-mds');
mysqli_set_charset($conn,"utf8");

// Thông tin chung
$_DOMAIN = 'http://localhost/fackbook/';
// lấy url hình ảnh
$url="http://localhost/fackbook/";
date_default_timezone_set('Asia/Ho_Chi_Minh');
$date_current = '';
$date_current = date("Y-m-d H:i:sa");