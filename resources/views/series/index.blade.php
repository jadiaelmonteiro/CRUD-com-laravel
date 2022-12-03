<x-Layout title="Séries">

    <a class="btn btn-dark btn-sm mb-2" href="{{ route('series.create') }}">Cadastrar
    </a>

    <ul class="list-group">

        @foreach ($series as $serie)
        <li class="list-group-item d-flex justify-content-between align-items-center">

            {{$serie->nome}}

            <form action="{{ route('series.destroy', $serie->id)}}" method="POST" >
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger">Excluir</button>
            </form>

        </li>
        @endforeach
    </ul>

    <!-- <script>
        COMO PASSAR UMA VARIAVEL PHP para o JAVASCRIPT
        const series = {{ Js::from($series) }};
        console.log(series);
    </script> -->
</x-Layout>