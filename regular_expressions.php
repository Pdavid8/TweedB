<?php
if(isset($_POST['submit-btn'])){

	$fName = $_REQUEST['firstName'];
	
	$lName = $_REQUEST['lastName'];
	
	$mail = $_REQUEST['email'];
	
	$mess = $_REQUEST['message'];
	
	$greske = array();
	

	$fNameReg = "/^[A-z][a-z]{3,14}$/";

	$lNameReg = "/^(((\w)+)(\s(\w)+)*){4,25}$/";
	
	$emailReg = "/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/";
	
	if(!preg_match($fNameReg, $fName))	$greske[] = "Enter the correct name.";
	
	if(!preg_match($lNameReg, $lName))	$greske[] = "Enter the correct last name.";	
	
	if(!preg_match($emailReg, $mail))   $greske[] = "Enter the correct email.";
	
	if(count($greske==0)){
		$kontakt="INSERT INTO kontakt VALUES ('','$fName','$lName','$mail','$mess')";
		mysqli_query($dbc,$kontakt) or die(mysqli_error());
	}
}
?>