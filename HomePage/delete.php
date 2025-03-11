<?php
include 'home.php';
$val = $_POST['del'];
$sql = "DELETE FROM userinfo WHERE email = '$val'";

$run = mysqli_query($con, $sql);

if(!$run){
    echo " deletion failed!";
} else {
    header('Location: list.php');

}
?>