<?php
function esVocal($char)
{
    return in_array($char, ['a', 'e', 'i', 'o', 'u']);
}

function separarVocalsDeConsonants($str)
{
    $vocales = "";
    $consonantes = "";
    foreach (str_split($str) as $char) {
        if (esVocal($char)) {
            $vocales .= $char;
        } else {
            $consonantes .= $char;
        }
    }
    return $vocales .= $consonantes;
}

echo(separarVocalsDeConsonants("Rafa")); //aaRf
echo(separarVocalsDeConsonants("otorrinolaringologo"));  //ooioaioootrrnlrnglg
?>