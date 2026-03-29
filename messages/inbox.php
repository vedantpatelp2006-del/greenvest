<?php
include "../config/db.php";
include "../layout/header.php";
session_start();

$user = $_SESSION['user_id'];

$sql = "SELECT * FROM messages
        WHERE receiver_id='$user'
        ORDER BY created_at DESC";

$result = mysqli_query($conn,$sql);
?>

<h2>Inbox</h2>

<a href="send.php">Send Message</a>

<table border="1">

<tr>
<th>Sender</th>
<th>Message</th>
<th>Date</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['sender_id']; ?></td>

<td><?php echo $row['message']; ?></td>

<td><?php echo $row['created_at']; ?></td>

</tr>

<?php } ?>

</table>