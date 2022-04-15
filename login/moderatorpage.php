<?php
	require_once '../db.php';
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
form {
	background-color: white;
	margin-left: 15px;
}
	</style>
}
<body>
		<div class="content">
		<div class="container">
			<div class="row mt-3">
				<div class="col-md-12">
						
						<table class="table">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Name</th>
						      <th scope="col">Genre</th>
						      <th scope="col">Src_Img</th>
						      <th scope="col">Delete</th>
						    </tr>
						  </thead>
						  <tbody id = "result02"></tbody>
						</table>		
					</div>
				<div>
					<form action="addfilm.php" method="POST" class="p-4" style="border:1px solid black;">
						<div >
							<input type="text" name="filmName" id="filmName" placeholder="Film name" required />
							<input type="number" name="jenre" id="jenre" placeholder="Number jenre" required /> <br>
				            <input type="file" name="imagename" id="imagename">
				            <button type="submit" id="addFilm" class="submit mt-3">ADD</button>
						</div>
					</form>
				</div>
</div></div></div>
		<button class="btn"><a href="index.php">Log out</a></button>
</body>
</html>