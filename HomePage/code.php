<?php

    include 'connection.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query = "INSERT INTO users (name, email, message) 
              VALUES ('$name', '$email', '$message')";

    $run = mysqli_query($con, $query);
    
    if(!$run){
        echo "<br>Submission failed!";
    } else{
        header("Location: list.php");
        exit();
    }
?>
