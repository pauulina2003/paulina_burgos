<?php

$num = rand(1,10);
$intentos = 5;
$entrada = -1;
while ($entrada != $num || $intentos < 0){
    $entrada = readline("Introdueix un número del 0 al 10 des de l'entrada standard: ");
    if ($entrada != $num){
        $intentos -= 1;
        if ($intentos == 0){
            echo "Has perdut, el número era: $num\n";
            break;
        }else {
            echo "Et queden $intentos intents\n";
        }
    }else {
        echo "Has guanyat, el número era: $num\n";
    }
}
?>