@extends('layouts.app') <!-- Estende o layout padrão 'app' -->

@section('content')
@include('include.menu') <!-- Inclui o menu -->
<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white text-center">
                <h5 class="mb-0">
                    <i class="fas fa-sign-in-alt"></i> {{ __('Login') }} <!-- Título do formulário de login -->
                </h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf <!-- Token CSRF para segurança -->

                    <div class="form-group mb-3">
                        <label for="email" class="form-label">
                            <i class="fas fa-envelope"></i> {{ __('Endereço de Email') }} <!-- Rótulo para o campo Email -->
                        </label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="password" class="form-label">
                            <i class="fas fa-lock"></i> {{ __('Palavra-passe') }} <!-- Rótulo para o campo Password -->
                        </label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Lembrar-me') }} <!-- Checkbox para lembrar usuário -->
                            </label>
                        </div>
                    </div>

                    <div class="form-group mb-0 text-center">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-sign-in-alt"></i> {{ __('Login') }} <!-- Botão para submeter o formulário de login -->
                        </button>
                    </div>

                    <div class="form-group mt-3 text-center">
                        <p>{{ __('Não tem uma conta? ') }} <a href="{{ route('register') }}" class="text-primary">{{ __('Registe-se aqui') }}</a>.</p> <!-- Link para redirecionar para a página de registo -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection <!-- Fim da seção de conteúdo -->


