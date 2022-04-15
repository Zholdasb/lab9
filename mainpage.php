<?php
	require 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cinema</title>
	<link rel="stylesheet" href="style.css">
</head>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>

	<script>
		$(function(){
			$('.burgermenu').click(function(){
				$('.menutext').toggleClass('showmenu');
			});
		});
	</script>

	<style>
		#films{
			display: flex;
			justify-content: space-between;
		}

		#allfilms {
			color: white;
			text-decoration: none;
			font-size: 18px;
		}
		#allfilms:hover{
			color: red;
		}

		#welcome {
			color: white;
		}
	</style>


<body>
	<header>
		<div class="container" id="container1">
			<div class="navbar">
				<div class="logo">
					<a href="#"><img class="logophoto" src="photos/cinemalogo.jpg"></a>
				</div>
				<div class="menu">
					<!-- <ul class="menutext">
						<li><a href="#main">Расписание</a></li>
						<li><a href="#section-1">Посещаемые</a></li>
						<li><a href="#section-2">Скоро</a></li>
						<li><a href="#section-3">Вход</a></li>
					</ul> -->
					<!-- <div class="menutext">Сегодня</div>
					<div class="menutext">Посещаемые</div>
					<div class="menutext">Скоро</div>
					<div class="menutext">Акции</div> -->
					<?php
						session_start();
						if(isset($_SESSION['User_Id'])){
						$acc = getOneUserById($_SESSION['User_Id']);		
					?>

					<h2 id="welcome"><?php echo "Welcome " . $acc['name'] . " " . $acc['surname'];?></h2>


					<?php
						}
					?>

					<div class="burgermenu">
						<img src="photos/burger.png" alt="">
					</div>


				</div>
			</div>
		</div>
	</header>

	<main id="main">
		<div class="container">
			<div id="films">
				<h2>Сегодня в кино</h2>
				<a href="allfilms.php" id="allfilms">Полное расписание</a>
			</div>
			
			<div class="movies">
				<div class="movielist">
					<a href="#"><img class="today" src="photos/soul.jpg"></a>
					<div class="kinonazvanie">Душа</div>
				</div>
				<div class="movielist">
					<a href="#"><img class="today" src="photos/tomjerry.jpg"></a>
					<div class="kinonazvanie">Том и Джерри</div>
				</div>
				<div class="movielist" id="today4">
					<a href="#"><img class="today" src="photos/mauritanian.jpg"></a>
					<div class="kinonazvanie">Мавританец</div>
				</div>
				<div class="movielist" id="today5">
					<a href="#"><img class="today" src="photos/reincarnation.jpg"></a>
					<div class="kinonazvanie">Реинкарнация</div>
				</div>
				<div class="movielist">
					<a href="#"><img class="today" src="photos/swindler.jpg"></a>
					<div class="kinonazvanie">Аферистка</div>
				</div>
			</div>
		</div>
	</main>

	<section id="section-1">
		<div class="container">
			<p>Часто посещаемые фильмы на этой неделе</p>
   	 		<div id="counter">
    		    <div class="bl">
	        			<div data-num="297" class="number">0</div>
        			<div class="text">Душа</div>
      			</div>
      			<div class="bl">
       				<div data-num="319" class="number">0</div>
        			<div class="text">Том и Джерри</div>
      			</div>
      			<div class="bl">
        			<div data-num="315" class="number">0</div>
        			<div class="text">Неоспаримый</div>
      			</div>
      			<div class="bl">
        			<div data-num="400" class="number">0</div>
        			<div class="text">Аферистка</div>
      			</div>
      			<div class="bl">
        			<div data-num="258" class="number">0</div>
        			<div class="text">Реинкарнация</div>
      			</div>
    		</div>		
		</div>
	</section>

	<section id="section-2">
		<div class="container">
			<h2>Скоро на экранах</h2>
			<div class="video">
				<video class="video_media" src="photos/mortalkombat.mp4" autoplay muted loop></video>
			</div>
		</div>
	</section>

	<section id="section-3">
		<div class="container">
			<h2>Акции</h2>
			<div class="hotprice">
				<div class="aktsii">
					<a href="#"><img class="aktsiiphotos" src="photos/tuesday.jpg"></a>
					<div class="el">Super Вторник</div>
				</div>
				<div class="aktsii">
					<a href="#"><img class="aktsiiphotos" src="photos/students.jpg"></a>
					<div class="el">Я-студент</div>
				</div>
				<div class="aktsii">
					<a href="#"><img class="aktsiiphotos" src="photos/no4kino.jpg"></a>
					<div class="el">Ночь Кино</div>
				</div>
			</div>
		</div>
	</section>

	<footer id="footer">
		<div class="container">
			<div class="shortinfo"> 
				<div class="el2"><p>Технологии</p> Dolby Atmos <br>Laser<br> 
				IMAX 3d </div>
				<div class="el2"><p>Информация</p> Купить билеты<br> Оферта сайта</div>
				<div class="el2" > <p>Контакты</p> +7 708 708 78 78 <br> @cinemakz@gmail.com</div>
			</div>
		</div>
	</footer>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="./script.js"></script>
</body>
</html>
}
