<?php

$string = 'The lazy fox jumped over the fence'; 

if (str_contains($string, 'lazy')) { // retorna verdadeiro ou falso se uma string contem uma substring
    echo "The string 'lazy' was found in the string\n";
}

if (str_contains($string, 'Lazy')) {
    echo 'The string "Lazy" was found in the string';
} else {
    echo '"Lazy" was not found because the case does not match';
}

?>