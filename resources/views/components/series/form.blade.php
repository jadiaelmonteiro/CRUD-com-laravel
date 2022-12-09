<form action="{{ $action }}" method="post" :mensagem-sucesso="$mensagemSucesso">
    @csrf

    @if($update)
    @method('PUT')
    @endif
    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text"
               id="nome"
               name="nome"
               class="form-control"
               @isset($nome)value="{{ $nome }}"@endisset>
    </div>

    <button type="submit" class="btn btn-dark btn-sm btn-primary">Adicionar</button>
</form>
