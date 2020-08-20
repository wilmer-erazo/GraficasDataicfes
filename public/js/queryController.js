function consultaGenericasPosicion(data) {

    return $.ajax({
        url: "consultaPosicionGenericas",
        method: "post",
        dataType: "json",
        data: data,
        success: function(response) {
            data = response
        },
        error: function(error) {
            console.log(error);
        }
    });
}

function obtenerInstituciones() {
    return $.ajax({
        url: "obtenerInstituciones",
        method: "post",
        dataType: "json",
        success: function(response) {
            data = response
        },
        error: function(error) {
            console.log(error);
        }
    });
}