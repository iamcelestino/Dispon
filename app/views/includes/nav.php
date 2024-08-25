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
            <nav class="hidden md:block ml-4">
                <ul class="nav__links flex items-center justify-center">
                    <li class=""><a href="<?= BASE_URL ?>supplier">Suppliers</a></li>
                    <li class="ml-4"><a href="<?= BASE_URL ?>product">Products</a></li>
                    <li class="ml-4"><a href="<?= BASE_URL ?>about">About</a></li>
                </ul>
            </nav>
            </div>
            <div class="nav__buttons hidden md:flex items-center">
                <li class="group relative  ml-4 list-none">
                    <div class="flex items-center justify-center">
                        <a href="<?=  BASE_URL ?>contact"><?= escape(Auth::getUsername()); ?></a>
                        <ion-icon name="chevron-down-outline"></ion-icon>
                    </div>
                    <div class="hidden group-hover:block absolute bg-gray-100 min-w-[100px] shadow-lg z-10">
                        <a class="float-none text-black px-4 py-3 no-underline block text-left" href="<?= BASE_URL ?>profile">Profile</a>
                        <a class="float-none text-black px-4 py-3 no-underline block text-left"  href="<?=  BASE_URL ?>">Dashboard</a>
                        <a class="float-none text-black px-4 py-3 no-underline block text-left"  href="<?= BASE_URL ?>logout">Logout</a>
                    </div>
                </li>
                <li class="bg-indigo-500 text-white inline-block py-2 px-6 list-none font-bold rounded-md ml-4"><a href="<?=BASE_URL ?>signup">Sign up</a></li>
            </div>
            <div class=" flex-col md:hidden ">
                <div class=" p-0.5 bg-black w-6 mb-1 font-bold rounded-md"></div>
                <div class=" p-0.5 bg-black w-4 mb-1 rounded-md"></div>
                <div class=" p-0.5 bg-black w-3 rounded-md"></div>
            </div>
        </div>
    </div>
</header>