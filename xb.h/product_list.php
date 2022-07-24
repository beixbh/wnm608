<?php

include_once "./lib/php/functions.php";
include_once "./parts/templates.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Product List</title>


     <?php include "parts/meta.php"; ?>



</head>
<body>

     <?php include "parts/navbar.php"; ?>

     <div class="container">
          <div class="card soft">
               <h2>Product List</h2>
               <ul>
                    <div class="grid gap">
                         <div class="col-xs-12 col-md-4" href="product_item.php?id=1">
                              <figure class="figure product-overlay">
                                   <img src="img/crimson glory.jpg" alt="">
                                   <figcaption>
                                        <div class="caption-body">
                                             <li><a href="product_item.php?id=1">Crimson Glory</a></li>
                                        </div>         
                                   </figcaption>
                              </figure>
                         </div>
                         <div class="col-xs-12 col-md-4">
                              <figure class="figure product-overlay">
                                   <img src="img/pentatonic.jpg" alt="">
                                   <figcaption>
                                        <div class="caption-body">
                                             <li><a href="product_item.php?id=2">Pentatonic</a></li>
                                        </div>         
                                   </figcaption>
                              </figure>
                         </div>
                         <div class="col-xs-12 col-md-4">
                              <figure class="figure product-overlay">
                                   <img src="img/lace purple rose.jpg" alt="">
                                   <figcaption>
                                        <div class="caption-body">
                                             <li><a href="product_item.php?id=3">lace purple rose</a></li>
                                        </div>         
                                   </figcaption>
                              </figure>
                         </div>
                         <div class="col-xs-12 col-md-4">
                              <figure class="figure product-overlay">
                                   <img src="img/goldfish bubble.jpg" alt="">
                                   <figcaption>
                                        <div class="caption-body">
                                             <li><a href="product_item.php?id=4">Goldfish Bubble</a></li>
                                        </div>         
                                   </figcaption>
                              </figure>
                         </div>
                         <div class="col-xs-12 col-md-4">
                              <figure class="figure product-overlay">
                                   <img src="img/vintage cheongsam.jpg" alt="">
                                   <figcaption>
                                        <div class="caption-body">
                                             <li><a href="product_item.php?id=5">Vintage cheongsam</a></li>
                                        </div>         
                                   </figcaption>
                              </figure>
                         </div>
                         <div class="col-xs-12 col-md-4">
                              <figure class="figure product-overlay">
                                   <img src="img/ribbon flower.jpg" alt="">
                                   <figcaption>
                                        <div class="caption-body">
                                             <li><a href="product_item.php?id=6">Ribbon Flower</a></li>
                                        </div>         
                                   </figcaption>
                              </figure>
                         </div>
                         <div class="col-xs-12 col-md-4">
                              <figure class="figure product-overlay">
                                   <img src="img/white rose.jpg" alt="">
                                   <figcaption>
                                        <div class="caption-body">
                                             <li><a href="product_item.php?id=7">White Rose</a></li>
                                        </div>         
                                   </figcaption>
                              </figure>
                         </div>
                         <div class="col-xs-12 col-md-4">
                              <figure class="figure product-overlay">
                                   <img src="img/crane dancing.jpg" alt="">
                                   <figcaption>
                                        <div class="caption-body">
                                             <li><a href="product_item.php?id8">Crane Dancing</a></li>
                                        </div>         
                                   </figcaption>
                              </figure>
                         </div>
                         <div class="col-xs-12 col-md-4">
                              <figure class="figure product-overlay">
                                   <img src="img/japanese finland.jpg" alt="">
                                   <figcaption>
                                        <div class="caption-body">
                                             <li><a href="product_item.php?id9">Japanese Finland</a></li>
                                        </div>         
                                   </figcaption>
                              </figure>
                         </div>
                         <div class="col-xs-12 col-md-4">
                              <figure class="figure product-overlay">
                                   <img src="img/colorful houndstooth.jpg" alt="">
                                   <figcaption>
                                        <div class="caption-body">
                                             <li><a href="product_item.php?id10">Colorful Houndstooth</a></li>
                                        </div>         
                                   </figcaption>
                              </figure>
                         </div>
                         <div class="col-xs-12 col-md-4">
                              <figure class="figure product-overlay">
                                   <img src="img/autumn heart.jpg" alt="">
                                   <figcaption>
                                        <div class="caption-body">
                                             <li><a href="product_item.php?id11">Autumn Heart</a></li>
                                        </div>         
                                   </figcaption>
                              </figure>
                         </div>
                         <div class="col-xs-12 col-md-4">
                              <figure class="figure product-overlay">
                                   <img src="img/fullness.jpg" alt="">
                                   <figcaption>
                                        <div class="caption-body">
                                             <li><a href="product_item.php?id12">Fullness</a></li>
                                        </div>         
                                   </figcaption>
                              </figure>
                         </div>
                    </div>
                    <!-- <li><a href="product_item.php?id=4">product 4</a></li>
                    <li><a href="product_item.php?id=5">product 5</a></li>
                    <li><a href="product_item.php?id=6">product 6</a></li>
                    <li><a href="product_item.php?id=7">product 7</a></li>
                    <li><a href="product_item.php?id=8">product 8</a></li>
                    <li><a href="product_item.php?id=9">product 9</a></li>
                    <li><a href="product_item.php?id=10">product 10</a></li>
                    <li><a href="product_item.php?id=11">product 11</a></li>
                    <li><a href="product_item.php?id=12">product 12</a></li> -->
               </ul>



               <?php

               include_once "lib/php/functions.php";
               include_once "parts/templates.php";

               $result = makeQuery(
                    makeConn(),
                    "
                    SELECT `id`,`title`,`price`
                    FROM `products`
                    ORDER BY `date_created` DESC
                    LIMIT 12
                    "
               );

               echo "<div class='productlist grid gap'>",array_reduce($result,'productListTemplate'),"</div>";
               ?>
          </div>
     </div>
     
</body>
</html>