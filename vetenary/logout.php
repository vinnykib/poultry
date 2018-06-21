<?php 
session_start();
unset($_SESSION['vetenary']);
header('location:../index.php');
?>