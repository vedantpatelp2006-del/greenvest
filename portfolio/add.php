<?php
include "../config/db.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

$client = $_POST['client_id'];
$type = $_POST['type'];
$amount = $_POST['amount'];

// Python performance calculation
$performance = shell_exec("python ../python/performance.py $amount");

// remove extra spaces/newline
$performance = trim($performance);

//  insert with performance
$query = "INSERT INTO portfolios(client_id,investment_type,amount,performance)
VALUES('$client','$type','$amount','$performance')";

mysqli_query($conn,$query);

header("Location: list.php");

}
?>

<h2>Create Portfolio</h2>

<form method="POST">

Client ID<br>
<input type="number" name="client_id" required><br><br>

Investment Type<br>
<select name="type">
<option value="SIP">SIP</option>
<option value="Gold">Gold</option>
<option value="Real Estate">Real Estate</option>
<option value="Stocks">Stocks</option>
<option value="Other">Other</option>
</select>

<br><br>

Amount<br>
<input type="number" name="amount" required><br><br>

<button>Create</button>

</form>