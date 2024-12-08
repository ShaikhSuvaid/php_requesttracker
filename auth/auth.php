<?php
session_start();
$conn=mysqli_connect("localhost","root","","purchasetracker");
    if(mysqli_connect_error()){
        echo "<script>alert('Cannot connect to database');</script>";
        exit();
    }
if(!isset($_SESSION['auth'])){
    header('location:../index.php');
}
?>