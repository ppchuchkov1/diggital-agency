<?php
$servername = "localhost";
$username = "DB-USERNAME";
$password = "DB-PASSWORD";
$dbname = "digital-agency";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
