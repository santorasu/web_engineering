<?php
include 'home.php';

$username = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "UPDATE userinfo SET name = '$username', message = '$message' WHERE email = '$email'";

$run = mysqli_query($con, $sql);

if (!$run) {
    echo "Update failed!";
} else {
    header('Location: list.php');
}
?>
