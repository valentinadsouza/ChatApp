<?php
$conn = mysqli_connect("localhost", "root", "", "chat");

if(!$conn){
    die("Database Not Connected: " . mysqli_connect_error());
}
?>
