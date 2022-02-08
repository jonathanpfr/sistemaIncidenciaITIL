
$(document).ready(function () {
    $('#actualizar_t').click(function (table) {
        var rsocial = $('#rsocial').val();
        var telefono = $('#telefono').val();
        var direccion = $('#direccion').val();

        var correo = $('#correo').val();
        var id_tecnico=$('#id_tecnico').val();
        
        var usuario = $('#usuario').val();
        var password = $('#password').val();
        
        if(rsocial==""||telefono==""||direccion==""||correo==""||usuario==""||password==""){
            alert("Hay datos vacios");
            return false;
        }
        

        $.post("modificar2.php", {
            rsocial: rsocial,
            telefono: telefono,
            direccion: direccion,
            correo: correo,
            id_tecnico: id_tecnico,
            usuario: usuario,
            password: password

        });
        alert("Tecnico Modificado Correctamente!!");
        window.location.href = "../../vista_tecnico_usuario.php";
    });
});