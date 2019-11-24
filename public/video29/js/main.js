$(document).ready(function () {

    //capturar hover
    $('a').hover(function () {
        //hover in
        //console.log('IN');
        // Guardar el atributo title
        var titulo = $(this).attr('title');
        fondo = $(this).data('fondo');
        //Guardamos el titulo en un atributo data y eliminamos el anterior
        $(this).data('titulo', titulo).removeAttr('title');

        // Añadir nuestro propio tooltip
        $('<p class="tooltip"></p>')
            .text(titulo)
            .css('background-color', fondo)
            .appendTo('body')
            .fadeIn('slow');

    }, function () {
        //hover out
        //console.log('out');
        //Reponer el titulo nativo
        $(this).attr('title', $(this).data('titulo')),
            fondo = $(this).data('fondo');

        // Eliminamos nuestro tooltip
        $('.tooltip').remove();

    }).mousemove(function (e) {

        // Capturar la posición X e Y del ratón sobre el elemento
        // que lanza nuestro tooltip
        var ratonX = e.pageX + 20,
            ratonY = e.pageY + 10;

        //hacer que el tooltip se mueva junto con el puntero

        $('.tooltip').css({
            top: ratonY,
            left: ratonX
        });
    });

});
