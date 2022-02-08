
$(document).ready(function () {
    $('#registro_t').click(function (table) {
        var cargo = $('#cargo').val();

        $.post("nuevo2.php", {
            cargo: cargo
        });
        alert("cargo Insertada Correctamente!!");
        window.location.href = "../../vista_cargo.php";
    });
});