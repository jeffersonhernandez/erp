<?php
    session_start();
    if(isset($_SESSION["carrito"])){
        $numCarrito=$_SESSION["carrito"];
    }else{
        //Si no existe, cr�ela y as�gnele el timestamp de Unix por medio de la funci�n time(). Guarde el archivo.
    }
    $numCarrito=3;
    require_once('clases/db.php');
    require_once('clases/carrito.php');
    $importeCarrito=Carrito::totalCarrito($numCarrito);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Index nuevo</title>
<style>
</style>

</head>
<body>

<header>
</header>

<section>

</section>

<footer>

</footer>

</body>
</html>