/* 
btn_actualizar
 */


//$('#mensaje').addClass('bien').html('Registro completado con exito').show(200).delay(2500).hide(200);
$(document).ready(function () {
    $('#btn_actualizar').click(function (table) {
  
        var id_area = $('#id_area').val();
        var nombre_area = $('#nombre_area').val();

            if(nombre_area==""){
                alert("dato en blanco");
                return false;
            }

        $.post("modificar2.php", {id_area: id_area,
            nombre_area: nombre_area});
        alert("actualizado Correctamente!")
        window.location="../../vista_area.php";
    });
});
 