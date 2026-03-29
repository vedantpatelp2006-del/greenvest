<?php
include "../config/db.php";

$id = $_GET['id'] ?? null;
if(!$id){ header("Location: list.php"); exit; }

# Fetch current client
$res = mysqli_query($conn, "SELECT * FROM clients WHERE id=$id");
$client = mysqli_fetch_assoc($res);

# Update using POST
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $risk  = $_POST['risk'];

    $sql = "UPDATE clients 
            SET name='$name', email='$email', risk_level='$risk'
            WHERE id=$id";

    mysqli_query($conn,$sql);

    header("Location: list.php");
    exit;
}
?>

<h2>Edit Client</h2>

<form method="POST">

Name<br>
<input type="text" name="name" value="<?php echo $client['name']; ?>"><br><br>

Email<br>
<input type="email" name="email" value="<?php echo $client['email']; ?>"><br><br>

Risk Level<br>
<select name="risk">
<option <?php if($client['risk_level']=="Low") echo "selected"; ?>>Low</option>
<option <?php if($client['risk_level']=="Medium") echo "selected"; ?>>Medium</option>
<option <?php if($client['risk_level']=="High") echo "selected"; ?>>High</option>
</select>

<br><br>

<button type="submit">Update Client</button>

</form>