<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title')</title>


  <!-- Fonte do Google -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">


  <!-- CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <!-- CSS da aplicação -->
  <link rel="stylesheet" href="/css/style.css">
  <script src="/js/scripts.js"></script>

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="navbar-collapse" id="navbar">
        <a href="/" class="navbar-brand">
          <img class="nav-img" src="/img/logo.jpg" alt="logo-livros">
        </a>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="/" class="nav-link">Pagina Inicial</a>
          </li>
          <li class="nav-item">
            <a href="/books/create" class="nav-link">Cadastrar Cliente</a>
          </li>
          @auth

          <li class="nav-item">
            <a href="/dashboard" class="nav-link">Meus Clientes</a>
          </li>

          <li class="nav-item">
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
              @csrf 
                 <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
            </form>
          </li>
          @endauth
          @guest
          <li class="nav-item">
            <a href="/login" class="nav-link">Entrar</a>
          </li>
          <li class="nav-item">
            <a href="/register" class="nav-link">Cadastrar</a>
          </li>
          @endguest
        </ul>
      </div>
    </nav>
  </header>
  <main>
    <div class="container-fluid">
      <div class="row">
        @if(session('msg'))
        <p class="msg">{{ session('msg') }}</p>
        @endif
        @yield('content')
      </div>
    </div>
  </main>
  
  <footer>
    <p>Iam Henrique &copy; 2022</p>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>