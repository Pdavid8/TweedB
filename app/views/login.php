	<?php

	if(isset($_POST['login'])) {
		$pass=addslashes($_POST['password']);
		$us=addslashes($_POST['username']);
		$pass = md5($pass);
		$q = "SELECT * FROM admin WHERE username = '$us' AND password = '$pass'";
		$r = mysqli_query($dbc, $q);
		if(mysqli_num_rows($r) == 1) {
			$_SESSION['pop'] = "pop";
			setcookie('admin', $us, getdate()[0] + (86400*30));
			header('Location: index.php');
		}else{	
			$q = "SELECT * FROM korisnici WHERE Korisnicko = '$us' AND Lozinka ='$pass';";
			$rez = mysqli_query($dbc, $q);
			if(mysqli_num_rows($rez) == 1){
				$_SESSION['korisnik'] = "korisnik";
				setcookie('korisnik', $us, getdate()[0] + (86400*30));
				header('Location: index.php');
			} else {
				echo '<script>alert("Neuspesno");</script>';
			}
		}

	}
	?>
	<!-- <div id="content">
		<form method="post"  action="#"  name="formica"> 
			<table class="tblogin">
				<th> </th><tr><td>
				<label for="username">EMAIL:</label></td>
				<td><input type="text" name="username">
				</td> </tr> <tr> <td>
				<label for="password">PASSWORD:</label></td> <td> <input type="password" name="password">
			</td> </tr> <tr><td>
			<button type="submit" name="login">Log In</button>
		</td></tr> </table> </form>
	</div> -->
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
				</div>
				<button type="submit" name="login" class="login">Log in</button>
			</table>
		</form>
		<div id="new_account">
			<a href="index.php?id=27">Create a New Site account!</a>
		</div>
	</div>