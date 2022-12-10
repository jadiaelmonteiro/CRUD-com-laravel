<x-Layout title="Novo usuário">
    <form method="POST">
        @csrf
        <div class="form-group">
            <label for="name"class="form-label">Nome:</label>
            <input type="name" class="form-control" name="name" id="name"></input>
        </div>

        <div class="form-group">
            <label for="email"class="form-label">E-mail:</label>
            <input type="email" class="form-control" name="email" id="email"></input>
        </div>

        <div class="form-group">
            <label for="password"class="form-label">Senha:</label>
            <input type="password" class="form-control" name="password" id="password"></input>
        </div>

        <button class="btn btn-dark btn-sm mt-3">Criar Login</button>

    </form>
</x-Layout>