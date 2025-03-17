<?php
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
function mensaje_final($intento, $numero, $valor){
    if($valor){
        echo "Conseguiste adivinar el número: " + $numero + "en el intento: " + $intento + "\n";
        echo "Felicidades :)";
    } else {
        echo "Lo siento no lograste adivinar el número: " + $numero;
        echo "Intentalo la proxima vez :(";
    }
}
# Validar numero
function validar($numero, $rangoA, $rangoB){
    $numero = trim(fgets(STDIN)); // eliminar espacios
    $numero = strip_tags($numero); // eliminar codigo html inyectado
    if(ctype_digit($numero)){ // validar que solo hay numeros
        if($numero>=$rangoA && $numero<=$rangoB){
            return $numero; // validar que solo hay numeros validos
        } else {
            echo "Por favor solo ingrese números válidos\n";
            return false;
        }
    } else {
        echo "Por favor solo ingrese números\n";
        return false;
    }
}

# Consejo
function consejo($A, $B){
    if($A>$B){
        echo "\n\nEl número que ingresaste fue muy alto";
    } else {
        echo "\n\nEl número que ingresaste fue muy bajo";
    }
}

?>