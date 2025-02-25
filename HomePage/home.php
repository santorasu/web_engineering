<?php
// Database connection
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'data';

$con = mysqli_connect($host, $username, $password, $db);

// Check connection
if (!$con) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input
    $name = trim(mysqli_real_escape_string($con, $_POST['name']));
    $email = trim(mysqli_real_escape_string($con, $_POST['email']));
    $message = trim(mysqli_real_escape_string($con, $_POST['message']));

    // Validation
    if (empty($name) || empty($email) || empty($message)) {
        die("All fields are required!");
    }

    // Insert data into database
    $sql = "INSERT INTO userinfo (name, email, message) VALUES ('$name', '$email', '$message')";
    if (mysqli_query($con, $sql)) {
        echo "Data uploaded successfully!";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

// Close connection
mysqli_close($con);
?>
