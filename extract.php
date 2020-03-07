<?php
//The extract() function imports variables into the local symbol table from an array.
$array = ['a'=>'arun','b'=>'bibek','c'=>'anita','d'=>'binod'];
extract($array);
echo "\$a = $a; \$b = $a; \$c = $c";
?>