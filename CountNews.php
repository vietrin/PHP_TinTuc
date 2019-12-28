<?php
require_once 'DBConnect.php';
$query = "SELECT MAX(ma) FROM baiviet";
$result = mysqli_query($con,  $query);
$row = mysqli_fetch_row($result);
$_SESSION['dem']=$row[0];

?>