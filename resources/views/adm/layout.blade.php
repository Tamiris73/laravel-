<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Planning</title>
  <link rel="stylesheet" href="{{ asset('css/adm/adm.css') }}">
</head>

<body>
  <header>
    <section>
      <picture>
        <img src="{{asset('img/logo/logo_login.png')}}" alt="Logo" />
      </picture>
    </section>
  </header>
  <nav>
    <ul>
      <li>
        <a href="{{url('/tarefa')}}">Tarefas</a>
      </li>
      <li>
        <a href="">Avisos</a>
      </li>
    </ul>
  </nav>
  <main>
    @yield('content')
  </main>
</body>

</html>