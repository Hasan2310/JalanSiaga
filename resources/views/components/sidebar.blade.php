<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>@yield('title')</title>
</head>
<body>
    
<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
   <span class="sr-only">Open sidebar</span>
   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
   <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
   </svg>
</button>

<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
   <div class="h-full px-3 py-4 overflow-y-auto bg-[#003366] flex flex-col justify-between">
      <div>
         <h1 class="font-bold text-2xl ms-4 text-white mb-5">JalanSiaga</h1>
         <ul class="space-y-2 font-medium">
            <li>
               <a href="{{ route('dashboard') }}" 
                  class="flex items-center p-2 text-gray-900 rounded-lg group
                  {{ request()->routeIs('dashboard') ? 'bg-orange-500' : 'hover:bg-slate-200/10' }}">
                  <span class="text-white ms-3">Dashboard</span>
               </a>
            </li>
            <li>
               <a href="{{ route('user.index') }}"
                  class="flex items-center p-2 text-gray-900 rounded-lg group
                  {{ request()->routeIs('user.*') ? 'bg-orange-500' : 'hover:bg-slate-200/10' }}">
                  <span class="text-white flex-1 ms-3 whitespace-nowrap">User</span>
               </a>
            </li> 
            <li>
               <a href="{{ route('reports.index') }}"
                  class="flex items-center p-2 text-gray-900 rounded-lg group
                  {{ request()->routeIs('reports.*') ? 'bg-orange-500' : 'hover:bg-slate-200/10' }}">
                  <span class="text-white flex-1 ms-3 whitespace-nowrap">Laporan</span>
               </a>
            </li>
         </ul>
      </div>

      <!-- Logout Button -->
      <div class="mt-4">
         <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="w-full flex items-center p-2 text-gray-900 rounded-lg hover:bg-slate-200/10 group">
               <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M3 4.75A.75.75 0 013.75 4h11.5a.75.75 0 010 1.5H3.75A.75.75 0 013 4.75zM2.75 10a.75.75 0 00-.75.75v6.5A.75.75 0 002.75 18h14.5a.75.75 0 00.75-.75v-6.5a.75.75 0 00-.75-.75H2.75z" clip-rule="evenodd"></path>
                  <path d="M6 6.5A.75.75 0 016.75 6h6.5a.75.75 0 010 1.5H6.75A.75.75 0 016 6.5zm-.25 4.25A.75.75 0 016.5 10h7a.75.75 0 010 1.5h-7a.75.75 0 01-.75-.75z"></path>
               </svg>
               <span class="text-white ms-3">Logout</span>
            </button>
         </form>
      </div>
   </div>
</aside>

<div class="p-4 sm:ml-64">
    @yield('content')
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>