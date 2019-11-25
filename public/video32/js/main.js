// Esperar que el DOM esté listo
$(document).ready(function () {
    // // Petición esencial com ajax

    // $.ajax('http://pacticajquery.test/social', {
    //     success: function (respuesta, status, request) {
    //         console.log(arguments);
    //         $('.lateral').append($(respuesta));
    //     },
    //     beforeSend: function () {
    //         // Mostrar Loading spinner

    //     },
    //     error: function (request, tipoError, mensaje) {

    //         console.error(arguments);

    //     },

    //     complete: function (request, status) {

    //         console.info(arguments);

    //     },
    //     timeout: 1,

    // });

    // jQuery 3.0> = Promise API
    $.ajax('http://pacticajquery.test/social')
        // success()
        .done(function (respuesta) {
            $('.lateral').append($(respuesta));
        })
        // error()
        .fail(function (request, tipoError, mensaje) {
            console.error(arguments);
        })
        // complete()
        .always(function (request, status) {
            console.log(arguments)
        });
});
