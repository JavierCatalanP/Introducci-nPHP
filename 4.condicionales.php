<?php
echo 'Condicionales entre 2 variables <br>';

$a = 10;
$b = 20;

if( $a > $b ) {
    echo $a.' Es mayor que: '.$b;
} 

else if($a == $b) {
    echo $a.' Es igual que: '.$b;
}
else {
    echo $a.' Es menor que: '.$b;
}
