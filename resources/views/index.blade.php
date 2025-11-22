<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/StylePrincipal.css')}}" rel="stylesheet"/>
</head>
<body>
    <div class="container">
        <div class="formulario">
            <h1>Fichar</h1>
            <form action="{{ route('login.submit') }}" method="POST" class="form">
                @csrf
                <div class="campos">
                    <label>E-mail:</label>
                    <input type="email" id="email" placeholder="digite seu E-mail"  name="email" required>
                </div>
                <div class="campos">
                    <label>Senha:</label>
                    <input type="password" id="password" placeholder="digite sua senha" name="password" required>
                </div>
                @if(session('error'))
                    <div style="color:red; margin-bottom:10px;">
                    {{ session('error') }}
                </div>
                @endif
                <div class="extra">
                    <label class="cadastrar">
                        <a href="{{ route('cadastrar') }}">cadastrar</a>
                    </label>
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>