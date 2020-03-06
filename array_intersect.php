<?php
//print out the maching value  of the arrays
   $a1=['a'=>4,'b'=>10,'c'=>22,'k'=>'Arun'];
   $a2=['c'=>4,'b'=>10,'a'=>33];
   print_r(array_intersect($a1,$a2));
?>