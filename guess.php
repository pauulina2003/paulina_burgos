<?php

$num = rand(0,10);
$intentos = 5;
$entrada = -1;
while ($entrada != $num || $intentos < 0){
    $entrada = readline("Adivina que un numero entre el 0 y el 10\n");
    if ($entrada != $num){
        $intentos -= 1;
        if ($intentos == 0){
            echo "Te has quedado sin intentos, el numero correcto era $num\n";
            break;
        }else {
            echo "Ese no es, te quedan $intentos\n";
        }
    }else {
        echo "Felicidades, has adivinado el numero, era $num\n";
    }
}
?>