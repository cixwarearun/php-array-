<?php
$fruits=array('apple','orange','banana','pineapple','grapes');
//printing the fruits
print_r($fruits);
echo '<br>';
echo '<br>';
echo 'Spliting the array into the length of index 2::';
print_r(array_chunk($fruits,2));
?>