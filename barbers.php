<?php 
include 'konekcija.inc';

if(isset($_REQUEST['pretraga']) && $_REQUEST['pretraga'] != ''){
	$pretraga = $_REQUEST['pretraga'];
	$q="SELECT * FROM barbers WHERE ime LIKE '%$pretraga%';";
	$rezultat=mysqli_query($dbc, $q);
	$arr = array();
	if(mysqli_num_rows($rezultat)>0){
		while($r=mysqli_fetch_array($rezultat)){
			$arr[] = '<div class="image-holder active"><img src="'.$r['slika'].'" class="hover-barber-effect"/><span class="image-span">'.$r['ime'].'</span></div>';
		}
	} else {
		$arr[]= '<p>Nema rezultata..</p>';
	}
	echo implode('', $arr);
} else {
	$q="SELECT * FROM barbers";
	$rezultat=mysqli_query($dbc, $q);
	$arr = [];
	if(mysqli_num_rows($rezultat)>0){
		while($r=mysqli_fetch_array($rezultat)){
			$arr[] = '<div class="image-holder"><img src="'.$r['slika'].'" /><span class="image-span">'.$r['ime'].'</span></div>';
		}
	}
	echo implode('', $arr);		
}
?>