$(document).ready(function () {
    setInterval(function () {
        $("#actualizar").load('actualizar.php');
    }, 5000);

    setInterval(function () {
        $("#actualizar").load('actualizar_a_observado.php');
    }, 5000);

//    var table = $('#example').DataTable({
//
//        "order": [[2, 'desc']]
//    });



    $('#example').DataTable({
        "language": {
            "processing": "Procesando...",
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "emptyTable": "Ningún dato disponible en esta tabla",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "infoPostFix": "",
            "search": "Buscar:",
            "url": "",
            "infoThousands": ",",
            "loadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "fnInfoCallback": null,
        },
        "order": [[2, 'desc']]
    });











//    $('#example').DataTable({
//        "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
////"bJQueryUI": true,
////"sPaginationType": "full_numbers",
//        "sPaginationType": "bootstrap",
//        "oLanguage": {
//            "sProcessing": "Procesando...",
//            "sLengthMenu": "Mostrar _MENU_ registros",
//            "sZeroRecords": "No se encontraron resultados",
//            "sEmptyTable": "Ningún dato disponible en esta tabla",
//            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
//            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
//            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
//            "sInfoPostFix": "",
//            "sSearch": "Buscar:",
//            "sUrl": "",
//            "sInfoThousands": ",",
//            "sLoadingRecords": "Cargando...",
//            "oPaginate": {
//                "sFirst": "Primero",
//                "sLast": "Último",
//                "sNext": "Siguiente",
//                "sPrevious": "Anterior"
//            },
//            "fnInfoCallback": null,
//        }
//
//    });







//    $('#example').dataTable({
//            //"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
//            //"bJQueryUI": true,
//            //"sPaginationType": "full_numbers",
//            "sPaginationType": "bootstrap",
//            "oLanguage": {
//            "sProcessing":     "Procesando...",
//            "sLengthMenu":     "Mostrar _MENU_ registros",
//            "sZeroRecords":    "No se encontraron resultados",
//            "sEmptyTable":     "Ningún dato disponible en esta tabla",
//            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
//            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
//            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
//            "sInfoPostFix":    "",
//            "sSearch":         "Buscar:",
//            "sUrl":            "",
//            "sInfoThousands":  ",",
//            "sLoadingRecords": "Cargando...",
//            "oPaginate": {
//            "sFirst":    "Primero",
//            "sLast":     "Último",
//            "sNext":     "Siguiente",
//            "sPrevious": "Anterior"
//            },
//    "fnInfoCallback": null
//            }
//        } );

});

