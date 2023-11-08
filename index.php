<?php

$michis_felinos = true;
$michis_4_patas = true;
$michis_vuelan = false;
$michis_porgraman_con_php = false;

//And
var_dump($michis_felinos && $michis_4_patas);
echo "\n";

//Or
var_dump($michis_4_patas || $michis_vuelan);
echo "\n";

//Not
var_dump(!$michis_4_patas);
echo "\n";

// Experimentos que te va a hacer decir waaaaaaaaaaaaat
$resultado = $michis_4_patas and $michis_porgraman_con_php; // hay una diferencia entre el and de palabras y el and conj simbolo && que vamos a ver en la siguiente clase
var_dump($resultado);

echo "\n";

//reto
// Suponiendo estas variables
$es_un_gato_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;

// ¿Cuál es el resultado?
$es_un_gato_grande && $le_gusta_comer; //true
$es_un_gato_grande || $sabe_volar; //true
$sabe_volar || $tiene_2_patas; //false
!$le_gusta_comer; //false
!$le_gusta_comer || $es_un_gato_grande; //true