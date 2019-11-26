// Esperar que el DOM esté listo
$(document).ready(function () {

    $.fn.cambiarColor = function (opciones) {
        //console.log(this);
        const configuracion = $.extend({
            // tener un color de remplazo(fallback)
            color: 'red',

        }, opciones);

        // Recorremos cada elemento sobre el que se llama el pluguin
        this.each((indice, elemento) => {
            //console.log(elemento);
            let color = configuracion.color;
            $(elemento).css('color', color);
        });
    };

    $('.contenido').find('p').cambiarColor({
        color: 'goldenrod'
    }); // si no pasas color retorna al de configuracion

});
