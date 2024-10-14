<?php

 $this->view('includes/head') ?>

<nav class="bg-indigo-500 text-white p-4 block sm:hidden">
  <div class="flex items-center justify-between">
    <div class="flex items-center">
        <ion-icon class="text-3xl" name="pie-chart"></ion-icon>
        <h1 class="text-3xl font-bold" ><a href="<?= BASE_URL ?>">dispon</a></h1>
    </div>
    <button class="text-white focus:outline-none" onclick="toggleMenu()">
      <span class="block w-6 h-0.5 bg-white mb-1"></span>
      <span class="block w-6 h-0.5 bg-white mb-1"></span>
      <span class="block w-6 h-0.5 bg-white"></span>
    </button>
  </div>
  <div class="mt-2 hidden" id="mobile-menu">
  <ul class="space-y-2">
        <li class="flex items-center  hover:bg-gray-700 rounded">
            <ion-icon name="albums"></ion-icon>
            <a class="block px-2 py-1 " href="#">Dashboard</a>
        </li>
        <li class="flex items-center  hover:bg-gray-700 rounded">
            <ion-icon name="apps"></ion-icon>
            <a class="block px-2 py-1 " href="#">Products</a>
        </li>
        <li class="flex items-center  hover:bg-gray-700 rounded">
            <ion-icon name="person"></ion-icon>
            <a class="block px-2 py-1 " href="#">Clients</a>
        </li>
        <li class="flex items-center  hover:bg-gray-700 rounded">
            <ion-icon name="copy"></ion-icon>
            <a class="block px-2 py-1 " href="#">Income</a>
        </li>
    </ul>
    </ul>
  </div>
</nav>

<div class="flex flex-col sm:flex-row">

  <div class="hidden sm:block w-full sm:w-1/4 bg-indigo-500 text-white h-screen p-4">
     <div class="flex items-center mb-6">
        <ion-icon class="text-3xl" name="pie-chart"></ion-icon>
        <h1 class="text-3xl font-bold" ><a href="<?= BASE_URL ?>">d<span class="is">is</span><span class="po">po</span>n</a></h1>
    </div>
    <ul class="space-y-4">
        <li class="flex items-center hover:bg-gray-700 rounded">
            <ion-icon name="albums"></ion-icon>
            <a class="block px-2 py-1 " href="#">Dashboard</a>
        </li>
        <li class="flex items-center hover:bg-gray-700 rounded">
            <ion-icon name="apps"></ion-icon>
            <a class="block px-2 py-1 " href="#">Products</a>
        </li>
        <li class="flex items-center  hover:bg-gray-700 rounded">
            <ion-icon name="person"></ion-icon>
            <a class="block px-2 py-1 " href="#">Customers</a>
        </li>
        <li class="flex items-center  hover:bg-gray-700 rounded">
            <ion-icon name="copy"></ion-icon>
            <a class="block px-2 py-1 " href="#">Income</a>
        </li>
    </ul>
  </div>


  <div class="w-full sm:w-3/4 p-6">
    <div class="p-6 mb-6">
      <h4 class="text-xl font-semibold mb-2">Welcome Celestino</h4>
      <div>
        <input type="search">
      </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
      <div class="bg-white shadow-lg rounded-lg p-4 text-center flex items-center justify-center gap-4">
        <div class="bg-indigo-200 p-4 rounded-full">
            <ion-icon class="text-4xl" name="person"></ion-icon>
        </div>
        <div>
            <h4 class="text-lg font-semibold">Orders</h4>
            <p><?= escape(count($orders)) ?></p>
        </div>
      </div>
      <div class="bg-white shadow-lg rounded-lg p-4 text-center flex items-center justify-center gap-4">
        <div class="bg-indigo-200 p-4 rounded-full">
            <ion-icon class="text-4xl"  name="apps"></ion-icon>
        </div>
        <div>
            <h4 class="text-lg font-semibold">Products</h4>
            <p>100 Million</p>
        </div>
      </div>
      <div class="bg-white shadow-lg rounded-lg p-4 text-center flex items-center justify-center gap-4">
        <div class="bg-indigo-200 p-4 rounded-full">
            <ion-icon class="text-4xl" name="cash"></ion-icon>
        </div>
        <div>
            <h4 class="text-lg font-semibold">Total Incomes</h4>
            <p><?= escape($supplierIncomes[0]->totalIncomes) ?></p>
        </div>
      </div>
    </div>

      <div class="bg-white shadow-lg rounded-lg">
        <div class="container mx-auto p-4">
          <div class="overflow-x-auto">
            <div class="sm:flex items-center justify-between mb-4">
              <h1 class="font-bold text-3xl">All Orders</h1>
              <div class="sm:flex items-center">
                <form action="">
                    <input class="border-indigo-500 border-2 rounded-md px-4 py-2" type="text" placeholder="search your product">
                </form>
                <a class="text-white bg-indigo-500 inline-block font-medium px-4 py-2 ml-4 rounded-md" href="">
                  Add Product
                </a>
              </div>
            </div>

            <table class="min-w-full bg-white ">
              <thead>
                <tr>
                  <th class="px-4 py-2 border-b">Client Username</th>
                  <th class="px-4 py-2 border-b">Price</th>
                  <th class="px-4 py-2 border-b">Total</th>
                  <th class="px-4 py-2 border-b">Status</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($orders as $order): ?>
                <tr class="text-center">
                  <td class="px-4 py-2 border-b"><?= escape($order->id) ?></td>
                  <td class="px-4 py-2 border-b"><?= escape($order->user_id) ?></td>
                  <td class="px-4 py-2 border-b"><?=  escape($order->total) ?></td>
                  <td class="px-4 py-2 border-b">
                  <?php if($order->STATUS == 'pending'): ?>
                    <span class="bg-red-400 p-[0.3rem] font-bold rounded-md text-white"><?=  escape($order->STATUS) ?></span>
                    <a href="<?= BASE_URL ?>order/edit/<?= $order->id ?>">
                      <ion-icon class="" name="create"></ion-icon>
                    </a>
                  <?php else:  ?>
                    <span class="bg-green-400 p-[0.3rem] font-bold rounded-md text-white"><?=  escape($order->STATUS) ?></span>
                  <?php endif; ?>
                  </td>
                </tr>
              <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
  </div>
</div>

<script>
  function toggleMenu() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
  }
</script>

</body>
</html>
