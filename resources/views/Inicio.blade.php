<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Carteros</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

       {{-- estilos --}}
       <link rel="stylesheet" href="{{ asset('css/estilosLogin.css') }}" />
    </head>
    <body>

        <div class="wrapper">
            <div class="container">
              <h1>Bienvenido</h1>
              
              <form class="form">
                <input type="email" placeholder="Correo electronico">
                <input type="password" placeholder="Contraseña">
                <button type="submit" id="login-button">Iniciar Sesión</button>
              </form>
            </div>
            {{-- se usan estos li para las animaciones  --}}
            <ul class="bg-bubbles">
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
          </div>
          <script src="{{ asset('js/login.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>

</html>
