/* cargamos el menu select para el insertar  */
$(document).ready(function () {
    $.post("../modificar/json_area.php", function (data) {
//        $("#tip_per_cli").html(data);
        $("#id_area").html(data);
//        var id_area = $("#id_are2").val();
//            $("#id_area option[value=" + id_area + "]").attr('selected', 'selected');//selecciona el combo...
    });
});
$(document).ready(function () {
    $('#registro_t').click(function (table) {
        var equipo = $('#equipo').val();
        var id_area = $('#id_area').val();
        
        if(equipo==""||id_area==0){
            alert("datos en blanco");
            return false;
        }
        $.post("nuevo2.php", {
            equipo: equipo,id_area:id_area
        });
        alert("Equipo Insertada Correctamente!!");
        window.location.href = "../../vista_equipos.php";
    });
});
