<?php 
if(!isset($_SESSION['pop'])){
	header('Location: index.php?id=17');
	exit();
}
$poruka = '';

if(isset($_POST['add-gallery'])){
	$galerija = $_POST['gallery'];
	$q = "INSERT INTO galerija VALUES (null, '$galerija')";
	if(mysqli_query($dbc, $q)) {
		$poruka = 'Uspesno ste dodali galeriju.';		
	} else {
		$poruka = 'Neuspesno, probajte ponovo.';
	};
}


?>


<div id="content">
	<form method="post" action="" name="formica" enctype="multipart/form-data">
		<table class="tblogin">
			<div class="wrap">
				<div class="mat-div">
					<label for="gallery" class="mat-label">Gallery name</label>
					<input type="text" name="gallery" id="gallery" class="mat-input">
				</div>
				<button type="submit" name="add-gallery" class="insert">Add Gallery</button>
			</table>
		</form>
		<p>
			<?php if($poruka != '') {
				echo $poruka;
			}?>
		</p>
	</div>