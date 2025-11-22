<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="{{ asset('css/StylePrincipal.css')}}" rel="stylesheet"/>
</head>
<body>
    <div class="container">
        <div class="formulario">
            <h1>Fichar</h1>
            <form action="{{ route('cadastro.submit') }}" method="POST" class="form">
                @csrf
                <div class="campos">
                    <label>Nome:</label>
                    <input type="text" id="name" placeholder="digite seu nome"  name="name" required>
                </div>
                <div class="campos">
                    <label >Data de Nascimento:</label>
                    <input type="date" id="birthdate" name="birthdate" required>
                    
                </div>
                <div class="campos">
                    <label class="campos">
                        Telefone:
                    </label>
                    <input type="text" id="phone" placeholder="digite seu telefone" name="phone" required>
                </div>
                <div class="campos">
                    <label>E-mail:</label>
                    <input type="email" id="email" placeholder="digite seu E-mail"  name="email" required>
                </div>
                <div class="campos">
                    <label>Senha:</label>
                    <input type="password" id="password" placeholder="digite sua senha" name="password" required>
                </div>
                
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
