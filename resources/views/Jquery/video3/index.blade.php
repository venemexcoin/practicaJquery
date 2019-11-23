<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <h1 id="principal">Heading 1</h1>

 <h2 id="heading">heading 2</h2>

 <ul>
     <li>Uno</li>
     <li>Dos</li>
     <li>Tres</li>
     <li>Cuatro</li>
     <li>Cinco</li>
 </ul>

<script>
(function(){
console.log('Conectado');

var elementos = document.querySelectorAll('li');
// console.log(elementos);

elementos[0].addEventListener('click', function(){
    // console.log('click');
});

var heading = document.getElementsByClassName('heading');
    // console.log(heading);

var ul = document.getElementsByTagName('ul');
    // console.log(ul);

var principal = document.getElementById('principal');
    console.log(principal);

})();

</script>
</body>
</html>
