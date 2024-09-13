<?php $this->view('includes/head') ?>
<?php $this->view('includes/nav') ?>

<main>
    <section>
        <div class="container py-16">
            <div class="">
                <div class="bg-white">
                    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                        <h2 class="sr-only">Products</h2>
                        <?php if($cartProducts): ?>
                            <p class="text-sm font-bold"><span><?= escape(count($cartProducts)) ?> </span>Products in Cart</p>
                            <?php foreach($cartProducts as $row): ?>
                                <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                                    <a href="#" class="group">
                                        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-02.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                                        </div>
                                        <h3 class="mt-4 text-sm text-gray-700"><?= escape($row->name) ?></h3>
                                        <p class="mt-1 text-lg font-medium text-gray-900"><?= escape($row->price) ?></p>
                                        <p class="mt-1 text-sm font-medium text-gray-900">Quantity: <?= escape($row->quantity) ?></p>
                                        <p class="mt-1 text-sm font-medium text-gray-900">Supplier: <?= escape($row->username) ?></p>
                                        <div>
                                            <a href="<?= BASE_URL ?>cart/delete/<?= $row->id ?>" class="">
                                                <ion-icon class="" name="trash-bin"></ion-icon>
                                            </a>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            <?php endforeach ?>
                        <?php else: ?>
                            <h1>ADD PRODUCTS TO YOUR CART TO CHECK OUT</h1>
                        <?php endif ?>
                    </div>
                </div>
                <div class="">
                    <div>
                        <?php if($totalPrice): ?>
                            <h1>Total</h1>
                            <p>AOA <?= escape($totalPrice) ?></p>
                        <?php else: ?>
                            <p>There's no product in the cart</p>
                        <?php endif ?>
                            <form action="">
                                <a class="inline-block bg-indigo-500 text-white font-medium px-8 py-2" href="">
                                    Checkout
                                </a>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php $this->view('includes/footer') ?>