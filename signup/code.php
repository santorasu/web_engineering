<?php

    include 'connection.php';

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password before inserting it into the database
    //$hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // SQL query to insert data into the "signin" table
    $query = "INSERT INTO signin (fname, lname, username, gender, email, password) 
              VALUES ('$fname', '$lname', '$username', '$gender', '$email', '$password')";

    $run = mysqli_query($con, $query);
    
    if(!$run){
        echo "<br>Submission failed!";
    } else {
        header("Location: ..\login\login.html");
        exit();
    }
?>
