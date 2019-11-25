<?php
    $ten = $_POST['ten'];
    $theloai = $_POST['theloai'];
    $tg = $_POST['tg'];
    $ngay = $_POST['ngay'];
    $gia = $_POST['gia'];
    $hinh = $_POST['hinh'];
    $demo = $_POST['demo'];
    $tt = $_POST['tt'];

    // Kết nối csdl
    $conn = mysqli_connect("localhost", "root", "", "web_phim") or die("Lỗi kết nối csdl");
    echo "Kết nối csdl thành công <br>";
    //Insert dl
    $is = mysqli_query($conn, "insert into phim(ten, the_loai, thoi_luong, khoi_chieu, gia, hinh, demo, status) values('$ten', '$theloai', $tg, '$ngay', $gia, '$hinh', '$demo', '$tt')") 
    or die("Lỗi thêm dl");
    if ($is) {
        echo "Thêm thành công";
        header("Location: /admin/phim/qlphim.php");
    }
?>