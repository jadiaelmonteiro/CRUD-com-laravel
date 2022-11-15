<x-Layout title="Atualizar">
    <form action="/series/atualizar" method="POST">
        @csrf
        <input type="hidden" id="id_serie" name="id_serie" value="{{$serie[0]->id}}"></input>
        <div class="mb-2">
            <label class="form-label" for="nome">Nome:</label>
            <input value="{{$serie[0]->nome}}" required class="form-control" type="text" name="nome_atualizado" id="nome_atualizado"></input>
        </div>
        <button type="submit" class="btn btn-dark btn-sm">Atualizar</button>
    </form>
</x-Layout>