var newOptions = {
    'MOD_COMPETEN_CIUDADA_PUNT': 'Competencia Ciudadana',
    'MOD_INGLES_PUNT': 'Inglés',
    'MOD_LECTURA_CRITICA_PUNT': 'Lectura Critica',
    'MOD_RAZONA_CUANTITAT_PUNT': 'Razonamiento Cuantitativo'
};

$(document).ready(function() {
    console.log("ready!");
    CargarSelectModuloGenerico(newOptions)
});

function CargarSelectModuloGenerico(newOptions) {
    var select = $('#moduloGenerico');
    if (select.prop) {
        var options = select.prop('options');
    } else {
        var options = select.attr('options');
    }
    $('option', select).remove();
    $.each(newOptions, function(val, text) {
        options[options.length] = new Option(text, val);
    });
}