


if (document.querySelector("#datos")) {
    let formulario = document.querySelector("#datos");
    formulario.onsubmit = function (e) {
        e.preventDefault();
        fntGuardar();
    }

    async function fntGuardar() {
        // alert("la cagó parce, se le olvidó un dato");
        // return;

        let correo = document.querySelector('#email').value;
        let nickname = document.querySelector('#nickname').value;
        let password = document.querySelector('#password').value;

        try {
            if (correo == "" || nickname == "" || password == "") {

                Swal.fire(
                    'Todos los campos del formulario son obligarorios',
                    'Intentar De nuevo',
                    'error'
                )
            } else {
                Swal.fire({
                    background: '#000000',
                    // grow:'fullscreen',
                    // Backdrop:true,
                    // timer:5000,
                    // timerProgressBar:true,
                    title: '<b style="color:#03FFFF  ">Bienvenido!</b>',
                    html: '<b style="color:#2ECC71  ">¡Ahora podrás iniciar sesión, haz click en OK!</b>',
                    textColor: '#3085d6',
                    imageUrl: 'https://mundoentrenamiento.com/wp-content/uploads/2021/01/big-data-en-el-futbol-moderno.jpg',
                    // icon: 'success',
                    imageWidth: '70%',
                    imageHeight: '60%',
                    imageAlt: 'Custom image',
                    // width: '70%',
                }).then((result) => {
                    if (result.isConfirmed) {
                        const data = new FormData(formulario);

                        console.log(data);
                        let resp = fetch("../../Controllers/UsuarioController.php?c=1&id=", {
                            
                            method: 'POST',
                            mode: 'cors',
                            cache: 'no-cache',
                            body: data
                            
                        })
                        window.location.href = "../../index.php";
                    }
                    // Json= await rep.jason();
                    console.log(resp);
                });
            }



        } catch (err) {
            alert("ocurrió un error: " + err);

        }


        // await
    }
}



function EliminarReporte(id) {
    // alert(id);

    Swal.fire({
        title: '¿Desea eliminar éste reporte?',
        text: "¡Esta acción será definitiva!",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar!'
    })
        .then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'El Reporte ha sido eliminado definitivamente',
                    showConfirmButton: false,
                })
                    .then(() => {

                        $.ajax({
                            url: "../../Controllers/GenerarReportesController.php?c=2&id=" + id,
                            success: function (r) {
                                document.location.reload();
                            }
                        });


                    })
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal.fire('¡Reporte No Eliminado!', '', 'info')
            }


        });
    return false;
    timer: 2800
}







