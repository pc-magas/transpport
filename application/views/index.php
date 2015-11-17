<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ΟΑΣΑ / Εφαρμογή</title>
	
	<link rel="stylesheet" href="../../assets/css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300' rel='stylesheet' type='text/css'>

	
</head>
<body >
	<div class = "main" >
	
		<!-- INTRO -->
		<div id="first"  >
			<img src="../../assets/img/logo.svg" class="logo"/>
			<div class="intro">
				<h5> Can YOU arrive at your destination fast enough by choosing the best means of tranport? </br></br>
				Prepare for the fastest and most exciting riddle game that will keep you company on your every outing!</h5>
				<button onclick="document.getElementById('first').style.display='none'; document.getElementById('login').style.display='block';" class="general_button">
					<h6>continue <img src="../../assets/img/arrow_pink.svg" /> </h6>
				</button>
			</div>		
		</div>
		
		<!-- LOGIN -->
		<div id="login" >
			<img src=" ../../assets/img/logo.svg" class="logo" />
			<h3 >Log in</h3>
			<div class="login_main" >
 				<label>E-mail:</label>
				<input name="email" type="email" />
				<label>Password:</label>
				<input name="password" type="password"  />
				<button onclick="document.getElementById('login').style.display='none'; document.getElementById('imin').style.display='block';"  class="general_button">
					<h6>sign in <img src="../../assets/img/arrow_pink.svg" /> </h6>
				</button>
				<img src="../../assets/img/fblogin.svg"/>
			</div>
		</div>
		
		<!-- I'M IN -->
		<div id="imin" >
			<img src="../../assets/img/logo.svg" class="logo"/>
			<button onclick="document.getElementById('imin').style.display='none'; document.getElementById('play').style.display='block';" class="general_button" >  
			<img src="../../assets/img/im_in.svg" /></button>
		</div>
		
		<!-- MAIN MENU-->
		<div id="play" >
			<img src="../../assets/img/logo.svg" class="logo"/>
			<button onclick="document.getElementById('play').style.display='none'; document.getElementById('gameplay').style.display='block'; canvas.style.display='block';"  class="general_button" id="play_btn">
				<h6>play! <img src="../../assets/img/arrow_pink.svg" /> </h6>
			</button>
			<button class="general_button" id="badges_btn"><h6>badges </h6> </button>
			<button class="general_button" id="store_btn"><h6>store </h6> </button>
			<button class="general_button" id="rank_btn"><h6>rank </h6> </button>
		</div>
		
		<!-- GAMEPLAY -->
		<div id="gameplay">
		
			<div class="gm_footer">
				<ul>
					<li><img src="../../assets/img/life.svg" /> </li>
					<li><h1 >4</h1> </li>
					<li class="board" id="clock">  <img src="../../assets/img/clock.svg" class="board_img"/>  <div class="board_text">  <span id="timer" > </span></div> </li>
					<li class="board" id="points"> <img src="../../assets/img/points.svg" class="board_img"/> <div class="board_text"> <div id="test2"> </div> <div id="test1" name="test1"></div> </div> </li>
					<li><img src="../../assets/img/music.svg" /> </li>
					<li><button onclick="document.getElementById('menus').style.display='block'; update_grif(); ask=true;";"  class="general_button">
						<img src="../../assets/img/pause.svg" id="pause" /> 
					</button></li>
				</ul>
			</div>

			<div id="menus"><a href="Javascript:;" onclick="document.getElementById('menus').style.display='none'; document.getElementById('ingame_menu').style.display='block'; document.getElementById('badges').style.display='none';  update_grif(); ask=true;"  ><img src="../../assets/img/x.svg" id="ex"/></a>
				
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
					<img src="../../assets/img/arrow_white.svg" id="back" /> </button>
					badges</h2>
						<ul>
							<li > <img src="../../assets/img/b01.png" /> <h4> Διαγράφει μια οριζόντια γραμμή </h4></li>
							<li > <img src="../../assets/img/b01.png" /> <h4> Κάνει κάτι άλλο </h4> </li>
							<li > <img src="../../assets/img/b01.png" /> <h4> Διαγράφει μια άλλη οριζόντια γραμμή </h4></li>
						</ul>				
				</div>
			</div>
			<canvas width="400" height="500" id="canvas"  ></canvas>
		</div>
	</div>

<script>
var count=60;


var

/**
 * Constants
 */
 total=0,
 numberoftype1,
 numberoftype2,
 finpx,
 finpy,
 k,
j,
ask=true,
test,
xmax=8,
ymax=8,
xtype= new Array(xmax),
ytype= new Array(xmax),

/* KAT
xmax = 8,
ymax = 8,
xtype = new Array(xmax),
*/

WIDTH  = 400,
HEIGHT = 560,

pi = Math.PI,

UpArrow   = 38,
DownArrow = 40,
LeftArrow = 37,
RightArrow = 39,

/**
 * Game elements
 */
canvas,
ctx,
keystate,

/**
 * The player paddle
 * 
 * @type {Object}
 */
tramp={
	x:0,
	y:0,

	width: 50,
	height: 50,
    update: function() {
	
if(keystate[evt.keyCode]==true)
{

}
	},

	/**
	 * Draw the player paddle to the canvas
	 */
	draw: function(xi, yi) {
		this.x=xi;
		this.y=yi;
	var img = new Image();
img.src = '../../assets/img/icon4.jpg';

var ptrn = ctx.createPattern(img,'repeat');
  ctx.fillStyle = ptrn;
		ctx.fillRect(this.x, this.y, this.width, this.height);
 


	}

},
downplace={
	x:0,
	y:0,

	width: 400,
	height: 148,
    update: function() {
	
if(keystate[evt.keyCode]==true)
{

}
	},

	/**
	 * Draw the player paddle to the canvas
	 */
	draw: function() {
		this.x=0;
		this.y=400;
	var img = new Image();

img.src = '../../assets/img/footer.png';
var ptrn = ctx.createPattern(img,'repeat');
  ctx.fillStyle = ptrn;
ctx.fillRect(0, 400, 400, 200);
	badge_down.draw(50, 450);
	badge_down.draw(150, 450);
	badge_down.draw(250, 450);
	}

},
troley={
	x:0,
	y:0,

	width: 50,
	height: 50,
    update: function() {
	
		if(sfaires.y<this.y)
		{
			this.height-=5;
			sfaires.y=player.y-20;
		}
	},

	/**
	 * Draw the player paddle to the canvas
	 */
	draw: function(xi, yi) {
		this.x=xi;
		this.y=yi;
		var img = new Image();
img.src = '../../assets/img/icon3.jpg';
var ptrn = ctx.createPattern(img,'repeat');
  ctx.fillStyle = ptrn;
		ctx.fillRect(this.x, this.y, this.width, this.height);
	}

},
metro={
	x:0,
	y:0,

	width: 50,
	height: 50,
    update: function() {
	

	},

	/**
	 * Draw the player paddle to the canvas
	 */
	draw: function(xi, yi) {
		this.x=xi;
		this.y=yi;
	var img = new Image();
img.src = '../../assets/img/icon2.jpg';
var ptrn = ctx.createPattern(img,'repeat');
  ctx.fillStyle = ptrn;
		ctx.fillRect(this.x, this.y, this.width, this.height);
	}

},
menu={
	x:0,
	y:0,

	width: 50,
	height: 30,
    update: function() {
	

	},

	/**
	 * Draw the player paddle to the canvas
	 */
	draw: function() {
		this.x=00;
		this.y=420;
			var imgs = new Image();
imgs.src = '../../assets/img/menu.png';
imgs.onload=function() {
var ptrn = ctx.createPattern(imgs, '');
  ctx.fillStyle = ptrn;
		ctx.fillRect(350, 400, 25, 25);
	}
	}

},
badges={
	x:0,
	y:0,

	width: 80,
	height: 80,
    update: function() {
	

	},

	/**
	 * Draw the player paddle to the canvas
	 */
	draw: function(d, b, imgsrc) {
		this.x=d;
		this.y=b;
		x=d;
		y=b;
			var imgs = new Image();
	imgs.src = imgsrc;
	var ptrn = ctx.createPattern(imgs, '');
  		ctx.fillStyle = ptrn;
		ctx.fillRect( x, y, this.width, this.height);
	}

},
badge_down={
	x:0,
	y:0,

	width: 50,
	height: 50,
    update: function() {
	

	},

	/**
	 * Draw the player paddle to the canvas
	 */
	draw: function(d, b) {
		this.x=d;
		this.y=b;
		x=d;
		y=b;
				var imgs = new Image();
imgs.src = '../../assets/img/b02.png';
var ptrn = ctx.createPattern(imgs,'repeat');
  		 ctx.fillStyle = ptrn;
		ctx.fillRect( x, y, this.width, this.height);
	}

},
tabs={
	x:0,
	y:0,

	width: 82,
	height: 25,
    update: function() {
	

	},

	/**
	 * Draw the player paddle to the canvas
	 */
	draw: function(x, y, z, w, h) {
		this.x=x;
		this.y=y;
			var imgs = new Image();
imgs.src =z;
imgs.onload=function(){
var ptrn = ctx.createPattern(imgs,'repeat');
  		 ctx.fillStyle = ptrn;
  		
		ctx.fillRect(x , y, w, h);
	}
	}

},
menu1={
	x:0,
	y:0,

	width: 400,
	height: 340,
    update: function() {
	

	},

	/**
	 * Draw the player paddle to the canvas
	 */
	draw: function() {
		this.x=0;
		this.y=0;
			var imgs = new Image();
imgs.src = '../../assets/img/bg.jpg';
var ptrn = ctx.createPattern(imgs,'repeat');
  		 ctx.fillStyle = ptrn;
		ctx.fillRect(this.x, this.y, this.width, this.height);


var imgs = new Image();
imgs.src = '../../assets/img/menu1_top.png';
imgs.onload=function(){
var ptrn = ctx.createPattern(imgs,'repeat');
  		 ctx.fillStyle = ptrn;
		ctx.fillRect(158, 0, this.width, this.height);
	}
		s=0;
		for(j=1; j<2; j++){
		for(i=1; i<4; i++){
			s=s+80;
			imgsrc='bg'+i+'.svg';
		badges.draw( s, 80, imgsrc);
		}
	}
	}

},
menu2={
	x:0,
	y:0,

	width: 400,
	height: 300,
    update: function() {
	

	},

	/**
	 * Draw the player paddle to the canvas
	 */
	draw: function() {
		this.x=0;
		this.y=0;
			var imgs = new Image();
imgs.src = '../../assets/img/menu.png';
var ptrn = ctx.createPattern(imgs,'repeat');
  		 ctx.fillStyle = ptrn;
         ctx.fillStyle = '#fff';
		ctx.fillRect(this.x, this.y, this.width, this.height);
	}

},
menuGRID={
	x:0,
	y:0,

	width: 400,
	height: 400,
    update: function() {
	

	},

	/**
	 * Draw the player paddle to the canvas
	 */
	draw: function() {
		this.x=00;
		this.y=00;
			var imgs = new Image();
imgs.src = '../../assets/img/bg.jpg';
var ptrn = ctx.createPattern(imgs,'no-repeat');
  		 ctx.fillStyle = ptrn;
		ctx.fillRect(this.x, this.y, this.width, this.height);
			tabs.draw(80, 373, 'tab1.png', 82, 25);
			tabs.draw(245, 379.5, 'tab2.png', 61, 23);

	}

},
start={
	x:0,
	y:0,

	width: 100,
	height: 70,
    update: function() {
	

	},

	/**
	 * Draw the player paddle to the canvas
	 */
	draw: function() {
		this.x=300;
		this.y=300;
	var imgs = new Image();
imgs.src = '../../assets/img/start.png';
imgs.onload=function() {
var ptrn = ctx.createPattern(imgs,'repeat');
  ctx.fillStyle = ptrn;
		ctx.fillRect(148, 148, 148, 148);
	}
	}

},

leoforeio={
	x:0,
	y:0,

	width: 50,
	height: 50,
    update: function() {
	
		if(sfaires.y<this.y)
		{
			this.height-=5;
			sfaires.y=player.y-20;
		}
	},

	/**
	 * Draw the player paddle to the canvas
	 */
	draw: function(xi, yi) {
		this.x=xi;
		this.y=yi;
var img = new Image();
img.src = '../../assets/img/icon1.jpg';
var ptrn = ctx.createPattern(img,'repeat');
  ctx.fillStyle = ptrn;
  ctx.fillRect(this.x, this.y, this.width, this.height);
	
	
	}
     /* var image = new Image();
      image.onload = function() {

                          // draw image

                          ctx.drawImage(image, this.x, this.y); 

                      };

    image.src = 'http://a.deviantart.net/avatars/e/v/evilxlittlexninja.jpg?1';
    }
    */
	
	
}


/**
 * The ai paddle
 * 
 * @type {Object}
 */

/**	
 * The ball object
 * 
 * @type {Object}
 */

/**
 * Starts the game
 */
  function getMousePos(canvas, evt) {
        var rect = canvas.getBoundingClientRect();
        return {
          x: evt.clientX - rect.left,
          y: evt.clientY - rect.top
        };
      }
function main() {
	// create, initiate and append game canvas
	canvas = document.createElement("canvas");
	canvas.width = WIDTH;
	canvas.height = HEIGHT;
	ctx = canvas.getContext("2d");
	document.body.appendChild(canvas);
	var firpx=0;
	var firpy=0;
	keystate = {};
	// keep track of keyboard presses
	document.addEventListener("mousedown", function(evt) {
		keystate[evt.keyCode] = true;
		var mousePos = getMousePos(canvas, evt);
		
		if(mousePos.y<400)
		{
			firpx=mousePos.x/50;
			firpx=firpx;
			firpx=parseInt(firpx);
			firpy=mousePos.y/50;
			firpy=firpy;
			firpy=parseInt(firpy);

			numberoftype1=xtype[firpx][firpy];
		}
		
	});

	document.addEventListener("mouseup", function(evt) {
		delete keystate[evt.keyCode];
		var mousePos = getMousePos(canvas, evt);
if(mousePos.y<=400 && ask==true){
finpx=mousePos.x/50;
finpx=finpx;
finpx=parseInt(finpx);
finpy=mousePos.y/50;
finpy=finpy;
finpy=parseInt(finpy);
go1x=finpx-firpx;
go1y=finpx-firpx;
back1x=finpy-firpy;
back1y=finpy-firpy;
if(go1x>1)
{
 finpx=firpx+1;

}
if(go1y<-1)
{
	finpx=firpx-1;
}
if(back1x>1)
{
 finpy=firpy+1;
}
if(back1y<-1)
{
	finpy=firpy-1;
}

numberoftype2=xtype[finpx][finpy];
 xtype[firpx][firpy]=numberoftype2;
 xtype[finpx][finpy]=numberoftype1;

update_grif();
}
if(mousePos.y>400 && mousePos.y<=425 && mousePos.x>350 && mousePos.x<=375)
{
				if(ask==true)
				{
		document.getElementById('menus').style.display='block';
		ask=false;
				}else {
					update_grif();
				ask=true;
				}
}
	});
	init(); // initiate game objects
	// game loop function
	var loop = function() {
	if(count<=1)
	{
		document.getElementById("timer").innerHTML="GAME OVER!!!";
		start.draw();
	}
	document.getElementById("test2").innerHTML=total;

		window.requestAnimationFrame(loop, canvas);
	};
	window.requestAnimationFrame(loop, canvas);
}

/**
 * Initatite game objects and set start positions
 */

function init() {

makegrid();
	/* KAT
	for (i = 0;i<xmax;i++) {
		var ytype = new Array(ymax);
		xtype[i] = ytype;

		for (j = 0;j<ymax;j++) {

		var randNumMin = 1;
		var randNumMax = 2;
		var randInt = (Math.floor(Math.random() * (randNumMax - randNumMin + 1)) + randNumMin);



		}

	}
	*/


}

/**
 * Update all game objects
 */
function update() {
	tramp.update

}

/**
 * Clear canvas and draw all game objects and net
 */
function draw() {


}
function update_delete_grid(){
ctx.fillRect(0, 00, WIDTH, HEIGHT);
	ctx.save();
 for(i=0; i<8; i++)
 {
 		for(j=0; j<8; j++)
 		{



 			if(xtype[i][j]==1)
 			{
 		
 				x=i*50;
 				y=j*50;
 				tramp.draw(x, y);
 			
            

 			}
 			if(xtype[i][j]==2)
 			{
 				x=i*50;
 				y=j*50;
 				leoforeio.draw(x, y);

 			}
 			if(xtype[i][j]==3)
 			{
 				x=i*50;
 				y=j*50;
 				troley.draw(x, y);
 			}
  			if(xtype[i][j]==4)
 			{
 				x=i*50;
 				y=j*50;
 				metro.draw(x, y);
 			}
 		}
 	}
 				 	var w = 4;
	var x = (WIDTH - w)*0.5;
	var y = 0;
	var step = HEIGHT/20; // how many net segments

	ctx.restore();
}

function update_grif()
{
	ctx.fillRect(0, 00, WIDTH, HEIGHT);
	ctx.save();
 for(i=0; i<8; i++)
 {
 		for(j=0; j<8; j++)
 		{



 			if(xtype[i][j]==1)
 			{
 		
 				x=i*50;
 				y=j*50;
 				tramp.draw(x, y);
              			if(i+1<8 && i-1>=0 && xtype[i+1][j]==1 && xtype[i-1][j]==1  )
 						{
 					var randNumMin = 1;
					var randNumMax = 4;

					var randInt = (Math.floor(Math.random() * (randNumMax - randNumMin + 1)) + randNumMin);
 					xtype[i][j]=randInt;
 					var randInt = (Math.floor(Math.random() * (randNumMax - randNumMin + 1)) + randNumMin);
 					xtype[i+1][j]=randInt;
 					var randInt = (Math.floor(Math.random() * (randNumMax - randNumMin + 1)) + randNumMin);
 					xtype[i-1][j]=randInt;
 						update_grif();
 					count=count+2;
 					document.getElementById("test1").innerHTML="You Win 5 Points";
 					total=total+5;
 							}
 					if(j+1<8 && j-1>=0 && xtype[i][j+1]==1 && xtype[i][j-1]==1  )
 						{
 												var randNumMin = 1;
					var randNumMax = 4;

					var randInt = (Math.floor(Math.random() * (randNumMax - randNumMin + 1)) + randNumMin);
 					xtype[i][j]=randInt;
 					var randInt = (Math.floor(Math.random() * (randNumMax - randNumMin + 1)) + randNumMin);
 					xtype[i][j+1]=randInt;
 					var randInt = (Math.floor(Math.random() * (randNumMax - randNumMin + 1)) + randNumMin);
 					xtype[i][j-1]=randInt;
 						update_grif();
 				document.getElementById("test1").innerHTML="You Win 5 Points";

 				count=count+2;
 				total=total+5;
 							}
 			
            

 			}
 			if(xtype[i][j]==2)
 			{
 				x=i*50;
 				y=j*50;
 				leoforeio.draw(x, y);
 				if(i+1<8 && i-1>=0 && xtype[i+1][j]==2 && xtype[i-1][j]==2  )
 				{
 					var randNumMin = 1;
					var randNumMax = 4;

					var randInt = (Math.floor(Math.random() * (randNumMax - randNumMin + 1)) + randNumMin);
 					xtype[i][j]=randInt;
 					var randInt = (Math.floor(Math.random() * (randNumMax - randNumMin + 1)) + randNumMin);
 					xtype[i+1][j]=randInt;
 					var randInt = (Math.floor(Math.random() * (randNumMax - randNumMin + 1)) + randNumMin);
 					xtype[i-1][j]=randInt;
 						update_grif();
 						count=count+4;
 						document.getElementById("test1").innerHTML="You Win 10 Points";
 						total=total+10;
 				}
 				if(j+1<8 && j-1>=0 && xtype[i][j+1]==2 && xtype[i][j-1]==2  )
 				{
 										var randNumMin = 1;
					var randNumMax = 4;

					var randInt = (Math.floor(Math.random() * (randNumMax - randNumMin + 1)) + randNumMin);
 					xtype[i][j]=randInt;
 					var randInt = (Math.floor(Math.random() * (randNumMax - randNumMin + 1)) + randNumMin);
 					xtype[i][j+1]=randInt;
 					var randInt = (Math.floor(Math.random() * (randNumMax - randNumMin + 1)) + randNumMin);
 					xtype[i][j-1]=randInt;
 						update_grif();
 					document.getElementById("test1").innerHTML="You Win 10 Points";
 					count=count+4;
 					total=total+10;
 				}
 			}
 			if(xtype[i][j]==3)
 			{
 				x=i*50;
 				y=j*50;
 				troley.draw(x, y);
 				if(i+1<8 && i-1>=0 && xtype[i+1][j]==3 && xtype[i-1][j]==3  )
 				{
 					var randNumMin = 1;
					var randNumMax = 4;

					var randInt = (Math.floor(Math.random() * (randNumMax - randNumMin + 1)) + randNumMin);
 					xtype[i][j]=randInt;
 					var randInt = (Math.floor(Math.random() * (randNumMax - randNumMin + 1)) + randNumMin);
 					xtype[i+1][j]=randInt;
 					var randInt = (Math.floor(Math.random() * (randNumMax - randNumMin + 1)) + randNumMin);
 					xtype[i-1][j]=randInt;
 						update_grif();
 						count=count+5;
 				document.getElementById("test1").innerHTML="You Win 15 Points";
 				total=total+15;
 				}
 				if(j+1<8  && j-1>=0 && xtype[i][j+1]==3 && xtype[i][j-1]==3  )
 				{
 										var randNumMin = 1;
					var randNumMax = 4;

					var randInt = (Math.floor(Math.random() * (randNumMax - randNumMin + 1)) + randNumMin);
 					xtype[i][j]=randInt;
 					var randInt = (Math.floor(Math.random() * (randNumMax - randNumMin + 1)) + randNumMin);
 					xtype[i][j+1]=randInt;
 					var randInt = (Math.floor(Math.random() * (randNumMax - randNumMin + 1)) + randNumMin);
 					xtype[i][j-1]=randInt;
 						update_grif();
 						count=count+5;
 						document.getElementById("test1").innerHTML="You Win 15 Points";
 						total=total+15;
 				}
 			}
  			if(xtype[i][j]==4)
 			{
 				x=i*50;
 				y=j*50;
 				metro.draw(x, y);
 				if(i+1<8 && i-1>=0 && xtype[i+1][j]==4 && xtype[i-1][j]==4 )
 				{
 					count=count+7;
 					document.getElementById("test1").innerHTML="You Win 20 Points";
 					 var randNumMin = 1;
					var randNumMax = 4;

					var randInt = (Math.floor(Math.random() * (randNumMax - randNumMin + 1)) + randNumMin);
 					xtype[i][j]=randInt;
 					var randInt = (Math.floor(Math.random() * (randNumMax - randNumMin + 1)) + randNumMin);
 					xtype[i+1][j]=randInt;
 					var randInt = (Math.floor(Math.random() * (randNumMax - randNumMin + 1)) + randNumMin);
 					xtype[i-1][j]=randInt;
 					/*for(k=j; k>=1; k--)
 					{     
 						temp=xtype[i][k-1];
 						xtype[i][k]=temp;
 						xtype[i][0]=0;
 						document.getElementById("test1").innerHTML+=k;

 					}
 					for(k=j; k>=1; k--)
 					{     
 						temp=xtype[i-1][k-1];
 						xtype[i-1][k]=temp;
 						xtype[i-1][0]=0;
 						document.getElementById("test1").innerHTML+=k;

 					}
 					for(k=j; k>=1; k--)
 					{     
 						temp=xtype[i+1][k-1];
 						xtype[i+1][k]=temp;
 						xtype[i+1][0]=0;
 						document.getElementById("test1").innerHTML+=k;
 					}

 					console.log(xtype[i][j]);
 					xtype[i][j]=1;
 					xtype[i+1][j]=2;
 					xtype[i-1][j]=3;
						*/
 					update_grif();
 					total=total+20;
					 				
 				}
 				if(j+1<8 && j-1>=0 && xtype[i][j+1]==4 && xtype[i][j-1]==4  )
 						{

 							count=count+7;
 					var randNumMin = 1;
					var randNumMax = 4;

					var randInt = (Math.floor(Math.random() * (randNumMax - randNumMin + 1)) + randNumMin);
 					xtype[i][j]=randInt;
 					var randInt = (Math.floor(Math.random() * (randNumMax - randNumMin + 1)) + randNumMin);
 					xtype[i][j+1]=randInt;
 					var randInt = (Math.floor(Math.random() * (randNumMax - randNumMin + 1)) + randNumMin);
 					xtype[i][j-1]=randInt;
 			
 							update_grif();
 				document.getElementById("test1").innerHTML="You Win 20 Points";
 				total=total+20;
 				}
 			}


 		}



 }
 
  downplace.draw();
  menu.draw();
 	var w = 4;
	var x = (WIDTH - w)*0.5;
	var y = 0;
	var step = HEIGHT/20; // how many net segments

	ctx.restore();

}
function makegrid()
{
	ctx.fillRect(0, 00, WIDTH, HEIGHT);
	ctx.save();


	 for(i=0; i<8; i++)
   {
   	//edw prepei na dimiourgeitai pinakas y`
   	 xtype[i]= new Array(ymax);
      for(j=0; j<8; j++)
      {
        var randNumMin = 1;
		var randNumMax = 4;

		var randInt = (Math.floor(Math.random() * (randNumMax - randNumMin + 1)) + randNumMin);
               if(i>=2) {
               while(xtype[i-1][j]==randInt && xtype[i-2][j]==randInt){
               var randInt = (Math.floor(Math.random() * (randNumMax - randNumMin + 1)) + randNumMin);

               }
           
                               }
                                   if(j>=2){
                                   	    while(xtype[i][j-1]==randInt && xtype[i][j-2]==randInt ){
               var randInt = (Math.floor(Math.random() * (randNumMax - randNumMin + 1)) + randNumMin);

               }
                                   }
      	if(randInt==1)
      		{
      			x=i*50;
      			y=j*50;

      			tramp.draw(x, y);
      			xtype[i][j]=1;
      		


      		}
      	if(randInt==2)
      		{

				x=i*50;
      			y=j*50;
      			xtype[i][j]=2;
      	


      			leoforeio.draw(x, y);

      		}
      		if(randInt==3 && xtype[i][j]==null)
      		{

			x=i*50;
      		y=j*50;
      		xtype[i][j]=3;
      


      			troley.draw(x, y);

      		}
      		if(randInt==4 && xtype[i][j]==null)
      		{

			x=i*50;
      		y=j*50;
      		xtype[i][j]=4;
      


      			metro.draw(x, y);

      		}
         			if(xtype[i][j]!=null)
      				{
      				x=i*50;
      				y=j*50;
                         
          
  						if(xtype==1){
      			tramp.draw(x, y);
      							}
      						if(xtype==2)
      								{
      									leoforeio.draw(x, y);
      							}
      							if(xtype==3)
      							{
      								troley.draw(x, y);
      							}
      							if(xtype==4)
      							{
      								metro.draw(x, y);
      							}
      		

      				}
   
      }

   }
    downplace.draw();
	   menu.draw();
	   start.draw();

   	// draw the net
	var w = 4;
	var x = (WIDTH - w)*0.5;
	var y = 0;
	var step = HEIGHT/20; // how many net segments

	ctx.restore();
	var counter=setInterval(timer, 1000); //1000 will  run it every 1 second
function timer()
{
  count=count-1;
  if (count <= 0)
  {
     clearInterval(counter);
     return;
  }

 document.getElementById("timer").innerHTML=count + " ''"; // watch for spelling

}

		}



  



// start and run the game
main();

</script>


</body>
</html>