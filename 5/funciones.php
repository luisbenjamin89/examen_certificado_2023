<?php
function sumar(int $numero1 , int $numero2):float
{
    $resultado  = $numero1 + $numero2 ;

    return $resultado;
}

function restar(int $numero1 , int $numero2):string
{
    if ($numero1 > $numero2 ){
    $resultado = $numero1 - $numero2;

}
    else {
        $peracion = $numero1 - $numero2;
        $resultado="negativo $peracion ";}
    return $resultado;
}

function multiplicar(int $numero1 , int $numero2):float
{
    $resultado  = $numero1 * $numero2 ;

    return $resultado;
}

function dividir(int $numero1 , int $numero2):string
{
    if ( $numero2 == 0){
        $resultado = "No se puede dividir entre 0";

    }
    else {
        $resultado = $numero1 / $numero2;
        }
    return $resultado;
}