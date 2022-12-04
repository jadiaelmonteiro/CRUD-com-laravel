<form action="{{ $action }}" method="POST">
    @csrf

    @isset($nome)
    @method('PUT')
    @endisset

    @isset($id)
    <input type="hidden" value="{{ $id }}" name="id">
    @endisset
    
    <div class="mb-2">
        <label class="form-label" for="nome">Nome:</label>
        <input class="form-control" type="text" name="nome" id="nome" @isset($nome)value="{{ $nome }}" @endisset>
    </div>

    <button type="submit" class="btn btn-dark btn-sm">Adicionar</button>
</form>