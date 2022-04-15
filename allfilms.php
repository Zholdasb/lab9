<?php
  require 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All films</title>

	<style>
		
		.container {
			width: 80%;
			margin-left: auto;
			margin-right: auto;
		}

		header {
			background-color: black;
		}

		.logophoto {
			width: 200px;
		}

		.navbar {
			margin-bottom: -3.5px;
			display: flex;
			justify-content: space-between;
		}

		div ul {
			display: flex;
			justify-content: space-around;
		}

		.menu {
			color: white;
			font-size: 28px;
			display: flex;
			padding-top: 12px;
		}

		.menutext {
			display: flex;
			list-style-type: none;
		}

		.menutext a {
			text-decoration: none;
			padding-right: 60px;
			font-size: 28px;
			color: white;
		}

		.burgermenu {
			display: none;
		}


		main {
			background-color: #1a1a1a;
			padding-top: 40px;
			padding-bottom: 40px;
		}

		h2	{
			color: white;
			margin-top: 0;
			margin-bottom: 0;
			padding-bottom: 20px;
		}

		.movies {
			display: flex;
			justify-content: space-around;
			flex-wrap: wrap;

		}

		.today {
			width: 250px;
			height: 350px;
		}

		.kinonazvanie {
			text-align: center;
			margin-top: 15px;
			margin-bottom: 25px;
			font-size: 20px;
			color: white; 
		}
		#film {
			display: block;
			width: 500px;
			padding: 10px;
			border-radius: 3px;
			margin-bottom: 15px;
		}
		button {
			width: 500px;
			height: 36px;
			padding: 5px;
			border-width: 0;
			border-color: black;
			background-color: #ff1a1a;
			border-radius: 3px;
			color: white;
			font-size: 25px;
			margin-bottom: 15px;
		}

		button:hover {
			background-color: #e60000;
		}

		option {
			font-size: 20px;
		}

		select {
			height: 40px;
			font-size: 17px;
		}

		form {
			display: flex;
			margin-bottom: 15px;
		}
		#submit {
			width: 150px;
			height: 40px;
			padding: 5px;
			border-width: 0;
			border-color: black;
			background-color: #ff1a1a;
			border-radius: 3px;
			color: white;
			font-size: 25px;
			margin-bottom: 15px;
			margin-left: 15px;
		}
		#submit:hover {
			background-color: #e60000;
		}


		#zoom {
		    position: relative;
		}
		.today {
 		 opacity: 1;
  		display: block;
		  transition: .5s ease;
		  backface-visibility: hidden;
		}

		#zoom:hover .today {
 		 opacity: 0.3;
		}

		#zoom:hover .middle {
 		 opacity: 1;
		}

		.texts {
 		 background-color: red;
 		 color: white;
		  font-size: 16px;
		  padding: 16px 32px;
		}
		.middle {
 		 transition: .5s ease;
 		 opacity: 0;
		  position: absolute;
 		 top: 50%;
		  left: 50%;
		  transform: translate(-50%, -50%);
	      -ms-transform: translate(-50%, -50%);
 		 text-align: center;
		}
	</style>
</head>
<body>
	<header>
		<div class="container" id="container1">
			<div class="navbar">
				<div class="logo">
					<a href="#"><img class="logophoto" src="photos/cinemalogo.jpg"></a>
				</div>
				<div class="menu">
					<ul class="menutext">
						<li><a href="#main">Расписание</a></li>
						<li><a href="#section-1">Посещаемые</a></li>
						<li><a href="#section-2">Скоро</a></li>
						<li><a href="#section-3">Акции</a></li>
					</ul>

					<div class="burgermenu">
						<img src="photos/burger.png" alt="">
					</div>

				</div>
			</div>
		</div>
	</header>

	<main id="main">
		<div class="container">
			<h2>Сортировать по жанру</h2>	
			<form action="filterpage.php" method="GET">
				<select name="films" id="film">
					<?php
						$genres = getGenres();

						if($genres != null){
							foreach ($genres as $g) {
					?>
						<option value="<?php echo $g['genre_id']?>"><?php echo $g['genre_name']?></option>
					<?php
							}
						}
					?>


			</select>

			<button type="submit" id="submit">Показать</button>
		</form>
			
			<?php
		$allFilms = getAllFilms();
				?>
				<div class="movies">
			<?php foreach ($allFilms as $f) {
				?>

<div class="movielist" id="zoom">
<a href="#"><img class="today" src="<?php echo ($f['image']) ?>"></a>
<div class="kinonazvanie"><?php echo ($f['film_name']) ?></div>
<div class="middle">
    	<div class="texts">Купить</div>
  	</div>

				
</div>
			<?php } ?>
			
			</div>
		</div>
	</main>

</body>
</html>