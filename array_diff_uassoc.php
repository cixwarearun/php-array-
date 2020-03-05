<?php
function myfunction($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","b"=>"green","e"=>"blue");

$result=array_diff_uassoc($a2,$a1,"myfunction");
print_r($result);
?>