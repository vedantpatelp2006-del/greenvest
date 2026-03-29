<?php
session_start();

if($_SESSION['role'] != "advisor"){
header("Location: ../auth/login.php");
}
?>

<h1>Advisor Dashboard</h1>

<a href="../clients/list.php">Manage Clients</a><br><br>

<a href="../portfolio/list.php">Manage Portfolios</a><br><br>

<a href="../messages/inbox.php">Client Messages</a><br><br>

<a href="../auth/logout.php">Logout</a>