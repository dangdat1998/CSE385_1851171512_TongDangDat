<?php
session_start();
$masv=$_SESSION['masv'];
$id=$_GET['id'];
require_once "config.php";
delete2($id,$masv);
header("location:forum2.php");
?>


