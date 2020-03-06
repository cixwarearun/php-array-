<?php
//array_diff_ukey compares only the key and returns the result
 function myFunction($a,$b)
 {
     if($a==$b)
     {
         return 0;
     }
     return($a>$b)?1:-1;
 }
 $a1=['a'=>4,'b'=>10,'c'=>22,'k'=>'Arun'];
 $a2=['c'=>13,'f'=>10,'a'=>33];
 print_r(array_diff_ukey($a1,$a2,'myFunction'));
?>