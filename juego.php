<?php
include_once 'adivina.php';
$jugar = true;
# Mensaje de bienvenida
echo "Bienvenido al juego Adivina el número\n";
echo "Adivina el número con las oportunidades que ofrece cada nivel";
do{
    echo "Selecciona tu nivel con el número que indica el mismo:\n";
    while(true){
        echo "1. Fácil - 2. Normal - 3. Dificil\n";
        echo "NIVEL A JUGAR: ";
        $nivel = validar($nivel, 1, 3);
        if($nivel != false){break;}
    }
    #Determinar oportunidades
    $num_intentos = nivel($nivel);
    $random = num_random();
    echo "El juego inicia ahora\n";
    for($i=1; $i==$num_intentos; $i++){
        while(true){
            echo "Ingresa el número que estoy pensando (es del 1 al 100): ";
            echo "NUMERO: ";
            $numero = validar($numero, 1, 100);
            if($numero != false){break;}
        }
        $es_igual = compraborar_valor($numero, $random);
        if($es_igual){
            mensaje_final($i, $random, $es_igual);
            break;
        }
        consejo($numero, $random);
        if($i==$num_intentos){
            mensaje_final($i, $random, false);
        }
    }
    echo "\n\nEl juego ha terminado";
    while(true){
        echo "Te gustaría volver a jugar?";
        echo "1. Si - 2. No: ";
        echo "OPCION: ";
        $opc = validar($opc, 1, 2);
        if($opc != false){break;}
    }
    if($opc == 2){
        $jugar = false;
    }
}while($jugar);


?>