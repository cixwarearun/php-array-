<?php
  //Get targatedcolumn names from a recordset:


$a = array(
  array(
    'id' => 5698,
    'first_name' => 'arun',
    'last_name' => 'Griffin',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Barun',
    'last_name' => 'Smith',
  ),
  array(
    'id' => 3809,
    'first_name' => 'm',
    'last_name' => 'Doe',
  )
);

$last_names = array_column($a, 'first_name');
print_r($last_names);
?>