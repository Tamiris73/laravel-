<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Planning</title>
  <link rel="stylesheet" href="{{asset('css/initial/initial.css')}}" />
  <link rel="stylesheet" href="{{asset('css/initial/carousel.css')}}" />
</head>

<body>
  <header>
    <section>
      <picture>
        <img src="{{asset('img/logo/logo_login.png')}}" alt="Logo" />
      </picture>
      <h1>Your Planning</h1>
    </section>
      @if (Route::has('login'))
      <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
        <a href="{{ url('/tarefa') }}" class="text-sm text-gray-700 underline">Tarefas</a>
        @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Registrar</a>
        @endif
        @endauth
      </div>
      @endif
    </header>
    <main>
      <section class="carousel">
        <ol>
          @foreach($imagens as $imagem)
          <li>
            <img src="{{asset($imagem['url'])}}" alt="{{$imagem['nome']}}" />
          </li>
          @endforeach
        </ol>
    </section>
  </main>
</body>

</html>