<?php
    if(!empty($_POST['ten_phim'])&&
    !empty($_POST['dao_dien'])&&
    !empty($_POST['dien_vien'])&&
    !empty($_POST['nam_phat_hanh'])&&
    // !empty($_POST['poster'])&&
    !empty($_POST['quoc_gia'])&&
    !empty($_POST['so_tap'])&&
    !empty($_POST['trailer'])&&
    !empty($_POST['the_loai_id'])&&
    !empty($_POST['mo_ta'])){
        include('connect.php');
        $ten_phim = $_POST['ten_phim'];
        $dao_dien = $_POST['dao_dien'];
        $dien_vien = $_POST['dien_vien'];
        $nam_phat_hanh = $_POST['nam_phat_hanh'];
        // $poster = $_POST['poster'];
        $quoc_gia = $_POST['quoc_gia'];
        $so_tap = $_POST['so_tap'];
        $trailer = $_POST['trailer'];
        $the_loai_id = $_POST['the_loai_id'];
        $mo_ta = $_POST['mo_ta'];

        #Bắt đầu xử lý thêm ảnh
        // Xử lý ảnh
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Kiểm tra xem file ảnh có hợp lệ không
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                echo "File không phải là ảnh.";
                $uploadOk = 0;
            }
        }

        // Kiểm tra nếu file đã tồn tại
        if (file_exists($target_file)) {
            echo "File này đã tồn tại trên hệ thông";
            $uploadOk = 2;
        }

        // Kiểm tra kích thước file
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "File quá lớn";
            $uploadOk = 0;
        }

        // Cho phép các định dạng file ảnh nhất định
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Chỉ những file JPG, JPEG, PNG & GIF mới được chấp nhận.";
            $uploadOk = 0;
        }
        
        #Kết thúc xử lý ảnh
        if($uploadOk == 0){
            echo "File của bạn chưa được tải lên";
        }
        else{
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                //Đoạn code xử lý login ban đầu
                $sql = "INSERT INTO phim 
                (ten_phim, dao_dien_id, dien_vien_id, nam_phat_hanh, poster, quoc_gia_id, so_tap, trailer, mo_ta, the_loai_id)
                VALUES 
                ('$ten_phim', '$dao_dien','$dien_vien', '$nam_phat_hanh', '$target_file', '$quoc_gia', '$so_tap', '$trailer', '$mo_ta', '$the_loai_id')";
                mysqli_query($conn, $sql);
                mysqli_close($conn);
                header('location: index.php?page_layout=phim');
            }
            
        }


        // $sql = "insert into nguoi_dung (ten_dang_nhap, matKhau, ho_ten, email, sdt, ngay_sinh, vai_tro_id)
        // values ('$tenDangNhap', '$password', '$hoTen', '$email', '$sdt', '$ngaySinh', '$vaiTro')";
        // mysqli_query($conn, $sql);
        // mysqli_close($conn);
        // header('location: index.php?page_layout=nguoidung');
    }else{
        echo "<p class='warning'> Vui lòng nhập đầy đủ thông tin </p>";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php?page_layout=themphim" method="post" enctype="multipart/form-data">
        <h1> Thêm phim </h1>
        <div>
            <p> Tên phim: </p>
            <input type="text" name="ten_phim" placeholder="Nhập tên phim">
        </div>
        <div>
            <p> Đạo diễn: </p>
            <select name="dao_dien">
            <?php
                include('connect.php');
                $sql= "select * from nguoi_dung where vai_tro_id = 3";
                $result = mysqli_query($conn, $sql);
                
                while($daoDien = mysqli_fetch_array($result)){?>
                <option value="<?php echo $daoDien['id']?>"> <?php echo $daoDien['ho_ten'] ?> </option>
                <?php } ?>
            </select>
        </div>
        <div>
            <p> Diễn viên: </p>
            <select name="dien_vien">
            <?php
                $sql= "select * from nguoi_dung where vai_tro_id = 2";
                $result = mysqli_query($conn, $sql);
                
                while($dienVien = mysqli_fetch_array($result)){?>
                <option value="<?php echo $dienVien['id']?>"> <?php echo $dienVien['ho_ten'] ?> </option>
                <?php } ?>
            </select>
        </div>
        <div>
            <p> Năm phát hành: </p>
            <input type="Number" name="nam_phat_hanh" placeholder="Nhập năm phát hành">
        </div>
        <div>
            <p> Poster: </p>
            <input type="file" name="fileToUpload" placeholder="Nhập poster">
        </div>
        <div>
            <p> Quốc gia: </p>
            <select name="quoc_gia">
            <?php
                $sql= "select * from quoc_gia ";
                $result = mysqli_query($conn, $sql);
                
                while($quocGia = mysqli_fetch_array($result)){?>
                <option value="<?php echo $quocGia['id']?>"> <?php echo $quocGia['ten_quoc_gia'] ?> </option>
                <?php } ?>
            </select>
        </div>
        <div>
            <p>Số tập:</p>
            <input type="Number" name="so_tap" placeholder="Nhập số tập">
        </div>
        <div>
            <p>Trailer:</p>
            <input type="text" name="trailer" placeholder="Nhập trailer">
        </div>
        <div>
            <p>Mô tả:</p>
            <input type="text" name="mo_ta" placeholder="Nhập mo_ta">
        </div>
        <div>
            <p>Thể Loại:</p>
            <select name="the_loai_id" >
                <?php
                    $sql1="select * from the_loai";
                    $result1=mysqli_query($conn,$sql1);
                    while($theloai=mysqli_fetch_array($result1)){ 
                ?>
                    <option value="<?php echo $theloai['id'] ?>"><?php echo $theloai['ten_the_loai'] ?> </option>
                <?php } ?>
            </select>
        </div>
        <div>
            <input type="submit" value="thêm mới">
        </div>
    </form>



    
</body>
</html>