<x-Layout title="Séries">

    <a class="btn btn-dark btn-sm mb-2" href="{{ route('series.create') }}">Cadastrar
    </a>

    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{ $mensagemSucesso }}
    </div>
    @endisset

    <ul class="list-group">

        @foreach ($series as $serie)
        <li class="list-group-item d-flex justify-content-between align-items-center">

            {{$serie->nome}}
            <div class="d-flex">
                <a class="btn btn-sm btn-primary" href="{{ route('series.edit', $serie->id )}}">Editar</a>

                <form action="{{ route('series.destroy', $serie->id )}}" method="POST" class="ms-2">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Excluir</button>
                </form>
            </div>
        </li>
        @endforeach
    </ul>

    <!-- <script>
        COMO PASSAR UMA VARIAVEL PHP para o JAVASCRIPT
        const series = {{ Js::from($series) }};
        console.log(series);
    </script> -->
</x-Layout>