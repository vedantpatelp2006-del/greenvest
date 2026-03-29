<?php
session_start();

if($_SESSION['role'] != "client"){
header("Location: ../auth/login.php");
}
?>

<h1>Client Dashboard</h1>

<a href="../portfolio/list.php">View Portfolio</a><br><br>

<a href="../messages/inbox.php">Messages</a><br><br>

<a href="../auth/logout.php">Logout</a>