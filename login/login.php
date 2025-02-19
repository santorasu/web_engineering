<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'data';
$con = mysqli_connect($host, $username, $password, $db);
if (!$con) {
die('Connection failed: ' . mysqli_connect_error());
} else {
echo 'Connection Successful';
}
$user = $_POST['username'];
$pass = $_POST['password'];
$sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";
$run = mysqli_query($con, $sql);
if (!$run) {
echo "Submission failed: " . mysqli_error($con);
} else {
echo "Submission Successful";
}
mysqli_close($con);
?>