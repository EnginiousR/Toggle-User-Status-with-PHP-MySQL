<?php
$conn = new mysqli("localhost", "root", "", "userf");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
