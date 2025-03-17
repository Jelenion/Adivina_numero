<?php
# Mensaje de bienvenida
echo "Bienvenido al juego Adivina el número\n";
# Seleccionar numero al azar
function num_random(){
    $numero = rand(1,100); // Dar numero aleatorio entre el 1 y el 100
    return $numero;
}
# Seleccionar el nivel
function nivel($nivel){
    $oportunidad = null;
    if($nivel==1){
        $oportunidad = 10;
    } else if($nivel==2){
        $oportunidad = 5;
    } else {
        $oportunidad = 3;
    }
    return $oportunidad;
}
# Ingresar opcion y comparar
function compraborar_valor($opcion, $numero){
    if($opcion==$numero){
        return true;
    } else {
        return false;
    }
}
# Mostrar mensaje final de partida
function mensaje_final($intento, $numero){
    if($intento==0){
        echo "Lo siento no lograste adivinar el número: " + $numero;
        echo "Intentalo la proxima vez :(";
    } else {
        echo "Conseguiste adivinar el número: " + $numero;
        echo "Felicidades :)"; 
    }
}
#


?>