<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("f"=>"green","b"=>"blue","c"=>"pink");
//prints out the unmatch key
$result=array_diff_key($a1,$a2);
print_r($result);
?>
