<?php

    include 'connection.php';

    $email = $_POST['uemail'];
    $new_name = $_POST['uname'];
    $new_message = $_POST['umsg'];

    $sql = "UPDATE users SET name = '$new_name', message = '$new_message' WHERE email = '$email'";

    $run = mysqli_query($con, $sql);

    if(!$run){
        echo 'Update failed!';
    } else{
        header("Location: list.php");
        exit();
    }
?>
