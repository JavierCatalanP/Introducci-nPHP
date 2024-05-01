<?php

$color1 = (object)["lente"=>"rojo", "jockey"=>"azul"];
$color2 = (object)["lente"=>"negro", "jockey"=>"blanco"];

function Accesorios($color){
    echo "<p>Accesorio de clor Lente: $color->lente, Jockey: $color->jockey</p>";
}
Accesorios($color1);
Accesorios($color2);
