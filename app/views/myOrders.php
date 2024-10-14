
<?php $this->view('includes/head') ?>
<?php $this->view('includes/nav') ?>

<main>
    <div class="container py-16">
        <div class="">
            <h1 class="font-bold text-3xl">MY ORDERS</h1>
        </div>
        <div class="">
            <?php if($orders): ?>
                <?php foreach($orders as $order): ?>
            <div class="">
                <h1 class="">Order Details</h1>
                <div class="">
                    <p class="">Order number: <span class="font-bold"><?= escape($order->id) ?></span></p>
                    <p class="">status: <span class="font-bold"></span><?= escape($order->STATUS)?></p>
                    <p class="">Total: <span class="font-bold"></span><?= escape($order->total)?></p>
                    <p class="">created: <span class="font-bold"></span><?= escape(get_Date($order->created_at))?></p>
                </div>
            </div>
                <?php endforeach ?>
            <?php else: ?>
                <h1>Check the product list and create your order</h1>
            <?php endif ?>
        </div>
    </div>
</main>

<?php $this->view('includes/footer') ?>