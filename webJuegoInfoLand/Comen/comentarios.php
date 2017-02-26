<html> 
<head> 
<title>Comentarios</title> 
</head> 
<body bgcolor="#CCFFCC"> 
<?php 
readfile ('comentario.txt'); 
?> 
<h1>Comentarios</h1> 
<form name="coment" action="publicar.php" method="post"> 
<p><b>Nombre:</b></p> 
<p><input type="text" name="nombre" size="30"/></p> 
<p><b>Comentario:</b></p> 
<p><textarea name="comentario" style="width:230px;height:100px;z-index:0"></textarea></p> 
<p><input type="submit" name="submit" value="Publicar"/></p> 
</form> 
</body> 
</html>