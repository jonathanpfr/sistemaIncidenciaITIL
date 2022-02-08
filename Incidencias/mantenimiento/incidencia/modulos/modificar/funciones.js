/* 
btn_actualizar
 */


//$('#mensaje').addClass('bien').html('Registro completado con exito').show(200).delay(2500).hide(200);
$(document).ready(function () {
    $('#btn_actualizar').click(function (table) {
  
        var id_incidencia = $('#id_incidencia').val();
        var nombre_inidencia = $('#nombre_incidencia').val();

            if(nombre_inidencia==""){
                alert("dato en blanco");
                return false;
            }

        $.post("modificar2.php", {id_incidencia: id_incidencia,
            nombre_inidencia: nombre_inidencia});
        alert("actualizado Correctamente!");
        window.location="../../vista_incidencia.php";
    });
});
 