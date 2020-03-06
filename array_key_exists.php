<?php
 //The array_key_exists() function checks an array for a specified key, and returns true if the key exists and false if the key does not exist.
 $a=['arun'=>'arun','dillip'=>'dillip'];
 if(array_key_exists('arun',$a))
 {
     echo 'keys exits';
 }
 else
 echo 'keys doesnot exits';

?>