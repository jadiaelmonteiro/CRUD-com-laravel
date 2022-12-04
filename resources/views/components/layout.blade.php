<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-08">
    <title>{{$title}} - Controle de Séries</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container-fluid">
        <h1>{{$title}}</h1>

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