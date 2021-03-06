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
<link rel="stylesheet" href="{{ asset("video32/css/main.css")}}">
<link rel="stylesheet" href="{{ asset("video32/css/animate.css")}}">
</head>

<body>
    <!-- Contenedor principal -->
    <main>

        <!-- Sidebar -->
        <aside class="lateral">
        <img src="{{ asset("video32/img/black-cat.jpg")}}" alt="Black Cats Rules!">



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

        <!-- Libro de visitas -->
        <form>
            @csrf
            <h3>Deja constancia de tu amor por los gatos negros</h3>
            <input type="text" id="nombre" placeholder="Tu nombre" required>
            <textarea id="mensaje" cols="30" rows="4" placeholder="Tu mensaje" required></textarea>
            <input type="submit" value="Enviar mensaje">
            <ol>

            </ol>
        </form>

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
    <script src="{{ asset("video32/js/main.js")}}"></script>
</body>

</html>
