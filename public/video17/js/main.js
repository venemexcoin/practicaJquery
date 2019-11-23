// Esperar que el DOM esté listo
$(document).ready(function () {

    // Selector

    // var $enlace = $('.lateral').find('a').filter(':even');
    // $enlace.css('transform', 'scale(2)');
    // console.log($enlace);

    //Función - test
    var $enlaceSnapchat = $('.lateral').find('a').filter(function (indice, elemento) {
        //console.log(elemento === this);  //es this
        return $(elemento).find('span').text() == 'Snapchat';


    });

    console.log($enlaceSnapchat.css('transform', 'rotate(45deg)'));
});
