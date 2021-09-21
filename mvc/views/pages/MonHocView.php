<div class="title">
    <h2>Danh sách môn học</h2>
</div>
<table>
    <div class="btn-function">
        <a class="a" href="./SinhVienController/ThemSinhVienForm">Thêm</a>

        <a class="a" href="./SinhVienController/XoaSinhVienForm">Xóa</a>

        <a class="a" href="./SinhVienController/SuaSinhVienForm">Sửa</a>
    </div>
    <tr>
        <th>Mã môn học</th>
        <th>Tên môn học</th>
        <th>Số tín chỉ</th>
        <th>Chỉnh sửa</th>
        <th>Xóa</th>
    </tr>
    <?php
        if(isset($data["table"])){
            foreach($data["table"] as $row)
            echo "
                <tr>
                    <td>".$row['mamon']."</td>
                    <td>".$row['tenmon']."</td>
                    <td>".$row['stc']."</td>
                    <td><button class='btn'>Sửa</td>
                    <td><button class='btn'>Xóa</td>
                </tr>
            ";
        }
    ?>
</table>   
