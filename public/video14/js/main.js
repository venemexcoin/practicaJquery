// Esperar que el DOM esté listo
$(document).ready(function () {

    // var $enlace = $('.lateral').find('a').last();
    // //console.log($enlace);
    // $enlace.data('rrss', 'Nuevo valor') // Setter
    // var valorData = $enlace.data('rrss'); //Getter
    // console.log(valorData);

    //Filtrar selecciones

    var $datos = $('*').filter(function () {
        var datos = $(this).data('rrss');

        return datos == 'snapchat';
    });
    console.log($datos);
});
