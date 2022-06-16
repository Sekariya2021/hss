<?php
$hostName = "hss.mysql.database.azure.com";
$userName = "sekariya";
$password = "Prullenbak123";
$databaseName = "hss";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>