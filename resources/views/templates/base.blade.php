<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="/css/monStyle.css" rel="stylesheet">
    <title>@yield('title')</title>
  </head>
  <body>
    <header>
        <h2>Application</h2>
        @if(Auth::check())
          <span>{{ Auth::user()->name}}</span>
        @else
          <span>Anonyme</span>
        @endif
        <ul class="maList">
          <li><a href="/">Accueil</a></li>
          <li><a href="/contact">Contact</a></li>
          <li><a href="/magasin">Magasin</a></li>
          @if (Auth::check())
            <li><a href="/logout">Logout</a></li>
          @else
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
          @endif
        </ul>
    </header>
    <div class="container">
      <div>@yield('content')</div>
    </div>
    <footer>
      <p class="monP">Copyright : ITAkademy 2017</p>
      <a class="monLien" href="/contact">Nous contacter</a>
    </footer>
  </body>
</html>
