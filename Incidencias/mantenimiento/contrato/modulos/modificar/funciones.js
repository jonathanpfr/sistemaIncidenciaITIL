/* 
btn_actualizar
 */


//$('#mensaje').addClass('bien').html('Registro completado con exito').show(200).delay(2500).hide(200);
$(document).ready(function () {
    $('#btn_actualizar').click(function (table) {
  
        var id_contrato = $('#id_contrato ').val();
        var nombre_contrato  = $('#nombre_contrato ').val();

            if(nombre_contrato==""){
                alert("dato en blanco");
                return false;
            }

        $.post("modificar2.php", {id_contrato: id_contrato,
            nombre_contrato: nombre_contrato});
        alert("actualizado Correctamente!");
        window.location="../../vista_contrato.php";
    });
});
 