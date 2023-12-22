<?php

$form = "<form action='index.php' method='post'>";
$button = "<button>Enviar</button>";
$cierreForm = "</form>";
$precio = 0;
$productos = array(
    array(
        "nombre" => "Lavadora",
        "altura" => 12,
        "ancho" => 5,
        "precio" => rand(1000,10000),
    ),
    array(
        "nombre" => "Licuadora",
        "altura" => 4,
        "ancho" => 5,
        "precio" => rand(1000,10000),
    ),
    array(
        "nombre" => "Horno",
        "altura" => 120,
        "ancho" => 50,
        "precio" => rand(1000,10000),
    ),
    array(
        "nombre" => "Microhondas",
        "altura" => 5,
        "ancho" => 10,
        "precio" => rand(1000,10000),
    ),
    array(
        "nombre" => "Estufa",
        "altura" => 100,
        "ancho" => 50,
        "precio" => rand(1000,10000),
    ),
);

for($i = 0; $i < count($productos); $i++) {
    $form .= "Nombre del producto <input name='productos[$i][nombre]' type='text' value='" . $productos[$i]["nombre"] . "' /> </br>";
    $form .= "Ancho del producto <input name='productos[$i][altura]' type='text' value='" . $productos[$i]["ancho"] . "' /> </br>";
    $form .= "Altura del producto <input name='productos[$i][ancho]' type='text' value='" . $productos[$i]["altura"] . "' /> </br>";
    $form .= "Modifica el valor del precio del producto <input name='productos[$i][precio]' type='text' value='" . $productos[$i]["precio"] . "' /> </br> </br>";
}


echo $form.$button.$cierreForm;

?>