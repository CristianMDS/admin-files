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

$('.eliminar').click(() => {

    let params = {
        "archivo" : "backup_Certificate.pdf",
        "route": "../../upload_files/"
    };

    $.ajax({
        type: "GET",
        url: "./php/exe/eliminar_ex.php",
        data: params,
        success: (banana) => {

            // console.log(banana);

            let arr = banana.split(" - ");
            let r = arr[0];
            let archivo = arr[1];

            if(r === 'Listo'){
                Swal.fire({
                    title: "<strong>El archivo</strong>",
                    icon: "info",
                    html: `<p> El archivo ${archivo} ya fue eliminado </p>`
                }); 
            }
        }
    });
});

$(document).ready(function () {
    $('.txt-search').keypress((res) => { 
        console.log($(this).val());
    });
});