<?php
//Compare the keys and values of two arrays, and return the differences:
  $a=['a'=>'red','b'=>'green','c'=>'black','d'=>'orange'];
  $b=['a'=>'red','b'=>'green','c'=>'black'];
$result=  array_diff_assoc($a,$b);
print_r ($result);
?>