<x-Layout title="Séries">
    @auth
    <a class="btn btn-dark btn-sm mb-2" href="{{ route('series.create') }}">Cadastrar
    </a>
    @endauth

    <ul class="list-group">

        @foreach ($series as $serie)
        <li class="list-group-item d-flex justify-content-between align-items-center">

            @auth<a href="{{ route('seasons.index', $serie->id) }}">@endauth
                {{$serie->nome}}
            @auth</a>@endauth

            <div class="d-flex">
                @auth
                <a class="btn btn-sm btn-primary" href="{{ route('series.edit', $serie->id )}}">Editar</a>

                <form action="{{ route('series.destroy', $serie->id )}}" method="POST" class="ms-2">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Excluir</button>
                </form>
                @endauth
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