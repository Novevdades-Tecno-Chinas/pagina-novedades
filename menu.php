<!DOCTYPE HTML>
  <link rel="stylesheet" href="esti2.css">
<div class="contenedor">
<header>
 <marquee direction="rigth" scrollamount="25p">
<font size="20" face="Arial" color="black">Novedades Tecno Chinas</font></marquee></header>
<body onLoad="autolmgFlip();">
<script languaje="javascript">
step=0;
function autolmgFlip(){
if (step<4) {step++;}
else {step=0;}
if (step==0)
{a.src="1.1.jpg";}
if (step==2)
{a.src="1.2.jpg";}
setTimeout("autolmgFlip()",1000);
if (step==3)
{a.src="1.3.jpg";}
}
</script>
<div clas="table-container">
<table class="default">
<tr>
<td><img  style="margin: 55px" src="1.1.jpg"; id="a" width="460px" height=350px"></td>
<td><img  style="margin: 55px " src="1.jpg"; id="b" width="460px" height=350px"></td>
</tr>
<tr>
<td><a href="http://localhost/paagina/relojes.php"><font style="margin: 150px"  size="8" face="Arial" color="black"> Relojes </font> </a></td>
<td><a href="http://localhost/paagina/lentes.php"><font style="margin: 150px"  size="8" face="Arial" color="black"> Lentes </font> </a></td>
<tr>
</table>
</div>
</div>
</body>
</html>