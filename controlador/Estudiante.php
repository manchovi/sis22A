<?php
public class Estudiante{

var Nombre;
var Apellidos;
var Direccion;

function recursividad($a){
    if ($a < 20) {
        echo "$a\n";
        recursividad($a + 1);
}
}

function add($a,$b){
    return $a+$b;
}

function sub($a,$b){
    return $a-$b;
}

function hello()
{
print("Hello!");
}

hello();

}

?>
