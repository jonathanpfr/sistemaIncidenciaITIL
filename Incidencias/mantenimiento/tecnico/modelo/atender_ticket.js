$(document).ready(function () {
    $('#observacion').click(function (table) {
        //actualizar tecnico...por en observacion
        //actualizar el ticket por en observacion

        //        $('#mensaje_login').addClass('bien').html('Usuario Correcto ......Bienvenido').hide(0);
        //        $('#mensaje_login').addClass('bien').html('Usuario Correcto ......Bienvenido').show(700).delay(2500).hide(200);

        var id_ticket = $('#id_ticket').val();
        var id_tecnico = $('#id_tecnico').val();

        $.post("verificar_observado.php", {id_tecnico: id_tecnico}, function (data) {
//            alert(data);
            if (data == 0) {
                alert("no puede observar este ticket porque actualmente tiene un  ticket en Observacion");
                return false;
            }
            else {
                $.post("atender/atender.php", {id_ticket: id_ticket,
                    id_tecnico: id_tecnico});
                alert("El ticket acaba ser cambiado al estado observado");

            }
        });




    });
});
 