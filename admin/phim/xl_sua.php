<?php
    $id = $_POST['id'];
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
    // Truy vấn dl
    $is = mysqli_query($conn, "update phim set ten='$ten', the_loai='$theloai', thoi_luong='$tg', khoi_chieu='$ngay', gia='$gia', hinh='$hinh', demo='$demo', status='$tt' where id='$id'") 
    or die("Lỗi cập nhật dl");
    if ($is) {
        echo "Cập nhật thành công";
        header("Location: /admin/phim/qlphim.php");
    }
?>