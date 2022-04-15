<?php

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
		a:hover {
			color: red;
		}


		#zoom {
		    position: relative;
   			height: 300px;
 			width: 200px;
		}

		.today {
 		 opacity: 1;
  		display: block;
		  transition: .5s ease;
		  backface-visibility: hidden;
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

		#zoom:hover .today {
 		 opacity: 0.3;
		}

		#zoom:hover .middle {
 		 opacity: 1;
		}
		#today4:hover .today {
 		 opacity: 0.3;
		}

		#today4:hover .middle {
 		 opacity: 1;
		}

		#today5:hover .today {
 		 opacity: 0.3;
		}

		#today5:hover .middle {
 		 opacity: 1;
		}

		.texts {
 		 background-color: red;
 		 color: white;
		  font-size: 16px;
		  padding: 16px 32px;
		}

		img {
			border-radius: 5px;
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
					<ul class="menutext">
						<li id="menu1"><a href="#main">Расписание</a></li>
						<li id="menu2"><a href="#section-1">Посещаемые</a></li>
						<li id="menu3"><a href="#section-2">Скоро</a></li>
						<li id="menu4"><a href="login/index.php">Вход</a></li>
					</ul>
					<!-- <div class="menutext">Сегодня</div>
					<div class="menutext">Посещаемые</div>
					<div class="menutext">Скоро</div>
					<div class="menutext">Акции</div> -->

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
			
			<div class="movies" >
				<div class="movielist" id="zoom">
					<a href="#"><img class="today" src="photos/soul.jpg"></a>
					<div class="middle">
    	<div class="texts">Душа</div>
  	</div>
				</div>
				<div class="movielist" id="zoom">
					<a href="#"><img class="today" src="photos/tomjerry.jpg"></a>
					<div class="middle">
    	<div class="texts">Том & Джерри</div>
  	</div>
				</div>

				<div class="movielist" id="today4">
					<a href="#"><img class="today" src="photos/mauritanian.jpg"></a>
					<div class="middle">
    				<div class="texts">Мавританец</div>
  					</div>
				</div>

				<div class="movielist" id="zoom">
					<a href="#"><img class="today" src="photos/reincarnation.jpg"></a>
					<div class="middle">
    				<div class="texts">Реинкарнация</div>
  					</div>
				</div>


				<div class="movielist" id="zoom">
					<a href="#"><img class="today" src="photos/swindler.jpg"></a>
					<div class="middle">
    	<div class="texts">Аферистка</div>
  	</div>
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
	<script src="script.js"></script>
</body>
</html>

