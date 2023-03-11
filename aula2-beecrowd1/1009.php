<?php
    $name = readline();
    $sal = readline();
    $vendas = readline();
    
    $comcomi = $sal + $vendas*0.15;
    $comcomi = number_format($comcomi, 2, ".", "");
	print("TOTAL = R$ ".$comcomi."\n");
?>