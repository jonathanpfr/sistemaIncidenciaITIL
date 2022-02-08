/* 
btn_actualizar
 */


//$('#mensaje').addClass('bien').html('Registro completado con exito').show(200).delay(2500).hide(200);
$(document).ready(function () {
    $('#btn_actualizar').click(function (table) {
  
        var sucursal = $('#sucursal').val();
        var id_sucursal = $('#id_sucursal').val();
        var ubicacion = $('#ubicacion').val();
        var telefono = $('#telefono').val();

            if(sucursal==""||ubicacion==""||telefono==""){
                alert("dato en blanco");
                return false;
            }

        $.post("modificar2.php", {id_sucursal: id_sucursal,
            sucursal: sucursal,ubicacion:ubicacion,telefono:telefono});
        alert("actualizado Correctamente!");
        window.location="../../vista_sucursal.php";
    });
});
 