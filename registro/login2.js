$(document).ready(function () {
    $('#contenido').submit(function (e) {
        e.preventDefault();
        var nombre = $('#nombredeusuario').val();
        var pass = $('#contraseña').val();
        
        $.ajax({
            type: "POST",
            url: 'formulario.php',
            cache:false,
            data: {
                nombre: nombre,
                pass: pass
            },
            success: function (data)
            {
             
                if (data == "bienvenido") {
                    
                    location.href="bienbenida.php";
            
            } else {
                    alert('Datos incorrectos. Por favor, verifique su nombre de usuario y contraseña.');
                }
            }
    });
});
});
