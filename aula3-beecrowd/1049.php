<?php
    $vert = readline();
    $mam = readline();
    $oni = readline();
    
    if($vert == "vertebrado"){
        if($mam == "mamifero"){
            if($oni == "onivoro"){
                print("homem\n");
            }
            if($oni == "herbivoro"){
                print("vaca\n");
            }
        }
        if($mam == "ave"){
            if($oni == "onivoro"){
                print("pomba\n");
            }
            if($oni == "carnivoro"){
                print("aguia\n");
            }
        }
    }
    if($vert == "invertebrado"){
        if($mam == "inseto"){
            if($oni == "hematofago"){
                print("pulga\n");
            }
            if($oni == "herbivoro"){
                print("lagarta\n");
            }
        }
        if($mam == "anelideo"){
            if($oni == "hematofago"){
                print("sanguessuga\n");
            }
            if($oni == "onivoro"){
                print("minhoca\n");
            }
        }
    }
?>