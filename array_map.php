<?php

//The array_map() function sends each value of an array to a user-made function, and returns an array with new values, given by the user-made function.

function myFunction($c)
 {
     return $c*$c;
 }
 $a=[1,2,3,4,5,6];
 print_r(array_map('myFunction',$a));
 ?>