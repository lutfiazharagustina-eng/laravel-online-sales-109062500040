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
=======
@extends('layouts.app') 

@section('title','Masuk') 

@section('content')<div class="card auth-card"><span class="eyebrow">SELAMAT DATANG KEMBALI</span><h1>Masuk ke akunmu</h1><p class="muted" style="text-align:left">Lanjutkan belanja dan pantau pesanan dengan mudah.</p><form method="POST" action="{{ route('login.store') }}">@csrf<label>Email<input type="email" name="email" value="{{ old('email') }}" autocomplete="username" required autofocus></label><label>Password<input type="password" name="password" autocomplete="current-password" required></label><button class="btn">Masuk</button></form><p class="muted" style="margin-top:20px">Belum punya akun? <a href="{{ route('register') }}"><strong>Daftar di sini</strong></a></p></div>@endsection 
>>>>>>> milestone/06-checkout
