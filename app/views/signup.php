<?php $this->view('includes/head'); ?>
<?php $this->view('includes/nav') ?>

<main>
    <section class="">
        <div class="container">
            <div class="">
                <img src="" alt="">
                <div>
                    <label for="firstname">Username</label>
                    <input 
                        type="text" 
                        name="firstname" 
                        placeholder="First Name
                    ">

                    <label for="email">Email</label>
                    <input 
                        type="email" 
                        name="email" 
                        placeholder="Enter email"
                    >
                    <select name="" id="">
                        <option value="">Select Gender</option>
                        <option value="">Male</option>
                        <option value="">Female</option>
                    </select>

                    <select name="" id="">
                        <option value="">Select a Role</option>
                        <option value="">client</option>
                        <option value="">Suplier</option>
                        <option value="">Admin</option>
                        <option value="">Super Admin</option>
                    </select>

                    <label for="firstname">Password</label>
                    <input 
                        type="password" 
                        name="password" 
                        placeholder="password"
                    >

                    <label for="firstname">Password</label>
                    <input 
                        type="password" 
                        name="password2" 
                        placeholder="Re-enter the password"
                    >
                    <button>Register</button>
                    <button>Cancel</button>
                </div>
            </div>
        </div>
    </section>
</main>

<?php $this->view('includes/footer') ?>