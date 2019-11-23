// Esperar que el DOM esté listo
$(document).ready(function () {

    // var $parrafo = $('p').last();
    // //CSS
    // $parrafo.css('color', 'goldenrod');

    // //Atributo Data

    // $parrafo.data('color', 'amarillo');

    // // Append

    // var $enlace = $('<a href="http://www.venemexcoin.com" target="_blank">Venemexcoin</a>');

    // $parrafo.append($enlace);

    //Method chaining

    var $enlace = $('<a href="http://www.venemexcoin.com" target="_blank">Venemexcoin</a>');
    $('p').last().css('color', 'goldenrod').data('color', 'amarillo').append($enlace);
});
