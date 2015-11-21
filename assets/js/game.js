
/**
*Making the Url for images
*@param img {String} Ime image file
*@return {String} url for the images
*/
var base_url=function(img)
{
	var url=window.location.href.split('index.php')[0]+'assets/img/'+img;
	return url;
}

var count=60;
/**
 * Constants
 */
var total=0;
var numberoftype1;
var numberoftype2;
var finpx;
var finpy;
var k;
var j;
var badgestatus=true;
var ask=true;
var test;
var xmax=8;
var ymax=8;
var xtype= new Array(xmax);
var ytype= new Array(xmax);

/* KAT
xmax = 8,
ymax = 8,
xtype = new Array(xmax),
*/

var WIDTH  = 400;
var HEIGHT = 400;

var pi = Math.PI;

var UpArrow   = 38;
var DownArrow = 40;
var LeftArrow = 37;
var RightArrow = 39;

/**
 * Game elements
 */
var canvas;
var ctx;
var keystate;

/**
 * The player paddle
 *
 * @type {Object}
 */
var tramp={
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
	draw: function(xi, yi)
	{
		this.x=xi;
		this.y=yi;
		var img = new Image();
		img.src = base_url('icon4.jpg');

		console.log(img.src);

		var ptrn = ctx.createPattern(img,'repeat');
  	ctx.fillStyle = ptrn;
		ctx.fillRect(this.x, this.y, this.width, this.height);
	}

};

var downplace={
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

		img.src = base_url('footer.png');
		var ptrn = ctx.createPattern(img,'repeat');
  	ctx.fillStyle = ptrn;
		ctx.fillRect(0, 400, 400, 200);
		badge_down.draw(50, 450);
		badge_down.draw(150, 450);
		badge_down.draw(250, 450);
	}

};

var troley={
	x:0,
	y:0,

	width: 50,
	height: 50,
  update: function()
	{
		if(sfaires.y<this.y)
		{
			this.height-=5;
			sfaires.y=player.y-20;
		}
	},

	/**
	 * Draw the player paddle to the canvas
	 */
	draw: function(xi, yi)
	{
		this.x=xi;
		this.y=yi;
		var img = new Image();
		img.src = base_url('icon3.jpg');
		var ptrn = ctx.createPattern(img,'repeat');
  	ctx.fillStyle = ptrn;
		ctx.fillRect(this.x, this.y, this.width, this.height);
	}

};

var metro={
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
		img.src = base_url('icon2.jpg');
		var ptrn = ctx.createPattern(img,'repeat');
  	ctx.fillStyle = ptrn;
		ctx.fillRect(this.x, this.y, this.width, this.height);
	}

};

var menu={
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
		imgs.src = base_url('menu.png');
		imgs.onload=function()
		{
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

};

var badge_down={
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
imgs.src = base_url('b02.png');
var ptrn = ctx.createPattern(imgs,'repeat');
  		 ctx.fillStyle = ptrn;
		ctx.fillRect( x, y, this.width, this.height);
	}

};

var tabs={
	x:0,
	y:0,

	width: 82,
	height: 25,
    update: function() {


	},

	/**
	 * Draw the player paddle to the canvas
	 */
	draw: function(x, y, z, w, h)
	{
		this.x=x;
		this.y=y;
		var imgs = new Image();
		imgs.src =z;
		imgs.onload=function()
		{
			var ptrn = ctx.createPattern(imgs,'repeat');
  		ctx.fillStyle = ptrn;
			ctx.fillRect(x , y, w, h);
		}
	}
};

var menu1={
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
		imgs.src = base_url('bg.jpg');
		var ptrn = ctx.createPattern(imgs,'repeat');
  	ctx.fillStyle = ptrn;
		ctx.fillRect(this.x, this.y, this.width, this.height);


		var imgs = new Image();
		imgs.src = base_url('menu1_top.png');
		imgs.onload=function(){
			var ptrn = ctx.createPattern(imgs,'repeat');
  		ctx.fillStyle = ptrn;
			ctx.fillRect(158, 0, this.width, this.height);
		}
		s=0;
		for(j=1; j<2; j++)
		{
			for(i=1; i<4; i++)
			{
				s=s+80;
				imgsrc=base_url('bg'+i+'.svg');
				badges.draw( s, 80, imgsrc);
			}
		}
	}

};

var menu2={
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
		imgs.src = base_url('menu.png');
		var ptrn = ctx.createPattern(imgs,'repeat');
  	ctx.fillStyle = ptrn;
    ctx.fillStyle = '#fff';
		ctx.fillRect(this.x, this.y, this.width, this.height);
	}

};

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
		imgs.src = base_url('bg.jpg');
		var ptrn = ctx.createPattern(imgs,'no-repeat');
  	ctx.fillStyle = ptrn;
		ctx.fillRect(this.x, this.y, this.width, this.height);
		tabs.draw(80, 373, base_url('tab1.png'), 82, 25);
		tabs.draw(245, 379.5, base_url('tab2.png'), 61, 23);
	}

};

var start={
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
		imgs.src = base_url('start.png');
		imgs.onload=function() {
			var ptrn = ctx.createPattern(imgs,'repeat');
  		ctx.fillStyle = ptrn;
			ctx.fillRect(148, 148, 148, 148);

		}
	}
};

var leoforeio={
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
		img.src = base_url('icon1.jpg');
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

	document.addEventListener("mouseup", function(evt)
	{
		delete keystate[evt.keyCode];
		var mousePos = getMousePos(canvas, evt);
		if(mousePos.y<=400 && ask==true )
		{
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
			if(ask==true)
			{

					if(typeof badgeid !== 'undefined' && badgeid==1)
					{
						finpx=mousePos.x/50;
						finpx=finpx;
						finpx=parseInt(finpx);
						finpy=mousePos.y/50;
						finpy=finpy;
						finpy=parseInt(finpy);
						for(i=0; i<8; j++)
						{
							var randNumMin = 1;
							var randNumMax = 1;

							var randInt = (Math.floor(Math.random() * (randNumMax - randNumMin + 1)) + randNumMin);
 							xtype[i][finpy]=randInt;
 							update_grif();
 							update_grif();
 							ask=true;
						}
					}
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
        if(i>=2)
				{
             while(xtype[i-1][j]==randInt && xtype[i-2][j]==randInt){
             var randInt = (Math.floor(Math.random() * (randNumMax - randNumMin + 1)) + randNumMin);
        }

   	}


		if(j>=2)
		{
        while(xtype[i][j-1]==randInt && xtype[i][j-2]==randInt )
				{
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
				var img = new Image();
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

  						if(xtype==1)
							{
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

	 start.draw();

   	// draw the net
	var w = 4;
	var x = (WIDTH - w)*0.5;
	var y = 0;
	var step = HEIGHT/20; // how many net segments

	ctx.restore();
	/*var counter=setInterval(timer, 1000); //1000 will  run it every 1 second
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
*/
var output=$('#timer');

var isPaused=false;
 count=60;
var counter= window.setInterval(function()
{
	if(!isPaused)
	{
		count--;
		output.text(""+count);
	}
}, 1000);

$("#pause").on('click',function(e)
{
	e.preventDefault();
	isPaused=true;
});

$("#contin").on('click',function(e)
{
	e.preventDefault();
	isPaused=false;
});

}





$(document).ready(function()
{
		$('#login_button').click(function()
		{
		  console.log("clicked");
		  login_user();
		});

		// start and run the game
		main();

});
