<?php
$paraules = ["hola", "Php", "Html"];
$caracter = "h";

function conteCaracter($paraules, $caracter) {
    foreach ($paraules as $paraula) {
        if (stripos($paraula, $caracter) === false) {
            return false;
        }
    }
    return true;
}

echo conteCaracter($paraules, $caracter) ? "true" : "false";

?>