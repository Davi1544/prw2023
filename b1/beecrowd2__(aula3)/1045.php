<?php
    
    $linha1 = readline();

    $val1 = explode(' ', $linha1);
    
    $a = floatval($val1[0]);
    $b = floatval($val1[1]);
    $c = floatval($val1[2]);

    $numbs = array($a, $b, $c);
    rsort($numbs);
    $a = $numbs[0];
    $b = $numbs[1];
    $c = $numbs[2];
    
    if($a <= 0 || $b <= 0 || $c <= 0){
      print("NAO FORMA TRIANGULO\n");
    }
    else if($a >= ($b + $c) || $b >= ($a + $c) || $c >= ($a + $b)){
      print("NAO FORMA TRIANGULO\n");
    }else{
      if(($a*$a) == ($b*$b + $c*$c)){
        print("TRIANGULO RETANGULO\n");
      }
      if(($a*$a) > ($b*$b + $c*$c)){
        print("TRIANGULO OBTUSANGULO\n");
      }
      if(($a*$a) < ($b*$b + $c*$c)){
        print("TRIANGULO ACUTANGULO\n");
      }
      if($a == $b && $a == $c && $b == $c){
        print("TRIANGULO EQUILATERO\n");
      }
      if($a == $b && $c != $a){
        print("TRIANGULO ISOSCELES\n");
      }
      if($a == $c && $b != $a){
        print("TRIANGULO ISOSCELES\n");
      }
      if($c == $b && $a != $b){
        print("TRIANGULO ISOSCELES\n");
      }
    }
?>