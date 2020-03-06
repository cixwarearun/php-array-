<?php
//Return a sorted array in ascending order:
  $b=['Arun','Bibek','Anita'];
  array_multisort($b);
  print_r($b);

  //doesnot support print(array_multisort($b));
?>