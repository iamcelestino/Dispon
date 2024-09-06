<?php $this->view('includes/head') ?>
<?php $this->view('includes/nav') ?>

<main class="">
    <section class="">
        <div class="container">
            <div class="sm:flex items-center gap-10">
            <?php if($row): ?>
                <div class="aspect-h-1 aspect-w-1 w-full sm:w-2/4 overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                    <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-02.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                </div>
                <div class=" sm:w-2/4">
                    <h3 class="mt-4 text-sm text-gray-700"><?= escape($row->name); ?></h3>
                    <p class="mt-1 text-sm font-medium text-gray-900"><?= escape($row->description); ?></p>
                    <p class="mt-1 text-lg font-medium text-gray-900">AOA <?= escape($row->price); ?></p>
                    <div class="">
                        <form action="">
                            <div>
                               <input class="w-full" type="Number" placeholder="Quantity">
                                <a  class="inline-block bg-indigo-500 text-white p-2 rounded-md w-full text-center" href="<?= BASE_URL ?>cart>">
                                    <ion-icon name="cart"></ion-icon>
                                   <button>Add to cart</button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php else: ?>
                <h1>SELECT A PRODUCT TO IT'S DETAIL</h1>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php $this->view('includes/footer') ?>


