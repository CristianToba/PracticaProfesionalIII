
$(document).ready((function () {
    var PracticaProfIII = {};

    (function (app) {

        app.init = function () {
            app.buscarAfiliados();
            app.bindings();
        };


        app.bindings = function () {
            $("#agregarPersona").on('click', function (event) {
                $("#id").val(0);
                $("#tituloModal").html("Nueva Persona");
                $("#modalPersona").modal({show: true});
            });
        };

        app.buscarAfiliados = function () {

            var url = "http://localhost/PracticaProfesionalIII/js/generarJSONAfiliado.php";
            var consola = $('#divAfiliado');
            $.ajax({
                url: url,
                type: "POST",
                dataType: "JSON",
                beforeSend: function () {
                    consola.html('Espere por favor...');
                },
                success: function (datosRecibidos) {
                    consola.html('');

                    app.rellenarTabla(datosRecibidos);
                },
                error: function () {

                    alert('Ha surgido un error');
                }
            });
        };

        app.rellenarTabla = function (datosRecibidos) {

            var cuerpo = "";
            $nroPers = 0;
            var tbAfiliado = $('#cuerpoTabla');
            tbAfiliado.html('');

            for (var i = 0; i < datosRecibidos.length; i++) {
                $nroPers = datosRecibidos[i].dni;
                //$fecha = datosRecibidos[i].FNac.valueOf().date.toString().substring(0, 10).replace("-", "/");
                
                if(datosRecibidos[i].Habilitado==1){
                    $estadoPers='NO';
                    
                }else{
                    
                    $estadoPers='SI';
                }
                // app.ObtenerDireccion(datosRecibidos[i].direccion, function (direccion) {
                //   domicilio = direccion;
                // alert(direccion);
                //return domicilio;
                //});
                cuerpo += "<tr><td>" + datosRecibidos[i].id + "</td><td>" + datosRecibidos[i].dni + "</td><td>" + datosRecibidos[i].nombre + "</td><td>" + datosRecibidos[i].apellido + "</td><td>" + datosRecibidos[i].mail + "</td><td>" + datosRecibidos[i].fechaNac + "</td><td>" + datosRecibidos[i].nacionalidad + "</td><td>" + datosRecibidos[i].EstCivil + "</td><td>" + datosRecibidos[i].direccion + "</td><td>" + datosRecibidos[i].telUrgencia + "</td><td>" + datosRecibidos[i].celular + "</td><td>" + datosRecibidos[i].obraSocial + "</td><td>" + $estadoPers + "<td><a href='../Funciones/ValidarOpcion.php?parametro=7&dniAfiliado=" + $nroPers + "'><span class='glyphicon glyphicon-trash'></span></td><td><a href='../Funciones/ValidarOpcion.php?parametro=8&dniAfiliado=" + $nroPers + "'><span class='glyphicon glyphicon-pencil'></span></a></td></tr>";
            }

            tbAfiliado.append(cuerpo);

        };
//        app.ObtenerDireccion = function (datoDireccion, miLlamada) {
//
//            var codDireccion = datoDireccion;
//            var funcion = "dir";
//            var domicilio = "";
//
//            //var sql = "SELECT calle+' '+cast(numero as varchar(6)) as direccion FROM DIRECCION WHERE idDireccion="+codDireccion+"";
//
//            $.ajax({url: 'http://localhost/PracticaProfesionalIII/Funciones/Consultas.php?funcion=' + funcion + '&direccion=' + codDireccion,
//                type: 'POST',
//                success: function (respuesta) {
//                    domicilio = respuesta;
//
//                    miLlamada(domicilio);
//                },
//                error: function () {
//                    alert("No se encuentra la direccion solicitada");
//                }
//            });
//
//        };

        app.limpiarModal = function () {//funcion para limpiar el modal de profesores
            $("#id").val(0);
            $("#nombre").val('');
            $("#apellido").val('');

        };

        app.init();

    })(PracticaProfIII);


}));
