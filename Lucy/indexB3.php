<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
    function timGiaTri($giaTri, $mang){
        $n = count($mang);
        for($i = 0; $i < $n; $i++){
            if($mang[$i] === $giaTri){
                //Trả về index
                return $i;
            }
        }
        return -1;
    }
    $character = ["Inori", "Lucy", "Iriya"];
    $index = timGiaTri("Iriya", $character);
    if($index !== -1){
        echo "Tìm thấy nhân vật:" . $character[$index];
    }
    else{
        echo "Đ**o thấy cho: $index nhá";
    }
    //echo $index: in ra số thứ tự vị trí phần tử trong mảng (0,1,2...n)
    //echo $mang[$index]: in ra ký tự trong mảng
    ?>
</body>
</html>