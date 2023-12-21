<?php
/**
 * Desarrollar una aplicacion que muestra una lista de palabras que estan en desorden.
 * el usuario debe ordenar las letras para encontrar la palabra correcta e ingresarla.
 * despues de enviar sus resultados, el usuario podra ver si acerto o fallo y cual era la palabra correcta
 */

    $palabras = array("sol", "luna", "cielo", "luz", "estrellas", "lluvia");
    $form = "<form action='analisis.php' method='post'>";
    $button = "<button type='submit'>Enviar</button>";
    $cierreForm = "</form>";


    for($i=0; $i < count($palabras); $i++) {
        // el metodo str shuffle desordena la palbra aleatoriamente o mejor dicho Mezcla aleatoriamente la cadena
        $form .= "La palabra: " . str_shuffle($palabras[$i]) . " " . 
        " <input type='text' name='palabra". ($i)."'/>" .
        "</br>"; 
    }

    echo $form . $button . $cierreForm;
?>

