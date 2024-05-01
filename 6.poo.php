<?php 

class Color{//una clase es un modelo que comparten mismo comportamientos y caracteristicas.

    //propiedades o atributos
    public $lente; //atributos, son publicas para poder acceder a ellas desde cualquier parte del codigo
    public $jockey; //atributos

    

    public function Accesorio(){ 
        echo "<p>Accesorio Lente de: $this->lente y Jockey de color: $this->jockey</p>";   
    }//metodo

}

$a = new Color(); //instanciar una clase
$a->lente = "Azul"; //asignando valores a los atributos
$a->jockey = "Rojo"; //asignando valores a los atributos
$a->Accesorio(); //llamando al metodo

$b = new Color(); //instanciar una clase
$b->lente = "Rojo"; //asignando valores a los atributos
$b->jockey = "Blanco";//asignando 
$b->Accesorio();//llamado al metodo

