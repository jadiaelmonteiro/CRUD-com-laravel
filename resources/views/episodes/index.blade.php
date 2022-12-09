<x-Layout title="Episódios" :mensagem-sucesso="$mensagemSucesso">
    <form method="POST">
        @csrf
        <ul class="list-group">

            @foreach ($episodes as $episode)
            <li class="list-group-item d-flex justify-content-between align-items-center">

                Episódio {{$episode->number}}

                <input type="checkbox" 
                       name="episodes[]" 
                       value="{{ $episode->id }}"
                       @if ($episode->watched) checked @endif />
            </li>
            @endforeach
        </ul>
        <button class="btn btn-dark btn-sm mt-4 mb-5">SALVAR</button>
    </form>

</x-Layout>