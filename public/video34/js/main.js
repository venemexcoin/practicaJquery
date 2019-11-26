// Esperar que el DOM esté listo
$(document).ready(function () {
    $.ajax('http://pacticajquery.test/social')
        // success()
        .done(function (respuesta) {
            $('.lateral').append($(respuesta));
        });
    //  Libro de visitas
    $('form').on('submit', function (evt) {
        evt.preventDefault();

        ///Realizamos la petición
        $.ajax('http://venemexcoin.com/VMX/pruebaAjax/receptor.php', { //ajax-no-key.php es para el uso de apkey (CORS)
            type: 'POST',
            dataType: 'json',
            data: {
                'nombre': $('#nombre').val(),
                'mensaje': $('#mensaje').val(),
            }
        }).then(function (respuesta) {
            console.log(respuesta);
            $('form').children('ol').prepend($(`
                <li>
                    ${respuesta.nombre} - <small>${respuesta.fecha.weekday}</small><br>
                    ${respuesta.mensaje}
                </li>
            `));
        });
    });
});
