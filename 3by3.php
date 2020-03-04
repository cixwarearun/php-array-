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
        }
        $outputs= getSquareMatrix(3);
     
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            text-align: center;
            margin: 0 auto;
            margin-top:100px;
            font-size: 50px;
            color: red;
            
           
        
        }
        td{
            border: 1px solid;
            border-radius: 8px;
            padding: 10px;
        }
     
    </style>
</head>
<body>

<table   >
        <?php 
       

            for($i=0; $i<count($outputs); $i++)
            
                {
                    echo '<tr>';
                    for($j=0; $j<count($outputs[$i]); $j++ )
                    {
                     
                        echo '<td>'. $outputs[$i][$j].'</td>'; 
                     
                     
                    }
                    echo '</tr>';                  
                }     
        ?>
</table>
   
    
</body>
</html>

