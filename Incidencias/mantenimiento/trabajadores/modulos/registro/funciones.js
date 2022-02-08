/* cargamos el menu select para el modificar  */
$(document).ready(function () {
//    alert('ddd');
    $.post("../relleno_combo/area/area.php", function (data) {
        $("#area").html(data);
    });

    $.post("../relleno_combo/cargo/cargo.php", function (data) {
        $("#cargo").html(data);
    });

    $.post("../relleno_combo/sucursal/sucursal.php", function (data) {
        $("#sucursal").html(data);
    });

    $.post("../relleno_combo/tipo_contrato/tipo_contrato.php", function (data) {
        $("#contrato").html(data);
    });
});

$(document).ready(function () {
    $('#registro_t').click(function (table) {
        var rsocial = $('#rsocial').val();
        var telefono = $('#telefono').val();
        var direccion = $('#direccion').val();
        var cargo = $('#cargo').val();
        var contrato = $('#contrato').val();
        var sucursal = $('#sucursal').val();
        var area = $('#area').val();
        var id_usuario = $('#id_usu').val();

        var usuario = $('#usuario').val();
        var password = $('#password').val();
        
        alert(usuario+"-"+password);
        $.post("nuevo2.php", {
            rsocial: rsocial,
            telefono: telefono,
            direccion: direccion,
            cargo: cargo,
            contrato: contrato,
            sucursal: sucursal,
            area: area,
            id_usuario: id_usuario,
            
            usuario:usuario,
            password:password
        });
        alert("Trabajador Insertado Correctamente!!");
        window.location.href = "../../vista_trabajadores.php";
    });
});