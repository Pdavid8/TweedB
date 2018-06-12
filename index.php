<?php
session_start();
require 'konekcija.inc';
require 'onepage.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $page['title']?>  | Tweed Barbers </title>
	<meta charset="utf-8">
	<meta name="author" content= "David Popovic">
	<meta name="description" content="Barber!  <?php echo $page['description']?>" >
	<meta name="keywords" content="Barber,<?php echo $page['keywords']?>" >
	<link rel="stylesheet" type="text/css" href="app/css/jquery.fancybox.css">
	<link rel="stylesheet" type="text/css" href="./app/css/jquery.fancybox-thumbs.css">
	<link rel="stylesheet" type="text/css" href="app/css/style.css"/>
	<link rel="icon" href="app/images/icons/favicon.ico" size="16x16"/>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>

	<div id="header">
		<?php include "app/template/header.php"; ?>
	</div>


	<?php 

	
	$query=mysqli_query($dbc,"SELECT views FROM pages WHERE id='$pageid'");
	while ($row = mysqli_fetch_assoc($query)) {
		include $row["views"];       
	}
	?>
	



	<?php include_once "app/template/footer.php" ?>
	<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
	<script src="app/js/jquery.fancybox.js"></script>
	<script src="app/js/jquery.fancybox-thumbs.js"></script>
	<script src="app/js/main.js"></script>
</body>
</html>
