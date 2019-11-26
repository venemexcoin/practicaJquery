// Esperar que el DOM esté listo
$(document).ready(function () {

    function consultarAPI() {
        const deferred = $.Deferred();

        setTimeout(function () {
            var urlUsers = 'https://min-api.cryptocompare.com/data/price?fsym=USD&tsyms=ETH,EUR,USD,BTC';



            // Promesa éxtosa

            // var respuesta = [{
            //         titulo: 'Aprender jQuery'
            //     },
            //     {
            //         titulo: 'Aprender JavaScript'
            //     },
            //     {
            //         titulo: 'Hecer las compras '
            //     },
            // ]
            //deferred.resolve(respuesta);

            // Promesa rechasada
            //deferred.reject(Error('No puedo conectar'));

        }, 2000);

        return deferred.promise();
    }

    consultarAPI()
        .then((respuesta) => console.log(respuesta))
        .fail((error) => console.error(error))
        .always(() => console.info('Request finalizado'));
});
