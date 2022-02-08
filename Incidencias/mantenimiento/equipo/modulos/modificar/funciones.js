/* cargamos el menu select para el insertar  */
$(document).ready(function () {
    $.post("json_area.php", function (data) {
//        $("#tip_per_cli").html(data);
        $("#id_area").html(data);
        var id_area = $("#id_are2").val();
            $("#id_area option[value=" + id_area + "]").attr('selected', 'selected');//selecciona el combo...
    });
});
//$('#mensaje').addClass('bien').html('Registro completado con exito').show(200).delay(2500).hide(200);
$(document).ready(function () {
    $('#btn_actualizar').click(function (table) {
  
        var id_equipo = $('#id_equipo ').val();
        var nombre_equipo  = $('#nombre_equipo ').val();
         var id_area  = $('#id_area ').val();

            if(nombre_equipo==""||id_area==0){
                alert("dato en blanco");
                return false;
            }

        $.post("modificar2.php", {id_equipo: id_equipo,
            nombre_equipo: nombre_equipo,id_area:id_area});
        alert("actualizado Correctamente!");
        window.location="../../vista_equipos.php";
    });
});
 