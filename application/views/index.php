<?php defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ΟΑΣΑ / Εφαρμογή</title>

	<link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300' rel='stylesheet' type='text/css'>


</head>
<body >
	<div class = "main" >

		<!-- INTRO -->
		<div id="first"  >
			<img src="<?=base_url('assets/img/logo.svg')?>" class="logo"/>
			<div class="intro">
				<h5> Can YOU arrive at your destination fast enough by choosing the best means of tranport? </br></br>
				Prepare for the fastest and most exciting riddle game that will keep you company on your every outing!</h5>
				<button onclick="document.getElementById('first').style.display='none'; document.getElementById('login').style.display='block';" class="general_button">
					<h6>continue <img src="<?=base_url('assets/img/arrow_pink.svg')?>" /> </h6>
				</button>
			</div>
		</div>

		<!-- LOGIN -->
		<div id="login" >
			<img src=" <?=base_url('assets/img/logo.svg')?>" class="logo" />
			<h3 >Log in</h3>
			<div class="login_main" >
 				<label>E-mail:</label>
				<input name="email" type="email" />
				<label>Password:</label>
				<input name="password" type="password"  />
				<button onclick="document.getElementById('login').style.display='none'; document.getElementById('imin').style.display='block';"  class="general_button">
					<h6>sign in <img src="<?=base_url('assets/img/arrow_pink.svg')?>" /> </h6>
				</button>
				<img src="<?=base_url('assets/img/fblogin.svg')?>"/>
			</div>
		</div>

		<!-- I'M IN -->
		<div id="imin" >
			<img src="<?=base_url('assets/img/logo.svg')?>" class="logo"/>
			<button onclick="document.getElementById('imin').style.display='none'; document.getElementById('play').style.display='block';" class="general_button" >
			<img src="<?=base_url('assets/img/im_in.svg')?>" /></button>
		</div>

		<!-- MAIN MENU-->
		<div id="play" >
			<img src="<?=base_url('assets/img/logo.svg')?>" class="logo"/>
			<button onclick="document.getElementById('play').style.display='none'; document.getElementById('gameplay').style.display='block'; canvas.style.display='block';"  class="general_button" id="play_btn">
				<h6>play! <img src="<?=base_url('assets/img/arrow_pink.svg')?>" /> </h6>
			</button>
			<button class="general_button" id="badges_btn"><h6>badges </h6> </button>
			<button class="general_button" id="store_btn"><h6>store </h6> </button>
			<button class="general_button" id="rank_btn"><h6>rank </h6> </button>
		</div>

		<!-- GAMEPLAY -->
		<div id="gameplay">

			<div class="gm_footer">
				<ul>
					<li><img src="<?=base_url('assets/img/life.svg')?>" /> </li>
					<li><h1 >4</h1> </li>
					<li class="board" id="clock">  <img src="<?=base_url('assets/img/clock.svg')?>" class="board_img"/>  <div class="board_text">  <span id="timer" > </span></div> </li>
					<li class="board" id="points"> <img src="<?=base_url('assets/img/points.svg')?>" class="board_img"/> <div class="board_text"> <div id="test2"> </div> <div id="test1" name="test1"></div> </div> </li>
					<li><img src="<?=base_url('assets/img/music.svg')?>" /> </li>
					<li><button onclick="document.getElementById('menus').style.display='block'; update_grif(); ask=true;"  class="general_button">
						<img src="<?=base_url('assets/img/pause.svg')?>" id="pause" />
					</button></li>
				</ul>
			</div>

			<div id="menus"><a href="Javascript:;" onclick="document.getElementById('menus').style.display='none'; document.getElementById('ingame_menu').style.display='block'; document.getElementById('badges').style.display='none';  update_grif(); ask=true;"  ><img src="<?=base_url('assets/img/x.svg')?>" id="ex"/></a>

				<div id="ingame_menu">
					<ul>
						<li><button onclick="document.getElementById('ingame_menu').style.display='none'; document.getElementById('badges').style.display='block';" class="general_button">
						<h2>see badges</h2></button></li>
						<li><h2>sound</h2></li>
						<li> </br></li>
						<li><h2>main menu</h2></li>
						<li><h2>quit</h2></li>
						<li><h2>resume</h2></li>
					</ul> </h2>
				</div>


				<div id="badges">
					<h2 ><button onclick="document.getElementById('badges').style.display='none'; document.getElementById('ingame_menu').style.display='block';" class="general_button">
					<img src="<?=base_url('assets/img/arrow_white.svg')?>" id="back" /> </button>
					badges</h2>
						<ul>
							<li > <img src="<?=base_url("assets/img/b01.png")?>" /> <h4> Διαγράφει μια οριζόντια γραμμή </h4></li>
							<li > <img src="<?=base_url('assets/img/b01.png')?>" /> <h4> Κάνει κάτι άλλο </h4> </li>
							<li > <img src="<?=base_url("assets/img/b01.png")?>" /> <h4> Διαγράφει μια άλλη οριζόντια γραμμή </h4></li>
						</ul>
				</div>
			</div>
			<canvas width="400" height="500" id="canvas"  ></canvas>
		</div>
	</div>

	<script src="<?=base_url('assets/vendor/js/jquery.min.js')?>"></script>
	<script src="<?=base_url('assets/js/login.js')?>"></script>
	<script src="<?=base_url('assets/js/game.js')?>"></script>


</body>
</html>
