<?php
$servername = "studmysql01.fhict.local";
$username = "dbi389741";
$password = "test123";
$databasename = "dbi389741";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $databasename);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "<script>console.log('Database is geconnect.' );</script>";
?>
