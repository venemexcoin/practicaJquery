// Esperar que el DOM esté listo
$(document).ready(function () {

    //Parent / Parents

    // var $parent = $('.lateral').find('span').last().parent(); //dicherencia de un elemento a muchos  (s)
    // $parent.css('border', '1px solid red');

    //Cildren / find

    // var $children = $('.contenido').children();
    // $children.css('border', '1px solid red');

    var $children = $('main').find('*');
    $children.css({
        'transition': 'all 2s',
        'transform': 'rotate(180deg)'
    });


});
