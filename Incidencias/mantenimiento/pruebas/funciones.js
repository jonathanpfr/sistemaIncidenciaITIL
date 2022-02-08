$(document).ready(function () {
    $('#boton_mensaje_nuevo').click(function (table) {
        var mensaje = $('#mensaje_nuevo').val();
//        alert("enviado");
        $.post("guardar.php", {
            mensaje: mensaje
        });
        $('#mensaje_nuevo').val("");
    });
});


$(document).ready(function () {
   
    $.post("monstrar_mensajes.php", function (data) {
       
        $("#mensajes").html(data);
        
    });


});

$(document).ready(function () {
    setInterval(function () {
        $("#mensajes").load('monstrar_mensajes.php');
    }, 500);

});