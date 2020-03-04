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
        $outputs= getSquareMatrix(8);
     
       
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
            margin: 0 auto ;
            padding: 0;
            margin-top:100px;
          
        
  
        }
     
        
        td{
          
            padding: 30px;
            border:2px solid;   
        
           
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
                     
                       
                        if(($i+$j)%2==0)
                        {
                            echo "<td bgcolor=#FFFFFF></td>";
                        }
                        else{
                            echo "<td  bgcolor=#000000></td>";
                        }                
                        
                             
                    }
                    echo '</tr>';                  
                }     
        ?>
</table>
   
    
</body>
</html>

