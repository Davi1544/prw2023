<?php
    
    function rImp($val, $tax){
      return ($val*$tax);
    }
    
    $sal = readline();
    settype($sal, 'double');
    
    $sal = number_format($sal, 2, ".", "");
    
    if($sal <= 2000.00){
      
      print("Isento\n");
      
    }else if($sal >= 2000.01 && $sal <= 3000.00){
      
      $sal = rImp(($sal-2000), 0.08);
      $sal = number_format($sal, 2, ".", "");
      print("R$ $sal\n");
      
    }else if($sal >= 3000.01 && $sal <= 4500.00){
      
      $sal = rImp(1000, 0.08) + rImp($sal-3000, 0.18);
      $sal = number_format($sal, 2, ".", "");
      print("R$ $sal\n");
      
    }else if($sal > 4500.00){
      
      $sal = rImp(1000, 0.08) + rImp(1500, 0.18)+ rImp($sal-4500, 0.28);
      $sal = number_format($sal, 2, ".", "");
      print("R$ $sal\n");
      
    }
?>