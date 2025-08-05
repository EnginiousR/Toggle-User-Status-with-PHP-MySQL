<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userf";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Data to insert
$name = "Ruba";
$age = 22;

$sql = "INSERT INTO users (name, age) VALUES ('$name', $age)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
