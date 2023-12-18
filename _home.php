<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nooni</title>
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/responsive.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="./public/img/logo/logo.png" type="image/x-icon">
</head>
<body>
    <!-- === Header === -->
    <?php include 'inc/header.php'; ?>

        <!-- CART -->
        <div class="cart-modal">
            <div class="cart-container">
                <div class="cart-content">
                    <div class="close-cart">
                        <i class='bx bx-x'></i>
                    </div>

                    <div class="cart-item">
                        <div class="img-product"><img src="./public/img/products/chair/chair-2.jpg" alt=""></div>
                        <div class="info">
                            <div class="name-product">Wood Outdoor Adirondack Chair - Black</div>
                            <div class="quantity-product">
                                <input type="button" value="-" class="minus">
                                <span class="quantity">1</span>
                                <input type="button" value="+" class="plus">
                            </div>
                            <div class="price-product">$1,009</div>
                        </div>
                        <div class="remove-item"><i class='bx bx-trash'></i></div>
                    </div>

                    <div class="total">
                        <span>Subtotal</span>
                        <span>$1,009</span>
                    </div>

                    <div class="btn-cart">
                        <button class="btn-view-cart"><a href="_cart.php">VIEW CART</a></button>
                        <button class="btn-checkout"><a href="_check_out.php">CHECKOUT</a></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- MENU -->
        <div class="menu-modal">
            <div class="menu-container">
                <div class="menu-content">
                    <div class="close-menu">
                        <i class='bx bx-x'></i>
                    </div>

                    <ul class="menu-list">
                        <li class="item"><a href="_home.php">Home</a></li>
                        <li class="item"><a href="_category.php">Shop</a></li>
                        <li class="item"><a href="_search.php">Search products</a></li>
                        <li class="item"><a href="#">Product</a></li>
                        <li class="item"><a href="#">Blog</a></li>
                        <li class="item"><a href="#">About us</a></li>
                        <li class="item"><a href="#">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- SEARCH -->
        <div class="search-modal">
            <div class="search-container">
                <div class="search-content">
                    <div class="search-header">
                        <h2>Search for products (0)</h2>
                        <div class="close-search">
                            <i class='bx bx-x'></i>
                        </div>
                    </div>
                    <div class="search--form">
                        <input type="text" class="search-input" placeholder="Search for products...">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- === Banner === -->
    <div id="banner" class="banner-container">
        <div class="list-slide">
            <div class="slide">
                <div class="banner-left">
                    <div class="banner-info">
                        <h3 class="small-title">NEW ARRIVALS</h3>
                        <h1 class="title">Chairs & Seating You'll Love</h1>
                        <span>Designer chair styles for every space - <a href="#">Free Shipping</a></span>
                        <a href="#">SHOP NOW</a>
                    </div>
                </div>

                <div class="banner-right">
                    <div class="img">
                        <img src="./public/img/slide_imgs/slide-1-home1-2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- === Content === -->
    <div id="home-content" class="container">
        <!-- Section shop by category -->
        <div id="category" class="categoty">
            <div class="category-title">SHOP BY CATEGORY</div>
            <div class="container">
                <div class="item">
                    <div class="category-img"><img src="./public/img/products/chair/chair-1.jpg" alt=""></div>
                    <div class="categoty-info">
                        <h3 class="name">Chair</h3>
                        <h3 class="quantity">12 products</h3>
                    </div>
                </div>

                <div class="item">
                    <div class="category-img"><img src="./public/img/products/table/table-1.jpg" alt=""></div>
                    <div class="categoty-info">
                        <h3 class="name">Table</h3>
                        <h3 class="quantity">12 products</h3>
                    </div>
                </div>

                <div class="item">
                    <div class="category-img"><img src="./public/img/products/lamp/lamp-1.jpg" alt=""></div>
                    <div class="categoty-info">
                        <h3 class="name">Lamp</h3>
                        <h3 class="quantity">12 products</h3>
                    </div>
                </div>

                <div class="item">
                    <div class="category-img"><img src="./public/img/products/bed/bed-310x310.jpg" alt=""></div>
                    <div class="categoty-info">
                        <h3 class="name">Bed</h3>
                        <h3 class="quantity">12 products</h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section banner sub -->
        <div class="banner__container">
            <div class="banner__category--left">
                <div class="section-top">
                    <img src="./public/img/banner/banner-0.jpg" alt="">
                    <h1>Up to 40% Off Top Lamp Brands</h1>
                    <a href="#">Shop now</a>
                </div>
                <div class="section-bottom">
                    <img src="./public/img/banner/banner-1.jpg" alt="">
                    <div class="info">
                        <h3>NEW PRODUCTS</h3>
                        <h1>Up To 25% Off Cabinets</h1>
                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>

            <div class="banner__category--right">
                <img src="./public/img/banner/banner-2.jpg" alt="">
                <div class="info">
                    <h3>BIG SALE</h3>
                    <h1>Up to 40% Off Furniture & Decor</h1>
                    <a href="#">Shop now</a>
                </div>
            </div>
        </div>

        <div class="banner__container--bottom">
            <div class="container">
                <span>10%</span>
                <div class="info">
                    <h2>Get More Pay Less</h2>
                    <p>On orders $500 + Use Coupon Code: <span>WSD10</span></p>
                </div>
            </div>
        </div>

        <!-- Products -->
        <div id="product-home" class="product-home">
            <div class="product-home__container">
                <div class="item main-title">
                    <h2>Best Modern Furniture</h2>
                    <a href="#">
                        See all
                        <i class='bx bx-chevrons-right'></i>
                    </a>
                </div>

                <div class="item">
                    <div class="img-product">
                        <img src="./public/img/products/chair/chair-3.jpg" alt="">
                        <div class="quick-view"><i class='bx bx-search'></i></div>
                        <div class="compare"><i class='bx bx-git-compare'></i></div>
                        <div class="wishlist"><i class='bx bx-heart'></i></div>
                        <button class="btn-product" data-product-id="1">SELECT OPTION</button>
                    </div>
                    <div class="info-product">
                        <a class="name" href="product-detail.php">Wood Outdoor Adirondack Chair</a>
                        <span class="price">$1,009</span>
                    </div>
                </div>

                <div class="item">
                    <div class="img-product">
                        <img src="./public/img/products/cabinet/cabinet-1.jpg" alt="">
                        <div class="quick-view"><i class='bx bx-search'></i></div>
                        <div class="compare"><i class='bx bx-git-compare'></i></div>
                        <div class="wishlist"><i class='bx bx-heart'></i></div>
                        <button class="btn-product" data-product-id="2">SELECT OPTION</button>
                    </div>
                    <div class="info-product">
                        <a class="name" href="product-detail.php">Solid Wood Bar Storage Cabinet</a>
                        <span class="price">$1,899</span>
                    </div>
                </div>

                <div class="item">
                    <div class="img-product">
                        <img src="./public/img/products/bed/bed-1.jpg" alt="">
                        <div class="quick-view"><i class='bx bx-search'></i></div>
                        <div class="compare"><i class='bx bx-git-compare'></i></div>
                        <div class="wishlist"><i class='bx bx-heart'></i></div>
                        <button class="btn-product" data-product-id="3">SELECT OPTION</button>
                    </div>
                    <div class="info-product">
                        <a class="name" href="#">Solid Wood Bed With Fabric Headboard</a>
                        <span class="price">$3,707 - $5,707</span>
                    </div>
                </div>

                <div class="item">
                    <div class="img-product">
                        <img src="./public/img/products/lamp/lamp3.jpg" alt="">
                        <div class="quick-view"><i class='bx bx-search'></i></div>
                        <div class="compare"><i class='bx bx-git-compare'></i></div>
                        <div class="wishlist"><i class='bx bx-heart'></i></div>
                        <button class="btn-product" data-product-id="4">SELECT OPTION</button>
                    </div>
                    <div class="info-product">
                        <a class="name" href="#">Floor Lamp With Polyester Shade</a>
                        <span class="price">$399</span>
                    </div>
                </div>

                <div class="item">
                    <div class="img-product">
                        <img src="./public/img/products/chair/chair-4.jpg" alt="">
                        <div class="quick-view"><i class='bx bx-search'></i></div>
                        <div class="compare"><i class='bx bx-git-compare'></i></div>
                        <div class="wishlist"><i class='bx bx-heart'></i></div>
                        <button class="btn-product" data-product-id="5">SELECT OPTION</button>
                    </div>
                    <div class="info-product">
                        <a class="name" href="#">Garden Chair With Armrests</a>
                        <span class="price">$1,009</span>
                    </div>
                </div>

                <div class="item">
                    <div class="img-product">
                        <img src="./public/img/products/lamp/lamp-2.jpg" alt="">
                        <div class="quick-view"><i class='bx bx-search'></i></div>
                        <div class="compare"><i class='bx bx-git-compare'></i></div>
                        <div class="wishlist"><i class='bx bx-heart'></i></div>
                        <button class="btn-product" data-product-id="6">SELECT OPTION</button>
                    </div>
                    <div class="info-product">
                        <a class="name" href="#">Led Steel Floor Lamp</a>
                        <span class="price">$299</span>
                    </div>
                </div>
                
                <div class="item">
                    <div class="img-product">
                        <img src="./public/img/products/chair/chair-5.jpg" alt="">
                        <div class="quick-view"><i class='bx bx-search'></i></div>
                        <div class="compare"><i class='bx bx-git-compare'></i></div>
                        <div class="wishlist"><i class='bx bx-heart'></i></div>
                        <button class="btn-product" data-product-id="7">SELECT OPTION</button>
                    </div>
                    <div class="info-product">
                        <a class="name" href="#">Teak Garden Chair With Armrests</a>
                        <span class="price">$999</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section Products -->

        <!-- Section Blog -->
        <div id="home-blog" class="home-blog">
            <div class="home-blog__container">
                <div class="title">
                    <h2>OUR BLOG</h2>
                </div>

                <div class="blog">
                    <div class="blog__img">
                        <img src="./public/img/img-blog/blog-1.jpg" alt="">
                        <div class="date-time"><span>APR 10, 2023</span></div>
                    </div>
                    <div class="blog__content">
                        <div class="entry-meta-top">
                            <a href="#">FURNITURE</a>
                            <a href="#">TABLE</a>
                        </div>
                        <div class="heading-title">
                            <a href="#">The Secrets to a Living Room that Draws You In</a>
                        </div>

                        <div class="description">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat ab velit culpa delectus dolores neque sequi nostrum pariatur corporis et!</p>
                        </div>

                        <a href="#" class="button-reead-more">READ MORE</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section Blog -->
    </div>
    <!-- === End Home Content === -->

    <div id="home__img-footer">
        <img src="./public/img/video-placeholder.jpg" alt="">
        <div class="overlay"><span>WOOD</span></div>    
    </div>

    <!-- === Footer === -->
    <?php include 'inc/footer.php'; ?>

    <button id="toTop" class="btn-toTop"><i class='bx bx-up-arrow-alt'></i></button>

    <script src="./public/javascript/main.js"></script>
</body>
</html>