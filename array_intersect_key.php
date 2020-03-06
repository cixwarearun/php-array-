<?php
//print out the maching key  of the arrays
   $a1=['a'=>4,'b'=>10,'c'=>22,'k'=>'Arun'];
   $a2=['c'=>13,'b'=>10,'a'=>33];
   print_r(array_intersect_key($a1,$a2));
?>