$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function() {
        $.notify({
            icon: 'pe-7s-gift',
            message: "Bienvenido a la entrega del Primer avance de Proyecto Integrador"

        }, {
            type: 'info',
            timer: 4000
        });

    });
    initChartist();
});


function cargarDatos() {

    var datosConsulta = []
    var e = document.getElementById("moduloGenerico");
    var competencia = e.options[e.selectedIndex].value;

    var request = {
        modulo: competencia,
        tiempo: "genericas2016"
    }
    consultaGenericasPosicion(request).then(function(data) {
        for (let i = 1; i < data.response.length; i++) {
            datosConsulta[i] = { meta: data.response[i].INSTITUCION, value: parseInt(data.response[i].PROMEDIO) }
        }
        data = {
            series: [
                datosConsulta
            ]
        };

        char.update(data);
    })
}

function actualizarGrafica() {
    cargarDatos()
}

function initChartist() {
    var options = {
        seriesBarDistance: 5,
        axisX: {
            showGrid: false
        },
        height: "245px",
        plugins: [
            Chartist.plugins.tooltip()
        ]
    };

    var responsiveOptions = [
        ['screen and (max-width: 640px)', {
            seriesBarDistance: 5,
            axisX: {
                labelInterpolationFnc: function(value) {
                    return value[0];
                }
            }
        }]
    ];

    char = Chartist.Bar('#PosicionUniversidades', [], options, responsiveOptions);
}