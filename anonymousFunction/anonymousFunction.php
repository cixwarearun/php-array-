<?php
 $fun = function($name)
 {
     return $name;
 };
echo $fun('Arun The Maka');

echo  '<br>';
echo  '<br>';
?>
<?php
 $greeting= function($name)
                 {
                     return 'Hello ' .$name;
                 };
echo $greeting('Arun');
echo  '<br>';
echo  '<br>';
 ?>

 <?php
   $select = [1=>function(){echo 'get bottle';},2=>function(){echo 'get ice';},3=>function(){echo 'get dillip';}];
   $choice=1;
   echo $select[$choice](); 
   echo  '<br>';
   echo  '<br>';
   $choice=2;
   echo $select[$choice]();
   echo  '<br>';
   echo  '<br>';
   $choice=3;
   echo $select[$choice]();
   
 ?>
