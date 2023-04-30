<!DOCTYPE html>
<html>
<head>
	<title>Page De Login</title>
    <link rel="stylesheet" type="text/css" href="../css/login_web.css">
</head>
<body class="pagelogin">
	
    <div class="container">
			<div class="logo-image">
				<img src="../images/logo.png" alt="Logo" class="logo"  ><span>Se Connecter en tant que : </span>
			</div>   
	</div>
    <div class="container">
		<form action="login_influncer.php"  method="POST">
			<div class="input-2">
			    <button type="submit" id="btn" class="btn btn-primary login" name="login">Influenceur</button>
			</div>
	    </form>

		<form action="login_marque.php"  method="POST">
			<div class="input-2">
			    <button type="submit" id="btn" class="btn btn-primary login" name="login">Marque</button>
			</div>
	    </form>
	</div>
</body>
</html>