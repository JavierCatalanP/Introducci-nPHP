<?php

echo '1.- Variable tipo númerico = ';
$numero = 10;
echo $numero;
echo "<br> <h2> Esto es un número: $numero</h2>";
echo'<br><br>'; //Salto de linea      

echo '2.- Variable de tipo númerico = ';
echo 'Esto es un número: '.$numero.' (Uniendo una 
variable con una cadena de texto)';
echo'<br><br>'; //Salto de linea 

echo '3.- Variable tipo texto =';
$texto = 'Hola texto';
echo 'Mi saludo  '.$texto;
echo'<br><br>'; //Salto de linea

echo '4.- Variables de tipo Booleano = ';
$booleana = true;
echo "Esto es una variable booleana: ".$booleana;
echo'<br><br>'; //Salto de linea

echo'5.- Variables de tipo arreglo = ';
$arreglo = array("Javier", "José", "Juan", "Joaquin");
print_r($arreglo);
echo '<br> $arreglo[0] = '.$arreglo[0];
echo '<br> $arreglo[1] = '.$arreglo[1];
echo '<br> $arreglo[2] = '.$arreglo[2];
echo '<br> $arreglo[3] = '.$arreglo[3];
echo'<br><br>'; //Salto de linea

/*variable: Esta es la variable para la que desea imprimir la información.
return: Este es un parámetro opcional que, si se establece en true, hará que print_r devuelva la información como una cadena en lugar de imprimirla directamente.
Aquí hay un ejemplo de cómo usar print_r: 

$a = array("rojo", "verde", "azul");
print_r($a);

Esto producirá la siguiente salida:
Array
(
    [0] => rojo
    [1] => verde
    [2] => azul
)

var_dump(): Este método muestra información detallada sobre una variable, incluyendo su tipo de dato y su valor. También puede mostrar información sobre arrays y objetos.
ejemplo:

$array = array(
    'name' => 'John Doe',
    'age' => 30,
    'skills' => array('PHP', 'JavaScript', 'HTML')
);

var_dump($array);

Esto reproducirá la sigueinte salida:
array(3) {
  ["name"]=>
  string(8) "John Doe"
  ["age"]=>
  int(30)
  ["skills"]=>
  array(3) {
    [0]=>
    string(3) "PHP"
    [1]=>
    string(10) "JavaScript"
    [2]=>
    string(4) "HTML"
  }
}
*/


echo '6.- Variables tipo arreglo con propiedades, ejemplo, variable "Colores". <br>';

$colores = array("color1"=>"rojo", "color2"=>"azul", "color3"=>"blanco");
print_r($colores);//imprimo todo el array con sus propiedades

echo "<br>La propiedad del Color 1 es:".$colores["color1"]."<br>";
echo "La propiedad del Color 1 es:".$colores["color2"]."<br>";
echo "La propiedad del Color 1 es:".$colores["color3"]."<br>";
echo'<br><br>'; //Salto de linea

echo '7.- Variables de tipos objetos, ejemplo con variable "mueble"<br>';
$mueble = (object)["mueble1"=>"Silla", "mueble2"=>"Escritorio", "mueble3"=>"Sillón"];
print_r($mueble); //imprimo todos los objetos

echo '<br>Mueble 1 = '.$mueble->mueble1;
echo '<br>Mueble 2 = '.$mueble->mueble2;
echo '<br>Mueble 3 = '.$mueble->mueble3;
