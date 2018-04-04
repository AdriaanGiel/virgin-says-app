<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "simon_hiscores";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully </br>";

$sql = "SELECT id, name, score FROM scores ORDER BY score DESC";
$result = $conn->query($sql);
