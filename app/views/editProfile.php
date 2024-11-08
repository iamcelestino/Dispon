<?php $this->view('includes/head') ?>
<?php
use App\Model\Auth;
?>
<header class="py-6">
    <div class="container">
        <div class="flex justify-between items-center">
            <div class="navigation_itens flex items-center">
                <div class="logo flex items-center">
                    <ion-icon class="text-3xl" name="pie-chart"></ion-icon>
                    <h1 class="text-3xl font-bold" ><a href="<?= BASE_URL ?>">d<span class="is">is</span><span class="po">po</span>n</a></h1>
                </div>
            </div>
            <div>
            </div>
            <div class="nav__buttons hidden md:flex items-center">
                <li class="group relative  ml-4 list-none">
                    <div class="flex items-center justify-center">
                        <a href="<?=  BASE_URL ?>contact"><?= escape(Auth::getUsername()); ?></a>
                        <div class="flex -space-x-1 overflow-hidden">
                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        </div>
                    </div>
                    <div class="hidden group-hover:block absolute bg-gray-100 min-w-[100px] shadow-lg z-10">
                    <a class="float-none text-black px-4 py-3 no-underline block text-left"  href="<?= BASE_URL ?>profile">Profile</a>
                        <a class="float-none text-black px-4 py-3 no-underline block text-left"  href="<?=  BASE_URL ?>dashboard">Dashboard</a>
                        <a class="float-none text-black px-4 py-3 no-underline block text-left"  href="<?=  BASE_URL ?>order">My Orders</a>
                        <a class="float-none text-black px-4 py-3 no-underline block text-left"  href="<?= BASE_URL ?>logout">Logout</a>
                    </div>
                </li>
            </div>
            <div class=" flex-col md:hidden ">
                <div class=" p-0.5 bg-black w-6 mb-1 font-bold rounded-md"></div>
                <div class=" p-0.5 bg-black w-4 mb-1 rounded-md"></div>
                <div class=" p-0.5 bg-black w-3 rounded-md"></div>
            </div>
        </div>
    </div>
</header>

<main>
    <section>
        <?php if($rows): ?>
            <?php $image = getImage($rows->image, $rows->gender); ?>
        <div class="container py-16 ">
        <form method="POST" enctype="multipart/form-data">
            <div class="sm:flex items-center justify-center gap-10">
                <div class="md:w-1/4">
                    <img class="" src="<?=$image?>" alt="">
                    <div class="mt-4 text-center">
                        <label for="image_browser" class="bg-indigo-500 p-2 text-white font-medium">
                            <input id="image_browser" type="file" name="image" class="file_info"">
                        </label>
                    </div>
                </div>
                <div class="px-4">
               
                    <h2 class="font-medium text-center">EDIT USER PROFILE</h2>
                    <div class="flex flex-col items-center ">
                        <input
                            class="border-2 border-indigo-500 rounded-lg w-full mb-3"
                            type="text"
                            name="username"
                            value="<?= getVar('username', $rows->username); ?>"
                            placeholder="First Name
                        ">
                        <input
                            class="border-2 border-indigo-500 rounded-lg mb-3"
                            type="email"
                            name="email"
                            value="<?= getVar('email', $rows->email); ?>"
                            placeholder="Enter email"
                        >

                        <select name="address" id="address" class="border-2 border-indigo-500 rounded-lg w-full mb-3">
                            <option <?= getSelect('address', $rows->address); ?> value="<?=$rows->address?>"><?=$rows->address?></option>
                            <option <?= getSelect('address', 'Lobito'); ?> value="Lobito">Lobito</option>
                            <option <?= getSelect('address', 'Cubal'); ?> value="Cubal">Cubal</option>
                            <option <?= getSelect('address', 'Bocoio'); ?> value="Bocoio">Bocoio</option>
                            <option <?= getSelect('address', 'Ganda'); ?> value="Ganda">Ganda</option>
                        </select>

                        <select name="gender" id="" class="border-2 border-indigo-500 rounded-lg w-full mb-3">
                            <option <?= getSelect('gender', $rows->gender); ?> value="<?=$rows->gender?>"><?=$rows->gender?></option>
                            <option <?= getSelect('gender', 'Male'); ?> value="Male">Male</option>
                            <option <?= getSelect('gender', 'Female'); ?> value="Female">Female</option>
                        </select>

                        <select name="role" id="" class="border-2 border-indigo-500 rounded-lg w-full mb-3">
                            <option  <?= getSelect('role',  $rows->role); ?> value="<?=$rows->role?>"><?=$rows->role?></option>
                            <option  <?= getSelect('role', 'client'); ?> value="client">Client</option>
                            <option  <?= getSelect('role', 'supplier'); ?> value="supplier">Supplier</option>
                            <option  <?= getSelect('role', 'admin'); ?> value="admin">admin</option>
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
                        
                        <div class="sm:flex items-center">
                            <a href="" class="bg-red-200 p-2 rounded-lg">Cancel</a>
                            <button class="bg-indigo-500  text-white p-2 rounded-lg">save changes</button>
                        </div>
                    </div>
                
                </div>
            </div>
        </form>
        </div>
        <?php else: ?>
            <h1>PROFILE NOT FOUND</h1>
        <?php endif ?>
    </section>
</main>
<script>
</script>
<?php $this->view('includes/footer') ?>