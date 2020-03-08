<?php
//The array_uintersect() function compares the values of two or more arrays, and returns the matches.
  function myFunction($a,$b)
  {
      if($a===$b)
      
      {
          return 0;

      }
      else
      return ($a>$b)?1:-1;
  }
  $c=['a'=>'arun','b'=>'sibu','c'=>'anita','d'=>'binod'];
  $d=['a'=>'arun','b'=>'anita','d'=>'binod'];
  print_r(array_uintersect($c,$d,'myFunction'));
?>