<?php 

include 'config.php';



error_reporting(0);


session_start();


if (isset($_POST['submit'])) {

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$comptes_facebook = $_POST['comptes_facebook'];
	$comptes_instagram = $_POST['comptes_instagram'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {

		$sql = "SELECT * FROM influencer WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {

			$sql = "INSERT INTO influencer (nom, prenom, age, email, comptes_facebook, comptes_instagram, password)
					VALUES ('$nom', '$prenom', '$age', '$email', '$comptes_facebook', '$comptes_instagram', '$password')";
			$result = mysqli_query($conn, $sql);

			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<link rel="stylesheet" type="text/css" href="../css/style_inscrition_web.css">

	<title>Inscription pour influncer</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Inscription pour Influenceur</p>

			<div class="input-group">
				<input type="text" placeholder="Nom" name="nom" value="" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Prenom" name="prenom" value="" required>
			</div>
			<div class="input-group">
				<input type="number" placeholder="Age" name="age" value="" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="" required>
			</div>
            <div class="input-group">
				<input type="text" placeholder="Compte Facebook" name="comptes_facebook" value="" required>
			</div>
            <div class="input-group">
				<input type="text" placeholder="Compte Instagram" name="comptes_instagram" value="" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Deja un compte? <a href="login_influncer.php">Se Connecter</a>.</p>
			<p class="login-register-text">Quitter? Cliquez <a href="../index.php">Ici</a>.</p>
		</form>
	</div>
</body>
</html>