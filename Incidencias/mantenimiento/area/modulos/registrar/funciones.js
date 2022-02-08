
$(document).ready(function () {
    $('#registro_t').click(function (table) {
        var area = $('#area').val();

        $.post("nuevo2.php", {
            area: area
        });
        alert("Area Insertada Correctamente!!");
        window.location.href = "../../vista_area.php";
    });
});