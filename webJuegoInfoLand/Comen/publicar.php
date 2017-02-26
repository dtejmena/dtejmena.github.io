<?php 
$nombre = $_POST['nombre']; 
$comentario = $_POST['comentario']; 
$fecha = date("j-n-Y h:i:s" ); 
$fp=fopen("comentario.txt","a+" ); 
$salida=" 
<!-- start coment ip = {$_SERVER["REMOTE_ADDR"]} --> 
<TABLE bgcolor='#FFFF99' border=1 bordercolorlight='#C0C0C0' bordercolordark='#808080'> 
<TR valign=top> 
<TD width=300 height=28 bgcolor='#FFFF00' style='{border-color : #000000 #000000 #000000 #000000; border-style: solid; }'><div class='wpmd'> 
<div><font face='Adobe Heiti Std R' color='#FF0000' class='ws11'><B>$nombre</B></font><font face='Adobe Heiti Std R' class='ws11'> comento el <b>$fecha</b></font></div> 
</div> 
</TD> 
</TR> 
<TR valign=top> 
<TD width=300 height=82><div class='wpmd'> 
<div><font face='Adobe Heiti Std R' class='ws10'>$comentario</font></div> 
</div> 
</TD> 
</TR> 
</TABLE> 
<!-- finish coment -->"; 
fwrite($fp,$salida); 
fclose($fp); 
header("Location:comentarios.php" ); 
?><