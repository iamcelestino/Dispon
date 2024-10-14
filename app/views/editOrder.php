<?php $this->view('includes/head'); ?>
<?php $this->view('includes/nav') ?>

<main class="flex items-center justify-center min-h-screen">
    <section class="">
        <div class="container">
                <div class="">
                    <form method="POST">
                        <div class="flex flex-col">
                            <select name="STATUS" id="" class="mb-2">
                                <option  <?= getSelect('STATUS', ''); ?>    value="">Order Status</option>
                                <option  <?= getSelect('STATUS', 'pending'); ?> value="pending">Pending</option>
                                <option  <?= getSelect('STATUS', 'paid'); ?> value="paid">Paid</option>
                            </select>
                            <button type="submit" class="bg-indigo-500 text-white p-2 rounded-lg">save</button>
                        </div>
                    </form>
                </div>
        </div>
    </section>
</main>

<?php $this->view('includes/footer') ?>