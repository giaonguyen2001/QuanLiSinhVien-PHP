<div class="title">
    <h2>Danh sách sinh viên</h2>
</div>

<table>
    <div class="btn-function">
        <a class="a" href="./SinhVienController/ThemSinhVienForm">Thêm</a>

        <a class="a" href="./SinhVienController/XoaSinhVienForm">Xóa</a>

        <a class="a" href="./SinhVienController/SuaSinhVienForm">Sửa</a>
    </div>
    <tr>
        <th>Mã sinh viên</th>
        <th>Họ tên</th>
        <th>Số điện thoại</th>
        <th>Địa chỉ</th>
        <th>Chỉnh sửa</th>
        <th>Xóa</th>
    </tr>
    <?php
        if(isset($data["table"])){
            foreach($data["table"] as $row)
            echo "
                <tr>
                    <td>".$row['masv']."</td>
                    <td>".$row['hoten']."</td>
                    <td>".$row['sdt']."</td>
                    <td>".$row['diachi']."</td>
                    <td><button class='btn'>Sửa</td>
                    <td><button class='btn'>Xóa</td>
                </tr>
            ";
        }
    ?>
</table>
