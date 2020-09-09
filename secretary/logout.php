<?php
session_start();
unset($_SESSION["secretaryName"]);
header("location:../index.html");
?>