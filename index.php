<?php
/**
 * $_REQUEST es una variable global en PHP que se utiliza para recopilar datos de formularios HTML. 
 * Puede recopilar datos de formularios enviados tanto con el método HTTP POST como con el método HTTP GET. 
 * En otras palabras, $_REQUEST contiene datos de variables superglobales $_GET, $_POST y $_COOKIE.
 * 
 * Cuando se envía un formulario HTML con el método POST o GET, los datos del formulario se envían al script PHP del lado del servidor. 
 * $_REQUEST se utiliza para recoger estos datos y hacerlos accesibles en el script PHP.
 */
    print_r($_REQUEST); // puedes acceder al valor del campo Nombre como un array osea asi: $_REQUEST["Nombre"]; y asi podemos tomar el valor que se envia desde el formulario html

/**
 * Es importante tener en cuenta que el uso de $_REQUEST puede ser menos seguro que acceder directamente a $_POST o $_GET según el contexto de la aplicación. 
 * Esto se debe a que $_REQUEST incluye datos de cookies, y en algunas situaciones podría ser más seguro y específico utilizar 
 * $_POST o $_GET según el método de envío del formulario. Además, el uso adecuado de funciones como htmlspecialchars o mysqli_real_escape_string
 * es crucial para evitar problemas de seguridad como la inyección de código.
 */
?>

