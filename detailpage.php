 
<?php error_reporting(0);
define(SERVER_ROOT, __DIR__);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?> 
 <?php include"allcss.php"; ?>

    </head>
    <body>
        <div class="wrapper">
            <!-- header start -->

            <?php include "header.php"; ?>

          

            <div class="breadcrumb-area mt-37 hm-4-padding">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center border-top-2">
                          <?php
                        include('db.php');
                        
                        $q=$_GET['q'];   
                        
                        $result = mysqli_query($con,"SELECT * FROM products  WHERE  id=$q ");
                        while($row = mysqli_fetch_array($result))
                        {
                        
                        echo '
                              <h2 >'.$row['name'].'</h2>
                        
                        ';
                        }
                        ?>
                      
                        <ul>
                            <li>
                                <a href="#">home</a>
                            </li>
                            <li>Products Detail Page</li>
                        </ul>
                    </div>
                </div>
            </div>
          
            <div class="product-details-area hm-3-padding ptb-30">
                <div class="container-fluid">
                    <div class="row">



                            <?php
                                include('db.php');
                                $result = mysqli_query($con,"SELECT * FROM products WHERE status = '1' and id = $q");
                                while($row = mysqli_fetch_array($result))
                                {

                                    $maincat = $row['maincat'];
                                $var = $row['id']; 
                                // $yousave = $mrp - $gpprice;
                                $variants = array();
                                $variantresult = mysqli_query($con,"SELECT id, type, price, `units`, mrp FROM productprice where productid = $var");
                                while ($data = mysqli_fetch_array($variantresult)) {
                                    array_push($variants, $data);
                                }
                                $mrp = $variants[0]["mrp"] ?? 0;
                                $gpprice = $variants[0]["price"] ?? 0;
                                
                                ?>
                        <div class="col-lg-6">
                            <div class="product-details-img-content">
                                <div class="product-details-tab mr-40">
                                    

                                    <div class="product-details-large tab-content">
                                         <div class="tab-pane active" id="pro-details1">
                                                                    <div class=" easyzoom easyzoom--overlay">
                                                <?php
                                                    $img = $row['img'];
                                                    if ($img == '') { 
                                                        echo ' <a href="images/noimage.jpg"> <img src="images/noimage.jpg"></a>   
                                                         ';
                                                    } 
                                                    else{
                                                        echo '<a href="images/products/'.$row['img'].'"> 
                                                                        <img  src="images/products/'.$row['img'].'" alt="'.$row['name'].'">
                                                                    </a>'; 
                                                    } 
                                                    ?>
                                                    </div>
                                                  </div>
                                    </div>

                                   
                                </div>
                            </div>
                        </div> 


                        <?php echo '

                               
                        <div class="col-lg-6">
                            <div class="product-details-content">
                                <h2>'.$row['name'].' </h2>
                                  <div class="product-rating">
                                                             ';
                                                            for ($i=0; $i <$row['star'] ; $i++) { 
                                                                    echo " <i class='ion-ios-star'></i>";
                                                                }"";
                                                                echo '
                                                    </div>
                                   <div class="product-categories">
                                        <h6 class="">Product Dimensions L x W x H - '.$row['length'].' x  '.$row['width'].' x '.$row['height'].'</h6>
                                        <h6 class="">Product Weight - '.$row['weight'].' </h6>
                                   </div>


                                    <div class="product-price product-price-list product-peice-3">
                                          <span class="discount old">&#8377; '.$mrp.' </span>
                                          <span class="symbole">&#8377;  '.$gpprice.'</span>
                                    </div>

                                <div class="product-overview">
                                    <h5 class="pd-sub-title">Product Overview</h5>
                                    <p>'.$row['description'].'</p>
                                    '; if($row['stock'] >= 1)
                                    {
                                        echo ' <b style="color:#0cc100">In Stock</b>';
                                    }else {
                                        echo ' <b style="color:#f50000">Out of Stock</b>';
                                    }
                                    echo '
                                   
                                </div>
                               
                              
                                <div  class="product-variant-list">
                                                            <select class="form-control product-variant">
                                                              '; ?>  <?php 
                                                                    foreach($variants as $variantItem) {
                                                                        echo "<option value=\"{$variantItem["mrp"]},{$variantItem["price"]}\">". trim($variantItem["type"]) . " " . trim(strtoupper($variantItem["units"])) . "</option>"; 
                                                                    } 
                                                                ?>
                                                            </select> 
                                                        </div>  
                                                      

                                                    <?php echo  '
                               


                                <div class="quickview-plus-minus">
                                    <div class="cart-plus-minus">
                                        <input type="text" value="1" name="qtybutton" class="item_qty cart-plus-minus-box">
                                    </div>
                                    <div class="quickview-btn-cart">
                                       '; ?> <?php 
                                                $stock = $row['stock']; 
                                                  if ($stock == 0) {                                                     
                                                   } 
                                                else {
                                                echo ' <a   name="Submit" class="btn-style cr-btn aajax_add_to_cart_button" href="javascript:void(0)" onclick="addToCart(this, \'' . $row['id'] . '\')"><span>add to cart</span></a> ';
                                                }
                                                ?><?php echo '

                                    </div>
                                    <div class="quickview-btn-wishlist">
                                        <a class="btn-hover cr-btn" onclick="addToWishlist(\''. $img . '\', \'' . substr($row['name'],0,30) .'\', 0, \'' . $_SESSION['userSession'] . '\', ' . $row['id'] . ')"><i class="ion-ios-heart-outline"></i></a>
                                    </div>
                                </div>

                             
                               
                                <div class="product-share">
                                    <h5 class="pd-sub-title">Share</h5>
                                    <ul>
                                        <li>
                                            <a href="#"><i class="ion-social-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-tumblr"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="ion-social-instagram-outline"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>





                    </div>
                </div>
            </div>
            
               <div class="product-area pb-125 product-padding">
                <div class="container-fluid">
                    <div class="section-title-2  mb-55">
                        <h4 class="mb-12">Description  </h4>
                        <p>'.$row['description'].'</p>
                    </div>
                </div>
            </div>

 '; } ?>
              <div class="product-area pb-125 product-padding">
                <div class="container-fluid">
                    <div class="section-title-2 text-center mb-55">
                        <h2 class="mb-12">Related Products </h2>
                    </div>
                    <div class="collection-product-active owl-carousel">
                       

                          <?php
                                include('db.php');
                                $result = mysqli_query($con,"SELECT * FROM products WHERE maincat = '$maincat' and status = '1' order by name ASC");
                                while($row = mysqli_fetch_array($result))
                                {
                                $var = $row['id']; 
                                // $yousave = $mrp - $gpprice;
                                $variants = array();
                                $variantresult = mysqli_query($con,"SELECT id, type, price, `units`, mrp FROM productprice where productid = $var");
                                while ($data = mysqli_fetch_array($variantresult)) {
                                    array_push($variants, $data);
                                }
                                $mrp = $variants[0]["mrp"] ?? 0;
                                $gpprice = $variants[0]["price"] ?? 0;
                                echo '
                                <div class="product-wrapper">
                                    <div class="product-img">
                                         <a href="detailpage.php?q='.$row['id'].'">
                                                 '; ?> 
                                                    <?php
                                                    $img = $row['img'];
                                                    if ($img == '') { 
                                                        echo '<img src="images/noimage.jpg">';
                                                    } 
                                                    else{ 
                                                            echo '  <img  src="images/products/'.$row['img'].'" alt="'.$row['name'].'">'; 
                                                    } 
                                                    ?>
                                                    <?php echo '
                                            </a>
                                            <div class="product-wishlist">
                                                <a onclick="addToWishlist(\''. $img . '\', \'' . substr($row['name'],0,30) .'\', 0, \'' . $_SESSION['userSession'] . '\', ' . $row['id'] . ')"><i class="ti-heart"></i></a>
                                            </div>
                                            <div class="product-action-2">'; ?>     
                                            <?php 
                                                $stock = $row['stock']; 
                                                  if ($stock == 0) {                                                     
                                                   } 
                                                else {
                                                         echo ' <a   name="Submit" class="action-cart-2 aajax_add_to_cart_button" href="javascript:void(0)" onclick="addToCart(this, \'' . $row['id'] . '\')"> <i class="ti-shopping-cart"></i></a> ';
                                                }
                                                ?><?php echo '
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                 <h4>  <a href="detailpage.php?q='.$row['id'].'" style="text-transform: capitalize;font-size:14px">'.substr($row['name'],0,30).'..</a> </h4>

                                                 <div class="product-price-2">
                                                     <span class="symbole">&#8377;  '.$gpprice.'</span>
                                                </div> '; ?>

                                                        <div style="display: none" class="product-variant-list">
                                                            <select class="form-control product-variant">
                                                                <?php 
                                                                    foreach($variants as $variantItem) {
                                                                        echo "<option value=\"{$variantItem["mrp"]},{$variantItem["price"]}\">". trim($variantItem["type"]) . " " . trim(strtoupper($variantItem["units"])) . "</option>"; 
                                                                    } 
                                                                ?>
                                                            </select> 
                                                        </div>  
                                                        <input type="hidden" value="1" class="item_qty" min="1" />
                                     <?php echo '
                            </div>
                        </div> 

                        '; 
                    }
                    ?>
                    </div>
                </div>
            </div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

  <script type="text/javascript">
    $(document).ready(function() {
        $('.minus').click(function () {
            var $input = $(this).parent().find('input');
            var count = parseInt($input.val()) - 1;
            count = count < 1 ? 1 : count;
            $input.val(count);
            $input.change();
            return false;
        });
        
        $('.plus').click(function () {
            var $input = $(this).parent().find('input');
            $input.val(parseInt($input.val()) + 1);
            $input.change();
            return false;
        });

        $('div').on('change', '.product-variant', function(e)   {
            e.stopPropagation();

            let value = $(this).val();

            let [mrp, gp_price] = String(value).split(',');

            let priceSection = $(this).parent().parent().find('.product-price-list');

            // set mrp price
            $(priceSection).children().first().text(`₹ ${mrp}`);

            // set gp price
            $(priceSection).children().last().text(`${gp_price}`); 
            
                final_item_total = mrp - gp_price;      

            // $(this).parent().parent().children().first().children().first().text(`You Save ₹ ${final_item_total}`);
        });
    });
  </script>

        <?php include "alerts.php"?>    

         <?php include"footer.php"; ?>

        </div>
     <?php include"allscript.php"; ?>
    </body>
<!-- Mirrored from preview.hasthemes.com/nokshi/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Oct 2020 01:39:27 GMT -->
</html>
