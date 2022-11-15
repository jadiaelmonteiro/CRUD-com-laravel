<x-Layout title="Séries">

    <a class="btn btn-dark btn-sm mb-2" href="/series/criar">Cadastrar
    </a>

    <ul class="list-group">

        @foreach ($series as $serie)
        <li class="list-group-item">
            <span class="d-flex">
                {{$serie->nome}}
            </span>
            <span class="d-flex">
                <a class="btn btn-sm btn-primary" href="/series/editar/{{$serie->id}}">Editar</a>
                <a class="btn btn-sm btn-danger" href="/series/deletar/{{$serie->id}}">Excluir</a>
            </span>
        </li>
        @endforeach

    </ul>

    <!-- <script>
        COMO PASSAR UMA VARIAVEL PHP para o JAVASCRIPT
        const series = {{ Js::from($series) }};
        console.log(series);
    </script> -->
</x-Layout>