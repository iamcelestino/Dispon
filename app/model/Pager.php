<?php

namespace App\Model;

class Pager {

    public $links = [];
    public $offset = 0;
    public $pageNumber = 1;
    public $start = 1;
    public $end = 1;

    public function __construct($limit = 10, $extras = 1)
    {   
      $pageNumber = isset($_GET['page']) ? (int)$_GET['page']: 1;
      $pageNumber = $pageNumber < 1 ? 1 : $pageNumber;
 
      $this->end = $pageNumber + $extras;
      $this->start = $pageNumber - $extras;
      
      if($this->start < 1)
      {
        $this->start = 1;
      }
 
      $this->offset = ($pageNumber - 1) * $limit;
      $this->pageNumber = $pageNumber;
 
      $currentLink = BASE_URL. str_replace("url=", "", $_SERVER['QUERY_STRING']);
      $currentLink = !strstr($currentLink, "page=") ? $currentLink . "&page=1":$currentLink;
 
      $firstLink = preg_replace('/page=[0-9]+/', "page=1", $currentLink);
      $nextLink = preg_replace('/page=[0-9]+/', "page=". ($pageNumber + $extras + 1), $currentLink);
 
      $this->links['first'] = $firstLink;
      $this->links['current'] = $currentLink;
      $this->links['next'] = $nextLink;

    }
    
    public function display() 
    {
        ?>
              <div class="flex items-center justify-center  bg-white px-4 sm:px-6">
                <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-center">
                  <div>
                    <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                      
                      <a href="<?=$this->links['first']?>" class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                        <span class="sr-only">First</span>
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                        </svg>
                      </a>

                      <?php for($x = $this->start; $x <= $this->end; $x++): ?>
                      <a href="<?=preg_replace('/page=[0-9]+/', "page=" . $x, $this->links['current'])?>" aria-current="page" class="relative z-10 inline-flex items-center bg-indigo-600 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><?=$x?></a>
                      <?php endfor; ?>

                      <a href="<?=$this->links['next']?>" class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                        <span class="sr-only">Next</span>
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                        </svg>
                      </a>

                    </nav>
                  </div>
                </div>
              </div>
        <?php
    }
}