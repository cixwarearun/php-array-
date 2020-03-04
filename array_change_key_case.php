<?php
  //array_change_key_case — Changes the case of all keys in an array
  $age=array('bibek'=>20,'anita'=>23, 'sibu'=>22);
  //printing the age 
  print_r($age);
  echo '<br>';
  echo '<br>';
  echo 'changing the keys of array into uppercase::';
  //changing the keys of array into uppercase
print_r(array_change_key_case($age,CASE_UPPER));
?>