<?php


//get input value
$name = $_POST["name"];
$id = $_POST["id"];
$pass = $_POST["pass"];


//validation
function valid($input)
{
    $input = htmlspecialchars($input);
    $input = trim($input);
    return $input;
}
$name = valid($name);
$id = valid($id);
$pass = valid($pass);





    $con = new mysqli("localhost","root","","mustafa"); //conect database

    //add data 
    $sql = "INSERT INTO employees(id, name, password) VALUES ('$id','$name','$pass')";
    $result =  mysqli_query($con,$sql);
    if($result)
        header("location: teacher.php");
    else 
    echo "<h1 style='text-align: center;'>من فضلك ارجع للصفحه السابقه وتاكد من ادخال بيانات غير موجوده مسبقا<br>(الاسم او الرقم القومي موجود مسبقا)</h1> ";
    
$con->close();
?>