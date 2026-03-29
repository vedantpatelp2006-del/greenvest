<?php
include "../config/db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // hashing
$role = $_POST['role'];

$query = "INSERT INTO users(name,email,password,role)
VALUES('$name','$email','$password','$role')";

if(mysqli_query($conn,$query)){
    header("Location: login.php");
}else{
    echo "Registration failed";
}
?>