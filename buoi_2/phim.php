<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 100%;
        }
        .xoa{
            padding: 0 10px;
            background-color: red;
            color: white;
        }
        .xoa a{
            color: white;
            
        }
    </style>
</head>
<body>
    <div class="header">
        <h1> Thông tin phim</h1>
        <a href="index.php?page_layout=themphim"> Thêm phim </a>
    </div>
    <table border =1>
        <tr>
            <th>Tên Phim</th>
            <th>Đạo diễn </th>
            <th>Diễn viên</th>
            <th>Năm phát hành</th>
            <th>Poster</th>
            <th>Quốc gia</th>
            <th>Thể Loại</th>
            <th>Số tập</th>
            <th>Trailer</th>
            <th>Mô tả</th>
            <th>Chức năng</th>
        </tr>
        <?php
            include("connect.php");
            $sql= "select p.* from phim p ";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){

        ?>
        <tr>
            <td><?php echo $row["ten_phim"]?></td>
            <td><?php echo $row["dao_dien_id"]?></td>
            <td><?php echo $row["dien_vien_id"]?></td>
            <td><?php echo $row["nam_phat_hanh"]?></td>
            <td><img src="<?php echo $row["poster"]?>" alt="ảnh poster" width=50px></img></td>
            <td><?php echo $row["quoc_gia_id"]?></td>
            <td><?php echo $row["the_loai_id"]?></td>
            <td><?php echo $row["so_tap"]?></td>
            <td><?php echo $row["trailer"]?></td>
            <td><?php echo $row["mo_ta"]?></td>
            <td>
                <button><a  href="capnhatphim.php?id=<?php echo $row["id"] ?>">Sửa</a></button>
                <button class="xoa"><a  href="xoaphim.php?id=<?php echo $row["id"] ?>">Xoá</a></button>
            </td>
        </tr>
        <?php } ?>
    </table>
    
</body>
</html>