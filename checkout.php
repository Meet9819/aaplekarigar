<?php
error_reporting(0);
session_start();
if (!isset($_SESSION["userSession"])) {
    header("Location: login.php");
    exit();}
?>

<?php
include 'logindb.php';

$query = $db->query("SELECT * FROM tbl_users WHERE userID = " . $_SESSION['userSession']);

$custRow = $query->fetch_assoc();
?>

                  <?php include"allcss.php"; ?>

    </head>
    <body>
        <div class="wrapper">
            <!-- header start -->
                               <?php include"header.php"; ?>

                                   <div class="breadcrumb-area mt-37 hm-4-padding">
                                        <div class="container-fluid">
                                            <div class="breadcrumb-content text-center border-top-2">
                                                <h2>checkout page</h2>
                                                <ul>
                                                    <li>
                                                        <a href="#">home</a>
                                                    </li>
                                                    <li>checkout page</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>  
                     


                        
                            <div class="container">
                              
                    <div class="row">
                             <div class="col-lg-6 col-md-12 col-12">
                            <div class="your-order">
                                <h3>Your order</h3>
                                <div class="your-order-table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-name">Product</th>
                                                <th class="product-total">Total</th>
                                            </tr>                           
                                        </thead>
                                        <tbody> 

                                    <?php
                                    $con = mysqli_connect("localhost","aaplekar_handi","loveyoudad9820102993","aaplekar_handicraft");
                                    $result = mysqli_query($con, "SELECT * FROM o ORDER BY id DESC LIMIT 1");
                                    while ($row = mysqli_fetch_array($result)) {
                                        $billno = $row['billno'] + 1;
                                    }
                                    ?>
                                   <?php 
                                    date_default_timezone_set('Asia/Kolkata');
                                    if ($cart->total_items() > 0) {
                                        //get cart items from session
                                        $cartItems = $cart->contents();
                                        foreach ($cartItems as $item) {
                                   ?>


                                            <tr class="cart_item">

                                                <input type="hidden" name="billno[]" value="<?php echo $itemcode = $billno; ?>">
                                                <input type="hidden" name="useremailid[]" value="<?php echo $itemcode = $custRow['userEmail']; ?>">
                                                <input type="hidden" name="datee[]" value="<?php echo $itemcode = date(" Y-m-d h:i "); ?>">
                                                <?php $charge = $_SESSION["shipping_charges"];?>
                                                <input type="hidden" name="shippingcharge[]" value="<?php echo $itemcode = $charge; ?>">

                                                     <?php if ($cart->total_items() > 0) {?>
                                                        <strong> <?php echo '  <input type="hidden" name="finalamount[]" value="' . $finalpayment = $cart->total() + $charge . '">  '; ?></strong>
                                                        <?php }?>


                                                <td class="product-name">
                                                        <input type="hidden" name="productcode[]" value="<?php echo $itemcode = $item["productcode"]; ?>">
                                                        <input type="hidden" name="name[]" value="<?php echo $itemcode = $item["name"]; ?>">
                                                        <?php echo $itemname = $item["name"]; ?>
                                                        <input type="hidden" name="mrp[]" value="<?php echo $itemcode = $item["mrp"]; ?>">
                                                        <?php
                                                        $mrpprice = $item["mrp"];
                                                        $gpprice = $item["price"];
                                                        $yousave = $mrpprice - $gpprice;
                                                        ?>
                                                        <input type="hidden" name="qty[]" value="<?php echo $itemcode = $item["qty"]; ?>">
                                                        <strong class="product-quantity"> ×  <?php echo $item["qty"]; ?></strong>
                                                        <input type="hidden" name="units[]" value="<?php echo $itemcode = $item["units"]; ?>">
                                                        <input type="hidden" name="price[]" value="<?php echo $itemcode = $item["price"]; ?>">
                                                </td>

                                                <td class="product-total"> 
                                                    <input type="hidden" name="subtotal[]" value="<?php echo $itemcode = $item["subtotal"]; ?>">
                                                    <span class="amount"> <?php echo '&#8377;' . $item["subtotal"]; ?></span>
                                                </td>

                                            </tr>
                                              <?php
                                                $useremailid = $custRow['userEmail'];
                                                $datee = date("Y-m-d h:i");
                                                $productcode = $item['productcode'];
                                                $mrp = $item['mrp'];
                                                $name = $item['name'];                                               
                                                $units = $item['units'];
                                                $qty = $item['qty'];
                                                $price = $item['price'];
                                                $subtotal = $item['subtotal'];
                                                $gst = $item['gst'];
                                                $finalamount = $finalpayment;
                                                $shippingcharge = $charge;
                                                $billno = $billno;
                                                $total = $subtotal + $shippingcharge;
                                                $save = mysqli_query($con, "INSERT INTO o (productcode,name,qty,price,useremailid,datee,shippingcharge,subtotal,total,finalamount,billno,units,mrp) VALUES ('$productcode','$name','$qty','$price','$useremailid','$datee','$shippingcharge','$subtotal','$total','$finalamount','$billno','$units','$mrp')");

                                                }} else {?>

                                                <p class="alert alert-warning">Your shopping cart is empty.</p>

                                                <?php }?>





                                        </tbody>
                                        <tfoot>  
                                            <tr class="cart-subtotal">
                                                <th>Shipping Charge</th>
                                                <td><span class="amount"><?php echo '&#8377;' . $charge = $_SESSION["shipping_charges"]; ?></span></td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Order Total</th>
                                                <td>  

                                                    <?php if ($cart->total_items() > 0) {?>
                                                     <strong><span class="amount"> <?php echo '&#8377;' . $finalpayment = $cart->total() + $charge; ?> </span></strong>
                                                    <?php }?>

                                                               
                                                </td>
                                            </tr>                               
                                        </tfoot>
                                    </table>
                                </div>
                               <!-- <div class="payment-method mt-40">
                                    <div class="payment-accordion">
                                        <div class="panel-group" id="faq">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h5 class="panel-title"><a data-toggle="collapse" aria-expanded="true" data-parent="#faq" href="#payment-1">Direct Bank Transfer.</a></h5>
                                                </div>
                                                <div id="payment-1" class="panel-collapse collapse show">
                                                    <div class="panel-body">
                                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h5 class="panel-title"><a class="collapsed" data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#payment-2">Cheque Payment</a></h5>
                                                </div>
                                                <div id="payment-2" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h5 class="panel-title"><a class="collapsed" data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#payment-3">PayPal</a></h5>
                                                </div>
                                                <div id="payment-3" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="order-button-payment">
                                            <input type="submit" value="Place order" />
                                        </div>                              
                                    </div>
                                </div> -->
                            </div>
                        </div>


                        <div class="col-lg-6 col-md-12 col-12">
                               <form name="registration" id="registration-form" >

                                                    <?php
                                                        $datee = date("l jS \of F Y h:i:s A");
                                                        $date = date("d-m-Y");
                                                    ?>

                                                    <textarea style="display:none" name="product_name" rows="2" cols="50"><?php echo $name; ?></textarea>
                                                    <input type="hidden" value="<?php echo $productcode; ?>" name="productcode">
                                                    <input type="hidden" value="<?php echo $finalpayment; ?>" name="product_price">
                                                    <input type="hidden" value="<?php echo $billno; ?>" name="billno">
                                                    <input type="hidden" value="<?php echo $datee; ?>" name="created"> 
                                                    <input type="hidden" value="<?php echo $date; ?>" name="datee">


                                                    <?php
                                                        error_reporting(0);
                                                        session_start();

                                                        $stmt = $user_home->runQuery("SELECT * FROM tbl_users WHERE userID=:uid");
                                                        $stmt->execute(array(":uid" => $_SESSION['userSession']));
                                                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                                                        $con = mysqli_connect("localhost","aaplekar_handi","loveyoudad9820102993","aaplekar_handicraft") or die('Unable to connect');
                                                        if (isset($_SESSION['userSession'])) {echo '
                                                    <input type="hidden" name="userID" value="' . $row['userID'] . '" >
                                                    ';}?>

                                                    <div class="col-lg-12 col-md-12 col-12">

                                                        <div class="checkbox-form">                     
                                                        <h3>Billing Details</h3>
                                                        <div class="row">
                                                           

                                                            <div class="col-md-6">
                                                                <div class="checkout-form-list">
                                                                    <label>First Name <span class="required">*</span></label>                                       
                                                                      <input  placeholder="Enter your username" name="name" required="" type="text" value="<?php echo $custRow['userName']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="checkout-form-list">
                                                                    <label>Last Name <span class="required">*</span></label>                                        
                                                                     <input  placeholder="Enter your username" name="lastname" required="" value="<?php echo $custRow['lastname']; ?>" type="text">
                                                                </div>
                                                            </div> <div class="col-md-6">
                                                                <div class="checkout-form-list">
                                                                    <label>Email Address <span class="required">*</span></label>                                        
                                                                     <input  placeholder="Enter your email address" name="email" required="" type="email" value="  <?php echo $custRow['userEmail']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="checkout-form-list">
                                                                    <label>Phone  <span class="required">*</span></label>                                       
                                                                     <input  id="mobile" placeholder="Enter Your Mobile No" value="<?php echo $custRow['mobile']; ?> " name="phone" required="" type="text">
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-12">
                                                                <div class="checkout-form-list">
                                                                    <label>Address <span class="required">*</span></label>
                                                                    <input  id="address" name="address" placeholder="House Number and Street Name" value=" <?php echo $custRow['address']; ?> " required="" type="text">
                                                                </div>
                                                            </div>
                                                          
                                                            <div class="col-md-4">
                                                                <div class="checkout-form-list">
                                                                    <label>State / County <span class="required">*</span></label>                                       
                                                                    <select name="state" class="form-control" required="">
                                                                        <option value="<?php echo $custRow['state']; ?>"><?php echo $custRow['state']; ?></option>
                                                                        <option value="">Select a state&hellip;</option>
                                                                        <option value="AP">Andhra Pradesh</option>
                                                                        <option value="AR">Arunachal Pradesh</option>
                                                                        <option value="AS">Assam</option>      
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="checkout-form-list">
                                                                    <label>Postcode / Zip <span class="required">*</span></label>                                       
                                                                     <input  id="pincode" placeholder="Enter Your pincode" value="<?php echo $custRow['pincode']; ?>" name="pincode" required="" type="text">
                                                                </div>
                                                            </div> <div class="col-md-4">
                                                                <div class="country-select">
                                                                    <label>Country <span class="required">*</span></label>
                                                                      <input  id="country" placeholder="Enter Your Country" value=" India " name="country" required="" type="text">
                                                                </div>
                                                            </div>
                                                                                
                                                        </div>



                                                        <div class="different-address">
                                                            <div class="ship-different-title">
                                                                <h3>
                                                                    <label>Ship to a different address?</label>
                                                                  
                                                                </h3>
                                                            </div>
                                                            <div  class="row">
                                                                
                                                                             
                                                                <div class="col-md-12">
                                                                    <div class="checkout-form-list">
                                                                        <label>Address <span class="required">*</span></label>
                                                                          <input  id="address" name="shiptoaddress" placeholder="House Number and Street Name" value=" <?php echo $custRow['address']; ?> " required="" type="text">
                                                                    </div>
                                                                </div>
                                                               
                                                                <div class="col-md-6">
                                                                    <div class="checkout-form-list">
                                                                        <label>State / County <span class="required">*</span></label>                                       
                                                                          <select name="shiptostate"  required="">
                                                                                        <option value="<?php echo $custRow['state']; ?>"><?php echo $custRow['state']; ?></option>
                                                                                        <option value="">Select a state&hellip;</option>
                                                                                        <option value="AP">Andhra Pradesh</option>
                                                                                        <option value="AR">Arunachal Pradesh</option>
                                                                                        <option value="AS">Assam</option>
                                                                                        <option value="BR">Bihar</option>
                                                                                       
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="checkout-form-list">
                                                                        <label>Postcode / Zip <span class="required">*</span></label>                                       
                                                                         <input  id="pincode" placeholder="Enter Your pincode" value="<?php echo $custRow['pincode']; ?>" name="shiptopincode" required="" type="text">
                                                                    </div>
                                                                </div>
                                                                                            
                                                            </div>
                                                            <div class="order-notes">
                                                                <div class="checkout-form-list mrg-nn">
                                                                    <label>Order Notes</label>
                                                                    <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                                                </div>                                  
                                                            </div>

                                                           
                                                                                    <?php if ($finalamount < 20000) {?> 

                                                                                        
                                                                                      <div class="col-md-12">
                                                                                        <div class="checkout-form-list create-acc"> 
                                                                                            <input type="checkbox" name="payment-mode" id="payment-mode-COD" value="1" <?php echo ($finalamount <= 2000) ? "checked='checked'" : "" ?> />
                                                                                            <label style="    font-size: 20px;" for="payment-mode-COD">Cash On Delivery </label>
                                                                                        </div>
                                                                                    </div> 


                                                                                  
                                                                                     <div class="col-md-12">
                                                                                        <div class="checkout-form-list create-acc"> 
                                                                                        <input type="checkbox" name="payment-mode" id="payment-mode-online" value="2" <?php echo ($finalamount > 2000) ? "checked='checked'" : "" ?>  />
                                                                                        <label style="    font-size: 20px;" for="payment-mode-online">Online Payment</label>
                                                                                    </div></div>
                                                                                    <?php }?>
                                                                           
                                                                                    <input  class="submit cr-btn btn-style" id="reg-form-submit" type="button" name="save" value="Place Order" />


                                                        </div>                                                  
                                                        </div>

                                                   </div>    

                                </form>
                        </div>  
                       
                    </div>
             </div>
        </div>
          
 <?php include "footer.php";?>      
</div>                
<?php include "allscript.php";?>
<script>
    $('#reg-form-submit').on('click', function(e) {
        e.preventDefault();
        e.stopPropagation();

        let paymentMode = Number($('input[name="payment-mode"]:checked').val()) || ((Number($('input[name="product_price"]').val()) >= 10000) ? 2 : 0);

        if (!paymentMode)   {
            return;
        }

        $('#registration-form').attr('method', 'POST');

        if (paymentMode === 1)    {
            $('#registration-form').attr('action', 'offline-pay.php');
            $('#registration-form').submit();
        } else if (paymentMode === 2) {
            $('#registration-form').attr('action', 'instamojo/pay.php');
            $('#registration-form').submit();
        }
    });
</script>