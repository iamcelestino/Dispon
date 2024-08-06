<?php
use App\Model\Auth;
?>
<header class="">
    <div class="container">
        <div class="">
            <div class="navigation_itens">
                <div class="logo flex items-center">
                    <ion-icon class="text-3xl" name="pie-chart"></ion-icon>
                    <h1 class="text-3xl font-bold" ><a href="<?= BASE_URL ?>">d<span class="is">is</span><span class="po">po</span>n</a></h1>
                </div>
                <nav class="">
                    <ul class="nav__links flex items-center justify-center">
                        <li class=""><a href="<?= BASE_URL ?>about">About</a></li>
                        <li class="ml-4"><a href="<?= BASE_URL ?>contact">Contact</a></li>
                        <li class="ml-4"><a href="<?= BASE_URL ?>contact">Products</a></li>
                        <li class="nav__items dropdown ml-4">
                            <div class="nav__dropdown__link flex items-center justify-center">
                                <a href="<?=  BASE_URL ?>contact"><?= Auth::getUsername() ?></a>
                                <ion-icon name="chevron-down-outline"></ion-icon>
                            </div>
                            <div class="dropdown__content">
                                <li class="dropdown__item"><a href="<?= BASE_URL ?>profile">Profile</a></li>
                                <li class="dropdown__item"><a href="<?=  BASE_URL ?>">Dashboard</a></li>
                                <li class="dropdown__item"><a href="<?= BASE_URL ?>logout">Logout</a></li>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="nav__buttons">
                <li class="inline-block py-2 px-4 list-none font-bold"><a href="<?= BASE_URL?>login">Login</a></li>
                <li class="text-indigo-500 inline-block py-2 px-6 list-none font-bold rounded-md"><a href="<?=BASE_URL ?>signup">Sign up</a></li>
            </div>
            <div class="burgerMe flex-col hidden md:flex ">
                <div class=" p-0.5 bg-black w-6 mb-1 font-bold rounded-md"></div>
                <div class=" p-0.5 bg-black w-4 mb-1 rounded-md"></div>
                <div class=" p-0.5 bg-black w-3 rounded-md"></div>
            </div>
        </div>
    </div>
</header>