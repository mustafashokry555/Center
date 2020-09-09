<?php
session_start();
unset($_SESSION["teacherName"]);
header("location:../index.html");
?>