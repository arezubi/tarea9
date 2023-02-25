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
            </header>
            <main>
                <div class = "personas">
                    <?php
                    $response = file_get_contents("https://randomuser.me/api/?results=6");
                    $response = json_decode($response);
                    foreach ($response->results as $result){
                        $code = "\t\t\t<div class=\"person\">\n";
                        $code .= "\t\t\t\t<img src=\"{$result->picture->large}\">\n";
                        $code .= "\t\t\t\t<h3 class=\"name\">{$result->name->first} {$result->name->last}</h3>\n";
                        $code .= "\t\t\t\t<p class=\"username\">{$result->login->username}</p>\n";
                        $code .= "\t\t\t</div>\n";
                        echo $code;
                    }
                    ?>
                </div>
            </main>
            <footer>
                    Andrés Reyes Zubikarai - 51116284-A
            </footer>
        </div>
    </body>
</html>