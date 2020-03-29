<?php
$host = "ec2-3-229-210-93.compute-1.amazonaws.com";
$dbname = "daicqmolrvagae";
$user = "zvuefagwinjhbz";
$password = "7b32051a4f76b737dc94390bcc62f891ab8173a95e466246124dceb5685f1075";
$port = "5432";
$conn= mysqli_connect($host, $user, $password, $database, $port);
mysqli_query($conn, $port);
if(mysqli_connect_error()){
  echo "Connected ".mysqli_connect_error();
}
 ?>