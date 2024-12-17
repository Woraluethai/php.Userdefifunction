<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ทดสอบการสร้างฟังก์ชั่น Function ที่สร้างโดยผู้พัฒนาโปรแกรม</h1>
    <?php
        $name = "Woraluethai Artaudon";
        Hello($name);
        //----------------------------------------------------
        echo "<h3>ทดสอบการใช้ Function</h3>";
        $a = 5;
        $b = 5;
        $c = sum($a,$b);
        echo "$a + $b = $c <br>";
        echo "<h3>ทดสอบการใช้ Function แบบมีพรามิเตอร์เป็น Reference</h3>";
        $num = 2;
        echo "Before ===>\$num = $sum <br>";
        add_5($num);
        echo "After ===> \$num = $sum <br>";
        echo "<hr>";
        echo "<h3>ทดสอบการใช้ Function แบบมีพรามิเตอร์เป็น Reference</h3>";
        $summaryNumber = sumMyNumber(1,2,3,4,5,6,7,8,9);
        echo "ผลรวมของ (1,2,3,4,5,6,7,8,9) = $summaryNumber";
        //----------------------------------------------------
        bye();

function sumMyNumber(...$x){
    $sum=0
    foreach ($x as $value){
        $sum += $value;
    }
    return $sum;
}
function add_5(&$value){
    $value+=5;
}
function Hello($yourname){
    echo "<h2>ผู้พัฒนาโปรแกรม</h2>";
    echo "<h3>".$yourname."</h3>";
    echo "<hr>";
}
    function sum($x,$y){
        $z = $x+$y;
        return $x;
    }
    function bye(){
        echo "<hr>";
        echo "<h4>หลักสูตรวิทยาศาสตร์บัณฑิต"
    }
</body>
</html>