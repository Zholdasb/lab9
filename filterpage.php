<?php
  require 'db.php';
$films = getFilmsByGenreId($_GET['films']);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP MySQL Query Data Demo</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
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
						<img src="burger.png" alt="">
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

<?php 

$film_id = intval($_GET['films']);
$genre_id = intval($g['genre_id']);

if ($film_id == $genre_id) {?>

	<option value=“<?php echo $g['genre_id']?>” selected><?php echo $g['genre_name']?></option>
<?php
}else {?>
	<option value="<?php echo $g['genre_id']?>"><?php echo $g['genre_name']?></option>
<?php }?>

					<?php
							}
						}
					?>


			</select>

			<button type="submit" id="submit">Показать</button>
			</form>
		<?php
			if($_GET['films']==1){
				$allFilms = getAllFilms();
				?>
				<div class="movies">
			<?php foreach ($allFilms as $f) {
				?>

<div class="movielist">
<a href="#"><img class="today" src="<?php echo ($f['image']) ?>"></a>
<div class="kinonazvanie"><?php echo ($f['film_name']) ?></div>
				
</div>
			<?php } ?>
			
			</div>
				<?php
			}else{
		?>
			<div class="movies">
			<?php foreach ($films as $f) {
				?>

<div class="movielist">
<a href="#"><img class="today" src="<?php echo ($f['image']) ?>"></a>
<div class="kinonazvanie"><?php echo ($f['film_name']) ?></div>
				
</div>
			<?php } ?>
			
			</div>
			<?php } ?>

		</div>
	</main>
    </body>
</div>
</html>