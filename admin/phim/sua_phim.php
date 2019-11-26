<?php
    $id = $_GET['id'];
    // Kết nối csdl
    $conn = mysqli_connect("localhost", "root", "", "web_phim") or die("Lỗi kết nối csdl");
    echo "Kết nối csdl thành công <br>";
    // Truy vấn dl
    $qr = mysqli_query($conn, "select * from phim where id='$id'") or die("Lỗi truy vấn");
    $rs = mysqli_fetch_array($qr)

?>

<form action="xl_sua.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <table id="up_f">
        <th colspan="2"><h2>CẬP NHẬT PHIM</h2></th>
        <tr>
            <td>Tên phim</td>
            <td><input type="text" name="ten" value="<?php echo $rs['ten'];?>"></td>
        </tr>
        <tr>
            <td>Thể loại</td>
            <td><input type="text" name="theloai" value="<?php echo $rs['theloai'];?>"></td>
        </tr>
        <tr>
            <td>Thời lượng (phút)</td>
            <td><input type="number" name="tg" min="0" max="300" step="1" value="<?php echo $rs['tg'];?>"></td>
        </tr>
        <tr>
            <td>Khởi chiếu</td>
            <td><input type="date" name="ngay" value="<?php echo $rs['ngay'];?>"></td>
        </tr>
        <tr>
            <td>Giá</td>
            <td><input type="text" name="gia" value="<?php echo $rs['gia'];?>"></td>
        </tr>
        <tr>
            <td>Hình</td>
            <td><input type="text" name="hinh" value="<?php echo $rs['hinh'];?>"></td>
        </tr>
        <tr>
            <td>Giới thiệu</td>
            <td><input type="text" name="demo" value="<?php echo $rs['demo'];?>"></td>
        </tr>
        <tr>
            <td>Trạng thái</td>
            <td>
                <select name="tt">
                    <option value="<?php echo $rs['tt'];?>">Hết</option>
                    <option value="<?php echo $rs['tt'];?>">Đang chiếu</option>
                    <option value="<?php echo $rs['tt'];?>">Sắp chiếu</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" id="b_up_f" value="Cập nhật"></td>
        </tr>
    </table>
</form>