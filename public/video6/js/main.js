// Esperar que el DOM esté listo
$(document).ready(function () {
    jQuery('aside > img').fadeOut(5000);

    // Búsqueda de elementos
    $('a span').css('color', 'red');

    //Selectores múltiples

    // $('a, span, p').slideToggle();

    //Pseudo clases

    $('p:odd').css({
        'font-waight': 'bold',
        'color': 'goldenrod'
    });
    $('p:even').fadeOut(5000);


});
