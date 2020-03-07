<?php
//The array_udiff() function compares the keys and values of two or more arrays, and returns the differences.
//array_udiff_uassoc(array1, array2, array3, ..., myfunc_key, myfunc_value)
    function myKeys($a,$b)
    {
        if($a===$b)
        {
            return 0;
        }
        else
        {
            return ($a<$b)?-1:1;
        }-1;1;
    }
    function myvalues($a,$b)
    {
        if($a===$b)
        {
            return 0;
        }
        else
        {
            return ($a<$b)?-1:1;
        }-1;1;
    }
  $a=['a'=>'red','b'=>'green','c'=>'black','d'=>'orange','e'=>'maka'];
  $b=['a'=>'red','b'=>'green','c'=>'black'];
    $result=array_udiff_uassoc($a,$b,'mykeys','myValues');
    print_r ($result);
?>