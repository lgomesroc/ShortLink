<!-- resources/views/auth/register.blade.php -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>Registro</h1>

    <form action="{{ route('register.submit') }}" method="POST" autocomplete="off">
        @csrf
        <div>
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" required autocomplete="off">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required autocomplete="off">
        </div>
        <div>
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" required autocomplete="off">
        </div>
        <div>
            <label for="password_confirmation">Confirme a Senha:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required autocomplete="off">
        </div>
        <button type="submit">Registrar</button>
    </form>

    <script>
        // Impede a navegação de voltar e avançar
        history.pushState(null, document.title, location.href);
        window.addEventListener('popstate', function(event) {
            history.pushState(null, document.title, location.href);
        });
    </script>
</body>
</html>
