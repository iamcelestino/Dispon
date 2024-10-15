
<?php $this->view('includes/head') ?>
<?php $this->view('includes/nav') ?>

<main>
    <div class="container py-16">
        <div class="">
            <h1 class="font-bold text-3xl mb-6">MY ORDERS</h1>
        </div>
        <div class="">
            <h1 class="font-bold mb-4">Order Details</h1>
            <?php if($orders): ?>
                <?php foreach($orders as $order): ?>
            <div class="">
                    <div class="bg-gray-200 mb-4 p-6 rounded-md">
                        <p class="font-medium">Order number: <span class="font-medium"><?= escape($order->id) ?></span></p>
                        <p class="">status: <span class="font-medium"></span><?= escape($order->STATUS)?></p>
                        <p class="">Total: <span class="font-medium"></span><?= escape($order->total)?></p>
                        <p class="">created: <span class="font-medium"></span><?= escape(get_Date($order->created_at))?></p>
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