<?php $this->view('includes/head') ?>
<?php $this->view('includes/nav') ?>
<main>
        <section id="banner" class="">
            <div class="container py-16">
                <div class="banner__description md:flex items-center gap-4">
                    <div class="ilustration">
                        <img src="<?=ASSETS_URL?>images/undraw_map_dark_re_36sy.svg" alt="">
                    </div>
                    <div class="description mt-5">
                        <h1 class="font-bold text-3xl">Find The <span>Perfect </span>Product for you</h1>
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


        <section id="supplier">
            <div class="container py-16">
                <div class="md:flex items-center">
                    <div class="description md:w-2/4">
                        <div class="">
                            <h4 class="font-bold">Suppliers</h4>
                            <h1 class="font-bold text-2xl">Looking to post a product?</h1>
                        </div>
                        <div class="description__item">
                            <div class="flex items-center gap-1">
                                <ion-icon name="checkmark-done-circle"></ion-icon>
                                <p>Post Products </p>
                            </div>
                            <div class="flex items-center gap-1">
                                <ion-icon name="checkmark-done-circle"></ion-icon>
                                <p> expose products to clients around Benguela</p>
                            </div>
                            <a class="inline-block font-bold bg-indigo-600 rounded-md py-2 px-4 text-white" href="">Post a product for free</a>
                        </div>
                    </div>
                    <div class="ilustration mt-8 md:w-2/4">
                        <img src="<?=ASSETS_URL?>images/undraw_post_online_re_1b82.svg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section id="products" class="bg-gray-200">
            <div class="container py-16">
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
                    </div>
                </div>
            </div>
        </section>

        <section id="clients">
            <div class="container py-16">
                <div class="md:flex items-center">
                    <div class="description md:w-2/4 order-2">
                        <div class="font-bold text-2xl mb-4">
                            <h3>Clients</h3>
                            <h1>Find products besed on <span>your interests</span></h1>
                        </div>
                        <div class="description__item">
                            <div class="flex items-center gap-1 mb-2">
                                <ion-icon name="checkmark-done-circle"></ion-icon>
                                <p>every kind of products</p>
                            </div>
                            <div class="flex items-center gap-1 mb-2">
                                <ion-icon name="checkmark-done-circle"></ion-icon>
                                <p>Get products from supplies in Benguela </p>
                            </div>
                            <div class="flex items-center gap-1 mb-2">
                                <ion-icon name="checkmark-done-circle"></ion-icon>
                                <p>Get in touch with them </p>
                            </div>
                        </div>
                        <a class="inline-block font-bold bg-indigo-600 rounded-md py-2 px-4 text-white" href="">Get Started</a>
                    </div>
                    <div class="ilustration mt-8 md:w-2/4">
                        <img src="<?=ASSETS_URL?>images/undraw_web_search_re_efla (1).svg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-gray-200">
            <div class="container py-16">
            <h1 class="font-bold text-3xl text-center">HOW IT WORKS?</h1>
                <div class="flex flex-col md:flex-row items-center">
                    <div class="order-2">
                        <div class="">
                            <div class="bg-white p-4 rounded-md flex items-center border-2 border-indigo-500 justify-start">
                                <ion-icon name="checkmark-done-circle"></ion-icon>
                                <p>Lorem ipsum dolor, sit amet.</p>
                            </div>
                            <div class="bg-white p-4 rounded-md flex items-center border-2 border-indigo-500 justify-start">
                                <ion-icon name="checkmark-done-circle"></ion-icon>
                                <p>Lorem ipsum dolor, sit amet.</p>
                            </div>
                            <div class="bg-white p-4 rounded-md flex items-center border-2 border-indigo-500 justify-start">
                                <ion-icon name="checkmark-done-circle"></ion-icon>  
                                <p>Lorem ipsum dolor, sit amet.</p>
                            </div>
                        </div>
                    </div>

                    <div class="md:order-3">
                        <img src="<?=ASSETS_URL?>images/undraw_interview_re_e5jn.svg" alt="">
                    </div>

                    <div class="order-2">
                        <div class="bg-white p-4 rounded-md flex items-center border-2 border-indigo-500 justify-start">
                            <ion-icon name="checkmark-done-circle"></ion-icon>
                            <p>Lorem ipsum dolor, sit amet.</p>
                        </div>
                        <div class="bg-white p-4 rounded-md flex items-center border-2 border-indigo-500 justify-start">
                            <ion-icon name="checkmark-done-circle"></ion-icon>
                            <p>Lorem ipsum dolor, sit amet.</p>
                        </div>
                        <div class="bg-white p-4 rounded-md flex items-center border-2 border-indigo-500 justify-start">
                            <ion-icon name="checkmark-done-circle"></ion-icon>
                            <p>Lorem ipsum dolor, sit amet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php $this->view('includes/footer') ?>
