<?php
    $linha1 = readline();

    $val1 = explode(' ', $linha1);
    
    $v1 = floatval($val1[0]);
    $v2 = floatval($val1[1]);
    $v3 = floatval($val1[2]);
    $v4 = floatval($val1[3]);
    
    $media1 = ($v1*2+$v2*3+$v3*4+$v4*1)/10;
    $media1 = intval(($media1*10.0))/10.0;
    $media1 = number_format($media1, 1, ".", "");

    
    print("Media: $media1\n");
    
    if($media1 < 5.0){
        print("Aluno reprovado.\n");
    }else if($media1 >= 5.0 && $media1 <= 6.9){
        
        print("Aluno em exame.\n");
        $notat = readline();
        print("Nota do exame: $notat");
        
        $media2 = ($media1 + $notat)/2;
        $media2 = number_format($media2, 1, ".", "");
        
        if($media2 >= 5.0){
            print("\nAluno aprovado.\n");
            print("Media final: $media2\n");
        }else{
            print("\nAluno reprovado.\n");
            print("Media final: $media2\n");
        }
        
    }else if($media1 >= 7.0){
        print("Aluno aprovado.\n");
    }
?>