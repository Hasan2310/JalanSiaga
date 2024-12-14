    @extends('components.navbarL')

    @section('title', 'JalanSiaga | Laporkan')
    @section('content')
        <form action="{{ route('report.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <section class="bg-[#003366] min-h-full flex flex-col justify-center items-center mt-14" id="alert">
                <h1 class="md:text-3xl sm:text-xl text-lg text-center italic text-white font-semibold py-3">
                    Laporkan Kerusakan Jalan
                </h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div
                    class="w-[80%] lg:h-[520px] md:h-[790px] bg-slate-100 grid lg:grid-cols-2 md:grid-cols-1 py-5 px-5 rounded-xl">
                    <div class="">
                        <p class="font-bold md:text-lg sm:text-sm text-sm">Identitas pelapor</p>

                        <!-- Input Nama -->
                        <div class="mt-2">
                            <input type="text" value="{{ $user->name ?? '' }}" placeholder="Nama Lengkap Pelapor"
                                class="border-b-2 border-black outline-0 bg-transparent w-[90%] text-sm" readonly>
                        </div>

                        <!-- Input Nomor Telepon -->
                        <div class="mt-7">
                            <input type="text" name="phone" placeholder="+62"
                                class="border-b-2 border-black outline-0 bg-transparent w-[90%] text-sm">
                        </div>

                        <!-- Input Email -->
                        <div class="mt-7">
                            <input type="text" value="{{ $user->email ?? '' }}" placeholder="Surel"
                                class="border-b-2 border-black outline-0 bg-transparent w-[90%] text-sm" readonly>
                        </div>

                        <!-- Tempat Kejadian -->
                        <p class="font-bold mt-8">Tempat kejadian</p>
                        <p>Jenis kerusakan:</p>
                        <textarea name="description" class="bg-transparent w-[90%] sm:h-44 h-10 px-1 py-1 border-2 border-black rounded-xl"></textarea>

                        <!-- Upload Foto/Video -->
                        <div class="flex gap-3 mt-3">
                            <label
                                class="bg-[#003366] text-center px-5 py-1 rounded-md text-white md:text-lg sm:text-xs text-xs cursor-pointer">
                                Upload foto
                                <input id="uploadImage" type="file" name="image" class="hidden">
                            </label>
                        </div>
                    </div>


                    <div class="lg:mt-1 md:-mt-4 sm:mt-1">
                        <div
                            class="bg-orange-500 rounded-2xl lg:h-[80%] sm:h-[200px] flex justify-center items-center text-center overflow-hidden">
                            <img id="imagePreview" class="object-cover rounded-2xl lg:h-full sm:h-full h-full w-full"
                                alt="Preview">
                        </div>

                        <div class="flex lg:mt-3 sm:mt-2">
                            <input type="text" name="location" placeholder="Nama Jalan, Kode Pos, Kelurahan, Kecamatan"
                                class="bg-transparent border-b-2 border-black w-[73%] text-sm">
                            <button type="submit" class="bg-[#003366] text-white px-3 py-2 rounded-md ms-2 text-center">
                                Kirim laporan
                            </button>
                        </div>
                    </div>
                </div>
        </form>
        <!-- Informasi Laporan -->
        <div class="w-[80%] mt-5">
            <marquee class="bg-slate-100 p-2 rounded-xl">
                | Jumlah User {{ $userCount }} | Jumlah Laporan {{ $laporanCount }} | Laporan Selesai
                {{ $laporanSelesaiCount }} |
            </marquee>
        </div>
        </section>

        <script>
            @if (session('success'))
                Swal.fire({
                    title: "Berhasil!",
                    text: "{{ session('success') }}",
                    confirmButtonText: 'OK',
                    confirmButtonColor: "#f97316",
                    color: "black",
                });
            @endif

            // Alert jika pengguna belum login
            @guest
            Swal.fire({
                title: "Mohon maaf!",
                text: "Anda harus login terlebih dahulu",
                confirmButtonText: 'Login',
                confirmButtonColor: "#f97316",
                color: "black",
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "login";
                }
            });
            @endguest

            // Ambil elemen
            const uploadImage = document.getElementById('uploadImage');
            const imagePreview = document.getElementById('imagePreview');

            // Tambahkan event listener
            uploadImage.addEventListener('change', function() {
                const file = this.files[0]; // Ambil file pertama yang diunggah
                if (file) {
                    const reader = new FileReader();

                    // Saat file selesai dibaca
                    reader.onload = function(e) {
                        // Tampilkan gambar di elemen <img>
                        imagePreview.src = e.target.result;
                        imagePreview.classList.remove('hidden');
                    };

                    reader.readAsDataURL(file); // Baca file
                } else {
                    // Sembunyikan gambar jika tidak ada file
                    imagePreview.src = '';
                    imagePreview.classList.add('hidden');
                }
            });
        </script>
    @endsection
