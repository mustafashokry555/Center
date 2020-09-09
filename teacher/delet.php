<?php


//get input value
$name = $_POST["name"];


//validation
function valid($input)
{
    $input = htmlspecialchars($input);
    $input = trim($input);
    return $input;
}
$name = valid($name);


    $con = new mysqli("localhost","root","","mustafa"); //conect database

    //catch data with same name
    $sql = "DELETE FROM employees WHERE name = '$name'";
    mysqli_query($con,$sql);
    header("location: teacher.php");
    $con->close();
?>