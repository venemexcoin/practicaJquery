// Esperar que el DOM esté listo
$(document).ready(() => {
    // Cargamos el snippet de navegación lateral
    $.get('social.html')
        .done((respuesta) => {
            $('.lateral').append($(respuesta));
        });

    // Adoptar
    $('.adoptar').children('input').on('click.candidatos', function (evt) {
            evt.preventDefault();

            // Obteniendo los datos de los candidatos a adopción
            $.getJSON('http://pacticajquery.test/gatos')
                .then(mostrarCandidatos)
                .fail(error => console.error(Error(error)))
                .always(() => console.info('Request finalizado'));

            // Componer las fichas de los candidatos
            // e insertarlas en DOM
            function mostrarCandidatos(canditatos) {
                // Eliminamos el event listener para ecitar 'click'
                $('.adoptar').children('input').off('click');
                $.each(canditatos, function (indice, candidato) {
                    $(`<div>
                    <h4>${candidato.nombre} <i>(${candidato.edad})</i></h4>
                    <h5>${candidato.info}</h5>
                </div>`)
                        .css('background-image', `url(${candidato.imagen})`)
                        .appendTo($('.candidatos'));
                });
            }
        })
        .on('click.mensaje', function (evt) {
            alert('Muchas gracias por ser tan pendejo');
        });
});
