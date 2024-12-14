@extends('components.navbar')

@section('title', 'JalanSiaga | Laporkan')
@section('content')
    <section class="bg-[#003366] min-h-full flex flex-col justify-center items-center mt-14 h-[100vh]" id="alert">
        <h1 class="md:text-3xl sm:text-xl text-lg text-center italic text-white font-semibold py-3">Laporkan Kerusakan Jalan
        </h1>
        <div class="w-[80%] lg:h-[520px] md:h-[790px] bg-slate-100 grid lg:grid-cols-2 md:grid-cols-1 py-5 px-5 rounded-xl">
            <div class="">
                <p class="font-bold md:text-lg sm:text-sm text-sm">Identitas pelapor</p>

                <div class="mt-2">
                    <input type="text" placeholder="Nama Lengkap Pelapor"
                        class="border-b-2 border-black outline-0 bg-transparent w-[90%] text-sm">
                </div>

                <div class="mt-7">
                    <input type="text" placeholder="+62"
                        class="border-b-2 border-black outline-0 bg-transparent w-[90%] text-sm">
                </div>

                <div class="mt-7">
                    <input type="text" placeholder="Surel"
                        class="border-b-2 border-black outline-0 bg-transparent w-[90%] text-sm">
                </div>

                <p class="font-bold mt-8">Tempat kejadian</p>
                <p>Jenis kerusakan:</p>
                <textarea name="" id="" placeholder="Catatan:"
                    class="bg-transparent w-[90%] sm:h-44 h-10 px-1 py-1 border-2 border-black rounded-xl"></textarea>

                <div class="flex gap-3 mt-3">
                    <a href=""
                        class="bg-[#003366] text-center px-5 py-1 rounded-md text-white md:text-lg sm:text-xs text-xs">Upload
                        foto</a>
                </div>
            </div>

            <div class="lg:mt-1 md:-mt-4 sm:mt-1">
                <div class="bg-orange-500 rounded-2xl lg:h-[80%] sm:h-[200px] flex justify-center items-center text-center">
                </div>

                <div class="flex lg:mt-3 sm:mt-2">
                    <input type="text" placeholder="Nama Jalan, Kode Pos, Kelurahan, Kecamatan"
                        class="bg-transparent border-b-2 border-black w-[73%] text-sm">
                    <a class="bg-[#003366] text-white px-3 py-2 rounded-md ms-2 text-center">Kirim laporan</a>
                </div>
            </div>
        </div>

    </section>

    <script>
        Swal.fire({
            title: "Mohon maaf!",
            text: "Anda hatus login terlebih dahulu",
            confirmButtonText: 'Login',
            confirmButtonColor: "#f97316",
            color: "black",
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "login";
            }
        });
    </script>
@endsection
