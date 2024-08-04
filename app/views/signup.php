<?php $this->view('includes/head'); ?>
<?php $this->view('includes/nav') ?>
<?php require __DIR__ . '/../../core/helpers.php' ?>

<main>
    <section class="">
        <div class="container">
                <div class="">
                    <?php if(count($errors) > 0): ?>
                        <div id="errors" class="flex items-center justify-between p-4 bg-red-400  mb-4 text-sm text-white rounded-lg" role="alert">
                            <p><span class="font-medium">Errors:</span> 
                            <?php foreach ($errors as  $error): ?>
                            <br> <?=$error ?></p>
                            <?php endforeach; ?>
                            <button type="button" class="ml-2 text-blue-700 focus:outline-none" onclick="dismissAlert()">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                            </button>
                        </div>
                    <?php endif; ?>
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