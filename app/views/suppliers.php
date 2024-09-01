<?php $this->view('includes/head') ?>
<?php $this->view('includes/nav') ?>

<main>
    <section>
        <div class="container">
            <div class="grid grid-cols-3 gap-10">
            <?php foreach($rows as $row ): ?>
                <div class="w-2/8 md:w-2/8 shadow-lg hover:shadow-xl rounded-md ">
                    <div class="p-2"><img class="" src="<?=ASSETS_URL?>images/undraw_pic_profile_re_7g2h.svg" alt="Avatar" style="width:100%"></div>
                    <div class="container py-6 px-12 bg-indigo-500 mt-4">
                        <h4 class=""><b><?= escape($row->username )?></b></h4>
                        <p class=""><?= escape($row->email) ?></p>
                        <div>
                            <a href="<?= BASE_URL ?>profile">Profile</a>
                            <a href="<?= BASE_URL ?>supplier/products/<?=$row->id ?>">See All Products</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php $this->view('includes/footer') ?>