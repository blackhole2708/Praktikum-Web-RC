<?php

$conn = mysqli_connect('localhost', 'root', '', 'crud');

if(!$conn){
    die(mysqli_error($conn));
} 
?>