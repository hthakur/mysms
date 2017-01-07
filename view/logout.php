<?php include_once 'header.php';  

unset($_SESSION['email']);
session_regenerate_id(true);

session_destroy();

header('location:index.php');