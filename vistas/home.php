<?php $oculto=""; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div><form <?php echo $oculto ?>  action="/home" method="post">Usuario <input type="text" name="usuario"> Password 
<input type="password" name="password"></form></div>
<br><br><br>

<h1><?php echo "BLOG HOME PAGE CHE BO"; echo "<br><br>"; ?></h1>

<?php foreach(($publicaciones=PublicacionControlador::ListarTodos()) as $publicacion) :?>

<b>AUTOR:</b> <?=  $publicacion['nombre'] . " " . $publicacion['apellido'] ?><br>
<B>PUBLICADO:</B> <?=  $publicacion['fechaHora'] ?><br> <br> 

<?php endforeach; ?>





</body>
</html>








