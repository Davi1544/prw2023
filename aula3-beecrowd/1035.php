<?php
    /*Leia 4 valores inteiros A, B, C e D. A seguir, se B for maior do que C e se D for maior 
    do que A, e a soma de C com D for maior que a soma de A e B e se C e D, ambos, forem positivos 
    e se a variável A for par escrever a mensagem "Valores aceitos", senão escrever 
    "Valores nao aceitos".*/

    $linha1 = readline();

    $val1 = explode(' ', $linha1);
    $a = intval($val1[0]);
    $b = intval($val1[1]);
    $c = intval($val1[2]);
    $d = intval($val1[3]);
 
    if($b > $c && $d > $a){
        if(($c + $d) > ($a + $b)){
            if($c > 0 && $d > 0 && $a % 2 == 0){
                print("Valores aceitos\n");
                return;
            }
        }
    }
    
    print("Valores nao aceitos\n");
?>