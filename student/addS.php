<!DOCTYPE html>
<html lang="ar">
<head>


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/main.css">
  <title>Add Students</title>


</head>

<body dir="rtl">


<?php
  session_start();
  if(!isset($_SESSION["secretaryName"]))
    header("location: ../secretary/login-form.php")
?>


<div style="height: 100vh;" class="d-flex align-items-center  ">
  <div class="form container-md mx-auto  text-light rounded p-3" >
    <select name="year" id="year"  class="form-control col-md-3">
      <option selected value="0">اختر الصف الدراسي</option>
      <option value="1">الصف الاولي ثانوي</option>
      <option value="2"> الصف الثاني ثانوي</option>
      <option value="3">الصف الثالث ثانوي</option>
    </select>



    <table class="table  mt-3 table-sm text-light  table-bordered">
      <thead class="text-center ">
        <th>اسم الطالب</th>
        <th>رقم الطالب</th>
        <th>رقم ولي الامر</th>
      </thead>
      <tbody>
        <tr>
          <td><input class="form-control" type="text" placeholder="الاسم رباعي" name="name"></td>
          <td><input class="form-control" type="text" placeholder="رقم الطالب" name="phone"></td>
          <td><input class="form-control" type="text" placeholder="رقم ولي الامر" name="fPhone"></td>
        </tr>
        <tr>
          <td><input class="form-control" type="text" placeholder="الاسم رباعي" name="name"></td>
          <td><input class="form-control" type="text" placeholder="رقم الطالب" name="phone"></td>
          <td><input class="form-control" type="text" placeholder="رقم ولي الامر" name="fPhone"></td>
        </tr>
        <tr>
          <td><input class="form-control" type="text" placeholder="الاسم رباعي" name="name"></td>
          <td><input class="form-control" type="text" placeholder="رقم الطالب" name="phone"></td>
          <td><input class="form-control" type="text" placeholder="رقم ولي الامر" name="fPhone"></td>
        </tr>
        <tr>
          <td><input class="form-control" type="text" placeholder="الاسم رباعي" name="name"></td>
          <td><input class="form-control" type="text" placeholder="رقم الطالب" name="phone"></td>
          <td><input class="form-control" type="text" placeholder="رقم ولي الامر" name="fPhone"></td>
        </tr>
        <tr>
          <td><input class="form-control" type="text" placeholder="الاسم رباعي" name="name"></td>
          <td><input class="form-control" type="text" placeholder="رقم الطالب" name="phone"></td>
          <td><input class="form-control" type="text" placeholder="رقم ولي الامر" name="fPhone"></td>
        </tr>
      </tbody>
    </table>



    <button class="btn btn-success" id="addStudents">إضافه</button>

  </div>
</div>




  <script src="../js/jquery-3.5.0.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="addS.js"></script>

</body>
</html>