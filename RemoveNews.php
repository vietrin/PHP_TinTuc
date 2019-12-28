<?php 
  	include_once 'DBConnect.php';
      $ma = $_GET['ma'];
      $q = "DELETE FROM `baiviet` WHERE ma=$ma " ;
      mysqli_query($con,$q);
      header('location:adminHome.php');
?>