<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
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

    <!-- === Breadcrumb === -->
    <div class="breadcrumb-content">
        <div class="breadcrumb-title">
            <div class="breadcrumb-container">
                <a href="_home.php">Home</a>
                <span class="btn-arrow">/</span>
                <span class="current">Search products</span>
            </div>
            <h1 class="heading-title">Search products</h1>
        </div>
    </div>

    <!-- === Content === -->
    <form class="filter">
        <div class="item">
            <input type="text" name="name" placeholder="Search for products...">
        </div>

        <div class="item submit">
            <button class="btn-search"><i class='bx bx-search'></i></button>
        </div>
    </form>

    <div id="list_Products-search">
        
    </div>

    <!-- === Footer === -->
    <?php include 'inc/footer.php'; ?>

    <button id="toTop" class="btn-toTop"><i class='bx bx-up-arrow-alt'></i></button>

    <script src="./public/javascript/search.js"></script>
</body>
</html>