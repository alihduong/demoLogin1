
<?php
$host = "ec2-18-235-97-230.compute-1.amazonaws.com";
$dbname = "d4l63lg9i54ksb";
$user = "ahxjftxmajtfpi";
$password = "47e8b52c54cdeb67ce97fe4ca9f7838e222fb80f757a06aa8c3d8d528f8d2861";
$port = "5432";

$dsn = mysqli_connect($host, $user, $password, $database, $port);

mysqli_query($dsn, $dbname);

if(mysqli_connect_error()){
  echo "Connected <br />"+ mysqli_connect_error();
}else {
  echo "Not connected";
}
 ?>
