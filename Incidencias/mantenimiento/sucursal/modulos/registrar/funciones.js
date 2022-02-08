
$(document).ready(function () {
    $('#registro_t').click(function (table) {
        var nombre_sucursal = $('#nombre_sucursal').val();
         var ubicacion = $('#ubicacion').val();
          var telefono = $('#telefono').val();
          
        $.post("nuevo2.php", {
            nombre_sucursal: nombre_sucursal,
            ubicacion:ubicacion,
            telefono:telefono
        });
        alert("Sucursal Insertada Correctamente!!");
        window.location.href = "../../vista_sucursal.php";
    });
});