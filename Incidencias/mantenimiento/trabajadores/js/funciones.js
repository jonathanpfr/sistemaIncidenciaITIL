
//
//function buscar_proveedor_edit(id_dato)
//{
//    $.post("modelo/modificar/json_modificar_proveedor.php", {id_proveedor: id_dato}, function (data) {
//        var dato = $.trim(data);
//        $.each(JSON.parse(dato), function (idx, obj) { //********************************************* el  obj[0].variable
//            $("#id_prov_p").val(obj.id_prov_p);//id_proveedor
//            $("#r_social_p").val(obj.rsocial_p);
//            $("#m_doc_p").val(obj.ndoc_p);
//            $("#direccion_p").val(obj.direccion_p);
//            $("#correo_p").val(obj.correo);
//            $("#telef_p").val(obj.telf_p);
//            $("#nom_contac").val(obj.nomb_contac_p);
//            $("#telf_contac").val(obj.telf_contac_p);
//            var dato = (obj.p_estado);
//            $("#nom_est_p option[value='" + dato + "']").attr('selected', 'selected');//selecciona el combo...
//            $('#myModalEditar').modal('show');//modal.............
//        });
//    });
//}
//
//$(document).ready(function () {
//    $('#modificar').click(function (table) {
////        alert("ass");
//       var id_tra= $('#id_trabajador').val();
//        alert(id_tra);
//        location.reload();
//    });
//
//});
//
//$(document).ready(function () {
//    $('#btn_insertar').click(function (table) {
//        $('#myModal').modal('show');
//        $('#n_rsocial_p').val("");
//        $('#n_doc_p').val("");
//        $('#n_direccion_p').val("");
//        $('#ncorreo_p').val("");
//        $('#n_telf_pro').val("");
//        $('#n_nom_contac_p').val("");
//        $('#n_telf_contac_p').val("");
//    });
//});
//
//$(document).ready(function () {
//    $('#registro_p').click(function (table) {
//        var usu_reg_p = $('#n_usu_reg_p').val();
//        var n_rsocial_p = $('#n_rsocial_p').val();
//        var n_doc_p = $('#n_doc_p').val();
//        var n_direccion_p = $('#n_direccion_p').val();
//        var ncorreo_p = $('#ncorreo_p').val();
//        var n_telf_pro = $('#n_telf_pro').val();
//        var n_nom_contac_p = $('#n_nom_contac_p').val();
//        var n_telf_contac_p = $('#n_telf_contac_p').val();
//
//        $.post("modelo/insertar/insertar_proveedor.php", {
//            n_rsocial_p: n_rsocial_p,
//            n_doc_p: n_doc_p,
//            n_direccion_p: n_direccion_p,
//            ncorreo_p: ncorreo_p,
//            n_telf_pro: n_telf_pro,
//            n_nom_contac_p: n_nom_contac_p,
//            n_telf_contac_p: n_telf_contac_p,
//            usu_reg_p: usu_reg_p
//        });
//        var table = $('#example').dataTable();
//        table.fnClearTable();
//        table.fnDestroy();
//        var tables = $('#example').DataTable({
//            "ajax": "json_vista_proveedor.php",
//            "processing": true,
//            "serverSide": true,
//            "columns": [
//                {
//                    "name": 'tipo_doc_c',
//                    "className": 'details-control',
//                    "orderable": false,
//                    "data": null,
//                    "defaultContent": ''
//                },
//                {"data": "rsocial_p"},
//                {"data": "ndoc_p"},
//                {"data": "direccion_p"},
//                {"data": "correo"},
//                {"data": "telf_p"},
//                {"data": "nomb_contac_p"},
//                {"data": "telf_contac_p"},
//                {"data": "nom_est_p"},
//                {"name": 'tipo_doc_c',
//                    "className": 'details-delete',
//                    "orderable": false,
//                    "data": null,
//                    "defaultContent": ''}
//            ],
//            "order": [[3, 'desc']]
//        });
//        var qqq = $(this).closest('.modal');
//        $(qqq).modal('hide');
//        $('#myModalEditar').modal('hide');
//        location.reload();
//    });
//});
//
//
//function eliminar_proveedor_edit(id_dato) {
//
//    var id_user = $('#id_user').val();
//    $.post("modelo/eliminar/eliminar_proveedor.php", {id_user: id_user, id_prov_p: id_dato}, function (data) {
//    });
//    var table = $('#example').dataTable();
//    table.fnClearTable();
//    table.fnDestroy();
//
//    var tables = $('#example').DataTable({
//        "ajax": "json_vista_proveedor.php",
//        "processing": true,
//        "serverSide": true,
//        "columns": [
//            {
//                "name": 'tipo_doc_c',
//                "className": 'details-control',
//                "orderable": false,
//                "data": null,
//                "defaultContent": ''
//            },
//            {"data": "rsocial_p"},
//            {"data": "ndoc_p"},
//            {"data": "direccion_p"},
//            {"data": "correo"},
//            {"data": "telf_p"},
//            {"data": "nomb_contac_p"},
//            {"data": "telf_contac_p"},
//            {"data": "nom_est_p"},
//            {"name": 'tipo_doc_c',
//                "className": 'details-delete',
//                "orderable": false,
//                "data": null,
//                "defaultContent": ''}
//        ],
//        "order": [[3, 'desc']]
//    });
//    var qqq = $(this).closest('.modal');
//    $(qqq).modal('hide');
//    $('#myModalEliminar').modal('hide');
//    
//    location.reload();
//}
//
////******************* insertar *************************************************************
//$(document).ready(function () {
//    $('#btn_insertar').click(function (table) {
//
//        var tipo_per = $("#tip_per_cli option:selected").val(); /*  */
//        var rsoc_i = $('#r_soc_i').val();
//        var ndoc_i = $('#nro_doc_i').val();
//        var nom_cliente_i = $('#nom_cliente_i').val();
//        var ape_pat_i = $('#ap_pat_i').val();
//        var ape_mat_i = $('#ap_mat_i').val();
//        var correo_i = $('#correo_i').val();
//        var telf_i = $('#telef_i').val();
//        $.post("modelo/insertar/insertar_proveedor.php", {
//            tipo_per: tipo_per,
//            rsoc_i: rsoc_i,
//            ndoc_i: ndoc_i,
//            nom_cliente_i: nom_cliente_i,
//            ape_pat_i: ape_pat_i,
//            ape_mat_i: ape_mat_i,
//            correo_i: correo_i,
//            telf_i: telf_i
//        }, function (data) {
//        });
//    });
//});
//   