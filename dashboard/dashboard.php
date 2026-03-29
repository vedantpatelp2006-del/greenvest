<?php
session_start();

if(!isset($_SESSION['user_id'])){
header("Location: ../auth/login.php");
}
?>

<h1>GreenVest Dashboard</h1>

<div>

<a href="../clients/list.php">Manage Clients</a><br><br>

<a href="../portfolio/list.php">Manage Portfolio</a><br><br>

<a href="../messages/inbox.php">Messages</a><br><br>

<a href="../auth/logout.php">Logout</a>

</div>