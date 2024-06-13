@extends('layouts.app')

@section('content')
    <style>
        body {
            min-height: 100vh;
            background: url(imagens/fundo2.jpg) no-repeat;
            background-size: cover;
            background-position: center;
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 100px;
            background: rgba(255, 225, 255, .1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>

    @include('include.menu')
@endsection
