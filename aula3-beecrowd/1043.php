<?php

    $linha1 = readline();

    $val1 = explode(' ', $linha1);
    $A = floatval($val1[0]);
    $B = floatval($val1[1]);
    $C = floatval($val1[2]);
        
    $ab = $A+$B;
    $ac = $A+$C;
    $bc = $C+$B;
        
    if ($ab>$C && $ac>$B && $bc>$A){
        
        $Pe = $A + $B + $C;

        $Pe = number_format($Pe, 1, ".", "");
        print("Perimetro = $Pe\n");
        
	 } else {
		
	    $Ar = (($A + $B) * $C)/2;
	    $Ar = number_format($Ar, 1, ".", "");
	
	    print("Area = $Ar\n");
    }
?>