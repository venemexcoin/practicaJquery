<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
.rojo {
    color: indianred;
}
.azul {
    color: dodgerblue;
}

</style>
<body>
    <h1>Hola desde DO Podcast:)</h1>

    <button>Cambiar Clase</button>
<script>
(function(){
console.log('Conectado');
var h1 = document.querySelector('h1'),
    // console.log(h1.classList);
    boton = document.querySelector('button');

boton.addEventListener('click', function(){
    if(!h1.classList.contains('rojo')){
        h1.classList.add('rojo');
        h1.classList.remove('azul');
    }else{
        h1.classList.add('azul');
        h1.classList.remove('rojo');
    }
});

function toggleClass(elemento, clase){

    if(elemento.classList.contains(clase)){
        elemento.classList.remove(clase);
    }else {
        elemento.classList.add(clase);
    }
}
h1.addEventListener('click', function(){
    toggleClass(this, 'rojo');
});


})();

</script>
</body>
</html>
