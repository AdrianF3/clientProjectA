<?php
//Load DB Connection and gather current info
$servername = "localhost";
$username = "u480905865_af_dev";
$password = "#8lN|P7Xz";
$dbname = "u480905865_client_DevDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
