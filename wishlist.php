<?php 

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (empty($_SESSION['userSession']))    {
    header("Location: index.php");
}

include('db.php');

$wishlist = array();

if (!empty($_POST["wishlistitem"])) {
    $sql = "DELETE FROM `wishlist` WHERE `useremailid`= '{$_SESSION['userSession']}' AND `id` = '{$_POST["wishlistitem"]}'";
    $result = mysqli_query($con, $sql);
}

$sql1 = "SELECT * FROM `wishlist` WHERE `useremailid`= '{$_SESSION['userSession']}'";
$result = mysqli_query($con, $sql1);

while($data = mysqli_fetch_array($result)) {
    array_push($wishlist, $data);
}

?>
        <?php include"allcss.php"; ?>

    </head>
    <body>
        <div class="wrapper">

            <?php include "header.php"; ?>

              <div class="breadcrumb-area mt-37 hm-4-padding">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center border-top-2">
                      <h2>Wishlist</h2>
                        <ul>
                            <li>
                                <a href="#">home</a>
                            </li>
                            <li> Wishlist </li>
                        </ul>
                    </div>
                </div>
            </div>

         <div class="shop-wrapper hm-3-padding pt-120 pb-100">
                <div class="container-fluid">
            
                    <div class="grid-list-product-wrapper">
                        <div class="product-grid product-view">
                            <div class="row">    

                                            <?php
                                                foreach($wishlist as $item)   {
                                            ?>
                                
                                            <div class="product-width col-md-6 col-xl-3 col-lg-4">
                                                <div class="product-wrapper mb-35">
                                                    <div class="product-img">
                                                    <a href="#"><img src="<?php echo "images/products/{$item['img']}"; ?>" alt=""></a>
                                                        <div class="product-action-3">
                                                              <button style="background-color: #910f02;border:0px;color:white;padding: 10px"  class="action-plus-2" type="submit" name="wishlistitem" value="<?php echo $item["id"]; ?>">
                                                                   Remove From Wishlist
                                                                </button>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-title-wishlist">
                                                            <div class="product-title-3">
                                                                <h4><a href="#"><?php echo $item["name"]; ?></a></h4>
                                                            </div>
                                                        </div>
                                                      
                                                    </div>
                                                </div>
                                            </div>                                                 
                                          
                                            <?php
                                                }
                                            ?>
                                       
                            </div>                        
                        </div>                    
                    </div>
                </div>
             </div>


           <?php include"footer.php"; ?>

       </div>

        
     <?php include"allscript.php"; ?>