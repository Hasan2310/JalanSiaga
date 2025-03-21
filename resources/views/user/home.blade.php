@extends('components.navbarL')

@section('title', 'JalanSiaga | Home')
@section('content')
    <section id="Beranda" class="h-[100vh]">
        <div class="-z-10 relative">
            <img src="image/gambar.png" alt="" class="w-[100%] h-[100vh] object-cover">
        </div>
        <div class="z-10 -mt-60 relative">
            <div class="mx-auto container">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide rounded-lg">
                            <img src="image/PP.png" alt="" class="w-36 h-32 mb-5 flex flex-row mx-auto mt-5" />
                            <p
                                class="bg-white text-center text-2xl py-3 fixed w-full bottom-0 px-3 h-20 rounded-lg sm:text-sm md:text-md lg:text-2xl font-bold flex justify-center items-center">
                                Proses <br />pengerjaan</p>
                        </div>
                        <div class="swiper-slide rounded-lg">
                            <img src="image/UP.png" alt="" class="w-36 h-32 mb-5 flex flex-row mx-auto mt-5" />
                            <p
                                class="bg-white text-center text-2xl py-3 fixed w-full bottom-0 px-3 h-20 rounded-lg sm:text-sm md:text-md lg:text-2xl font-bold flex justify-center items-center">
                                Unit <br />pelaksana</p>
                        </div>
                        <div class="swiper-slide rounded-lg">
                            <img src="image/SJ.png" alt="" class="w-36 h-32 mb-5 flex flex-row mx-auto mt-5" />
                            <p
                                class="bg-white text-center text-2xl py-3 fixed w-full bottom-0 px-3 h-20 rounded-lg sm:text-sm md:text-md lg:text-2xl font-bold flex justify-center items-center">
                                Status jalan</p>
                        </div>
                        <div class="swiper-slide rounded-lg">
                            <img src="image/PP2.png" alt="" class="w-36 h-32 mb-5 flex flex-row mx-auto mt-5" />
                            <p
                                class="bg-white text-center text-2xl py-3 fixed w-full bottom-0 px-3 h-20 rounded-lg sm:text-sm md:text-md lg:text-2xl font-bold flex justify-center items-center">
                                Projek <br />pembangunan</p>
                        </div>
                        <div class="swiper-slide rounded-lg">
                            <img src="image/P.png" alt="" class="w-32 h-32 mb-5 flex flex-row mx-auto mt-5" />
                            <p
                                class="bg-white text-center text-2xl py-3 fixed w-full bottom-0 px-3 h-20 rounded-lg sm:text-sm md:text-md lg:text-2xl font-bold flex justify-center items-center">
                                Pengaduan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section id="Panduan" class="-mt-24">
        <div class="bg-[#003366] py-5 pt-36">
            <h1 class="text-3xl text-center font-semibold italic text-white">Panduan laporan</h1>
        </div>

        <div class="bg-slate-100 py-5 sm:px-0">
            <div class="mx-auto container text-start sm:px-0 px-4">
                <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1">
                    <div class="grid grid-rows-2">
                        <div class="mx-auto">
                            <p class="md:text-xl sm:text-2xl font-medium italic">Syarat & Ketentuan Laporan</p>
                            <div class="flex gap-3 cursor-pointer">
                                <div
                                    class="bg-[#F7931E] lg:w-[180px] md:w-[120px] sm:w-[200px] w-[95px] hover:bg-slate-200 shadow-lg lg:h-[240px] md:h-[170px] sm:h-[230px] h-[140px] px-2 items-center justify-center flex hover:flex-col rounded-xl mt-3 transition ease-in-out duration-300 group">
                                    <p
                                        class="text-white font-bold text-center group-hover:text-black sm:text-base lg:text-xl text-[12px]">
                                        Terdaftar</p>
                                    <p
                                        class="hidden group-hover:block text-white group-hover:text-black text-center mt-1 sm:text-sm text-[10px]">
                                        Pastikan Anda telah memiliki akun di platform JalanSiaga untuk mulai melaporkan
                                        kerusakan jalan.
                                    </p>
                                </div>
                                <div
                                    class="bg-[#F7931E] lg:w-[180px] md:w-[120px] sm:w-[200px] w-[95px] hover:bg-slate-200 shadow-lg lg:h-[240px] md:h-[170px] sm:h-[230px] h-[140px] px-2 items-center justify-center flex hover:flex-col rounded-xl mt-3 transition ease-in-out duration-300 group">
                                    <p
                                        class="text-white font-bold text-center group-hover:text-black sm:text-base lg:text-xl text-[12px]">
                                        Ajukan pengaduan</p>
                                    <p
                                        class="hidden group-hover:block text-white group-hover:text-black text-center mt-1 sm:text-sm text-[10px]">
                                        Klik tombol "Ajukan Pengaduan" dan isi form pengaduan dengan detail lokasi dan
                                        deskripsi kerusakan.
                                    </p>
                                </div>
                                <div
                                    class="bg-[#F7931E] lg:w-[180px] md:w-[120px] sm:w-[200px] w-[95px] hover:bg-slate-200 shadow-lg lg:h-[240px] md:h-[170px] sm:h-[230px] h-[140px] px-2 items-center justify-center flex hover:flex-col rounded-xl mt-3 transition ease-in-out duration-300 group">
                                    <p
                                        class="text-white font-bold text-center group-hover:text-black sm:text-base lg:text-xl text-[12px]">
                                        Lampirkan bukti</p>
                                    <p
                                        class="hidden group-hover:block text-white group-hover:text-black text-center mt-1 sm:text-sm text-[10px]">
                                        Unggah foto atau video sebagai bukti kerusakan untuk mempercepat proses verifikasi.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="mx-auto">
                            <p class="md:text-xl sm:text-2xl font-medium italic mt-5">Alur & Prosedur Laporan</p>
                            <div class="flex gap-3 cursor-pointer">
                                <div
                                    class="bg-[#F7931E] lg:w-[180px] md:w-[120px] sm:w-[200px] w-[95px] hover:bg-slate-200 shadow-lg lg:h-[240px] md:h-[170px] sm:h-[230px] h-[140px] px-2 items-center justify-center flex hover:flex-col rounded-xl mt-3 transition ease-in-out duration-300 group">
                                    <p
                                        class="text-white font-bold text-center group-hover:text-black sm:text-base lg:text-xl text-[12px]">
                                        Pengaduan Masyarakat</p>
                                    <p
                                        class="hidden group-hover:block text-white group-hover:text-black text-center mt-1 sm:text-sm text-[10px]">
                                        Pengguna dapat melaporkan kerusakan jalan melalui form pengaduan yang tersedia di
                                        website.
                                    </p>
                                </div>
                                <div
                                    class="bg-[#F7931E] lg:w-[180px] md:w-[120px] sm:w-[200px] w-[95px] hover:bg-slate-200 shadow-lg lg:h-[240px] md:h-[170px] sm:h-[230px] h-[140px] px-2 items-center justify-center flex hover:flex-col rounded-xl mt-3 transition ease-in-out duration-300 group">
                                    <p
                                        class="text-white font-bold text-center group-hover:text-black sm:text-base lg:text-xl text-[12px]">
                                        Pengaduan Terkonfirmasi</p>
                                    <p
                                        class="hidden group-hover:block text-white group-hover:text-black text-center mt-1 sm:text-sm text-[10px]">
                                        Pengaduan diverifikasi oleh tim JalanSiaga sebelum diteruskan ke pihak terkait.
                                    </p>
                                </div>
                                <div
                                    class="bg-[#F7931E] lg:w-[180px] md:w-[120px] sm:w-[200px] w-[95px] hover:bg-slate-200 shadow-lg lg:h-[240px] md:h-[170px] sm:h-[230px] h-[140px] px-2 items-center justify-center flex hover:flex-col rounded-xl mt-3 transition ease-in-out duration-300 group">
                                    <p
                                        class="text-white font-bold text-center group-hover:text-black sm:text-base lg:text-xl text-[12px]">
                                        Tindak Lanjut</p>
                                    <p
                                        class="hidden group-hover:block text-white group-hover:text-black text-center mt-1 sm:text-sm text-[10px]">
                                        Laporan yang valid akan ditindaklanjuti dan progresnya dapat dipantau oleh pelapor.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-rows-2 sm:mt-5 md:mt-0 mt-0 sm:px-4 md:px-0 px-1">
                        <div class="">
                            <p class="text-xl font-medium italic">Manfaat Layanan <span
                                    class="italic font-bold">JalanSiaga</span></p>
                            <ul class="list-disc ms-8">
                                <li>Meningkatkan keselamatan pengguna jalan dengan melaporkan kerusakan secara cepat dan
                                    efisien.</li>
                                <li>Mempermudah masyarakat untuk menyampaikan keluhan terkait infrastruktur jalan.</li>
                                <li>Mendorong transparansi dan tanggung jawab pemerintah dalam memperbaiki infrastruktur.
                                </li>
                                <li>Mengurangi risiko kecelakaan akibat jalan berlubang atau rusak.</li>
                            </ul>
                        </div>

                        <div class="px-4">
                            <p class="text-xl font-medium italic md:mt-0 sm:mt-3 mt-3">Fitur Situs <span
                                    class="italic font-bold">JalanSiaga</span></p>
                            <ul class="list-disc ms-8">
                                <li>Sistem pelaporan kerusakan jalan yang mudah digunakan oleh masyarakat umum.</li>
                                <li>Integrasi dengan layanan respons cepat untuk menindaklanjuti laporan pengguna.</li>
                                <li>Pemberitahuan status perbaikan langsung kepada pelapor.</li>
                                <li>Informasi terkini tentang progres perbaikan jalan yang dilaporkan.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#003366] py-5 px-4" id="Statistik">
        <p class="text-white text-center text-3xl italic font-semibold">Ringkasan Laporan</p>
        <div class="bg-slate-100 mx-auto container mt-5 rounded-xl px-10 py-5 grid md:grid-cols-2 gap-8">
            <!-- Kolom Kiri -->
            <div class="col-span-1 space-y-10">
                <!-- Laporan Minggu Lalu -->
                <div>
                    <h2 class="text-2xl font-bold italic mb-4">Laporan Minggu Lalu</h2>
                    @if ($weeklyReports)
                        <div class="bg-white rounded-lg shadow-md p-5">
                            <h3 class="text-xl font-bold italic mb-2">{{ $weeklyReports->title }}</h3>
                            <p class="text-gray-600">Deskripsi: {{ $weeklyReports->description }}</p>
                            <p class="text-gray-600 mt-2">Lokasi: {{ $weeklyReports->location ?? 'Tidak tersedia' }}</p>
                            <p class="text-gray-500 text-sm">Dibuat pada: {{ $weeklyReports->created_at->format('d M Y') }}
                            </p>
                        </div>
                    @else
                        <p class="text-gray-500">Tidak ada laporan minggu lalu.</p>
                    @endif
                </div>
            </div>

            <!-- Kolom Kanan -->
            <div class="col-span-1">
                <!-- Laporan Terbaru -->
                <h2 class="text-2xl font-bold italic mb-4">Laporan Terbaru</h2>
                @if ($newReports)
                    <div class="bg-white rounded-lg shadow-md p-5">
                        <h3 class="text-xl font-bold italic mb-2">{{ $newReports->title }}</h3>
                        <p class="text-gray-600">Deskripsi: {{ $newReports->description }}</p>
                        <p class="text-gray-600 mt-2">Lokasi: {{ $newReports->location ?? 'Tidak tersedia' }}</p>
                        <p class="text-gray-500 text-sm">Dibuat pada: {{ $newReports->created_at->format('d M Y') }}</p>
                    </div>
                @else
                    <p class="text-gray-500">Tidak ada laporan terbaru.</p>
                @endif
            </div>
        </div>
    </section>
@endsection
