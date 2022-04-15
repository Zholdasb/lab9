<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign up page</title>

	<style>
		body {
			background-color: #333333;
		}
		.container {
			width: 500px;
			background-color: #f1f1f1;
			margin-right: auto;
			margin-left: auto;
			padding: 30px;
		}

		input {
			padding: 10px;
			margin-bottom: 15px;
			width: 480px;
			border-width: 0;
			border-radius: 3px;
		}

		h2 {
			font-size: 30px;
			margin-top: 0;
			margin-bottom: 15px;
		}

		p {
			margin-top: 0;
			margin-bottom: 15px;
		}

		#course {
			display: block;
			width: 500px;
			padding: 10px;
			border-radius: 3px;
			margin-bottom: 15px;
		}

		.interests input {
			width: auto;
			margin: 0 0 15px 0;
		}
		.interests p {
			font-weight: 700;
		}

		.gender input {
			width: auto;
			margin: 0 0 15px 0;
		}

		button {
			width: 500px;
			height: 36px;
			padding: 5px;
			border-width: 0;
			border-color: black;
			background-color: #3333ff;
			border-radius: 3px;
			color: white;
			font-size: 25px;
			margin-bottom: 15px;
		}

		button:hover {
			background-color: red;
		}

		.alert {
			width: 560px;
			background-color: red;
			margin-right: auto;
			margin-left: auto;
			margin-bottom: 20px;
			font-size: 18px;
			color: white;
			height: 36px;
		}

		.alert p {
			margin: 0;
			padding-top: 8px;
		}

	</style>


</head>
<body>
	<?php
		if(isset($_GET['empty'])){
			?>
				<div class="alert" align="center">
					<p>Inputs can not be empty!</p>
				</div>
			<?php
		}
	?>

	<?php
		if(isset($_GET['inlogformat'])){
			?>
				<div class="alert" align="center">
					<p>Incorrect login format</p>
				</div>
			<?php
		}
	?>
	<?php
		if(isset($_GET['notenough'])){
			?>
				<div class="alert" align="center">
					<p>Password must be at least 6 characters</p>
				</div>
			<?php
		}
	?>
	
	<?php
		if(isset($_GET['notsigned'])){
			?>
				<div class="alert" align="center">
					<p>Inputs can not be empty!</p>
				</div>
				<div class="alert" align="center">
					<p>Password must be at least 6 characters</p>
				</div>
				<!-- <div class="alert" align="center">
					<p>Incorrect login format</p>
				</div> -->
			<?php
		}
	?>
	<?php
		if(isset($_GET['notenoughinlog'])){
			?>
				<div class="alert" align="center">
					<p>Password must be at least 6 characters</p>
				</div>
				<div class="alert" align="center">
					<p>Incorrect login format</p>
				</div>
			<?php
		}
	?>
	<div class="container" align="center">
		<form action="add.php" method="POST">
			<h2>Sign up</h2>
			<p align="left">Name (Required)</p>
			<input type="text" name="name" placeholder="Name"><br>
			<p align="left">Surname (Required)</p>
			<input type="text" name="surname" placeholder="Surname"><br>
			<p align="left">Login (Required)</p>
			<input type="email" name="login" placeholder="Login"><br>
			<p align="left">Password (Required)</p>
			<input type="password" name="password" placeholder="Password"><br>
			<p align="left">Age (Required)</p>
			<input type="number" name="age" placeholder="Age"><br>
			<div class="gender" align="left">
				<p>Please select your gender:</p>
  				<input type="radio" id="male" name="gender" value="male">
  				<label for="male">Male</label><br>
  				<input type="radio" id="female" name="gender" value="female">
  				<label for="female">Female</label><br>
			</div>
			<button type="submit">Sign up</button>
		</form>
	</div>	
</body>
</html>