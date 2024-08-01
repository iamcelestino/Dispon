<?php $this->view('includes/head'); ?>
<?php $this->view('includes/nav') ?>

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
                            placeholder="First Name
                        ">
                        <input
                            type="email"
                            name="email"
                            placeholder="Enter email"
                        >
                        <select name="gender" id="">
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <select name="role" id="">
                            <option value="">Select a Role</option>
                            <option value="Client">Client</option>
                            <option value="Supplier">Supplier</option>
                            <option value="Admin">Admin</option>
                            <option value="Super-Admin">Super-Admin</option>
                        </select>
                       
                        <input
                            type="password"
                            name="password"
                            placeholder="Enter your password"
                        >
                        
                        <input
                            type="password"
                            name="password2"
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