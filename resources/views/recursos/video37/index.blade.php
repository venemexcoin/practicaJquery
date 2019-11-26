<?php
header('Access-Control-Allow-Origin: *');

$guizmo = Array(
    'nombre' => 'Guizmo',
    'info' => 'Una pequeña pantera negra en tu casa.',
    'edad' => '2',
    'imagen' => 'http://scriboeditorial.com/wp-content/uploads/2015/01/sa_1422650925gatonegro.jpg',
);

$salomon = Array(
    'nombre' => 'Salomón',
    'info' => 'Un gato majestuoso pero cercano.',
    'edad' => '4',
    'imagen' => 'http://vignette3.wikia.nocookie.net/gatopedia/images/0/08/El-gato-negro.jpg/revision/latest?cb=20140209211123&path-prefix=es',
);

$sombra = Array(
    'nombre' => 'Sombra',
    'info' => 'Cercana y elegante.',
    'edad' => '5',
    'imagen' => 'http://www.lavidalucida.com/wp-content/uploads/2015/08/gato-negro.jpg',
);

$morgana = Array(
    'nombre' => 'Morgana',
    'info' => 'Inquieta y muy juguetona.',
    'edad' => '3',
    'imagen' => 'https://steemitimages.com/p/3RTd4iuWD6NV447XiVuNoLZ3Pja62GzP4N1PRsXzg3waYPW5nJfs4XiBdkkYKu2M7UXmRTvyjneiz4Q4iw8jibwq6eVJKpi2mVtYhiipteCWfTokHxcxXeBLJ55gTXZyqBni5qY6L9tfM4GZgi4CJeDUPa4fBaPZmRffTSCrZdmo1G?format=match&mode=fit&width=640',
);

$destinos = Array($guizmo, $salomon, $sombra, $morgana);

echo json_encode($destinos);
