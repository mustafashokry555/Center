<?php
session_start();

//get input value
$name = $_POST["name"];
$pass = $_POST["pass"];


//validation
function valid($input)
{
    $input = htmlspecialchars($input);
    $input = trim($input);
    return $input;
}
$name = valid($name);
$pass = valid($pass);




$con = new mysqli("localhost","root","","mustafa"); //conect database
//catch data with same name
$sql = "SELECT * FROM employees WHERE name = '$name'"; 
$dosql = mysqli_query($con,$sql);
$data = $dosql->fetch_ASSOC();

//check user to login
if($data["name"] == $name && $data["password"] == $pass && $data["job"] == 1)
{
    $_SESSION["teacherName"] = $name;
    header("location: teacher.php");
}
else
    header("location: login-form.php");

    $con->close();

?>