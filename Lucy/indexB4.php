<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    
    //1.Tạo danh sách 20 sinh viên
    $students = [
        ['name' => 'Inori Yuzuriha', 'dob' => '2005-01-01', 'gender' => 'Nữ', 'math' => 8, 'lit' => 9, 'eng' => 9.9],
        ['name' => 'Lucy', 'dob' => '2004-05-12', 'gender' => 'Nữ', 'math' => 9.8, 'lit' => 8, 'eng' => 9],
        ['name' => 'Arata Kasuga', 'dob' => '2005-11-20', 'gender' => 'Nam', 'math' => 9, 'lit' => 6, 'eng' => 7],
        ['name' => 'Mikasa Ackerman', 'dob' => '2004-02-10', 'gender' => 'Nữ', 'math' => 9.9, 'lit' => 9, 'eng' => 9.5],
        ['name' => 'Akame', 'dob' => '2004-04-15', 'gender' => 'Nữ', 'math' => 9, 'lit' => 6, 'eng' => 7],
        ['name' => 'Sakura Haruno', 'dob' => '2003-03-28', 'gender' => 'Nữ', 'math' => 9, 'lit' => 9.9, 'eng' => 9],
        ['name' => 'Rem', 'dob' => '2005-02-02', 'gender' => 'Nữ', 'math' => 9, 'lit' => 9, 'eng' => 8],
        ['name' => 'Emilia Tan', 'dob' => '2005-09-23', 'gender' => 'Nữ', 'math' => 8, 'lit' => 9, 'eng' => 9],
        ['name' => 'Violet Evergarden', 'dob' => '2004-06-15', 'gender' => 'Nữ', 'math' => 9.5, 'lit' => 9.8, 'eng' => 9.9],
        ['name' => 'Kirito Kirigaya', 'dob' => '2004-10-07', 'gender' => 'Nam', 'math' => 9.9, 'lit' => 8, 'eng' => 9.9],
        ['name' => 'Asuna Yuuki', 'dob' => '2004-09-30', 'gender' => 'Nữ', 'math' => 9, 'lit' => 9, 'eng' => 9.9],
        ['name' => 'Eren Yeager', 'dob' => '2004-03-30', 'gender' => 'Nam', 'math' => 9.5, 'lit' => 8, 'eng' => 9],
        ['name' => 'Saber', 'dob' => '2002-04-01', 'gender' => 'Nữ', 'math' => 9, 'lit' => 8, 'eng' => 9],
        ['name' => 'Johan Liebert', 'dob' => '2000-01-01', 'gender' => 'Nam', 'math' => 9.9, 'lit' => 9.9, 'eng' => 9.9],
        ['name' => 'Rin Tohsaka', 'dob' => '2004-02-03', 'gender' => 'Nữ', 'math' => 9.9, 'lit' => 9, 'eng' => 9],
        ['name' => 'Archer EMIYA', 'dob' => '2003-12-05', 'gender' => 'Nam', 'math' => 8, 'lit' => 7, 'eng' => 8],
        ['name' => 'Rena Ryugu', 'dob' => '2005-07-28', 'gender' => 'Nữ', 'math' => 8, 'lit' => 8, 'eng' => 7],
        ['name' => 'Keiichi Maebara', 'dob' => '2004-04-13', 'gender' => 'Nam', 'math' => 9, 'lit' => 9.9, 'eng' => 8],
        ['name' => 'Mion Sonozaki', 'dob' => '2004-12-21', 'gender' => 'Nữ', 'math' => 9, 'lit' => 7, 'eng' => 8],
        ['name' => 'Rika Furude', 'dob' => '2007-08-21', 'gender' => 'Nữ', 'math' => 9, 'lit' => 7, 'eng' => 8]
    ];
    
    //3: Tính Điểm TB và lưu vào mảng $students
    foreach ($students as $key => $s) {
        $students[$key]['avg'] = round(($s['math'] + $s['lit'] + $s['eng']) / 3, 2);
    }
    
    //2 & 6: Hàm sắp xếp và in danh sách
    function sortAndPrint($mang, $tieuDe) {
        echo "<h2>$tieuDe</h2>";
        // Sắp xếp theo tên (A-Z)
        usort($mang, function($a, $b) {
            return strcmp($a['name'], $b['name']);
        });
        
        echo "<table border='1' cellpadding='5' style='border-collapse:collapse; width:100%'>";
        echo "<tr style='background:#eee'><th>Tên</th><th>GT</th><th>Toán</th><th>Văn</th><th>Anh</th><th>Điểm TB</th></tr>";
        foreach ($mang as $s) {
            echo "<tr><td>{$s['name']}</td><td>{$s['gender']}</td><td>{$s['math']}</td><td>{$s['lit']}</td><td>{$s['eng']}</td><td><b>{$s['avg']}</b></td></tr>";
        }
        echo "</table>";
    }
    
    //4: Hàm trả về mảng danh sách các bạn nữ
    function layDanhSachNu($mang) {
        $kq = [];
        foreach ($mang as $s) {
            if ($s['gender'] === 'Nữ') {
                $kq[] = $s;
            }
        }
        return $kq;
    }
    
    //5: Hàm trả về danh sách sinh viên có Điểm TB >= 8.0
    function laySinhVienGioi($mang) {
        $kq = [];
        foreach ($mang as $s) {
            if ($s['avg'] >= 8.0) {
                $kq[] = $s;
            }
        }
        return $kq;
    }
    
    // 7: Tìm bạn nữ có Điểm TB cao nhất
    function timNuXuatSac($mangNu) {
        $top = null;
        foreach ($mangNu as $g) {
            if ($top === null || $g['avg'] > $top['avg']) {
                $top = $g;
            }
        }
        return $top;
    }

    //2 & 6
    sortAndPrint($students, "Danh sách sinh viên đã sắp xếp (A-Z)");
    
    //4
    $girls = layDanhSachNu($students);
    echo "<h3>Danh sách các bạn Nữ:</h3>";
    foreach($girls as $g) echo $g['name'] . " | ";
    
    //5
    $goodOnes = laySinhVienGioi($students);
    echo "<h3>Danh sách sinh viên Giỏi (TB >= 8.0):</h3>";
    foreach($goodOnes as $gs) echo $gs['name'] . " (" . $gs['avg'] . "), ";
    
    //7
    $winner = timNuXuatSac($girls);
    echo "<h3>Bạn nữ có Điểm TB cao nhất:</h3>";
    if ($winner) {
        echo "<b style='color:red'>{$winner['name']}</b> với <b>{$winner['avg']}</b> điểm";
    }
    ?>
</body>
</html>