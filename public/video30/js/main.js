// Esperar que el DOM esté listo
$(document).ready(function () {
    // Petición simple de Ajax

    // $.ajax('http://pacticajquery.test/social', {
    //     success: function (respuesta) {
    //         //console.log(respuesta);
    //         $('.lateral').append($(respuesta));
    //     }
    // });

    //metodo atajo:GET
    $.get('http://pacticajquery.test/social', function (respuesta) {
        $('.lateral').append($(respuesta));
    });

    // Cargar JSON desde el servidor

    $.getJSON('https://randomuser.me/api/?results=500')
        .then(function (respuesta) {
            // console.log(respuesta);
            // Insertar cada avatar del usuario fictício en el DOM

            respuesta.results.forEach(function (persona) {
                console.log(persona.picture.thumbnail);
                $('<img>')
                    .attr('src', persona.picture.thumbnail)
                    .appendTo('.contenido');
            });
        });
});
