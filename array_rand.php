<?php 
//The array_rand() function returns a random key from an array, 
//or it returns an array of random keys if you specify that the function should return more than one key.
$a=['a'=>'arun','b'=>'bibek','c'=>'kusum','d'=>'alisha'];
$arrayRandom=array_rand($a,4);
echo $a[$arrayRandom[0]].'<br>';
echo $a[$arrayRandom[3]].'<br>';
echo $a[$arrayRandom[2]];
 
?>