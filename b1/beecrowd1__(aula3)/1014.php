<?php
    $km = readline();
    $li = readline();

    $quantite = $km / $li;
    $quantite = number_format($quantite, 3, ".", "");
    print($quantite." km/l\n");
?>