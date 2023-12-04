<?php

function es_estudiante_legend($platzi_rank) {
    if($platzi_rank >= 20000) {
        echo "Eres un estudiante legend";
    }else {
        echo "Lo sentimos, aun no alcanzas el nivel legend";
    }
}

do {
    $platzi_rank_user = (int) readline("Por favor, dinos cual es tu Platzi Rank: "); // como readline nos da un string y php es completamente inteligente y lo convierte en un int cuando se usa dentro de la funcion pero para estar seguros usamos igual el casteo por seguridad

    es_estudiante_legend($platzi_rank_user);

    echo "\n";
}while(true);


