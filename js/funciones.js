$(document).ready((function() {
    var PracticaProfIII = {};

    (function(app) {

        app.init = function() {
            app.buscarAfiliados();
            app.bindings();
        };

       
        app.bindings = function() {
              $("#agregarPersona").on('click', function(event) {
                $("#id").val(0);
                $("#tituloModal").html("Nueva Persona");
                $("#modalPersona").modal({show: true});
            });
            };
        
        app.buscarAfiliados = function() {
          
             var url = "http://localhost/PracticaProfesionalIII/js/generarJSONAfiliado.php";
             var consola = $('#divAfiliado');
            $.ajax({
                url: url,
                type: "GET",
                dataType: "JSON",
                
                beforeSend: function(){
                    consola.html('Espere por favor...');
                },
                success: function(datosRecibidos) {
                    consola.html('');
                    
                    app.rellenarTabla(datosRecibidos);
                },
                error: function() {
                    
                    alert('error en servidor - buscar persona');
                }
            });
        };
        
        app.rellenarTabla = function (datosRecibidos) {
            
            var cuerpo;
            $nroPers=0;
            var tbAfiliado = $('#cuerpoTabla');
            tbAfiliado.html('');
            for(var i=0;i < datosRecibidos.length; i++ ){
            $nroPers=datosRecibidos[i].dni;
            $fecha=datosRecibidos[i].FNac.valueOf().date.toString().substring(0,10).replace("-","/");
            
            $direccion= ObtenerDireccion(datosRecibidos[i].direccion);                        
            cuerpo += "<tr><td>"+datosRecibidos[i].id+"</td><td>"+datosRecibidos[i].dni+"</td><td>"+datosRecibidos[i].nombre+"</td><td>"+datosRecibidos[i].apellido+"</td><td>"+datosRecibidos[i].mail+"</td><td>"+$fecha+"</td><td>"+datosRecibidos[i].nacionalidad+"</td><td>"+datosRecibidos[i].EstCivil+"</td><td>"+$direccion+"</td><td>"+datosRecibidos[i].telUrgencia+"</td><td>"+datosRecibidos[i].celular+"</td><td>"+datosRecibidos[i].obraSocial+"</td><td>"+datosRecibidos[i].Habilitado+"<td><a href='../Funciones/ValidarOpcion.php?parametro=7&dniAfiliado="+$nroPers+"'><span class='glyphicon glyphicon-trash'></span></td><td><a href='../Funciones/ValidarOpcion.php?parametro=8&dniAfiliado="+$nroPers+"'><span class='glyphicon glyphicon-pencil'></span></a></td></tr>";
            
        }      

            tbAfiliado.append(cuerpo);

};
    
        app.limpiarModal = function(){//funcion para limpiar el modal de profesores
            $("#id").val(0);
            $("#nombre").val('');
            $("#apellido").val('');
          
        };
        
        app.init();

    })(PracticaProfIII);


}));
