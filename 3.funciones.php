<?php

echo '1.- Funciones sin parámetros <br>';
function saludo(){
    echo "Hola Mundo con PHP";

} //hasta aquí se llama, declarar una función
saludo(); // se llama a la función
echo'<br><br>';

echo '2.- Funciones sin parámetros <br>';
function saludo2($nombre){
    echo "Hola Mundo, aquí $nombre";

} //hasta aquí se llama, declarar una función
saludo2('Javier desde PHP'); // se llama a la función
echo'<br><br>';

echo '3.- Funciones con retorno <br>';
function retorno($retornar){
    return $retornar;
}
echo retorno('Retornando la función desde el parámetro retornar ');
