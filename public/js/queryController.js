$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});



$('.prueba').click(function() {
    consultaGenericasPosicion();
});



function consultaGenericasPosicion() {
    var e = document.getElementById("moduloGenerico");
    var competencia = e.options[e.selectedIndex].value;
    var data
    var data = {
        modulo: competencia,
        tiempo: "genericas2016"
    }

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





function consultaPorSemestre() {

}