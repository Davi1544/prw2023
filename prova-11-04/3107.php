<?php
  $mv = readline();
  $tkm = readline();
  $kmpl = readline();
  
  $hg = $tkm/$mv;
  $hg = number_format($hg, 2, ".", "");
  $tl = $tkm/$kmpl;
  $tl = number_format($tl, 2, ".", "");
  
  print("Total horas: $hg\n");
  print("Total combustivel: $tl\n");
?>