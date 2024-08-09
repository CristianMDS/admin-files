const eliminar = (id) => {
    let arr = id.split(" - ");
    let archivo = arr[0].trim();
    let codigo = arr[1].trim();
    let tipo = arr[2].trim();

    let new_f = "backup_"+archivo+"."+tipo;

    console.log(new_f);
    

    Swal.fire({
        title: "ALTO!",
        html: `¿Estas seguro de eliminar el archivo? <br /> y si lo <strong> Descargas </strong>`,
        icon: "warning",

        showDenyButton: true,
        denyButtonText: "Eliminar y Ya",
        denyButtonColor: "red",

        showConfirmButton: true,
        confirmButtonText: "Descargar",
        confirmButtonColor: "green",

        showCancelButton: true,
        cancelButtonText: "Cancelar",
        cancelButtonColor: "grey"
    }).then((res) => {
        if(res.isConfirmed){
            window.location.href = "./php/exe/descargar_ex.php?archivo="+new_f;
        }else if(res.isDenied){

            // No se aplica route por motivos de tiempo. Se agrega el codigo.

            let params = {
                "archivo" : new_f,
                "code": codigo,
                "route": "../../upload_files/"
            };

            $.ajax({
                type: "GET",
                url: "./php/exe/eliminar_ex.php",
                data: params,
                success: (banana) => {

                    let arr = banana.trim().split(" - ");
                    let ans = arr[0];
                    let archivo = arr[1];

                    if(ans === 'Listo'){
                        Swal.fire({
                            title: "¡ELIMINADO!",
                            icon: "info",
                            html: `<p> El archivo ${archivo} ya fue eliminado </p>`
                        }).then((e) => {
                            if(e.isConfirmed){
                                window.location.reload();
                            }
                        }); 
                    }else if(ans === 'Error') {
                        Swal.fire({
                            title: "¡UPS!",
                            icon: "warning",
                            html: `<p> El archivo ${archivo} ya no se puede eliminar quizas ya no existe </p>`
                        }).then((e) => {
                            if(e.isConfirmed){
                                window.location.reload();
                            }
                        }); 
                    }
                }
            });
        }
    });

}
// $('Eliminar').click(() =>{ 
    
// });

// $('#restablecer').click(() => { 
//     let mail = $('#mail').val();
//     let u = $('#user').val();

//     let params = {
//         "mail": mail,
//         "user": u
//     };

//     $.ajax({
//         type: 'GET',
//         url: './exe/restaurar_exe.php',
//         data: params,
//         dataType: 'HTML',
//         success: function (response) {
//             console.log(response.trim());
//         }
//     });
// });
    // $.post("./exe/restaurar_exe.php", params,
    //     function(respuesta) {
    //         console.log("regreso: "+respuesta);
            

            // if(res === 'Error-mail'){
            //     Swal.fire({
            //         title: "¡ERROR!",
            //         html: `El E-mail no coincide con el registrado`,
            //         icon: "error"
            //     });
            // }else if(res === 'Error-u'){
            //     Swal.fire({
            //         title: "¡ERROR!",
            //         html: `El Usuario no se encuentra registrado`,
            //         icon: "error"
            //     });
            // }
            // else if(res === 'Exito'){
            //     Swal.fire({
            //         title: "¡CODIGO!",
            //         html: `Se envio un codigo al e-mail <br> <strong> ${mail} </strong>`,
            //         icon: "success"
            //     }).then((r) => {
            //         if(r.isConfirmed){
            //             $.post("./exe/restaurar_exe.php", { "codigo": r.value() },
            //                 (res2) => {
            //                     if(res2 === 'Exito'){
                                    
            //                     }else if(res2 === 'Error'){
            //                         Swal.fire({
            //                             title: "¡ERROR!",
            //                             html: `Codigo incorrecto.`,
            //                             icon: "error"
            //                         });
            //                     }
            //                 },
            //                 "HTML"
            //             );
            //         }
            //     });
            // }
//         },
//         "HTML"
//     );
// });