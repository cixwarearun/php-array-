<?php
//The array_udiff() function compares the keys and values of two or more arrays, and returns the differences.
    function myFunction($a,$b)
    {
        if($a==$b)
        {
            return 0;
        }
        else
        {
            return ($a<$b)?-1:1;
        }-1;1;
    }
  $a=['a'=>'red','b'=>'green','c'=>'black','d'=>'orange'];
  $b=['a'=>'red','b'=>'green','c'=>'black'];
    $result=array_udiff_assoc($a,$b,'myFunction');
    print_r ($result);
?>