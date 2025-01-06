<?php
if ($_POST) {
    $name = $_POST['fname'];      
    $surname = $_POST['lname'];    
    $birthday = $_POST['birthday']; 
    $sex = $_POST['sex'];           
    $username = $_POST['username']; 
    $pwd = $_POST['password'];      

   
    echo "สวัสดีคุณ $name $surname<br>";
    echo "วันเกิด: $birthday<br>";
    echo "เพศ: $sex<br>";
    echo "ชื่อในระบบ: $username<br>";
    echo "รหัสผ่าน: $pwd<br>";
}
?>
