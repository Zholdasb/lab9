<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			background-color: #f1f1f1;
		} 
		p {
			margin-left: 300px;
			margin-right: 50px; 
			text-align: center;
			display: inline-block;
			font-size: 18px;
		}
		button {
			margin-top: 10px;
			margin-left: 370px;
			background-color: #3333ff;
			border-radius: 2px;
			color: white;
			padding: 7px 15px;
			border-width: 0;
			font-size: 18px;
		}
		button:hover {
			background-color: blue;
		}
		input {
			text-align: center;
			font-size: 20px;
		}
		#in2 {
			margin-left: 26px;
		}
		#in4 {
			margin-left: 26px;
		}
		#in5 {
			margin-left: 37px;
		}
	</style>
</head>
<body>

	<?php
	if(isset($_GET['id']) and is_numeric($_GET['id'])){
		require 'db.php';
		$u = getOneUserById($_GET['id']);
		if($u != null){

	?>
		<form action="edit.php" method="POST">
			<input type="hidden" name="id"     id="in1"            value="<?php echo $u['id']?>" >
			<p >Login:</p>
			<input type="text" name="login"    id="in2"     value="<?php echo $u['login']?>" >     <br>
			<p >Password:</p>
			<input type="text" name="password" id="in3" value="<?php echo $u['password']?>" >  <br>
			<p >Name:</p>
			<input type="text" name="name"     id="in4"    value="<?php echo $u['name']?>" >      <br>
			<p >Age:</p>
			<input type="number" name="age"    id="in5"       value="<?php echo $u['age']?>" >       <br>
			<button type="submit">Edit</button>

		</form>

	<?php
		}
	}

	?>
	
</body>
</html>
