<?php

    include 'connection.php';

    $val = $_POST['del'];

    $sql = "DELETE FROM users WHERE email = '$val'";

    $run = mysqli_query($con, $sql);

    if(!$run){
        echo 'Deletion failed!';
    } else{
        header("Location: list.php");
        exit();
    }
?>
