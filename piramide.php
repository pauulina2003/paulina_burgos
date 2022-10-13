<?php

for ($x = 1; $x <= 10; $x++) {
    echo str_repeat("&nbsp", 10-$x);
    echo str_repeat("*&nbsp", $x);
    echo "<br>";
}