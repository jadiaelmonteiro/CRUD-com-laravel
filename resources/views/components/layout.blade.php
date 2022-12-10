<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-08">
    <title>{{$title}} - Controle de Séries</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">

    <div class="container-fluid">

        <a href="{{ route('series.index') }}" class="navbar-brand">Home</a>
        <a href="{{ route('logout') }}" class="navbar-brand">Logout</a>

    </div>

</nav>

<body>
    <div class="container-fluid">
        <h1>{{$title}}</h1>

        @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso }}
        </div>
        @endisset

        @if ($errors->any())

        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

                @endforeach
            </ul>
        </div>
        @endif

        {{$slot}}
    </div>
</body>

</html>