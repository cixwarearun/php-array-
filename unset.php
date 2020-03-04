<?php
  $animals= ['elephant','leopard','tiger'];
  //printing the array of animals
  echo 'Printing the array of animals';
  print_r($animals);
  echo '<br>';
  echo '<br>';
  //removing index form the array
  echo 'Removing the idex 1 from the array';
  unset($animals[1]);
  print_r ($animals);
  echo '<br>';
  echo '<br>';
?>
 
<?php
$fruits = ['first'=>'apple','second'=>'banana','third'=>'orange'];
unset($fruits['second']);
print_r($fruits);
?>