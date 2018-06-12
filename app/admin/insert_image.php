<?php 
if(!isset($_SESSION['pop'])){
	header('Location: index.php?id=17');
	exit();
}
$poruka = '';

if(isset($_POST['add-image'])){
	$pic = $_FILES['picture'];
	$galerija = $_POST['gallery'];
	$dest = 'app/images/gallery/'. time() .$pic['name'];
	move_uploaded_file($pic['tmp_name'], $dest);
	$q = "INSERT INTO slike VALUES (null, '$dest', '$galerija')";
	if(mysqli_query($dbc, $q)) {
		$poruka = 'Uspesno ste dodali fotku u galeriju.';		
	} else {
		$poruka = 'Neuspesno, probajte ponovo.';
	};
}


?>


<div id="content">
	<form method="post" action="" name="formica" enctype="multipart/form-data">
		<table class="tblogin">
			<div class="wrap">
				<div class="mat-div" id="insert-image">
					<input type="file" name="picture" id="picture" class="mat-input">
				</div>
				<div>
					<select name="gallery" id="gallery_admin" class="choose">
						<option value="0">Izaberi</option>
						<?php 
						$q = "SELECT * FROM galerija";
						$rez = mysqli_query($dbc, $q);
						while($r = mysqli_fetch_array($rez)){
							echo "<option value='".$r['idGallery']."'>".$r['naziv']."</option>";
						}
						?>
					</select>
				</div>
				<button type="submit" name="add-image" class="insert">Add Image</button>
			</table>
		</form>
		<p>
			<?php if($poruka != '') {
				echo $poruka;
			}?>
		</p>
	</div>