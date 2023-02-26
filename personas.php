<?php
require_once 'GeneradorUsuariosAleatorios.php';

$generadorUsuarios = new GeneradorUsuariosAleatorios();
$usuarioGenerado = $generadorUsuarios->getUsuarioAleatorio();
$nombre=$usuarioGenerado['name']['first'];
$apellido=$usuarioGenerado['name']['last'];
$imagen=$usuarioGenerado['picture']['large'];
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Tarea 9 - DWES</title>
    </head>
    <body>
        <div class = "content">
            <header>
                <h1>Buscar personas</h1>
                <nav>
                <ul>
                    <li><a href = "index.php">Inicio</a></li>
                    <li><a href = "pokemon.php">Buscador de pokemos</a></li>
                </ul>
        </nav>
            </header>
            
            <main>
                <div class = "personas">
                    <img src="<?= $imagen?>">
                    <div><p>Nombre: <?=$nombre . ' ' . $apellido?>
                    
                    
                </div>
            </main>
            <footer>
                    Andrés Reyes Zubikarai - 51116284-A
            </footer>
        </div>
    </body>
</html>