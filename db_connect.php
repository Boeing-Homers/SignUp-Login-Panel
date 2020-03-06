<?php
$connection = mysqli_connect('localhost:3308', 'root', '','magebitdata');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'magebitdata');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}