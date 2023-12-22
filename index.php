<?php
/**
 * Como buena pratica todas los nombres de variable tienen que ser en ingles
 * aunque colocamos hizimos el formulario en forma dinamica a travez de strings y con la ayuda de echo logramos que lo vieramos en el navegador, no es la forma ideal en el cual manejemos codigo html, el codigo html tiene su propia estructura y debe ser manejado a travez de un frontend con lo que tenga su estructura html su extension html y realizes esta conexion con lenguaje como javascript    
 * manten una uniformidad en todo el documento esto implica que:
 * si trabajas en un cierto idioma todo el documento tiene que estar en ese idioma
 * tratar de llevar la declaracion de las variables en ingles
 * 
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

