<?php
$servername = "localhost";
$username   = "root";
$password   = "your_password";
$database    = "createuser";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
  die("Connection not successful".mysqli_connect_error());
}
else
{
  //echo "Connection succesfull";
}






?>