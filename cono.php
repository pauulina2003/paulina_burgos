<?php

function volumenCono($radio, $altura)
{
    return pow($radio, 2) * M_PI * $altura * (1 / 3);
}

echo volumenCono(3, 4);
?>