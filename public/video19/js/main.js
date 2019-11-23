// Esperar que el DOM esté listo
$(document).ready(function () {

    var $parrafos = $('.contenido').children('p');

    // $parrafos.slideToggle(5000, function () {
    //     console.log('Finalizado!');
    // });
    //ejemplo 1 con el boton derecho
    // $('.lateral').children('img').on('contextmenu', function () {

    //     mostrarEnSecuencia($parrafos, 500);
    // });

    //Ejemplo 2 de doble click
    // $('.lateral').children('img').on('dblclick', function () {

    //     mostrarEnSecuencia($parrafos, 500);
    // });

    // Evento de raton cuando enetra y cuando sale el cursor
    // $('.lateral').children('img').hover(function () {
    //     console.log('entro');
    // }, function () {
    //     console.log('Salgo');
    // });


    //Ejemplo 2 dispara el evento cuando entra en la imagen
    // $('.lateral').children('img').on('mouseenter', function () {

    //     mostrarEnSecuencia($parrafos, 500);
    // });

    //Ejemplo 2 dispara el evento cuando entra en la imagen
    // $('.lateral').children('img').on('mouseenter', function () {

    //     mostrarEnSecuencia($parrafos, 500);
    // });

    //Ejemplo 2 dispara el evento cuando entra en la imagen
    $('.lateral').children('img').on('mouseleave', function () {

        mostrarEnSecuencia($parrafos, 500);
    });


    function mostrarEnSecuencia($coleccion, tiempo) {
        tiempo = tiempo || 1000;
        $coleccion.each(function (indice, elemento) {
            $(elemento).slideToggle(tiempo * (indice + 1));
        });
    }

});
