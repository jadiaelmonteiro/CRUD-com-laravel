<x-Layout title="Criar">
    <form action="{{ route('series.store') }}" method="POST">
        @csrf
        <div class="mb-2">
            <label class="form-label" for="nome">Nome:</label>
            <input required class="form-control" type="text" name="nome" id="nome"></input>
        </div>

        <button type="submit" class="btn btn-dark btn-sm">Adicionar</button>
    </form>
</x-Layout>