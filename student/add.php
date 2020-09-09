<?php
$names = $_POST['names'];
$phones = $_POST['phones'];
$fPhones = $_POST['fPhones'];
$year = $_POST['yy'];
$res = 0;
$i=0;


$con = new mysqli("localhost","root","","mustafa"); //conect database
//catch data with same name
foreach ($names as $name) 
{
    if($name != "")
    {
        $sql = "SELECT name from students where name='$name' ";
        $resrult =  $con->query($sql);
        if($resrult->num_rows > 0 )
            {
                $c =$i+1;
                exit("الاسم في السطر ".$c." موجود مسبقا من فضلك قم بتغبره ثم اضف من جديد");
            }
        else{
            $sql = "INSERT INTO students (name, phone, fphone, year) VALUES ('$name', '$phones[$i]', '$fPhones[$i]', $year)"; 
            $con->query($sql);
            $res++;
        }
    }
    $i++;
}
    $con->close();
    exit("تم اضافه عدد $res من الطلاب");
?>