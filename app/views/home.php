<?php $this->view('includes/head') ?>
<?php $this->view('includes/nav') ?>
<main>
        <section id="banner" class="">
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
                            <!-- <div class="">
                                <div class="">
                                    <h5 class="product__name">Rice</h5>
                                    <p class="supllier">Carrinho industria</p>
                                </div>
                                <div class="">
                                <p class="location">Benguela</p>
                                    <p class="price">3000kz</p>
                                    <p class="quantity">3</p>
                                </div>
                            </div> -->
                            <?php
                                echo "<pre>";
                                print_r($rows);
                            ?>
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
                        <div class="description__item">
                            <div class="">
                                <ion-icon name="checkmark-done-circle"></ion-icon>
                                <p>Post Products </p>
                            </div>
                            <div class="">
                                <ion-icon name="checkmark-done-circle"></ion-icon>
                                <p> expose products to clients around Benguela</p>
                            </div>
                            <a href="">Post a product for free</a>
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
                        <div class="">
                            <h1>Find products besed on <span>your interests</span></h1>
                        </div>
                        <div class="description__item">
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
                        <a href="">Get Started</a>
                    </div>
                    <div class="ilustration">
                        <img src="<?=ASSETS_URL?>images/undraw_web_search_re_efla (1).svg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="">
            <div class="container">
                <div class="">
                    <div class="">
                        
                    </div>

                    <div class="">

                    </div>
                </div>
            </div>
        </section>
    </main>
<?php $this->view('includes/footer') ?>
