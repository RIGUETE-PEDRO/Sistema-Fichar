<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados-pessoais</title>
    <link rel="stylesheet" href="{{ asset('css/componentePadrao/StyleNavbar.css') }}">
</head>
<body>
        <nav class="navbar">
  <div class="nav-links">
    <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Vagas</a>
    <a class="{{ request()->routeIs('MarcaConsulta') ? 'active' : '' }}" href="{{ route('MarcaConsulta') }}">Marca Consulta</a>
    <a class="{{ request()->routeIs('DadosPessoais') ? 'active' : '' }}" href="{{ route('DadosPessoais') }}">Dados Pessoais</a>
  </div>

  <div class="auth-links">
    @if(session('usuario_id'))
      <span>Olá, {{ session('usuario_nome') }}</span>
      <form action="{{ route('logout') }}" method="POST" style="display:inline;">
        @csrf
        <button type="submit" style="background:none; border:none; color:white; cursor:pointer;">Sair</button>
      </form>
    @else
      <a href="{{ route('login.form') }}">Login</a>
      <a href="{{ route('cadastrar') }}">Cadastrar</a>
    @endif
  </div>
</nav>
</body>
</html>