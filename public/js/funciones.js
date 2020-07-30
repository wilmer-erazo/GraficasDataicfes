var newOptions = {
    'Ingles': 'ingles',
    'matematicas': 'matematicas',
    'estadistica': 'estadistica',
    'otra': 'otra'
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
