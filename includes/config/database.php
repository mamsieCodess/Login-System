<?php

//lets connnect to the database
$host = 'localhost';
$username = 'root';
$password = 'root';
$database = 'login_system';

$conn = new mysqli($host,$username,$password,$database);
// if($conn){
//     echo 'You are connected';
// }else{
//    echo $conn->error;
// }
