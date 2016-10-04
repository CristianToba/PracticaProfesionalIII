
  
  

function ValidaCampo(campo){
  
      if(campo==nombre){
        if( formulario.txtNombre.value.length == 0){
  
              alert("Falta rellenar campo nombre");
  
  
         }else{
  
              validarcad =  formulario.txtNombre.value;
              var devuelto = ValidaCadena(validarcad);
  
              if(devuelto==false){
                  formulario.txtNombre.value='';
                  formulario.txtNombre.focus();
              }
         }
  
      }//Fin nombre
      if(campo==apellido){
            if( formulario.txtApellido.value.length == 0){
            alert("Falta rellenar campo apellido");
  
             }else{
                 validarcad =  formulario.txtApellido.value;
               var devuelto= ValidaCadena(validarcad);
               if(devuelto==false){
                  formulario.txtApellido.value='';
                  formulario.txtApellido.onfocus();
              }
             }
      }
      if(campo==NroDoc){
            if( formulario.NroDoc.value.length == 0){
            alert("Falta rellenar numero de DNI");
  
             }else{
                 validarca =  formulario.NroDoc.value;
                var devuelto= ValidaNumero(validarca);
                if(devuelto==false){
                  formulario.NroDoc.value='';
                  formulario.NroDoc.focus();
              }
             }
      }
       
      if(campo==Direccion){
            if( formulario.Direccion.value.length == 0){
            alert("Falta rellenar campo direccion");
  
             }else{
                 validarcad =  formulario.Direccion.value;
                 var devuelto=ValidaCadena(validarcad);
  
                 if(devuelto==false){
                  formulario.Direccion.value='';
                  formulario.Direccion.focus();
                 }
             }
      }
      if(campo==NroDir){
            if( formulario.NroDir.value.length == 0){
            alert("Falta rellenar campo numero de calle");
  
             }else{
  
                   validar =  formulario.NroDir.value;
                   var devuelto=ValidaNumero(validar);
  
                   if(devuelto==false){
                  formulario.NroDir.value='';
                  formulario.NroDir.focus();
                  }
             }
      }
      if(campo==Piso){
            if( formulario.Piso.value.length == 0){
            alert("Falta rellenar campo Piso");
  
             }else{
  
                   validar =  formulario.Piso.value;
                   var devuelto=ValidaNumero(validar);
  
                   if(devuelto==false){
                  formulario.Piso.value='';
                  formulario.Piso.focus();
                   }
             }
      }
      if(campo==CodigoPostal){
            if( formulario.CodigoPostal.value.length == 0){
            alert("Falta rellenar campo Codigo Postal");
  
             }else{
  
                   validar =  formulario.CodigoPostal.value;
                   var devuelto=ValidaNumero(validar);
  
                   if(devuelto==false){
                  formulario.CodigoPostal.value='';
                  formulario.CodigoPostal.focus();
                   }
             }
      }
      
       if(campo==CodAreaFijo){
            if(formulario.CodAreaFijo.value.length == 0){
            alert("Falta rellenar campo Codigo Area Telefono Fijo");
  
             }else{
  
                   validar = formulario.CodAreaFijo.value;
                   var devuelto=ValidaNumero(validar);
  
                   if(devuelto==false){
                  formulario.CodAreaFijo.value='';
                  formulario.CodAreaFijo.focus();
                   }
            }
      }
      
      if(campo==telefono){
            if(formulario.telf.value.length == 0){
            alert("Falta rellenar campo telefono");
  
             }else{
  
                   validar = formulario.telf.value;
                   var devuelto=ValidaNumero(validar);
  
                   if(devuelto==false){
                  formulario.telf.value='';
                  formulario.telf.focus();
                   }
            }
      }
      
      if(campo==CodAreaMovil){
            if(formulario.CodAreaMovil.value.length == 0){
            alert("Falta rellenar campo Codigo Area Celular");
  
             }else{
  
                   validar = formulario.CodAreaMovil.value;
                   var devuelto=ValidaNumero(validar);
  
                   if(devuelto==false){
                  formulario.CodAreaMovil.value='';
                  formulario.CodAreaMovil.focus();
                   }
            }
      }
      
      if(campo==TelMovil){
            if(formulario.TelMovil.value.length == 0){
            alert("Falta rellenar campo Celular");
  
             }else{
  
                   validar = formulario.TelMovil.value;
                   var devuelto=ValidaNumero(validar);
  
                   if(devuelto==false){
                  formulario.TelMovil.value='';
                  formulario.TelMovil.focus();
                   }
            }
      }
      
      if(campo==CodAreaUrg){
            if(formulario.CodAreaUrg.value.length == 0){
            alert("Falta rellenar campo Codigo Area Urgencia");
  
             }else{
  
                   validar = formulario.CodAreaUrg.value;
                   var devuelto=ValidaNumero(validar);
  
                   if(devuelto==false){
                  formulario.CodAreaUrg.value='';
                  formulario.CodAreaUrg.focus();
                   }
            }
      }
      
      if(campo==TelUrgencia){
            if(formulario.TelUrgencia.value.length == 0){
            alert("Falta rellenar campo Telefono Urgencia");
  
             }else{
  
                   validar = formulario.TelUrgencia.value;
                   var devuelto=ValidaNumero(validar);
  
                   if(devuelto==false){
                  formulario.TelUrgencia.value='';
                  formulario.TelUrgencia.focus();
                   }
            }
      }
      
      if(campo==Localidad){
            if(formulario.Localidad.value.length == 0){
            alert("Falta rellenar campo localidad");
  
             }else{
                 validarcad = formulario.Localidad.value;
                 var devuelto=ValidaCadena(validarcad);
  
                 if(devuelto==false){
                  formulario.Localidad.value='';
                  formulario.Localidad.focus();
                 }
            }
      }
      if(campo== Provincia){
            if(formulario.Provincia.value.length == 0){
            alert("Falta rellenar campo Provincia");
  
             }else{
                 validarcad = formulario.Provincia.value;
                 var devuelto=ValidaCadena(validarcad);
  
                 if(devuelto==false){
                  formulario.Provincia.value='';
                  formulario.Provincia.focus();
                 }
      }
      }
      
      if(campo== Pais){
            if(formulario.Nacionalidad.value.length == 0){
            alert("Falta rellenar campo Nacionalidad");
  
             }else{
                 validarcad = formulario.Nacionalidad.value;
                 var devuelto=ValidaCadena(validarcad);
  
                 if(devuelto==false){
                  formulario.Nacionalidad.value='';
                  formulario.Nacionalidad.focus();
                 }
      }
      }
      
      if(campo==email){
            if(formulario.email.value.length == 0){
            alert("Falta rellenar campo mail");
  
             }else{
  
                 email=formulario.email.value;
                 var devuelto=validarEmail(email);
  
                 if(devuelto==false){
                  formulario.email.value='';
                  formulario.email.focus();
                 }
             }
      }
    }
  

  /*FUNCION VALIDA NUMERO*/
      
      function ValidaNumero(e){
          
      tecla = (formulario.all) ? e.keyCode : e.which;
      if (tecla==8) return true;
      patron =/[0-9\s]/;
      te = String.fromCharCode(tecla);
      return patron.test(te);
      
      }
      //*** Fin del Codigo para Validar que sea un campo Numerico
  

  
      function ValidaCadena(e) {
          
      tecla = (formulario.all) ? e.keyCode : e.which;
      if (tecla==8) return true;
      patron =/[A-Za-z\s]/;
      te = String.fromCharCode(tecla);
      return patron.test(te);
  } 
 
  
      function validarEmail(correo) {
  
       var emailExp  = /^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/;
  
          if(emailExp.test(correo)){
  
           alert("Correo valido");
           return true;
          }else{
          alert("Correo invalido");
           return false;
          }
  }
  
