<?php
   $main='A flower, sometimes known as a bloom or blossom, is the reproductive structure found in flowering plants 
   (plants of the division Magnoliophyta, also called angiosperms). The biological function of a flower is to affect reproduction, usually by providing a mechanism for the union of sperm with eggs. Flowers may facilitate outcrossing (fusion of sperm and eggs from different individuals in a population) resulting from cross pollination or allow selfing (fusion of sperm and egg from the same flower) when self pollination occurs. Some flowers produce diaspores without fertilization (parthenocarpy). Flowers contain sporangia and are the site where gametophytes develop. Many flowers have evolved to be attractive to animals, so as to cause them to be vectors
    for the transfer of pollen. After fertilization, the ovary of the flower develops into fruit containing seeds.';
    $block = 'Lorem ipsum dolor sit amet consectetur adidkjdf  dklfjd dfj dfuoik jklsfuoilj';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cixware home page</title>
    <link rel="stylesheet" href="tailwind.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="  https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body class="overflow-x-hidden mx-4 " > 
    <header class="      pt-8 text-blue-700  xl:flex-row md:justify-between  ">
        <h1 class="text-3xl font-bold flex">
            <img class="h-10 w-10" src="image/cixware.png" alt="">
            <div>

          
           <div> Arun<span class="text-blue-900">Bastola</span></div>
           <div class="text-xs px-4">Lorem ipsum dolor sit amet consectetur adipifjdklf akjd f mu name ais  akf</div>
           </div>

        </h1>
        <div class="flex flex-col-reverse bg-blue-700 text-white lg:flex-row md:justify-between mt-10 mb-10 ">

        
            <div class="flex flex-col pr-48 text-justify  md:flex-row  text-gray">
                <a class="ml-6   py-1 mt-1 px-2 font-bold hover:text-blue-900 " href="home.html">Home</a>
                <a class="ml-6   py-1 mt-1 px-2 font-bold hover:text-blue-900 " href="about.html">Products</a>
                <a class="ml-6   py-1 mt-1 px-2 font-bold hover:text-blue-900  " href="services.html">Download</a>
                <a class="ml-6  py-1 mt-1 px-2 font-bold hover:text-blue-900 " href="products.html">Buy Now</a>
                <a class="ml-6   py-1 mt-1 px-2 font-bold font-bold  hover:text-blue-900" href="Clients.html"> Support</a>
                <a class="ml-6   py-1 mt-1 px-2 font-bold font-bold  hover:text-blue-900" href="Clients.html"> About</a>
            </div>
            <div>
                <div class="relative  border-2 rounded-md border-blue-700 hover:border-green-500 "> 
                    <i class="fas fa-search absolute mt-3 ml-3 text-blue-700  "></i>
                    <input  class="pl-10   h-8  overflow-hidden w-6 md:w-auto "  placeholder="Search"  type="text" required>
            </div>
     </div>
        </div>
    </header>
    <section >
        <div >
            <img class="w-full " src="image/remo.jpg" alt="">
        </div>
       
    </section>
    <section class="flex mt-10 ">
        <div class="mr-32 pt-2 border-2 px-4 pb-2">
             <div class=" flex justify-between"> 
                 <img class="w-64" src="image/binod-1.jpg" alt="">
                 <div class="mx-8 text-justify">
                     <?php
                        echo $main;
                     ?>
                 </div> 
             </div>
             <div>
               <div class="flex justify-between  px-64 mt-4">
                     <button class="border-2 bg-blue-700  rounded-full p-2 text-white" type="submit">Download</button>
              
                
                 <button  class="border-2 bg-blue-700 rounded-full p-2 text-white" type="submit">Purchase</button>
             </div>
             <div class="mt-8">
                 <h2 class="bg-blue-700 text-white ">
                     A monthly newspaper brought to you by Mr.Arun
                 </h2>
                 <div class="flex justify-between mt-8">
                     <div>
                         <img class="w-64" src="image/diken.jpg" alt="">
                         <div class="w-64 mt-4">
                             <?php
                               echo $block;
                             ?>
                         </div>
                     </div>
                     <div>
                         <img class="w-64 h-64" src="image/diken.jpg" alt="">
                         <div class="w-64 mt-4">
                         <?php
                               echo $block;
                             ?>
                         </div>
                     </div>
                     <div >
                     <table class="border-2  ">
                                <?php
                                function maka($n)
                                {
                                    for($i=0; $i<$n; $i++)
                                    {
                                        echo '<tr>';
                                        for($j=0; $j<$n; $j++)
                                        {
                                            if(($i+$j)%2==0)
                                                {
                                                    echo "<td height=32px width=32px bgcolor=#FFFFFF></td>";
                                                }
                                                else{
                                                    echo "<td height=32px width=32px bgcolor=red></td>";
                                                }                
                                                
                                        }
                                        echo '</tr>';
                                    }
                                }
                                maka(8)
                                ?>
                            </table>
                         <div class="w-64 mt-4">
                             <?php
                               echo $block;
                             ?>
                         </div>
                     </div>
                     <div>
                     <table class="border-2 ">
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
                                                    echo "<td height=32px width=32px bgcolor=#FFFFFF></td>";
                                                }
                                                else{
                                                    echo "<td height=32px width=32px bgcolor=#000000></td>";
                                                }                
                                                
                                        }
                                        echo '</tr>';
                                    }
                                }
                                arun(8)
                                ?>
                            </table>
                         <div class="w-64 mt-4">
                             <?php
                               echo $block;
                             ?>
                         </div>
                     </div>

                 </div>
                 <div class="mt-8">
                    <?php
                       echo $main;
                    ?>
                 </div>
             </div>
            </div>
        </div>
        <div class="w-full" >
            <div class="mb-10 border-2 pb-4 ">
                 <h1 class="bg-blue-700 text-white">Social</h1>
                 <img   src="image/sibu.jpg" alt="">
                 <div class="flex justify-center">
                 <button class="border-2 mt-4 align-center  text-center bg-blue-700 mr-4 rounded-full p-2 text-white" type="submit">Share and Links</button>
                 </div>
            </div>
            <div class="border-2 pb-4">
                 <div class="bg-blue-700">Navigate</div>
                 <div>

                    
                        <?php
                        $a=0;
                            while($a<8){
                                echo 'items'.'<br>';
                                
                                $a++;
                                
                            }
                        ?>
                </div>
            </div>
        </div>
    </section>
    <section class="h-4 bg-blue-700 mt-4">

    </section>
    <section class="mx-64 px-64 underline mt-2">
        <div class="flex justify-between">
            <a href="#">Home</a>
            <a href="">Products</a>
            <a href="">Privacy</a>
            <a href="">Terms</a>
            <a href="">See Maps</a>
            <a href="">links</a>
        </div>
    </section>
   
    
    <footer class="mx-auto">
        <div class="text-center  text-xs text-bold mt-2 mb-4  ">
            Copyright company &copy;2020. All Right Preserved.
        </div>
    </footer>
</body>
</html>