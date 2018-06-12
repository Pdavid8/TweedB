<?php 
if(!isset($_SESSION['pop'])){
	header('Location: index.php?id=17');
	exit();
}

if(isset($_POST['add-barber'])){
	include 'konekcija.inc';
	$pic = $_FILES['picture'];
	$name = $_POST['barber'];
	$dest = 'app/images/gallery/'. time() .$pic['name'];
	move_uploaded_file($pic['tmp_name'], $dest);
	$q = "INSERT INTO barbers VALUES (null, '$dest', '$name')";
	mysqli_query($dbc, $q);
}


?>


<div id="content">
	<form method="post" action="" name="formica" enctype="multipart/form-data">
		<table class="tblogin">
			<div class="wrap">
				<div class="mat-div">
					<label for="barber-name" class="mat-label">Barbers name</label>
					<input type="text" name="barber" id="barber-name" class="mat-input">
				</div>

				<div class="mat-div">
					<input type="file" name="picture" id="picture" class="mat-input">
				</div>

			<button type="submit" name="add-barber" class="login">Add Barber</button>
		</table>
	</form>
</div>