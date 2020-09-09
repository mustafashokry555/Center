<?php
$year = $_POST["year"];
$search = $_POST["search"];

$con = new mysqli("localhost","root","","mustafa"); //conect database

if($year == 0)
{   
    $sql = "SELECT * from students where name like '%$search%' ORDER BY name ASC ";
    $resrult =  $con->query($sql);
    if($resrult->num_rows > 0 )
    {
        $response = "";
        while ($data = $resrult->fetch_array())
        {
            $response .= '
                <tr>
                    <td>'.$data["name"].'</td>
                    <td>'.$data["phone"].'</td>
                    <td>'.$data["fphone"].'</td>
                    <td>'.$data["year"].'</td>
                </tr>
            ';
        }
        exit($response);
    }
}
else
{
    $sql = "SELECT * from students where name like '%$search%' AND year = '$year' ORDER BY name ASC ";
    $resrult =  $con->query($sql);
    if($resrult->num_rows > 0 )
    {
        $response = "";
        while ($data = $resrult->fetch_array())
        {
            $response .= '
                <tr>
                    <td>'.$data["name"].'</td>
                    <td>'.$data["phone"].'</td>
                    <td>'.$data["fphone"].'</td>
                    <td>'.$data["year"].'</td>
                </tr>
            ';
        }
        exit($response);
    }
}

?>