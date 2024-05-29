<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <?php
    /* $txt ="Hanoi";
       echo "I love $txt!<br>";
       echo "I love " .$txt. "!<br>";
       $x = 5;
       $y = 4;
       echo $x +$y;
       echo "<br>";
       $a = 5;
       $b ="Trang";
       echo $a;
       echo "<br>";
       echo $b;
       $ten ="Nguyen van an";
       echo "<h1>$ten";
    var_dump(5);
    var_dump("John");
    var_dump(3.14);
    var_dump(true);
    var_dump([2,3,43]);
    var_dump(NULL);
       
      $x=$y=$z ="Fruit";
      echo "$x<br>";
      echo $y;
      echo $z;
     
      $x =5; 
      function myTest(){
        global $x;
        echo "<p> biến x ở bên trong hàm function: $x</p>";
      }
      myTest();
      echo "<p> Biến x ở bên ngoài hàm Function: $x</p>";
    
      $x = 5;
      $y =10;
      function myTest(){
        global $x,$y;
        $y = $x+$y;
      }
      myTest();
      echo $y;
  
  function myTest(){
    static $x = 0;
    echo $x;
    $x++;
  }
  myTest();
  echo "<br>";
  myTest();
  echo "<br>";
  myTest()
  
  echo "<h2>PHP is fun!</h2>";
  echo " hello<br>";
  echo "this","about"
 
 /* $cars = array("volo","bmw","dsf");
  echo($cars);
  $x = "hello";
  $x = null;
  var_dump($x);
    
    echo "Hello";
    print'hello';
   
    echo strlen("hello world!");//ham tra ve so luong chữ trong chuoi
    echo "<br>";
    echo str_word_count("Hello world!");//ham tra ve so luong từ trong chuoi
    echo "<br>";
    echo strpos("hello world!","world");// tra ve vi tri sau con trong sau me
 
    $NAME = "Nguyen Thanh An";
    $lop = 'KHMT6B';

    echo str_replace(" An", " Minh", "\"$NAME\"");


  $x = 5985;
  var_dump(is_numeric($x));
  echo "<br>";
  $x = "5985";
  var_dump(is_numeric($x));
  echo "<br>";
  $x = "59.85"+ 100;
  var_dump(is_numeric($x));
 
    define("UNIVERSITY", "Xin chào Đại học Hạ Long");
    echo UNIVERSITY;
   
    $ho = "Nguyen Van";
    $ten = "Minh";
    $ten .= $ho;
    $ho.=$ten;
    echo $ten;
    echo "<br>";
    echo $ho;
      
      
      $hoten = "Nguyen An";
      $GioTinh = "Nam";
      $tuoi =32;
      
      if ($tuoi <= 20) {
          echo "Chào em \"$hoten!\"";
      } elseif ($tuoi <= 40 ) {
          if ($GioTinh == "Nam") {
              echo "Xin chào anh \"$hoten!\"";
          } else {
              echo "Xin chào chị \"$hoten!\"";
          }
      } elseif ($tuoi < 60 ) {
          if ($GioTinh == "Nam") {
              echo "Chào bác \"$hoten!\"";
          } else {
              echo "Chào bà \"$hoten!\"";
          }
      } else {
          if ($GioTinh == "Nam") {
              echo "Chào ông \"$hoten!\"";
          } else {
              echo "Chào bà \"$hoten!\"";
          }
      }

    }

$nam = 2022;
$thang = 2;

switch ($thang) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        $so_ngay = 31;
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        $so_ngay = 30;
        break;
    case 2:
        if (($nam % 4 == 0 && $nam % 100 != 0) || $nam % 400 == 0) {
            $so_ngay = 29;
        } else {
            $so_ngay = 28;
        }
        break;
    default:
        $so_ngay = "Tháng không hợp lệ";
}

echo "Số ngày trong tháng là: " . $so_ngay;


taoj 1 mang gom ten cua 5 sinh vien in ten ra man hinh moi ten 1 dong
$sv = array("Nguyễn Văn Tuấn", "Trần Thị Ngọc Nhung", "Lại Văn Huy", "Phạm Thị Dung", "Hoàng Văn ");
foreach ($sv as $ten) {
    echo $ten . "<br>"; 
}

$khachhang = ["Họ và tên" => "Nguyễn Văn An", "Địa chỉ" => "Quảng Yên", "Giới tính" => "Nam", "Sđt" => "09982271" , "Tuổi" => "34" ];
foreach ($khachhang as $key => $element) {
    echo $key . ": " . $element . "  ";
}

foreach ($khach_hang as $key => $element) {
    echo $key . ": " . $element . "  ";

$diem_so = 7.5;
$diem_chu = diem_chu($diem_so);
echo "Điểm số $diem_so tương ứng với điểm chữ $diem_chu";



function hoc_bong($diem_tb_hoc_ky, $diem_tb_ren_luyen) {
    if ($diem_tb_hoc_ky >= 9 && $diem_tb_ren_luyen >= 80) {
        return 'Học bổng loại Xuất Sắc';
    } elseif ($diem_tb_hoc_ky >= 7.5 && $diem_tb_ren_luyen >= 80) {
        return 'Học bổng loại Giỏi';
    } else {
        return 'Không đủ điều kiện nhận học bổng';
    }
}

// Sử dụng hàm để xác định việc cấp học bổng
$diem_tb_hoc_ky = 8.5;
$diem_tb_ren_luyen = 89;
$ket_qua = hoc_bong($diem_tb_hoc_ky, $diem_tb_ren_luyen);
echo "Với điểm trung bình học kỳ là $diem_tb_hoc_ky và điểm trung bình rèn luyện là $diem_tb_ren_luyen, bạn được cấp $ket_qua";
*/

    function diem_chu($diem)
    {
        if ($diem >= 8.5) {
            return 'A';
        } elseif ($diem >= 7) {
            return 'B';
        } elseif ($diem >= 5.5) {
            return 'C';
        } elseif ($diem >= 4) {
            return 'D';
        } else {
            return 'F';
        }
    }

    ?>

    <header>
        <!-- place navbar here -->
    </header>
    <main>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>