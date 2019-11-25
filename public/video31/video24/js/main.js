// Esperar que el DOM esté listo
$(document).ready(function () {

    var $enlaces = $('a');
    $('.lateral').children('img').hover(
        function () {

            //console.log('click');

            // if ($enlaces.hasClass('dopodcast')) {
            //si la clase esta aplicada eliminar
            //     $enlaces.removeClass('dopodcast');
            // } else {
            // si no esta apicada aplicarla
            //     $enlaces.addClass('dopodcast')
            // }

            // metodo corto
            $enlaces.toggleClass('dopodcast');
        });

    // $enlaces.addClass('dopodcast');
});
