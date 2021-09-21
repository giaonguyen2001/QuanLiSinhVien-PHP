<div class="title">
    <h2>Bảng điểm</h2>
</div>

<table>
    <div class="btn-function">
        <a class="a" href="./SinhVienController/ThemSinhVienForm">Thêm</a>

        <a class="a" href="./SinhVienController/XoaSinhVienForm">Xóa</a>

        <a class="a" href="./SinhVienController/SuaSinhVienForm">Sửa</a>
    </div>
    <tr>
        <th>Mã sinh viên</th>
        <th>Mã môn học</th>
        <th>Diểm</th>
        <th>Lần thi</th>
        <th>Chỉnh sửa</th>
        <th>Xóa</th>
    </tr>
    <?php
        if(isset($data["table"])){
            foreach($data["table"] as $row)
            echo "
                <tr>
                    <td>".$row['masv']."</td>
                    <td>".$row['mamon']."</td>
                    <td>".$row['diem']."</td>
                    <td>".$row['lanthi']."</td>
                    <td><button class='btn'>Sửa</td>
                    <td><button class='btn'>Xóa</td>
                </tr>
            ";
        }
    ?>
</table>


