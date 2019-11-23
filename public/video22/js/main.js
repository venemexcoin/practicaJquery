// Esperar que el DOM esté listo
$(document).ready(function () {

    var $input = $('#claim'),
        $h1 = $('.contenido').children('h1');
    // console.log($input);

    $input.keyup(function (event) {
        // console.log(event.which);
        var codigo = event.which;
        if (codigo === 13) {
            $h1.text($input.val());
        }

    });

});
