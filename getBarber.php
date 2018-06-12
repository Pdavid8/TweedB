<?php 
if(isset($_POST['id'])){
	include 'konekcija.inc';
	$q = "SELECT * FROM barbers WHERE idBarber = ". $_POST['id'];
	$rez = mysqli_query($dbc, $q);
	if(mysqli_num_rows($rez) == 1){
		$r = mysqli_fetch_array($rez);
		echo '
		<form method="post" action="index.php?id=25" name="formica" enctype="multipart/form-data">
			<table class="tblogin">
				<input type="hidden" value="'.$r['idBarber'].'" name="id" />
				<div class="wrap">
					<div class="mat-div">
						<input type="text" name="barber" id="barber-name" class="mat-input" value="'.$r['ime'].'">
					</div>
					<div class="mat-div">
						<p>Current picture: </p>
						<img src="'.$r['slika'].'" />
					</div>
					<div class="mat-div">
						<p>New picture:
						<input type="file" name="picture" id="picture" class="mat-input">
					</div>

					<button type="submit" name="update-barber" class="login">Change Barber</button>
				</table>
			</form>
			';
		} else {
			echo '<p>invalid ID</p>';
		}
	}
	?>