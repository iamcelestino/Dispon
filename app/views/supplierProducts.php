<?php $this->view('includes/head'); ?>
<?php $this->view('includes/nav') ?>

<main> 
<section class="">
        <div class="container">
            <div class="">
                <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                    <h2 class="sr-only">Products</h2>
                    <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                        <?php if($supplerProducts): ?>
                            <?php foreach($supplerProducts as $product): ?>
                                <a href="#" class="group">
                                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                    <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-02.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                                    </div>
                                    <h3 class="mt-4 text-sm text-gray-700"><?= escape($product->name); ?></h3>
                                    <p class="mt-1 text-lg font-medium text-gray-900">AOA <?= escape($product->price); ?></p>
                                </a>
                                <div>
                                    <a href="<?= BASE_URL ?>product/delete/<?= $product->id ?>" class="">
                                        <ion-icon class="" name="trash-bin"></ion-icon>
                                    </a>
                                    <a href="<?= BASE_URL ?>product/edit/<?= $product->id ?>">
                                        <ion-icon class="text-indigo-500" name="create"></ion-icon>
                                    </a>
                                    <a class="inline-block bg-indigo-500 text-white p-2 rounded-md" href="<?= BASE_URL ?>product/details/<?= $product->id ?>">
                                       Details
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <h3>No products were found at this time</h3>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
    

<?php $this->view('includes/footer') ?>