@extends('layouts.app')

@section('content')
<div class="card auth-card">
    <h1>Daftar Akun Baru</h1>

    <form method="POST" action="{{ route('register.store') }}">
        @csrf

        <label for="name">
            Nama Lengkap
            <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus>
            @error('name')
                <span class="validation-error">{{ $message }}</span>
            @enderror
        </label>

        <label for="email">
            Email
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <span class="validation-error">{{ $message }}</span>
            @enderror
        </label>

        <label for="password">
            Password
            <input type="password" id="password" name="password" required>
            @error('password')
                <span class="validation-error">{{ $message }}</span>
            @enderror
        </label>

        <label for="password_confirmation">
            Konfirmasi Password
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </label>

        <button type="submit" class="btn">Daftar</button>
    </form>

    <p class="muted" style="margin-top: 16px;">
        Sudah punya akun? <a href="{{ route('login') }}" style="color: var(--green); font-weight: 600;">Masuk</a>
    </p>
</div>
@endsection