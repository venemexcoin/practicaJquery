// Esperar que el DOM esté listo
$(document).ready(function () {
    // $('.contenido').find('p').first().css('background-color', 'red');

    // $('.contenido').find('p').last().prev().css('background-color', 'red');
    $('.contenido').find('p').last().prev().next().fadeOut(5000);

});
