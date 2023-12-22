<?php
/*
    Ahora que ya conoces cómo podemos trabajar con PHP para hacer cosas más complejas te reto 
    a realizar los siguientes ejercicios para que continúes practicando tu lógica.

    Descuentos a la vista
    En una tienda de ropa hay descuento del 35% en todos sus productos, debes realizar una función que reciba el 
    valor de cada producto y le reste el 35% para mostrar luego su valor original y en cuánto queda su nuevo valor a pagar.

    De mayor a menor
    Escribe una solución para una tienda donde se requiere encontrar el orden en el cual se 
    publicarán los productos en su página web. Para esto, se debe contar con las dimensiones de cada producto 
    y aquellos más grandes (en ancho y alto) estarán en los primeros lugares, y aquellos más pequeños estarán al final.

    Tip: Como entrada, debes recibir el ancho y alto de cada producto. Analiza su tamaño y después puedes exponer 
    la lista de productos en el orden requerido como un array.

    ¡Ahora espero ver tus soluciones en los comentarios! Estaremos compartiendo las soluciones de toda nuestra comunidad.

    Disfrútalos, aprende mucho y recuerda hacer tus preguntas para resolver cada tarea.
*/

    function descuentoEnPrecio($productos) {
        for($i = 0; $i < count($productos); $i++) {
            foreach($productos[$i] as $llave => $valor) {
                if($llave === "precio") {
                    $valor -= (0.35 * $valor);
                    $_REQUEST["productos"][$i]["precio"] = $valor;
                }
            }
        }
    }

    function organizarDeMayorAMenor($productos) {
        usort($productos, function($a,$b){
            $dimesionA = $a["ancho"] * $a["altura"];
            $dimesionB = $b["ancho"] * $b["altura"];
            return $dimesionA < $dimesionB;
        });

        $_REQUEST["productos"] = $productos;
    }

    descuentoEnPrecio($_REQUEST["productos"]);
    organizarDeMayorAMenor($_REQUEST["productos"]);

    foreach($_REQUEST["productos"] as $llaves => $valor) {
        echo "Nombre: " . $valor["nombre"] . "</br>";
        echo "Precio: " . $valor["precio"] . "</br>";
        echo "Ancho: " . $valor["ancho"] . "</br>";
        echo "Altura: " . $valor["altura"] . "</br>";
        echo "</br>";
    }
    
    

    

?>

