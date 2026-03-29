<?php
include "../config/db.php";
include "../layout/header.php";

$result = mysqli_query($conn,"SELECT * FROM portfolios");
?>

<h2>Portfolio List</h2>

<a href="add.php">Create Portfolio</a>

<table border="1">

<tr>
<th>Client ID</th>
<th>Investment</th>
<th>Amount</th>
<th>Performance</th>
<th>Actions</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)){
?>

<tr>

<td><?php echo $row['client_id']; ?></td>
<td><?php echo $row['investment_type']; ?></td>
<td><?php echo $row['amount']; ?></td>
<td><?php echo $row['performance']; ?></td>

<td>
<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
</td>

</tr>

<?php } ?>

</table>