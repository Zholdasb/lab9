<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<style>
		body {
			background-color: #333333;
		}
		.container {
			width: 400px;
			background-color: #f1f1f1;
			margin-right: auto;
			margin-left: auto;
			padding: 30px;
		}

		input {
			padding: 10px;
			margin-bottom: 15px;
			width: 300px;
			border-width: 0;
			border-radius: 3px;

		}

		h2 {
			font-size: 30px;
			margin-top: 0;
			margin-bottom: 15px;
		}

		button {
			width: 320px;
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

		a {
			color: black;
			display: block;
			text-align: left;
			margin-left: 40px;
			text-decoration: none;
			font-size: 20px;
		}

		.alert {
			width: 460px;
			background-color: red;
			margin-right: auto;
			margin-left: auto;
			margin-top: 30px;
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
<div class="container" align="center">
		<form action="userlog.php" method="post">
			<h2>Log in</h2>
			<input type="text" name="login" placeholder="Login"><br>
			<input type="password" name="password" placeholder="Password"><br>
			<button type="submit">Log in</button>
			<a href="signup.php">Not registered?</a>
		</form>
	</div>

	<?php
		if(isset($_GET['notlogged'])){
			?>
				<div class="alert" align="center">
					<p>Incorrect Login or Password!</p>
				</div>
			<?php
		}
	?>
</body>
</html>