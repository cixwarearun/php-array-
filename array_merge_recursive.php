<?php
//The array_merge_recursive() function merges one or more arrays into one array.
//The difference between this function and the array_merge() function is when two or more array elements have the same key.
// Instead of override the keys, the array_merge_recursive() function makes the value as an array.
 $a=['a'=>'arun','b'=>'bibek','c'=>'kusum','d'=>'alisha'];
 $b=['a'=>'dillip','c'=>'resika'];
 print_r(array_merge_recursive($a,$b));
?>