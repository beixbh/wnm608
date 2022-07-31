<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <title>Product List</title>

     <?php include "parts/meta.php"; ?>

     <script src="lib/js/functions.js"></script>
     <script src="js/templates.js"></script>
     <script src="js/product_list.js"></script>

     <script>
         query({type:'products_all'}).then(d=>{
            $(".productlist").html(listItemTemplate(d.result))
         });
     </script>
</head>
<body>

     <?php include "parts/navbar.php"; ?>

     <div class="container">
               <h2>Product List</h2>

               <div class="form-control">
                    <form class="hotdog light" id="product-search">
                         <input type="search" placeholder="Search Products">
                    </form>
               </div>
               <div class="form-control">
                    <div class="card soft">
                    <div class="display-flex flex-wrap">
                         <div class="flex-stretch display-flex">
                              <div class="flex-none">
                                   <button data-filter="category" data-value="all" type="button" class="form-button">All</button>
                              </div>
                              <div class="flex-none">
                                   <button data-filter="category" data-value="s-clasp frame" type="button" class="form-button">s-clasp frame</button>
                              </div>
                              <div class="flex-none">
                                   <button data-filter="category" data-value="m-clasp frame" type="button" class="form-button">m-clasp frame</button>
                              </div>
                               <div class="flex-none">
                                   <button data-filter="category" data-value="l-clasp frame" type="button" class="form-button">l-clasp frame</button>
                              </div>
                         </div>

                         <div class="flex-none">
                    <div class="form-select">
                        <select class="js-sort">
                            <option value="1">Newest</option>
                            <option value="2">Oldest</option>
                            <option value="3">Least Expensive</option>
                            <option value="4">Most Expensive</option>
                        </select>
                    </div>
                </div>
                         
                    </div>
                    </div>
               </div>

               <div class='productlist grid gap'></div>
               <div class="productlist grid gap"><a class="col-xs-12 col-md-4" href="product_item.php?id=1">
                    <figure class="figure product ">
               <div class="flex-stretch">
            <img src="/AAU/WNM608/xb.h/img/crimson glory.jpg" alt="">
        </div>
        <figcaption class="flex-none product-price">
            <div>crimson glory</div>
            <div>$60.00</div>
        </figcaption> 
    </figure>


</a><a class="col-xs-12 col-md-4" href="product_item.php?id=2">
    <figure class="figure product ">
        <div class="flex-stretch">
            <img src="/AAU/WNM608/xb.h/img/pentatonic.jpg" alt="">
        </div>
        <figcaption class="flex-none product-price">
            <div>pentatonic</div>
            <div>$68.00</div>
        </figcaption> 
    </figure>
</a><a class="col-xs-12 col-md-4" href="product_item.php?id=3">
    <figure class="figure product ">
        <div class="flex-stretch">
            <img src="/AAU/WNM608/xb.h/img/lace purple rose.jpg" alt="">
        </div>
        <figcaption class="flex-none product-price">
            <div>lace purple rose</div>
            <div>$99.00</div>
        </figcaption> 
    </figure>
</a><a class="col-xs-12 col-md-4" href="product_item.php?id=4">
    <figure class="figure product ">
        <div class="flex-stretch">
            <img src="/AAU/WNM608/xb.h/img/goldfish bubble.jpg" alt="">
        </div>
        <figcaption class="flex-none product-price">
            <div>goldfish bubble</div>
            <div>$80.00</div>
        </figcaption> 
    </figure>
</a><a class="col-xs-12 col-md-4" href="product_item.php?id=5">
    <figure class="figure product ">
        <div class="flex-stretch">
            <img src="/AAU/WNM608/xb.h/img/vintage cheongsam.jpg" alt="">
        </div>
        <figcaption class="flex-none product-price">
            <div>vintage cheongsam</div>
            <div>$137.00</div>
        </figcaption> 
    </figure>
</a><a class="col-xs-12 col-md-4" href="product_item.php?id=6">
    <figure class="figure product ">
        <div class="flex-stretch">
            <img src="/AAU/WNM608/xb.h/img/ribbon flower.jpg" alt="">
        </div>
        <figcaption class="flex-none product-price">
            <div>ribbon flower</div>
            <div>$105.00</div>
        </figcaption> 
    </figure>
</a><a class="col-xs-12 col-md-4" href="product_item.php?id=7">
    <figure class="figure product ">
        <div class="flex-stretch">
            <img src="/AAU/WNM608/xb.h/img/white rose.jpg" alt="">
        </div>
        <figcaption class="flex-none product-price">
            <div>white rose</div>
            <div>$101.00</div>
        </figcaption> 
    </figure>
</a><a class="col-xs-12 col-md-4" href="product_item.php?id=8">
    <figure class="figure product ">
        <div class="flex-stretch">
            <img src="/AAU/WNM608/xb.h/img/crane dancing.jpg" alt="">
        </div>
        <figcaption class="flex-none product-price">
            <div>crane dancing</div>
            <div>$159.00</div>
        </figcaption> 
    </figure>
</a><a class="col-xs-12 col-md-4" href="product_item.php?id=9">
    <figure class="figure product ">
        <div class="flex-stretch">
            <img src="/AAU/WNM608/xb.h/img/japanese finland.jpg" alt="">
        </div>
        <figcaption class="flex-none product-price">
            <div>japanese finland</div>
            <div>$125.00</div>
        </figcaption> 
    </figure>
</a><a class="col-xs-12 col-md-4" href="product_item.php?id=10">
    <figure class="figure product ">
        <div class="flex-stretch">
            <img src="/AAU/WNM608/xb.h/img/colorful houndstooth.jpg" alt="">
        </div>
        <figcaption class="flex-none product-price">
            <div>colorful houndstooth</div>
            <div>$105.00</div>
        </figcaption> 
    </figure>
</a><a class="col-xs-12 col-md-4" href="product_item.php?id=11">
    <figure class="figure product ">
        <div class="flex-stretch">
            <img src="/AAU/WNM608/xb.h/img/autumn heart.jpg" alt="">
        </div>
        <figcaption class="flex-none product-price">
            <div>autumn heart</div>
            <div>$137.00</div>
        </figcaption> 
    </figure>
</a><a class="col-xs-12 col-md-4" href="product_item.php?id=12">
    <figure class="figure product ">
        <div class="flex-stretch">
            <img src="/AAU/WNM608/xb.h/img/fullness.jpg" alt="">
        </div>
        <figcaption class="flex-none product-price">
            <div>fullness</div>
            <div>$128.00</div>
        </figcaption> 
    </figure>
</a></div>
     </div>
     

      <?php 

            

            $result = makeQuery(
                makeConn(),
                "
                SELECT *
                FROM `products`
                ORDER BY `date_create` DESC
                LIMIT 12
                "
            );

            echo "<div class='productlist grid gap'>",array_reduce($result,'productListTemplate'),"</div>";

             ?>



</body>
</html>