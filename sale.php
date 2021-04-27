 
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
                        include('db.php');  ?>
                        
                        
                              <h1 style="    color: #c51406;font-size:26px">Sale</h1>
                        
                        
                      

                        <ul>
                            <li>
                                <a href="#">home</a>
                            </li>
                            <li>Shop page</li>
                        </ul>
                    </div>
                </div>
            </div>
           <!-- <div class="banner-area hm-4-padding">
                <div class="container-fluid">
                    <div class="banner-img">
                        <a href="#"><img src="assets/img/banner/16.jpg" alt=""></a>
                    </div>
                </div>
            </div> -->
            <div class="shop-wrapper hm-3-padding pt-20 pb-100">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="shop-topbar-wrapper">
                                <div class="grid-list-options">
                                    <ul class="view-mode">
                                        <li class="active"><a href="#product-grid" data-view="product-grid"><i class="ion-grid"></i></a></li>
                                        <li><a href="#product-list" data-view="product-list"><i class="ion-navicon"></i></a></li>
                                    </ul>
                                </div>
                                <div class="shop-filter">

                                    <?php include('db.php');

                                    $result = mysqli_query($con,"SELECT COUNT(*) as counting FROM products WHERE sale = 1 and status = 1 ");
                                    while($row = mysqli_fetch_array($result))
                                    {
                                    echo '  Products available <b>( '.$row['counting'].' )</b> 
                                     '; } 
                                     ?>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="grid-list-product-wrapper">
                        <div class="product-grid product-view"> 


                                <div class="row">
                        <!-- Product #1 -->

                             <?php
                                include('db.php');
                                
                                      $name = $_POST['name'];  
                                     
                                     $result = mysqli_query($con,"SELECT * FROM products WHERE sale = 1 and status = 1 order by name ASC");
                                  


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
                                 <div class="product-width col-md-6 col-xl-3 col-lg-4">
                                    <div class="product-wrapper mb-35">
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
                                            <div class="price-decrease">
                                                    '; ?> 
                                                    <?php
                                                    $discount = $row['discount'];
                                                    if ($discount != '0') { 
                                                        echo ' <span>'.$discount.'% off</span> ';
                                                    } 
                                                    else{ 
                                                          
                                                    } 
                                                    ?>
                                                    <?php echo '

                                               
                                            </div>
                                            <div class="product-action-3">
                                                <a class="action-plus-2" title="Quick View"  href="detailpage.php?q='.$row['id'].'">
                                                    <i class="ti-plus"></i> Quict View
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-title-wishlist">
                                                <div class="product-title-3">
                                                    <h4>  <a href="detailpage.php?q='.$row['id'].'" style="text-transform: capitalize;font-size:14px"> 
                                                            '.substr($row['name'],0,30).'..</a> </h4>
                                                </div>
                                             

                                                  <div class="product-wishlist-3">
                                                    <a onclick="addToWishlist(\''. $img . '\', \'' . substr($row['name'],0,30) .'\', 0, \'' . $_SESSION['userSession'] . '\', ' . $row['id'] . ')"><i class="ti-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-peice-addtocart"> 
                                          
                                                <div class="product-price product-price-list product-peice-3">
                                                    <span class="discount old">&#8377; '.$mrp.' </span>
                                                    <span class="symbole">&#8377;  '.$gpprice.'</span>
                                                </div>
                                                <div class="product-addtocart">
                                                       
                                                    '; ?>     <?php 
                                                $stock = $row['stock']; 
                                                  if ($stock == 0) {
                                                       echo ' <a   name="Submit" class="aajax_add_to_cart_button" href="javascript:void(0)">Out of Stock</a>  ';
                                                   } 
                                                else {
                                                         echo ' <a   name="Submit" class=" aajax_add_to_cart_button" href="javascript:void(0)" onclick="addToCart(this, \'' . $row['id'] . '\')"> <i class="ti-shopping-cart"></i>Add to cart</a> ';
                                                }
                                                ?><?php echo '

                                           
                                                </div>
                                            </div>  '; ?>

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
                                        <div class="product-list-details">
                                            <h2> <a href="detailpage.php?q='.$row['id'].'" style="text-transform: capitalize;font-size:14px"> 
                                                            '.substr($row['name'],0,30).'..</a></h2>
                                            

                                             <div class="product-rating">
                                                             ';
                                                            for ($i=0; $i <$row['star'] ; $i++) { 
                                                                    echo " <i class='ion-ios-star'></i>";
                                                                }"";
                                                                echo '
                                                    </div>

                                             <div class="product-price product-price-list ">
                                                    <span class="discount old">&#8377; '.$mrp.' </span>
                                                    <span class="symbole">&#8377;  '.$gpprice.'</span>
                                            </div>
                                           
                                            <p>'.substr($row['description'],0,2000).'</p>


                                         

                                            <div class="shop-list-cart">
                                                      
                                                    '; ?>     <?php 
                                                $stock = $row['stock']; 
                                                  if ($stock == 0) {
                                                       echo ' <a   name="Submit" class="aajax_add_to_cart_button" href="javascript:void(0)">Out of Stock</a>  ';
                                                   } 
                                                else {
                                                         echo ' <a   name="Submit" class=" aajax_add_to_cart_button" href="javascript:void(0)" onclick="addToCart(this, \'' . $row['id'] . '\')"> <i class="ti-shopping-cart"></i>Add to cart</a> ';
                                                }
                                                ?>     

                                                        <?php echo '

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                '; } ?>

                  
                             </div>
                        </div>
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
 
         <?php include"footer.php"; ?>
        </div>     
        <?php include "alerts.php"?> 		
      <?php include"allscript.php"; ?>
    </body>
</html>
