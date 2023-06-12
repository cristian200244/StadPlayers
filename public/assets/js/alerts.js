document.addEventListener("DOMContentLoaded", function (event) {
  //código a ejecutar cuando existe la certeza de que el DOM está listo para recibir acciones

  let predeterminadas = document.getElementById('EstadisticasPre');
  let arquero = document.getElementById('EstadArquero')
  let id_posicion = document.getElementById('id_posicion').value;


  if (id_posicion != 1)  {
        document.getElementById("TituloEstadJugador").textContent="Estadisticas del Jugador";
        predeterminadas.style.display = "block";
        arquero.style.display = "none";
    } else { //Cuando es portero
        document.getElementById("TituloEstadJugador").textContent="Estadisticas del Jugador";
        document.getElementById("TituloEstadArquero").textContent="Estadisticas del Portero";
        predeterminadas.style.display = "block";
        arquero.style.display = "block";
  }

});

  
   if (document.querySelector("#datos")) {
    let formulario=document.querySelector("#datos");
    formulario.onsubmit = function(e){
        e.preventDefault();
        fntGuardar();
    }
    
    async function fntGuardar(){
        // alert("la cagó parce, se le olvidó un dato");
        // return;

        let correo= document.querySelector('#email').value;
        let nickname= document.querySelector('#nickname').value;
        let password= document.querySelector('#password').value;
        
        try{ 
            if (correo == "" || nickname == "" ||password == ""){
                 
                Swal.fire(
                    'Todos los campos del formulario son obligarorios',
                    'Intentar De nuevo',
                    'error'
                    )}else{



                        
                        Swal.fire({
                            background:'#000000',
                            grow:'fullscreen',
                            // Backdrop:true,
                            // timer:5000,
                            // timerProgressBar:true,
                            title: '<b style="color:#03FFFF  ">Bienvenido!</b>',
                            html: '<b style="color:#FF5900 ">¡Ahora podrás iniciar sesión, haz click en OK!</b>',
                            textColor: '#3085d6',
                            imageUrl: 'https://mundoentrenamiento.com/wp-content/uploads/2021/01/big-data-en-el-futbol-moderno.jpg',
                            // icon: 'success',
                            imageWidth: '70%',
                            imageHeight: '90%',
                            imageAlt: 'Custom image',
                            // width: '70%',
                        }).then((result) => {
                            if (result.isConfirmed){
                                window.location.href = "../../index.php";
                                const data = new FormData(formulario);
                                let resp =fetch("../../Controllers/UsuarioController.php?c=1&id=",{
                                    
                                    method:'POST',
                                    mode:'cors',
                                    cache:'no-cache',
                                    body:data
                              
                                }) }
                                // Json= await rep.jason();
                                console.log(resp);
                            });
                    }
                    
                    

            }catch(err){
                alert("ocurrió un error: "+err);
                
            }
            
            
            // await
        }
    }



    
  
    

            
            
          
                    
          
         





      
   

// function ConfirmNewUser(id) {
//     let formulario = document.getElementById('datos');
//     formulario.submit()
//    let correo= document.getElementById('email').value
//    let nickname= document.getElementById('nickname').value

//    let password= document.getElementById('password').value
// // document.datos.correo= correo
//    alert(correo);
//    if (!empty(correo) && !empty(nickname) && !empty(password)){

//        Swal.fire({
//            title: 'Seguro desea crear este Usuario?',
//            text: "Podra eliminarlo si lo desea despues!",
//            icon: 'info',
//            showCancelButton: true,
//            confirmButtonColor: '#3085d6',
//            cancelButtonColor: '#d33',
//            confirmButtonText: 'Sí, Crear!'
//         }).then((result) => {
//             if (result.isConfirmed) {
//                 $.ajax({
//                     url: "../../Controllers/UsuarioController.php?c=1&id="+correo+ nickname+password,
//                     success: function (r) {
                        
//                     }
//                 });
//             }
//             return false;
//         })
//     }
      
//    }

function AlertDelete(id) {

    Swal.fire({
        title: 'Está seguro de eliminar el registro?',
        text: "No podrás revertir ésto!",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "../Controllers/calculadoraController.php?c=2&id=" + id,
                success: function (r) {
                    document.location.reload();
                }
            });
        }
        return false;
    });

};
   
   


    


    
    // }

   
    // $(function(){
	// 	$('#register').click(function(e){

	// 		var valid = this.form.checkValidity();

	// 		if(valid){


			
	// 		var correo 		= $('#email').val();
	// 		var nickname = $('#nickname').val();
	// 		var password 	= $('#password').val();
			
			

	// 			e.preventDefault();	

	// 			$.ajax({
	// 				type: 'POST',
    //                 url: "../../Controllers/UsuarioController.php",
	// 				data: StoreUser(),
	// 				success: function(data){
	// 				Swal.fire({
	// 							'title': '¡Mensaje!',
	// 							'text': data,
    //                             'icon': 'success',
    //                             'showConfirmButton': 'false',
    //                             'timer': '1500'
	// 							}).then(function() {
    //             window.location = "../../index.php";
    //         });
							
	// 				} ,
                    
	// 				error: function(data){
	// 					Swal.fire({
	// 							'title': 'Error',
	// 							'text': data,
	// 							'icon': 'error'
	// 							})
	// 				}
	// 			});

				
	// 		}else{
				
	// 		}

			



	// 	});		

		
	// });
    
   