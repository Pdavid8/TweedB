<?php
	if(isset($_POST['signup'])){
		include 'konekcija.inc';
		$username = trim($_POST['username']);
		$password = md5(trim($_POST['password']));
		$email = trim($_POST['email']);
		$upit = "INSERT INTO korisnici VALUES (null, '$username','$password', '$email');";
		// print_r($upit);
		mysqli_query($dbc, $upit);
		header("Location: index.php?id=22");
	}
?>
<div id="content">
	<form method="post" action="" name="formica">
		<table class="tblogin">
			<div class="wrap">
				<div class="mat-div">
					<label for="username" class="mat-label">Username</label>
					<input type="text" name="username" id="first-name" class="mat-input">
				</div>

				<div class="mat-div">
					<label for="password" class="mat-label">Password</label>
					<input type="password" name="password" id="last-name" class="mat-input">
				</div>

				<div class="mat-div">
					<label for="email" class="mat-label">Email</label>
					<input type="email" name="email" id="last-name" class="mat-input">
				</div>
			</div>
			<button type="submit" name="signup" class="login">Sign up</button>
		</table>
	</form>
</div>