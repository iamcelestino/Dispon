<?php $this->view('includes/head'); ?>
<?php $this->view('includes/nav') ?>
<?php require __DIR__ . '/../../core/helpers.php' ?>

<main>
    <section class="">
        <div class="container">
                <div class="">
                <form method="POST">
                    <img src="" alt="">
                    <div>
                        <input
                            
                            type="text"
                            name="name"
                            value="<?= getVar('name'); ?>"
                            placeholder="Product name"
                        ">

                        <textarea 
                            name="desciption" 
                            id=""
                            value="<?= getVar('description'); ?>"
                        >
                        </textarea>

                        <input
                            type="Number"
                            name="price"
                            value="<?= getVar('price'); ?>"
                            placeholder="Price"
                        ">

                        <input
                            type="text"
                            name="sku"
                            value="<?= getVar('sku'); ?>"
                            placeholder="Sku"
                        ">
                        <select name="category" id="">
                            <option  <?= getSelect('category', ''); ?> value="">Select a category</option>
                            <option  <?= getSelect('category', 'eletronics'); ?> value="ELT">eletronics</option>
                            <option  <?= getSelect('category', 'fashion'); ?> value="FSN">Fashion</option>
                            <option  <?= getSelect('category', 'home & kitchen'); ?> value="H&K">Home & Kitchen</option>
                            <option  <?= getSelect('category', 'Health & beauty'); ?> value="H&B">Health & beauty</option>
                        </select>
                        <button>add Product</button>
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