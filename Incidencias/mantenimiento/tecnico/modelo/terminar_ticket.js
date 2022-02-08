$(document).ready(function () {
    $('#terminar').click(function (table) {
        
        //actualizar  el tecnico  en espera..
        //actualizar el ticket por atendido
        //hacer una consulta para ver si hay ticket con tecnico=1 que es ninguno ,asignarlo al tecnico actual
        //botar un mensaje...para ver si ay mas ticket asignados a el actual tecnico,sino decir q no ay mas ticket asignados a el
        
        
  //        $('#mensaje_login').addClass('bien').html('Usuario Correcto ......Bienvenido').hide(0);
  //        $('#mensaje_login').addClass('bien').html('Usuario Correcto ......Bienvenido').show(700).delay(2500).hide(200);
        var id_tecnico = $('#id_tecnico').val();
        var id_ticket = $('#id_ticket').val();
//       alert(id_tecnico +"-" +id_ticket);
//        alert(id_tecnico+"prrsieonastes"+id_ticket);
        $.post("terminar/terminar.php", {id_tecnico_t: id_tecnico,
            id_ticket_t: id_ticket}, function (data) {
             var dato = $.trim(data);
            $.each(JSON.parse(dato), function (idx, obj) { 
                alert(obj[0].id_tecnico);
                if(obj[0].id_tecnico==1){
                    alert("Se le ha asignado una nueva incidencia, por favor revise su lista");
                }
          
        });
    });
        
        
//        $.post("modelo/modificar/json_modificar_proveedor.php", {id_proveedor: id_dato}, function (data) {
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
        
        
        $(location).attr('href',"../vista_tecnico_ticket_atendidos.php"); 
    });
});
 