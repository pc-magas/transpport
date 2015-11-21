<?php defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ΟΑΣΑ / Εφαρμογή</title>

	<link rel="stylesheet" href="<?=base_url('/assets/css/style.css')?>">
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300' rel='stylesheet' type='text/css'>


</head>
<body >
	<div class = "main" >

		<!-- INTRO -->
		<div id="first"  >
			<img src="<?=base_url('/assets/img/logo.svg')?>" id="logo"/>
			<div class="intro">
				<h5> Can YOU arrive at your destination fast enough by choosing the best means of tranport? </br></br>
				Prepare for the fastest and most exciting riddle game that will keep you company on your every outing!</h5>
				<button onclick="document.getElementById('first').style.display='none'; document.getElementById('login').style.display='block';" class="general_button">
					<img src="<?=base_url('/assets/img/continue.svg')?>"/>
				</button>
			</div>
		</div>

		<!-- LOGIN -->
		<div id="login" >
			<img src="<?=base_url('/assets/img/logo.svg')?>" id="logo" />
			<h3 >Log in</h3>
			<div class="login_main" >
					<label>E-mail:</label>
					<input id="username" style="padding: 0px 0px 0px 15px;" name="email" type="text" />
					<label>Password:</label>
					<input id="password" style="padding: 0px 0px 0px 15px;" name="password" type="password"  />
					<button id="login_button"  class="general_button">
						<img src="<?=base_url('/assets/img/login.svg')?>"/>
					</button>
			</div>
		</div>

		<!-- I'M IN -->
		<div id="imin" >
			<img src="<?=base_url('/assets/img/logo.svg')?>" id="logo"/>
			<button onclick="document.getElementById('imin').style.display='none'; document.getElementById('gameplay').style.display='block'; canvas.style.display='block';" class="general_button" >  <img src="<?=base_url('assets/img/im_in.svg')?>" /></button>
			<img src ="<?=base_url('/assets/img/imin_menu.png')?>" id="imin-menu"/>
		</div>

		<!-- GAMEPLAY -->
		<div id="gameplay">

			<div class="gm_footer">
				<ul>
					<li>	<img src="<?=base_url('/assets/img/life.svg')?>" /> </li>
					<li>	<h1 >4</h1> </li>
					<li class="board">	<img src="<?=base_url('/assets/img/time-board.svg')?>" height="32px" /> <div id="time"> <span id="timer" > </span></div> </li>
					<li class="board">	<img src="<?=base_url('/assets/img/point-board.svg')?>" height="32px"/> <div id="test2"> </div> <div id="test1" name="test1"></div> </li>
					<li>	<img src="<?=base_url('/assets/img/music.svg')?>" /> </li>
					<li>	<a id="pause" href="Javascript:;" onclick="document.getElementById('menus').style.display='block'; ask=false;" ><img src="<?=base_url('/assets/img/pause.svg')?>" /></a> </li>
				</ul>
			</div>

			<div id="menus"><a id="contin" href="Javascript:;" onclick="document.getElementById('menus').style.display='none'; update_grif(); ask=true;"  ><img src="<?=base_url('/assets/img/x.svg')?>" id="ex"/></a>

				<div  id="menu1" class="badges"	style="display:block;" >
					<h2 >badges</h2>
						<ul>
							<li ><a href="Javascript:;" onclick="ask=false; document.getElementById('menus').style.display='none'; ask=true;" ><img src="<?=base_url('assets/img/b01.png')?>" style="cursor:pointer;" /></a><h4> Διαγράφει μια οριζόντια γραμμή. </h4></li>
							<li ><a href="Javascript:;" onclick=""  ><img src="<?=base_url('assets/img/b01.png')?>" style="cursor:pointer;"  /></a><h4> Διαγράφη δυο χιαστοι τριάδες. </h4> </li>
							<li ><a href="Javascript:;" onclick=""  ><img src="<?=base_url('assets/img/b01.png')?>" style="cursor:pointer;"  /></a><h4> Διαγράφει δύο οριζόντιες τριάδες. </h4></li>
						</ul>
				</div>
					<div  id="menu2" class="badges" style="display:none;" >
					<h2 >Profile</h2>
						<div style="position:relative; width:480px;" >
							<h3 style="text-align:left; margin-bottom:7%;" >&nbsp; &nbsp; Andreas Choukas</h3>
							<img src="<?=base_url('/assets/img/profile.jpg')?>" style="height:100px; width:130px; margin-left:30px; float:left;" />
									<div style="float:left; width:auto;" >

											<p style="color:#fff;" >Age: 20</p>
											<p style="color:#fff;" >Gender: Male</p>

									</div>
									<div style="width:480px; height:auto; position:relative; float:left;" >
								<h3 style="text-align:left; font-size:1.8em;  margin-bottom:4%;" >&nbsp; &nbsp; Stats</h3>
												<div style="width:120px; height:90px; float:left; margin-left:30px;" >
													<h4>Points</h4>
														<p  style="color:#fff;" >524</p>
												</div>
												<div style="width:120px; height:90px; float:left; margin-left:20px;" >
													<h4>Badges</h4>
														<p  style="color:#fff;"  >6</p>
												</div>
												<div style="width:120px; height:90px; float:left; margin-left:20px;" >
													<h4>Gifts</h4>
														<p  style="color:#fff;" >2</p>
												</div>
									</div>
						</div>
				</div>

				<button onclick="document.getElementById('menu2').style.display='none'; document.getElementById('menu1').style.display='block';" style="margin-left:18px;" class ="buttons" >Badges</button>
				<button onclick="document.getElementById('menu1').style.display='none'; document.getElementById('menu2').style.display='block';" class ="buttons" >Profile</button>
				<button onclick="document.getElementById('menus').style.display='none'; document.getElementById('gameplay').style.display='none';  ask=true; canvas.style.display='none'; document.getElementById('imin').style.display='block';" class ="buttons" >Main Menu</button>
			</div>
			<canvas width="400" height="500" id="canvas"  ></canvas>
			<?php
			?>
			<div style="width:400px; height:170px; background:url(<?php echo base_url('./assets/img/footer.png')?>) no-repeat; position:relative; margin-top:410px; margin-left:auto; margin-right:auto;" >
				<button  onclick="document.getElementById('footerbadges2').style.display='none'; document.getElementById('footerbadges1').style.display='block';" style="width:30px; height:100px; position:absolute; top:35px; left:00px; outline:none; cursor:pointer;  background:transparent; border:none;" >

				</button>
							<div id="footerbadges1" style="width:330px; displat:block; height:100px; position:relative; top:35px;   margin-left:30px;" >
								<div style="position:relative; float:left; width:70px; height:70px; margin:15px; margin-left:25px;" >
									<img src="<?=base_url('/assets/img/bg1.svg')?>" style="height:100%; width:100%;" />
								</div>
								<div style="position:relative; float:left; width:70px; height:70px; margin:15px;" >
									<img src="<?=base_url('assets/img/bg2.svg');?>" style="height:100%; width:100%;" />
								</div>
								<div style="position:relative; float:left; width:70px; height:70px; margin:15px;" >
									<img src="<?=base_url('/assets/img/bg2.svg')?>" style="height:100%; width:100%;" />
								</div>
							</div>
							<div id="footerbadges2" style="width:330px; display:none; height:100px; position:relative; top:35px;   margin-left:30px;" >
								<div style="position:relative; float:left; width:70px; height:70px; margin:15px; margin-left:25px;" >
									<img src="<?=base_url('/assets/img/11.svg')?>" style="height:100%; width:100%;" />
								</div>
								<div style="position:relative; float:left; width:70px; height:70px; margin:15px;" >
									<img src="<?=base_url('/assets/img/14.svg')?>" style="height:100%; width:100%;" />
								</div>
								<div style="position:relative; float:left; width:70px; height:70px; margin:15px;" >
									<img src="<?=base_url('/assets/img/bg4.svg')?>" style="height:100%; width:100%;" />
								</div>
							</div>
				<button onclick="document.getElementById('footerbadges1').style.display='none'; document.getElementById('footerbadges2').style.display='block';" style="width:35px; height:100px; position:absolute; top:35px; left:365px; outline:none; cursor:pointer; background:transparent; border:none;" >

				</button>

			</div>
		</div>
	</div>

<script src="<?=base_url('assets/vendor/js/jquery.min.js')?>"></script>
<script src="<?=base_url('assets/js/login.js')?>"></script>
<script src="<?=base_url('assets/js/game.js')?>"></script>


</body>
</html>
