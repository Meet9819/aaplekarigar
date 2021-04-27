
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
            <?php include"header.php"; ?>


              <div class="slider-area">
                            <div class="slider-active owl-carousel">
                               
                                 <?php include('admin/db.php');
                                     $result = mysqli_query($con,"SELECT * FROM slider  ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo ' 

                                    <div class="single-slider slider-1 gray-bg">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="slider-content slider-animated-1">
                                                        <h2 class="animated">'.$row['title'].' </h2>
                                                        <p class="animated">'.$row['description'].'</p>
                                                        <a class="slider-btn animated" href="'.$row['link'].'">'.$row['buttonname'].'</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="slider-single-img slider-animated-1">
                                                        <img class="animated" src="images/sliders/'.$row['img'].'" alt="slider images">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    

                                    '; } ?>




                            </div>
                        </div>
            <!-- sidebar-cart start -->
          
            <div class="banner-area hm1-banner pt-30 pb-107">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <?php include('admin/db.php');
                                     $result = mysqli_query($con,"SELECT * FROM offers where id = 1  ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo ' 

                                        <div class="banner-wrapper banner-border ml-10 mb-30">
                                            <div class="banner-img">
                                                <a href="#"><img src="images/offers/'.$row['img'].'" alt="image"></a>
                                            </div>
                                            <div class="banner-content-style1 banner-position-center-right">
                                                <h2>30% <span><img src="assets/img/icon-img/discount.png" alt="image"></span> <br>Products</h2>
                                            </div>
                                        </div>

                                    '; } ?>

                            <?php include('admin/db.php');
                                     $result = mysqli_query($con,"SELECT * FROM offers where id = 2  ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo ' 

                                       <div class="banner-wrapper banner-border ml-10 mb-30">
                                            <div class="banner-img">
                                                <a href="#"><img src="images/offers/'.$row['img'].'" alt="image"></a>
                                            </div>
                                            <div class="banner-content-style2 banner-position-center-left">
                                                <h3>Don’t Miss</h3>
                                                <h2>Rattan <span>Bag.</span></h2>
                                            </div>
                                        </div>


                                    '; } ?>


                        </div>
                        <div class="col-md-12 col-lg-4">
                               <?php include('admin/db.php');
                                     $result = mysqli_query($con,"SELECT * FROM offers where id = 3  ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo ' 

                                          <div class="banner-wrapper mrg-mb-md">
                                            <div class="banner-img">
                                                <a href="#"><img src="images/offers/'.$row['img'].'" alt="image"></a>
                                            </div>
                                            <div class="banner-content-style3 banner-position-top">
                                                <h3>Black Friday Offer</h3>
                                            </div>
                                            <div class="banner-content-style4 banner-position-bottom">
                                                <h3>20% Off</h3>
                                            </div>
                                        </div>

                                    '; } ?>


                        
                        </div>



                        <div class="col-md-12 col-lg-4">
                             <?php include('admin/db.php');
                                     $result = mysqli_query($con,"SELECT * FROM offers where id = 4  ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo ' 

                                        <div class="banner-wrapper banner-border ml-10 mb-30">
                                            <div class="banner-img">
                                                <a href="#"><img src="images/offers/'.$row['img'].'" alt="image"></a>
                                            </div>
                                            <div class="banner-content-style1 banner-position-center-left">
                                                <h2>30% <span><img src="assets/img/icon-img/discount.png" alt="image"></span> <br>Products</h2>
                                            </div>
                                        </div>

                                    '; } ?>

                            <?php include('admin/db.php');
                                     $result = mysqli_query($con,"SELECT * FROM offers where id = 5  ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo ' 

                                       <div class="banner-wrapper banner-border ml-10 mb-30">
                                            <div class="banner-img">
                                                <a href="#"><img src="images/offers/'.$row['img'].'" alt="image"></a>
                                            </div>
                                            <div class="banner-content-style2 banner-position-center-right">
                                                <h3>Don’t Miss</h3>
                                                <h2>Rattan <span>Bag.</span></h2>
                                            </div>
                                        </div>


                                    '; } ?>

                        </div>
                    </div>
                </div>
            </div> 






            <?php include "collection.php"; ?>
            



            <div class="banner-area pb-95">
                <div class="container-fluid">
                    <div class="row">
                        
                           <?php include('admin/db.php');
                                     $result = mysqli_query($con,"SELECT * FROM ads  ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo ' 

                                        <div class="col-lg-6">
                                            <div class="banner-wrapper overflow mb-30">
                                                <div class="banner-img">
                                                    <a href="#">
                                                        <img alt="image" src="images/ads/'.$row['img'].'">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    '; }?>                   
                    </div>
                </div>
            </div>
           


              <div class="product-area pb-125 product-padding">
                <div class="container-fluid">
                    <div class="section-title-2 text-center mb-55">
                        <h2 class="mb-12">New Collection</h2>
                        <p>There are many variations of passages of Lorem Ipsum. </p>
                    </div>
                    <div class="collection-product-active owl-carousel">
                       

                          <?php
                                include('db.php');
                                $result = mysqli_query($con,"SELECT * FROM products WHERE status = '1' order by name ASC");
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
