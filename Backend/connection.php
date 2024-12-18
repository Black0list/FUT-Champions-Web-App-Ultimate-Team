<?php
$servername = "db";
$username = "root";
$password = "rootPassword";
$db_name = "FUT_backend_database";

$connection = mysqli_connect($servername, $username, $password, $db_name);

if (!$connection) {
  echo "Connection failed";
} else {
  echo "Connected Successfully";
}

?>