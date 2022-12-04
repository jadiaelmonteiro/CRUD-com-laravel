<form action="{{ $action }}" method="POST">
    @csrf

    @isset($nome)
    @method('PUT')
    @endisset

    <input type="hidden" value="{{ $id }}" name="id">
    <div class="mb-2">
        <label class="form-label" for="nome">Nome:</label>
        <input required class="form-control" type="text" name="nome" id="nome" @isset($nome)value="{{ $nome }}" @endisset>
    </div>

    <button type="submit" class="btn btn-dark btn-sm">Adicionar</button>
</form>