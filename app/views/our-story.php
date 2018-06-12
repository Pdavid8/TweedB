<div id="content">
	<div id="ourStory">
		<img src="app/images/story.jpg" alt="Story">
		<div class="article" class="container">
			<?php
			include 'konekcija.inc';
			$q="SELECT tekst FROM story";
			$rezultat = mysqli_query($dbc, $q);
			if(mysqli_num_rows($rezultat)>0){
				while($r=mysqli_fetch_array($rezultat)){
					echo '<p>' .$r['tekst']. '</p>';
				}
			}
			?>
		</div>
	</div>
</div>

