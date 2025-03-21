@extends('components.layouts')

@section('title', 'JalanSiaga | Masuk')

@section('content')
    <div class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
        <div class="max-w-screen-xl m-0 sm:m-10 bg-[#003366] shadow sm:rounded-lg flex justify-center flex-1">
            <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
                <div class="mt-12 flex flex-col items-center">
                    <div class="w-full flex-1 mt-8">
                        <h1 class="font-bold text-5xl text-white text-center">Masuk</h1>
                        <form action="{{ route('login.store') }}" method="POST" class="mx-auto max-w-xs mt-10">
                            @csrf
                            <input
                                class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                type="email" name="email" placeholder="Email" required />
                            <input
                                class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
                                type="password" name="password" placeholder="Password" required />
                            @if ($errors->any())
                                <div class="alert alert-danger text-white">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <button
                                class="mt-5 tracking-wide font-semibold bg-[#F7931E] text-white-500 w-full py-2 rounded-lg hover:bg-green-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                                <span class="text-white text-xl">Masuk</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="flex-1 bg-green-100 text-center hidden lg:flex relative">
                <div class="absolute inset-0 bg-black opacity-50"></div> <!-- Overlay gelap -->
                <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
                    <p class="mb-1 text-md">Selamat datang di</p>
                    <h1 class="mb-1 text-5xl font-bold">JalanSiaga</h1>
                    <p class="mb-1 text-md">
                        Belum punya akun? <a class="text-orange-500" href="{{ route('register.index') }}">daftar kuy</a>
                    </p>
                </div>
                <img src="image/gambar.png" alt="Gambar Deskripsi" class="w-full object-cover">
            </div>
        </div>
    </div>
@endsection
