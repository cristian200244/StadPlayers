
  function myFunction() {

      var predeterminadas =  document.getElementById('EstadPre');
      var arquero =  document.getElementById('EstadArquero')
    
      if (predeterminadas.style.display === "none") {
        predeterminadas.style.display = "block";
      } else {
        x.style.display = "none";
      }
   

    }  

    

  
      d

  
   

   
   

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
    
   