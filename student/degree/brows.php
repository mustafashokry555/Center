<?php

$search = $_POST["search"];
$year = $_POST["year"];
$date = $_POST["date"];

$con = new mysqli("localhost","root","","mustafa"); //conect database

if ($year == 0)
    $sql = $con->query("SELECT name FROM students where name like '%$search%' ORDER BY name ASC");
else
    $sql = $con->query("SELECT name FROM students where name like '%$search%' AND year ='$year' ORDER BY name ASC");


if($sql->num_rows > 0)
{
    $response = "";
    $name = "";


    while ($data = $sql->fetch_array())
    {
        $name = $data['name'];

        $degSql = $con->query("SELECT * FROM `degree` WHERE name = '$name' AND date = '$date'");
        if($degSql->num_rows > 0)
        {
            $data2 = $degSql->fetch_array();
            $response .= '
                <tr>
                    <td>'.$data["name"].'</td>
                    <td><input name="deg" onfocusout="update(\''.$data["name"].'\',\'deg\',this)"  value="'.$data2["deg"].'"></td>
                    <td><input name="mony" onfocusout="update(\''.$data["name"].'\',\'mony\',this)"  value="'.$data2["mony"].'"></td>
                    ';
            if($data2['day']==1)
            {
                $response .='
                        <td  class="text-center"><input name="day" class="form-control" checked onclick="check(\''.$data["name"].'\',\'day\',this)" type="checkbox" ></td>
                    </tr>
                ';
            }
            else
            {
                $response .='
                        <td  class="text-center"><input name="day" class="form-control" onclick="check(\''.$data["name"].'\',\'day\',this)" type="checkbox" ></td>
                    </tr>
                ';
            }
        }
        else
        {
            $response .= '
                    <tr>
                        <td>'.$data["name"].'</td>
                        <td><input name="deg"  onfocusout="update(\''.$data["name"].'\',\'deg\',this)"  value=""></td>
                        <td><input name="mony" onfocusout="update(\''.$data["name"].'\',\'mony\',this)"  value=""></td>
                        <td class="text-center"><input name="day" class="form-control" type="checkbox" onclick="check(\''.$data["name"].'\',\'day\',this)"  ></td>
                    </tr>
                ';
        }
    }
    exit($response);
}   







?>