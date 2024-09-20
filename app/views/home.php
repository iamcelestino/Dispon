<?php $this->view('includes/head') ?>
<?php $this->view('includes/nav') ?>
<main>
        <section id="banner" class="">
            <div class="container py-16">
                <div class="banner__description md:flex items-center gap-4">
                    <div class="ilustration">
                        <img src="<?=ASSETS_URL?>images/undraw_world_re_768g.svg" alt="">
                    </div>
                    <div class="description mt-5">
                        <h1 class="font-bold text-3xl md:text-4xl mb-4">Find The <span>Perfect </span>Product for you</h1>
                        <p class="text-slate-500">Find  your best products in hours not weeks, from your favorities suppliers, search for free</p>
                        <div class="mt-4">
                            <li class="bg-indigo-500 text-white text-center inline-block py-2 px-6 list-none font-bold rounded-md"><a href="<?=BASE_URL ?>login">Login</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="">
            <div class="container py-16">
                <h1 class="text-3xl font-bold text-center mb-10">Trusted by many companies around the province</h1>
                <div class="sm:grid sm:grid-cols-2 md:grid-cols-5 gap-10">
                    <div class="">
                        <img src="<?=ASSETS_URL?>images/carrinho-Logo.png" alt="">
                    </div>
                    <div class="">
                        <img src="<?=ASSETS_URL?>images/angolissar-logo.jpeg" alt="">
                    </div>
                    <div class="">
                        <img src="<?=ASSETS_URL?>images/lobitnet-logo.jpeg" alt="">
                    </div>
                    <div class="">
                        <img src="<?=ASSETS_URL?>images/bem-barato-logo.png" alt="">
                    </div>
                    <div class="">
                        <img src="<?=ASSETS_URL?>images/alimo-logo.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section id="supplier">
            <div class="container py-16">
                <div class="md:flex items-center gap-20">
                    <div class="description md:w-2/4">
                        <div class="mb-4">
                            <h4 class="font-bold">Suppliers</h4>
                            <h1 class="font-bold text-3xl my-2 ">Looking to post a product?</h1>
                            <p class="text-slate-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam obcaecati delectus molestias dicta laboriosam voluptas vitae libero dolores eligendi?.
                         </p>
                        </div>
                        <div class="description__item text-slate-500">
                            <div class="flex items-center gap-1 ">
                                <ion-icon name="checkmark-done-circle"></ion-icon>
                                <p>Post Products </p>
                            </div>
                            <div class="flex items-center gap-1 my-2">
                                <ion-icon name="checkmark-done-circle"></ion-icon>
                                <p> expose products to clients</p>
                            </div>
                            <a class="inline-block font-bold bg-indigo-600 rounded-md py-2 px-4 mt-2 text-white" href="<?= BASE_URL ?>product">Post a product for free</a>
                        </div>
                    </div>
                    <div class="ilustration mt-8 md:w-2/4">
                        <img src="<?=ASSETS_URL?>images/undraw_publish_article_re_3x8h.svg" alt="">
                    </div>
                </div>
            </div>
        </section>

    <section class="bg-gray-200">
        <div class="container py-16">
            <div class="">
                <h1 class="font-bold text-3xl text-center">Check Out Our Latest Products</h1>
                <div class="mx-auto max-w-2xl px-4  sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                    <h2 class="sr-only">Products</h2>
                    <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                        <?php if($products): ?>
                            <?php for($i = 0; $i < count($products) && $i < 4; $i++): ?>
                                <?php $product = $products[$i] ?>
                                <a href="#" class="group">
                                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                    <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-02.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                                    </div>
                                    <h3 class="mt-4 text-sm text-gray-700"><?= escape($product->name); ?></h3>
                                    <p class="mt-1 text-lg font-medium text-gray-900">AOA <?= escape($product->price); ?></p>
                                    <p class="mt-1 text-sm text-gray-900"><span class="font-bold">Supplier:</span> <?=escape($product->user->username); ?></p>
                                </a>
                            <?php endfor; ?>
                        <?php else: ?>
                            <h3>No products were found at this time</h3>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="clients">
        <div class="container py-16">
            <div class="md:flex items-center">
                <div class="description md:w-2/4 order-2">
                    <div class="  mb-4">
                        <h3 class="font-bold text-2xl">Clients</h3>
                        <h1 class="font-bold text-3xl my-2">Find products besed on <span>your interests</span></h1>
                        <p class="text-slate-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, nemo molestiae. Amet eveniet ducimus, autem dignissimos, fugiat aperiam repellendus veniam.</p>
                    </div>
                    <div class="description__item text-slate-500">
                        <div class="flex items-center gap-1 mb-2">
                            <ion-icon name="checkmark-done-circle"></ion-icon>
                            <p>every kind of products</p>
                        </div>
                        <div class="flex items-center gap-1 mb-2">
                            <ion-icon name="checkmark-done-circle"></ion-icon>
                            <p>Get products from supplies </p>
                        </div>
                        <div class="flex items-center gap-1 mb-2">
                            <ion-icon name="checkmark-done-circle"></ion-icon>
                            <p>Get in touch with them </p>
                        </div>
                    </div>
                    <a class="inline-block font-bold bg-indigo-600 rounded-md py-2 px-4 text-white" href="<?= BASE_URL ?>product">Get Started</a>
                </div>
                <div class="ilustration mt-8 md:w-2/4">
                    <img src="<?=ASSETS_URL?>images/undraw_web_search_re_efla (1).svg" alt="">
                </div>
            </div>
        </div>
    </section>
    </main>
<?php $this->view('includes/footer') ?>
