<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link" href="{{route('index')}}">Главная</a>
        </li>
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('show_signin')}}">Вход</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('show_signup')}}">Регистрация</a>
        </li>
        @endguest
        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{route('application')}}">Заявки</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('personal_account')}}">Личный кабинет</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('logout')}}">Выход</a>
        </li>
        @endauth
    </div>
  </div>
</nav>

@yield('content')

</body>
</html>