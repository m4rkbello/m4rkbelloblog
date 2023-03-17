<?php
$servername = "localhost";
$username = "m4rk";
$password = "1004199909124899777";
$dbname ="m4rkbelloblog_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "";
?>