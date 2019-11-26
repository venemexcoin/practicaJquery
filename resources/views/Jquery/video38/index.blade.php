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
<link rel="stylesheet" href="{{ asset("video38/css/main.css")}}">
<link rel="stylesheet" href="{{ asset("video38/css/animate.css")}}">
</head>

<body>
    <!-- Contenedor principal -->
    <main>

        <!-- Sidebar -->
        <aside class="lateral">
        <img src="{{ asset("video38/img/black-cat.jpg")}}" alt="Black Cats Rules!">


    </aside>

    <!-- Contenido -->
    <section class="contenido">
        <h1>Los gatos negros te dan la bienvenida</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem ex aliquid pariatur ad alias
            necessitatibus, hic corrupti delectus. Excepturi quis incidunt ratione officia hic amet, natus tempora
            nesciunt ipsum, atque.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem ex aliquid pariatur ad alias
            necessitatibus, hic corrupti delectus. Excepturi quis incidunt ratione officia hic amet, natus tempora
            nesciunt ipsum, atque.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem ex aliquid pariatur ad alias
            necessitatibus, hic corrupti delectus. Excepturi quis incidunt ratione officia hic amet, natus tempora
            nesciunt ipsum, atque.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem ex aliquid pariatur ad alias
            necessitatibus, hic corrupti delectus. Excepturi quis incidunt ratione officia hic amet, natus tempora
            nesciunt ipsum, atque.</p>

        <!-- Gatos negros para adoptar -->
        <section class="adoptar">
                <input type="button" value="Mostrar gatos negros en adopción">
                <section class="candidatos">

                </section>
            </section>

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
    <script src="{{ asset("video38/js/main.js")}}"></script>
</body>

</html>
