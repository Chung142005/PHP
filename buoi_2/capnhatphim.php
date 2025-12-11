<?php
    include('connect.php');
    $id = $_GET['id'];

    if(!empty($_POST['tenPhim'])&&
    !empty($_POST['daoDien'])&&
    !empty($_POST['dienVien'])&&
    !empty($_POST['nam'])&&
    // !empty($_POST['poster'])&&
    !empty($_POST['quocGia'])&&
    !empty($_POST['soTap'])&&
    !empty($_POST['trailer'])&&
    !empty($_POST['theloai'])&&
    !empty($_POST['moTa'])){
        $tenPhim = $_POST['tenPhim'];
        $daoDien = $_POST['daoDien'];
        $dienVien = $_POST['dienVien'];
        $nam = $_POST['nam'];
        // $poster = $_POST['poster'];
        $quocGia = $_POST['quocGia'];
        $soTap = $_POST['soTap'];
        $trailer = $_POST['trailer'];
        $theloai = $_POST['theloai'];
        $moTa = $_POST['moTa'];

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
                $sql = "update phim set ten_phim='$tenPhim', dao_dien_id='$daoDien', dien_vien_id='$dienVien', nam_phat_hanh='$nam', poster='$target_file', quoc_gia_id='$quocGia', so_tap='$soTap', trailer='$trailer', mo_ta='$moTa', the_loai_id='$theloai' where id=$id";
                mysqli_query($conn, $sql);
                mysqli_close($conn);
                header('location: index.php?page_layout=phim');
            }
            
        }


        
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
    <style>
        .warning{
            color:red
        }
    </style>
</head>
<body>
    <?php
        
        $sql = "select * from phim where id=$id";
        $result = mysqli_query($conn, $sql);
        $phim = mysqli_fetch_assoc($result);
    ?>
    <form action="index.php?page_layout=capnhatphim&id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
        <h1> Cập nhật phim </h1>
        <div>
            <p> Tên phim: </p>
            <input type="text" name="tenPhim" placeholder="Tên phim" value="<?php echo $phim['ten_phim']; ?>">
        </div>
        <div>
            <p> Đạo diễn: </p>
            <select name="daoDien">
            <?php
                $sql= "select * from nguoi_dung where vai_tro_id = 3";
                $result = mysqli_query($conn, $sql);
                
                while($daoDien = mysqli_fetch_array($result)){?>
                <option value="<?php echo $daoDien['id']?>"> <?php echo $daoDien['ho_ten'] ?> </option>
                <?php } ?>
            </select>
        </div>
        <div>
            <p> Diễn viên: </p>
            <input type="text" name="dienVien" placeholder="Diễn viên" value="<?php echo $phim['dien_vien_id']; ?>">
        </div>
        <div>
            <p> Năm phát hành: </p>
            <input type="Number" name="nam" placeholder="Năm phát hành" value="<?php echo $phim['nam_phat_hanh']; ?>">
        </div>
        <div>
            <p> Poster: </p>
            <input type="file" name="fileToUpload" placeholder="Poster" value="<?php echo $phim['poster']; ?>">
        </div>
        <div>
            <p> Quốc gia: </p>
            <select name="quocGia">
            <?php
                $sql= "select * from quoc_gia";
                $result = mysqli_query($conn, $sql);
                
                while($quocgia = mysqli_fetch_array($result)){?>
                <option value="<?php echo $quocgia['id']?>"> <?php echo $quocgia['ten_quoc_gia'] ?> </option>
                <?php } ?>
            </select>
        </div>
        <div>
            <p> Số tập: </p>
            <input type="Number" name="soTap" value="<?php echo $phim['so_tap']; ?>">
        </div>
        <div>
            <p> Trailer: </p>
            <input type="text" name="trailer" value="<?php echo $phim['trailer']; ?>">
        </div>
        <div>
            <p> Mô tả: </p>
            <textarea name="moTa" ></textarea>
        </div>    
        <div>
            <p>Thể Loại:</p>
            <select name="theloai" >
                <?php
                    $sql1="select * from the_loai";
                    $result1=mysqli_query($conn,$sql1);
                    while($theloai=mysqli_fetch_array($result1)){ 
                ?>
                    <option value="<?php echo $theloai['id'] ?>"><?php echo $theloai['ten_the_loai'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <input type="submit" value="Cập nhật">
        </div>
    </form>


    
</body>
</html>