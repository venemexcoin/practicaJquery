// Esperar que el DOM esté listo
$(document).ready(function () {

    var $enlaces = $('a');

    //Getter
    console.log($enlaces.css('font-family'));

    // Geter múltiple

    console.log($('.lateral').css([
        'font-size',
        'color',
        'margin'
    ]));

    //Setter
    $('p').css('color', 'goldenrod');


    //Seter multiple
    $enlaces.css({
        'color': 'pink',
        'font-size': '15px',
        'magin': '10px'
    });
});
