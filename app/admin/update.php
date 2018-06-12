<?php 
if(!isset($_SESSION['pop'])){
	header('Location: index.php?id=17');
	exit();
}

?>

<?php 
if(isset($_POST['update-barber'])){
	$id = $_POST['id'];
	$name = $_POST['barber'];
	if(!isset($_FILES['picture'])){
		$q = "UPDATE barbers SET ime = '$name' WHERE idBarber=$id";
		mysqli_query($dbc, $q);
	}else {
		$pic = $_FILES['picture'];
		$dest = 'app/images/meet-the-barbers/'. time() . $pic['name'];
		move_uploaded_file($pic['tmp_name'], $dest);
		$q = "UPDATE barbers SET ime = '$name', slika = '$dest' WHERE idBarber=$id";
		mysqli_query($dbc, $q);
	}
}
?>
<div id="content">
	<select name="barber-name" id="barber-list">
		<option value="0">Izaberi barbera..</option>
		<?php 
		$q = "SELECT * FROM barbers";
		$rez = mysqli_query($dbc, $q);
		while($r = mysqli_fetch_array($rez)){
			echo "<option value='".$r['idBarber']."'>".$r['ime']."</option>";
		}
		?>
	</select>
	<div id="prikaz">

	</div>
</div>