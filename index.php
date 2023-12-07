<?php

function clear() {
    if(PHP_OS == "WINNT") { // php tiene una constante predefinida que es PHP_OS esto es una constante que nos dice cual es el sistema operativo en el cual mi programa se esta ejecutando la palabra WINNT hace referencia a windows
        //system("cls"); // el metodo system me permite directamente ejecutar comandos del sistema
        //Para los que no les funcione system("cls") pueden utilizar popen('cls', 'w');
        popen("cls", "w"); 
        /*
            La función popen en PHP se utiliza para abrir una tubería (pipe) a un proceso. Permite la ejecución de un comando externo y proporciona un canal de comunicación entre el script de PHP y el proceso invocado. La función popen devuelve un descriptor de archivo que se puede leer o escribir según sea necesario.
            En el contexto de la programación y los sistemas operativos, una "tubería" o "pipe" se refiere a un mecanismo que permite la comunicación entre dos procesos. Es una forma de redirigir la salida de un proceso para que sirva como entrada de otro proceso.

            En el caso específico de PHP y la función popen, cuando se abre una "tubería" usando popen, estás creando un canal de comunicación entre tu script PHP y un proceso externo. La tubería se utiliza para enviar datos desde tu script al proceso externo o para recibir datos del proceso externo de vuelta a tu script.
        */
    } else {
        system("clear"); // clear para sistema linux o unix y cls para windows
    }
}

function startGame($discovered_letter, $word_length, $attempts) {

    echo "Palabra de $word_length letras \n\n";
    printHangman($attempts);
    echo $discovered_letter . "\n\n"; 
    
    // pedimos al usuario que escriba
    $player_letter = readline("Escribe una letra: ");
    $player_letter = strtolower($player_letter);

    return $player_letter;

}

function letters($choosen_word, $player_letter, $offset, $discovered_letter) {
    
    $offset = 0; // posicion donde comienza a buscar el strpos

    // como vimos en el curso anterior de la clase de presedencia, podemos poner variables diractamente y asignar un valor, tanto en ciclos como en definicion de varalbes y etc. php ya se encargara de resolver la asignacion de variable
    while( ($letter_position = strpos($choosen_word, $player_letter, $offset)) !== false ) { // strpos lo que hace es encontrar la posicion de la primera ocurrencia de un substring en un string (osea encuentra la posicion numerica segun lo que pasemos en parametro y al encontrar solo un valor por ejemplo digamos que tenemos la letra o repetidamente en un string solo devolvera la primera vez que encuentre esa o por eso usamos el ciclo para que encuentre las demas letras), el primer parametro seria el string y el segundo parametro seria la letra a buscar, tiene un tercer parametro que es la posicion a buscar y devuelve la posicion si encuentra el valor y si no encuentra un valor devuelve un false
        $discovered_letter[$letter_position] = $player_letter;
        $offset = $letter_position + 1;
    }

    return [
        "discovered_letter" => $discovered_letter,
        "offset" => $offset,
    ];

}

function printMessageFail($attemps) {

    clear();
    $attemps++;
    echo "Letra incorrecta. Te quedan " .  (MAX_ATTEMPS - $attemps) . " intentos. ";
    // como el ciclo se repite muy rapido todo incluso el clear no se ve la respuesta del juego entonces podemos pausar con el metodo sleep los segundos que necesitamos antes de seguir con el siguiente iteracion del ciclo
    sleep(2);
    return $attemps;

}

function printHangman($attempts) {
    
    switch ($attempts) {

        case 0:
            echo "
            +---+
            |   |
                |
                |
                |
                |
            =========
            ";
            break;
           
        case 1:
            echo "
            +---+
            |   |
            O   |
                |
                |
                |
            =========
            ";
            break;

        case 2:
            echo "
            +---+
            |   |
            O   |
            |   |
                |
                |
            =========
            ";
            break;

        case 3:
            echo "
            +---+
            |   |
            O   |
           /|   |
                |
                |
            =========
            ";
            break;

        case 4:
            echo "
            +---+
            |   |
            O   |
           /|\  |
                |
                |
            =========
            ";
            break;

        case 5:
            echo "
            +---+
            |   |
            O   |
           /|\  |
           /    |
                |
            =========
            ";
            break;

        case 6:
            echo "
            +---+
            |   |
            O   |
           /|\  |
           / \  |
                |
            =========
            ";
            break;

    }

    echo "\n\n";

}

function endGame($attemps, $choosen_word, $discovered_letter) {

    clear();

    if($attemps < MAX_ATTEMPS) 
        echo "¡Felicidades! Has adivinado la palabra. \n";
    else 
        echo "Suerte para la próxima, amigo \n";
    
    printHangman($attemps);
    echo "La palabra es: $choosen_word \n";
    echo "Tu descuibriste $discovered_letter";
    
    echo "\n";

}


$possible_words = ["Bebida", "Prisma", "Ala", "Dolor", "Piloto", "Baldosa", "Terremoto", "Asteroide", "Gallo", "Platzi"];

define("MAX_ATTEMPS", 6);

echo "¡Juego del ahorcado! \n\n";

// Inicializamos el juego
$choosen_word = $possible_words[rand(0, 9)];
$choosen_word = strtolower($choosen_word); // esta funcion coloca las palabras en minuscula del parametro que le pasemos y strtoupper en mayusculas
$word_length = strlen($choosen_word); // strlen esta funcion devuelve la cantidad de caracteres que tiene el parametro en string

/*
 str_pad Rellena un string hasta una longitud determinada con otro string
ejemplo:

$input = "Alien";
echo str_pad($input, 10);                      // produce "Alien     "
echo str_pad($input, 10, "-=", STR_PAD_LEFT);  // produce "-=-=-Alien"
echo str_pad($input, 10, "_", STR_PAD_BOTH);   // produce "__Alien___"
echo str_pad($input,  6, "___");               // produces "Alien_"
echo str_pad($input,  3, "*");                 // produces "Alien"

*/
$discovered_letter = str_pad("", $word_length, "_");
$attemps = 0;

do{
    $player_letter = startGame($discovered_letter, $word_length, $attemps);
    
    if( str_contains($choosen_word, $player_letter) ) { // la funcion str_contains devuelve true si existe la letra en un string, tiene dos parametros, el primer parametro es la palabra y el segundo parametro es la letra que se va a buscar en esa palabra

        // Verificamos todas las ocurrencias de esta letra para remplazarla, osea verificamos cuantas veces aparece la letra dentro de la palabra y tambien en donde esta esa letra en la palabra
        $letters = letters($choosen_word, $player_letter, $offset, $discovered_letter);
        $offset = $letters["offset"];
        $discovered_letter = $letters["discovered_letter"];
    
    }
    else {
        $attemps = printMessageFail($attemps);
    }

    clear();
    
}while($attemps < MAX_ATTEMPS && $discovered_letter != $choosen_word); //el ciclo se detendra si los intentos se sobrepasan de los maximos intentos o si el jugador adivino ya la palabra


endGame($attemps, $choosen_word, $discovered_letter);