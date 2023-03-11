<?php
    $nnum = readline();
    for($i = 1; $i <= $nnum; $i++){
        if($nnum % $i == 0){
          print($i."\n");
        }
    }
?>