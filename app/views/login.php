<?php $this->view('includes/head'); ?>

<main class="flex items-center justify-center min-h-screen">
    <section class="">
        <div class="container">
            <div class="">
                <div class="">
                    <div class="logo flex justify-center items-center mb-4">
                        <ion-icon class="text-3xl" name="pie-chart"></ion-icon>
                        <h1 class="text-3xl font-bold text-center" ><a href="<?= BASE_URL ?>">d<span class="is">is</span><span class="po">po</span>n</a></h1>
                    </div> 
                    <p class="text-center font-bold">Sign in to your account</p>
                </div>

                <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                    <form class="space-y-6" action="" method="POST">
                        <div>
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                            <div class="mt-2">
                            <input 
                                id="email" 
                                name="email" 
                                value="<?= getVar('email'); ?>"
                                type="email" autocomplete="email" 
                                required 
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div>
                            <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                            <div class="text-sm">
                                <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                            </div>
                            </div>
                            <div class="mt-2">
                            <input  
                                id="password" 
                                name="password" 
                                value="<?= getVar('password'); ?>"
                                type="password" 
                                autocomplete="current-password" 
                                required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
                        </div>
                    </form>

                    <p class="mt-10 text-center text-sm text-gray-500">
                    Don't have an account?
                    <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Start a 14 day free trial</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>
