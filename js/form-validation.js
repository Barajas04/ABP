   $(document).ready(function () {

	   
    	 //Validation data form

    $("#form").validate({ 
		
	   error: function(label) {
       $(this).addClass("error");
     },	
      rules: {
		tabla: {
			required: true		
			},
		  
		deportista: {
			required: true		
			},
		  
        nombre: {
            required: true,              
            minlength: 2     
            },
        entrenador: {
            required: true,
                 
            },
        duracion: {
            required: true,
            maxlength:8,
			minlength: 8  
              
               },
        hora: {
            required: true,              
            maxlength:8,
			minlength: 8  			  
            },
		plazas: {
            required: true,
			digits: true,              
            maxlength:2,
			max:40
            },          			
        lugar: {
              required: true,
			  minlength:2 
            },
        decripcion: {              
			  minlength:2			  
            },
		comentario: {			
			  minlength:2			  
            }
      },

      messages: {
		 tabla: {             
            required:"Selecciona una tabla por favor"            
            },
		deportista: {             
            required:"Selecciona un deportista por favor"            
            },
		  
        nombre: {             
            required:"Introduce un nombre por favor",
            minlength:"M�nimo 2 caracteres por favor"
            },
        entrenador: {             
            required:"Selecciona un entrenador por favor",
             
              },
        duracion:{
            required:"Introduce una duracion por favor",
            maxlength:"Formato no valido (HH:MM:SS)",
			minlength:"Formato no valido (HH:MM:SS)"
            },
        hora:{
            required:"Introduce una hora por favor",                            
            maxlength:"Formato no valido (HH:MM:SS)",
			minlength:"Formato no valido (HH:MM:SS)"			  
            },
		plazas:{
            required:"Introduce un numero de plazas por favor",                            
            maxlength:"M�ximo 2 numeros por favor",
			digits:"Introduce un n�mero por favor",
			max:"M�ximo 40 plazas"
            },	  
        lugar: {             
            required:"Introduce un lugar por favor",
            minlength:"Al menos 2 letras por favor"
            },
        decripcion: {      
            minlength:"Al menos 2 letras por favor"
            },
		comentario: {      
            minlength:"Al menos 2 letras por favor"
            },
      },
                
          submitHandler: function(form) {
			  $("#form").prop("disabled", true); 
                            // do other things for a valid form
                            form.submit();
                         }

        
    });
  });