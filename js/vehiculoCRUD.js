/**
 * Created by AlbaLuis on 17/11/2018.
 */
$(document).ready(function () {
    $("#btnLogin").click(function () {
        $.post("servicios/vehiculoCRUD.php",
            {
                email: $('#email').val(),
                password: $('#password').val()
            },
            function (data) {
                // alert("Data: " + data.succes);
                if (data.succes) {
                    localStorage.setItem("authkey", data.authkey);
                    // console.log(localStorage.getItem("authkey"));
                    alert("Exito al logearse " + data.msg);
                    location.href = "http://localhost/ProyectoLogin/index.html";
                } else {
                    $("#respuesta").show();
                    $("#respuesta").text(data.msg);
                    $("#respuesta").addClass('btn-danger');
                    $("#respuesta").removeClass('btn-success');
                }
            }, 'json');
    });
});