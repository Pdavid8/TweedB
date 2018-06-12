
<div id="content">
	<form method="post"  action="" onsubmit="return provera();">
		<div class="wrap">
			<div class="mat-div">
				<label for="first-name" class="mat-label">First Name</label>
				<input type="text" class="mat-input" id="first-name" name="firstName">
			</div>

			<div class="mat-div">
				<label for="first-name" class="mat-label">Last Name</label>
				<input type="text" class="mat-input" id="last-name" name="lastName">
			</div>

			<div class="mat-div">
				<label for="address" class="mat-label">Email Address</label>
				<input type="text" class="mat-input" id="address" name="email">
			</div>
			<div class="mat-div">
				<label for="message" class="mat-label">Message</label>
				<textarea class="mat-input" id="message" name="message"></textarea>
			</div>
			<input type="submit" name="submit-btn" id="submit-btn" value="Send"/>
		</div>
			<!-- <input type="text" name="fname" id="fname" placeholder="name">
			<input type="text" name="address" id="address" value="address">
			<input type="text" name="email" id="email" value="email">
			<input type="text" name="phone" id="phone" value="phone number">
			<textarea name="message" id="message">message</textarea>
			<input type="submit" name="send" id="send" value="send"> -->
		</form>

		<?php
		include("regular_expressions.php");
		?>
	</div>	
	