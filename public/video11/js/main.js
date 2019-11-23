// Esperar que el DOM esté listo
$(document).ready(function () {

    //colocar enlase u obetos antes de un elemento

    // var $enlace = $('<a href="#">Conocer más de gatos negros !</a>');
    // $('.contenido').find('p').first().before($enlace);

    var $enlace = $('<a href=" http://www.chamocell.com">Conocer más de gatos negros !</a> ');

    //ejemplo inserta el contendo como padre
    // $('.contenido').find('p').prepend($enlace);

    // lo inserta al fina
    // $('.contenido').find('p').append($enlace);

    //Remueve el parrafo
    $('.contenido').find('p').remove();
});
