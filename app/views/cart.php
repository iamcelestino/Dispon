<?php $this->view('includes/head') ?>
<?php $this->view('includes/nav') ?>

<main>
<section>
    <div class="container py-16">
            <div class="sm:grid grid-cols-6">
                <div class="bg-white col-span-4">
                    <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                        <h2 class="sr-only">Products</h2>
                        <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                            <?php if($cartProducts): ?>
                                <?php foreach($cartProducts as $product): ?>
                                    <div>
                                        <a href="#" class="group">
                                            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                            <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-02.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                                            </div>
                                            <h3 class="mt-4 text-sm text-gray-700"><?= escape($product->name); ?></h3>
                                            <p class="mt-1 text-lg font-medium text-gray-900">AOA <?= escape($product->price); ?></p>
                                            <p class="mt-1 text-sm font-medium text-gray-900">Date:<?= escape(get_Date($product->quantity)); ?></p>
                                            <p class="mt-1 text-sm font-medium text-gray-900">Supplier:<?= escape($product->username); ?></p>
                
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <h3>No products were found at this time</h3>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class=" col-span-2">
                    <div class="bg-gray-200">
                            <div class="bg-gray-200 border-b border-black border-2 p-2">
                                <h1 class="">Order Summary</h1>
                            </div>
                            <div class="p-4">
                                <?php if($totalPrice): ?>
                                    <div>
                                        <div class="flex justify-between mb-2">
                                            <h1 class="font-bold">Total</h1>
                                            <p class="text-sm font-bold">AOA <?= escape($totalPrice) ?></p>
                                        </div>
                                        <div class="flex justify-between">
                                            <h1 class="font-bold">Shipping</h1>
                                            <p class="">FREE</p>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <p>There's no product in the cart</p>
                                <?php endif ?>
                            </div>
                    </div>
                    <form action="<?= BASE_URL ?>order/create" method="POST">
                        <input type="hidden" name="total" value="<?= escape($totalPrice) ?>">
                        <button type="submit" class="w-full inline-block bg-indigo-500 text-white font-medium px-8 py-4 mt-4">
                            Checkout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>




<?php $this->view('includes/footer') ?>