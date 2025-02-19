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
$email = $_POST['email'];
$pass = $_POST['password'];
$hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
$sql = "INSERT INTO sign_up (username, email, password) VALUES ('$user',
'$email', '$pass')";
$run = mysqli_query($con, $sql);
if (!$run) {
echo "Submission failed: " . mysqli_error($con);
} else {
echo "Submission Successful";
}
mysqli_close($con);
?>