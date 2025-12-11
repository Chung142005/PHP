<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buổi 1 php</title>
</head>
<body>
    <?php 
        // 1 in ra màn hình
        echo "hello world! <br>";
        echo "hi ";

        // 2 khai báo biến dùng dấu $ tenbien = giá trị
        $ten = "nguyễn văn chung";
        $tuoi = 18;

        echo $ten . " ". $tuoi. " tuổi";

        // 3 khai báo hằng
        define("soPi", "3.14");
        echo soPi."<br> ";

        // 4 phân biệt ' ' và " "
        echo "phân biệt";
        echo "$ten"."<br>";
        echo '$ten'."<br>";

        // 5 chuỗi
        // 5.1 kiểm tra độ dài chuỗi
        echo"$ten"."<br>";
        echo strlen($ten)."<br>";
        // 5.2 đếm số từ
        
        echo str_word_count($ten);
        // 5.3 tìm kiếm ký tự trong chuỗi
        echo strpos($ten, "c")."<br>";
        // 5.4 thay thế ký tự
        echo str_replace("chung", "chiến", $ten)."<br>";

        // toán tử
        $soThuNhat = 10;
        $soThuHai = 5;
        // phép cộng trừ nhân chia
        // phép gán += -= *= /= %=
        // phép so sánh == != > < >= <= ===
        echo $soThuNhat + $soThuHai."<br>";

        // 7 câu điều kiện
        // if(điều kiện){
        //      logic
        // }
        // elif(điều kiện){
        //      logic
        // }
        // else {
        //      logic 
        // }
        if($soThuNhat+$soThuHai<15){
            echo "tổng nhỏ hơn 15";
        }elseif($soThuNhat+$soThuHai==15){
            echo "tổng bằng 15";
        }else{
            echo "tổng lớn hơn 15";
        }
        // switch case
        $color ="red";
        switch ($color){
            case "red":
                echo "is red";
                break;
            case "blue":
                echo "is blue";
                break;
            default:
                echo "no color";
                break;
        }
        // 9 for
        for($i=0;$i<100;$i++){
            echo $i."<br>";
        }
        // 10 mảng
        $mang = ["Anh", "Nhật Anh", "Vũ Anh"];
        // lấy phần tử
        echo count($mang)."<br>";
        echo $mang[1]."<br>";
        print_r($mang)."<br>";
        $mang[0]="chung"."<br>";
        print_r($mang)."<br>";
        $mang[]= "tâm";
        print_r($mang)."<br>";
        // xóa
        unset($mang[3]);
        print_r($mang)."<br>";

        // sắp xếp mảng
        $mang = ["C","B","D","A"];
        print_r($mang);
        echo "<br>";
        sort($mang);
        print_r($mang);
        echo "<br>";
        // sx giảm
        rsort($mang);
        print_r($mang);
        echo "<br>"

        // 11 kiểm tra biến có tồn tại hay không
        // $bienA ="hello";
        // isset($bienA); // true
        // isset($bienB); // false

        // if(isset($bienB)){
        //     echo "biến này có tồn tại";

        // }else{
        //     echo "biến này không tồn tại";
        // }

        // // check empty
        // $check = " ";
        // if(empty($check)){
        //     echo "empty";
        // }else{
        //     echo "not empty";
        // }

        // 12 hàm
        // function xinChao(){
        //     return "hello";
        // };
        // echo xinChao();
        // // hàm có tham số
        // function xinChao($ten){
        //     return "hello $ten"
        // }


    ?>
</body>
</html>