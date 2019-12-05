<!DOCTYPE html>
<html>
	<head>
		<title>Form Login</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>
	<br/>
	<br/>
	<br/>
	<br/>
	<?php
	if (isset($_GET['pesan'])) {
	 	if ($_GET['pesan']=="gagal") {
	 		echo "<div class='alert'>Username dan password tidak sesuai !</div>";
	 	}
	 } 
	?>
	
	<br/>
	<div class="login">
		<br/>
		<form action="cek_login.php" method="post">
			<div>
				<label>Username :</label>
				<input type="text" name="username" id="username" required="required" />
			</div>
			<div>
				<label>Password :</label>
				<input type="password" name="password" id="password">
			</div>
			<div>
				<input type="submit" value="login" class="tombol">
			</div>
		</form>
	</div>

</body>
</html>