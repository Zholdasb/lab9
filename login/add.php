<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<style>
		h2 {
			text-align: center;
		}

		body {
			background-color: #f1f1f1;
		}
	</style>
</head>
<body>
	<?php
	require '../db.php';
	$log = $_POST['login'];
	$pwd = $_POST['password'];
	$name = $_POST['name'];
	$age = $_POST['age'];


	$signup1 = false;
	$signup2 = false;
	$signup3 = false;

	$users = getAll();
	$i=0;
	foreach ($users as $u) {
		if($user['login']==$_POST['login']){
	 		$i++;
	 	}
	}
	if ($age != "" && !empty($log) && !empty($pwd) && !empty($name)) {
		$signup1 = true;
	}
	if (strlen($pwd) > 5) {
		$signup2 = true;
	}
	if (filter_var($log, FILTER_VALIDATE_EMAIL)){
		$signup3 = true;
	}
	if($signup1 == false) {
		header("Location:signup.php?empty");
	}
	if($signup2 == false) {
		header("Location:signup.php?notenough");
	}
	if($signup1 == true && $signup2 == false &&$signup3 == false) {
		header("Location:signup.php?notenoughinlog");
	}
	if($signup1 == false && $signup2 == false) {
		header("Location:signup.php?notsigned");
	}
	if($signup1 == true and $signup2 == true and $signup3 == false){
		header("Location:signup.php?inlogformat");
	}
	if($i==0){
				if(!empty($_POST['name']) && !empty($_POST['surname']) && filter_var($_POST['login'], FILTER_VALIDATE_EMAIL) && strlen($_POST['password']) > 5 && $_POST['age'] != "" && $_POST['gender']){
		if(addUs($_POST['name'], $_POST['surname'], $_POST['login'], $_POST['password'], $_POST['age'], $_POST['gender'])){
			$role = "user";
			addRoles($role,$_POST['login']);
			header("Location: index.php");
			?>
			<?php
		}
	}
	}

?>

</body>
</html>
