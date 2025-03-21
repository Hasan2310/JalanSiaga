<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <title>@yield('title')</title>
</head>
<body>
    <nav class="bg-[#003366] py-3 top-0 w-full fixed z-20 shadow-2xl px-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-3xl text-white font-bold">JalanSiaga</div>
            <!-- Icon Menu (for small screens) -->
            <div class="block md:hidden">
            <button id="menu-btn" class="text-white focus:outline-none">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button> 
            </div>
            <!-- Navigation Menu (hidden on small screens) -->
            <div id="menu" class="hidden absolute bg-[#003366] w-full left-0 top-full md:static md:w-auto md:flex">
            <ul class="flex flex-col md:flex-row text-white gap-5 p-5 md:p-0">
                <li><a class="italic text-md" href="/.#Panduan">Panduan</a></li>
                <li><a class="italic text-md" href="/.#Statistik">Statistik</a></li>
                <li><a class="italic text-md" href="/.#Tentang">Tentang</a></li>
                <li><a class="italic text-md" href="laporkan">Laporkan</a></li>
                <li><a class="italic text-md" href="login">Masuk</a></li>
            </ul>
            </div>
        </div>
    </nav>

    <div>
        @yield('content')
    </div>

    <footer class="bg-slate-100" id="Tentang">
        <div class="grid sm:grid-cols-3 px-10 py-8 gap-5">
            <div class="left">
                <p class="text-lg font-bold">JalanSiaga</p>
                <p class="text-sm font-semibold mt-1">Berasama wujudkan infrastruktur yang lebih baik. Laporkan kerusakan
                    jalan di sekitar Anda dan bantu kami membuat perjalanan lebih aman.</p>
            </div>

            <div>
                <p class="text-lg font-bold ">Tim kami</p>
                <p class="text-sm font-semibold mt-1">M Jabar | Project Manager</p>
                <p class="text-sm font-semibold mt-1">Zamzami y | Project Manager</p>
                <p class="text-sm font-semibold mt-1">Dava R S | UI/UX</p>
                <p class="text-sm font-semibold mt-1">Hasan A H | Web developer</p>
                <p class="text-sm font-semibold mt-1">Ardina A | Web developer</p>
            </div>

            <div class="right">
                <p class="text-lg font-bold ">Kontak kami</p>
                <p class="text-sm font-semibold mt-1">Hubungi kami di support@jalansiaga.com  <br> (+62) 85718553755. Kami siap membantu Anda!</p>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>