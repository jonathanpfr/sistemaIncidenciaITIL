$(document).ready(function () {
    $('#enviar').click(function (table) {
        $('#mensaje').addClass('bien').html('Usuario Correcto... Bienvenido').show(700).delay(2500).hide(200);
    });
});

$(document).ready(function () {
    var table = $('#example').DataTable({
        "order": [[2, 'desc']]
    });
});

$(document).ready(function () {
    setInterval(function () {
        $("#actualizar").load('actualizar.php');
    }, 5000);

    setInterval(function () {
        $("#actualizar").load('actualizar_terminar.php');
    }, 5000);

});