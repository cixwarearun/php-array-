<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <table class="border-2 mx-auto my-48 border-black">
        <?php
           function arun($n)
           {
               for($i=0; $i<$n; $i++)
               {
                   echo '<tr>';
                for($j=0; $j<$n; $j++)
                {
                    if(($i+$j)%2==0)
                        {
                            echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
                        }
                        else{
                            echo "<td height=30px width=30px bgcolor=#000000></td>";
                        }                
                        
                }
                echo '</tr>';
               }
           }
           arun(8)
        ?>
    </table>
</body>
</html>