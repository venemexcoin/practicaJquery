<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
.caja {
    width: 300px;
    height: 300px;
    background-color: aqua;
    margin: 0 auto;
    border: 1px solid red;
    box-shadow: 1px 1px 12px black;
}

.transicion {
    transition: all 1s ease-in-out;
}

body {
    background-color: #131722;
}
.center{
    text-align: center;
    color:white;
}
.caja-p {
    text-justify: auto;
    color: white;
}
.btn {
 background: blanchedalmond;
 padding: 10px;
 margin-left: 100px;
}

.oculto {
    visibility: hidden;
}
</style>
<body>
    <br>
    <div class="caja">
        <h1 class="center"> Caca</h1>
        <p class="caja-p">
            Este contenido es exclucibo
            para miendros activos de la
            casa de cabio chupate esas.
        </p>

        <button class="btn">Acepto</button>
    </div>
<script>
(function(){
// Obtener los estilos de un elemento

var div = document.querySelector('div'),
    estilos = getComputedStyle(div, null);

    console.log(estilos.backgroundColor);

    // Añadir una clase
    div.classList.add('transicion');

    // modificar o añadir estilos
    div.style.backgroundColor = 'goldenrod';
    div.style['border-radius'] = '20px';

    // Varios estilos a la vez

    div.style.cssText +='background-color: green; width: 400px; height: 200px;';

})();

</script>
</body>
</html>
