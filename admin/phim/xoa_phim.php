<?php
    $id = $_GET['id'];

    // Kết nối csdl
    $conn = mysqli_connect("localhost", "root", "", "web_phim") or die("Lỗi kết nối csdl");
    echo "Kết nối csdl thành công <br>";
    //Insert dl
    $is = mysqli_query($conn, "delete from phim where id=$id") or die("Lỗi thêm dl");
    if ($is) {
        echo "Xóa thành công";
        header("Location: /admin/phim/qlphim.php");
    }
?>