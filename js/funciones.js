
$('#btn-ing').click(() => { 

    let user = $('#user').val();
    let pass = $('#pass').val();

    let params = {
        "user":user,
        "pass":pass
    };

    $.post("./exe/comprobar_exe.php", params,
        function (d) {
            d = d.trim();
            console.log(d);
            if(d === "Error"){
                $('#message').attr('style', 'color:red');
                $('#message').html('Comprueba tu Usuario o Contraseña');
            }else if(d === "Ingresa"){
                window.location.href = "../manage_files.php";
            }
        },
        "HTML"
    );
});

$('#log-out').click(() => { 
    Swal.fire({
        title: "¿Salir?",
        icon: "warning",
        html: `Esta seguro que <strong>quiere salir</strong>`,

        showConfirmButton: true,
        confirmButtonText: "Cerrar sesion",
        confirmButtonColor: "red",

        showCancelButton: true,
        cancelButtonText: "Cancelar",
        cancelButtonColor: "grey"
    }).then((res) => {
        if(res.isConfirmed){
            window.location.href = "./php/exe/logOut_exe.php";
        }
    });
});

$('#btn-reg').click(() => { 
    let user = $('#user').val();
    let pass = $('#pass').val();
    let mail = $('#mail').val();

    let msg = '';

    if(user === '')
        msg = "usuario";
    else if(pass === '')
        msg = "password";
    else if(mail === '')
        msg = "mail";

    if(msg !== ''){
        Swal.fire({
            title: "¡ERROR!",
            html: `Debes llenar el campo <strong>${msg}</strong>`,
            icon: "error"
        });
        return;
    }

    let params = {
        "user": user,
        "pass": pass,
        "mail": mail
    };

    if(user !== '' && pass !== '' && mail !== ''){
        $.post("./exe/registrar_exe.php", params,
            (d) => {
                d = d.trim();
                if(d === 'Exitoso'){
                    Swal.fire({
                        title: "¡EXITOSO!",
                        html: `El usuario se creo satisfactoriamente.`,
                        icon: "success"
                    }).then((r) => {
                        if(r.isConfirmed){
                            window.location.href = "../index.php";
                        }
                    });
                }else if(d === 'Error'){
                    Swal.fire({
                        title: "¡ERROR!",
                        html: `¡UPS! Algo fallo.`,
                        icon: "error"
                    });
                }
            },
            "HTML"
        );
    }
});

$('.actualizar').click(function (e) { 
    window.location.reload();
});

$('.agregar').click(() => { 
    Swal.fire({
        title: "<strong>Subir archivo</strong>",
        icon: "info",
        html: `    
        <form action="./php/exe/agregar_ex.php" method="POST" id="form-1" enctype="multipart/form-data">
            <input type="file" name="uploadedFile" />
        </form>
        `,
        showCancelButton: true,
        cancelButtonText: "Cancelar",
        cancelButtonColor: "red"
      }).then((result) => {
        if(result.isConfirmed){
            $('#form-1').submit();
        }
    });
});

$('.newFolder').click(async () => { 
    Swal.fire({
        title: "¿Cómo se va a llamar la carpeta?",
        input: "text",
        showCancelButton: true,
        cancelButtonColor: "red",
        confirmButtonText: "Crear"
    }).then((r) => {
        if(r.isConfirmed){
            let params = {
                "carpeta": r.value
            };
            $.post("./php/exe/crear_carpeta.php", 
                params,
                (d) => {
                    if(d === 'Exito'){
                        Swal.fire({
                            icon: "success",
                            title: "¡EXITOSO!",
                            html: `<p>Carpeta creada con exito</p>`,
                            confirmButtonColor: "green"
                        });
                    }else{
                        Swal.fire({
                            icon: "error",
                            title: d,
                            confirmButtonColor: "red"
                        });
                    }
                },
                "HTML"
            );
        }
    });
});

$('.descargar').click(() => {
    window.location.href = "./php/exe/descargar_ex.php?archivo=backup_2024-07-20_subir_a_compensar.rar"
});

$('.log-in').click(function (e) { 
    window.location.href = "./php/log_in.php";
});


$(document).ready(function () {

    $('#user').prop('required', true);
    $('#pass').prop('required', true);
    $('#mail').prop('required', true);

    $('.txt-search').keypress((res) => { 
        console.log($(this).val());
    });


});