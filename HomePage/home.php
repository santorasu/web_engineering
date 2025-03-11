<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'data';

$con = mysqli_connect($host, $username, $password, $db);

if (!$con) {
    die('Connection failed: ' . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim(mysqli_real_escape_string($con, $_POST['name']));
    $email = trim(mysqli_real_escape_string($con, $_POST['email']));
    $message = trim(mysqli_real_escape_string($con, $_POST['message']));

    if (empty($name) || empty($email) || empty($message)) {
        die("All fields are required!");
    }

    $sql = "INSERT INTO userinfo (name, email, message) VALUES ('$name', '$email', '$message')";
    if (mysqli_query($con, $sql)) {
        header("Location: list.php");
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>
