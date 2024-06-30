@extends('layouts.app')

@section('content')
@include('include.menu')
<div class="container-fluid d-flex align-items-center justify-content-center" style="height: 100vh; background-color: #2c2c2c;">
    <div class="row w-100">
        <div class="col-md-6 d-flex flex-column justify-content-center align-items-center text-white">
            <h2 class="mb-4">Iniciar Sessão</h2>
            <div class="mb-3 d-flex justify-content-center">
                <button class="btn btn-primary mx-1 btn-icon"><i class="fab fa-facebook-f"></i></button>
                <button class="btn btn-light mx-1 btn-icon"><i class="fab fa-google"></i></button>
                <button class="btn btn-dark mx-1 btn-icon"><i class="fab fa-apple"></i></button>
                <button class="btn btn-info mx-1 btn-icon"><i class="fab fa-discord"></i></button>
            </div>
            <div class="w-100 d-flex justify-content-center align-items-center">
                <hr class="w-25">
                <span class="mx-2">ou</span>
                <hr class="w-25">
            </div>
            <form method="POST" action="{{ route('login') }}" class="w-75">
                @csrf
                <div class="mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Senha">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3 d-flex justify-content-between">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">Lembrar de mim</label>
                    </div>
                    @if (Route::has('password.request'))
                    <a class="text-decoration-none text-white" href="{{ route('password.request') }}">Esqueceu sua senha?</a>
                    @endif
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-info btn-gradient">
                        <i class="fas fa-sign-in-alt me-2"></i> Iniciar Sessão
                    </button>
                </div>
            </form>
           
        </div>
        <div class="col-md-6 d-none d-md-block p-0">
            <img src="{{ asset('imagens/imagem1.png') }}" alt="Image" class="login-image">
        </div>
    </div>
</div>
@endsection
