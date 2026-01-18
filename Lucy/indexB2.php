<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
    function daoNguocMang(&$mang){
        $n = count($mang);
        //VLN Duyệt phần tử mảng
        for($i = 0; $i < $n / 2; $i++) {
          //Tính vị trí đối xứng ở cuối mảng 
          $viTriCuoi = $n - 1 - $i;
            //Hoán vị
            $temp = $mang[$i];
            $mang[$i] = $mang[$viTriCuoi];
            $mang[$viTriCuoi] = $temp;
            }
        }
    $numbers = [1, 2, 6, 4, 5];
    $mangDaoNguoc = daoNguocMang($numbers);
    echo"[" . implode(", ", $numbers) . "];";
    ?>
</body>
</html>