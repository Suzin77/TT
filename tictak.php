<html>
<head>
	<title>TT TT TT</title>
</head>
<body style = "margin: 0;">

 <p>Drzewko rozdzielone sprawdzam</p> 

<canvas id="tictak" width="300" height="300"></canvas>

<div class = "wyniki">
<p id ="wynik">Tutaj podaj wynik</p>
<p id ="klikniecie">komórka</p>
</div>

<script type="text/javascript">

var element = document.getElementById('tictak');
var ctx = element.getContext('2d');
var rect = element.getBoundingClientRect();


var fieldWidth = 150;
var filedHeight = 150;
var fieldX = 50;
var fieldY = 50;

var startGrid = {x:50 , y:84};
var cell = {x:0 , y:0};


function drawGrid()
{
	ctx.fillStyle = '#0FF';
	ctx.fillRect(fieldX, fieldY, fieldWidth, filedHeight);      

	// draw frame and grid.
	ctx.beginPath();
	ctx.moveTo(fieldX,fieldY);
	ctx.lineTo(fieldX+fieldWidth,fieldY);
	ctx.lineTo(fieldX+fieldWidth,fieldY+filedHeight);
	ctx.lineTo(fieldX,fieldY+filedHeight);
	ctx.lineTo(fieldX,fieldY);

	ctx.moveTo(fieldX+(fieldWidth/3),fieldY);
	ctx.lineTo(fieldX+(fieldWidth/3),fieldY+filedHeight);
	ctx.moveTo(fieldX+((fieldWidth/3)*2),fieldY);
	ctx.lineTo(fieldX+((fieldWidth/3)*2),fieldY+filedHeight);
	ctx.moveTo(fieldX,fieldY+(filedHeight/3));
	ctx.lineTo(fieldX+fieldWidth,fieldY+(filedHeight/3));
	ctx.moveTo(fieldX,fieldY+((filedHeight/3)*2));
	ctx.lineTo(fieldX+fieldWidth,fieldY+((filedHeight/3)*2));
	ctx.stroke();
}

function drwaPoint(ctx){}
function drawX(ctx){
	
	ctx.font = '48px serif';
	ctx.strokeText('X', 65, 150);

}

function drawO()
{
	ctx.beginPath();
	ctx.arc(startGrid.x+40, startGrid.y+6, 25, 0, Math.PI * 2, true);
	ctx.arc(1, 1, 25, 0, Math.PI * 2, true);

	ctx.stroke();
}

drawGrid();
//drawO();
//drawX(ctx);


kawa = document.querySelector("canvas");
kawa.addEventListener("mousemove", (event)=>{
  let coor = "Pointer location are on X: "+ event.clientX + " and Y: "+ (event.clientY-34);
  let relcoor = " W grid X: " + (event.clientX - startGrid.x) + " w grid Y: " + (event.clientY - 84);
  let rectcoor = " W rect left: " +(event.clientX - rect.left) + " a rect right: " + (event.clientY - rect.top);
  document.getElementById("wynik").innerHTML = coor + relcoor + rectcoor ; 
})

kawa.addEventListener("click", (event)=>{
	let inGrid = {x:event.clientX - startGrid.x, y:event.clientY - startGrid.y}
	cell = {x:(Math.floor((inGrid.x/(fieldWidth/3)+1))),y:(Math.floor((inGrid.y/(filedHeight/3)+1)))}
	//cell.x = (Math.floor((inGrid.x/(fieldWidth/3)+1)));
	let position = "Pozycja to: [" + cell.x + ","+ cell.y+"]"; 
	document.getElementById("klikniecie").innerHTML = position;	
	console.log(cell.x);
})

</script>

</body>
</html>
