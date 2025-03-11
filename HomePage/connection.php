<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'userlist';

$con = mysqli_connect($host, $username, $password, $database);

if(!$con){
    echo "Connection failed!";
}