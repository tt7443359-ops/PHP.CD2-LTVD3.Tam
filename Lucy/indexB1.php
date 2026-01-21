<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function xapXep(&$mang){
        $n = count($mang);
        //VLN Duyệt phần tử mảng
        for($i = 0; $i < $n-1; $i++) {
            //VLT So sánh
            for($j = 0; $j < $n - $i - 1; $j++){
                //Hoán vị
                if ($mang[$j] > $mang[$j + 1]) {
                $temp = $mang[$j];
                $mang[$j] = $mang[$j + 1];
                $mang[$j + 1] = $temp;
              }
            }
        }
    }
    $numbers = [4, 2, 8, 1];
    xapXep($numbers);
    echo "[" . implode(", ", $numbers) . "];";
    /*Hàm implode: Nhặt phần tử trong mảng ghép lại,
    không cần truy suất khai báo phần tử đó ở vị trí nào trong mảng => in ra ngắn gọn*/
    //tam...Not someone else's
    ?>
</body>
</html>