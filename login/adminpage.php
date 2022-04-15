<?php
	require '../db.php';
	$users = getAll();
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="scripts.js"></script>
</head>

	<style>
		body {
			background-color: #333333;
		}
		table {
    width: 90%;
    height: 30px;
    font-family: sans-serif;
    border-collapse: collapse;
    text-align: center;
     color: white;
   }
 td, th {
  border: 2px solid black;
  padding: 3px;
}
th{
     background-color: red;
     color: white;
     text-align: center;
}
tr:nth-child(even) {
  background-color: white;
}
tr:nth-child(odd) {
  background-color: white;
}
	</style>
<body>
	<div class="col-md-12">
						
						<table class="table">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Name</th>
						      <th scope="col">Surname</th>
						      <th scope="col">Login</th>
						      <th scope="col">Password</th>
						      <th scope="col">Age</th>
						      <th scope="col">Gender</th>
						      <th scope="col">Delete</th>
						    </tr>
						  </thead>
						  <tbody id = "result"></tbody>
						</table>		
					</div>
		<button class="btn"><a href="index.php">Log out</a></button>
</body>
</html>