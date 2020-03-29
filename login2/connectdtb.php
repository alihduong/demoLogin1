<?php
$host = "ec2-34-200-101-236.compute-1.amazonaws.com";
$dbname = "d8655mnjdfgl02";
$user = "qihbbnoijvgnyx";
$password = "9b4c2d339e66c8cc4c5e91c43ffa8e3d7d7974f2e4fd0e92f3923a1075ca2192";
$port = "5432";
$conn= mysqli_connect($host, $user, $password, $database, $port);
mysqli_query($conn, $port, $database);
if(mysqli_connect_error()){
  echo "Connected ";
}else {
  echo "Not connected" . mysqli_connect_error();
}
 ?>