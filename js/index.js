/**
 * Created by AlbaLuis on 06/11/2018.
 */
$(document).ready(function () {
    $.post("servicios/index.php",
        {
            authkey: localStorage.getItem("authkey")
        },
        function (data) {
            // alert("Data: " + data.succes);
            if (data.succes) {
                //codigo cuando entra correctamente
            } else {
                // alert("Error:   " + data.msg);
                location.href = "http://localhost/ProyectoLogin/login.html";
            }
        }, 'json');

    $("#logout").click(function () {
        var confirmar = confirm("¿Quieres cerrar sesión?");
        if (confirmar == true) {
            localStorage.removeItem("authkey");
            location.href = "http://localhost/ProyectoLogin/login.html";
        }
    });

});
