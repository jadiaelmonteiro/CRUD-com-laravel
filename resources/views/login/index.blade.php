<x-Layout title="Login">
    <form method="POST">
        @csrf
        <div class="form-group">
            <label for="email"class="form-label">E-mail</label>
            <input type="email" class="form-control" name="email" id="email"></input>
        </div>

        <div class="form-group">
            <label for="password"class="form-label">Senha</label>
            <input type="password" class="form-control" name="password" id="password"></input>
        </div>

        <button class="btn btn-dark btn-sm mt-3">Entrar</button>

    </form>
</x-Layout>