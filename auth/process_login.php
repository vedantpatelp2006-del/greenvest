<?php
include "../config/db.php";
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0){

    $user = mysqli_fetch_assoc($result);

    //  password verify
    if(password_verify($password, $user['password'])){

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];

        if($user['role'] == "advisor"){
            header("Location: ../dashboard/advisor_dashboard.php");
        }else{
            header("Location: ../dashboard/client_dashboard.php");
        }

    }else{
        echo "Invalid password";
    }

}else{
    echo "User not found";
}
?>