<nav
  class="fixed left-0 right-0 top-0 bg-blue-500 bg-opacity-20 bg-clip-padding px-[10%] shadow-md drop-shadow-md backdrop-blur-sm backdrop-filter">
  <div class="flex items-center justify-between">
    <a href="/"><img src="{{ 'images/logo/logo2.svg' }}" alt="logo-genpi" class="h-[50px] w-[50px]"></a>
    <div class="flex items-center" id="navbarNav">
      <ul class="hidden gap-8 py-6 text-base font-bold sm:flex sm:items-center">
        <li class="">
          <a class="{{ Request::is('/') ? 'text-blue-500' : '' }} hover:text-blue-500" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="{{ Request::is('/posts') ? 'text-blue-500' : '' }} hover:text-blue-500" href="/posts">Destinasi</a>
        </li>
        <li class="nav-item">
          <a class="{{ Request::is('/about') ? 'text-blue-500' : '' }} hover:text-blue-500" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="{{ Request::is('/categories') ? 'text-blue-500' : '' }} hover:text-blue-500"
            href="/categories">Categories</a>
        </li>
      </ul>
      <ul class="block sm:hidden">
        <li><ion-icon name="menu-outline" class="text-2xl"></ion-icon></li>
      </ul>
    </div>
  </div>
</nav>
