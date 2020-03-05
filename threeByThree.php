<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
        function getSquareMatrix($n)
        {
            $arr=array();
            $main=1;
                for($i=0; $i<$n; $i++)
                {
                  
                    for($j=0; $j<$n; $j++)
                    {
                      
                    $arr[$i][$j]=$main;
                   
                    $main++;
                   
                    }
                   
                    
                }
                return $arr;
                
                // for ($i = 0;$i < $n;$i++)
                // { // printing the array
                //     for ($j = 0;$j < $n;$j++)
                //     {
                //         echo $arr[$i][$j] . " ";
                //     }
                //     // PHP_EOL;
                // }
        }
        $output= getSquareMatrix(3);
        foreach($output as $out)
        {
          print_r ($out);
        }
       
        
      

  ?>
  <table border="2px">
         <tr>
            <td>
               1
            </td>
            <td>
               2
            </td>
            <td>
               3
            </td>
         </tr>
         <tr>
            <td>
               4
            </td>
            <td>
               5
            </td>
            <td>
               6
            </td>
         </tr>
         <tr>
            <td>
               7
            </td>
            <td>
               8
            </td>
            <td>
               9
            </td>
         </tr>
     
  </table>
 
</body>
</html>
<?php

