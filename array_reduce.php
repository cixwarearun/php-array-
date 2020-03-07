<?php
//The array_reduce() function sends the values in an array to a user-defined function, and returns a string.
function myFunction($a1,$a2)
{
return $a1 . '=' . $a2;
}
$a=['a','b','c'];
print_r(array_reduce($a,'myFunction'));
?>