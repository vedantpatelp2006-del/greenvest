<?php
include "../config/db.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){

$name=$_POST['name'];
$email=$_POST['email'];
$risk=$_POST['risk'];

$query="INSERT INTO clients(name,email,risk_level)
VALUES('$name','$email','$risk')";

mysqli_query($conn,$query);

header("Location: list.php");

}
?>

<h2>Add Client</h2>

<form method="POST">

Name<br>
<input type="text" name="name"><br><br>

Email<br>
<input type="email" name="email"><br><br>

Risk Level<br>

<select name="risk">
<option>Low</option>
<option>Medium</option>
<option>High</option>
</select>

<br><br>

<button>Add Client</button>

</form>