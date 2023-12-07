<?php

    // si queremos interactuar php con html lo que podemos hacer es interactuar directamente escribiendo html en php, por esta razon en un inicio colocamos el tag de apertura como de final de php
    // si queres usar html directamente recuerda que tienes que ejecutarlo de un servidor local asi como vimos en el curso anterior instalando xampp o usando linux en xampp deberia ejecutarse desde la carpeta htdocs en linux es var/www/html/index.php
    // recuerda como estamos usando html estoy obligado a colocar el tag final de php
    $zorritos = [
        "https://randomfox.ca/images/1.jpg",
        "https://randomfox.ca/images/2.jpg",
        "https://randomfox.ca/images/3.jpg",
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola! esto es HTML desde PHP!</h1>
    <?php foreach($zorritos as $zorrito) { ?>
        <img src="<?php echo $zorrito //aca imprimos las urls de las imagenes de los zorros y ten encuenta que y como vemos tambien podemos usar etiquetas de php de esta manera?>" >
    <?php } ?>
</body>
</html>