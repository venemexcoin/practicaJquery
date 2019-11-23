// Esperar que el DOM esté listo
$(document).ready(function () {

    // Event Listener directo

    // $('a').on('click', function (evt) {
    //     evt.preventDefault();
    //     console.log('A click!');
    // });

    //Even Listener delegado

    $('main').on('click', 'a', function (evt) {
        evt.preventDefault();
        console.log('A click!');
    });

    var $enlace = $('<a href="http://www.venemexcoin.com" target="_blank">Venemexcoin</a>');
    $('p').last().css('color', 'goldenrod').data('color', 'amarillo').append($enlace);
});
