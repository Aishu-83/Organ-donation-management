<?php 
$connection = mysqli_connect('127.0.0.1', 'root', '', 'neworgandonation');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to database: " . mysqli_connect_error();
  }
mysqli_select_db($connection, "neworgandonation");
?>