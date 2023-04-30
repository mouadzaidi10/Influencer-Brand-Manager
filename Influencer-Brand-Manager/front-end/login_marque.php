<?php 


session_start();
error_reporting(0);
include 'config.php';


if (isset($_POST['submit'])) {

	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM marque WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {

		$row = mysqli_fetch_assoc($result);
		$_SESSION['id'] = $row['id'];
		$_SESSION['nom'] = $row['nom'];
		$_SESSION['logo'] = $row['logo'];
		$_SESSION['chiffre_affaire'] = $row['chiffre_affaire'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['comptes_facebook'] = $row['comptes_facebook'];
		$_SESSION['comptes_instagram'] = $row['comptes_instagram'];

		header("Location: dashboard_marque.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>











<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/style_inscrition_web.css">

	<title>Login Form - Marque</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Authentification Marque</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Crée un compte? <a href="inscription_pour_marque.php">Inscription Ici</a>.</p>
			
		</form>
		<p class="login-register-text">Quitter? Cliquez <a href="../index.php">Ici</a>.</p>
	</div>
</body>
</html>