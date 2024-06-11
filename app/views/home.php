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
    </main>

</body>
</html>