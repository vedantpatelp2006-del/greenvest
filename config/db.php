<?php

$host="127.0.0.1";
$user="root";
$password="admin";
$db="greenvest1";

$conn=mysqli_connect($host,$user,$password,$db);

if(!$conn){
die("Database connection failed");
}

?>