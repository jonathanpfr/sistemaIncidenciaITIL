
$(document).ready(function () {
    $('#registro_t').click(function (table) {
        var incidencia = $('#incidencia').val();
        
        if(incidencia==""){
            alert("dato en blanco");
            return false;
        }

        $.post("nuevo2.php", {
            incidencia: incidencia
        });
        alert("incidencia Insertada Correctamente!!");
        window.location.href = "../../vista_incidencia.php";
    });
});