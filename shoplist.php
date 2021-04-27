      <?php include"allcss.php"; ?>

    </head>
    <body>
        <div class="wrapper">
            <!-- header start -->
           <?php include"header1.php"; ?>

           
            <!-- menu-style start -->
           <div class="header-height"></div>
            <div class="breadcrumb-area mt-37 hm-4-padding">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center border-top-2">
                        <h2>Shop List</h2>
                        <ul>
                            <li>
                                <a href="#">home</a>
                            </li>
                            <li>Shop List</li>
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
            <div class="shop-wrapper hm-3-padding pt-120 pb-100">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="shop-topbar-wrapper">
                                <div class="grid-list-options">
                                    <ul class="view-mode">
                                        <li><a href="#product-grid" data-view="product-grid"><i class="ion-grid"></i></a></li>
                                        <li class="active"><a href="#product-list" data-view="product-list"><i class="ion-navicon"></i></a></li>
                                    </ul>
                                </div>
                                <div class="shop-filter">
                                    <button class="product-filter-toggle">filter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product-filter-wrapper">
                                <div class="row">
                                    <div class="product-filter col-md-3 col-sm-6 col-xs-12 mb-30">
                                        <h5>Sort by</h5>
                                        <ul class="sort-by">
                                            <li><a href="#">Default</a></li>
                                            <li><a href="#">Popularity</a></li>
                                            <li><a href="#">Average rating</a></li>
                                            <li><a href="#">Newness</a></li>
                                            <li><a href="#">Price: Low to High</a></li>
                                            <li><a href="#">Price: High to Low</a></li>
                                        </ul>
                                    </div>
                                    <div class="product-filter col-md-3 col-sm-6 col-xs-12 mb-30">
                                        <h5>color filters</h5>
                                        <ul class="color-filter">
                                            <li><a href="#"><i style="background-color: #000000;"></i>Black</a></li>
                                            <li><a href="#"><i style="background-color: #663300;"></i>Brown</a></li>
                                            <li><a href="#"><i style="background-color: #FF6801;"></i>Orange</a></li>
                                            <li><a href="#"><i style="background-color: #ff0000;"></i>red</a></li>
                                            <li><a href="#"><i style="background-color: #FFEE00;"></i>Yellow</a></li>
                                        </ul>
                                    </div>
                                    <div class="product-filter col-md-3 col-sm-6 col-xs-12 mb-30">
                                        <h5>product tags</h5>
                                        <div class="product-tags">
                                            <a href="#">New ,</a>
                                            <a href="#">brand ,</a>
                                            <a href="#">black ,</a>
                                            <a href="#">white ,</a>
                                            <a href="#">chire ,</a>
                                            <a href="#">table ,</a>
                                            <a href="#">Lorem ,</a>
                                            <a href="#">ipsum ,</a>
                                            <a href="#">dolor ,</a>
                                            <a href="#">sit ,</a>
                                            <a href="#">amet ,</a>
                                        </div>
                                    </div>
                                    <div class="product-filter col-md-3 col-sm-6 col-xs-12 mb-30">
                                        <h5>Filter by price</h5>
                                        <div id="price-range"></div>
                                        <div class="price-values">
                                            <span>Price:</span>
                                            <input type="text" class="price-amount">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-list-product-wrapper">
                        <div class="product-list product-view">
                            <div class="row">
                                <div class="product-width col-md-6 col-xl-3 col-lg-4">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="assets/img/product/21.jpg" alt="">
                                            </a>
                                            <div class="price-decrease">
                                                <span>30% off</span>
                                            </div>
                                            <div class="product-action-3">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i> Quict View
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-title-wishlist">
                                                <div class="product-title-3">
                                                    <h4><a href="product-details.html">Cloth Jewelry</a></h4>
                                                </div>
                                                <div class="product-wishlist-3">
                                                    <a href="#"><i class="ti-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-peice-addtocart">
                                                <div class="product-peice-3">
                                                    <span class="old">$200.00 </span>
                                                    <span>$120.00</span>
                                                </div>
                                                <div class="product-addtocart">
                                                    <a href="#"> <i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h2><a href="product-details.html">Awesome Cloth Jewelry</a></h2>
                                            <div class="product-rating">
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="old">$22.00 </span>
                                                <span>$19.00</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat</p>
                                            <div class="shop-list-cart">
                                                <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-width col-md-6 col-xl-3 col-lg-4">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="assets/img/product/22.jpg" alt="">
                                            </a>
                                            <div class="product-action-3">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i> Quict View
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-title-wishlist">
                                                <div class="product-title-3">
                                                    <h4><a href="product-details.html">Cloth Jewelry</a></h4>
                                                </div>
                                                <div class="product-wishlist-3">
                                                    <a href="#"><i class="ti-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-peice-addtocart">
                                                <div class="product-peice-3">
                                                    <span>$150.00</span>
                                                </div>
                                                <div class="product-addtocart">
                                                    <a href="#"> <i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h2><a href="product-details.html">Awesome Cloth Jewelry</a></h2>
                                            <div class="product-rating">
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="old">$22.00 </span>
                                                <span>$19.00</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat</p>
                                            <div class="shop-list-cart">
                                                <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-width col-md-6 col-xl-3 col-lg-4">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="assets/img/product/23.jpg" alt="">
                                            </a>
                                            <div class="price-decrease">
                                                <span>50% off</span>
                                            </div>
                                            <div class="product-action-3">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i> Quict View
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-title-wishlist">
                                                <div class="product-title-3">
                                                    <h4><a href="product-details.html">Cloth Bracelet </a></h4>
                                                </div>
                                                <div class="product-wishlist-3">
                                                    <a href="#"><i class="ti-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-peice-addtocart">
                                                <div class="product-peice-3">
                                                    <span class="old">$200.00 </span>
                                                    <span>$120.00</span>
                                                </div>
                                                <div class="product-addtocart">
                                                    <a href="#"> <i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h2><a href="product-details.html">Nice Cloth Bracelet </a></h2>
                                            <div class="product-rating">
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="old">$22.00 </span>
                                                <span>$19.00</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat</p>
                                            <div class="shop-list-cart">
                                                <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-width col-md-6 col-xl-3 col-lg-4">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="assets/img/product/24.jpg" alt="">
                                            </a>
                                            <div class="product-action-3">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i> Quict View
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-title-wishlist">
                                                <div class="product-title-3">
                                                    <h4><a href="product-details.html">Cloth Jewelry</a></h4>
                                                </div>
                                                <div class="product-wishlist-3">
                                                    <a href="#"><i class="ti-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-peice-addtocart">
                                                <div class="product-peice-3">
                                                    <span>$200.00</span>
                                                </div>
                                                <div class="product-addtocart">
                                                    <a href="#"> <i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h2><a href="product-details.html">Cloth Hairpin</a></h2>
                                            <div class="product-rating">
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="old">$22.00 </span>
                                                <span>$19.00</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat</p>
                                            <div class="shop-list-cart">
                                                <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-width col-md-6 col-xl-3 col-lg-4">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="assets/img/product/25.jpg" alt="">
                                            </a>
                                            <div class="product-action-3">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i> Quict View
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-title-wishlist">
                                                <div class="product-title-3">
                                                    <h4><a href="product-details.html">Cloth Jewelry</a></h4>
                                                </div>
                                                <div class="product-wishlist-3">
                                                    <a href="#"><i class="ti-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-peice-addtocart">
                                                <div class="product-peice-3">
                                                    <span class="old">$200.00 </span>
                                                    <span>$120.00</span>
                                                </div>
                                                <div class="product-addtocart">
                                                    <a href="#"> <i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h2><a href="product-details.html">Awesome Cloth Jewelry</a></h2>
                                            <div class="product-rating">
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="old">$22.00 </span>
                                                <span>$19.00</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat</p>
                                            <div class="shop-list-cart">
                                                <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-width col-md-6 col-xl-3 col-lg-4">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="assets/img/product/26.jpg" alt="">
                                            </a>
                                            <div class="price-decrease">
                                                <span>20% off</span>
                                            </div>
                                            <div class="product-action-3">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i> Quict View
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-title-wishlist">
                                                <div class="product-title-3">
                                                    <h4><a href="product-details.html">Cloth Bracelet</a></h4>
                                                </div>
                                                <div class="product-wishlist-3">
                                                    <a href="#"><i class="ti-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-peice-addtocart">
                                                <div class="product-peice-3">
                                                    <span>$100.00</span>
                                                </div>
                                                <div class="product-addtocart">
                                                    <a href="#"> <i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h2><a href="product-details.html">Cloth Bracelet</a></h2>
                                            <div class="product-rating">
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="old">$22.00 </span>
                                                <span>$19.00</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat</p>
                                            <div class="shop-list-cart">
                                                <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-width col-md-6 col-xl-3 col-lg-4">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="assets/img/product/27.jpg" alt="">
                                            </a>
                                            <div class="product-action-3">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i> Quict View
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-title-wishlist">
                                                <div class="product-title-3">
                                                    <h4><a href="product-details.html">Cloth Hairpin</a></h4>
                                                </div>
                                                <div class="product-wishlist-3">
                                                    <a href="#"><i class="ti-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-peice-addtocart">
                                                <div class="product-peice-3">
                                                    <span class="old">$200.00 </span>
                                                    <span>$120.00</span>
                                                </div>
                                                <div class="product-addtocart">
                                                    <a href="#"> <i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h2><a href="product-details.html">Awesome Cloth Jewelry</a></h2>
                                            <div class="product-rating">
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="old">$22.00 </span>
                                                <span>$19.00</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat</p>
                                            <div class="shop-list-cart">
                                                <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-width col-md-6 col-xl-3 col-lg-4">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="assets/img/product/28.jpg" alt="">
                                            </a>
                                            <div class="price-decrease">
                                                <span>30% off</span>
                                            </div>
                                            <div class="product-action-3">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i> Quict View
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-title-wishlist">
                                                <div class="product-title-3">
                                                    <h4><a href="product-details.html">Cloth Jewelry</a></h4>
                                                </div>
                                                <div class="product-wishlist-3">
                                                    <a href="#"><i class="ti-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-peice-addtocart">
                                                <div class="product-peice-3">
                                                    <span>$170.00</span>
                                                </div>
                                                <div class="product-addtocart">
                                                    <a href="#"> <i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h2><a href="product-details.html">Awesome Cloth Jewelry</a></h2>
                                            <div class="product-rating">
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="old">$22.00 </span>
                                                <span>$19.00</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat</p>
                                            <div class="shop-list-cart">
                                                <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination-style text-center mt-30">
                                <ul>
                                    <li>
                                        <a class="active" href="#">1</a>
                                    </li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                    <li>
                                        <a href="#">3</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ion-chevron-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

            <!-- modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close" aria-hidden="true"></span>
                </button>
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="qwick-view-left">
                                <div class="quick-view-learg-img">
                                    <div class="quick-view-tab-content tab-content">
                                        <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                            <img src="assets/img/quick-view/l1.jpg" alt="">
                                        </div>
                                        <div class="tab-pane fade" id="modal2" role="tabpanel">
                                            <img src="assets/img/quick-view/l2.jpg" alt="">
                                        </div>
                                        <div class="tab-pane fade" id="modal3" role="tabpanel">
                                            <img src="assets/img/quick-view/l3.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="quick-view-list nav" role="tablist">
                                    <a class="active" href="#modal1" data-toggle="tab">
                                        <img src="assets/img/quick-view/s1.jpg" alt="">
                                    </a>
                                    <a href="#modal2" data-toggle="tab">
                                        <img src="assets/img/quick-view/s2.jpg" alt="">
                                    </a>
                                    <a href="#modal3" data-toggle="tab">
                                        <img src="assets/img/quick-view/s3.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="qwick-view-right">
                                <div class="qwick-view-content">
                                    <h3>Handcrafted Supper Mug</h3>
                                    <div class="price">
                                        <span class="new">$90.00</span>
                                        <span class="old">$120.00  </span>
                                    </div>
                                    <div class="rating-number">
                                        <div class="quick-view-rating">
                                            <i class="ion-ios-star red-star"></i>
                                            <i class="ion-ios-star red-star"></i>
                                            <i class="ion-ios-star red-star"></i>
                                            <i class="ion-ios-star red-star"></i>
                                            <i class="ion-ios-star red-star"></i>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                                    <div class="quick-view-select">
                                        <div class="select-option-part">
                                            <label>Size*</label>
                                            <select class="select">
                                                <option value="">- Please Select -</option>
                                                <option value="">900</option>
                                                <option value="">700</option>
                                            </select>
                                        </div>
                                        <div class="select-option-part">
                                            <label>Color*</label>
                                            <select class="select">
                                                <option value="">- Please Select -</option>
                                                <option value="">orange</option>
                                                <option value="">pink</option>
                                                <option value="">yellow</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="quickview-plus-minus">
                                        <div class="cart-plus-minus">
											<input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
										</div>
                                        <div class="quickview-btn-cart">
                                            <a class="btn-style cr-btn" href="#"><span>add to cart</span></a>
                                        </div>
                                        <div class="quickview-btn-wishlist">
                                            <a class="btn-hover cr-btn" href="#"><span><i class="ion-ios-heart-outline"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
		
		
		
		
		
		
		
		
		<!-- all js here -->
                <?php include"allscript.php"; ?>

    </body>

<!-- Mirrored from preview.hasthemes.com/nokshi/shop-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Oct 2020 01:38:27 GMT -->
</html>
