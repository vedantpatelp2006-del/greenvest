<?php
include "../config/db.php";
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){

$sender = $_SESSION['user_id'];
$receiver = $_POST['receiver'];
$message = trim($_POST['message']);

// prevent empty message
if(empty($message)){
    echo "Message cannot be empty";
    exit;
}

$query = "INSERT INTO messages(sender_id,receiver_id,message)
VALUES('$sender','$receiver','$message')";

mysqli_query($conn,$query);

header("Location: inbox.php");

}
?>

<h2>Send Message</h2>

<form method="POST">

Receiver ID<br>
<input type="number" name="receiver" required><br><br>

Message<br>
<textarea name="message" required></textarea>

<br><br>

<button>Send</button>

</form>