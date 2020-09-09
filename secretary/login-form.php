<!DOCTYPE html>
<html lang="ar">
<head>


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/main.css">
  <title>Secretary Login</title>


</head>

<body dir="rtl" >




<!-- check session -->
<?php
  session_start();
  if(isset($_SESSION["secretaryName"]))
    header("location: secretary.php")
  ?>





<!-- login form -->
  <div class="login-option h-100">

    <div class="row h-100 mx-auto d-flex  justify-content-center  align-items-center">
      <form class="py-5 px-3 col-lg-4 form text-center col-md-6 col-sm-10" method="POST" action="login.php">
        
        
        <Label class="float-right">الاسم بالكامل<span> (رباعي)</span>:-</Label>
        <input class="form-control mb-4 " id="name" required name="name" type="text" placeholder="الاسم">
        
        <Label class="float-right">كلمه المرور:-</Label>
        <input class="form-control mb-4 " id="pass" required name="pass" type="password" placeholder="كلمه المرور">
          
        <input class="btn btn-success mt-5" type="submit" value="الدخول">

      </form>
    </div>

  </div>






  <script src="../js/jquery-3.5.0.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/fun.js"></script>
</body>
</html>