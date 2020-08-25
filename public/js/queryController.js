function consultaGenericasPosicion(data) {
    return $.ajax({
        url: "consultaPosicionGenericas",
        method: "post",
        dataType: "json",
        data: data,
        success: function(response) {
            data = response;
            console.log(response)
        },
        error: function(error) {
            console.log(error);
        }

    });
}

function obtenerinfoSelects(data) {
    return $.ajax({
        url: "obtenerInstituciones",
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

function obtenerMunicipiosSelect(data) {
    return $.ajax({
        url: "obtenerMunicipio",
        method: "post",
        data: {
            deptartamento: data
        },
        dataType: "json",
        success: function(response) {
            data = response
        },
        error: function(error) {
            console.log(error);
        }
    });
}