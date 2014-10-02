<!DOCTYPE html>
<html>
<head>	
<meta charset="UTF-8">	
</head>

<body>

<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:600italic' rel='stylesheet' type='text/css'>
	<head>
		<meta name="viewport" content="width=device-width">
		<title>Correo Movil</title>
		<link rel="stylesheet" href="estilos.css">
	</head>

	<header>
		<figure><img src="imagenes/usuario.png" ></figure>
		<h1>Bienvenido</h1>
	</header>

	<nav>
		<ul>
			<li><a href="#">Nuevos</a></li>
			<li><a href="#">Contactos</a></li>	
		</ul>
<?php
	include_once("includes/database.php");

	$usuarioActivo = $_GET["usuario"];
	$query= "SELECT usuario.Nombre, publicaciones.contenido, publicaciones.postID
								FROM mensajeria.usuario 
								JOIN mensajeria.publicaciones 
								ON publicaciones.postUserID = usuario.usuarioID";
	$resultado = mysqli_query($cxn,$query);

	while($row = mysqli_fetch_array($resultado)) {
	echo "<div class='colorUno'>";
		echo"<div>";
		echo	"<figure class='imagenUsua'><img src='imagenes/usuario.png' ></figure>";
		echo	"<article>";
				echo "<div class='username'><h6>".$row["Nombre"]."</h6></div>";
				echo "<p><h6>".$row["contenido"]."</h6></p>";
				echo "<h6><a href='favoritos.php?usuario=".$usuarioActivo."'>Favoritos</a></h6>";
		echo	"</article>";
		echo "</div>";
		echo "<div>";

		echo	"<figure class='imagenLike'><img src='imagenes/likes.png' ></figure>";
		echo	"<figure class='imagenComen'><img src='imagenes/comentario.png' ></figure>";
		echo "</div>";
	echo "</div>";

	echo "<div class='colorDos'>";
		echo"<div>";
		echo	"<figure class='imagenUsua'><img src='imagenes/usuario.png' ></figure>";
		echo	"<article>";
				echo "<div class='username'><h6>".$row["Nombre"]."</h6></div>";
				echo "<p><h6>".$row["contenido"]."</h6></p>";
				echo "<h6><a href='favoritos.php?usuario=".$usuarioActivo."'>Favoritos</a></h6>";
		echo	"</article>";
		echo "</div>";
		echo "<div>";

		echo	"<figure class='imagenLike'><img src='imagenes/likes.png' ></figure>";
		echo	"<figure class='imagenComen'><img src='imagenes/comentario.png' ></figure>";
		echo "</div>";
	echo "</div>";
}
?>



</body>

</html>
