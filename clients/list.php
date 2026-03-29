<?php
include "../config/db.php";
include "../layout/header.php";
$result=mysqli_query($conn,"SELECT * FROM clients");
?>

<h2>Clients</h2>

<a href="add.php">Add Client</a>

<table border="1">

<tr>
<th>Name</th>
<th>Email</th>
<th>Risk</th>
<th>Action</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result)){
?>

<tr>

<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['risk_level']; ?></td>

<td>

<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>

<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>

</td>

</tr>

<?php } ?>

</table>