<form action="them_phim.php" method="post">
    <table id="add_f">
        <th colspan="2"><h2>THÊM PHIM</h2></th>
        <tr>
            <td>Tên phim</td>
            <td><input type="text" name="ten" value="a"></td>
        </tr>
        <tr>
            <td>Thể loại</td>
            <td><input type="text" name="theloai" value="b"></td>
        </tr>
        <tr>
            <td>Thời lượng (phút)</td>
            <td><input type="number" name="tg" min="30" max="300" step="5" value=30></td>
        </tr>
        <tr>
            <td>Khởi chiếu</td>
            <td><input type="date" name="ngay" value="11-11-2011"></td>
        </tr>
        <tr>
            <td>Giá</td>
            <td><input type="text" name="gia" value=0></td>
        </tr>
        <tr>
            <td>Hình</td>
            <td><input type="text" name="hinh" value="c.jpg"></td>
        </tr>
        <tr>
            <td>Giới thiệu</td>
            <td><input type="text" name="demo" value="d"></td>
        </tr>
        <tr>
            <td>Trạng thái<br>0:hết<br>1:đang chiếu<br>2:sắp chiếu</td>
            <td><input type="number" name="tt" min="0" max="2" step="1" value=0></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" id="b_add_f" value="Thêm"></td>
        </tr>
    </table>
</form>

<?php 
    // Kết nối csdl
    $conn = mysqli_connect("localhost", "root", "", "web_phim") or die("Lỗi kết nối csdl");
    echo "Kết nối csdl thành công <br>";
    // Truy vấn dl
    $qr = mysqli_query($conn, "select * from phim") or die("Lỗi truy vấn");

    //mysqli_close($conn);
?>

<form action="">
    <table id="view_f" border="1">
        <th colspan=11><h2>DANH SÁCH PHIM</h2></th>
        <tr>
            <th>Stt</th>
            <th>Id</th>
            <th>Tên phim</th>
            <th>Thể loại</th>
            <th>Thời lượng</th>
            <th>Khởi chiếu</th>
            <th>Giá</th>
            <th>Hình</th>
            <th>Giới thiệu</th>
            <th>Trạng thái</th>
            <td></td>
        </tr>
        <?php
            $i = 1;
            while ($rs = mysqli_fetch_array($qr)) {
                echo "<tr>";
                echo "<td>" . $i . "</td>";
                echo "<td>" . $rs["id"] . "</td>";
                echo "<td>" . $rs["ten"] . "</td>";
                echo "<td>" . $rs["the_loai"] . "</td>";
                echo "<td>" . $rs["thoi_luong"] . " phút" . "</td>";
                echo "<td>" . $rs["khoi_chieu"] . "</td>";
                echo "<td>" . $rs["gia"] . "</td>";
                echo "<td>" . $rs["hinh"] . "</td>";
                echo "<td>" . $rs["demo"] . "</td>";
                if ($rs["status"] == 1) {
                    echo "<td>đang chiếu</td>";
                }elseif ($rs["status"] == 2) {
                    echo "<td>sắp chiếu</td>";
                }else {
                    echo "<td>đã hết</td>";
                }
                echo "<td><a href=''>Thêm</a> <a href=''>Sửa</a> <a href=''>Xóa</a></td>";
                
                echo "</tr>";
                $i++;
            }
        ?>
    </table>
</form>
