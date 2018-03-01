<html>
<head>
	<title>TT TT TT</title>
</head>
<body style = "margin: 0;">

 <p>Drzewko rozdzielone sprawdzam</p> 

<canvas id="tictak" width="300" height="300"></canvas>

<div class = "wyniki">
<p id ="wynik">Tutaj podaj wynik</p>
</div>

<script type="text/javascript">

var element = document.getElementById('tictak');
var ctx = element.getContext('2d');

var fieldWidth = 150;
var filedHeight = 150;
var fieldX = 50;
var fieldY = 50;

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


kawa = document.querySelector("canvas");
kawa.addEventListener("mousemove", (event)=>{
  let coor = "Pointer location are on X: "+ event.clientX + " and Y: "+ event.clientY;
  document.getElementById("wynik").innerHTML = coor; 
})

</script>

</body>
</html>
