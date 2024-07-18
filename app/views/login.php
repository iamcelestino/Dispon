<?php $this->view('includes/head'); ?>
<?php $this->view('includes/nav') ?>

<main>
    <section class="">
        <div class="container">
            <div class="">
                <div class="">

                    <label for="email"></label>
                    <input 
                        id="email"
                        type="email"
                        name="email"
                        placeholder="Enter your email"
                    >

                    <label for="Password"></label>
                    <input 
                        id="password"
                        type="password"
                        name="password"
                        placeholder="Enter your password"
                    >
                </div>
            </div>
        </div>
    </section>
</main>

<?php $this->view('includes/footer') ?>