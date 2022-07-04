<?php 

if(isset($_SESSION['autenticado'])){
    $oculto = "hidden";
    $log = "";
}else{$oculto = ""; $log = "hidden";}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <div><form <?php echo $oculto ?>  action="/home" method="post">
Usuario  <input type="text" name="usuario"> Password 
<input type="password" name="password">  
<input type="submit" value="Iniciar Sesión"></form></div> <br>
<div <?php echo $log ?>> <h2>Usuario:</h2> <h2><?php echo $_SESSION['nombreUsuario'];?></h2></div>

<div <?php echo $oculto  ?> ><a href="/blog/nuevoUsuario"> Registrarse</a> </div>

<br><br><br>

<h1><?php echo "BLOG HOME PAGE CHE BO"; echo "<br><br>"; ?></h1>

<?php foreach(($publicaciones=PublicacionControlador::ListarTodos()) as $publicacion) :?>

<b>AUTOR:</b> <?=  $publicacion['nombreAutor'] . " " . $publicacion['apellidoAutor'] ?><br>
<B>PUBLICADO:</B> <?=  $publicacion['fechaHora'] ?><br>
<b><form action="/blog/verPublicacion" method="post"><input type="hidden" name = "idPublicacion" value= "<?= $publicacion['idPublicacion'] ?>">
<input type="submit" value="Ver">
</form><br><br>

<?php endforeach; ?>

</body>
</html>