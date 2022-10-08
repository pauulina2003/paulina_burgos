<?php

$entrada = readline('Introdueix des de l\'entrada standard: ');
echo "Taula de multiplicar del $entrada\n";
for ($i = 0; $i < 11; $i++) {
    $result = (int)$entrada * (int)$i;
    echo "$entrada * $i = $result\n";
}
?>
