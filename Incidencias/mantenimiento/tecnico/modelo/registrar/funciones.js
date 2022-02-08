
$(document).ready(function () {
    $('#registrar_t').click(function (table) {
        var rsocial = $('#rsocial').val();
        var telefono = $('#telefono').val();
        var direccion = $('#direccion').val();

        var correo = $('#correo').val();
  
        
        var usuario = $('#usuario').val();
        var password = $('#password').val();
        
        if(rsocial==""||telefono==""||direccion==""||correo==""||usuario==""||password==""){
            alert("Hay datos vacios");
            return false;
        }
        

        $.post("registrar2.php", {
            rsocial: rsocial,
            telefono: telefono,
            direccion: direccion,
            correo: correo,
             usuario: usuario,
            password: password

        });
        alert("Tecnico Registrado Correctamente!!");
        window.location.href = "../../vista_tecnico_usuario.php";
    });
});