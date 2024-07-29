<header class="">
        <div class="container">
            <div class="navigation">
                <div class="navigation_itens">
                    <div class="logo">
                        <ion-icon name="pie-chart"></ion-icon>
                        <h1><a href="<?= BASE_URL ?>">d<span class="is">is</span><span class="po">po</span>n</a></h1>
                    </div>
                   <nav class="">
                        <ul class="nav__links">
                            <li><a href="<?= BASE_URL ?>about">About</a></li>
                            <li><a href="<?=  BASE_URL ?>contact">Contact</a></li>
                            <li><a href="<?=  BASE_URL ?>contact">Products</a></li>
                            <li class="nav__items dropdown">
                                <div class="nav__dropdown__link">
                                    <a href="<?=  BASE_URL ?>contact">User</a>
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
                    <li><a href="<?= BASE_URL?>login">Login</a></li>
                    <li><a href="<?=BASE_URL ?>signup">Sign up</a></li>
                </div>
                <div class="burgerMenu">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
</header>