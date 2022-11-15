<x-Layout title="Séries">

    <a class="btn btn-dark btn-sm mb-2" href="/series/criar">Cadastrar
    </a>

    <ul class="list-group">
        @foreach ($series as $serie)
        <li class="list-group-item"> {{$serie->nome}} </li>
        @endforeach
    </ul>

    <!-- <script>
        COMO PASSAR UMA VARIAVEL PHP para o JAVASCRIPT
        const series = {{ Js::from($series) }};
        console.log(series);
    </script> -->
</x-Layout>