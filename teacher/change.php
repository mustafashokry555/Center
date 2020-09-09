<?php


//get input value
$oldPass = $_POST["oldPass"];
$newPass = $_POST["pass"];
$changeId = $_POST["id"];


//validation
function valid($input)
{
    $input = htmlspecialchars($input);
    $input = trim($input);
    return $input;
}
$oldPass = valid($oldPass);
$newPass = valid($newPass);
$changeId = valid($changeId);





    $con = new mysqli("localhost","root","","mustafa"); //conect database
    //add data 
    $sql = "SELECT password FROM employees Where id = '$changeId'";
    $result =  mysqli_query($con,$sql);
    if($result)
    {
        $data = $result->fetch_ASSOC();
        if($data["password"]==$oldPass)
        {
            $sql = "UPDATE employees SET password = '$newPass' WHERE id = '$changeId'";
            mysqli_query($con,$sql);
            header("location: teacher.php");
        }
        else
            echo "<h1 style='text-align: center;'>من فضلك الرجوع للصفحه السابقه والتاكد من صحه كلمه المرمر القديمه</h1> ";
    }
    else 
    echo "<h1 style='text-align: center;'>من فضلك الرجوع للصفحه السابقه والتاكد من صحه الرقم القومي</h1> ";

    $con->close();
?>