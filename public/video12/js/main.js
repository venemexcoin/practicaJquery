// Esperar que el DOM esté listo
$(document).ready(function () {

    $('.lateral').find('a').last().on('click', function () {
        console.log('Hola si soy yo');

        //Escucha un anchor
        $('.contenido').children('p').css('color', 'red');

        $('.contenido').children('h1').css('color', 'green');

        // Escuchar los <p>


    });

    $('.contenido').children('p').on('click', function (evento) {
        //console.log(evento);
        evento.prevenDefault();
        console.log(this);
    });

});
