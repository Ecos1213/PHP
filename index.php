<?php

// si el usuario solo nos pasa un solo parametro lo que podemos hacer es usar valores por defecto dentro de nuestros parametros de nuestras funciones
// esto lo podemos hacer definiendo las variables dentro de la funcion podemos igualar los parametros con un valor y en caso de que el usuario no pase el parametro queda por defecto con el valor que definimos pero si el usuario pasa el parametro queda con el valor que paso el usuario

function suma($a = 1, $b = 1) {
    echo "La suma de $a + $b es: " . $a + $b . "\n";
}


suma(1, 2);
suma(5, 8);
suma(7, 22);

// como colocamos valores por defecto ya podemos usar las funciones con un parametro
suma(1);

echo "\n";

//unpacking, el unpacking en php se lleva bien con los arreglos
$arreglo1 = [1, 2, 3];
$arreglo2 = [4, 5, 6];

// si queremos unir dos arrays en unos solo podemos incluso usar el metodo array_merge y esto unira los dos arrays pero hay una manera interesante de unir estos dos arreglos y a esto se le llama array unpacking que es lo siguiente
$resultado = [...$arreglo1, ...$arreglo2]; // basicamente el array unpacking es colocar tres puntos ... antes del arreglo y desempaquetara el arreglo en este caso desempaquetara el arreglo primero y despues el segundo dentro del array igual que javascrfipt
var_dump($resultado);
echo "\n";

// el array unpacking tambien funciona en las funciones
$numeros = [1,2];
$nuemros2 = [50, 20];
$nuemros3 = [10000, 2];

suma_arreglo(...$numeros); // lo que hace el array unpacking en este metodo es desmpequetar segun las variables que colocamos como parametros esto quiere decir que 1 va a valer $a y 2 va a valer $b en este caso
suma_arreglo(...$nuemros2);
suma_arreglo(...$nuemros3);

// una cosa a tener encuenta de las funciones es que no importa en donde esta definida primero lo que hace php cuando se llama una funcion es ir a la definicion de la funcion y despues ejecutar la funcion
function suma_arreglo($a, $b) {
    echo "La suma de $a + $b es: " . $a + $b . "\n";
}

// otra cosa que podemos hacer con las funciones, es si necesitamos una funcion que sume infinidad x de numeros, osea todo lo que el usuario nos pase como parametros en la funcion, esto lo podemos hacer tambien con el unpacking dentro del metodo usando el ... antes de la variable tomara cada parametro que pasemos dinamicamente cuando llamemos la funcion, lo que hara php con este parametro con el unpacking es que lo dejara en forma de array asi que podemos ahora usar un foreach o un ciclo para poder usar cada valor
function suma_infinita(...$numeros) {

    $suma = 0;

    foreach($numeros as $numero) {
        $suma += $numero ;
    }

    echo "La sumatoria es: $suma \n";
}


// ahora como vemos podemos colocar diferentes parametros en cada funcion o parametros de forma dinamica 
suma_infinita(1, 2);
suma_infinita(1, 2, 3);
suma_infinita(100, 40, 2, 9, 3);
