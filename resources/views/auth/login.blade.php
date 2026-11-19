@extends('layouts.app')

@section('content')
<div class="card auth-card">
    <h1>Login Akun</h1>

    <form method="POST" action="{{ route('login.store') }}">
        @csrf

        <label for="email">
            Email
            <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
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

        <button type="submit" class="btn">Login</button>
    </form>

    <p class="muted" style="margin-top: 16px;">
        Belum punya akun? <a href="{{ route('register') }}" style="color: var(--green); font-weight: 600;">Daftar di sini</a>
    </p>
</div>
@endsection