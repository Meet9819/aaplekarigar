              
            <?php  
            include 'Cart.php';
            $cart = new Cart;
            ?>
             
            <?php
            error_reporting(0);
            session_start();
            require_once 'class.user.php';
            $user_home = new USER();
            if(!$user_home->is_logged_in())
            {
            }
            $stmt = $user_home->runQuery("SELECT * FROM tbl_users WHERE userID=:uid");
            $stmt->execute(array(":uid"=>$_SESSION['userSession']));
            $row = $stmt->fetch(PDO::FETCH_ASSOC); 

            $con = mysqli_connect("localhost","aaplekar_handi","loveyoudad9820102993","aaplekar_handicraft") or die ('Unable to connect');
            ?>

            <header>
                <div class="header-area transparent-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-5 col-5">
                               
                                <div class="sticky-logo">
                                    <a href="index.php"><img style="width: 70px" src="assets/img/logo/2.png" alt="" /></a>
                                </div>
                               <!-- <div class="logo-small-device">
                                    <a href="index.php"><img style="width: 150px" alt="" src="assets/img/logo/logo.png"></a>
                                </div> 
                                -->
                                 <div class="logo" style="padding: 10px">
                                        <a href="index.php"><img style="width: 150px" src="assets/img/logo/logo.png" alt="" /></a>
                                 </div>

                            </div>
                            <div class="col-lg-8 col-md-8 d-none d-md-block">
                                <div class="logo-menu-wrapper text-center">
                                   
                                    <div class="main-menu">
                                        <nav>
                                            <ul>  
                                                <li><a href="index.php">home <i class="#"></i></a>
                                                   
                                                </li>

                                                 <li><a href="about-us.php">about us </a></li>
                                                                       
                                                 <li ><a href="#">Shop <i class="ion-ios-arrow-down"></i></a>
                                                    <ul  class="lavel-menu">
                                                    <!-- MENU CODE --> 
                                                    <?php  error_reporting(0);
                                                    include "db.php";

                                                    function get_menu_tree($parent_id) 
                                                    {
                                                        global $con;
                                                        $menu = "";
                                                        $sqlquery = " SELECT * FROM menu where status='1' and parent_id='" .$parent_id . "' ";
                                                        $res=mysqli_query($con,$sqlquery);
                                                        while($row=mysqli_fetch_array($res,MYSQLI_ASSOC)) 
                                                        { 
                                                            $menu .= '<li > <a href="shop.php?q='.$row['menu_id'].'">'.$row['menu_name'].'</a> ';
                                                            $menu .=  '<ul>'.get_menu_tree($row['menu_id']).'
                                                                        </ul>'; 
                                                            $menu .= '</li>';
                                                        }
                                                        return $menu;
                                                    }  

                                                    ?>
                                                    <?php echo get_menu_tree(0); ?>
                                                    <!-- MENU CODE -->                            
                                                  </ul>
                                                </li>
                                             

                                               
                                           
                                                <li><a href="contact.php">contact us</a></li> 


                                                    <?php
                                                    if(isset($_SESSION['userSession']))
                                                    {
                                                     echo '  
                                                    <li > 
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Hi, '.substr($row['userName'],0,5).'..  </b> <i class="fa fa-angle-down"></i></a>
                                                        <ul >
                                                    <li>
                                                        <a href="profile.php">My Account</a>
                                                    </li> 

                                                     <li>
                                                        <a href="wishlist.php">My Wishlist</a>
                                                    </li>
                                                     <li>
                                                        <a href="history.php">My Order</a>
                                                    </li>                                    
                                                    <li>
                                                        <a href="logout.php" > Sign Out</a> 
                                                    </li>
                                                        </ul>
                                                    </li>  
                                                    '; } else {

                                                    echo '                                                    
                                                    <li> <a href="login.php">Login</a> / <a  href="register.php">Register</a></li>';
                           
                                                    }
                                                     ?> 

                                                     
                                                <li><a class="blinking" style="    color: white;    background-color: brown;    padding: 11px;" href="sale.php">Sale</a></li> 

                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-7 col-7">
                                <div class="header-site-icon">
                                    <div class="header-search same-style">
                                        <button class="sidebar-trigger-search">
                                            <span class="ti-search"></span>
                                        </button>
                                    </div>
                                    <div class="header-login same-style">
                                        <a href="wishlist.php">
                                            <span class="ti-heart"></span>
                                        </a>
                                    </div>
                                    <div class="header-cart same-style">
                                        <a href="viewcart.php"><button class="sidebar-trigger">
                                            <i class="ti-shopping-cart"></i>
                                           <span class="count-style" id="cartCount">  
                                                 <?php echo $cart->total_items(); ?>

                                            </span>
                                        </button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="mobile-menu-area col-12">
                                <div class="mobile-menu">
                                    <nav id="mobile-menu-active">
                                        <ul class="menu-overflow">
                                            <li><a href="#">HOME</a>
                                             
                                            </li>
                                  
                                         <li><a href="#">Shop</a>
                                                <ul>
                                                    <li><a href="index.php">home version 1</a></li>
                                                    <li><a href="index.php">home version 2</a></li>
                                                    <li><a href="index.php">home version 3</a></li>
                                                    <li><a href="index.php">home version 4</a></li>
                                                </ul>
                                            </li>
                                                                 <li><a href="about-us.php">about us </a></li>

                                    
                                            <li><a href="contact.php"> Contact us</a></li>
                                        </ul>
                                    </nav>							
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>







            <!-- main-search start -->
            <div class="main-search-active">
                <div class="sidebar-search-icon">
                    <button class="search-close"><span class="ti-close"></span></button>
                </div>
                <div class="sidebar-search-input">

                    

                    <form  action="shop.php" method="post">
                        <div class="form-search">
                            <input id="products"  name="name"  class="input-text" value="" placeholder="Search Entire Store" type="search">
                            <button type="submit" name="search">
                                <i class="ti-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
             
            <!-- menu-style start -->
            <div class="header-height"></div>