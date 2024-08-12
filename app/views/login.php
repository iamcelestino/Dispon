<?php $this->view('includes/head'); ?>

<main class="flex items-center justify-center min-h-screen">
    <section class="">
        <div class="container">
            <div class="">
                <form method="POST">
                    <?php if(count($errors) > 0): ?>
                        <div id="errors" class="flex items-center justify-between p-4 bg-red-400  mb-4 text-sm text-white rounded-lg" role="alert">
                            <p><span class="font-medium">Errors:</span> 
                                <br> <?=$error ?></p>
                            <button type="button" class="ml-2 text-blue-700 focus:outline-none" onclick="dismissAlert()">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                            </button>
                        </div>
                    <?php endif; ?>
                    <div class="p-6 md:p-12">
                        <div class="logo flex items-center justify-center">
                            <ion-icon class="text-3xl" name="pie-chart"></ion-icon>
                            <h1 class="text-3xl font-bold" ><a href="<?= BASE_URL ?>">d<span class="is">is</span><span class="po">po</span>n</a></h1>
                        </div>
                        <label class="mb-2" for="username">email</label>
                        <input 
                            class="w-full p-2 bg-white border-2 border-indigo-500 rounded-lg mt-4"
                            value="<?= getVar('email'); ?>"
                            id="email"
                            type="email"
                            name="email"
                            placeholder="Enter your email"
                        >
                        <label class="" for="Password">Password</label>
                        <input
                            class="w-full p-2 border-2 border-indigo-500 rounded-lg mt-2"
                            value="<?= getVar('password'); ?>"
                            id="password"
                            type="password"
                            name="password"
                            placeholder="Enter your password"
                        >
                        <button class="w-full bg-indigo-500 text-white font-bold py-2 mt-4 rounded-lg">login</button>
                    </div>
                </form> 
            </div>
        </div>
    </section>
</main>
