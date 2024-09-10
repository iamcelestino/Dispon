<?php $this->view('includes/head') ?>
<?php $this->view('includes/nav') ?>

<main class="">
    <section class="">
        <div class="container py-16">
            <div class="sm:grid sm:grid-cols-2 sm:place-items-center gap-10">
            <?php if($row): ?>
                <div class="aspect-h-1 aspect-w-1 w-full w-fulloverflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                    <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-02.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                </div>
                <div class="w-full">
                    <h3 class="mb-4 text-2xl font-bold text-gray-700"><?= escape($row->name); ?></h3>
                    <p class="mt-1 text-2xl text-gray-900"><?= escape($row->description); ?></p>
                    <p class="mt-1 text-3xl font-bold text-gray-900">AOA <?= escape($row->price); ?></p>
                    <div class="">
                        <form action="<?= BASE_URL ?>cart/add" method="POST">
                            <div>
                               <input class="inline md:w-2/4" type="Number" name="quantity">
                               <input type="hidden" class="inline md:w-2/4" name="product_id" value="<?= escape($row->id); ?>">
                                <a  class="inline-block bg-indigo-500 text-white p-2 rounded-md  md:w-2/2  text-center" href="">
                                    <ion-icon name="cart"></ion-icon>
                                   <button type="submit">Add to cart</button>
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


