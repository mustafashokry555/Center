    <?php
$name = $_POST["name"];
$date  = $_POST["date"];    
$cell = $_POST['cell'];
$value = $_POST['value'];


$con = new mysqli("localhost","root","","mustafa"); //conect database
$sql = $con->query("SELECT * FROM `degree` WHERE name = '$name' AND date = '$date'");
if($sql->num_rows > 0)
{
    $sql = $con->query("UPDATE degree SET $cell = $value WHERE name = '$name' AND date = '$date'");
}
else
{
    $sql = $con->query("INSERT INTO degree (name, $cell, date) VALUES ('$name', $value, '$date')");
}

?>