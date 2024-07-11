@extends('layouts.app') <!-- Estende o layout padrão 'app' -->

@section('content')
@include('include.menu') <!-- Inclui o menu -->
<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white text-center">
                <h5 class="mb-0">
                    <i class="fas fa-user-plus"></i> {{ __('Registar') }} <!-- Título do formulário de registo -->
                </h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf <!-- Token CSRF para segurança -->

                    <div class="form-group mb-3">
                        <label for="name" class="form-label">
                            <i class="fas fa-user"></i> {{ __('Nome') }} <!-- Rótulo para o campo Nome -->
                        </label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="email" class="form-label">
                            <i class="fas fa-envelope"></i> {{ __('Endereço de Email') }} <!-- Rótulo para o campo Email -->
                        </label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
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
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="password-confirm" class="form-label">
                            <i class="fas fa-lock"></i> {{ __('Confirmar Palavra-passe') }} <!-- Rótulo para o campo Confirmar Password -->
                        </label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="form-group mb-0 text-center">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-user-plus"></i> {{ __('Registar') }} <!-- Botão para submeter o formulário de registo -->
                        </button>
                    </div>

                    <div class="form-group mt-3 text-center">
                        <p>{{ __('Já tem uma conta? ') }} <a href="{{ route('login') }}" class="text-primary">{{ __('Entre aqui') }}</a>.</p> <!-- Link para redirecionar para a página de login -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection <!-- Fim da seção de conteúdo -->





