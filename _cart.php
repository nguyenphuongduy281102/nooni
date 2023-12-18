<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
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
                        <li class="item"><a href="category.php">Shop</a></li>
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

    <!-- === Breadcrumb === -->
    <div class="breadcrumb-content">
        <div class="breadcrumb-title">
            <div class="breadcrumb-container">
                <a href="_home.php">Home</a>
                <span class="btn-arrow">/</span>
                <span class="current">Shopping Cart</span>
            </div>
            <h1 class="heading-title">Shopping Cart</h1>
        </div>
    </div>

    <!-- Content -->
    <div class="woocommerce">
        <div class="cart-form">
            <table class="cart-table">
                <thead>
                    <tr>
                        <th class="product-name">Product</th>
                        <th></th>
                        <th class="product-price">Price</th>
                        <th class="product-quantity">Quantity</th>
                        <th class="product-subtotal">Subtotal</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="cart_item">
                        <td class="product-thumbnail" style="width:120px;">
                            <a href="#"><img src="./public/img/products/chair/chair-2.jpg" alt=""></a>
                        </td>
                        <td class="product-name" style="width: 170px;">Wood Outdoor Adirondack Chair - Teak</td>
                        <td class="product-price" style="width: 104px;">$1,009</td>
                        <td class="product-quantity" style="width: 104px;">
                            <div>
                                <input type="button" value="-" class="minus">
                                <input type="text" value="1" class="number">
                                <input type="button" value="+" class="plus">
                            </div>
                        </td>
                        <td class="product-subtotal" style="width: 104px;">$1,009</td>
                        <td class="product-remove" style="width: 70px;"><i class='bx bx-trash'></i></td>
                    </tr>
                </tbody>

                
                
            </table>

            <div class="action">
                <div class="coupon">
                    <input type="text" class="input-text" placeholder="Coupon code">
                    <button>APPLY COUPON</button>
                </div>

                <div class="btn_action">
                    <button class="empty-cart">EMPTY CART</button>
                    <button class="update-cart">UPDATE CART</button>
                </div>
            </div>
        </div>

        <div class="cart-collaterals">
            <div class="cart-total">
                <h2>CART TOTALS</h2>
                <div class="shop_table">
                    <div class="shop_table_heading">
                        <span>Subtotal</span>
                        <span>$1,009</span>
                    </div>

                    <div class="shop_table_heading">
                        <span>Shipping</span>
                        <span><input type="checkbox"> Flat rate: $10</span>
                    </div>

                    <div class="icon">
                        <i class='bx bxs-package'></i>
                        <span>Calculate shipping</span>
                    </div>

                    <div class="total">
                        <span>Total</span>
                        <span>$1,009</span>
                    </div>

                    <div class="btn-action">
                        <button>PROCEED TO CHECKOUT</button>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div id="cart-products">
        <div class="title"><h2>YOU MAY BE INTERESTED IN…</h2></div>
        <!-- Products -->
        <div id="product-home" class="product-home">
            <div class="product-home__container">
    
                <div class="item">
                    <div class="img-product">
                        <img src="./public/img/products/cabinet/cabinet-1.jpg" alt="">
                        <div class="quick-view"><i class='bx bx-search'></i></div>
                        <div class="compare"><i class='bx bx-git-compare'></i></div>
                        <div class="wishlist"><i class='bx bx-heart'></i></div>
                        <button class="btn-product">SELECT OPTION</button>
                    </div>
                    <div class="info-product">
                        <a class="name" href="#">Solid Wood Bar Storage Cabinet</a>
                        <span class="price">$1,899</span>
                    </div>
                </div>
    
                <div class="item">
                    <div class="img-product">
                        <img src="./public/img/products/bed/bed-1.jpg" alt="">
                        <div class="quick-view"><i class='bx bx-search'></i></div>
                        <div class="compare"><i class='bx bx-git-compare'></i></div>
                        <div class="wishlist"><i class='bx bx-heart'></i></div>
                        <button class="btn-product">SELECT OPTION</button>
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
                        <button class="btn-product">SELECT OPTION</button>
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
                        <button class="btn-product">SELECT OPTION</button>
                    </div>
                    <div class="info-product">
                        <a class="name" href="#">Garden Chair With Armrests</a>
                        <span class="price">$1,009</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- === Footer === -->
    <?php include 'inc/footer.php'; ?>

    <button id="toTop" class="btn-toTop"><i class='bx bx-up-arrow-alt'></i></button>

    <script src="./public/javascript/main.js"></script>
</body>
</html>