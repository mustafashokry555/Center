<!DOCTYPE html>
<html lang="ar">
<head>


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/main.css">
  <title>Teacher</title>


</head>

<body dir="rtl">

  <?php
  session_start();
  if(!isset($_SESSION["teacherName"]))
    header("location: login-form.php")
  ?>

<!-- logout button -->
  <a href="logout.php" style="position: absolute; top: 2%; right: 2%; width: 200px;" class="btn btn-danger ">تسجيل الخروج</a>


  <!-- option button -->
  <div class="h-100 login-option d-flex justify-content-center flex-column align-items-center">

    <button class="btn addBTn btn-success mb-3 py-2">اضافه مساعد</button>
    <button class="btn deletBTn btn-info mb-3 py-2 ">حذف مساعد</button>
    <button class="btn changeBtn btn-dark mb-3 py-2 ">تغير كلمه المرور</button>

    

  </div>



  <!-- add form -->
  <div class="row mx-auto px-2 position-absolute  overlay addDiv justify-content-center align-items-center">
    <form class="py-5 position-relative px-3 form col-lg-4 text-center bg-light col-md-6 col-sm-10" method="POST" action="add.php">
      <i class="fas fa-times close"></i>
      
      <Label class="float-right mt-3">الاسم بالكامل<span> (رباعي)</span>:-</Label>
      <input class="form-control mb-4" type="text" name="name" required id="name" placeholder="الاسم">
      
      <Label class="float-right">الرقم القومي:-</Label>
      <input class="form-control mb-4" type="text" name="id" required id="id" placeholder="الرقم القومي">
        
      <Label class="float-right">كلمه المرور:-</Label>
      <input class="form-control mb-4" type="password" name="pass" required id="pass" placeholder="كلمه المرور">


      <button class="btn btn-success mt-5">اضافه</button>
      

    </form>
  </div>





  <!-- delet form -->
  <div class="row mx-auto px-2 position-absolute  overlay deletDiv justify-content-center align-items-center">
    <form class="py-5 position-relative px-3 col-lg-4 text-center bg-light col-md-6 col-sm-10 " action="delet.php" method="POST">
      <i class="fas fa-times close" ></i>
      
      <Label class="float-right mt-3">الاسم بالكامل<span> (رباعي)</span>:-</Label>
      <input class="form-control mb-4" type="text" name="name" required id="deletName" placeholder="الاسم">

      <button class="btn btn-danger mt-5">حذف</button>

    </form>
  </div>




  <!-- Change password form -->
  <div class="row mx-auto px-2 position-absolute  overlay changeDiv justify-content-center align-items-center">
    <form action="change.php" method="POST" class="py-5 position-relative px-3 col-lg-4 text-center bg-light col-md-6 col-sm-10 ">
      <i class="fas fa-times close" ></i>
      
      <Label class="float-right">كلمه المرور القديمه:-</Label>
      <input class="form-control mb-4" type="password" name="oldPass" required id="oldPass" placeholder=" كلمه المرور القديمه">

      <Label class="float-right">كلمه المرور:-</Label>
      <input class="form-control mb-4" type="password" name="pass" required id="nwePass" placeholder="كلمه المرور">

      <Label class="float-right">الرقم القومي</Label>
      <input class="form-control mb-4" type="text" name="id" required id="changeId" placeholder="الرقم القومي">

      <button class="btn btn-success mt-5">تغير</button>

    </form>
  </div>





  <script src="../js/jquery-3.5.0.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/fun.js"></script>

</body>
</html>