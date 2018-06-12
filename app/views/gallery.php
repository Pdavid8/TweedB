<div id="content" class="container">
	<ul class="gallery clearfix">
		
		<?php 

		$i =0;
		$query=mysqli_query($dbc,"SELECT * FROM slike WHERE IdGalerija = 2");
		while ($row = mysqli_fetch_assoc($query)) {
			if($i == 0){
				echo '
				<li>
					<a class="fancybox-thumb" rel="galerija1" href="'.$row["slika"].'" >	
						<img src="'.$row["slika"].'" />
					</a>
				</li> ';
				$i++;
			} else {
				echo '<div class="hidden">';
				echo '
				<li>
					<a class="fancybox-thumb" rel="galerija1" href="'.$row["slika"].'" >	
						<img src="'.$row["slika"].'" />
					</a>
				</li> ';
				echo '</div>';
			}		
		}
		
		$i =0;
		$query=mysqli_query($dbc,"SELECT * FROM slike WHERE IdGalerija = 1");
		while ($row = mysqli_fetch_assoc($query)) {
			if($i == 0){
				echo '
				<li>
					<a class="fancybox-thumb" rel="galerija2" href="'.$row["slika"].'" >	
						<img src="'.$row["slika"].'" />
					</a>
				</li> ';
				$i++;
			} else {
				echo '<div class="hidden">';
				echo '
				<li>
					<a class="fancybox-thumb" rel="galerija2" href="'.$row["slika"].'" >	
						<img src="'.$row["slika"].'" />
					</a>
				</li> ';
				echo '</div>';
			}		
		}

			$i =0;
		$query=mysqli_query($dbc,"SELECT * FROM slike WHERE IdGalerija = 3");
		while ($row = mysqli_fetch_assoc($query)) {
			if($i == 0){
				echo '
				<li>
					<a class="fancybox-thumb" rel="galerija3" href="'.$row["slika"].'" >	
						<img src="'.$row["slika"].'" />
					</a>
				</li> ';
				$i++;
			} else {
				echo '<div class="hidden">';
				echo '
				<li>
					<a class="fancybox-thumb" rel="galerija3" href="'.$row["slika"].'" >	
						<img src="'.$row["slika"].'" />
					</a>
				</li> ';
				echo '</div>';
			}		
		}

		?>
	</ul>
</div>

