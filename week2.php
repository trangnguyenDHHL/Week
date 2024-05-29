<!doctype html>
 <html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
 
        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>
 
    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main></main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>
 <?php

//  function familyName($fname){
//     echo "$fname Refsnes.<br>";
//  }
//  familyName("Jani");
//  familyName("Hege");
//  familyName("Stale");
//  familyName("Kal Jim");
//  familyName("Borge");

/*function add_five(&$value){
    $value += 5;
}
$num = 2;
add_five($num);
echo $num;
function sumMyNumber(...$x){
    $n = 0;
    $len = count($x);
    for ($i = 0; $i<$len; $i++)
    {
        $n += $x[$i];

    }
    return $n;
}
$a = sumMyNumber(5,2,6,2,7,7);
echo $a;
// $carsA = array("Volvo", "BMW", "Toyota");
// $carsB = ["Volvo", "BMW", "Toyota"];
// $carsC = ["Volvo",
// 	      "BMW",
//           "Toyota"
//         ];
// $carsD = [
//     0 => "Volmo",
//     1=> "BMW",
//     2=> "Toyota"
// ];
// $carsE = [];
// $carsE[0] = "Volmo";
// $carsE[1] ="BMW";
// $carsE[2] = "Toyota";

// $carsG =[];
// $carsE[0] = "Volmo";
// $carsG[1] = "BMW";
// $carsG["Toyota"] = "Vios";


// print_r($carsA);
// print_r($carsB);
// print_r($carsC);
// print_r($carsD);
// print_r($carsE);
// print_r($carsG);


$myArr = [];
$myArr[0] = "apples";
$myArr[1] = "bananas";
$myArr["fruit"] = "cherries";

$fruits = array("apple","Banana","cherry");
$fruits[] = "orange";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";}
   
$cars = array("banana","apple","model" =>"Mustang");
$cars["color"] = "red";

//them bien
$fruitsA = array("apple","Banana","Cherry");
array_push($fruitsA,"orange","kiwi","lemon");
$cars = array( "brand"=>"ford","model"=>"mustang");
$cars+= ["color"=>"red","year"=>"1964"];

//ham huy bo xoa cac phan tu trong mang
    $cars =  array("Volvo", "BMW", "Toyota");
    array_splice($cars,1,1);// Xóa phần tử ở index 1 (BMW)
    echo $cars[0],",",$cars[1]; // In ra phần tử còn lại (Volvo, Toyota)
    echo "<br>";

    $cars =  array("Volvo", "BMW", "Toyota");
    unset($cars[1]); //xoa gia tri 1
    echo $cars[0],",",$cars[2],"<br>";
    echo $cars[0],",",$cars[1];// goi gia tri 1

$cars =  array("Volvo", "BMW", "Toyota");
array_shift($cars);//loại bỏ phần tử đầu
array_pop($cars);//Loại bỏ phần tử cuối
echo $cars[0],$cars[1],$cars[2] //còn lại BMW
*/


  ?>
  <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
  ></script>
</body>
</html>