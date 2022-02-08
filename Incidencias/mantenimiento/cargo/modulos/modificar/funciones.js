/* 
btn_actualizar
 */


//$('#mensaje').addClass('bien').html('Registro completado con exito').show(200).delay(2500).hide(200);
$(document).ready(function () {
    $('#btn_actualizar').click(function (table) {
  
        var id_cargo = $('#id_cargo').val();
        var nombre_cargo = $('#nombre_cargo').val();

            if(nombre_cargo==""){
                alert("dato en blanco");
                return false;
            }

        $.post("modificar2.php", {id_cargo: id_cargo,
            nombre_cargo: nombre_cargo});
        alert("actualizado Correctamente!");
        window.location="../../vista_cargo.php";
    });
});
 