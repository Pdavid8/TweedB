<a href="index.php" class="logo">
	<img src="app/images/logo/logo.png" alt="logo of our shop">
</a>
<?php 


if(isset($_SESSION['pop']))
{
	$query=mysqli_query($dbc,"SELECT * FROM pages where status='admin' ORDER BY id DESC");
	$count = mysqli_num_rows($query);
	echo " <ul id='navigation'>";
	while ($row = mysqli_fetch_assoc($query)) {
		echo "<li><a href='index.php?id=".$row['id']."'>".$row['name']."</a></li>";}     
		echo "</ul>"; 
	}

	else {


		$query=mysqli_query($dbc,"SELECT * FROM pages where status='user' ORDER BY id");

		echo "  <ul id='navigation'>";
		while ($row = mysqli_fetch_assoc($query)) {
			echo "<li><a href='index.php?id=".$row['id']."'>".$row['name']."</a></li>";}     
			echo "</ul>";
		}
		?>



		
