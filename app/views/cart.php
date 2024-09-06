<?php $this->view('includes/head') ?>
<?php $this->view('includes/nav') ?>

<main>
    <section>
        <div class="container">
            <h1 class="text-3xl font-bold">Shopping Cart</h1>
            <p class="text-sm font-bold">0 Products in Cart</p>
            <div class="bg-white">
                <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                    <h2 class="sr-only">Products</h2>
                    <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                        <a href="#" class="group">
                            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                            <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-02.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                            </div>
                            <h3 class="mt-4 text-sm text-gray-700">Rice</h3>
                            <p class="mt-1 text-lg font-medium text-gray-900">AOA 9000</p>
                            <p class="mt-1 text-sm font-medium text-gray-900">Supplier: Celestino Trosso</p>
                            <div>
                                <a href="" class="">
                                    <ion-icon class="" name="trash-bin"></ion-icon>
                                </a>
                                <a href="" class="">
                                    <ion-icon class="text-indigo-500" name="create"></ion-icon>
                                </a>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php $this->view('includes/footer') ?>