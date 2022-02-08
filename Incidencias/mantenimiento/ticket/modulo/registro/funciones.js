/* cargamos el menu select para el modificar  */
$(document).ready(function () {
//    alert('ddd');
    $.post("../rellenar_combo/prioridad.php", function (data) {
        $("#prioridad").html(data);
    });

    var id_trabajador = $('#id_tra').val();
    $.post("../rellenar_combo/equipo.php", {id_trabajador: id_trabajador}, function (data) {
        $("#equipo").html(data);
    }
    );
//
    $.post("../rellenar_combo/incidencia.php", function (data) {
        $("#incidencia").html(data);
    });

//    $.post("../relleno_combo/tipo_contrato/tipo_contrato.php", function (data) {
//        $("#contrato").html(data);
//    });
});

$(document).ready(function () {
    $('#registro_ti').click(function (table) {
        var prioridad = $('#prioridad').val();
        var equipo = $('#equipo').val();
        var incidencia = $('#incidencia').val();
        var id_tra = $('#id_tra').val();
        var observacion = $('#observacion').val();

        if(observacion==""|prioridad==0|incidencia==0|equipo==0){
            alert("Tiene poner todos los datos");
         return false;
        
        }

        $.post("verificar_espera.php", {id_trabajador: id_tra}, function (data) {
            var dato = $.trim(data);
            var dato_entero = parseInt(dato);
            if (dato_entero == 0) {
                alert("Tiene que esperar que se atienda el ticket anterior para sacar otro");
            }
            else {
                alert("Registrado Correctamente");
            }
        });

    });
});
