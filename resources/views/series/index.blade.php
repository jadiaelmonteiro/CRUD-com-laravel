<x-Layout title="Séries">

    <a class="btn btn-dark btn-sm mb-2" href="/series/criar">Cadastrar
    </a>

    <ul class="list-group">
        <div class="row">
            @foreach ($series as $serie)
            <li class="list-group-item col-10"> {{$serie->nome}}
                <span class="text-end col-2">
                    <a class="btn btn-sm btn-primary" href="/series/editar/{{$serie->id}}">Editar</a>
                </span>
            </li>
            @endforeach
        </div>
    </ul>

    <!-- <script>
        COMO PASSAR UMA VARIAVEL PHP para o JAVASCRIPT
        const series = {{ Js::from($series) }};
        console.log(series);
    </script> -->
</x-Layout>