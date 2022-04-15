<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		button {
			display: block;
		}
	</style>
</head>
<body>
	<?php

	if(isset($_POST['id'])){
		require 'db.php';

		$updated = updateUser($_POST['id'], $_POST['login'], $_POST['password'], $_POST['name'], $_POST['age']);
		if($updated){
			echo "UPDATED!!!";

		}
	}

	?>

	<button><a href="index.php">Log out</a></button>
</body>
</html>
