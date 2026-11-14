@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center py-12 px-4">
    <div class="w-full max-w-md bg-white shadow-md rounded-lg overflow-hidden border border-gray-100">
        <div class="bg-emerald-800 text-white px-6 py-4 font-bold text-lg">
            Daftar Akun Baru
        </div>
        <div class="p-6">
            <form method="POST" action="{{ route('register.store') }}">
                @csrf

                <!-- Input Nama -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-600 @error('name') border-red-500 @enderror" id="name" name="name" value="{{ old('name') }}" required autofocus>
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Input Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-600 @error('email') border-red-500 @enderror" id="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Input Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-600 @error('password') border-red-500 @enderror" id="password" name="password" required>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Konfirmasi Password -->
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi Password</label>
                    <input type="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-600" id="password_confirmation" name="password_confirmation" required>
                </div>

                <!-- Tombol Submit -->
                <div class="mb-4">
                    <button type="submit" class="w-full bg-emerald-800 text-white py-2 px-4 rounded-md hover:bg-emerald-700 transition font-medium">
                        Daftar
                    </button>
                </div>
            </form>

            <!-- Link Login -->
            <div class="mt-4 text-center text-sm text-gray-600">
                <p>Sudah punya akun? <a href="{{ route('login') }}" class="text-emerald-700 font-semibold hover:underline">Masuk</a></p>
            </div>
        </div>
    </div>
</div>
@endsection