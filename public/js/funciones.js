var universidades = [];
var year = [];
var period = [];

const MODULOS = [
    { value: 'MOD_COMPETEN_CIUDADA_PUNT', label: 'Competencia Ciudadana' },
    { value: 'MOD_INGLES_PUNT', label: 'Inglés' },
    { value: 'MOD_LECTURA_CRITICA_PUNT', label: 'Lectura Critica' },
    { value: 'MOD_RAZONA_CUANTITAT_PUNT', label: 'Razonamiento Cuantitativo' }
];

$(document).ready(function() {
    CargarDatosSelect(MODULOS, 'moduloGenerico');
    obtenerInstituciones().then((result) => {});
    CargarInstitucionesSelect();
});

function CargarInstitucionesSelect() {
    obtenerInstituciones().then((result) => {
        var universidades = [];
        var response = result.response;
        for (let i = 0; i < response.length; i++) {
            universidades[i] = { value: response[i].INST_COD_INSTITUCION, label: response[i].INST_NOMBRE_INSTITUCION }
        }
        CargarDatosSelect(universidades, 'universidades')

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

function cargarDatos() {

    var datosConsulta = []
    var e = document.getElementById("moduloGenerico");
    var competencia = e.options[e.selectedIndex].value;
    var request = {
        modulo: competencia,
        year: year,
        periodo: period,
        universidades: universidades
    }

    consultaGenericasPosicion(request).then(function(data) {
        for (let i = 0; i < data.response.length; i++) {
            datosConsulta[i] = { meta: data.response[i].INSTITUCION, value: parseInt(data.response[i].PROMEDIO) }
        }
        data = {
            series: [
                datosConsulta
            ]
        };
        UpdateChar(data);

    })


}

function SelectUniversidades() {
    var e = document.getElementById("universidades");
    var universidad = e.options[e.selectedIndex].value;
    var index = universidades.indexOf(universidad)
    if (index > -1) {
        universidades.splice(index, 1);
    } else {
        universidades.push(universidad)
    }
    cargarDatos();
}

function modifyDate() {
    var boxDate = $('.date');
    var newYears = [];
    for (let i = 0; i < boxDate.length; i++) {
        if (boxDate[i].checked) {
            var temp = boxDate[i].value
            var index = newYears.indexOf(temp)
            if (index == -1) {
                newYears.push(temp);
            }
        }
    }
    year = newYears;
    cargarDatos();
}