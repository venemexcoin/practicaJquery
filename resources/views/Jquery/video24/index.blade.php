<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Black Cats Rules</title>
<link rel="stylesheet" href="{{ asset("video24/css/main.css")}}">
</head>

<body>
    <!-- Contenedor principal -->
    <main>

        <!-- Sidebar -->
        <aside class="lateral">
        <img src="{{ asset("video24/img/black-cat.jpg")}}" alt="Black Cats Rules!">

            <form action="#" method="GET">
                @csrf
            <input type="text" id="claim" maxlength="40" placeholder="Introduce tu titulo">
            <input type="submit" class="btn btn-primary" value="Enviar">
            </form>
            <!-- Social -->
            <a href="http://google.es" target="_blank" data-rrss="correoe">
                <img src="{{ asset("video24/img/mail.png")}}" alt="Correo-e">
                <span>Correo-e</span>
            </a>
            <a href="http://google.es" target="_blank" data-rrss="snapchat">
                <img src="{{ asset("video24/img/snapchat.png")}}" alt="Snapchat">
                <span>Snapchat</span>
            </a>
            <a href="http://google.es" target="_blank" data-rrss="twitter">
                <img src="{{ asset("video24/img/twitter.png")}}" alt="Twitter">
                <span>Twitter</span>
            </a>

        </aside>

        <!-- Contenido -->
        <section class="contenido">
            <h1>Los gatos negros te dan la bienvenida</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem ex aliquid pariatur ad alias necessitatibus, hic corrupti delectus. Excepturi quis incidunt ratione officia hic amet, natus tempora nesciunt ipsum, atque.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem ex aliquid pariatur ad alias necessitatibus, hic corrupti delectus. Excepturi quis incidunt ratione officia hic amet, natus tempora nesciunt ipsum, atque.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem ex aliquid pariatur ad alias necessitatibus, hic corrupti delectus. Excepturi quis incidunt ratione officia hic amet, natus tempora nesciunt ipsum, atque.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem ex aliquid pariatur ad alias necessitatibus, hic corrupti delectus. Excepturi quis incidunt ratione officia hic amet, natus tempora nesciunt ipsum, atque.</p>


            <!-- Thumbnails -->
            <ul>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </section>
    </main>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('js/app.js')}}"></script>
    <script src="{{ asset("video24/js/main.js")}}"></script>
</body>

</html>
