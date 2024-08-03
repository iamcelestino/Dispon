<?php $this->view('includes/head'); ?>
<?php $this->view('includes/nav') ?>
<?php require __DIR__ . '/../../core/helpers.php' ?>

<main>
    <?php
        print_r($errors);
    ?>
    <section class="">
        <div class="container">
                <div class="">
                <form method="POST">
                    <img src="" alt="">
                    <div>
                        <input
                            type="text"
                            name="username"
                            value="<?= getVar('username'); ?>"
                            placeholder="First Name
                        ">
                        <input
                            type="email"
                            name="email"
                            value="<?= getVar('email'); ?>"
                            placeholder="Enter email"
                        >
                        <select name="gender" id="">
                            <option <?= getSelect('gender', ''); ?> value="">Select Gender</option>
                            <option <?= getSelect('gender', 'Male'); ?> value="Male">Male</option>
                            <option <?= getSelect('gender', 'Female'); ?> value="Female">Female</option>
                        </select>
                        <select name="role" id="">
                            <option  <?= getSelect('role', ''); ?> value="">Select a Role</option>
                            <option  <?= getSelect('role', 'Client'); ?> value="Client">Client</option>
                            <option  <?= getSelect('role', 'Supplier'); ?> value="Supplier">Supplier</option>
                            <option  <?= getSelect('role', 'Admin'); ?> value="Admin">Admin</option>
                            <option  <?= getSelect('role', 'Super-Admin'); ?> value="Super-Admin">Super-Admin</option>
                        </select>
                        <input
                            type="password"
                            name="password"
                            value="<?= getVar('password'); ?>"
                            placeholder="Enter your password"
                        >
                        <input
                            type="password"
                            name="password2"
                            value="<?= getVar('password2'); ?>"
                            placeholder="Re-enter the password"
                        >
                        <button>Register</button>
                        <!-- <button>Cancel</button> -->
                    </div>
                </form>
                </div>
        </div>
    </section>
</main>

<?php $this->view('includes/footer') ?>