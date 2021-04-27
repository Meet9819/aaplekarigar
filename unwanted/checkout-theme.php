                    <?php include"allcss.php"; ?>

    </head>
    <body>
        <div class="wrapper">
            <!-- header start -->
                               <?php include"header1.php"; ?>

          
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
            <div class="banner-area hm-4-padding">
                <div class="container-fluid">
                    <div class="banner-img">
                        <a href="#"><img src="assets/img/banner/16.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <!-- checkout-area start -->
            <div class="checkout-area pt-130 hm-3-padding pb-100">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="coupon-accordion">
                                <!-- ACCORDION START -->
                                <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                                <div id="checkout-login" class="coupon-content">
                                    <div class="coupon-info">
                                        <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p>
                                        <form action="#">
                                            <p class="form-row-first">
                                                <label>Username or email <span class="required">*</span></label>
                                                <input type="text" />
                                            </p>
                                            <p class="form-row-last">
                                                <label>Password  <span class="required">*</span></label>
                                                <input type="text" />
                                            </p>
                                            <p class="form-row">					
                                                <input type="submit" value="Login" />
                                                <label>
                                                    <input type="checkbox" />
                                                     Remember me 
                                                </label>
                                            </p>
                                            <p class="lost-password">
                                                <a href="#">Lost your password?</a>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                                <!-- ACCORDION END -->	
                                <!-- ACCORDION START -->
                                <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                                <div id="checkout_coupon" class="coupon-checkout-content">
                                    <div class="coupon-info">
                                        <form action="#">
                                            <p class="checkout-coupon">
                                                <input type="text" placeholder="Coupon code" />
                                                <input type="submit" value="Apply Coupon" />
                                            </p>
                                        </form>
                                    </div>
                                </div>
                                <!-- ACCORDION END -->						
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-12">
                            <form action="#">
                                <div class="checkbox-form">						
                                    <h3>Billing Details</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="country-select">
                                                <label>Country <span class="required">*</span></label>
                                                <select>
                                                  <option value="volvo">bangladesh</option>
                                                  <option value="saab">Algeria</option>
                                                  <option value="mercedes">Afghanistan</option>
                                                  <option value="audi">Ghana</option>
                                                  <option value="audi2">Albania</option>
                                                  <option value="audi3">Bahrain</option>
                                                  <option value="audi4">Colombia</option>
                                                  <option value="audi5">Dominican Republic</option>
                                                </select> 										
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>First Name <span class="required">*</span></label>										
                                                <input type="text" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Last Name <span class="required">*</span></label>										
                                                <input type="text" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Company Name</label>
                                                <input type="text" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Address <span class="required">*</span></label>
                                                <input type="text" placeholder="Street address" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">									
                                                <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Town / City <span class="required">*</span></label>
                                                <input type="text" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>State / County <span class="required">*</span></label>										
                                                <input type="text" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Postcode / Zip <span class="required">*</span></label>										
                                                <input type="text" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Email Address <span class="required">*</span></label>										
                                                <input type="email" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Phone  <span class="required">*</span></label>										
                                                <input type="text" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list create-acc">	
                                                <input id="cbox" type="checkbox" />
                                                <label>Create an account?</label>
                                            </div>
                                            <div id="cbox_info" class="checkout-form-list create-account">
                                                <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                                <label>Account password  <span class="required">*</span></label>
                                                <input type="password" placeholder="password" />	
                                            </div>
                                        </div>								
                                    </div>
                                    <div class="different-address">
                                        <div class="ship-different-title">
                                            <h3>
                                                <label>Ship to a different address?</label>
                                                <input id="ship-box" type="checkbox" />
                                            </h3>
                                        </div>
                                        <div id="ship-box-info" class="row">
                                            <div class="col-md-12">
                                                <div class="country-select">
                                                    <label>Country <span class="required">*</span></label>
                                                    <select>
                                                      <option value="volvo">bangladesh</option>
                                                      <option value="saab">Algeria</option>
                                                      <option value="mercedes">Afghanistan</option>
                                                      <option value="audi">Ghana</option>
                                                      <option value="audi2">Albania</option>
                                                      <option value="audi3">Bahrain</option>
                                                      <option value="audi4">Colombia</option>
                                                      <option value="audi5">Dominican Republic</option>
                                                    </select> 										
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>First Name <span class="required">*</span></label>										
                                                    <input type="text" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Last Name <span class="required">*</span></label>										
                                                    <input type="text" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Company Name</label>
                                                    <input type="text" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Address <span class="required">*</span></label>
                                                    <input type="text" placeholder="Street address" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">									
                                                    <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Town / City <span class="required">*</span></label>
                                                    <input type="text" placeholder="Town / City" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>State / County <span class="required">*</span></label>										
                                                    <input type="text" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Postcode / Zip <span class="required">*</span></label>										
                                                    <input type="text" placeholder="Postcode / Zip" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Email Address <span class="required">*</span></label>										
                                                    <input type="email" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Phone  <span class="required">*</span></label>										
                                                    <input type="text" placeholder="Postcode / Zip" />
                                                </div>
                                            </div>								
                                        </div>
                                        <div class="order-notes">
                                            <div class="checkout-form-list mrg-nn">
                                                <label>Order Notes</label>
                                                <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery." ></textarea>
                                            </div>									
                                        </div>
                                    </div>													
                                </div>
                            </form>
                        </div>	
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
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    Vestibulum suscipit <strong class="product-quantity"> × 1</strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="amount">£165.00</span>
                                                </td>
                                            </tr>
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    Vestibulum dictum magna	<strong class="product-quantity"> × 1</strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="amount">£50.00</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Cart Subtotal</th>
                                                <td><span class="amount">£215.00</span></td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Order Total</th>
                                                <td><strong><span class="amount">£215.00</span></strong>
                                                </td>
                                            </tr>								
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-method mt-40">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- checkout-area end -->	
            <div class="brand-logo-area hm-4-padding">
                <div class="container-fluid">
                    <div class="brand-logo-active owl-carousel gray-bg ptb-130">
                        <div class="single-logo">
                            <img alt="" src="assets/img/brand-logo/1.png">
                        </div>
                        <div class="single-logo">
                            <img alt="" src="assets/img/brand-logo/2.png">
                        </div>
                        <div class="single-logo">
                            <img alt="" src="assets/img/brand-logo/3.png">
                        </div>
                        <div class="single-logo">
                            <img alt="" src="assets/img/brand-logo/4.png">
                        </div>
                        <div class="single-logo">
                            <img alt="" src="assets/img/brand-logo/5.png">
                        </div>
                        <div class="single-logo">
                            <img alt="" src="assets/img/brand-logo/3.png">
                        </div>
                    </div>
                </div>
            </div>
                                         <?php include"footer.php"; ?>

        </div>
        
        
        
		
		
		
		
		
		
		
		
		<!-- all js here -->
                                 <?php include"allscript.php"; ?>

    </body>

<!-- Mirrored from preview.hasthemes.com/nokshi/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Oct 2020 01:40:10 GMT -->
</html>
