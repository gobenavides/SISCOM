<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Registro de nuevo usuario</h2>
	</div>

	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Nombre de usuario</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Correo electrónico</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Contraseña</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirme contraseña</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Regístrese</button>
		</div>
		<p>
		</p>
	</form>
</body>
</html>
