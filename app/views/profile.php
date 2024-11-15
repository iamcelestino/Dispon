<?php $this->view('includes/head') ?>
<?php
use App\Model\Auth;
?>
    <?php if($rows): ?>
    <?php $image = getImage($rows->image, $rows->gender); ?>
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
                        <img class="rounded-full w-10" src="<?= $image ?>" alt="">
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
        <div class="container py-16 ">
            <div class="sm:flex items-center justify-center gap-10">
                <div class="md:w-1/4">
                    <img class="rounded-full" src="<?= $image ?>" alt="">
                    <div class="mt-4">
                        <a href="<?= BASE_URL ?>profile/edit/<?= $rows->id ?>" class="bg-green-500  p-2 text-white font-medium">Edit Profile</a>
                        <a href="<?= BASE_URL ?>profile/delete" class="bg-red-500  p-2 text-white font-medium">Delete Profile</a>
                    </div>
                </div>
                <div class="px-4">
                    <div class="mb-4">
                        <span class="font-bold">Username:</span>
                        <span class="font-medium"><?= escape(Auth::getUsername()); ?></span>
                    </div>
                    <div class="mb-4">
                        <span class="font-bold">Email:</span>
                        <span class="font-medium"><?= escape(Auth::getemail()); ?></span>
                    </div>
                    <div class="mb-4">
                        <span class="font-bold">role:</span>
                        <span class="font-medium"><?= escape(Auth::getRole()); ?></span>
                    </div>

                    <div class="mb-4">
                        <span class="font-bold">Gender:</span>
                        <span class="font-medium"><?= escape(Auth::getGender()); ?></span>
                    </div>

                    <div class="mb-4">
                        <span class="font-bold">Joined Since:</span>
                        <span class="font-medium"><?= escape(Auth::getcreated_at()); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <?php else: ?>
            <h1>PROFILE NOT FOUND</h1>
        <?php endif ?>
    </section>
</main>

<?php $this->view('includes/footer') ?>