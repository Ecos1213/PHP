<?php

function obtener_hora() {
    // Establecer la zona horaria a la de tu región
    date_default_timezone_set('America/Bogota'); // Reemplaza 'America/Bogota' con la zona horaria
    
    // Obtener la hora actual en el formato deseado
    return date("g:i:s A", time());
}

echo "¡Hola! ¿Me podrias decir que hora es? \n";
echo "¡Claro! Son las " . obtener_hora();

echo "\n";

