<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'CIMS';

$conn = mysqli_connect($host, $username, $password, $dbname);
if(!$conn){
    die('Connection failed: '.mysqli_connect_error());
}/*else{
    echo 'Connected successfully';
}*/