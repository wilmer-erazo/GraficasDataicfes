const MODULOS = [
    { value: 'MOD_COMPETEN_CIUDADA_PUNT', label: 'Competencia Ciudadana' },
    { value: 'MOD_INGLES_PUNT', label: 'Inglés' },
    { value: 'MOD_LECTURA_CRITICA_PUNT', label: 'Lectura Critica' },
    { value: 'MOD_RAZONA_CUANTITAT_PUNT', label: 'Razonamiento Cuantitativo' }
];

$(document).ready(function() {
    CargarDatosSelect(MODULOS, 'moduloGenerico');
    obtenerInstituciones().then((result) => {
        console.log(result)
    });

    CargarInstitucionesSelect();
});

function CargarInstitucionesSelect() {
    obtenerInstituciones().then((result) => {
        var universidades = [];
        var response = result.response;
        for (let i = 0; i < response.length; i++) {
            universidades[i] = { value: response[i].INST_COD_INSTITUCION, label: response[i].INST_NOMBRE_INSTITUCION }

        }
        console.log(universidades)
        CargarDatosSelect(universidades, 'universidades', "Universidades")

    });

}

function CargarDatosSelect(modulos, id) {
    var select = $('#' + id);
    if (select.prop) {
        var options = select.prop('options');
    } else {
        var options = select.attr('options');
    }
    $('option', select).remove();
    for (let i = 0; i < modulos.length; i++) {
        options[options.length] = new Option(modulos[i].label, modulos[i].value);
    }
}