<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ΟΑΣΑ / Εφαρμογή</title>

	<!-- Basic styling, centering the canvas -->
	<style>
	canvas {
		display: block;
		position: absolute;
		margin: auto;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;

	}
	</style>
  <script src="./assets/vendor/js/jquery.min.js"></script>
  <script src="./assets/js/game.js"></script>
</head>
<body style="background:url('./assets/img/background.jpg');" >
<div style="margin:auto; width:300px;" >Time:<span id="timer" style="color:#000; font-size:30px;" ></span></div>

<div name="test1" style="margin:auto; width:300px;" id="test1" ></div>
<div style="margin-left:50%; margin-top:-10px; width:300px;" >Total:<span id="test2" ></span></div>
<canvas></canvas>
</body>
</html>
