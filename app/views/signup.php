<?php $this->view('includes/head'); ?>
<?php require __DIR__ . '/../../core/helpers.php' ?>

<main class="flex items-center justify-center min-h-screen">
    <section class="">
        <div class="container">
            <div class="">
                <form method="POST" class="">
                    <div class="logo flex justify-center items-center mb-4">
                        <ion-icon class="text-3xl" name="pie-chart"></ion-icon>
                        <h1 class="text-3xl font-bold text-center" ><a href="<?= BASE_URL ?>">d<span class="is">is</span><span class="po">po</span>n</a></h1>
                    </div>
                    <div class="flex flex-col items-center ">
                        <input
                            class="border-2 border-indigo-500 rounded-lg w-full mb-3"
                            type="text"
                            name="username"
                            value="<?= getVar('username'); ?>"
                            placeholder="First Name
                        ">
                        <input
                            class="border-2 border-indigo-500 rounded-lg mb-3"
                            type="email"
                            name="email"
                            value="<?= getVar('email'); ?>"
                            placeholder="Enter email"
                        >
                        <select name="gender" id="" class="border-2 border-indigo-500 rounded-lg w-full mb-3">
                            <option <?= getSelect('gender', ''); ?> value="">Select Gender</option>
                            <option <?= getSelect('gender', 'Male'); ?> value="Male">Male</option>
                            <option <?= getSelect('gender', 'Female'); ?> value="Female">Female</option>
                        </select>
                        <select name="role" id="" class="border-2 border-indigo-500 rounded-lg w-full mb-3">
                            <option  <?= getSelect('role', ''); ?> value="">Select a Role</option>
                            <option  <?= getSelect('role', 'client'); ?> value="client">Client</option>
                            <option  <?= getSelect('role', 'supplier'); ?> value="supplier">Supplier</option>
                            <option  <?= getSelect('role', 'admin'); ?> value="admin">Admin</option>
                        </select>
                        <input
                            class="border-2 border-indigo-500 rounded-lg mb-3"
                            type="password"
                            name="password"
                            value="<?= getVar('password'); ?>"
                            placeholder="Enter your password"
                        >
                        <input
                            class="border-2 border-indigo-500 rounded-lg mb-3"
                            type="password"
                            name="password2"
                            value="<?= getVar('password2'); ?>"
                            placeholder="Re-enter the password"
                        >
                        <button class="bg-indigo-500 w-full text-white p-2 rounded-lg">Register</button>
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
