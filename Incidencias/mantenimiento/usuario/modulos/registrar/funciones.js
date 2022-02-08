
$(document).ready(function () {
    $('#btn_registrar').click(function (table) {
        var razon_social = $('#razon_social').val();
        var telefono = $('#telefono').val();
        var direccion = $('#direccion').val();
        var usuario = $('#usuario').val();
        var password = $('#password').val();

        $.post("nuevo2.php", {
            razon_social: razon_social,
             telefono: telefono,
              direccion: direccion,
               usuario: usuario,
                password: password
               
        });
        alert("Usuario Registrado Correctamente!!");
        window.location.href = "../../vista_usuario.php";
    });
});