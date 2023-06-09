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

  
   

   
   

       function ConfirmNewUser(){
parameros={
    "id":id
}
$.ajax({
					
					data:parametros,
                    url: "../../Controllers/UsuarioController.php",
                    type:'POST',
                    beforSend: function(){},
					success: function(){
                        table.ajax.reload();
                        Swal.fire(
                            'Usuario Creado Satisfactoriamente!',
                            'Ahora podra Iniciar Sesión.',
                            'success'
                          )
                        }
                        });
       }
    


   function AlertaConfirmNewUser() {
    Swal.fire({
        title: 'Seguro desea crear este Usuario?',
        text: "Podra eliminarlo si lo desea despues!",
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, Crear!'
      }).then((result) => {
        if (result.isConfirmed) {
            ConfirmNewUser();
        }
      })
      




   }

    
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
    
   