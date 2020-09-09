<!DOCTYPE html>
<html lang="ar">
<head>


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/main.css">
  <title>Secretary</title>


</head>

<body dir="rtl">

<?php
  session_start();
  if(!isset($_SESSION["secretaryName"]))
    header("location: login-form.php")
  ?>

<a href="logout.php" style="position: absolute; top: 2%; right: 2%; width: 200px;" class="btn btn-danger ">تسجيل الخروج</a>

  <div class="h-100 login-option d-flex justify-content-center flex-column align-items-center">

    <a href="../student/addS.php" class="btn addBTn btn-success mb-3 py-2">اضافه طالب</a>
    <a href="../student/student.php" class="btn btn-info mb-3 py-2 ">تصفح الطلاب</a>
    <a href="../student/degree/add.php" class="btn btn-warning mb-3 py-2 ">إضافه درجات/غياب/مصروفات</a>

  </div>


  <script src="../js/jquery-3.5.0.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/fun.js"></script>
</body>
</html>