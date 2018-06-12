	<script language="JavaScript">
		function prijaviAnketu(){
			console.log("usao...");
			var radio = document.getElementsByName('survey');
			console.log(radio);
		}

	</script>

	<div id="content" class="container">
		<div id="network">
			<a href="https://www.linkedin.com/in/david-popovic-b028ba108?trk=nav_responsive_tab_profile" target="blank">
				<img src="app/images/icons/linked.png" alt="linkedin">
			</a>
			<a href="https://www.facebook.com/david.popovic.54" target="blank">
				<img src="app/images/icons/facebook.png" alt="facebook">
			</a>				
		</div>
		<div id="author">
			<a href="https://www.linkedin.com/in/david-popovic-b028ba108?trk=nav_responsive_tab_profile" target="blank">
				<img src="app/images/author.jpg" alt="author" class="author">
			</a>
		</div>
		<div id="text">
			<p> Hello, my name is David. I was born on 18th of August in 1995. I graduated from the secondary Economics school.</br> This website is a project for Web Programming course at ICT college.</p>
		</div> 
		<div id="toggle">
			<div class="rate-holder">
				<h2 class="formh2">Rate site</h2>
				<div class="comment">
					<input type="radio" class="radio" name="survey" id="radio1" value="1">
					<label for="radio1">Awesome</label>
				</div>
				<div class="comment">
					<input type="radio" class="radio" name="survey" id="radio2" value="2">
					<label for="radio2">Good</label>
				</div>
				<div class="comment">
					<input type="radio" class="radio" name="survey" id="radio3" value="3"> 
					<label for="radio3">Not bad</label>
				</div>
				<div class="comment">
					<input type="radio" class="radio" name="survey" id="radio4" value="4">
					<label for="radio4">Horrifiyng</label>
				</div>
				<input type="button" name="button" id="glasaj" value="Vote">
			</div>
		</div>
	</div>
