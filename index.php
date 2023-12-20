<?php
 /**
  * PHP es un lenguaje con el cual podrás llevar a cabo todo tipo de proyectos y además desarrollar una excelente lógica de programación de forma muy sencilla.
  * Como siempre, la documentación será tu mejor amiga para encontrar cómo y por qué funciona cada parte del lenguaje para que tú te ocupes de desarrollar las mejores soluciones con código.
  *
  * Ahora te reto a resolver estos ejercicios donde pondrás en práctica los conocimientos más simples haciendo uso de tu lógica y por supuesto, de PHP.
  *
  * ¡No olvides poner tus soluciones en la sección de aportes!
  *
  * Con una condición…
  * En una escuela están almacenando los juguetes favoritos de los estudiantes de acuerdo a su edad en un lugar específico de la bodega de esta forma:
  * 
  * Quienes sean menores de 5 años tendrán sus espacios en la parte inferior de la bodega.
  * Quienes tengan entre 5 y 7 años tendrán sus espacios en la parte media de la bodega.
  * Quienes tengan más de 7 años tendrán sus espacios en la parte alta de la bodega.
  * Quienes no tengan registro de su edad aún tendrán un espacio de almacenamiento en la bodega de al lado.
  * Según una lista que contiene las edades de cada estudiante debes validar su edad y mostrar a través de un mensaje en dónde tendrán que almacenar sus juguetes.
  *
  * Por ejemplo:
  *
  * El estudiante con 4 años tendrá sus juguetes en la parte inferior de la bodega.
  * El estudiante con 6 años tendrá sus juguetes en la parte media de la bodega.
  * En estudiante con 10 años tendrá sus juguetes en la parte alta de la bodega.
  * Medio árbol de Navidad
  * Dibuja medio árbol de Navidad usando solo asteriscos como se indica en el siguiente ejemplo:
  
  *
  **
  ***
  ****
  *****
  * La altura de este árbol debe ser dinámica, si le dices que tendrá 10 de alto, entonces tendrá 10 asteriscos.
  *
  * Tip: Usa un ciclo para realizar esta actividad.
  *
  * ¡Nos vemos en la siguiente clase para empezar con nuestro proyecto!
  */

  function almacenandoPorEdad($edad = null) {
    if($edad < 5 && !empty($edad)) {
        echo "El estudiante con $edad años tendra sus juguetes en la parte inferior de la bodega. \n";
    }else if($edad > 5 && $edad < 7) {
        echo "El estudiante con $edad años tendra sus juguetes en la parte media de la bodega. \n";
    }else if($edad > 7) {
        echo "El estudiante con $edad años tendra sus juguetes en la parte alta de la bodega. \n";
    }else {
        echo "El estudiante tendra sus juguetes en la bodega de al lado. \n";
    }
  }

  function arbolDeNavidad($tamañoDePisos = 1) {
    $asterisco = "";
    for($i = 0; $i < $tamañoDePisos; $i++) {
        $asterisco .= "*";
        echo $asterisco;
        echo "\n";

    }
  }


  almacenandoPorEdad(4);
  almacenandoPorEdad(6);
  almacenandoPorEdad(10);
  almacenandoPorEdad();

  arbolDeNavidad(5);


?>

