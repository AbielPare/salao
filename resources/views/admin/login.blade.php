<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body style="display:flex;flex-direction:column;align-items:center;justify-content:center;height:100vh;font-family:Arial;">

    <h1>Login</h1>

    <<form method="GET" action="{{ route('painel') }}">
    <input type="email" name="email" placeholder="Email" required style="margin:10px;padding:8px;">
    <br>

    <input type="password" name="password" placeholder="Senha" required style="margin:10px;padding:8px;">
    <br>

    <button type="submit" style="padding:10px 20px;">
        Entrar
    </button>
</form>


</body>
</html>
