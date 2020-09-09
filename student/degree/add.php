<!DOCTYPE html>

<html lang="ar">
<head>


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/main.css">
  <title>Secretary</title>


</head>

<body dir="rtl" class="overflow-auto">
<?php
  $date = date("Y-m-d");
  session_start();
  if(!isset($_SESSION["secretaryName"]))
    header("location: ../../secretary/login-form.php")
?>


  <div class=" container-md mx-auto  d-md-flex justify-content-between " >
    <select name="year" id="year"  class="form-control col-md-3 my-3 ">
      <option selected value="0">اختر الصف الدراسي</option>
      <option value="1">الصف الاولي ثانوي</option>
      <option value="2"> الصف الثاني ثانوي</option>
      <option value="3">الصف الثالث ثانوي</option>
    </select>

    <input type="date" class=" form-control col-md-4 my-3" min="2020-01-01" value="<?php echo $date; ?>"  id="history" name=date>

    <input class="form-control col-md-4 my-3" id="search" onfocusout="update('mu')"  name="search" placeholder="بحث">
    </div>


  <div class ="m-3">
    
  <table class="table form rounded-0  mt-3 table-sm text-light  table-bordered">
      <thead class="text-center ">
        <th>اسم الطالب</th>
        <th>الدرجه</th>
        <th>المصاريف</th>
        <th>الحضور</th>
      </thead>
      <tbody id="tBody" style="font-size:20px;" class="text-right"></tbody>
  </table>
  </div>



  <script src="../../js/jquery-3.5.0.min.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <script src="data.js"></script>

</body>
</html>