<html>

<head>
<title>Register</title>
<link rel="stylesheet" href="../css/style.css">
</head>

<body>

<h2>Create GreenVest Account</h2>

<form action="process_register.php" method="POST">

Name<br>
<input type="text" name="name" required><br><br>

Email<br>
<input type="email" name="email" required><br><br>

Password<br>
<input type="password" name="password" required><br><br>

Role<br>

<select name="role">

<option value="advisor">Advisor</option>
<option value="client">Client</option>

</select>

<br><br>

<button type="submit">Register</button>

</form>

<a href="login.php">Back to Login</a>

</body>
</html>