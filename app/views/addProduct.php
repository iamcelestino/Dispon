<?php $this->view('includes/head'); ?>
<?php $this->view('includes/nav') ?>

<main class="flex items-center justify-center min-h-screen">
    <section class="">
        <div class="container">
                <div class="">
                    <form method="POST">
                        <div class="flex flex-col">
                            <input
                                class="border-2 border-indigo-500 rounded-lg mb-2"
                                type="text"
                                name="name"
                                value="<?= getVar('category_name'); ?>"
                                placeholder="Product name"
                            ">

                            <textarea 
                                class="border-2 border-indigo-500 rounded-lg  mb-2"
                                name="description" 
                                id=""
                                value="<?= getVar('description'); ?>"
                            >
                            </textarea>

                            <input
                                class="border-2 border-indigo-500 rounded-lg mb-2"
                                type="Number"
                                name="price"
                                step="0.001"
                                value="<?= getVar('price'); ?>"
                                placeholder="Price"
                            ">
                            <select name="category_id" id="" class="mb-2">
                                <option  <?= getSelect('category_id', ''); ?>    value="">category</option>
                                <option  <?= getSelect('category_id', 'H&B'); ?> value="H&B">Health & beauty</option>
                                <option  <?= getSelect('category_id', 'ELE'); ?> value="ELE">Electronics</option>
                                <option  <?= getSelect('category_id', 'CLT'); ?> value="CLT">Clothing</option>
                            </select>
                            <button class="bg-indigo-500 text-white p-2 rounded-lg">add Product</button>
                        </div>
                    </form>
                </div>
        </div>
    </section>
</main>

<?php $this->view('includes/footer') ?>