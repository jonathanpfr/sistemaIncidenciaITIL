/* 
 btn_actualizar
 */


//$('#mensaje').addClass('bien').html('Registro completado con exito').show(200).delay(2500).hide(200);
$(document).ready(function () {
    $('#btn_actualizar').click(function (table) {

        var razon_social = $('#razon_social').val();
        var id_usuario = $('#id_usuario').val();
        var telefono = $('#telefono').val();
        var direccion = $('#direccion').val();
        var usuario = $('#usuario').val();
        var password = $('#password').val();
//        var nombre_area = $('#nombre_area').val();



        if (razon_social == "" || telefono == "" || direccion == "" || usuario == "" || password == "") {
            alert("dato en blanco");
            return false;
        }

        $.post("modificar2.php", {
            razon_social: razon_social,
            telefono: telefono, 
            id_usuario: id_usuario, 
            direccion: direccion, 
            usuario: usuario,
            password: password});
        alert("actualizado Correctamente!");
        window.location = "../../vista_usuario.php";
    });
});
 