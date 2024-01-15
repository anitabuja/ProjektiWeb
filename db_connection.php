<?php 
$servername = "localhost";
$username = "root";
$password = "";
$name = 'projekti_web';


$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

