<?php

include 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Simple SQL query to check if the user exists
$query = "SELECT * FROM signin WHERE username = '$username' AND password = '$password'";
$run = mysqli_query($con, $query);

if (mysqli_num_rows($run) > 0) {
    echo "✅ Login successful!";
    // You can redirect or start a session here if needed
    // header("Location: dashboard.html");
    // exit();
} else {
    echo "❌ Invalid username or password!";
}

?>
