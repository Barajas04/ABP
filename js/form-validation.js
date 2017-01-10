
   $().ready(function () {
	   
    	 //Validation data form

    $("form[name='addActivity']").validate({ 
		
	   error: function(label) {
       $(this).addClass("error");
     },	
      rules: {
        nombre: {
              required: true,              
              minlength: 2     
            },
        entrenador: {
              required: true,
                 
            },
        duracion: {
              required: true,
              digits: true
              
               },
        hora: {
              required: true,              
              maxlength:5     
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
            }
      },

      messages: {
        nombre: {             
              required:"Introduce un nombre por favor",
              minlength:"M�nimo 2 caracteres por favor"
              },
        entrenador: {             
              required:"Selecciona un entrenador por favor",
             
              },
        duracion:{
              required:"Introduce una duracion por favor",
              digits:"Introduce un n�mero por favor"
              },
        hora:{
              required:"Introduce una hora por favor",                            
              maxlength:"Hora no v�lida(HH:MM)"   
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
      },
      submitHandler: function(form) {
      	  form.submit();
      }
    });
  });