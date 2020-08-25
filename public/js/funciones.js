var universidades = [];
var year = [];
var period = [];
var departamento = "null";
var municipio = "null";

const MODULOS = [
    { value: 'MOD_COMPETEN_CIUDADA_PUNT', label: 'Competencia Ciudadana' },
    { value: 'MOD_INGLES_PUNT', label: 'Inglés' },
    { value: 'MOD_LECTURA_CRITICA_PUNT', label: 'Lectura Critica' },
    { value: 'MOD_RAZONA_CUANTITAT_PUNT', label: 'Razonamiento Cuantitativo' }
];

$(document).ready(function() {
    CargarDatosSelect(MODULOS, 'moduloGenerico');
    inicializarSelects(1);
});

function inicializarSelects() {
    obtenerinfoSelects().then((result) => {
        var universidades = [];
        var deptos = [];
        var dataUniversidades = result.instituciones;
        var datadepartamentos = result.departamentos;
        var nulo = { value: "null", label: "Seleccionar" }
        universidades[0] = nulo;
        deptos[0] = nulo;
        for (let i = 0; i < dataUniversidades.length; i++) {
            universidades[i + 1] = { value: dataUniversidades[i].INST_COD_INSTITUCION, label: dataUniversidades[i].INST_NOMBRE_INSTITUCION }
        }
        for (let i = 0; i < datadepartamentos.length; i++) {
            deptos[i + 1] = { value: datadepartamentos[i].ESTU_COD_RESIDE_DEPTO, label: datadepartamentos[i].ESTU_DEPTO_RESIDE }
        }
        CargarDatosSelect(universidades, 'universidades');
        CargarDatosSelect(deptos, 'deptos');

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
    var datosLabel = []
    var e = document.getElementById("moduloGenerico");
    var competencia = e.options[e.selectedIndex].value;
    var request = {
        modulo: competencia,
        year: year,
        periodo: period,
        universidades: universidades,
        departamento: departamento,
        municipio: municipio
    }
    consultaGenericasPosicion(request).then(function(data) {

        for (let i = 0; i < data.response.length; i++) {
            datosConsulta[i] = { meta: data.response[i].INSTITUCION, value: parseInt(data.response[i].PROMEDIO) }
            datosLabel[i] = data.response[i].INSTITUCION;
        }
        if (data.response.length > 20) {
            datosLabel = []
        }

        data = {
            labels: datosLabel,
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

function modifyDepto() {
    var e = document.getElementById("deptos");
    departamento = e.options[e.selectedIndex].value;
    obtenerMunicipio();
    cargarDatos();
}

function modifyMunicipio() {
    var e = document.getElementById("deptos");
    departamento = e.options[e.selectedIndex].value;
    obtenerMunicipio();
    cargarDatos();
}

function modifyMunicipio() {
    var e = document.getElementById("municipios");
    municipio = e.options[e.selectedIndex].value;
    cargarDatos();
}

function obtenerMunicipio() {
    obtenerMunicipiosSelect(departamento).then((result) => {
        console.log(result);
        var municipios = [];
        var dataMunicipios = result.municipios;
        var nulo = { value: "null", label: "Seleccionar" }
        municipios[0] = nulo;
        for (let i = 0; i < dataMunicipios.length; i++) {
            municipios[i + 1] = { value: dataMunicipios[i].ESTU_COD_RESIDE_MCPIO, label: dataMunicipios[i].ESTU_MCPIO_RESIDE }
        }
        CargarDatosSelect(municipios, 'municipios');
    });
}