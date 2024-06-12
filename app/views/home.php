<?php require 'C:\xampp\htdocs\Dispon\core\config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=ASSETS_URL?>css/index.css">
</head>
<body class="">
    <header class="">
        <div class="container">
            <div class="navigation">
                <div class="navigation_itens">
                    <div class="logo">
                        <ion-icon name="pie-chart"></ion-icon>
                        <h1><a href="">d<span class="is">is</span><span class="po">po</span>n</a></h1>
                    </div>
                   <nav class="">
                        <ul class="nav__links">
                            <li><a href="<?= BASE_URL ?>about">About</a></li>
                            <li><a href="<?=  BASE_URL ?>contact">Contact</a></li>
                        </ul>
                   </nav>
                </div>
                <div class="nav__buttons">
                    <li><a href="">Login</a></li>
                    <li><a href="">Post a Product</a></li>
                </div>
                <div class="burgerMenu">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section id="banner" >
            <div class="container">
                <div class="banner__description">
                    <div class="ilustration">
                        <img src="<?=ASSETS_URL?>images/undraw_map_dark_re_36sy.svg" alt="">
                    </div>
                    <div class="description">
                        <h1>Find The <span>Perfect </span>Product for you</h1>
                        <p>Find you products in hours not weeks, from you favorities suppliers, search for free</p>
                        <form action="">
                            <div class="">
                                <input type="search" placeholder="Product name">
                                <button type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section id="companies">
            <div class="container">
                <div>
                </div>
            </div>
        </section>

        <section id="products">
            <div class="container">
                <div class="description">
                    <h1>The best Products for you here</h1>
                    <p>Explore products from different suppliers and purchase them as soon as possible, what are you waiting for?</p>
                </div>
                <div class="product__box__container">
                    <div class="product__box">
                        <div class="product">
                            <div class="">
                                <div class="">
                                    <h5 class="product__name">Rice</h5>
                                    <p class="supllier">Carrinho industria</p>
                                </div>
                                <div class="">
                                <p class="location">Benguela</p>
                                    <p class="price">3000kz</p>
                                    <p class="quantity">3</p>
                                </div>
                            </div>
                        </div>

                        <div class="product">
                            <div class="">
                                <div class="">
                                    <h5 class="product__name">Rice</h5>
                                    <p class="supllier">Carrinho industria</p>
                                </div>
                                <div class="">
                                    <p class="location">Benguela</p>
                                    <p class="price">3000kz</p>
                                    <p class="quantity">3</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product__box">
                        <div class="product">
                            <div class="">
                                <div class="">
                                    <h5 class="product__name">Rice</h5>
                                    <p class="supllier">Carrinho industria</p>
                                </div>
                                <div class="">
                                    <p class="location">Benguela</p>
                                    <p class="price">3000kz</p>
                                    <p class="quantity">3</p>
                                </div>
                            </div>
                        </div>

                        <div class="product">
                            <div class="">
                                <div class="">
                                    <h5 class="product__name">Rice</h5>
                                    <p class="supllier">Carrinho industria</p>
                                </div>
                                <div class="">
                                    <p class="location">Benguela</p>
                                    <p class="price">3000kz</p>
                                    <p class="quantity">3</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="supplier">
            <div class="container">
                <div class="">
                    <div class="description">
                        <div class="">
                            <h4>Suppliers</h4>
                            <h1>Looking to post a product?</h1>
                        </div>
                        <div class="">
                            <div class="">
                                <ion-icon name="checkmark-done-circle"></ion-icon>
                                <p>Post Products </p>
                            </div>
                            <div class="">
                                <ion-icon name="checkmark-done-circle"></ion-icon>
                                <p>Get Your product exposed to clients around Benguela</p>
                            </div>
                        </div>
                    </div>
                    <div class="ilustration">
                        <img src="<?=ASSETS_URL?>images/undraw_interview_re_e5jn.svg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section id="clients">
            <div class="container">
                <div class="">
                    <div class="description">
                        <div>
                            <h1>Find products besed on <span>your interests</span></h1>
                        </div>
                        <div class="">
                            <div class="">
                                <ion-icon name="checkmark-done-circle"></ion-icon>
                                <p>every kind of products</p>
                            </div>
                            <div class="">
                                <ion-icon name="checkmark-done-circle"></ion-icon>
                                <p>Get products from supplies in Benguela </p>
                            </div>
                            <div class="">
                                <ion-icon name="checkmark-done-circle"></ion-icon>
                                <p>Get in touch with them </p>
                            </div>
                        </div>
                        <a href="">Post product</a>
                    </div>
                    <div class="ilustration">
                        <img src="<?=ASSETS_URL?>images/customer-service-68.svg" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <div class="">
                <div class="logo">
                    <ion-icon name="pie-chart"></ion-icon>
                    <h1><a href="">d<span class="is">is</span><span class="po">po</span>n</a></h1>
                </div>
                <div>
                <ul class="nav__links">
                    <li><a href="<?= BASE_URL ?>about">About</a></li>
                    <li><a href="<?=  BASE_URL ?>contact">Contact</a></li>
                </ul>
                </div>
            </div>
        </div>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>