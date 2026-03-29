<?php
include "../config/db.php";

$id = $_GET['id'] ?? null;
if(!$id){ header("Location: list.php"); exit; }

$res = mysqli_query($conn,"SELECT * FROM portfolios WHERE id=$id");
$row = mysqli_fetch_assoc($res);

if($_SERVER["REQUEST_METHOD"] === "POST"){

$client = $_POST['client_id'];
$type   = $_POST['type'];
$amount = $_POST['amount'];

$sql = "UPDATE portfolios
        SET client_id='$client',
            investment_type='$type',
            amount='$amount'
        WHERE id=$id";

mysqli_query($conn,$sql);

header("Location: list.php");
exit;
}
?>

<h2>Edit Portfolio</h2>

<form method="POST">

Client ID<br>
<input type="number" name="client_id" value="<?php echo $row['client_id']; ?>"><br><br>

Investment Type<br>
<input type="text" name="type" value="<?php echo $row['investment_type']; ?>"><br><br>

Amount<br>
<input type="number" name="amount" value="<?php echo $row['amount']; ?>"><br><br>

<button type="submit">Update Portfolio</button>

</form>