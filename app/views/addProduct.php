<?php $this->view('includes/head'); ?>
<?php $this->view('includes/nav') ?>
<?php require __DIR__ . '/../../core/helpers.php' ?>

<main class="flex items-center justify-center min-h-screen">
    <section class="">
        <div class="container">
                <div class="">
                <form method="POST">
                    <img src="" alt="">
                    <div class="flex flex-col">
                        <input
                            class="border-2 border-indigo-500 rounded-lg mb-2"
                            type="text"
                            name="name"
                            value="<?= getVar('name'); ?>"
                            placeholder="Product name"
                        ">

                        <textarea 
                            class="border-2 border-indigo-500 rounded-lg  mb-2"
                            name="desciption" 
                            id=""
                            value="<?= getVar('description'); ?>"
                        >
                        </textarea>

                        <input
                            class="border-2 border-indigo-500 rounded-lg mb-2"
                            type="Number"
                            name="price"
                            value="<?= getVar('price'); ?>"
                            placeholder="Price"
                        ">

                        <input
                            class="border-2 border-indigo-500 rounded-lg"
                            type="text"
                            name="sku"
                            value="<?= getVar('sku'); ?>"
                            placeholder="Sku"
                        ">
                        <select name="category" id="" class="mb-2">
                            <option  <?= getSelect('category', ''); ?> value="">Select a category</option>
                            <option  <?= getSelect('category', 'eletronics'); ?> value="ELT">eletronics</option>
                            <option  <?= getSelect('category', 'fashion'); ?> value="FSN">Fashion</option>
                            <option  <?= getSelect('category', 'home & kitchen'); ?> value="H&K">Home & Kitchen</option>
                            <option  <?= getSelect('category', 'Health & beauty'); ?> value="H&B">Health & beauty</option>
                        </select>
                        <button class="bg-indigo-500 text-white p-2 rounded-lg">add Product</button>
                    </div>
                </form>
                </div>
        </div>
    </section>
</main>

<script>

  function dismissAlert() {
    document.getElementById('alert').style.display = 'none';
  }
</script>

<?php $this->view('includes/footer') ?>