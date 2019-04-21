/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Si he visto más lejos es porque estoy sentado sobre los hombros de gigantes.  \\
/** Valida los campos requeridos en un formulario
 * Returns flag Devuelve true si el form cuenta con los datos mínimos requeridos
 */
function validarForm(idForm){
	var form=$('#'+idForm)[0];
	for (var i = 0; i < form.length; i++) {
		var input = form[i];
		if(input.required && input.value==""){
			return false;
		}
	}
	return true;
}

////////// JUEGO \\\\\\\\\\
function preJuegoInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/controller/juego/JuegoInsert.php',postJuegoInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postJuegoInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
                     if(result=="true"){            
 			alert("Juego registrado con éxito");
                     }else{
                        alert("Hubo un errror en la inserción ( u.u)\n"+result);
                     } 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preJuegoList(container){
     //Solicite información del servidor
     cargaContenido(container,'JuegoList.html'); 
 	enviar("",'../back/controller/juego/JuegoList.php',postJuegoList); 
}

 function postJuegoList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
         var json=JSON.parse(result);
         if(json[0].msg=="exito"){

            for(var i=1; i < Object.keys(json).length-1; i++) {   
                var Juego = json[i];
                //----------------- Para una tabla -----------------------
                document.getElementById("JuegoList").appendChild(createTR(Juego));
                //-------- Para otras opciones ver htmlBuilder.js ---------
            }
         }else{
            alert(json[0].msg);
         }
     }else{
         alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// JUEGOJUGADOR \\\\\\\\\\
function preJuegojugadorInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/controller/juegojugador/JuegojugadorInsert.php',postJuegojugadorInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postJuegojugadorInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
                     if(result=="true"){            
 			alert("Juegojugador registrado con éxito");
                     }else{
                        alert("Hubo un errror en la inserción ( u.u)\n"+result);
                     } 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preJuegojugadorList(container){
     //Solicite información del servidor
     cargaContenido(container,'JuegojugadorList.html'); 
 	enviar("",'../back/controller/juegojugador/JuegojugadorList.php',postJuegojugadorList); 
}

 function postJuegojugadorList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
         var json=JSON.parse(result);
         if(json[0].msg=="exito"){

            for(var i=1; i < Object.keys(json).length-1; i++) {   
                var Juegojugador = json[i];
                //----------------- Para una tabla -----------------------
                document.getElementById("JuegojugadorList").appendChild(createTR(Juegojugador));
                //-------- Para otras opciones ver htmlBuilder.js ---------
            }
         }else{
            alert(json[0].msg);
         }
     }else{
         alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// JUGADOR \\\\\\\\\\
function preJugadorInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/controller/jugador/JugadorInsert.php',postJugadorInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postJugadorInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
                     if(result=="true"){            
 			alert("Jugador registrado con éxito");
                     }else{
                        alert("Hubo un errror en la inserción ( u.u)\n"+result);
                     } 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preJugadorList(container){
     //Solicite información del servidor
     cargaContenido(container,'JugadorList.html'); 
 	enviar("",'../back/controller/jugador/JugadorList.php',postJugadorList); 
}

 function postJugadorList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
         var json=JSON.parse(result);
         if(json[0].msg=="exito"){

            for(var i=1; i < Object.keys(json).length-1; i++) {   
                var Jugador = json[i];
                //----------------- Para una tabla -----------------------
                document.getElementById("JugadorList").appendChild(createTR(Jugador));
                //-------- Para otras opciones ver htmlBuilder.js ---------
            }
         }else{
            alert(json[0].msg);
         }
     }else{
         alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// TIPO \\\\\\\\\\
function preTipoInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/controller/tipo/TipoInsert.php',postTipoInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postTipoInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
                     if(result=="true"){            
 			alert("Tipo registrado con éxito");
                     }else{
                        alert("Hubo un errror en la inserción ( u.u)\n"+result);
                     } 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preTipoList(container){
     //Solicite información del servidor
     cargaContenido(container,'TipoList.html'); 
 	enviar("",'../back/controller/tipo/TipoList.php',postTipoList); 
}

 function postTipoList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
         var json=JSON.parse(result);
         if(json[0].msg=="exito"){

            for(var i=1; i < Object.keys(json).length-1; i++) {   
                var Tipo = json[i];
                //----------------- Para una tabla -----------------------
                document.getElementById("TipoList").appendChild(createTR(Tipo));
                //-------- Para otras opciones ver htmlBuilder.js ---------
            }
         }else{
            alert(json[0].msg);
         }
     }else{
         alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

//That´s all folks!