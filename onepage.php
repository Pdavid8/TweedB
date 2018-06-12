<?php 
if(isset($_GET['id'])){  
	$pageid = $_GET['id'];
}
else{
	$pageid = 17;
}

function data_page($dbc, $id){
	
	$q="SELECT * FROM pages WHERE id = $id";

	$r=mysqli_query($dbc,$q);
	$data=mysqli_fetch_assoc($r);

	return $data;
}

$page=data_page($dbc,$pageid);
?>