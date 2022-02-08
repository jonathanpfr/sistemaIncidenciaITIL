$(document).ready(function () {
    

    //al empezar...
    $('#botones_lazar_fecha').click(function (table) {
        $("#tipo_busqueda option[value='1']").attr('selected', 'selected');//selecciona el combo...
        $('#ocultar').hide();
    });
    //al pulsar el select
    $('#tipo_busqueda').change(function () {
        var tipo_busqueda = $("#tipo_busqueda").val();
        if (tipo_busqueda == 1) {
            $('#ocultar').hide();
        }
        if (tipo_busqueda == 2) {
            $('#ocultar').show();
        }
    });

    $('#id_botn_consultar').click(function (table) {

        var tipo_busqueda = $("#tipo_busqueda").val();
        if (tipo_busqueda == 1) {//dia
            var fecha_inicio = $('#fecha_inicio').val();

            window.location.href = "area_mas_incidencia.php?fec_ini=" + fecha_inicio + "&fec_fin=" + fecha_inicio + "";
        }
        if (tipo_busqueda == 2) {//mes
            var fecha_inicio = $('#fecha_inicio').val();
            var fecha_fin = $('#fecha_fin').val();

            window.location.href = "area_mas_incidencia.php?fec_ini=" + fecha_inicio + "&fec_fin=" + fecha_fin + "";
        }

    });
     });