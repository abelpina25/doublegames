@extends('layouts.app')

@section('content')
@include('include.menu')
<div class="container-fluid d-flex align-items-center justify-content-center" style="height: 100vh; background-color: #2c2c2c;">
    <div class="row w-100">
        <div class="col-md-6 d-flex flex-column justify-content-center align-items-center text-white">
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
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-info btn-gradient btn-lg">
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
