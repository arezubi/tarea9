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
                <h1>Buscar pokemos</h1>
                <nav>
                <ul>
                    <li><a href = "index.php">Inicio</a></li>
                    <li><a href = "personas.php">Buscador de personas</a></li>
                </ul>
            </header>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="get">
            <label for="id">Introduzca el id del pokemon (1 - 898): </label>
            <input id="id" name="id" type="text">
            <input type="submit" value="Buscar">
        </form>
        <div class="pokemon">
        <?php
        $url = "";
        if(isset($_GET["id"])){
            $id = $_GET["id"];
            if ($id > 0 && $id < 899){
                $url = "https://pokeapi.co/api/v2/pokemon/" . $id;
                $infoPokemon = file_get_contents($url);
                $infoPokemon = json_decode($infoPokemon, true);

                $imagen = $infoPokemon["sprites"]["other"]["official-artwork"]["front_default"];
                echo "<img src = '" . $imagen . "' /> <br>";

                echo "ID: " . $infoPokemon["id"] . "<br>";
                echo "Nombre: " . ucfirst($infoPokemon["name"]) . "<br>";
                echo "Altura: " . $infoPokemon["height"]/10 . " m<br>";
                echo "Peso: " . $infoPokemon["weight"]/10 . " kg<br>";

                $tipos = $infoPokemon["types"];
                if(count($tipos)>1) {
                    echo "Tipos: ";
                } else {
                    echo "Tipo: ";
                }
                foreach ($tipos as $tipo){
                    $url = $tipo["type"]["url"];
                    $infoTipo = file_get_contents($url);
                    $infoTipo = json_decode($infoTipo, true);
                    echo $infoTipo["names"]["5"]["name"] . " ";    
                }
                echo "<br>";
            } else {
                echo "No hay ningun pokemon con ese ID";
            }            
        }         
    ?>
        </div>
        <footer>
                    Andrés Reyes Zubikarai - 51116284-A
            </footer>
    </body>
</html>