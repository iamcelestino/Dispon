<?php $this->view('includes/head'); ?>

<main class="flex items-center justify-center min-h-screen">
    <section class="">
        <div class="container">
            <div class=" bg-slate-100 sm:grid grid-cols-2">
                <div class="bg-indigo-500 p-12">
                    <div class="text-center">
                        <div class="text-white mb-4">
                            <h1 class="font-bold text-3xl mb-4">Hey There!</h1>
                            <h4 class="">Welcome back</h4>
                            <p class="">You are just one step away to your account</p>
                        </div>
                        <div class="text-slate-300">
                            <p class="mb-4">Don't have an account</p>
                            <a class="inline-block border-2  border-white rounded-md py-2 px-6 font-bold" href="">sign up</a>
                        </div>
                    </div>
                </div>
                <div class="p-6 md:p-12">
                    <label class="mb-4" for="email">username</label>
                    <input 
                        class="w-full p-2 bg-white"
                        id="email"
                        type="email"
                        name="email"
                        placeholder="Enter your email"
                    >
                    <label class="mb-4" for="Password">Password</label>
                    <input
                        class="w-full p-2"
                        id="password"
                        type="password"
                        name="password"
                        placeholder="Enter your password"
                    >
                    <button class="w-full bg-indigo-500 text-white font-bold py-2 mt-4">login</button>
                </div>
            </div>
        </div>
    </section>
</main>
